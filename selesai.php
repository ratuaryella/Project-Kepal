<?php 
require_once("cart.php"); 
require_once("header.php");
require "RSA.php";
if (!isset($_SESSION['masuk'])) {
	echo "<script>alert('Anda harus login untuk memesan produk ini!'); window.location = 'login.php'</script>";
}
?>
<div id="page-title">
	<div id="page-title-inner">
		<div class="container">
			<h2><i class="ico-usd ico-white"></i>Checkout Keranjang</h2>
		</div>
	</div>	
</div>
<div id="wrapper">
	<div class="container">
        <div class="table-responsive">
            <div class="title"><h3>Checkout Selesai</h3></div>
            <div class="hero-unit">Terima kasih Anda sudah berbelanja di Toko Online kami dan berikut ini adalah data yang perlu Anda catat.</div>
            <div class="hero-unit">
    <?php
			if($_POST['finish']){
				$id_users = encrypt($_POST['id_users']);
				$id_produk = $_POST['id_produk'];
				$nama = $_POST['nama'];
				$alamat = encrypt($_POST['alamat']);
				$email = encrypt($_POST['email']);
				$nohp = encrypt($_POST['nohp']);
				$jumlah = $_POST['jumlah'];
				$total = $_POST['total'];
				
				if ($_FILES['bukti']['name']) {
					move_uploaded_file($_FILES['bukti']['tmp_name'], 'pembayaran/'.$nama.'.jpg');
					$bukti = 'pembayaran/'.$nama.'.jpg';
				}
				if(!$alamat){
					echo "<script>alert('Alamat belum diisi $nama!'); window.location = 'checkout.php?total=$total&id_produk=$id_produk&jumlah=$jumlah&id_users=$id_users&nama=$nama'</script>";
				}elseif (!$email) {
					echo "<script>alert('Email belum diisi $nama!'); window.location = 'checkout.php?total=$total&id_produk=$id_produk&jumlah=$jumlah&id_users=$id_users&nama=$nama'</script>";
				}elseif (!$nohp) {
					echo "<script>alert('No HP belum diisi $nama!'); window.location = 'checkout.php?total=$total&id_produk=$id_produk&jumlah=$jumlah&id_users=$id_users&nama=$nama'</script>";
				}elseif (!$bukti) {
					echo "<script>alert('Bukti pembayaran belum diupload $nama!'); window.location = 'checkout.php?total=$total&id_produk=$id_produk&jumlah=$jumlah&id_users=$id_users&nama=$nama'</script>";
				}
				$sql  = mysqli_query($koneksi, "INSERT INTO pemesanan VALUES('', '$id_users', '$nama', '$alamat', '$email', '$nohp', '$id_produk', '$jumlah', '$total', '$bukti', NOW())");
				$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
				$data = mysqli_fetch_array($query);
				$stock = $data['qty']-$jumlah;
				$q_stock= mysqli_query($koneksi, "UPDATE produk set qty='$stock' where id_produk='$id_produk'");
				if (!$sql) {
					echo 'Gagal Checkout!';
            	}else{
            		echo 'Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank BNI cabang Balige dengan nomor rekening 123-234-56347-8 atas nama Pak Diva Ulos.<br>';
					echo 'Dan barang akan kami kirim ke alamat di bawah ini:<br><br>';
					echo 'Nama Lengkap : '.$_SESSION['nama'].'<br>';
					echo 'Alamat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : '.$_POST['alamat'].'<br>';
	                echo 'No Telepon&nbsp&nbsp&nbsp&nbsp : '.$_POST['nohp'].'<br>';
	                echo 'Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : '.$_POST['email'].'<br>';
	                echo 'Total Belanja&nbsp : Rp. '.number_format($_POST['total']).',-<br>';
            	}
			}else{
				header("Location: index.php");
			}
			?>
            </div>
		</div>
	</div>
<?php
require_once ('footer.php');
?>
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>
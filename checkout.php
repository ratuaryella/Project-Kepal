<?php require_once("cart.php"); 
$query = mysqli_query($koneksi, "SELECT * FROM produk");
$data = mysqli_fetch_array($query);
$id_produk = $data['id_produk'];
$stock = $_GET['jumlah'];
if (!isset($_SESSION['masuk'])) {
	echo "<script>alert('Anda harus login untuk memesan produk ini!'); window.location = 'login.php'</script>";
}elseif ($stock > $data['qty']) {
	echo "<script>alert('Jumlah melebihi stock!'); window.location = 'detail.php?kd=$id_produk'</script>";
}elseif (!isset($_GET['total'])) {
	echo "<script>alert('Anda belum memilih produk!'); window.location = 'produk.php'</script>";
}else{
};
?>
<!DOCTYPE html>	
	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-usd ico-white"></i>Checkout Keranjang</h2>
			</div>
		</div>	
	</div>
	<?php
    	$id = $_SESSION['masuk'];
		$bayar = mysqli_query($koneksi, "SELECT * FROM users WHERE $id");
		$b = mysqli_fetch_assoc($bayar);
	?>
	<div id="wrapper">
		<div class="container">
            <div class="table-responsive">
	            <div class="title"><h3>Form Checkout</h3></div>
	            <div class="hero-unit">Harap isi form ini sesuai dengan tujuan pengiriman</div>
	            <div class="hero-unit">Silahkan Transfer kerekening ini 123-456-789 Bank BNI a/n Darwin Siahaan</div>
	            <div class="hero-unit">Harap upload bukti pembayaran sesuai dengan total belanja Anda!</div>
	            <div class="hero-unit">Total Belanja Anda Rp. <?php echo number_format($_GET['total']); ?>,00</div> 
				<form id="formku" action="selesai.php" method="POST" enctype="multipart/form-data">
				    <table class="table table-condensed">
				    <input type="hidden" name="id_users" value="<?php echo $_GET['id_users']; ?>">
				    <input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
				    <input type="hidden" name="id_produk" value="<?php echo $_GET['id_produk']?>">
				    <input type="hidden" name="jumlah" value="<?php echo $_GET['jumlah']?>">
				    <input type="hidden" name="nama" value="<?php echo $_GET['nama']?>">
				    	<tr>
				    	<td>Nama</td>
				    	<td>:</td>
					   	<td><?php echo $_SESSION['nama']  ?> </td>  
					   	</tr>
					   	<td>Alamat</td>
				    	<td>:</td>
					   	<td><input type="text" name="alamat"></td>
					   	<tr>
					   	<td>Email</td>
				    	<td>:</td>
					   	<td><input type="text" name="email"></td>
					   	</tr>
					   	<tr>
					   	<td>NO HP</td>
				    	<td>:</td>
					   	<td><input type="text" name="nohp"></td>
					   	</tr>
					   	<tr>
	        			<td>Bukti Pembayaran</td>
	        			<td>:</td> 
	        			<td><input type="file" name="bukti"></td>
					    </tr>
					   	<tr>
	        			<td><input type="submit" value="Pesan Sekarang" name="finish"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a></td>
	        			</tr>
	   				 </table>
	    		</form>
            </div>
		</div>	
	</div>			
<?php
include 'footer.php';
?>

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

</body>
</html>

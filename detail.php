<?php 
	require_once("koneksi.php");
	include 'header.php';
?>
<div id="page-title">
	<div id="page-title-inner">
		<div class="container">
			<h2><i class="ico-usd ico-white"></i>Keranjang</h2>
		</div>
	</div>	
</div>
<div id="wrapper">
	<div class="container">
	    <div class="title"><h3>Detail Keranjang Belanja</h3></div>
	    	<form name="pemesanan" action="" method="POST">
				<table class="table table-hover table-condensed">
					<tr>
						<th><center>No Pemesanan</center></th>
	                    <th><center>Kode Barang</center></th>
						<th><center>Nama Barang</center></th>
						<th><center>Harga Satuan</center></th>
						<th><center>Jumlah</center></th>
						<th><center>Sub Total</center></th>
						<th><center>Opsi</center></th>
					</tr>
				    <?php    
	    				$total = 0;
					    if (isset($_SESSION['items'])) {
					        foreach ($_SESSION['items'] as $key => $val) {
					            $query = mysqli_query($koneksi, "select * from produk where id_produk = '$key'");
					            $data = mysqli_fetch_array($query);

					            $jumlah_harga = $data['harga'] * $val;
					            $total += $jumlah_harga;
					            $produk = $data['id_produk'];
					            $jumlah = $val;
					            $no = 1;
					            if (isset($_SESSION['username'])) {
					            	$id_users = $_SESSION['id_users'];
					            	$nama = $_SESSION['nama'];	
					            }else{}
					            
					            ?>
	                <tr>
	                <td><center><?php echo $no++; ?></center></td>
	                <td><center><?php echo $data['id_produk']; ?></center></td>
	                <td><center><?php echo $data['nama']; ?></center></td>
	                <td><center>Rp.<?php echo number_format($data['harga']); ?>,00</center></td>
	                <td><center><?php echo number_format($val); ?></center></td>
	                <td><center>Rp.<?php echo number_format($jumlah_harga); ?>,00</center></td>
	                <td><center><a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-buy">Tambah</a> <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-warning">Kurang</a> <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-danger">Hapus</a></center></td>
	                </tr>
						<?php
							}
						}
						?>  
	                     <?php
						if($total == 0){
							echo '<tr><td colspan="5" align="center">Ups, Keranjang masih kosong!</td></tr></table>';
							echo '<p><div align="right">
							<a href="produk.php" class="btn btn-info btn-lg">&laquo; Lanjut Belanja</a>
							</div></p>';
							}elseif (!isset($_SESSION['username'])) {
								echo '
									<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
									<p><div align="right">
									<a href="index.php" class="btn btn-info">&laquo; Lanjut Belanja</a>
									<a href="checkout.php" class="btn btn-buy"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> Pesan Sekarang &raquo;</a>
									</div></p>
								';
							}elseif (isset($_SESSION['username'])) {
								echo '
									<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
									<p><div align="right">
									<a href="index.php" class="btn btn-info">&laquo; Lanjut Belanja</a>
									<a href="checkout.php?total='.$total.'&id_produk='.$produk.'&jumlah='.$jumlah.'&id_users='.$id_users.'&nama='.$nama.'" class="btn btn-buy"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> Pesan Sekarang &raquo;</a>
									</div></p>
								';
							}else{
						}
						?>
				</table>
			</form>
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
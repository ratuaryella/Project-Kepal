<?php 
require_once("koneksi.php");
require ('header.php'); 
?>
<div id="page-title">
	<div id="page-title-inner">
		<div class="container">
			<h2><i class="ico-briefcase ico-white"></i>Detail Produk</h2>
		</div>
	</div>	
</div>
<div id="wrapper">
	<div class="container">              
      	<div class="row">
	        <div class="col-sm-6">
	    		<?php                  
					$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id]'");
					$data  = mysqli_fetch_array($query);
					?>
	        		<div class="hero-unit" style="margin-left: 20px;">
		                <table>
			                <tr>
			                	<td rowspan="7"><img src="<?php echo 'admin/'.$data['gambar']; ?>" /></td>
			                </tr>
			                <tr>
			                	<td colspan="4"><div class="title"><h3><?php echo $data['nama']; ?></h3></div></td>
			                </tr>
			                <tr>
			                	<td></td>
				                <td size="200"><h3>Harga</h3></td>
				               	<td><h3>:</h3></td>
								<td><div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div></td>
			                </tr>
			                <tr>
			                	<td></td>
			                	<td><h3>Stock</h3></td>
				                <td><h3>:</h3></td>
				                <td><div><h3><?php echo $data['qty']; ?></h3></div></td>
		                	</tr>
		                    <tr>
			                    <td></td>
			                    <td><h3>Keterangan</h3></td>
			                    <td><h3>:</h3></td>
			                    <td><div><h3><?php echo $data['keterangan']; ?></h3></div></td>
		                     </tr>
		                        <tr>
		                        <td></td>
		                        <td></td>
		                        <td></td>
								<td><div class="clear"><a href="cart.php?act=add&amp;barang_id=<?php echo $data['id_produk'];?>&amp;ref=detail.php?kd=<?php echo $data['id_produk'];?>" class="btn btn-lg btn-buy">Pesan &raquo;</a></div></td>
		                        </tr>     
		               	</table>
	                </div>
	            </div>
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
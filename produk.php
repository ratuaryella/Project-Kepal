<?php 
require_once("koneksi.php");   
include 'header.php';
?>
	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-briefcase ico-white"></i>Produk Kami</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
    	<div class="container">
    		<form action="cari_produk.php" method="GET">
				<div class="input-group col-md-5 col-md-offset-7">
				<span class="input-group-addon" id="basic-addon1"><span class="icon-search"></span></span>
				<input type="text" class="form-control" placeholder="Cari berdasarkan nama dan harga di sini .." aria-describedby="basic-addon1" name="cari">	
		</div> 
      		<div class="row">
				<?php
				if (isset($_GET['cari'])) {
					$cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
					$sql=mysqli_query($koneksi, "select * from produk where nama like '$cari' or harga like '$cari'");
				}else{
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");                
                }
                if (mysqli_num_rows($sql)==0) {
                	?><br><center><?php echo "Ulos dan harga yang anda cari belum tersedia!";?></center><?php
                }
					while($data = mysqli_fetch_array($sql)){
                ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="<?php echo 'admin/'.$data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
						<div class="clear"><a href="detailproduk.php?id=<?php echo $data['id_produk'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?id=<?php echo $data['id_produk'];?>" class="btn btn-lg btn-buy">Pesan &raquo;</a></div>

                    </div>
        		</div>
                <?php   
              		}
              		
              ?>
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
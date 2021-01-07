<?php require_once("koneksi.php");
    include 'header.php';
?>
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Ulos Bintang Maratur</h2>
				<p>Kami menyediakan ulos yang nyaman anda kenakan.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/1.UlosBintangMaratur.jpg" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Ulos Mangiring</h2>
				<p>Kami memiliki banyak koleksi ulos yang cocok dipakai.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/3.UlosMangiring.jpg" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Ulos Sadum</h2>
				<p>Kami memiliki koleksi ulos yang bisa anda gunakan dengan harga yang terjangkau anda bisa memiliki koleksi kami.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/6.UlosSadum.jpg" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Ulos Sibolang</h2>
				<p>Kami menerima pembuatan ulos sesuai dengan keinginan anda dengan harga yang bisa di sesuaikan dengan kebutuhan anda.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/7.UlosSibolang.jpg" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>

	
		<div class="container">
	  		<div class="hero-unit">
        		<p>
					Diva Ulos Store adalah toko ulos online terlengkap dan terpercaya, dengan harga terjangkau anda sudah dapat memiliki produk kami. Selamat Berbelanja...
				</p>
        		<p><a class="btn btn-success btn-large" href="produk.php">Mulai Berbelanja &raquo;</a></p>                            
      		</div>
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk ASC limit 12");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="<?php echo 'admin/'.$data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
						<div class="clear"><a href="detailproduk.php?id=<?php echo $data['id_produk'];?>" class="btn btn-lg btn-danger">Detail</a>
						<a href="detailproduk.php?id=<?php echo $data['id_produk'];?>" class="btn btn-lg btn-buy">Pesan &raquo;</a>
						</div>
					
                    </div>
        		</div>
                <?php   
              		}
              	?>
      		</div>
			<hr>
			<hr>
			<div class="row">
				<div class="icons-box-vert-container">
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Kemudahan Berbelanja</h3>
								<p>Dapatkan kemudahan berbelanja di Diva Ulos Store, Kami menyediakan kebutuhan untuk fasion anda.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di Diva Ulos Store praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<hr>			
		</div>
<?php
	include 'footer.php';
?>	
</body>
</html>
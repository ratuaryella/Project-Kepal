<?php
	require_once('header.php');
?>

<div id="page-title">
	<div id="page-title-inner">
		<div class="container">
			<h2><i class="ico-picture ico-white"></i>Tentang Ulos</h2>
		</div>
	</div>	
</div>
<div id="wrapper">
	<div class="container">
		<?php
		$query = mysqli_query($koneksi, "select * from artikel");
		$data = mysqli_fetch_array($query);
		?>
	    <div class="title">
	    	<h3><?php echo $data['judul']; ?></h3></div>
	    	<div class="col-md-8 col-md-offset-2">
		    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="item active">
						      <img src="admin/gambar/1.jpg" alt="Ulos Bintang Maratur">
						      <div class="carousel-caption">
						        <h3>Ulos Bintang Maratur</h3>
						        <p>Ulos Bintang Maratur secara harafiah artinya adalah bintang yang teratur. Makna dari kain ini adalah melambangkan harapan kehidupan yang teratur dan bersahaja. Kehidupan yang rukun dan berbahagia</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/2.jpg" alt="Ulos Ragihotang">
						      <div class="carousel-caption">
						        <h3>Ulos Ragihotang</h3>
						        <p>Ulos Ragihotang atau coak rotan, menggambarkan keeratan hubungan kekerabatan bagaikan kuatnya ikatan rotan.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/3.jpg" alt="Ulos Harurungan">
						      <div class="carousel-caption">
						        <h3>Ulos Harurungan</h3>
						        <p>Ulos Harungguan merupakan dokumentasi beberapa corak ikat yang dibuat oleh penenun masing-masing.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/4.jpg" alt="Ulos Ragihidup">
						      <div class="carousel-caption">
						        <h3>Ulos Ragihidup</h3>
						        <p>Ulos Ragihidup menggambarkan garis hidup seseorang, terutama dalam hidup berkeluarga.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/5.jpg" alt="Ulos Mangiring">
						      <div class="carousel-caption">
						        <h3>Ulos Mangiring</h3>
						        <p>Ulos Mangiring melambangakan kesuburan dan kesepakatan.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/6.jpg" alt="New York">
						      <div class="carousel-caption">
						        <h3>Ulos Sadum</h3>
						        <p>Ulos Sadum menggambarkan sukacita dan dukacita.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/7.jpg" alt="Ulos Sibolang">
						      <div class="carousel-caption">
						        <h3>Ulos Sibolang</h3>
						        <p>Ulos Sibolang merupakan ulos yang digunakan untuk berkabung menunjukan duka.</p>
						      </div>
						    </div>

						    <div class="item">
						      <img src="admin/gambar/9.jpg" alt="Ulos Sitolutuho">
						      <div class="carousel-caption">
						        <h3>Ulos Sitolutuho</h3>
						        <p>Ulos Sitolutuho digunakan untuk pemakaian sehari-hari, biasanya digunakan untuk para petani.</p>
						      </div>
						    </div>
						   </div>
						  
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						    <span class="icon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						    <span class="icon-chevron-right"></span>
						  </a>
						</div>
		    		<p><?php echo $data['deskripsi']; ?></p>	
		</div>
	</div>	
<?php
	include 'footer.php';
?>


<?php
	require_once('footer.php');
?>
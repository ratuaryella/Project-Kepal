<?php
	require_once ('header.php');
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
		$query = mysqli_query($koneksi, "select * from artikel where id_artikel = 2");
		$data = mysqli_fetch_array($query);
		?>
		<div class="title">
	    	<h3><?php echo $data['judul']; ?></h3></div>
	    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="6" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="7" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="8" class="active"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="img/pabrik/1.jpg" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/2.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/3.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/4.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/5.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/6.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/7.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/8.jpg" alt="Chicago">
					    </div>

					    <div class="item">
					      <img src="img/pabrik/9.jpg" alt="New York">
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
	require_once ('footer.php');
?>
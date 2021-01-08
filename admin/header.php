<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	require 'access.php';
	?>
	<title>Diva Ulos | Admin</title>
	<link rel="shortcut icon" href="../img/icon/icon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Admin DIVA ULOS</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hallo, <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'] ?>&nbsp&nbsp<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">	
			<li><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span> Data Produk</a></li>
			<li><a href="data_pemesanan.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Pemesanan</a></li>
			<li><a href="data_member.php"><span class="glyphicon glyphicon-user"></span>  Data Member</a></li>        												
			<li><a href="artikel.php"><span class="glyphicon glyphicon-picture"></span>  Artikel</a></li>
			<li><a href="testimoni.php"><span class="glyphicon glyphicon-picture"></span>  Testimoni</a></li>				
		</ul>
	</div>
	<div class="col-md-10">
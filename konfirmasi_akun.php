<?php
	include_once 'koneksi.php';
	$nama = $_GET['nama'];
	$query = mysqli_query($koneksi, "update users set validasi=1 where nama = '$nama'");
	if($query){
		echo "<script>alert('Email telah di konfirmasi.');window.location = 'login.php'</script>";
	}else{
		echo "<script>alert('User tidak di temukan silahkan mendaftar terlebih dahulu.'); window.location = 'register.php'</script>";
	}
?>
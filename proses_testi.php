<?php
	include 'koneksi.php';
	session_start();
	if (!isset($_SESSION['username'])) {
		echo "<script>alert('Anda harus login untuk memberikan testimoni!'); window.location = 'login.php'</script>";
	}else{
	$id_users = $_SESSION['id_users'];
	$nama = $_SESSION['nama'];
	$komentar = $_POST['komentar'];
	$status = 'On Progress';
	if (empty($komentar)) {
		echo "<script>alert('Komentarnya masih belum diisi $nama!'); window.location = 'testimoni.php'</script>";
	}else{

	$sql = mysqli_query($koneksi, "INSERT INTO testimoni VALUES('', '$id_users', '$nama', '$komentar', NOW(), '$status')");
		if ($sql) {
			echo "<script>alert('Terimakasih telah memberikan testimoninya $nama, silahkan tunggu konfirmasi dari admin!'); window.location = 'testimoni.php'</script>";
		}else{
			echo "<script>alert('Gagal memberi testimoni $nama!'); window.location = 'testimoni.php'</script>";
		}
	}
}
?>
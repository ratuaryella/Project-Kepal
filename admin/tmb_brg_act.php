<?php 
include 'config.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['qty'];
$deskripsi = $_POST['keterangan'];
$status = $_POST['status'];

	if($_FILES['gambar']['name']){
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$nama.'.jpg');
		$gambar = 'gambar/'.$nama.'.jpg';
	}
		$sql = mysqli_query($koneksi, "INSERT INTO produk VALUES('', '$nama', '$harga', '$jumlah', '$deskripsi', '$status', '$gambar')");
		if ($sql) {
			echo "<script>alert('Data $nama berhasil disimpan!'); window.location = 'barang.php'</script>";	
		}else{
			echo "<script>alert('Data $nama gagal disimpan!'); window.location = 'barang.php'</script>";
	}

?>
	
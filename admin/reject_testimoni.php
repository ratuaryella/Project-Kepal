<?php 
include 'config.php';
$id=$_GET['id'];
$status = 'Rejected';
mysqli_query($koneksi, "UPDATE testimoni SET status = '$status' WHERE id_testimoni = '$id'");
header("location:testimoni.php");

 ?>
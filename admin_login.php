<?php 
session_start();
include 'koneksi.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$query=mysqli_query($koneksi, "SELECT * FROM admin where username = '$uname' AND password = '$pass'")or die(mysql_error());
if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	echo "<script>alert('Selamat datang $uname'); window.location = 'admin/index.php'</script>";
}else{
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'admin.php'</script>";
}
?>
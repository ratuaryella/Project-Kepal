<?php
	session_start();
	include 'koneksi.php';
	include 'password.php';

	$username = $_POST['username'];
	$pass = $_POST['password'];
	$db_pass = mysqli_query($koneksi, "select password from users where username = '$username'");
	$res_db_pass = mysqli_fetch_array($db_pass);
	$string_pass = implode("",$res_db_pass);
	$saved_pass = substr($string_pass,0,60);	

	if(check_password($saved_pass, $pass) == TRUE){
			$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$saved_pass'")or die(mysql_error());
		if(mysqli_num_rows($query)==0){
			echo "<script>alert('Username dan Password tidak valid.'); window.location = 'login.php'</script>";
		}else{
			$_SESSION['username']=$username;
			$_SESSION['masuk']=TRUE;
			$row=mysqli_fetch_assoc($query);
			$_SESSION['username']=$row['username'];
			$_SESSION['role']=$row['role'];
			$_SESSION['nama']=$row['nama'];
			$_SESSION['id_users']=$row['id_users'];

			//chek Captcha
			if($_SESSION["code"] != $_POST["kode"]){
    		//jika code captcha salah mmaka akan kembali ke halaman sebelumnya
 			   echo "<script>alert('captcha yang anda masukkan salah');window.location = 'login.php'</script>";
			}
			
			if ($row['role']==1) {
				echo "<script>alert('Selamat datang $username'); window.location = 'admin/index.php'</script>";	
			}
			if ($row['role']==2) {
				echo "<script>alert('Selamat datang $username'); window.location = 'index.php'</script>";
		}else{
			echo "<script>alert('Username dan Password tidak valid.'); window.location = 'login.php'</script>";
			}
		}
	}	
	
?>


  

<?php
	include 'koneksi.php';
	include 'password.php';
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$nohp = $_POST['nohp'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = 2;
		$konpass = $_POST['konfirmpass'];
		if(empty($nama) || empty($password) || empty($konpass))
		{
			echo "<script>alert('Data yang diisi belum lengkap'); window.location = 'register.php'</script>";
		}
		else
		{
			if($password == $konpass){
				$query = mysqli_query($koneksi, "SELECT * FROM users WHERE nama='$nama'");
				$hasil = mysqli_num_rows($query);
				if($hasil == NULL){
					$new_pass = create_password($password);
					mysqli_query($koneksi, "INSERT INTO users VALUES('', '$nama', '$alamat', '$email', '$nohp', '$username', '$new_pass', '$role')");
				echo "<script>alert('Daftar Berhasil $nama, Silahkan login'); window.location = 'login.php'</script>";
				}
				else
				{
				echo "<script>alert('Nama pengguna sudah terdaftar!'); window.location = 'register.php'</script>";
				}
			}
			else{
				echo "<script>alert('Password tidak sama!'); window.location = 'register.php'</script>";			
			}
		}
?>
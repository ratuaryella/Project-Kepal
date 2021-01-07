<?php
	include 'koneksi.php';
	include 'password.php';
	include_once('smtp/PHPMailerAutoload.php');
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
					$html='Msg';
					echo smtp_mailer('samuelambarita20@gmail.com','test',$html);
					function smtp_mailer($to,$subject, $msg){
						$mail = new PHPMailer(); 
						$mail->SMTPDebug  = 3;
						$mail->IsSMTP(); 
						$mail->SMTPAuth = true; 
						$mail->SMTPSecure = 'tls'; 
						$mail->Host = "smtp.gmail.com";
						$mail->Port = 587; 
						$mail->IsHTML(true);
						$mail->CharSet = 'UTF-8';
						$mail->Username = "samuelambarita2000@gmail.com";
						$mail->Password = "20092000a";
						$mail->SetFrom("samuelambarita2000@gmail.com");
						$mail->Subject = $subject;
						$mail->Body =$msg;
						$mail->AddAddress("samuelambarita20@gmail.com");
						$mail->SMTPOptions=array('ssl'=>array(
							'verify_peer'=>false,
							'verify_peer_name'=>false,
							'allow_self_signed'=>false
						));
						if(!$mail->Send()){
							echo $mail->ErrorInfo;
						}else{
							return 'Sent';
						}
					}
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
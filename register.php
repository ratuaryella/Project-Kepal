<?php
  include 'header.php';
?>
    <div class="register">
      <h2>Register</h2>
        <form action="member_register.php" method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" />
          <input type="text" name="alamat" placeholder="Alamat" />
        	<input type="email" name="email" placeholder="Email" />
          <input type="text" name="nohp" placeholder="Nomor Handphone" />
          <input type="text" name="username" placeholder="Username" />
      		<input type="password" name="password" placeholder="Password"/>
          <input type="password" name="konfirmpass" placeholder="Ulang Password"/>
          <input type="submit" value="Daftar" name="daftar" />
            <div class="utilities">
              <a>Sudah punya akun?</a>
              <a href="login.php">Login disini! &rarr;</a>
            </div>
        </form>
    </div>
<?php
  require_once('header.php');
?>
  
    <div class="login">
    <h2>Login</h2>
    <form action="login_act.php" method="POST">
    	<input type="text" name="username" placeholder="Username" />
  		<input type="password" name="password" placeholder="Password"/>
      <div class="form-group">
         <img src="generate.php" alt="gambar" style="width: 333px; height: 60px; margin-bottom:5px;"/>
      </div>
      <input type="text" name="kode" value="" placeholder="Kode Captcha" maxlength="5"/>   
  <input type="submit" value="Login"/>
  <div class="utilities">
    <a>Belum punya akun?</a>
    <a href="register.php">Daftar disini! &rarr;</a>
  </div>
</div>

</form>
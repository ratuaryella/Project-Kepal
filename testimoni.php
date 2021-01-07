<?php  require_once('header.php');?>
<div id="page-title">
	<div id="page-title-inner">
		<div class="container">
			<h2><i class="ico-stats ico-white"></i>Testimoni</h2>
		</div>
	</div>	
</div>
<div id="wrapper">
   	<div class="container"> 
        <center><div class="title" style="margin-left: ;"><h3>Berikan masukan untuk kami, Agar kami bisa melayani anda lebih baik lagi...</h3></div></center>
        	<div class="masukan">
	        	<form action="proses_testi.php" method="POST">
	        		<input type="hidden" name="id_users" value="<?php echo $_GET['id_users']; ?>">
	        		<?php
	        			if (isset($_SESSION['username'])) {
	        		?>
	          		Nama : <?php echo $_SESSION['nama'] ?><br><br>
	          		<?php } ?>
	          		Testimoni : <textarea name="komentar" placeholder="Komentar" /></textarea><br>
	          		<input type="submit" value="Kirim" name="kirim" />
				</form>
			</div>
	</div>
</div>

<div class="komentar">
	<?php 
		$testi = mysqli_query($koneksi, "SELECT * FROM testimoni  WHERE status = 'Confirm' ORDER BY id_testimoni DESC") or die(mysql_error());
		$testiNum = mysqli_num_rows($testi);
		echo "<h4>" . "Testimoni..." . "</h4>";
		echo "<b>" . $testiNum . " testimoni sejauh ini..." .
		"</b>";
		echo "<hr>";
			while($row = mysqli_fetch_array($testi))
			{
				echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
				$row['tanggal'] . "</i>" . "<br />" . $row['testimoni'] . "<br />";
				 echo "<hr>";
	 		}
	?>
</div>
<?php
	include 'footer.php';
?>
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

</body>
</html>	
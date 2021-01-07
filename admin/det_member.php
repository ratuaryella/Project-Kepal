<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Member</h3>
<a class="btn" href="data_member.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_mem=mysqli_real_escape_string($koneksi, $_GET['id']);


$mem=mysqli_query($koneksi, "select * from users where id_users='$id_mem'")or die(mysql_error());
while($m=mysqli_fetch_array($mem)){
	?>					
	<table class="table">
		<tr>
			<td>ID Member</td>
			<td><?php echo $m['id_users'] ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $m['nama'] ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $m['alamat'] ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $m['email'] ?></td>
		</tr>
		<tr>
			<td>NO HP</td>
			<td><?php echo $m['nohp']; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $m['username'] ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo md5($m['password']) ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>
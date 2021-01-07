<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-picture"></span> Testimoni</h3>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from testimoni");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
</div>

<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">Nama</th>
		<th class="col-md-3">Testimoni</th>
		<th class="col-md-3">Tanggal</th>
		<th class="col-md-1">Status</th>		
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	$testi=mysqli_query($koneksi, "SELECT * FROM testimoni ORDER BY id_testimoni DESC limit $start, $per_hal");
	$no=1;
	while($t=mysqli_fetch_array($testi)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $t['nama'] ?></td>
			<td><?php echo $t['testimoni'] ?></td>
			<td><?php echo $t['tanggal'] ?></td>
			<td><?php echo $t['status'] ?></td>
			<td>
			<a href="confrim_testimoni.php?id=<?php echo $t['id_testimoni']; ?>" class="btn btn-info">Confirm</a>
			<a href="reject_testimoni.php?id=<?php echo $t['id_testimoni']; ?>" class="btn btn-danger">Reject</a>
			</td>
		</tr>		
		<?php 
	}
	?>
</table>
<ul class="pagination">			
	<?php 
		for($x=1;$x<=$halaman;$x++){
			?>
			<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
			<?php
		}
	?>						
</ul>

<?php 
include 'footer.php';

?>
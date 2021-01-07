<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Artikel</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Artikel</button>
<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from artikel");
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
<form action="cari_artikel.php" method="GET">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari artikel di sini .." aria-describedby="basic-addon1" name="cari_artikel">	
	</div>
</form><br />
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-4">Judul Artikel</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari_artikel'])){
		$cari_artikel=mysqli_real_escape_string($koneksi, $_GET['cari_artikel']);
		$artikel=mysqli_query($koneksi, "select * from artikel where judul like '$cari_artikel'");
	}else{
		$artikel=mysqli_query($koneksi, "select * from artikel limit $start, $per_hal");
	}
	$no=1;
	while($a=mysqli_fetch_array($artikel)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a['judul'] ?></td>
			<td>
				<a href="det_artikel.php?id=<?php echo $a['id_artikel']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_artikel.php?id=<?php echo $a['id_artikel']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_artikel.php?id=<?php echo $a['id_artikel']; ?>' }" class="btn btn-danger">Hapus</a>
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
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah_artikel.php" method="post">
					<div class="form-group">
						<label>Judul Artikel</label>
						<input name="judul" type="text" class="form-control" placeholder="Judul Artikel">
					</div>
					<div class="form-group">
						<label>Isi Artikel</label>
						<input name="isi" type="textarea" class="form-control" placeholder="Isi Artikel">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>
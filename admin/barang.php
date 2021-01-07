<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Data Produk</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from produk");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="" ss="col-md-12">
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
	<button = style="margin-bottom:10px" onClick="print_data()" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</button> 
</div>
<form action="cari_produk.php" method="GET">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>	
		<input type="text" class="form-control" placeholder="Cari berdasarkan ID Produk, nama dan jumlah di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form><br />
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-1">ID Produk</th>
		<th class="col-md-3">Nama Barang</th>
		<th class="col-md-3">Harga Jual</th>
		<th class="col-md-1">Jumlah</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
		$brg=mysqli_query($koneksi, "select * from produk where nama like '$cari' or qty like '$cari' or id_produk like '$cari'");
	}else{
		$brg=mysqli_query($koneksi, "select * from produk order by nama DESC limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['id_produk'] ?></td>
			<td><?php echo $b['nama'] ?></td>
			<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>
			<td><?php echo $b['qty'] ?></td>
			<td>
				<a href="det_barang.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-info">Detail</a>
				<a href="edit.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id_produk']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	<tr>
		<td colspan="4">Total Modal</td>
		<td>			
		<?php 
		if (isset($cari)) {
			$x=mysqli_query($koneksi, "SELECT sum(harga) as total from produk where nama = '$cari'");
		}else{
			$x=mysqli_query($koneksi, "SELECT sum(harga) as total from produk");
		}
			$xx=mysqli_fetch_array($x);			
			echo "<b> Rp.". number_format($xx['total']).",-</b>";		
		?>
		</td>
	</tr>
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
				<form action="tmb_brg_act.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Barang ..">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga Barang ..">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input name="qty" type="text" class="form-control" placeholder="Jumlah ..">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input name="keterangan" type="text" class="form-control" placeholder="Deskripsi..">
					</div>	
					<div class="form-group">
						<label>Status</label>
						<input name="status" type="text" class="form-control" placeholder="Status..">
					</div>	
					<div class="form-group">
						<label>Gambar</label>
						<input name="gambar" type="file" class="form-control">
					</div>																	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan" name="tambah">
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function print_data() {
		<?php 
		if (isset($cari)) { ?>
			window.open("laporan_barang.php?barang=<?php echo $cari?>","_blank");
		<?php }else{ ?>
			window.open("laporan_barang.php","_blank");
		<?php } ?>
	}
</script>
<?php 
include 'footer.php';

?>
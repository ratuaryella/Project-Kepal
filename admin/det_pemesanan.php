<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Pemesanan</h3>
<a class="btn" href="data_pemesanan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_pemesanan=mysqli_real_escape_string($koneksi, $_GET['id']);


$det=mysqli_query($koneksi, "select * from pemesanan where id_pemesanan='$id_pemesanan'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>ID Pemesanan</td>
			<td><?php echo $d['id_pemesanan'] ?></td>
		</tr>
		<tr>
			<td>ID Users</td>
			<td><?php echo $d['id_users'] ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $d['alamat'] ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $d['email'] ?></td>
		</tr>
		<tr>
			<td>NO HP</td>
			<td><?php echo $d['nohp'] ?></td>
		</tr>
		<tr>
			<td>ID Produk</td>
			<td><?php echo $d['id_produk'] ?></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><?php echo $d['jumlah'] ?></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>Rp.<?php echo number_format($d['total_harga']) ?>,-</td>
		</tr>
		<tr>
			<td>Bukti Pembayaran</td>
			<td><a href="det_gambar.php?id_pemesanan=<?php echo $d['id_pemesanan']?>&bukti_pembayaran=<?php echo $d['bukti_pembayaran'] ?>"><img src="<?php echo '../'.$d['bukti_pembayaran'];?>"style="width:500px;"/></a></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>
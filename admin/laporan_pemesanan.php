<?php
	require_once 'config.php';
	$data = mysqli_query($koneksi, "SELECT * FROM pemesanan");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<link rel="stylesheet" type="text/css" href="assets/css/pdf.css">
</head>
<body>
	<table>
		<tr class="tableheader">
			<th rowspan="1">ID Pemesanan</th>
			<th>ID Users</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No HP</th>
			<th>ID Produk</th>
			<th>Jumlah</th>
			<th>Total Harga</th>
		</tr>
		<?php

		if(isset($_GET['tanggal'])){
			$tanggal=mysqli_real_escape_string($koneksi, $_GET['tanggal']);
			$data=mysqli_query($koneksi, "select * from pemesanan where tanggal like '$tanggal' order by tanggal desc");
		}else{
			$data=mysqli_query($koneksi, "select * from pemesanan");
		}
			while ($hasil = mysqli_fetch_array($data)) {?>
			<?php
				if (isset($tanggal)) {	
			?>
				<tr>
				Tanggal: <?php echo $tanggal;
				}else{}?>
				</tr>
				<tr id="rowHover">
					<td width="10%" align="center"><?php echo $hasil['id_pemesanan']?></td>
					<td width="10%" align="center"><?php echo $hasil['id_users']?></td>
					<td width="15%"><?php echo $hasil['nama']?></td>
					<td width="15%"><?php echo $hasil['alamat']?></td>
					<td width="15%"><?php echo $hasil['email']?></td>
					<td width="10%"><?php echo $hasil['nohp']?></td>
					<td width="10%" align="center"><?php echo $hasil['id_produk']?></td>
					<td width="5%" align="center"><?php echo $hasil['jumlah']?></td>
					<td width="10%" align="center">Rp <?php echo number_format($hasil['total_harga'])?>,-</td>
					<td>
				</tr>	
		<?php		
			}
		?>
		<tr>
			<td colspan="8">Total Pemesanan</td>
			<td>			
				<?php
					if (isset($_GET['tanggal'])) {
						$x=mysqli_query($koneksi, "SELECT sum(total_harga) as total from pemesanan WHERE tanggal = '$tanggal'");			
					}else{		
						$x=mysqli_query($koneksi, "SELECT sum(total_harga) as total from pemesanan");
					}
					$xx=mysqli_fetch_array($x);			
					echo "<b> Rp.". number_format($xx['total']).",-</b>";		
				?>
			</td>
		</tr>	

	</table>
	<script>
		window.load = print_data();
		function print_data(){
			window.print();
		}
	</script>
</body>
</html>
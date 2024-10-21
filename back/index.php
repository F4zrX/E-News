<!DOCTYPE html>
<html>
<head>
	<title> tampil </title>
	</head>
	<body>
	<h2 align="center">TAMPIL,TAMBAH,EDIT,HAPUS,</h2>
	<a href = "tambahdata.php">tambah data</a>
	<table border = "1" align="center" width="100%">
		<tr bgcolor="gree">
			<th>ID</th>
			<th>JENIS BERITA</th>
			<th>KONTEN</th>


		</tr>
		
		<?php
			include "koneksi.php";
			$query = mysqli_query ($koneksi,"Select * from tbmahasiswa");
			while ($data = mysqli_fetch_array($query)){

		?>
		<tr>
		<td><?php echo $data['NIM']; ?></td>
		<td><?php echo $data['Nama_Mahasiswa']; ?></td>
		<td><?php echo $data['Prodi']; ?></td>
		<td><input type="submit" value="Yes" class="btn btn-danger">
        <a href="hapusdata.php" class="btn btn-default">No</a></td>
<?php
}
?>
		
		</tr>
	</table>		
	</body>
	</html>

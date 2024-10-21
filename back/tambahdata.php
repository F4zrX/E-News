<html>
<head>
	<title> TAMPIL,TAMBAH,EDIT,HAPUS,</title>
</head>
<body>
<h3 align = "center"> From </h3>

<form action="simpandata.php" method="post">

<table align="center" bgcolor="gree" width=60%>
<tr>
	<td> ID </td>
	<td> : </td>
	<td>
		<input type ="text" name="nim" size="20" placeholder="masukan ID ...">

	</td></tr>
	
	<tr>
	<td> JENIS BERITA </td>
	<td> : </td>
	<td>
		<input type ="text" name="nama" size="30" placeholder="masukan jenis berita ...">

	</td></tr>
	 
	 <tr>
	<td> ISI </td>
	<td> : </td>
	<td >
		<input type ="text" name="prodi" size="100"width="600px" placeholder="masukan ISI ...">

	</td></tr>
	<tr>
	<td></td>
	<td></td>
	<td>
		<input type="submit" name="simpan" value="simpan">
		<input type="reset" name="batal" value="batal">
		<input type="button" name="kembali" value="kembali" onclick="self.history.back()">
	 </tr></td>
	 </table>
	 </form>
</body>
</html>

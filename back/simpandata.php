<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];


	$simpan = mysqli_query($koneksi, "insert into tbmahasiswa values ('$nim','$nama','$prodi')");
	
	if ($simpan){
	echo "<script> alert ('data berhasil di simpan')</script>";
	header ("refresh:0;index.php");
}else{
echo "<script> alert ('Data Tidak berhasil di simpan')</script>";
header("refresh:0;index.php");
}


?>

<?php
extract ($_POST);
extract ($_GET);
include"koneksi.php";
$hapus_data="DELETE FROM menu WHERE id ='$id'";
$jalan_hapus=mysql_query($hapus_data);
header("location:tampildata.php");
?>
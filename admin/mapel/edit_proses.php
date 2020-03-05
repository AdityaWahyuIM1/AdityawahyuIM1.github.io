<?php
include 'koneksi.php';
	$kode_mapel=$_POST['kode_mapel'];
	$nama_mapel=$_POST['nama_mapel'];

mysql_query("UPDATE mapel SET nama_mapel='$nama_mapel' WHERE kode_mapel='$kode_mapel'");
	
	
header("location:index.php?pesan=update");
?>
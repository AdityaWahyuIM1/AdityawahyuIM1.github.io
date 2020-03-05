<?php
include 'koneksi.php';
	$nama_mapel=$_POST['nama_mapel'];
	
mysql_query("INSERT INTO mapel VALUES('','$nama_mapel')");
	
	
header("location:index.php?pesan=input");
?>
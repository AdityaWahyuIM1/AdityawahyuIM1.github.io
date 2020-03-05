<?php
include 'koneksi.php';
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	
mysql_query("INSERT INTO guru VALUES('','$nama','$alamat')");
	
	
header("location:index.php?pesan=input");
?>
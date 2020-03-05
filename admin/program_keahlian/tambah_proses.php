<?php
include 'koneksi.php';
	$nama_program=$_POST['nama_program'];
	
mysql_query("INSERT INTO program_keahlian VALUES('','$nama_program')");
	
	
header("location:index.php?pesan=input");
?>
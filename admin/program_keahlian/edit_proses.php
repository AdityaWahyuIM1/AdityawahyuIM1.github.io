<?php
include 'koneksi.php';
	$kode_program=$_POST['kode_program'];
	$nama_program=$_POST['nama_program'];
	
mysql_query("UPDATE program_keahlian SET nama_program='$nama_program' WHERE kode_program='$kode_program'");
	
	
header("location:index.php?pesan=update");
?>
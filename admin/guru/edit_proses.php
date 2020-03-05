<?php
include 'koneksi.php';
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	
mysql_query("UPDATE guru SET nama='$nama',alamat='$alamat' WHERE nip='$nip'");
	
	
header("location:index.php?pesan=update");
?>
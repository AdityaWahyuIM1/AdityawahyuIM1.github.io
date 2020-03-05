<?php
include 'koneksi.php';
	$nama=$_POST['nama'];
	$kompkeahlian=$_POST['kompkeahlian'];
	$progkeahlian=$_POST['progkeahlian'];
	$nilaiakhir=$_POST['nilaiakhir'];
	
mysql_query("INSERT INTO nilai_akhir VALUES('','$nama','$kompkeahlian','$progkeahlian','$nilaiakhir')");
	
	
header("location:index.php?pesan=input");
?>
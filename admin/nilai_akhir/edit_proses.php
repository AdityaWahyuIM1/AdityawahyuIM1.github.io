<?php
include 'koneksi.php';
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$kompkeahlian=$_POST['kompkeahlian'];
	$progkeahlian=$_POST['progkeahlian'];
	$nilaiakhir=$_POST['nilaiakhir'];
	
mysql_query("UPDATE nilai_akhir SET nama='$nama',kompkeahlian='$kompkeahlian',progkeahlian='$progkeahlian',nilaiakhir='$nilaiakhir' WHERE nis='$nis'");
	
	
header("location:index.php?pesan=update");
?>
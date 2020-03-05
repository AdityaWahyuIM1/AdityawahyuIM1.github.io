<?php
include 'koneksi.php';
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$ortu=$_POST['ortu'];
	$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru= date('dmYHis').$foto;
$path= "images/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
	
mysql_query("INSERT INTO siswa VALUES('','$nis','$nama','$jenis_kelamin','$alamat','$kota','$ortu','$fotobaru')");
	
	
header("location:index.php?pesan=input");
?>
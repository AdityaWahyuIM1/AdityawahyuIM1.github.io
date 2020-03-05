<?php
include('./Config/koneksi.php');

$nama=$_POST['nama'];
$email=$_POST['email'];
$url=$_POST['url'];
$komentar=$_POST['komentar'];
$tanggal=date("Y-m-d");
$sql="INSERT INTO guesbook (nama, email, url, komentar, tanggal) VALUES ('$nama','$email','$url','$komentar','$tanggal')";

$query=mysql_query("INSERT INTO guesbook (nama, email, url, komentar, tanggal) VALUES ('$nama', '$email', '$url', '$komentar', '$tanggal')");
if($query) {echo "Pengisian buku tamu sukses";}
else {echo "Pengisian buku tamu gagal";}
?>
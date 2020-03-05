<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

if (move_uploaded_file($tmp, $path)){
$query = mysql_query("UPDATE katalog SET nama='$nama', foto='$fotobaru', harga='$harga', deskripsi='$deskripsi' WHERE id='$id'");
if ($query) {
	header("location:index.php?pesan=input");
}else{
	echo "maaf, terjadi kesalahan saat mencoba menyimpan ke database.";
	echo "<br><a href='input.php'>Kembali ke form</a>";
}
}else{
	echo "maaf, gambar gagal diupload.";
	echo "<br><a href='input.php'>Kembali ke form</a>";
}
?>
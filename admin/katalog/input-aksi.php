<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
	$query = mysql_query("INSERT INTO katalog VALUES('','$nama','$fotobaru','$harga','$deskripsi')");
	if($query){
		header("location: index.php");
	}else{
		echo "maaf.terjadi kesalahahan saat mencoba untuk menyimpan data ke databse.";
		echo"<br><a href='input.php'>Kembali ke form</a>";
	}
    }else{
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='input.php'>Kembali ke form</a>";
	}
	?>
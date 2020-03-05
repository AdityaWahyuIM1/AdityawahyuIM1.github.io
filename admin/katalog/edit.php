<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrap">
<div class="judul" align="center">
<h1>ADMINISTRATOR</h1>
<h2>WEBSITE ONLINESHOP</h2>
<h3>RAINPHY SHOES</h3>
</div>

<br/>

<a href="index.php">Lihat Semua Data</a>

<br/>
<h3>Edit Data</h3>

<?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysql = mysql_query("SELECT * FROM katalog WHERE id='$id'")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<form action="update.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
</td>
</tr>
<tr>
<td>Foto</td>
<td>
<input type="checkbox" name="foto" value="true"> Ceklis jika ingin mengubah foto<br>
<input type="file" name="foto">
</td>
</tr>
<tr>
<td>Harga</td>
<td>
<textarea name="harga" rows="7" col="300"> <?php echo $data['harga'] ?></textarea></td>
</tr>
<tr>
<td>Deskripsi</td>
<td>
<input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
</td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
<a href="index.php"><input type="button" value="Batal"></a>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>
<html>
<head>
<title>BIODATA SISWA</title>
</head>
<body>
<h2>TABEL BIODATA SISWA</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Edit Data Siswa</h3>
	<?php
	include "koneksi.php";
	$nis = $_GET['nis'];
	$query_mysql = mysql_query("SELECT * FROM siswa WHERE nis='$nis'")or die(mysql_query());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
<form action="edit_proses.php" method="post" enctype="multipart/form-data">
<table cellpadding="3" cellspacing="0">
<tr>	
	<td>Nama</td>
	<td>:</td>
	<input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
	<td><input type="text" name="nama" size="30" value="<?php echo $data['nama'] ?>"></td>
</tr>
<tr>	
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
		<option value="L">L</option>
		<option value="P">P</option>
	</select>
	</td>
</tr>
<tr>	
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name="alamat" size="30" value="<?php echo $data['alamat'] ?>"></td>
</tr>
<tr>	
	<td>Kota</td>
	<td>:</td>
	<td><input type="text" name="kota" size="30" value="<?php echo $data['kota'] ?>"></td>
</tr>
<tr>	
	<td>Orang Tua</td>
	<td>:</td>
	<td><input type="text" name="ortu" size="30" value="<?php echo $data['ortu'] ?>"></td>
</tr>
<tr>	
    <td>Foto</td>
	<td>:</td>
	<td><input type="checkbox" name="foto" value="true"> Ceklis jika ingin mengubah foto <br> 
	<input type="file" name="foto"></td>
</tr>
<tr>
<td>&nbsp;</td>
	<td></td>
	<td><input type="submit" name="tambah" value="Tambah"></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>
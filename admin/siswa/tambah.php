<html>
<head>
<title>BIODATA SISWA</title>
</head>
<body>
<h2>TABEL BIODATA SISWA</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Tambah Data Siswa</h3>
<form action="tambah_proses.php" method="post">
<table cellpadding="3" cellspacing="0">
<tr>
	<td>NIS</td>
	<td>:</td>
	<td><input type="text" name="nis" required></td>
</tr>
<tr>	
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" name="nama" size="30" required></td>
</tr>
<tr>	
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
		<option value="L">L</option>
		<option value="P">P</option>
	</select>
</tr>
<tr>	
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name="alamat" size="30" required></td>
</tr>
<tr>	
	<td>Kota</td>
	<td>:</td>
	<td><input type="text" name="kota" size="30" required></td>
</tr>
<tr>	
	<td>Orang Tua</td>
	<td>:</td>
	<td><input type="text" name="ortu" size="30" required></td>
</tr>
<tr>
    <td>Foto</td>
	<td>:</td>
	<td><input type="file" name="foto"></td>
</tr>
<tr>	
	<td>&nbsp;</td>
	<td></td>
	<td><input type="submit" name="tambah" value="Tambah"></td>
</tr>
</table>
</form>
</body>
</html>
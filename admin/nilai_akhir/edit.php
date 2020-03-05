<html>
<head>
<title>BIODATA NILAI AKHIR</title>
</head>
<body>
<h2>TABEL BIODATA NILAI AKHIR</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Edit Data Nilai Akhir</h3>
	<?php
	include "koneksi.php";
	$nis = $_GET['nis'];
	$query_mysql = mysql_query("SELECT * FROM nilai_akhir WHERE nis='$nis'")or die(mysql_query());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
<form action="edit_proses.php" method="post">
<table cellpadding="3" cellspacing="0">
<tr>	
	<td>Nama</td>
	<td>:</td>
	<input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
	<td><input type="text" name="nama" size="30" value="<?php echo $data['nama'] ?>"></td>
</tr>
<tr>	
	<td>Kompetensi Keahlian</td>
	<td>:</td>
	<td><select name="kompkeahlian" value="<?php echo $data['kompkeahlian'] ?>">
		<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
		<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
		<option value="Akuntansi">Akuntansi</option>
		<option value="Perkantoran">Perkantoran</option>
		<option value="Pemasaran">Pemasaran</option>
	</select>
	</td>
</tr>
<tr>
	<td>Program Keahlian</td>
	<td>:</td>
	<td>
	<select name="progkeahlian" value="<?php echo $data['progkeahlian'] ?>">
		<option value="Teknik Komputer dan Informatika">Teknik Komputer dan Informatika</option>
		<option value="Bisnis Manajemen">Bisnis Manajemen</option>
	</select>
	</td>
</tr>
<tr>	
	<td>Nilai Akhir</td>
	<td>:</td>
	<td><input type="text" name="nilaiakhir" size="30" value="<?php echo $data['nilaiakhir'] ?>"></td>
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
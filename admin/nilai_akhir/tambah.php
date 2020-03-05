<html>
<head>
<title>BIODATA NILAI AKHIR</title>
</head>
<body>
<h2>TABEL BIODATA NILAI AKHIR</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Tambah Data Nilai Akhir</h3>
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
	<td>Kompetensi Keahlian</td>
	<td>:</td>
	<td><select name="kompkeahlian" required>
	<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
	<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
	<option value="Akuntansi">Akuntansi</option>
	<option value="Perkantoran">Perkantoran</option>
	<option value="Pemasaran">Pemasaran</option>
	</select>
	</td>
</tr>
<tr>
	<th>Program Keahlian</th>
	<td>:</td>
	<td>
	<select name="progkeahlian" required>
	<option value="Teknik Komputer dan Informatika">Teknik Komputer dan Informatika</option>
	<option value="Bisnis Manajemen">Bisnis Manajemen</option>
	</select>
	</td>
</tr>
<tr>	
	<th>Nilai Akhir</th>
	<td>:</td>
	<td><input type="text" name="nilaiakhir" size="30" required></td>
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
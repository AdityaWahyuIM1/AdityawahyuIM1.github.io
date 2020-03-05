<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
    <div class="judul">
	    <h1>ADMINISTRATOR HALAMAN USER</h1>
	    <h2>SISTEM INFORMATIKA</h2>
	    <h3>Rekayasa Perangkat Lunak</h3>
	</div>
    
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
	    <table>
	        <tr>
			    <td>Password</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
			    <td>Username</td>
				<td><textarea name="user" rows="7" col="300"></textarea></td>
			</tr>
			<tr>
			    <td>Nama</td>
				<td><textarea name="nama" rows="7" col="300"></textarea></td>
			</tr>
			<tr>
			    <td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
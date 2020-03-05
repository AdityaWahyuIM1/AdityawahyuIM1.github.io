<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="wrap">
    <div class="judul">
	    <h1>ADMINISTRATOR</h1>
	    <h2>SISTEM INFORMATIKA</h2>
	    <h3>Rekayasa Perangkat Lunak</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Edit data</h3>
	
	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">
	    <table>
		    <tr>
			    <td>Password</td>
				<td>
				    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="pass" value="<?php echo $data['pass'] ?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><textarea name="user" rows="7" col="300"><?php echo $data['user']?></textarea></td>
			</tr>
			 <tr>
                <td>Nama</td>
                <td><textarea name="nama" rows="7" col="300"><?php echo $data['nama']?></textarea></td>
			</tr>
			
			<tr>
			    <td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
			</table>
		</form>
		<?php } ?>
</body>
</html>
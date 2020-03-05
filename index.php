<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="shortcut icon" href="images/icon.jpg" />
<title>SISTEM INFORMATIKA</title>
</head>
<body>
<div id="container"> 
<center><img src="images/adit.jpg" /></center>
<div id="menu">
<ul>

<li> <a href="?dir=depan&link=welcome"> HOME </a> </li>
<li> <a href="?dir=depan&link=program_keahlian"> PROGRAM KEAHLIAN </a> </li>
<li> <a href="?dir=depan&link=mapel"> MAPEL </a> </li>
<li> <a href="?dir=depan&link=guru"> DAFTAR GURU </a> </li>
<li> <a href="?dir=depan&link=siswa"> DAFTAR SISWA </a> </li>
<li> <a href="?dir=depan&link=nilai"> NILAI AKHIR </a> </li>
<li> <a href="?dir=guesbook&link=guesbook"> BUKU TAMU </a> </li>
<li></li>	
</ul>
</div>
<div id="kiri">
<div id="form_login">
<h4>Login</h4>
<form name="form_login" method="post" action="proses/log.php?op=in">
<strong><label>Username</label></strong><input type="text" name="username" placeholder="Username" required="required" />
<strong><label>Password</label></strong>
<input type="Password" name="password" placeholder="password" required="required" />
<input type="submit" name="submit" value="Login" />
<input type="reset" name="reset" value="Reset" />
</form>
</div>
<br />
<br />
<center><img src="images/aldhi.jpg" /></center>
</div>
<div id="kanan">
<?php
include "config/koneksi.php";
?>

<?php
			if(!empty($_GET["dir"]) && !empty($_GET["link"])) {
				include $_GET["dir"]."/".$_GET["link"].".php";
			} else {
				include "depan/welcome.php";
			}
			?>

<br/>
</div>
<div id="footer"><strong>&copy; Copyright by <a href="http://instagram/widdyaip">Sofware Studio</a></strong></div>
</div>
<div id="credit"><strong>Design Layout | PHP & MYSQL Developed by <a href="http://instagram/widdyaip">Sofware Studio</a></strong></div>
</body>
</html>
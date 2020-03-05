<html>
<head></head>
<body>
<h1>MAPEL</h1>

  <table border="1"class="table" width="100%">
    <tr>
	  <th>No.</th>
	  <th>Nama Mapel</th>
	  <th>Kode Mapel</th>
	</tr>
	<?php
	include("./config/koneksi.php");
	$query_mysql=mysql_query("SELECT*FROM mapel")or die(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>
	<tr>
	  <td width="20"><?php echo $nomor++;?></td>
	  <td width="130"><?php echo $data['nama_mapel'];?></td>
	  <td width="130"><?php echo $data['kode_mapel'];?></td>
	</tr>
	<?php } ?>
  </table>
  </body>
  </html>
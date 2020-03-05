<html>
<head></head>
<body>
<h1>PROGRAM KEAHLIAN</h1>

    <table border="1" class="table" align="center">
	    <tr>
		    <th>No.</th>
			<th>Kode Program</th>
			<th>Nama Program</th>
		</tr>
		<?php
		include("./config/koneksi.php");
		$query_mysql = mysql_query("SELECT*FROM program_keahlian")or die(mysql_error());
		$nomor = 1;
	    while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
	  <td width="20"><?php echo $nomor++;?></td>
	  <td width="130"><?php echo $data['kode_program'];?></td>
	  <td width="130"><?php echo $data['nama_program'];?></td>
	</tr>
	<?php } ?>
  </table>
  </body>
  </html>
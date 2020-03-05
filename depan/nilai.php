<head></head>
<body>
<h1>NILAI AKHIR</h1>

  <table border="1"class="table" width="100%">
    <tr>
	  <th>No.</th>
	  <th>Nis</th>
	  <th>Nama</th>
	  <th>Kompetensi Keahlian</th>
	  <th>Program Keahlian</th>
	  <th>Nilai Akhir</th>
	</tr>
	<?php
	include("./config/koneksi.php");
	$query_mysql=mysql_query("SELECT*FROM nilai_akhir")or die(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>
	<tr>
	  <td width="20"><?php echo $nomor++;?></td>
	  <td width="130"><?php echo $data['nis'];?></td>
	  <td width="130"><?php echo $data['nama'];?></td>
	  <td width="130"><?php echo $data['kompkeahlian'];?></td>
	  <td width="130"><?php echo $data['progkeahlian'];?></td>
	  <td width="130"><?php echo $data['nilaiakhir'];?></td>
	</tr>
	<?php } ?>
  </table>
  </body>
  </html>
<?php

include '../../model/siswa.php';

$DataSiswa = getDataSiswa();

while ($data = $DataSiswa->fetch_assoc()) {
    

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>siswa</title>
</head>
<body>
	<h1>table siswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>NIK</th>

		</tr>
		<?php 
		$id = 1;
		foreach ($DataSiswa as $da) { ?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $da["nama"]; ?></td>
				<td><?php echo $da["tgl_lahir"]; ?></td>
				<td><?php echo $da["nik"]; ?></td>
				
			</tr>
		<?php } ?>
		<?php $id++; ?>
	</table>

</body>
</html>
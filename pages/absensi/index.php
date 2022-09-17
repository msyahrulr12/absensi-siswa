<?php

include '../../model/absensi.php';

$DataAbsensi = getDataAbsensi();

while ($data = $DataAbsensi->fetch_assoc()) {
    

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>absen</title>
</head>
<body>
	<h1>table absen</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>JAM MASUK</th>
			<th>JAM KELUAR</th>
			<th>TANGGAL</th>
		</tr>
		<?php 
		$id = 1;
		foreach ($DataAbsensi as $da) { ?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $da["jam_masuk"]; ?></td>
				<td><?php echo $da["jam_keluar"]; ?></td>
				<td><?php echo $da["tanggal"]; ?></td>
			</tr>
		<?php } ?>
		<?php $id++; ?>
	</table>


</body>
</html>
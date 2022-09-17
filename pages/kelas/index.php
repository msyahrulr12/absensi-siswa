<?php

include '../../model/kelas.php';

$Datakelas = getDataKelas();
?>
<!DOCTYPE html>
<html>
<head>
	<title>kelas</title>
</head>
<body>
	<h1>table kelas</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>KELAS</th>
			<th>KODE</th>
			
		</tr>
		<?php 
		$id = 1;
		foreach ($Datakelas as $da) { ?>
			<tr>
				<td>
                    <a href="./show.php?id=<?=$id?>">
                        <?php echo $id; ?>
                    </a>
                </td>
				<td><?php echo $da["kelas"]; ?></td>
				<td><?php echo $da["kode"]; ?></td>
				
			</tr>
		<?php } ?>
		<?php $id++; ?>
	</table>

</body>
</html>
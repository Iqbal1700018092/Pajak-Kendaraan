<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1></h1>
	<table border="1">
		<tr>
			<th>NIK</th>
			<th>Nomor Polisi</th>
			<th>Nomor Rangka </th>
		
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nik ?></td>
			<td><?php echo $u->nomorpolisi ?></td>
			<td><?php echo $u->nomorrangka ?></td>
		
		</tr>
		<?php } ?>
	</table>
</body>
</html>
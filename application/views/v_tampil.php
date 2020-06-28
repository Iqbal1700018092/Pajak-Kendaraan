<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <style>
body {
background-color: #708090 }
</style>
</head>
<body>
	<div class="container">
 <center><h2><font color="#000000"><br> DATA PAJAK KENDARAAN</br></font></h2>
 </center>    
  <table class="table table-bordered table-medium  " style="background-color:	#00FF00">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nomor Polisi</th>
			<th>Nomor Rangka</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nik ?></td>
			<td><?php echo $u->nomorpolisi ?></td>
			<td><?php echo $u->nomorrangka ?></td>
			<td>
			    <?php echo anchor('crud/edit/'.$u->id,'Ubah'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Delete'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
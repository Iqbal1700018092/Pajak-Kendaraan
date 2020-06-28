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
</head>
	<style>
body{
	background-color: #708090  }
	.btn_brown{
		background-color: brown;
	}
	</style>
	<div class="container">
  <center><h2><font color="	#000000">UBAH DATA PAJAK KENDARAAN</h2></center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<h2><b><font color="#000000"></h2></b>
				<label for="nik">NIK :</label>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control" id="nik" placeholder="Masukkan NIK anda" name="nik" value="<?php echo $u->nik ?>">
			</div>
			<div class="form-group">
				<label for="nomorpolisi">Nomor Polisi :</label>
					<input type="text" class="form-control" id="nomorpolisi" placeholder="Masukkan Nomor Polisi anda" name="nomorpolisi" value="<?php echo $u->nomorpolisi ?>">
			</div>
			<div class="form-group">
				<label for="nomorrangka">Nomor Rangka :</label>
					<input type="text" class="form-control" id="nomorrangka" placeholder="Masukkan Nomor Rangka anda" name="nomorrangka" value="<?php echo $u->nomorrangka ?>">
			</div>
	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn_style btn_brown"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
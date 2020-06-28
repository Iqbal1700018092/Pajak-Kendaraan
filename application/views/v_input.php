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
  <center><h2><font color="	#000000">FORM PENDAFTARAN PAJAK  </h2></center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<h2><b><font color="#000000"></h2></b>
				<label for="nik">NIK :</label>
				<input type="nik" class="form-control"  id="nik" placeholder="Masukkan NIK anda" name="nik">
			</div>
			<div class="form-group">
				<label for="nomorpolisi">Nomor Polisi :</label>
				<input type="nomorpolisi" class="form-control" id="nomorpolisi" placeholder="Masukkan Nomor Polisi anda" name="nomorpolisi">
			</div>
			<div class="form-group">
				<label for="nomorrangka">Nomor Rangka :</label>
				<input type="nomorrangka" class="form-control" id="nomorrangka" placeholder="Masukkan Nomor Rangka anda" name="nomorrangka">
			</div>

			<tr>
				<td></td>
				<td><input type="submit" value="DAFTAR" class="btn_style btn_brown"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
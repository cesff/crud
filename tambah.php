<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
	<br>
	<center><b>SILAHKAN ISI BIODATA</b></center>
	<br>
	<form action="proses.php?aksi=tambah" method="post">
	<div class="form-group row">
		<label  class="col-sm-2 col-form-label"><b>Nama </b></label>
		<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama..." required> 
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
		<div class="col-sm-10">
		<input type="date" name="tanggal_lahir" class="form-control">
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label" ><b>Tempat Lahir</b></label>
        <div class="col-sm-10">
		<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan TempatLahir..."required>
		</div>
		</div>

		<fieldset class="form-group">
    	<div class="row">
      	<legend class="col-form-label col-sm-2 pt-0"><b>Jenis Kelamin</b></legend>
      	<div class="col-sm-10">
        <div class="form-check">
		<input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-Laki" checked>
        <label class="form-check-label" for="gridRadios1">Laki-Laki</label></div>
		<div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
        <label class="form-check-label" for="gridRadios2">Perempuan</label></div></div></div>
		<br>
		
		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Agama</b></label>
		<div class="col-sm-10">
		<select name="agama" class="form-control" >
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
		<option value="Khatolik">Khatolik</option>
		</select></div></div>	
		
		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Alamat</b></label>
		<div class="col-sm-10">
		<textarea name="alamat"	class="form-control" required placeholder="Masukan Alamat..." ></textarea><br><br>						
		</div></div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Motivasi Hidup </b></label>
		<div class="col-sm-10">
		<textarea name="motivasi_hidup" class="form-control" required placeholder="Masukan Motivasi Hidup..."></textarea><br><br>						
		<button type="submit" class="btn btn-success" name="simpan">Simpan</button>

	</form>
</body>

</html>
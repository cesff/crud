<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>

<body>

	<?php
	include 'database.php';
	$biodata = new Biodata();
	foreach ($biodata->edit($_GET['id']) as $data) {
		$id2 = $data['id'];
		$nama2 = $data['nama'];
		$tanggal_lahir2 = $data['tanggal_lahir'];
		$tempat_lahir2 = $data['tempat_lahir'];
		$jenis_kelamin2 = $data['jenis_kelamin'];
		$agama2 = $data['agama'];
		$alamat2 = $data['alamat'];
		$motivasi_hidup2 = $data['motivasi_hidup'];
	}
	?>
		<br>
		<center><b>EDIT BIODATA </b></center>
		<br>
		<form action="proses.php?aksi=update" method="post">

		<input type="hidden" name="id" value="<?php echo $id2 ?>">

		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Nama </b></label>
		<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" value="<?php echo $nama2 ?>" required>
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
		<div class="col-sm-10">
		<input type="date"  class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir2 ?>">
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
        <label class="form-check-label" for="gridRadios2">Perempuan</label>
		</div>
		</div>
		</div>
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
		</select>
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Alamat </b></label>
		<div class="col-sm-10">
		<Input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>"></textarea>
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label"><b>Motivasi Hidup </b></label>
		<div class="col-sm-10">
		<input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>"></textarea>
		<br>


		<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		
		
		</form>

		</body>

		</html>
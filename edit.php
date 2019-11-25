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
	<form action="proses.php?aksi=update" method="post">	
	<div class="container">
	<div class="row">
		<div class="col-md-12" style="padding:20px">
			<div class="card">
		
		<div class="card-header"><center><b>EDIT BIODATA</b></center></div>
		<div class="card-body">
		<input type="hidden" name="id" value="<?php echo $id2 ?>">

		<div class="form-group">
		<label ><b>Nama </b></label>
		<input type="text" name="nama" class="form-control" value="<?php echo $nama2?>">
		</div>

		<div class="form-group">
		<label ><b>Tanggal Lahir</b></label>
		<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir2?>">
		</div>

		<div class="form-group">
		<label><b>Tempat Lahir </b></label>
		<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir2 ?>">
		</div>
		
		<div class="form-group">
		<label><b>Jenis Kelamin</b></label><br>
      	<input  type="radio" name="jenis_kelamin" value="Laki-Laki" checked><b> Laki Laki </b><br> 
        <input  type="radio" name="jenis_kelamin" value="Perempuan"><b> Perempuan</b></label>
		</div>
	

		<div class="form-group">
		<label><b>Agama</b></label>
		<select name="agama" class="form-control" >
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
		<option value="Khatolik">Khatolik</option>
		</select>
		</div>
		
		<div class="form-group">
		<label ><b>Alamat </b></label>
		<Input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>">
		</div>
		
		<div class="form-group">
		<label ><b>Motivasi Hidup </b></label>
		<input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>"></textarea>
		</div>
		


		<div class="form-group">
								<button class="btn btn-primary btn-block" name="simpan">Simpan</button>
									</div>
							</div>
							
						</div>
					</div>
				</div>
				<footer>
				<center><b>&copy; Rizky Syaefuloh</b></center>
				</footer>
				
		</form>			
		</body>
		</html>
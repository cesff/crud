<!DOCTYPE html>
	<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	<body>
			
			<?php
    include 'database.php';
    $biodata= new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data){
        $id2=$data['id'];
        $nama2=$data['nama'];
		$tanggal_lahir2=$data['tanggal_lahir'];
		$tempat_lahir2=$data['tempat_lahir'];
		$jenis_kelamin2=$data['jenis_kelamin'];
		$agama2 = $data['agama'];
		$alamat2 = $data['alamat'];
		$motivasi_hidup2 = $data['motivasi_hidup'];
	}
	?>
	
	
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>BIODATA</b></center></div>
	
							<div class="card-body">
								<form action="index.php" method="post">
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
		<label ><b>Jenis Kelamin</b></label>
		<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $jenis_kelamin2?>">
		</div>
		<div class="form-group">
		<label ><b>Agama</b> </label>
		<input type="text" name="agama" class="form-control" value="<?php echo $agama2?>">
		</div>
		<div>
		<div class="form-group">
		<label><b>Alamat </b></label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>">
		</div>
		<div class="form-group">
		<label><b>Motivasi Hidup </b></label>
		<input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>">
		</div>

									<div class="form-group">
								<button class="btn btn-success btn-block">Kembali</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- End Content-->
	
			<!-- footer -->
			<footer>
				<center><b>&copy; Rizky Syaefuloh</b></center>
	
			</footer>
			<!--  End Footer-->
	
			<!-- Js -->
			<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
			<!-- End Js -->
	
	</body>
	</html>
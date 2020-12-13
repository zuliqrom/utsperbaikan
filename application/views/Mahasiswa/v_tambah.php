<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<nav class="navbar navbar-dark bg-success navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
			<a href="<?= site_url('mahasiswa/index')?>" class="nav-link">Home</a>
			<a href="<?= site_url('mahasiswa/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">zuliqrom</a>

		</div>
	</nav>

	<div class="alert alert-primary text-center mt-4">
		Data Mahasiswa
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Form Data Mahasiswa</div>
					<div class="card-body">
						<form action="<?=site_url('mahasiswa/proses_tambah')?>" method="post">
							<div class="form-group">
								<label for="">Nim</label>
								<input type="text" class="form-control" name="txtnim">
							</div>
							<div class="form-group">
								<label for="">Nama</label>
								<input type="text" class="form-control" name="txtnama">
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<textarea name="txtalamat" id="" cols="30" rows="3" class="form-control"></textarea>
							</div>
							<input type="submit" name="submit" value="simpan" class="btn btn-primary">
							<a href="<?=site_url('mahasiswa')?>" class="btn btn-warning" >batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
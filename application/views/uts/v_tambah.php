<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shodow bg-primary"
	 style="background-color: #3175bf">
		<a href="#" class="navbar-brand">UTS</a>

		<div class="navbar-nav">
			<a href="<?= site_url('CController/index')?>" class="nav-link active">Home</a>
			<a href="<?= site_url('CController/tambah')?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">ZULLIQROM</a>
		</div>
	</nav>

	<div class="alert-success text-center mt-2">
		Tambah Data Kampus
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header"> Form Data Kampus </div>
						<form action="<?= site_url('CController/proses_tambah') ?>" method="post">
							<div class="form-group">
								<label for = "">Jurusan</label>
									<input type="text" class="form-control" name="txtjurusan">
								</div>
								<div class="form-group">
									<label for = "">Kelas</label>
										<input type="text" class="form-control" name="txtkelas">
								</div>
								<div class="form-group">
									<label for = "">Isi</label>
										<input type="text" class="form-control" name="txtisi">
								</div>
								<input type="submit" name="submit" value="simpan" class="btn btn-primary">
								<a href="<?= site_url('CController/index')?>" class="btn btn-warning">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>
</body>
</html>
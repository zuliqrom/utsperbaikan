<!DOCTYPE html>
<html>
<head>
	<title>UTS WEB LANJUT</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shodow bg-primary"
	 style="background-color: #3175bf">
		<a href="#" class="navbar-brand">UTS</a>

		<div class="navbar-nav">
			<a href="<?= site_url('CController/index')?>" class="nav-link active">Home</a>
			<a href="<?= site_url('Ccontroller/tambah')?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">ZULIQROM</a>
		</div>
	</nav>

	<div class="alert-success text-center mt-2">
		Data Kampus
	</div>

	<div class="container">
		<table class="table table-bordered table-sm">
			<thead>
			<tr>
				<th width="10%">No</th>
				<th>Jurusan</th>
				<th>Kelas</th>
				<th>Isi</th>
				<th width="15%">Aksi</th>
			</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($tabel as $isi ) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $isi->kolom_jurusan; ?></td>
					<td><?php echo $isi->kolom_kelas; ?></td>
					<td><?php echo $isi->kolom_isi; ?></td>
					<td>
						<a href="" class="btn btn-warning btn-sm">Edit</a>
						<a href="" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
		</table>
	</div>
</body>
</html>
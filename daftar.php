<?php
include 'functions.php';
if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
			echo "<script>
		alert('Berhasil ditambahkan');
		document.location.href = 'pendaftar.php';
		</script>";
		} else {
			echo "<script>
		alert('Gagal ditambahkan');
		document.location.href = 'pendaftar.php';
		</script>";
	}
}
?>
<!-- Hello Brahmasta Bagus Aryandra -->
<!-- Selamat Mengoding -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="X RPL 2">
		<meta name="keywords" content="HTML,CSS,C++">
		<meta name="author" content="Brahmasta Bagus A">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/fontawesome.min.css">
		<link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.min.css">
		<link rel="stylesheet" href="css/home.css">
		<title>Pendaftaran | GriyaSoft</title>
	</head>
	<style>
		body {
			background: url(img/1_l3wujEgEKOecwVzf_dqVrQ.jpeg) no-repeat;
			background-size: 100%;
		}
	</style>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="index.php">GriyaSoft</a>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item navbar1">
						<a class="nav-link" href="index.php">Rumah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="daftar.php">Pendaftaran</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pendaftar.php">Pendaftar</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h3 class="text-center">Formulir Pendaftaran PKL di Griya Software</h3>
			<hr class="col-md-6">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<form action="" method="post">
						<div class="form-group">
							<label for="nis">NIS : </label>
							<input type="number" class="form-control" id="nis" placeholder="NIS"autocomplete="off" name="nis">
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap : </label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"autocomplete="off" name="nama">
						</div>
						<div class="form-group">
							<label for="tempat">Tempat Lahir :</label>
							<input type="text" class="form-control" id="tempat" placeholder="Tempat"autocomplete="off" name="tempat_lahir">
						</div>
						<div class="form-group">
							<label for="tempat">Tanggal Lahir :</label>
							<input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal_lahir">
						</div>
						<label for="jenis">Jenis Kelamin :	</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="jenis_kelamin" value="l" id="laki">
							<label class="custom-control-label" for="laki">
								Laki-Laki
							</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="jenis_kelamin" value="p" id="perempuan">
							<label class="custom-control-label" for="perempuan">
								Perempuan
							</label>
						</div>
						<br>
						<div class="form-group">
							<label for="alamat">Alamat : </label>
							<input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" autocomplete="off" name="alamat">
						</div>
						<label for="jenis">Lama PKL :	</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="lama_pkl" value="3" id="3">
							<label class="custom-control-label" for="3">
								3 Bulan
							</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="lama_pkl" value="6" id="6">
							<label class="custom-control-label" for="6">
								6 Bulan
							</label>
						</div>
						<br>
						<button type="submit" class="btn btn-success col-md-12" name="submit">Daftar</button>
					</form>
				</div>
			</div>
		</div>
		<sript src= "bootstrap-4.0.0/dist/js/bootstrap.min.js"></sript>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
	</body>
</html>
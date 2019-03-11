<?php
	session_start();
	include 'functions.php';

	$pendaftar = "SELECT * FROM pendaftar";
	$query = mysqli_query($conn, $pendaftar);
	if (isset($_POST["cari"])) {
		$pendaftar = cari($_POST["keyword"]);
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
		<title>Pendaftar | GriyaSoft</title>
	</head>
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
						<a class="nav-link" href="index.php"><i class="fas fa-home"></i> Rumah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#pendaftar"><i class="fas fa-paper-plane"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="pendaftar.php"><i class="fas fa-list"></i> Pendaftaran</a>
					</li>
				</ul>	
			</div>
		</nav>
		<div class="container">
			<h3 class="text-center">Pendaftar PKL di Griya Software</h3>
			<hr>
			<table class="table text-center table-stripped table-hover table-responsive-xl-lg-md-sm">
				<caption>Jumlah Pendaftar : <?= mysqli_num_rows($query); ?></caption>
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIS</th>
						<th scope="col">Nama</th>
						<th scope="col">Tempat, Tanggal Lahir</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Alamat</th>
						<th scope="col">Lama PKL</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($query as $row) : ?>
					<tr>
						<td><?= $i; ?></td>
						<td scope="row"><?= $row["nis"]; ?></td>
						<td><?= $row["nama"] ?></td>
						<td><?= $row["tempat_lahir"]; ?>, <?= $row["tanggal_lahir"]; ?></td>
						<td><?= $row["jenis_kelamin"] ?></td>
						<td><?= $row["alamat"] ?></td>
						<td><?= $row["lama_pkl"] ?></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<sript src= "bootstrap-4.0.0/dist/js/bootstrap.min.js"></sript>
		<script src="jquery.min.js"></script>
	</body>
</html>
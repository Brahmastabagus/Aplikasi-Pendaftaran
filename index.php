<?php
	session_start();
	include 'functions.php';
	if (isset($_POST["submit"])) {
		if (tambah($_POST) > 0) {
			echo "<script>
				alert('Berhasil ditambahkan');
				document.location.href = 'index.php';
				</script>";
		} else {
			echo "<script>
				alert('Gagal ditambahkan');
				document.location.href = 'index.php';
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/regular.css" integrity="sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<title>GriyaSoft</title>
	</head>
	<style>
		html {
			overflow-x: hidden;
		}
		.container-fluid1 {
			height: 609px;
		}
		.container-fluid {
			background-attachment: fixed;
		}
		.navbar {
			background-color: #f1b52e !important;
		}
		.container {
			margin-bottom: 30px;
		}
		.pendaftar {
			background-image: url(img/Simple-Background-Images-53.png);
			background-repeat: no-repeat;
			background-position: bottom;
			height: 650px;
			padding-top: 15px !important;
			margin-bottom: 10px;
		}
		.daftar {
			border-radius: 10px;
			background-color: white;
		}
		button {
			margin-bottom: 10px;
  			box-shadow: 0 9px #999 !important;
  			 border: none !important;
  			  outline: none !important;
		}
		button:hover {background-color: #3e8e41;}
		button:active {
		  background-color: #3e8e41 !important;
		  box-shadow: 0 3px #666 !important;
		  transform: translateY(2px) !important;
		}
		img {
			width: 300px;
			height: 200px;
			position: relative;
			left: 30px;
			transition: .2s;
		}
		img:hover {
			box-shadow: 5px 5px 60px 5px black;
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
						<a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Rumah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" href="#pendaftar"><i class="fas fa-paper-plane"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" href="pendaftar.php"><i class="fas fa-list"></i> Pendaftaran</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid container-fluid1">
			<h4 class="mb-lg-5 pb-5">PKL Di Griya Software Banjarnegara</h4>
			<div class="container pt-5 mt-5">
				<div class="row pt-5 mt-5">
					<div class="col text-center position-relative pt-5 mt-5">
						<a class="a mt-5" href="#pendaftar">
							<div class="div-a">Mendaftar</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h5 class="tentang">Tentang</h5>
			<hr>
			<div class="row">
				<div class="col-md-5 offset-md-1">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto corporis, cumque recusandae ut molestiae placeat tempore eaque repellendus dolore porro aliquam quas reiciendis, unde, rem voluptates repellat deleniti ipsum doloremque obcaecati fugit neque magnam, aperiam. Temporibus perferendis aspernatur sapiente ad excepturi, ea earum quisquam qui error, tenetur fugiat ex enim.
				</div>
				<div class="col-md-5">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto corporis, cumque recusandae ut molestiae placeat tempore eaque repellendus dolore porro aliquam quas reiciendis, unde, rem voluptates repellat deleniti ipsum doloremque obcaecati fugit neque magnam, aperiam. Temporibus perferendis aspernatur sapiente ad excepturi, ea earum quisquam qui error, tenetur fugiat ex enim.
				</div>
			</div>
			<br>
			<h5 class="tentang">Projek</h5>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
				<div class="col-md-4">
					<img src="img/89091255-programming-code-abstract-technology-background-of-software-developer-and-computer-script.jpg" alt="Programming" class="img-thumbnail">
				</div>
			</div>
		</div>
		<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar" style="padding-top: 10px;">
				<h3 class="text-center">Formulir Pendaftaran PKL di Griya Software</h3>
				<hr class="col-md-6">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<form action="" method="post">
							<div class="form-group">
								<label for="nis">NIS : </label>
								<input type="text" class="form-control" id="nis" placeholder="NIS"autocomplete="off" name="nis" maxlength="5">
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
							<button type="submit" class="btn btn-success col-md-12 mb-3" name="submit">Daftar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="position: relative; top: 20px;">
			<div class="container">
				<p>Copyright &copy; <?= date("Y"); ?> By Brahmasta Bagus Aryandra</p>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="jquery.min.js"></script>
		<script src="fontawesome-free-5.5.0-web/js/fontawesome.min.js"></script>
	</body>
</html>
<?php 
	$conn = mysqli_connect("localhost", "root", "", "daftar_griyasoft");

	function query ($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {
		global $conn;
		$nis = htmlspecialchars($data["nis"]);
		$nama = htmlspecialchars($data["nama"]);
		$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
		$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
		$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$lama_pkl = htmlspecialchars($data["lama_pkl"]);

		$query = "INSERT INTO pendaftar VALUES ('', '$nis', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$lama_pkl')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
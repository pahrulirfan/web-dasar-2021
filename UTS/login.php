<?php
session_start();

require 'setting.php';
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username");

	if (mysqli_num_rows($query) === 1) {
		$data = mysqli_fetch_object($query);

		if (password_verify($password, $data->password)) {
			
			$_SESSION['login'] = true;
			$_SESSION['nama_lengkap'] = $data->nama_lengkap;

			header('location: index.php');
		}
	}

	$error = true;
}
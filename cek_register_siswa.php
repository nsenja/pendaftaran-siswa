<?php
	include 'config.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$result = mysqli_query($db, "INSERT INTO users(nama, username, password, roles) VALUES ('$nama', '$username', '$password','siswa')");
	$cek = mysqli_num_rows($result);

	header('location:login_siswa.php');
?>
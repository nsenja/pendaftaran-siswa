<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$id_user= $_POST['iduser'];
$username= $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// query SQL untuk insert data
$query = mysqli_query($db,
		"UPDATE tbuser
		SET iduser='$id_user', username='$username', email='$email', password='$password'
		WHERE iduser='$id_user'"
	);
// mengalihkan ke halaman transaksi.php
header("location:../index.php?p=user");
?>
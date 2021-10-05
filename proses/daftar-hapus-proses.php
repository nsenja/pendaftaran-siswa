<?php
include '../koneksi.php';
$id_daftar=$_GET['id_daftar'];

mysqli_query($db,
	"DELETE FROM pendaftaran
	WHERE id_daftar='$id_daftar'"
);

header("location:../index.php?p=daftar");
?>
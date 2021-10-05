<?php
include '../config.php';

$nis = $_POST['nis'];

mysqli_query($db,
	"DELETE FROM calon_siswa
	WHERE nis='$nis'"
);

header("location:../index.php?p=beranda");
?>
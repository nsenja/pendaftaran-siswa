<?php
include '../koneksi.php';
$id_daftar=$_POST['id_daftar'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$tgldaftar=$_POST['tgldaftar'];

if(isset($_POST['simpan'])){
	mysqli_query($db, "INSERT INTO pendaftaran (id_daftar, first_name, last_name, tgldaftar) VALUES ('$id_daftar', '$first_name', '$last_name', '$tgldaftar')");
	header("location:../index.php?p=daftar");
}
?>
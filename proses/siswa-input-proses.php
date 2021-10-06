<?php
include '../config.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai = $_POST['nilai'];
$status = $_POST['status'];

if (isset($_POST['submit'])) {
    $sql =
        "INSERT INTO calon_siswa
		VALUES('$nis','$nama','$tempat_lahir', '$tgl_lahir ','$jenis_kelamin','$asal_sekolah','$nilai','$status')";
    $query = mysqli_query($db, $sql);
    // mysqli_query($db, "INSERT INTO pendaftaran (id_daftar, first_name, last_name, tgldaftar) VALUES ('$id_daftar', '$first_name', '$last_name', '$tgldaftar')");
    header("location:../pages/beranda.php");
} else {
    header('Location:../index.php?status=gagal');
}

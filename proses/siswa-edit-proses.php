<?php
include '../config.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$nilai = $_POST['nilai'];
$status = $_POST['status'];

if (isset($_POST['submit'])) {

    $sql = "UPDATE calon_siswa
		SET nis='$nis',
    nama='$nama',
    tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tgl_lahir',
    jenis_kelamin ='$jenis_kelamin',
    asal_sekolah='$asal_sekolah',
    alamat='$alamat',
    nilai='$nilai',
    status='$status'
		WHERE id = '$id'";
    mysqli_query($db, $sql);

    header("location:../pages/user.php");
} else {
    header('location:../index.php?status=gagal');
}

<?php
include '../config.php';

$nis = $_POST['nis'];
$nama = $_POST['name'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$nilai = $_POST['nilai'];
$status = $_POST['status'];

if (isset($_POST['submit'])) {
    mysqli_query($db, "UPDATE calon_siswa 
		SET nama='$nama','ttl='$ttl',jenis_kelamin ='$jenis_kelamin',asal_sekolah='$asal_sekolah',alamat='$alamat',nilai='$nilai',status='$status'
		WHERE nis = '$nis'");
    header("location:../index.php?p=beranda");
} else {
    header('location:../index.php?status=gagal');
}


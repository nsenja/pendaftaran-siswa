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
    $sql =
        "INSERT INTO calon_siswa
		VALUES('$nis','$nama','$ttl''$jenis_kelamin','$asal_sekolah','$alamat','$nilai','$status')";
    $query = mysqli_query($db, $sql);
    // mysqli_query($db, "INSERT INTO pendaftaran (id_daftar, first_name, last_name, tgldaftar) VALUES ('$id_daftar', '$first_name', '$last_name', '$tgldaftar')");
    header("location:../index.php?p=beranda");
} else {
    header('Location:../index.php?status=gagal');
}

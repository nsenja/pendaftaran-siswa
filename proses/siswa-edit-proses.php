<?php 
    include('../config.php');

    // cek tombol daftar sudah di klik atau belum
    if (isset($_POST['submit'])) {
        // ambil data dari formulir yang sudah diisi 
      
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $alamat = $_POST['alamat'];
        $nilai = $_POST['nilai'];
        $status = $_POST['status'];

        // buat query data tersebut
        $sql = "UPDATE calon_siswa SET 
        nama='$nama',
        tempat_lahir='$tempat_lahir',
        tgl_lahir='$tgl_lahir',
        jenis_kelamin ='$jenis_kelamin',
        asal_sekolah='$asal_sekolah',
        alamat='$alamat',
        nilai='$nilai',
        status='$status'
        WHERE nis = '$nis'";

        $query = mysqli_query($db,$sql);

        // cek keberhasilan query
        if ($query) {
            header("location:../pages/user.php");
        } else {
            die("Gagal mengedit..");
        }
    } else {
        die("Akses dilarang..");
    }
?>


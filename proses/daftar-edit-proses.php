<?php
include '../koneksi.php';

$id_daftar=$_POST['id_daftar'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$tgldaftar=$_POST['tgldaftar'];

if(isset($_POST['simpan'])){
		
		// extract($_POST);
		// $nama_file   = $_FILES['foto']['name'];
		// if(!empty($nama_file)){
		// // Baca lokasi file sementar dan nama file dari form (fupload)
		// $lokasi_file = $_FILES['foto']['tmp_name'];
		// $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		// $file_foto = $id_anggota.".".$tipe_file;
		// // Tentukan folder untuk menyimpan file
		// $folder = "../images/$file_foto";
		// @unlink ("$folder");
		// // Apabila file berhasil di upload
		// move_uploaded_file($lokasi_file,"$folder");
		// }
		// else
		// 	$file_foto=$foto_awal;
	
	$query = mysqli_query($db,
		"UPDATE pendaftaran
		SET first_name='$first_name', last_name='$last_name', tgldaftar=$tgldaftar'
		WHERE id_daftar='$id_daftar'"
	);
	header("location:../index.php?p=daftar");
	}
?>

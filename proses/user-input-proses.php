<?php
include '../koneksi.php';

	$id_user= $_POST['iduser'];
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['simpan'])){
        mysqli_query($db, "INSERT INTO tbuser (iduser, username, email,  password) VALUES ('$id_user', '$username', '$email', '$password')");
        header("location:../index.php?p=user");
    }
?>
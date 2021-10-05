<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($db,
        "DELETE FROM calon_siswa
	WHERE id='$id'");
    header("location:../pages/user.php");
}

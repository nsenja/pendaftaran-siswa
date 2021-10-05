<?php
include '../config.php';

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];

    mysqli_query($db,
        "DELETE FROM calon_siswa
	WHERE nis='$nis'");
    header("location:../pages/user.php");
}

<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
if ($result->num_rows == 1) {
    $row = $result->fetch_object();
    $_SESSION['username'] = $row->username;
    $_SESSION['password'] = $row->password;
    return header("location:pages/beranda_siswa.php");
	// } else if($row['roles'] == 'siswa'){
	// 	session_start();
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['nama'] = $row['nama'];
	// 	$_SESSION['id_user'] = $row['id_user'];
	// 	$_SESSION['roles'] = 'siswa';
	// 	header('location:../pages/beranda_siswa.php');
	} else {
		header('location: login_siswa.php');
	}
?>
		
	


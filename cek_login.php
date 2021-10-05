<?php
session_start();

include 'config.php';

if (isset($_POST['username']) && ($_POST['password'])) {
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string(md5($_POST['password']));
    $sql = "SELECT * from users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_object();
        $_SESSION['username'] = $row->username;
        $_SESSION['password'] = $row->password;
        return header("location:pages/beranda.php");

    } else {
        $_SESSION['pesan'] = "Username atau Password salah";
    }

} else {
    $_SESSION['pesan'] = "Username atau password tidak boleh kosong";
}
return header("location:login.php");

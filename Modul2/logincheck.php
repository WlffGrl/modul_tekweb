<?php
session_start();
include 'koneksi.php';
if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username'AND password='$password' limit 1";
        
    $result = mysqli_query($conn,$query);
    $cek = mysqli_num_rows($result);
    if ($cek>0) {
        $_SESSION["login"] = true;
        header("Location: tampil.php");
        exit;
    }
    $error = true;
}
?>
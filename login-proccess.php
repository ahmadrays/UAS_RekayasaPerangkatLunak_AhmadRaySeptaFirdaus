<?php
if (isset($_POST['login'])) {
    include "koneksi-login.php";
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Hashing
    $password = sha1($password);
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE 
email='$email' AND password='$password'");
    $data = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) > 0) {
        header("Location:dashboard");
    } else {
        $_SESSION['danger'] = "Login gagal !";
        header("Location:index.php");
    }
}

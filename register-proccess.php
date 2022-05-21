<?php
if (isset($_POST['register'])) {
    include "koneksi-login.php";
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // Hashing
    $password = sha1($password);
    $confirm_password = sha1($confirm_password);
    $query = mysqli_query($koneksi, "SELECT email from user WHERE 
    email='$email'");
    $data = mysqli_fetch_array($query);
    // Validasi
    if ($email == $data['email']) {
        $_SESSION['danger'] = "E-mail Sudah digunakan";
        header("Location:index.php");
    } else {
        if ($password === $confirm_password) {
            $create = mysqli_query($koneksi, "INSERT INTO user 
            VALUES(null,'$name','$email','$password')");
            $_SESSION['name'] = $name;
            $_SESSION['success'] = "Selamat, " . $_SESSION['name'] . "
            pendaftaran kamu berhasil.";
            header("Location:index.php");
        } else {
            $_SESSION['danger'] = "Password tidak sama !";
            header("Location:index.php");
        }
    }
}


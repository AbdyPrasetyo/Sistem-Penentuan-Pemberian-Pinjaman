<?php
session_start();

include("../../koneksi.php");

$email   = $_POST['email'];
$pass    = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM tb_akun WHERE email='$email' AND password='$pass' LIMIT 1");

$cek   = mysqli_num_rows($login);
// echo $login;
if ($cek > 0) {
    $data =  mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
        $_SESSION['email']   = $email;
        $_SESSION['level']   = "admin";
        $_SESSION['status']  = "aktif";

        // echo $data;
        header("location:../Dasboard/html/index.php");
    } else if ($data['level'] == "user") {
        $_SESSION['email']   = $email;
        $_SESSION['level']   = "user";
        $_SESSION['status']  = "process";        

        header("location:../Dasboard/html/userview.php");
        // echo $data;git 
    }
} else {
    header("location:../login.php?pesan=gagal");
}

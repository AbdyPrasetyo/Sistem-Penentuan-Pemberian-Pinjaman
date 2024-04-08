<?php

include("../../koneksi.php");

$nama       = $_POST['nama'];
$username   = $_POST['username'];
$email      = $_POST['email'];
$pass       = md5($_POST['password']);
$level      = "user";
// $status     = "process";

$query = mysqli_query($conn, "INSERT INTO tb_akun (id_user, nama, username, email, password, level) VALUES(null,'$nama','$username','$email','$pass','$level')") or die(mysqli_error($conn));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../login.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

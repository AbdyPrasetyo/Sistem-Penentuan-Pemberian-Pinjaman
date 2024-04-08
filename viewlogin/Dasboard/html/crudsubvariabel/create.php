<?php
include('../../../../koneksi.php');

$title = $_POST['nama_sub_variabel'];
$category = $_POST['nama_variabel'];
$bobot  = $_POST['bobot'];

$data = mysqli_query($conn, "INSERT INTO tb_sub_variabel VALUES(null,'$category','$title','$bobot')") or die(mysqli_error($conn));;
if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../data-bobot.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
header("location:../data-bobot.php");

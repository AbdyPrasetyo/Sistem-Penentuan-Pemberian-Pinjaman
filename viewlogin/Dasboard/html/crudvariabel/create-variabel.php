<?php
include('../../../../koneksi.php');

$title = $_POST['variabel'];

$data = mysqli_query($conn, "INSERT INTO tb_variabel VALUES(null,'$title')") or die(mysqli_error($conn));;

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../data-variabel.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
header("location:../data-variabel.php");

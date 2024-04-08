<?php
include('../../../../koneksi.php');

$id    = $_POST['id_var'];
$var = $_POST['variabel'];

$data = mysqli_query($conn, "UPDATE tb_variabel SET nama_variabel='$var' WHERE id_variabel='$id'") or die(mysqli_error($conn));

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../data-variabel.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
header("location:../data-variabel.php");

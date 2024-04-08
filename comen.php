<?php

include("koneksi.php");

$nama       = $_POST['name'];
$email      = $_POST['mail'];
$subject      = $_POST['subject'];
$message      = $_POST['message'];


$query = mysqli_query($conn, "INSERT INTO comen (id, nama, email, subject, message) VALUES(null,'$nama','$email','$subject','$message')") or die(mysqli_error($conn));

if ($query) {
    echo "<script>alert('Komentar anda sudah kami terima!'); window.location='contact.php';</script>";
} else {
    echo "<script>alert('mohon maaf silahkan ulangi');</script>";
}

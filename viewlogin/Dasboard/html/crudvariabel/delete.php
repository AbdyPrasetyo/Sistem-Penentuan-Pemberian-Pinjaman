<?php
include('../../../../koneksi.php');

$id = $_GET['tes'];

mysqli_query($conn, "DELETE FROM tb_variabel WHERE id_variabel ='$id' ");

header("location:../data-variabel.php");

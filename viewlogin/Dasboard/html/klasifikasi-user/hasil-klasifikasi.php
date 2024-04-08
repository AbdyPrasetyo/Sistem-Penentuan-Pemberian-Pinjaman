<?php
include('../../../koneksi.php');

$pk = $_POST['pk'];
$jt = $_POST['jt'];
$st = $_POST['st'];
$pd = $_POST['pd'];
$bn = $_POST['bn'];

$ambil_data_training = mysqli_query($conn, "SELECT * FROM data_training ORDER BY id_data_training ASC");
$numrows = mysqli_num_rows($ambil_data_training);

//nilai k 
$k = 3;


//hitung knn
for ($i = 1; $i <= $numrows; $i++) {
    $ambildata = mysqli_query($conn, "SELECT * FROM data_training WHERE id_data_training='$i'");
    while ($data = mysqli_fetch_array($ambildata)) {
        $v1 = $pk - $data['pekerjaan'];
        $v2 = $jt - $data['jumlah_tanggungan'];
        $v3 = $st - $data['status_rumah'];
        $v4 = $pd - $data['pendapatan'];
        $v5 = $bn - $data['berkas_nasabah'];

        $v11 = (pow($v1, 2));
        $v22 = (pow($v2, 2));
        $v33 = (pow($v3, 2));
        $v44 = (pow($v4, 2));
        $v55 = (pow($v5, 2));


        $status = $data['output'];

        $hitung1 = $v11 + $v22 + $v33 + $v44 + $v55;
        $hitung2 = sqrt($hitung1);
        //penyimpanan sementara
        $simpan = mysqli_query($conn, "INSERT INTO temp VALUES (null,'$v11','$v22','$v33','$v44','$v55','$hitung2','$status')");
    }
}

//data sorting 
$s = 1;
$sorting =  mysqli_query($conn, "SELECT * FROM temp ORDER BY hasil DESC LIMIT 0,$k");
while ($datasorting = $sorting->fetch_assoc()) {

    if ($s == 3) {
        // echo $datasorting['id_sementara']; 
        $pku = $datasorting['pekerjaan'];
        $jtu = $datasorting['jumlah_tanggungan'];
        $sru = $datasorting['status_rumah'];
        $pdu = $datasorting['pendapatan'];
        $bnu = $datasorting['berkas_nasabah'];
        $su =  $datasorting['status'];
        //udah 
        // echo "data ke 3";
        $urut = mysqli_query($conn, "INSERT INTO sort VALUES (null,'$pku','$jtu','$sru','$pdu','$bnu','$hitung2','$su')");
    }
    $s++;
}

$tesHasil = mysqli_query($conn, "SELECT * FROM sort ORDER BY id_sort DESC LIMIT 0,1");
while ($dataTes = mysqli_fetch_array($tesHasil)) {
    $dataurut = mysqli_query($conn, "SELECT * FROM sort ORDER BY id_sort DESC");
    while ($dataX = mysqli_fetch_array($dataurut)) {
        if ($dataX['hasil'] == 0) {
            $statuss = $dataX['status'];
            $aa = $dataX['pekerjaan'];
            $bb = $dataX['jumlah_tanggungan'];
            $cc = $dataX['status_rumah'];
            $dd = $dataX['pendapatan'];
            $ee = $dataX['berkas_nasabah'];
            echo "Hasil klasifikasi Anda : $statuss ";
            break;
        }else {
            $statuss = $dataX['status'];
            $aa = $dataX['pekerjaan'];
            $bb = $dataX['jumlah_tanggungan'];
            $cc = $dataX['status_rumah'];
            $dd = $dataX['pendapatan'];
            $ee = $dataX['berkas_nasabah'];
            echo "Hasil klasifikasi Anda : $statuss ";
            break;
        }
    }
}




// menghapus history perhitungaan

$deleteS = mysqli_query($conn, "DELETE FROM temp ORDER BY id_temp ASC");


$simpan_data_training = mysqli_query($conn, "INSERT INTO data_training VALUES (null,'$pk','$jt','$st','$pd','$bn','$statuss')");
$simpan_data_testing = mysqli_query($conn, "INSERT INTO data_testing VALUES (null,'$pk','$jt','$st','$pd','$bn')");

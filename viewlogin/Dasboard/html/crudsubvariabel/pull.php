<?php
include('../../../koneksi.php');
$sql = mysqli_query($conn, "SELECT * FROM tb_variabel");
while ($data = mysqli_fetch_array($sql)) {
?>
    <option value="<?= $data['id_variabel'] ?>"><?= $data['nama_variabel'] ?></option>
<?php
}
?>
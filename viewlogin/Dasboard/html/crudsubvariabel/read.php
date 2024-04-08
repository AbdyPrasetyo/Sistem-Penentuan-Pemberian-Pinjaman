<?php
include('../../../koneksi.php');
$no = 1;

$query = mysqli_query($conn,  "SELECT * FROM tb_sub_variabel, tb_variabel where tb_sub_variabel.id_variabel=tb_variabel.id_variabel order by id_sub_variabel");
while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['nama_sub_variabel']; ?> </td>
        <td><?php echo $row['nama_variabel']; ?> </td>
        <td><?php echo $row['bobot']; ?> </td>
    </tr>

<?php
}
?>
<?php
include('../../../koneksi.php');
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM tb_variabel");
while ($row = mysqli_fetch_assoc($query)) {
?>
    <tr>
        <td> <?php echo $no++ ?> </td>
        <td> <?php echo $row['nama_variabel'] ?> </td>
        <td>
            <a href="../html/view-update-variabel.php?tes=<?php echo $row['id_variabel']; ?>" class="btn btn-info btn-icon-text">Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
            <a href="../html/crudvariabel/delete.php?tes=<?php echo $row['id_variabel']; ?>" class="btn btn-warning btn-icon-text">Delete <i class="mdi mdi-alert btn-icon-prepend"></i></a>
        </td>
    </tr>

<?php
}
?>
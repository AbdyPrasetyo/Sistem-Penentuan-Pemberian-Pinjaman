<?php include('../html/template/header.php'); ?>
<?php include('../html/template/sidebar.php'); ?>

<div class="page-wrapper">



    <div class="container-fluid">






        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Update Nama Variabel Data</h4>
                        <?php
                        include('../../../koneksi.php');
                        $tes = $_GET['tes'];
                        $data = mysqli_query($conn, "SELECT * FROM tb_variabel WHERE id_variabel='$tes'");
                        while ($row = mysqli_fetch_array($data)) {
                        ?>

                            <form class="forms-sample" method="POST" action="../html/crudvariabel/update.php">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Variabel</label>
                                    <input type="hidden" name="id_var" value="<?php echo $row['id_variabel']; ?>">
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="variabel" value="<?php echo $row['nama_variabel'] ?>">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a class="btn btn-dark" href="../html/data-variabel.php">Cancel</a>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('../html/template/footer.php'); ?>
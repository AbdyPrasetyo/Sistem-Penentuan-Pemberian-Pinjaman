<?php include('../html/template/header.php'); ?>
<?php include('../html/template/sidebaruser.php'); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Form Pengujian</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Klasifikasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">

                            <form class="form-horizontal" method="post" action="hasil.php">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <select name="pk" class="form-control" required>
                                        <option value=""></option>
                                        <?php
                                        include('../../../koneksi.php');
                                        $sql = mysqli_query($conn, "SELECT * FROM tb_sub_variabel WHERE id_variabel=1");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['bobot'] ?>"><?= $data['nama_sub_variabel'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Tanggungan</label>
                                    <select name="jt" class="form-control" required>
                                        <option value=""></option>
                                        <?php
                                        include('../../../koneksi.php');
                                        $sql = mysqli_query($conn, "SELECT * FROM tb_sub_variabel WHERE id_variabel=2");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['bobot'] ?>"><?= $data['nama_sub_variabel'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Rumah</label>
                                    <select name="st" class="form-control" required>
                                        <option value=""></option>
                                        <?php
                                        include('../../../koneksi.php');
                                        $sql = mysqli_query($conn, "SELECT * FROM tb_sub_variabel WHERE id_variabel=13");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['bobot'] ?>"><?= $data['nama_sub_variabel'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pendapatan</label>
                                    <select name="pd" class="form-control" required>
                                        <option value=""></option>
                                        <?php
                                        include('../../../koneksi.php');
                                        $sql = mysqli_query($conn, "SELECT * FROM tb_sub_variabel WHERE id_variabel=14");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['bobot'] ?>"><?= $data['nama_sub_variabel'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Berkas Nasabah</label>
                                    <select name="bn" class="form-control" required>
                                        <option value=""></option>
                                        <?php
                                        include('../../../koneksi.php');
                                        $sql = mysqli_query($conn, "SELECT * FROM tb_sub_variabel WHERE id_variabel=15");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['bobot'] ?>"><?= $data['nama_sub_variabel'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                <input type="reset" class="btn btn-dark" value="Cancel">
                            </form>



                        </h6>

                    </div>
                </div>
            </div>
        </div>















        <?php include('../html/template/footer.php'); ?>
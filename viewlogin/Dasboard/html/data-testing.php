<?php include('../html/template/header.php'); ?>
<?php include('../html/template/sidebar.php'); ?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Table</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Table</li>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Table Data Testing</h4>
                        <h6 class="card-subtitle">



                        </h6>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Pekerjaan</th>
                                        <th class="border-top-0">Jumlah Tanggungan</th>
                                        <th class="border-top-0">Status Rumah</th>
                                        <th class="border-top-0">Pendapatan</th>
                                        <th class="border-top-0">Berkas Nasabah</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('../../../koneksi.php');
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM data_training");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <tr>
                                                <td> <?php echo $no++ ?> </td>
                                                <td> <?php echo $row['pekerjaan'] ?> </td>
                                                <td> <?php echo $row['jumlah_tanggungan'] ?> </td>
                                                <td> <?php echo $row['status_rumah'] ?> </td>
                                                <td> <?php echo $row['pendapatan'] ?> </td>
                                                <td> <?php echo $row['berkas_nasabah'] ?> </td>
                                                
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




















<?php include('../html/template/footer.php'); ?>
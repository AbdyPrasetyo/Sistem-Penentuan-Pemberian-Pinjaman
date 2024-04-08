<?php include('../html/template/header.php'); ?>
<?php include('../html/template/sidebar.php'); ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>





    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Table Pesan Masuk</h4>
                        <h6 class="card-subtitle">



                        </h6>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Id Comen</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Subject</th>
                                        <th class="border-top-0">Message</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('../../../koneksi.php');
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM comen");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <tr>
                                                <td> <?php echo $no++ ?> </td>
                                                <td> <?php echo $row['id'] ?> </td>
                                                <td> <?php echo $row['nama'] ?> </td>
                                                <td> <?php echo $row['email'] ?> </td>
                                                <td> <?php echo $row['subject'] ?> </td>
                                                <td> <?php echo $row['message'] ?> </td>
                                                
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














    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->


    <?php include('../html/template/footer.php'); ?>
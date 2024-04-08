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
                        <h4 class="card-title">Basic Table</h4>
                        <h6 class="card-subtitle">


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                add data variabel
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="../html/crudsubvariabel/create.php" method="POST">

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Nama Sub Variabel</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" name="nama_sub_variabel">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelectGender">Nama Variabel</label>
                                                    <select class="form-control" id="exampleSelectGender" name="nama_variabel">
                                                        <option value="-">-</option>
                                                        <?php include('../html/crudsubvariabel/pull.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Bobot Nilai</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" name="bobot">
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button name="input" type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>



                        </h6>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Nama Sub Variabel</th>
                                        <th class="border-top-0">Nama Variabel</th>
                                        <th class="border-top-0">Nilai Bobot</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php include('../html/crudsubvariabel/read.php'); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>





















        <?php include('../html/template/footer.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Form Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/backend/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/backend/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../assets/backend/css/style.css">
    <!-- End layout styles -->
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form method="POST" action="../viewlogin/auth/action-login.php">
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="text" class="form-control p_input" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control p_input" name="password">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>

                                <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
                                <p class="sign-up">


                                    <a href="../index.php">Back to Artikel</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/backend/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/backend/js/off-canvas.js"></script>
    <script src="../assets/backend/js/hoverable-collapse.js"></script>
    <script src="../assets/backend/js/misc.js"></script>
    <script src="../assets/backend/js/settings.js"></script>
    <script src="../assets/backend/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
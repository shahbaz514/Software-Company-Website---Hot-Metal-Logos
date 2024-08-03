<?php
session_start();
session_abort();
include "../db/db.php";
if (isset($_SESSION['email']))
{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hot Metal Logos | Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="../admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../admin/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <a href="../index.php">
                                <img src="../images/logo.png" alt="logo">
                            </a>
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3"  action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="login">SIGN IN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">

                                </div>
                                <a href="forgot-password.php" class="auth-link text-black">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../admin/js/off-canvas.js"></script>
<script src="../admin/js/hoverable-collapse.js"></script>
<script src="../admin/js/template.js"></script>
<script src="../admin/js/settings.js"></script>
<script src="../admin/js/todolist.js"></script>
<!-- endinject -->
</body>

</html>

<?php
if (isset($_POST['login']))
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = mysqli_query($db, "SELECT * FROM users_site WHERE email = '$email' AND password = '$password'");
    $row = mysqli_fetch_array($sql);
    $count = mysqli_num_rows($sql);
    echo $count;
    if ($count > 0)
    {
        @session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        header("Location: index.php");
    }
    else
    {
        echo "<script>alert('Take An Error! Try Again.')</script>";
    }
}
?>
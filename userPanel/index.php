<?php
session_start();
session_abort();
include "../db/db.php";
if (!isset($_SESSION['email']))
{
    header("Location: login.php");
}
include 'inc/head.php';
include "inc/sidebar.php";
?>
    <!-- partial -->
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">WELCOME TO Hot Metal PORTAL</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto" style="padding-top:0px !important;">
                        <img src="../images/main.jpg" alt="people">
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Orders</p>
                                <p class="fs-30 mb-2">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `orders` WHERE email = '".$_SESSION['email']."'"));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Payment Pending Orders</p>
                                <p class="fs-30 mb-2">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `orders` WHERE status = 'Pending' AND email = '".$_SESSION['email']."'"));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Completed Orders</p>
                                <p class="fs-30 mb-2">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `orders` WHERE status = 'Completed' AND email = '".$_SESSION['email']."'"));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">In Process Orders</p>
                                <p class="fs-30 mb-2">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `orders` WHERE status = 'InProcess' AND email = '".$_SESSION['email']."'"));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Latest Orders</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="display expandable-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th scope="col">Sr. No.</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Total Price</th>
                                            <th scope="col">Discount</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        $sql = mysqli_query($db, "SELECT * FROM `cus_orders` WHERE email = '".$_SESSION['email']."' ORDER by id DESC LIMIT 0,3");
                                        while ($row = mysqli_fetch_array($sql))
                                        {
                                            ?>
                                            <tr>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php echo $i; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php echo $row['orderid']; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php
                                                    echo $row['p_name'];
                                                    ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php
                                                    echo $row['p_desc'];
                                                    ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php echo $row['p_price']; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php echo $row['p_discount']; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php echo $row['p_c_price']; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                    <?php
                                                    if ($row['status'] == 'Completed')
                                                    {
                                                        ?>
                                                        <a href="feedback.php?orderid=<?php echo $row['orderid'] ?>&&orderType=Custom" class="btn btn-danger">
                                                            <i class="mdi mdi-react"></i>
                                                            Give Feedback
                                                        </a>
                                                        <?php
                                                    }else{
                                                        echo $row['status'];
                                                    }
                                                    ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 text-end">
                                                    <a href="../invoicePending.php?invoice=<?php echo $row['orderid'] ?>&&email=<?php echo $_SESSION['email']; ?>" class="btn btn-warning">
                                                        <i class="mdi mdi-eye"></i>
                                                    </a>
                                                </td>
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


            </div>
        </div>
    </div>


<?php
include "inc/footer.php";
?>
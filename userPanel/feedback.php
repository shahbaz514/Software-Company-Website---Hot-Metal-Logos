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
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align:center;">
                            Give Feedback Order# <?php echo $_GET['orderid']; ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <textarea name="comments" class="form-control" rows="5" placeholder="Feedback" required></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <select name="stars" id="" class="form-control" required>
                                        <option value="">Select Stars</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" name="save" value="Give Feedback" class="btn bg-danger" style="height: 60px; margin-top: 20px;">
                                </div>
                            </div>
                        </form>


                        <?php
                        if (isset($_POST['save']))
                        {
                            $email = $_SESSION['email'];
                            $orderid = $_GET['orderid'];
                            $orderType = $_GET['orderType'];
                            $comments = mysqli_real_escape_string($db, $_POST['comments']);
                            $stars = mysqli_real_escape_string($db, $_POST['stars']);
                            $countReview = 0;
                            $countReview = mysqli_num_rows(mysqli_query($db,"SELECT * FROM `reviews` WHERE orderid = '".$_GET['orderid']."'"));
                            if ($countReview != 0){
                                $sqlUpdate = mysqli_query($db,"UPDATE `reviews` SET `stars`='$stars',`comments`='$comments' WHERE orderid = '$orderid'");
                                if ($sqlUpdate)
                                {
                                    echo "<script>alert('FeedBack Updated Successfully.')</script>";
                                    echo "<script>window.open('index.php','_self')</script>";
                                }
                            }
                            else{
                                if ($orderType == 'Custom') {
                                    $sqlGetP = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `cus_orders` WHERE orderid = '$orderid'"));
                                    $p_name = $sqlGetP['p_name'];
                                    $sqlInsert = mysqli_query($db,"INSERT INTO `reviews`(`orderid`, `p_name`, `stars`, `comments`, `email`) VALUES ('$orderid','$p_name','$stars','$comments','$email')");
                                    if ($sqlInsert)
                                    {
                                        echo "<script>alert('FeedBack Sent Successfully.')</script>";
                                        echo "<script>window.open('allInvoices.php','_self')</script>";
                                    }
                                }
                                else{
                                    $sqlGetP = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `orders` WHERE orderid = '$orderid'"));
                                    $p_id = $sqlGetP['p_id'];
                                    $sqlCat = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `products` WHERE id = '$p_id'"));
                                    $cat = $sqlCat['cat'];
                                    $sqlProduct = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `categories_pro` WHERE id = '$cat'"));
                                    $name = $sqlProduct['name'];
                                    $p_name = $name . " | " . $sqlCat['pack'];
                                    $sqlInsert = mysqli_query($db,"INSERT INTO `reviews`(`orderid`, `p_name`, `stars`, `comments`, `email`) VALUES ('$orderid','$p_name','$stars','$comments','$email')");
                                    if ($sqlInsert)
                                    {
                                        echo "<script>alert('FeedBack Sent Successfully.')</script>";
                                        echo "<script>window.open('completedOrders.php','_self')</script>";
                                    }
                                }
                            }
                        }
                        ?>

                        <style>
                            input, textarea{
                                margin-top: 20px;
                            }
                            select{
                                margin-top: 20px;
                            }
                        </style>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
<?php
include "inc/footer.php";
?>
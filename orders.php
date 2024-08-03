<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";
$getOrder = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `orders` WHERE orderid = '".$_GET['orderID']."'"));
$getUser = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `users_site` WHERE email = '".$getOrder['email']."'"));
?>

    <section class="home-slider ftco-degree-bg">
        <div class="slider-item bread-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
                        <p class="breadcrumbs">
                            <span class="mr-2">
                                <a href="index.php">Home</a>
                            </span>
                            <span>Order  Status # <?php echo $_GET['orderID']; ?></span>
                        </p>
                        <h1 class="mb-3 bread">Order Status # <?php echo $_GET['orderID']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Hello! <?php echo $getUser['name']; ?></span>
                    <br>
                    <h2>
                        Your Order Has Been Received. Our Team will be contact with you shortly.
                    </h2>
                    <a href="userPanel/login.php" class="btn btn-primary py-3 px-5">
                        Login to User Panel
                    </a>
                    <?php
/*                    if (isset($_GET['orderID']))
                    {
                        $sqlOrder = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `orders` WHERE orderid = '".$_GET['orderID']."'"));
                        $sqlOrderMBL = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `ordersmbl` WHERE orderid = '".$_GET['orderID']."'"));
                        $amount = $sqlOrder['c_price']/100;
                        $orderId = $sqlOrderMBL['mblorderId'];
                        $url = "https://acquiring.meezanbank.com/payment/rest/deposit.do?userName=Htmetal_api&password=H987658&amount=".$amount."&orderId=".$orderId."";
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_URL, $url);
                        $res = curl_exec($ch);
                        $jsonArrayResponse = json_decode($res);
                        $errorCode =   $jsonArrayResponse->errorCode;
                        if ($errorCode == 0)
                        {
                            */?><!--
                            <br>
                            <span class="subheading">Hello! <?php /*echo $getUser['name']; */?></span>
                            <h2>
                                Your Order Has Been Received. Our Team will be contact with you shortly.
                            </h2>
                            <a href="userPanel/login.php" class="btn btn-primary py-3 px-5">
                                Login to User Panel
                            </a>
                            --><?php
/*                        }
                        else{
                            echo "<br>".$res;
                        }
                    }
                    */?>
                </div>
            </div>
        </div>
    </section>

<?php
include "inc/test.php";
include "inc/footer.php";
?>
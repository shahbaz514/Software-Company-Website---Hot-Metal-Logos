<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";
$rowPort = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM products WHERE id = '".$_GET['id']."'"));
$sqlSingle = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM categories_pro WHERE id = '".$rowPort['cat']."'"));

?>

    <link rel="stylesheet" href="admin/vendors/font-awesome/css/font-awesome.min.css">

    <section class="home-slider ftco-degree-bg">
        <div class="slider-item bread-wrap" style="background-image: url('images/<?php echo $sqlSingle['img']; ?>');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
                        <p class="breadcrumbs">
                            <span class="mr-2">
                                <a href="index.php">Home</a>
                            </span>
                            <span class="mr-2">
                                <a href="products.php">Products</a>
                            </span>
                            <span>Check Out Page</span>
                        </p>
                        <h1 class="mb-3">
                            Check Out Page
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-2 ftco-degree-bg">
        <div class="container d-flex">
            <div class="section-2-blocks-wrapper row d-flex">
                <div class="img col-sm-12 col-lg-6 order-first" style="background-image: url('images/<?php echo $sqlSingle['img']; ?>');">
                </div>
                <div class="text col-lg-6 order-first ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3 class="heading" style="text-align: justify">
                            <?php echo $sqlSingle['name']; ?>
                        </h3>
                        <p style="text-align: justify">
                            <?php echo $sqlSingle['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-24d488d2 wpr-pricing-table-animation-slide wpr-pricing-table-heading-center elementor-widget elementor-widget-wpr-pricing-table" data-id="24d488d2" data-element_type="widget" data-widget_type="wpr-pricing-table.default">
                            <div class="elementor-widget-container">
                                <div class="wpr-pricing-table">
                                    <div class="<?php if ($rowPort['pack'] == 'Silver'){echo "shahbaz514_silver";} elseif ($rowPort['pack'] == 'Gold'){echo "shahbaz514_gold";} elseif ($rowPort['pack'] == 'Diamond'){echo "shahbaz514_diamond";} ?>">
                                        <div class="elementor-repeater-item-d85f307 wpr-pricing-table-item wpr-pricing-table-heading wpr-pricing-table-item-first">
                                            <div class="wpr-pricing-table-headding-inner">
                                                <div class="wpr-pricing-table-title-wrap">
                                                    <h3 class="wpr-pricing-table-title">
                                                        <?php echo $rowPort['pack']; ?>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-755accd wpr-pricing-table-item wpr-pricing-table-price">
                                            <div class="wpr-pricing-table-price-inner">
                                                    <span class="wpr-pricing-table-old-price">
                                                        <?php echo $rowPort['price']; ?>
                                                    </span>
                                                <span class="wpr-pricing-table-currency">$</span>
                                                <span class="wpr-pricing-table-main-price">
                                                        <?php echo $rowPort['c_price']; ?>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="shahbaz_ul">
                        <?php
                        $sqlFeat = mysqli_query($db,"SELECT * FROM `pro_feat` WHERE p_id = '".$rowPort['id']."' ORDER BY id ASC");
                        while ($rowFeat = mysqli_fetch_array($sqlFeat))
                        {
                            if ($rowFeat['status'] == 'Yes'){
                                ?>
                                <li>
                                    <i class="fa fa-check" style="color: orange"></i>
                                    <?php echo $rowFeat['title']; ?>

                                </li>
                                <?php
                            }
                            else{
                                ?>
                                <li>
                                    <i class="fa fa-times" style="color: grey"></i>
                                    <label for=""><?php echo $rowFeat['title']; ?></label>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-8 ftco-animate">
                    <center>
                        <h2>
                            Fill the Form Below to Place Order
                        </h2>
                    </center>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name (Required)" required>
                                </div>
                            </div>
                            <?php
                            if (!isset($_SESSION['email']))
                            {
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email (Required)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password (Required)" required>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="contact_no" class="form-control" placeholder="Whatsapp (Optional)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address (Required)" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City (Required)" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="country" class="form-control" placeholder="Country (Required)" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="zipcode" class="form-control" placeholder="Zipcode (Required)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="submit" value="Submit Data and Pay Amount" name="sendMsg" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['sendMsg']))
                    {
                        $name = mysqli_real_escape_string($db, $_POST['name']);
                        if (isset($_SESSION['email']))
                        {
                            $email = mysqli_real_escape_string($db, $_SESSION['email']);
                        }
                        else{
                            $email = mysqli_real_escape_string($db, $_POST['email']);
                            $password = mysqli_real_escape_string($db, $_POST['password']);
                        }
                        $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
                        $address = mysqli_real_escape_string($db, $_POST['address']);
                        $city = mysqli_real_escape_string($db, $_POST['city']);
                        $country = mysqli_real_escape_string($db, $_POST['country']);
                        $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
                        $sqlGetOrder = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `orders` ORDER BY orderid DESC"));
                        $countOrders = mysqli_num_rows(mysqli_query($db, "SELECT * FROM `orders` ORDER BY orderid DESC"));
                        if ($countOrders == 0)
                        {
                            $orderID = 1001;
                        }
                        else
                        {
                            $orderID = $sqlGetOrder['orderid']+1;
                        }
                        $sqlGetUsers = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `users_site` WHERE email = '$email'"));
                        $countUsers = mysqli_num_rows(mysqli_query($db,"SELECT * FROM `users_site` WHERE email = '$email'"));
                        $c_price = $rowPort['c_price']*100;
                        $c_price = $c_price * 270;
                        if ($countUsers != null)
                        {
                            $sqlInsertOrder = mysqli_query($db, "INSERT INTO `orders`(`orderid`, `p_id`, `price`, `dicount`, `c_price`, `email`, `status`) VALUES ('$orderID','".$_GET['id']."','".$rowPort['price']."','".$rowPort['discount']."','".$rowPort['c_price']."','$email','New')");
                            if ($sqlInsertOrder){
                                $url = "https://acquiring.meezanbank.com/payment/rest/register.do?userName=Htmetal_api&password=H987658&orderNumber=".$orderID."&amount=".$c_price."&currency=586&returnUrl=https://hotmetallogos.com/orders.php?orderID=".$orderID."";
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_URL, $url);
                                $res = curl_exec($ch);
                                $jsonArrayResponse = json_decode($res);
                                $errorCode =   $jsonArrayResponse->errorCode;
                                if ($errorCode == 0)
                                {
                                    $formUrl =   $jsonArrayResponse->formUrl;
                                    $orderIdMBL =   $jsonArrayResponse->orderId;
                                    $sqlInsetMBLOrderData = mysqli_query($db,"INSERT INTO `ordersmbl`(`orderid`, `mblorderId`) VALUES ('$orderID','$orderIdMBL')");
                                    if ($sqlInsetMBLOrderData)
                                    {
                                        echo "<script>window.open('".$formUrl."','_self')</script>";
                                    }
                                }
                                else{
                                    echo $res;
                                }
                            }
                        }
                        else
                        {
                            $sqlInsertOrder = mysqli_query($db, "INSERT INTO `orders`(`orderid`, `p_id`, `price`, `dicount`, `c_price`, `email`, `status`) VALUES ('$orderID','".$_GET['id']."','".$rowPort['price']."','".$rowPort['discount']."','".$rowPort['c_price']."','$email','New')");
                            if ($sqlInsertOrder){
                                $sqlInserUser = mysqli_query($db,"INSERT INTO `users_site`(`name`, `email`, `whatsapp`, `password`, `address`, `city`, `country`, `zipcode`) VALUES ('$name','$email','$contact_no','$password','$address','$city','$country','$zipcode')");
                                if ($sqlInserUser)
                                {
                                    $url = "https://acquiring.meezanbank.com/payment/rest/register.do?userName=Htmetal_api&password=H987658&orderNumber=".$orderID."&amount=".$c_price."&currency=586&returnUrl=https://hotmetallogos.com/orders.php?orderID=".$orderID."";
                                    $ch = curl_init();
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    curl_setopt($ch, CURLOPT_URL, $url);
                                    $res = curl_exec($ch);
                                    $jsonArrayResponse = json_decode($res);
                                    $errorCode =   $jsonArrayResponse->errorCode;
                                    if ($errorCode == 0)
                                    {
                                        $formUrl =   $jsonArrayResponse->formUrl;
                                        $orderIdMBL =   $jsonArrayResponse->orderId;
                                        $sqlInsetMBLOrderData = mysqli_query($db,"INSERT INTO `ordersmbl`(`orderid`, `mblorderId`) VALUES ('$orderID','$orderIdMBL')");
                                        if ($sqlInsetMBLOrderData)
                                        {
                                            echo "<script>window.open('".$formUrl."','_self')</script>";
                                        }
                                    }
                                    else{
                                        echo $res;
                                    }
                                }
                            }
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/test.php";
include "inc/footer.php";
?>
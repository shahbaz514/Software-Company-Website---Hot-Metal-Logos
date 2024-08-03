<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";
$sqlSingle = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM categories_pro WHERE id = '".$_GET['id']."'"));

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
                            <span><?php echo $sqlSingle['name']; ?></span>
                        </p>
                        <h1 class="mb-3">
                            <?php echo $sqlSingle['sub_head']; ?>
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
                <?php
                $sqlPort = mysqli_query($db, "SELECT * FROM `products` WHERE cat = '".$_GET['id']."' ORDER BY id ASC");
                $count = 0;
                $count = mysqli_num_rows($sqlPort);
                if ($count == 0)
                {
                    echo "<center><h2>No Product Found</h2></center>";
                }
                else
                {
                    while ($rowPort = mysqli_fetch_array($sqlPort))
                    {
                        ?>
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
                            <center>
                                <a href="addToCart.php?id=<?php echo $rowPort['id']; ?>" class="btn btn-primary py-3 px-5">
                                    Buy Now
                                </a>
                            </center>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php
include "inc/test.php";
include "inc/footer.php";
?>
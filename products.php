<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";
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
                            <span>Products</span>
                        </p>
                        <h1 class="mb-3 bread">Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_GET['cat']))
                {
                    $sqlPort = mysqli_query($db, "SELECT * FROM `categories_pro` WHERE cat = '".$_GET['cat']."' ORDER BY id ASC");
                }
                else{
                    $sqlPort = mysqli_query($db, "SELECT * FROM `categories_pro` ORDER BY id ASC");
                }
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
                            <div class="blog-entry">
                                <a href="product-single.php?id=<?php echo $rowPort['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $rowPort['img']; ?>');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div>
                                            <p>
                                                <?php
                                                $sqlCat = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `categories` WHERE id = '".$rowPort['cat']."'"));
                                                echo $sqlCat['name'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 class="heading">
                                        <a href="product-single.php?id=<?php echo $rowPort['id']; ?>">
                                            <?php echo $rowPort['name']; ?> | Packages
                                        </a>
                                    </h3>
                                </div>
                            </div>
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
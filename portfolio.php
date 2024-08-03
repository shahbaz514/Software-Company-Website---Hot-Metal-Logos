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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Portfolio</span></p>
                        <h1 class="mb-3 bread">Portfolio</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <?php
                $per_page_record = 6;  // Number of entries to show in a page.
                // Look for a GET variable page if not found default is 1.
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                }
                else {
                    $page=1;
                }

                //determine the sql LIMIT starting number for the results on the displaying page
                $start_from = ($page-1) * $per_page_record;

                if (isset($_GET['cat']))
                {

                    $sqlPort = mysqli_query($db, "SELECT * FROM `portfolio` WHERE cat = '".$_GET['cat']."' ORDER BY id DESC");
                }
                else
                {
                    $sqlPort = mysqli_query($db, "SELECT * FROM `portfolio` ORDER BY id DESC LIMIT $start_from, $per_page_record");
                }
                $i = 0;
                $count = 0;
                $count = mysqli_num_rows($sqlPort);

                if ($count == 0)
                {
                    echo "<center><h2>No Post Found</h2></center>";
                }
                else
                {
                    while ($rowPort = mysqli_fetch_array($sqlPort))
                    {
                        ?>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="portfolio-single.php?id=<?php echo $rowPort['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $rowPort['img']; ?>');">
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
                                        <div>
                                            <a href="portfolio-single.php?id=<?php echo $rowPort['id']; ?>" class="meta-chat">
                                                <span class="icon-chat"></span>
                                                <?php
                                                echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `comments` WHERE p_id = '".$rowPort['id']."'"));
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="heading">
                                        <a href="portfolio-single.php?id=<?php echo $rowPort['id']; ?>">
                                            <?php echo $rowPort['title']; ?>
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
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <?php
                            if (!isset($_GET['cat'])) {
                                $query = "SELECT COUNT(*) FROM portfolio";
                                $rs_result = mysqli_query($db, $query);
                                $row = mysqli_fetch_row($rs_result);
                                $total_records = $row[0];

                                $total_pages = ceil($total_records / $per_page_record);
                                $pagLink = "";
                                if ($page >= 2) {
                                    echo "<li><a href='portfolio.php?page=" . ($page - 1) . "'>  &lt; </a></li>";
                                }

                                for ($i = 1; $i <= $total_pages; $i++) {
                                    if ($i == $page) {
                                        $pagLink .= "<li><a class='active' href='portfolio.php?page="
                                            . $i . "'>" . $i . " </a></li>";
                                    } else {
                                        $pagLink .= "<li><a href='portfolio.php?page=" . $i . "'>   
                                                " . $i . " </a></li>";
                                    }
                                };
                                echo $pagLink;

                                if ($page < $total_pages) {
                                    echo "<li><a href='portfolio.php?page=" . ($page + 1) . "'>  &gt; </a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/test.php";
include "inc/footer.php";
?>
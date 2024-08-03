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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
                        <h1 class="mb-3 bread">Read our blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
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

                        if (isset($_GET['username']))
                        {

                            $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` WHERE username = '".$_GET['username']."'");
                        }
                        elseif (isset($_POST['search']))
                        {
                            $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` WHERE title LIKE '%".$_POST['search']."%'");
                        }
                        elseif (isset($_GET['cat']))
                        {
                            $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` WHERE cat = '".$_GET['cat']."'");
                        }
                        else
                        {
                            $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` ORDER BY id DESC LIMIT $start_from, $per_page_record");
                        }

                        $count = 0;
                        $count = mysqli_num_rows($sqlBlog);

                        if ($count == 0)
                        {
                            echo "<center><h2>No Post Found</h2></center>";
                        }
                        else
                        {
                            while ($rowBlog = mysqli_fetch_array($sqlBlog))
                            {
                                ?>
                                <div class="col-md-6 ftco-animate">
                                    <div class="blog-entry">
                                        <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $rowBlog['img']; ?>');">
                                        </a>
                                        <div class="text p-4 d-block">
                                            <div class="meta mb-3">
                                                <div>
                                                    <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>">
                                                        <?php echo $rowBlog['date']; ?>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="blog.php?username=<?php echo $rowBlog['username']; ?>">
                                                        <?php echo ucfirst($rowBlog['username']); ?>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>" class="meta-chat">
                                                        <span class="icon-chat"></span>
                                                        <?php
                                                        echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `comments` WHERE p_id = '".$rowBlog['id']."'"));
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <h3 class="heading">
                                                <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>">
                                                    <?php echo $rowBlog['title']; ?>
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
                                    if (!isset($_GET['username']) && !isset($_POST['search']) && !isset($_GET['cat'])) {
                                        $query = "SELECT COUNT(*) FROM blog";
                                        $rs_result = mysqli_query($db, $query);
                                        $row = mysqli_fetch_row($rs_result);
                                        $total_records = $row[0];

                                        $total_pages = ceil($total_records / $per_page_record);
                                        $pagLink = "";
                                        if ($page >= 2) {
                                            echo "<li><a href='blog.php?page=" . ($page - 1) . "'>  &lt; </a></li>";
                                        }

                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            if ($i == $page) {
                                                $pagLink .= "<li><a class='active' href='blog.php?page="
                                                    . $i . "'>" . $i . " </a></li>";
                                            } else {
                                                $pagLink .= "<li><a href='blog.php?page=" . $i . "'>   
                                                " . $i . " </a></li>";
                                            }
                                        };
                                        echo $pagLink;

                                        if ($page < $total_pages) {
                                            echo "<li><a href='blog.php?page=" . ($page + 1) . "'>  &gt; </a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar ftco-animate">
                    <?php
                    include "inc/sidebar.php";
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/test.php";
include "inc/footer.php";
?>
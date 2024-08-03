<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";

$sqlSingle = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM portfolio WHERE id = '".$_GET['id']."'"));

?>

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
                                <a href="blog.php">Blog</a>
                            </span>
                            <span><?php echo $sqlSingle['title']; ?></span>
                        </p>
                        <h1 class="mb-3">
                            <?php echo $sqlSingle['title']; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <p>
                        <img src="images/<?php echo $sqlSingle['img']; ?>" alt class="img-fluid">
                    </p>
                    <h2 class="mb-3"><?php echo $sqlSingle['title']; ?></h2>
                    <p>
                        <?php echo $sqlSingle['description']; ?>
                    </p>
                        <?php
                        if ($sqlSingle['demo_link'] == null)
                        {
                            ?>
                            <a href="images/<?php echo $sqlSingle['img']; ?>" target="_blank" class="btn btn-primary py-3 px-5">
                                Download Image
                            </a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <a href="<?php echo $sqlSingle['demo_link']; ?>" target="_blank" class="btn btn-primary py-3 px-5">
                                See Demo
                            </a>
                            <?php
                        }
                        ?>
                    </p>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">
                            <?php
                            echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `comments` WHERE p_id = '".$sqlSingle['id']."' AND type = 'Portfolio' AND status = 'Approve'"));
                            ?> Comments
                        </h3>
                        <ul class="comment-list">
                            <?php
                            $sqlComments = mysqli_query($db, "SELECT * FROM `comments` WHERE p_id = '".$_GET['id']."' AND type = 'Portfolio' AND status = 'Approve' ORDER BY id DESC");
                            while ($rowComments = mysqli_fetch_array($sqlComments))
                            {
                                ?>
                                <li class="comment">
                                    <div class="comment-body">
                                        <h3>
                                            <?php echo $rowComments['name']; ?>
                                        </h3>
                                        <div class="meta">
                                            <?php echo $rowComments['date']; ?>
                                        </div>
                                        <p style="text-align: justify;">
                                            <?php echo $rowComments['comment']; ?>
                                        </p>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="" method="post" enctype="multipart/form-data" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name <span style="color: red;">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span style="color: red;">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message <span style="color: red;">*</span></label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="postComment" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['postComment']))
                            {
                                $name = mysqli_real_escape_string($db, $_POST['name']);
                                $email = mysqli_real_escape_string($db, $_POST['email']);
                                $message = mysqli_real_escape_string($db, $_POST['message']);

                                $sqlInsertCommnet = mysqli_query($db,"INSERT INTO `comments`(`name`, `email`, `comment`, `p_id`, `type`) VALUES ('$name','$email','$message','".$_GET['id']."','Portfolio')");
                                if ($sqlInsertCommnet)
                                {
                                    echo "<script>window.open('portfolio-single.php?id=".$_GET['id']."','_self')</script>";
                                }
                            }
                            ?>
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
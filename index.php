<?php
@session_start();
@session_abort();
include "db/db.php";
include "inc/head.php";
?>

    <section class="home-slider ftco-degree-bg">
        <div class="slider-item" style="background-image: url('images/home.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-10 ftco-animate text-center">
                        <h1 class="mb-4">I love to
                            <strong class="typewrite" data-period="4000" data-type="[ &quot;Develop.&quot;, &quot;Design.&quot;, &quot;Explore.&quot;, &quot;Capture.&quot; ]">
                                <span class="wrap"></span>
                            </strong>
                        </h1>
                        <p>
                            Hot Metal Logos is a digital marketing company that offers graphic design, website development, social media marketing, and SEO services globally. Our goal is to help your brand succeed on social media platforms and engage with your audience.
                        </p>
                        <p>
                            <a href="solutions.php" class="btn btn-primary btn-outline-white px-4 py-3">
                                Our Services
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-featured ftco-animate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel owl-carousel">
                        <?php
                        $sqlPort = mysqli_query($db, "SELECT * FROM `portfolio` WHERE cat = '2' ORDER BY id DESC LIMIT 0,3");
                        while ($rowPort = mysqli_fetch_array($sqlPort))
                        {
                            ?>
                            <div class="item">
                                <a href="portfolio-single.php?id=<?php echo $rowPort['id']; ?>">
                                    <img src="images/<?php echo $rowPort['img']; ?>" class="img-fluid" alt="<?php echo $rowPort['title']; ?>">
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Services</span>
                    <h2>
                        Top Of Our Services To Boost Your Business
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-1 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/logo-design-icon.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">GRAPHIC DESIGN</h3>
                            <p>
                                Our graphics design services are very cost effective for small and medium size businesses around the world. Take a look of our pricing to know more!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-2 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/website-development-icon.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">WEBSITE DESIGN</h3>
                            <p>
                                Web design is the supporting mechanism of your business that speaks emphatically about your services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-3 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/ecommerce-solutions.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">
                                E-COMMERCE SOLUTIONS
                            </h3>
                            <p>
                                Upgrade your website with inclusive Ecommerce solutions services & stay 24/7 active in digital world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-1 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/Search-Engine-Optimization-icon.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">SEARCH ENGINE OPTIMIZATION</h3>
                            <p>
                                Search Engine Optimization works as a supporting tool in ranking your website also, SEO assists in boosting revenue.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-2 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/digital-marketing.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">
                                DIGITAL MARKETING
                            </h3>
                            <p>
                                Let your brand to revolve efficiently around this digital world in the degree of 360 marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-3 d-flex justify-content-center mb-3" style="padding: 20px;">
                                <img src="images/services/social-media-icon.png" width="50">
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">
                                SOCIAL MEDIA MANAGEMENT
                            </h3>
                            <p>
                                Our Social Media Management Company emphasizes your brand Marketing on each channel accordingly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax ftco-degree-bg">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                        <h2 class="h1 font-weight-bold">
                            We Create Design & Develop Digital Business That Generate Results
                        </h2>
                        <p style="color: #fff;">
                            Either you are zero dollar business or running a million-dollar company. You always need change, innovation and creativity. Our digital capabilities knows what makes you great in untouched Space!
                        </p>
                        <a href="contact.php" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Portfolio</span>
                    <h2>Recent Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $sqlPort = mysqli_query($db, "SELECT * FROM `portfolio` ORDER BY id DESC LIMIT 0,6");
                $i=0;
                while ($rowPort = mysqli_fetch_array($sqlPort))
                {
                    $i++;
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
                ?>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 ftco-animate">
                    <p>
                    <center>
                        <a href="portfolio.php" class="btn btn-primary py-3 px-5">
                            Our Portfolio
                        </a>
                    </center>
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

<?php
include "inc/test.php";
?>

    <section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Our achievements</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="150">0</strong>
                            <span>Projects Completed</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="20">0</strong>
                            <span>Active Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="100">0</strong>
                            <span>Happy Costumers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` ORDER BY id DESC LIMIT 0,3");
                while ($rowBlog = mysqli_fetch_array($sqlBlog))
                {
                    ?>
                    <div class="col-md-4 ftco-animate">
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
                ?>
            </div>
        </div>
    </section>
<?php
include "inc/footer.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hot Metal Logos - A Top Software Development Organization in USA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            HotMetal
            <!--<img src="images/logo.png" height="70">-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="solutions.php" class="nav-link">
                        Services
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="portfolio.php" id="dropdownpricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Portfolio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownpricing">
                        <?php
                        $sqlP = mysqli_query($db, "SELECT * FROM `categories`");
                        while ($rowP = mysqli_fetch_array($sqlP))
                        {
                            ?>
                            <a class="dropdown-item" href="portfolio.php?cat=<?php echo $rowP['id']; ?>">
                                <?php echo $rowP['name']; ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php

                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="products.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pricing
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <?php
                        $sqlP = mysqli_query($db, "SELECT * FROM `categories`");
                        while ($rowP = mysqli_fetch_array($sqlP))
                        {
                            ?>
                            <a class="dropdown-item" href="products.php?cat=<?php echo $rowP['id']; ?>">
                                <?php echo $rowP['name']; ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">
                        Contact
                    </a>
                </li>
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                <li class="nav-item">
                    <a href="userPanel/index.php" class="nav-link">
                        User Panel
                    </a>
                </li>
                <?php
                }
                else{
                    ?>
                    <li class="nav-item">
                        <a href="userPanel/login.php" class="nav-link">
                            Login Now
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

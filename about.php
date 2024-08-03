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
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                    <h1 class="mb-3 bread">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section-2 ftco-degree-bg">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row d-flex">
            <div class="img col-sm-12 col-lg-6 order-last" style="background: url('images/about.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            </div>
            <div class="text col-lg-6 order-first ftco-animate">
                <div class="text-inner align-self-start">
                    <h3 class="heading" style="text-align: justify">
                        Hot Metal Logos is a digital marketing agency that offers technology-driven and strategic solutions to enhance your company’s performance in the market.
                    </h3>
                    <p style="text-align: justify">
                        Our story began with a simple thought: “Reformation needs to be part of our culture. Customers are transforming faster than we are, and if we don’t succeed in reaching them, we’re in misfortune.” We needed one brand that we could go to for trusted products and information. And when we couldn’t find what we were on the lookout for — and realized we weren’t without help — the idea for Hot Metal Logos was brought forth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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


<?php
include "inc/test.php";
include "inc/footer.php";
?>
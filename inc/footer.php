<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">
                        <center>
                            <img src="images/logo.png" style="width: 50%;">
                        </center>
                    </h2>
                    <p style="text-align: justify;">
                        Hot Metal Logos is a digital marketing company that offers graphic design, website development, social media marketing, and SEO services globally. Our goal is to help your brand succeed on social media platforms and engage with your audience.
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate">
                            <a href="https://fb.com/hotmetallogos" target="_blank">
                                <span class="icon-facebook"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://twitter.com/hotmetallogos" target="_blank">
                                <span class="icon-twitter"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://www.instagram.com/hotmetallogos/" target="_blank">
                                <span class="icon-instagram"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://web.whatsapp.com/send?phone=+1(206)7384665" target="_blank">
                                <span class="icon-chat"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="py-2 d-block">Home</a></li>
                        <li><a href="about.php" class="py-2 d-block">About</a></li>
                        <li><a href="solutions.php" class="py-2 d-block">Services</a></li>
                        <li><a href="portfolio.php" class="py-2 d-block">Portfolio</a></li>
                        <li><a href="blog.php" class="py-2 d-block">Blog</a></li>
                        <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a class="py-2 d-block" href="#">
                                Washington, District of Columbia, USA
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://web.whatsapp.com/send?phone=+1(206)7384665" class="py-2 d-block">
                                +1 206-738-4665
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@hotmetallogos.com" class="py-2 d-block">
                                <span class="__cf_email__" data-cfemail="741d1a121b340d1b0106071d00115a171b19">
                                    info@hotmetallogos.com
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:admin@hotmetallogos.com" class="py-2 d-block">
                                <span class="__cf_email__" data-cfemail="741d1a121b340d1b0106071d00115a171b19">
                                    admin@hotmetallogos.com
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4" id="subscribe">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <p>
                        Subscribe to our Newsletter to Get Updated about new Promotions.
                    </p>
                    <form action="index.php#subscribe" method="post" enctype="multipart/form-data" class="subscribe-form">
                        <div class="form-group">
                            <span class="icon icon-paper-plane"></span>
                            <input type="text" class="form-control" name="subscribe" required placeholder="Subscribe">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['subscribe']))
                    {
                        $sqlGet = mysqli_num_rows(mysqli_query($db, "SELECT * FROM `subsucribe` WHERE email = '".$_POST['subscribe']."'"));
                        if ($sqlGet == 0)
                        {
                            $sqlSubscribe = mysqli_query($db, "INSERT INTO `subsucribe`(`email`) VALUES ('".$_POST['subscribe']."')");
                            if ($sqlSubscribe){
                                echo '
                                <div id="message" style="background: green; border-radius: 10px; color: #fff; padding: 10px; margin-top: 10px;">
                                  <strong>Hello Dear!</strong> You are successfully subscribe to our Newsletter.
                                </div>
                                ';
                            }
                            else {
                                echo '
                                <div id="message" style="background: red; border-radius: 10px; color: #fff; padding: 10px; margin-top: 10px;">
                                  <strong>Hello Dear!</strong> Take An Error! Try Again.
                                </div>
                                ';
                            }
                        }
                        else {
                            echo '
                                <div id="message" style="background: red; border-radius: 10px; color: #fff; padding: 10px; margin-top: 10px;">
                                  <strong>Hello Dear!</strong> You are already subscribed to our Newsletter.
                                </div>
                                ';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This Website is Design with
                    <i class="icon-heart" aria-hidden="true"></i>
                    by
                    <a href="https://hotmetallogos.com/" target="_blank">Hot Metal Logos</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>
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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                        <h1 class="mb-3 bread">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container bg-light">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p>
                        <span>Address:</span>
                        <br>
                        1) Washington, USA
                        <br>
                        2) Lahore, Pakistan
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <span>Phone:</span>
                        <br>
                        <a href="https://web.whatsapp.com/send?phone=+1(206)7384665" target="_blank">
                            +1(206)7384665
                        </a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <span>Email:</span>
                        <br>
                        <a href="mailto:info@hotmetallogos.com" target="_blank">
                            <span class="__cf_email__" data-cfemail="cea7a0a8a18eb7a1bbbcbda7baabe0ada1a3">
                                info@hotmetallogos.com
                            </span>
                        </a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <span>Website</span>
                        <br>
                        <a href="https://hotmetallogos.com/" target="_blank">
                            hotmetallogos.com
                        </a>
                    </p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="contact.php#message" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name (Required)" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email (Required)" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_no" class="form-control" placeholder="Whatsapp (Optional)">
                        </div>
                        <div class="form-group">
                            <select name="query_type" class="form-control" required>
                                <option value="">Query Related To (Required)</option>
                                <option>Want to Design Logo</option>
                                <option>Want to Design and Develop Website</option>
                                <option>Want to Develop Custom Solution</option>
                                <option>Want to Design Branding</option>
                                <option>Want to Join our Team</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="msg" id cols="30" rows="7" class="form-control" placeholder="Message (Required)" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" name="sendMsg" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['sendMsg']))
                    {
                        $name = mysqli_real_escape_string($db, $_POST['name']);
                        $email = mysqli_real_escape_string($db, $_POST['email']);
                        $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
                        $query_type = mysqli_real_escape_string($db, $_POST['query_type']);
                        $msg = mysqli_real_escape_string($db, $_POST['msg']);

                        if (empty($name) && empty($email) && empty($query_type) && empty($msg))
                        {
                            echo "<script>alert('Enter Required Fields!')</script>";
                        }
                        else
                        {
                            $sqlContact = mysqli_query($db, "INSERT INTO `contacts`(`name`, `email`, `contact_no`, `query_type`, `msg`) VALUES ('$name','$email','$contact_no','$query_type','$msg')");
                            if ($sqlContact) {
                                echo '
                                <div id="message" style="background: darkseagreen; border-radius: 10px; color: #fff; padding: 10px;">
                                  <strong>Hello Dear!</strong> Your Query has been forward to concerned Department. Our Team Contact you Soon.
                                </div>
                                ';
                            }
                            else{
                                echo '
                                <div id="message" style="background: red; border-radius: 10px; color: #fff; padding: 10px;">
                                  <strong>Hello Dear!</strong> Take an Error! Try Again.
                                </div>
                                ';
                            }
                        }

                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6209.506728144308!2d-77.036145!3d38.906755!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2sWashington%2C%20DC!5e0!3m2!1sen!2sus!4v1709188436541!5m2!1sen!2sus" style="border: 1px dotted slateblue; border-radius: 10px; width: 100%; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/footer.php";
?>
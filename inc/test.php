<section class="ftco-section testimony-section ftco-degree-bg">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Customer Says</span>
                <h2>Our satisfied customer says</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php
                    $sqlTest = mysqli_query($db, "SELECT * FROM `test` ORDER BY id DESC");
                    while ($rowTest = mysqli_fetch_array($sqlTest))
                    {
                    ?>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/<?php echo $rowTest['img']; ?>)">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">
                                    <?php echo $rowTest['comment']; ?>
                                </p>
                                <p class="name">
                                    <a href="<?php echo $rowTest['link']; ?>" target="_blank">
                                        <?php echo $rowTest['name']; ?>
                                    </a>
                                </p>
                                <span class="position"><?php echo $rowTest['designation']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
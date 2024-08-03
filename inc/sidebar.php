<div class="sidebar-box">
    <form action="blog.php" method="post" enctype="multipart/form-data" class="search-form">
        <div class="form-group">
            <span class="icon icon-paper-plane"></span>
            <input name="search" type="text" class="form-control" placeholder="Type a keyword and hit enter">
        </div>
    </form>
</div>
<div class="sidebar-box ftco-animate">
    <div class="categories">
        <h3>Categories</h3>
        <?php
        $sqlCats = mysqli_query($db, "SELECT * FROM `categories`");
        while ($rowCats = mysqli_fetch_array($sqlCats))
        {
            ?>
            <li>
                <a href="blog.php?cat=<?php echo $rowCats['id']; ?>">
                    <?php echo $rowCats['name']; ?>
                    <span>(<?php echo mysqli_num_rows(mysqli_query($db, "SELECT * FROM `blog` WHERE cat = '".$rowCats['id']."'")); ?>)</span>
                </a>
            </li>
            <?php
        }
        ?>
    </div>
</div>
<div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    <?php
    $sqlBlog = mysqli_query($db, "SELECT * FROM `blog` ORDER BY id DESC LIMIT 0,3");
    while ($rowBlog = mysqli_fetch_array($sqlBlog))
    {
    ?>
    <div class="block-21 mb-4 d-flex">
        <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>" class="blog-img mr-4" style="background-image: url(images/<?php echo $rowBlog['img']; ?>);"></a>
        <div class="text">
            <h3 class="heading">
                <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>">
                    <?php echo $rowBlog['title']; ?>
                </a>
            </h3>
            <div class="meta">
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
                        echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `comments` WHERE p_id = '".$rowBlog['id']."' AND type = 'Blog'"));
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
    ?>
</div>
<div class="sidebar-box ftco-animate">
    <h3>Recent Portfolio</h3>
    <?php
    $sqlBlog = mysqli_query($db, "SELECT * FROM `portfolio` ORDER BY id DESC LIMIT 0,3");
    while ($rowBlog = mysqli_fetch_array($sqlBlog))
    {
    ?>
    <div class="block-21 mb-4 d-flex">
        <a href="portfolio-single.php?id=<?php echo $rowBlog['id']; ?>" class="blog-img mr-4" style="background-image: url(images/<?php echo $rowBlog['img']; ?>);"></a>
        <div class="text">
            <h3 class="heading">
                <a href="portfolio-single.php?id=<?php echo $rowBlog['id']; ?>">
                    <?php echo $rowBlog['title']; ?>
                </a>
            </h3>
            <div class="meta">
                <div>
                    <a href="portfolio-single.php?id=<?php echo $rowBlog['id']; ?>">
                        <?php echo $rowBlog['date']; ?>
                    </a>
                </div>
                <div>
                    <a href="portfolio-single.php?id=<?php echo $rowBlog['id']; ?>" class="meta-chat">
                        <span class="icon-chat"></span>
                        <?php
                        echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `comments` WHERE p_id = '".$rowBlog['id']."' AND type = 'Portfolio'"));
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
    ?>
</div>

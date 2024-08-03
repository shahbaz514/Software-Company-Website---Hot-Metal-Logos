<?php
session_start();
session_abort();
include "../db/db.php";
if (!isset($_SESSION['email']))
{
    header("Location: login.php");
}
include 'inc/head.php';
include "inc/sidebar.php";
$sqlProf = mysqli_query($db, "SELECT * FROM users_site WHERE email = '".$_SESSION['email']."'");
$rowProf = mysqli_fetch_array($sqlProf);
?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align:center;">
                                EDIT PROFILE
                            </h3><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="editProfile.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="text" name="name" placeholder="Name" value="<?php echo $rowProf['name']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="number" name="whatsapp" placeholder="Whatsapp" value="<?php echo $rowProf['whatsapp']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="text" name="address" placeholder="Address" value="<?php echo $rowProf['address']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="text" name="city" placeholder="City" value="<?php echo $rowProf['city']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="text" name="country" placeholder="Country" value="<?php echo $rowProf['country']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="number" name="zipcode" placeholder="Zipcode" value="<?php echo $rowProf['zipcode']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <input type="file" name="img" title="Select Profile Image" class="form-control" accept="image/*">
                                    </div>
                                    <div class="col-sm-6" style="padding: 20px;">
                                        <center>
                                            <input type="submit" name="editUser" value="Edit Profile" class="btn btn-warning">
                                        </center>
                                    </div>
                                </div>
                            </form>


                            <?php
                            if (isset($_POST['editUser']))
                            {
                                $name = mysqli_real_escape_string($db, $_POST['name']);
                                $whatsapp = mysqli_real_escape_string($db, $_POST['whatsapp']);
                                $address = mysqli_real_escape_string($db, $_POST['address']);
                                $city = mysqli_real_escape_string($db, $_POST['city']);
                                $country = mysqli_real_escape_string($db, $_POST['country']);
                                $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
                                $temp = explode(".", $_FILES["img"]["name"]);
                                $newfilename = $_SESSION['username'] . '.' . rand() . '.' . end($temp);

                                if (empty($_FILES["img"]["name"]))
                                {
                                    $sqlU = mysqli_query($db, "UPDATE `users_site` SET `name`='$name',`whatsapp`='$whatsapp',`address`='$address',`city`='$city',`country`='$country',`zipcode`='$zipcode' WHERE email = '".$_SESSION['email']."'");
                                    if ($sqlU)
                                    {
                                        echo "<script>window.open('profile.php', '_self')</script>";
                                    }
                                }
                                else
                                {
                                    $sqlU = mysqli_query($db, "UPDATE `users_site` SET `name`='$name',`whatsapp`='$whatsapp',img='$newfilename',`address`='$address',`city`='$city',`country`='$country',`zipcode`='$zipcode' WHERE email = '".$_SESSION['email']."'");
                                    if ($sqlU)
                                    {

                                        $move = move_uploaded_file($_FILES["img"]["tmp_name"], "../images/" . $newfilename);
                                        if ($move)
                                        {
                                            echo "<script>window.open('profile.php', '_self')</script>";
                                        }

                                    }
                                }
                            }
                            ?>

                            <style>
                                input{
                                    margin-top: 20px;
                                }
                                select{
                                    margin-top: 20px;
                                }
                            </style>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php
include "inc/footer.php";
?>
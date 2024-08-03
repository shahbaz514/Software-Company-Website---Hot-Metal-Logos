<?php
include "db/db.php";
if (!isset($_GET['email']) && !isset($_GET['invoice']))
{
    echo "<script>window.open('index.php','_self')</script>";
}
$orderRowCount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM cus_orders WHERE orderid = '".$_GET['invoice']."'"));
if ($orderRowCount == 0)
{
    echo "<script>alert('Your Invoice has been expired! Kindly place order from the Website.')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
$orderRow = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM cus_orders WHERE orderid = '".$_GET['invoice']."'"));
$userRow = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM users_site WHERE email = '".$_GET['email']."'"));
echo "<title>Hot Metal Logos - INV - ".$_GET["invoice"]."</title>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1397f2">
    <meta name="msapplication-TileColor" content="#4694f8">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <script src="https://kit.fontawesome.com/928e926eb6.js" crossorigin="anonymous" type="d870110e28d687ab4c5200b2-text/javascript"></script>

    <link href="https://ifreeicloud.co.uk/client-area/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link href="https://ifreeicloud.co.uk/client-area/assets/css/flag-icon.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


</head>
<div id="print">
    <div class="container">
        <div class="card">
            <div id="invoice-template" class="card-body">
                <div id="invoice-company-details" class="row">
                    <div class="col-md-6 col-sm-12 text-right text-md-left">
                        <div class="media">
                            <script pagespeed_no_defer="">//<![CDATA[
                                (function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://ifreeicloud.co.uk/client-area/ajax/showInvoice.php?id=949','YddRYU7ik1',true,false,'FSor0RpVVLk');
                                //]]></script>
                            <a href="index.php">
                                <img src="images/logo.png" class="mr-3" height="120px" pagespeed_url_hash="3756217883" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                            <div class="media-body">
                                <ul class="ml-2 px-0 list-unstyled">
                                    <h5>
                                        <li><strong>Hot Metal Logos</strong></li>
                                        <li>Washington, USA</li>
                                        <li>Lahore, Pakistan</li>
                                    </h5>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <style>

                        .btn-success{
                            color: #0c4128;
                            color: #FFFFFF!important;
                            padding: 10px;
                            width: 120px;
                        }

                        .btn-warning{
                            background-color: #ffc107;
                            color: #FFFFFF!important;
                            padding: 10px;
                            width: 120px;
                        }
                    </style>
                    <div class="col-md-6 col-sm-12 text-center text-md-right">
                        <h2>INVOICE</h2>
                        <h5 class="pb-1">Invoice # - <?php echo $_GET['invoice']; ?></h5>
                        <span class="card text-white ml-auto mt-0 mb-2" style="width:10rem">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <strong>
                                        <a class="btn btn-info">
                                            <?php echo $orderRow['status']; ?>
                                        </a>
                                    </strong>
                                </h5>
                                <h5 class="card-title">
                                    <strong>$ <?php echo $orderRow['p_c_price'] ?></strong>
                                </h5>
                                <h5 class="card-title">
                                    <strong>PKR <?php echo $orderRow['p_c_price']*270; ?></strong>
                                </h5>
                            </div>
                        </span>
                    </div>
                </div>


                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-sm-12 text-center text-md-left">
                        <h5 class="text-muted">Bill To</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-left">
                        <ul class="px-0 list-unstyled">
                            <h5>
                                <strong>Email: <?php echo $_GET['email']; ?></strong>
                                <br>ATTN: <?php echo @$userRow['name']; ?>
                                <br>Address: <?php echo @$userRow['address']; ?>
                                <br>City: <?php echo @$userRow['city']; ?>
                                <br>Country: <?php echo @$userRow['country']; ?>
                            </h5>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-right">
                        <h5><span class="text-muted">Invoice Date:</span> <?php echo $orderRow['date']; ?></h5>
                        <h5><span class="text-muted">Supply Date:</span> <?php echo $orderRow['date']; ?></h5>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6" style="height: 400px; margin-bottom: 20px; border-radius: 10px; background: url('../images/<?php echo $sqlSingle['img']; ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        </div>
                        <div class="col-sm-6">
                            <div class="text-justify heading">
                                <h3>
                                    Service Name: <?php echo $orderRow['p_name']; ?>
                                </h3>
                                <h3>
                                    What Included:
                                </h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p style="text-align: justify">
                                            <?php echo $orderRow['p_desc']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .shahbaz_ul {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        overflow: hidden;
                    }
                    .shahbaz_ul li{
                        line-height: 2;
                        vertical-align: middle;
                    }
                    .heading{
                        background: #0b0b0b;
                        border-radius: 5px;
                        padding: 10px;
                        box-shadow: #000000;
                        color: #f0f0f0;
                    }
                </style>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div id="invoice-template" class="card-body">
            <center>
                <a href="index.php" class="btn btn-info">
                    <i class="fa fa-home"></i> Go Home
                </a>
                <?php
                if ($orderRow['status'] == 'Pending')
                {
                    ?>
                    <form action="" method="post" enctype="multipart/form-data" style="display: inline;">
                        <button type="submit" class="btn btn-warning" name="payNow">
                            <i class="fa fa-credit-card"></i> Pay Now
                        </button>
                    </form>
                    <p>
                <?php
                    if (isset($_POST['payNow']))
                    {
                        $orderID = $_GET['invoice'];
                        $sqlOrderID = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM cus_orders ORDER BY orderid DESC"));
                        $orderIDNew = $sqlOrderID['orderid'];
                        $c_price = $orderRow['p_c_price']*100;
                        $c_price = $c_price * 270;
                        $countGetData = 0;
                        $countGetData = mysqli_num_rows(mysqli_query($db,"SELECT * FROM `ordersmbl` WHERE orderid = '".$_GET['invoice']."'"));
                        if ($countGetData>0)
                        {
                            $sqlGetData = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `ordersmbl` WHERE orderid = '".$_GET['invoice']."'"));
                            $formUrl = $sqlGetData['formurl'];
                            if ($formUrl) {
                                echo "<script>window.open('" . $formUrl . "','_self')</script>";
                            }
                        }
                        else {
                            $url = "https://acquiring.meezanbank.com/payment/rest/register.do?userName=Htmetal_api&password=H987658&orderNumber=" . $orderIDNew . "&amount=" . $c_price . "&currency=586&returnUrl=https://hotmetallogos.com/orders.php?orderID=" . $orderIDNew . "";
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $res = curl_exec($ch);
                            $jsonArrayResponse = json_decode($res);
                            $errorCode = $jsonArrayResponse->errorCode;
                            if ($errorCode == 0) {
                                $formUrl = $jsonArrayResponse->formUrl;
                                $orderIdMBL = $jsonArrayResponse->orderId;
                                $sqlInsetMBLOrderData = mysqli_query($db, "INSERT INTO `ordersmbl`(`orderid`, `mblorderId`, `formurl`) VALUES ('$orderID','$orderIdMBL','$formUrl')");
                                if ($sqlInsetMBLOrderData) {
                                    echo "<script>window.open('" . $formUrl . "','_self')</script>";
                                }
                            } else {
                                echo $res;
                            }
                        }
                    }
                    echo "</p>";
                }
                else{
                    ?>
                    <button onclick="printPage('print')" class="btn btn-info"><i class="fa fa-print"></i> Print </button>';
                    <?php
                }
                ?>
            </center>
            <script>

                function printPage(id)
                {
                    var html="<html>";


                    html+='<link href="https://ifreeicloud.co.uk/client-area/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />';
                    html+='<link href="https://ifreeicloud.co.uk/client-area/assets/css/flag-icon.min.css" rel="stylesheet" />';
                    html+='<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">';
                    html+= document.getElementById(id).innerHTML;

                    html+="</html>";

                    var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
                    printWin.document.write(html);
                    printWin.print();
                }
            </script>

        </div>
    </div>
</div>
</html>
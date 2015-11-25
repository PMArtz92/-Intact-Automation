<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="<?php echo base_url()?>assert/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url()?>assert/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url()?>assert/booking/css/booking.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assert/css/camera.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assert/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assert/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assert/css/form.css">
    <script src="<?php echo base_url()?>assert/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assert/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url()?>assert/js/script.js"></script>
    <script src="<?php echo base_url()?>assert/js/superfish.js"></script>
    <script src="<?php echo base_url()?>assert/js/jquery.ui.totop.js"></script>
    <script src="<?php echo base_url()?>assert/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url()?>assert/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url()?>assert/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url()?>assert/js/owl.carousel.js"></script>
    <script src="<?php echo base_url()?>assert/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="<?php echo base_url()?>assert/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo base_url()?>assert/booking/js/booking.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false ,
                minHeight: '444',
                thumbnails: false,
                height: '28.28125%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body class="page1" id="top">
<div class="main">
    <!--==============================header=================================-->
    <header>
        <div class="menu_block ">
            <div class="container_12">
                <div class="grid_12">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li><a href="<?php echo base_url()?>">Home</a></li>
                            <!--class="current"-->
                            <li><a href="<?php echo base_url()?>home/userprofile">Profile</a></li>
                            <li><a href="<?php echo base_url()?>home/orders">Bookings</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </header>
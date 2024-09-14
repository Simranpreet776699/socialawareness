<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Social Awarness ::</title>
  <!-- favicon icon -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/favicon.png"> -->
    <!-- bootstrap css -->
    <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome css -->
    <link href="css/plugins/fontawesome.min.css" rel="stylesheet">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--owl-carousel-css-->
    <link href="css/plugins/owl.carousel.min.css" rel="stylesheet">
    <link href="css/plugins/owl.theme.default.min.css" rel="stylesheet">
    <!--Swiper-slider-css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- custom style css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="js/plugins/modernizr.js"></script>
  <!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
          href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<!------ header-area-start --------->
<header id="menu-area">
  <div class="navigation-wrap start-header start-style">
      <div class="container-fluid">
          <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.html">
                      <!-- <img src="images/logo.png" loading="lazy" alt=""/> -->
                       <div class="logo-circle-area">

                       </div>
                       <h3>SOCIAL AWARENESS</h3>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                          aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto py-4 py-md-0 gap-sec">
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                              <a class="nav-link" href="index.html">Home</a>
                          </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="user-dashboard.php">My Campaigns</a>
                        </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link" href="#">Settings</a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </div>
</header>
<!------ header-area-end --------->
<?php
include("db.php");

$qry = "select ifnull(max(campaignid),0) from tbcampaign";
$result = mysqli_query($con,$qry) or die(mysqli_error($con));
$row = mysqli_fetch_row($result);
$n = $row[0];
$n++;

session_start();
$uid = $_SESSION["usrid"];

$cn = $_POST["cname"];
$dsc = $_POST["desc"];
$amt = $_POST["amt"];
$dur = $_POST["duration"];
$cat = $_POST["category"];

$qry = "insert into tbcampaign values($n, '$cn', '$dsc', '$amt', '$dur', '$cat','$uid' )";
$result = mysqli_query($con,$qry) or die(mysqli_error($con));
?>

<!------ breadcrumb-campaign-creation-area-start --------->
<section class="breadcrumb-area">
  <div class="container">
    <div class="breadcrumb-campaign-creation">
      <h3>Campaign Posted Successfully!</h3>
      
    </div>
  </div>
  </section>
<!------ breadcrumb-campaign-creation-area-end --------->

<!------ campaign-creation-area-start --------->
<section class="campaign-creation">
  <div class="campaign-creation-border">
    <div class="container">
      <div class="campaign-creation-main-area">
        <div class="row">
          <div class="col-lg-6 left">
            <div class="campaign-creation-left">
             
            </div>
          </div>
          <div class="col-lg-6">
            <div class="campaign-creation-form">
            
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <ul>
      <li>
        <a href="#">
          Contact Us
        </a>
      </li>
      <li>
        <a href="#">
          Terms of Service
        </a>
      </li>
      <li>
        <a href="#">
          Privacy Policy
        </a>
      </li>
    </ul>
  </div>

</section>
<!------ campaign-creation-area-end --------->

<!-- scroll-to-top-area-start -->
<section id="scroll-top">
  <div id="stop" class="scrollTop">
      <span><a href="#">
        <i class="fas fa-arrow-up"></i>
      </a></span>
  </div>
</section>
<!-- scroll-to-top-area-end -->


<script src="js/plugins/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/plugins/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/plugins/bootstrap.min.js"></script>
<!--owl-carousel-js-->
<script src="js/plugins/owl.carousel.min.js"></script>
<!--chart-js-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--Swiper-slider-js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- <script src="js/plugins/chart.min.js"></script>
<script src="js/plugins/chart-js-script.js"></script> -->
<!-- main js -->
<script src="js/main.js"></script>

</body>
</html>

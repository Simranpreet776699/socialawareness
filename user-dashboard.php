<?php 
session_start();
?>
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
                              <a class="nav-link" href="#">Profile</a>
                          </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link" href="login.html">Logout</a>
                          </li>
                      </ul>
                      <ul class="right-area">
                        <li>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search in site">
                            <div class="search-btn">
                              <img src="images/search-icon.png" loading="lazy" alt="Search"/>
                            </div>
                          </div>
                        </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </div>
</header>
<!------ header-area-end --------->


<!------ breadcrumb-area-start --------->
<section class="breadcrumb-area">
  <div class="container">
    <div class="breadcrumb-wrap-area">
   <div class="left-group">
    <div class="left-area">
    </div>
    <div class="middle-area">
      <h3>
      <?php
                
             echo $_SESSION["name"];
          ?>
      </h3>
      <span>Campaign Manager</span>
      <p>Manage your campaigns efficiently</p>
    </div>
   </div>
      <div class="right-area">
        <ul>
          <li>
            <a class="btn-transparent btn-primary btn-block" href="campaign-participation.php" role="button">Join a Campaign</a>
          </li>
          <li>
            <a class="btn-black btn-primary btn-block" href="campaign-creation.html" role="button">Create a Campaign</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </section>
<!------ breadcrumb-area-end --------->

<!------ campaign-overview-area-start --------->
<section class="campaign-overview">
  <div class="container">
    <div class="heading-center text-center">
      <h3>
        Campaign Overview
      </h3>
      <p>
        View your campaign performance at a glance
      </p>
      <div class="button-area">
        <a class="btn-black btn-primary btn-block" href="viewcampaign.php" role="button">View My Campaigns</a>
      </div>
    </div>
    <div class="field-area">
      <div class="row">
        <div class="col-lg-6 first">
          <div class="field-inner">
            <h4>Campaigns Created</h4>
            <p>
              10
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="field-inner">
            <h4>Contributions</h4>
            <p>
              50
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="field-inner">
            <h4>Pending Notifications</h4>
            <p>
              3
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="bar-chart">
      <h3>Campaign Performance</h3>
      <p>Contributions</p>
      <div class="canvas-wrapper">  
        <div>
          <canvas id="myChart"></canvas>
        </div>
      </div>
      <p class="right-side text-right">
        Campaigns
      </p>
  </div>
  </div>
  <div class="notifications-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 noti">
          <div class="noti-left">
            <h3>Latest Notifications</h3>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bell-wrap first">
            <div class="bell-left-group">
              <div class="bell-icon">
                <img src="images/bell-icon.png" loading="lazy" alt="Bell"/>
              </div>
              <div class="bell-middle">
                <h3>New Contribution</h3>
                <p>CampaignXYZ</p>
              </div>
            </div>
            <div class="bell-right">
              <h4>50</h4>
            </div>
        
          </div>
          <div class="bell-wrap">
            <div class="bell-left-group">
              <div class="bell-icon">
                <img src="images/bell-icon.png" loading="lazy" alt="Bell"/>
              </div>
              <div class="bell-middle">
                <h3>Campaign Expiring Soon</h3>
                <p>CampaignABC</p>
              </div>
            </div>
            <div class="bell-right">
              <h4>3 days</h4>
            </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="latest-update">
    <div class="container">
      <div class="heading-center text-center">
        <h3>
          Latest Updates
        </h3>
        <div class="button-area">
          <a class="btn-black btn-primary btn-block" href="#" role="button">Share</a>
        </div>
      </div>
      <div class="update-slider">
        <div class="friends-wrap">
          <div class="friends-left-group">
            <div class="cirle-box">
            </div>
            <div class="friends-middle">
              <h3>Friend123</h3>
              <p>2 hours ago - New York</p>
            </div>
          </div>
          <div class="friends-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
            </svg>
          </div>
        </div>
        <div class="update-slider-area">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Image Slide 1</div>
              <div class="swiper-slide">Image Slide 2</div>
              <div class="swiper-slide">Image Slide 3</div>
              <div class="swiper-slide">Image Slide 4</div>
              <div class="swiper-slide">Image Slide 5</div>
              <div class="swiper-slide">Image Slide 6</div>
              <div class="swiper-slide">Image Slide 7</div>
              <div class="swiper-slide">Image Slide 8</div>
              <div class="swiper-slide">Image Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="exciting-area">
          <h3>Exciting progress on Campaign123!</h3>
          <span>Campaign Updates</span>
        </div>
      </div>
    </div>
  </section>
  <div class="edit-profile">
    <div class="container">
      <div class="heading-center text-center">
        <h3>
          Edit Profile
        </h3>
        <p>
          Update your personal information
        </p>
      </div>
      <div class="edit-form-area">
        <form>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group bottom-gap">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="John Doe"/>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="johndoe@example.com"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Bio</label>
                <input type="text" class="form-control" placeholder="Tell us about yourself"/>
              </div>
            </div>
          </div>
        </form>
        <div class="button-area">
          <button type="button" class="btn-black btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-slider">
    <div class="container">
      <div class="update-slider-area">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
            <div class="swiper-slide bottom">Learn how to make the most impact with your campaigns</div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2022 User Dashboard. All rights reserved.</p>
  </div>
</section>
<!------ campaign-overview-area-end --------->

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
<script>
  // Vertical-bar-chart-area-start //
  const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
const data = {
  labels: labels,
  datasets: [{
    label: 'Horizontal Bar Chart',
    backgroundColor: '#7f7f7f',
    data: [4, 3, 2, 4, 3, 4, 3],
  }]
};

const options = {
  indexAxis: 'x',
  plugins: {
    legend: {
      display: false,
    }
  },
  scales: {
    x: {
      ticks: {
        display: false
      }
    },
    y: {
      ticks: {
        display: false
      }
    }
  }
};

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: options
});

// Vertical-bar-chart-area-end //
</script>
</body>
</html>

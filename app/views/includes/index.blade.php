<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CAREER CONSULT</title>
        <meta name="description" content="Career Consult. A professional, independent and cost effective advice for job seekers, employees, graduates, 
        and those new to New Zealand">
        <meta name="keywords" content="Services,Prices,Career Consultations,Sign Up,Booking Enquiries,About,Contact">
        <meta name="author" content="Karyn McDonald">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        {{HTML::style('css/normalize.css')}}
        {{HTML::style('scss/main.css')}}
        {{HTML::style('scss/main.scss')}}
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Navigation -->
<!-- Drop down menu header -->
<header>
        
  <div id="brand_logo"><a href="index.html"><img src="img/CareerConsult_logo.png" alt="career consult logo"></a></div>
  
<div class="search-container">
        <form id="searchForm" action="search/SiteSearch" method="get">
            <input type="search" id="txtsearch" class="search-bar" placeholder="search" size="50" maxlength="255">
        </form> 
        <p id="fa-search"><i class="fa fa-search"></i></p>
  </div>
  <div id="tab-desk-nav"></div> 
<div id="main-header">
    <ul id="main-nav">
      <!-- <li><a href=""><i class="fa fa-pencil"></i><p>Latest News</p></a></li> -->
      <li id="menuServices"><a href="services.html"><i class="fa fa-cogs"></i><p>Services</p><i id="droparrow" class="fa fa-angle-down"></i></a></li>    
      <li id="seletedServices">
        <ul>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>CV Writing & Cover Letters</p></a></li>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>Interview Preparation</p></a></li>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>New to NZ</p></a></li>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>Employment Contracts</p></a></li>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>General Job Seeking Advice</p></a></li>
        <li><a href="services.html"><i class="fa fa-angle-right"></i><p>General Employment Advice</p></a></li> 
        </ul>
      </li>           
      <li><a href="prices.html"><i class="fa fa-usd"></i><p>Pricing</p></a></li>
      <li><a href="testimonials.html"><i class="fa fa-users"></i><p>Testimonials</p></a></li>
      <li><a href=""><i class="fa fa-briefcase"></i><p>About</p></a></li>
      <li><a href=""><i class="fa fa-phone"></i><p>Contact</p></a></li>
      <li><a href="sign-up.html"><i class="fa fa-user"></i><p class="styleList">Sign Up</p></a></li>
      <li><a href="login.html"><i class="fa fa-lock"></i><p class="styleList">Log In</p></a></li>
    </ul>
</div>
<div class="nav-handle">
  <a href="#">
    <!-- source github.com/headloose/Style-Guide / icons / arrow-down.svg -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="25px" height="25px" viewBox="0 0 20 14" enable-background="new 0 0 20 14" xml:space="preserve">
            <rect fill="white" width="20" height="2"></rect>
            <rect y="6" fill="white" width="20" height="2"></rect>
            <rect y="12" fill="white" width="20" height="2"></rect>
        </svg>
   </a>
</div>
<div class="nav-handle-login">
        <div id="navLogIn"><i id="navRightArrow" class="fa fa-angle-right"></i><a href="#" id="loginHandle">LOG IN</a></div>   
</div>  
</header> 
<!-- End of Headers -->




<!-- Footer -->
<footer>
    <div id="footer_options">
        <ul>
            <li><a href="">HELP</a></li>
            <li><a href="">PRIVACY</a></li>
            <li><a href="">TERMS</a></li>
            <li><a href="#">&copy CAREER CONSULT 2014</a></li>
            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
</footer>
        
<!-- End of Footer -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="public/js/plugins.js"></script>

        <script src="public/js/formValidation.js"></script>
        <script src="public/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
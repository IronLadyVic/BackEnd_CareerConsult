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
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Navigation -->
<!-- Drop down menu header -->
<header>
        
  <div id="brand_logo"><a href="{{URL::to('welcome')}}"><img src="{{asset('img/CareerConsult_logo.png')}}" alt="career consult logo"></a></div>
  
<div class="search-container">
        {{Form::open(array( 'id'=>'serachForm'))}}
        {{Form::text('serach', '', array('placeholder'=>'search','id'=>'txtsearch','class' => 'search-bar'))}}
             
         <p id="fa-search"><i class="fa fa-search"></i></p>           
        {{Form::close()}}
        
  </div>
  <div id="tab-desk-nav"></div> 
<div id="main-header">
    <ul id="main-nav">
      <!-- <li><a href=""><i class="fa fa-pencil"></i><p>Latest News</p></a></li> -->
      <li id="menuServices"><a href="{{URL::to('services/')}}"><i class="fa fa-cogs"></i><p>Services</p><i id="droparrow" class="fa fa-angle-down"></i></a></li>    
      <li id="seletedServices">
        <ul>
        <li><a href="{{URL::to('services/1')}}"><i class="fa fa-angle-right"></i><p>CV Writing & Cover Letters</p></a></li>
        <li><a href="{{URL::to('services/2')}}"><i class="fa fa-angle-right"></i><p>Interview Preparation</p></a></li>
        <li><a href="{{URL::to('services/3')}}"><i class="fa fa-angle-right"></i><p>New to NZ</p></a></li>
        <li><a href="{{URL::to('services/4')}}"><i class="fa fa-angle-right"></i><p>Employment Contracts</p></a></li>
        <li><a href="{{URL::to('services/5')}}"><i class="fa fa-angle-right"></i><p>General Job Seeking Advice</p></a></li>
        <li><a href="{{URL::to('services/6')}}"><i class="fa fa-angle-right"></i><p>General Employment Advice</p></a></li> 
        </ul>
      </li>           
      <li><a href="{{URL::to('prices/')}}"><i class="fa fa-usd"></i><p>Pricing</p></a></li>
      <li><a href="{{URL::to('testimonials/')}}"><i class="fa fa-users"></i><p>Testimonials</p></a></li>
      <li><a href="{{URL::to('contact/')}}"><i class="fa fa-briefcase"></i><p>Posts</p></a></li>
      <li><a href="{{URL::to('clients/')}}"><i class="fa fa-archive"></i><p class="styleList">Clients</p></a></li>    
      <li><a href="{{URL::to('index/')}}"><i class="fa fa-unlock"></i><p class="styleList">Log Out</p></a></li>
    </ul>
</div>
<div class="nav-handle">
  <a href="{{URL::to('#')}}">
    <!-- source github.com/headloose/Style-Guide / icons / arrow-down.svg -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="25px" height="25px" viewBox="0 0 20 14" enable-background="new 0 0 20 14" xml:space="preserve">
            <rect fill="white" width="20" height="2"></rect>
            <rect y="6" fill="white" width="20" height="2"></rect>
            <rect y="12" fill="white" width="20" height="2"></rect>
        </svg>
   </a>
</div>
 <div class="nav-handle-user">
    <div id="profilePic">
      <a href="{{URL::to('careerprofile/'.$user->id)}}">
        <img src="{{URL::to('uploads/'.Auth::user()->avatar)}}" alt="user" id="userProfile">
        <!-- When user logs in, the model Auth is a function in laravel - get that users id and use their avatar to upload here-->
    </a>
    </div>
    <p id="signedInTag">Welcome, {{Auth::user()->firstname}}</p>  
</div> 
</header> 
<!-- End of Headers -->
@yield('content')



<!-- Footer -->
<footer>
    <div id="footer_options">
        <ul>
            <li><a href="{{URL::to('#')}}">HELP</a></li>
            <li><a href="{{URL::to('#')}}">PRIVACY</a></li>
            <li><a href="{{URL::to('#')}}">TERMS</a></li>
            <li><a href="{{URL::to('#')}}">&copy CAREER CONSULT 2014</a></li>
            <li><a href="{{URL::to('www.facebook.com')}}"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="{{URL::to('www.twitter.com')}}"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="{{URL::to('www.linkedin.com')}}"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
</footer>
        
<!-- End of Footer -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="{{URL::to('js/plugins.js')}}"></script>

        <script src="{{URL::to('js/formValidation.js')}}"></script>
        <script src="{{URL::to('js/main.js')}}"></script>

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
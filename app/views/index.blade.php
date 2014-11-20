@extends('includes.template')

<!-- Section One -->
<div id="sectionOne">

    <!-- Introduction Section -->
    <section id="introduction">
        <h2 id="intro-paragraph">professional, independent and cost effective advice for job seekers, employees, graduates, and those new to New Zealand.</h2>
        <div id="introButtons">
            <i id="rightarrow" class="fa fa-angle-right"></i>
            <div id="launchCareer">
                <a href="services.html"><span>LAUNCH YOUR CAREER</span></a>
            </div>
            <div id="careerButton">
                <a href="sign-up.html"><span>SIGN UP</span></a>
            </div>
        </div>

    </section>
    <!-- End of Introduction Section -->
    <section id="animation">
        <h1 style="font-size: 0em;">Auckland Skyline</h1>
        <div id="aucklandSkyline"><img src="{{URL::to('img/Auckland-skyline.png')}}" alt="Auckland City"></div>
        <div id="ponsonbyHousing"><img src="{{URL::to('img/Ponsonby_Grey.png')}}" alt="Auckland City"></div>
        <div id="workingGirl"><img src="{{URL::to('img/CareerConsultBicyle_grey.png')}}" alt="On my way to work"></div>
    </section>
<!-- <section>
    <div id="careerContact">
    <p><i class="fa fa-mobile"></i></p>
    <p><a href="">0800 CONSULT</a></p>

  </div>   

</section> -->
</div>
<!-- End of Section One -->
<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <span role="close-modal"><i class="fa fa-times"></i></span>

    {{Form::open(array('url'='login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))
        <h1 id="header">LOG IN</h1>

        <p id="loginDescription">Log in to update your career profile, or enquire about booking a service.</p>

        <p><img id="profileImage" src="img/careerprofile-BLK.png" alt="profile picture"></p>
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            
            {{Form::text('username', array('id'=>'user-name', placeholder=>'Username', 'class'=>'border'))}}

        </p>
        <p>
            <span class="border"><i class="fa fa-lock"></i></span>
            <label for="password"></label>
            {{Form::password('password', array('id'=>'password', placeholder=>'Password', 'class'=>'border'))}}

        </p> 

        <input type="checkbox" value="None" id="checkBoxRemember" name="check" />
        <label for="checkBox"></label>
        <p  id="rememberMe">Remember Me</p>
        
        {{Form::submit('LOG IN', array('id'=>'logIn', 'class'=>'border'))}}
        

    {{Form::close()}}
    {{Session::get("error")}}
</div>


<div id="background"></div>
<!-- End of Log in pop up -->

<!-- End of Section Two Log in pop up -->
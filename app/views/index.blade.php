@extends('includes.master')

@section('content')

<!-- Section One -->
<div id="sectionOne">

    <!-- Introduction Section -->
    <section id="introduction">
        <h2 id="intro-paragraph">professional, independent and cost effective advice for job seekers, employees, graduates, and those new to New Zealand.</h2>
        <div id="introButtons">
            <i id="rightarrow" class="fa fa-angle-right"></i>
            <div id="launchCareer">
                <a href="{{URL::to('services/')}}"><span>LAUNCH YOUR CAREER</span></a>
            </div>
            <div id="careerButton">
                <a href="{{URL::to('users/new')}}"><span>SIGN UP</span></a>
            </div>
        </div>

    </section>
    <!-- End of Introduction Section -->
    <section id="animation">
        <h2>Auckland Skyline</h2>
        <div id="aucklandSkyline"><img src="{{URL::to('img/Auckland-skyline.png')}}" alt="Auckland City"></div>
        <div id="ponsonbyHousing"><img src="{{URL::to('img/Ponsonby_Grey_Street.fw.png')}}" alt="Auckland City"></div>
        <div id="hideBicycle"><img src="{{URL::to('img/CareerConsultBicyle_grey.png')}}" alt="Career Consult" id="workingGirl" style=""></div>
    </section>

</div>
<!-- End of Section One -->

<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))}}
    <span role="close-modal"><i class="fa fa-times"></i></span>
    <h1 id="header">LOG IN</h1>

    <p id="loginDescription">Log in to update your career profile, or enquire about booking a service.</p>

            <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

                 $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

            }
        ?>
    <p><img id="profileImage" src="{{$sPhoto}}" alt="profile picture"></p>
    <p>
        <span class="border"><i class="fa fa-user"></i></span>           
        {{Form::text('username')}}
        {{$errors->first('username','<p class="border">:message</p>')}}
    </p>
    <p>
        <span class="border"><i class="fa fa-lock"></i></span>
        {{Form::password('password')}}
        {{$errors->first('password','<p class="border">:message</p>')}}

    </p> 
    {{Form::checkbox('check', 'agreement', true, array('id' => 'checkBoxRemember'));}}
    {{$errors->first('checkbox','<p class="border">:message</p>')}} 
    <p  id="rememberMe">Remember Me</p>

    {{Form::submit('LOG IN', array('id'=>'logIn', 'class'=>'border'))}}


    {{Form::close()}}
    {{Session::get("error")}}
</div>


<div id="background"></div>
<!-- End of Log in pop up -->

@stop
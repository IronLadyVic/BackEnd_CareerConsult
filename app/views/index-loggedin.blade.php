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
                <a href="{{URL::to('users/{id}')}}"><span>CAREER PROFILE</span></a>
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

</div>
<!-- End of Section One -->



@stop
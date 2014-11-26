@extends('includes.master')

@section('content')

<!-- Section One -->
<div id="sectionOne">

    <!-- Introduction Section -->
    <section id="introduction">
        <h2 id="intro-paragraph-loggedin">Career Consult understands that when you are looking for a job, or need employment advice, money can be a concern.</h2>
        <p class="para-loggedin">I aim to reduce this worry by offering a FREE 15 minute consultation to determine your needs and prepare a tailored plan.</p>
        <p class="para-loggedin">There is no obligation to book an appointment after your consultation, however prices are set so that most budgets can use this service.</p>
        <div id="introButtons">
            <i id="rightarrow" class="fa fa-angle-right"></i>
            <div id="launchCareer">
                <a href="{{URL::to('book/')}}"><span>BOOK AN APPOINTMENT</span></a>
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
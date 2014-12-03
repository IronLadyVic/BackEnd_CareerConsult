@extends('includes.master')

@section('content')

<!-- Section One -->
<div id="sectionOne">

    <!-- Introduction Section -->
    @if(Auth::check() && (Auth::user()->admin == 1))
    <section id="introduction">
        <h2 id="intro-paragraph-loggedin">Hi Karyn, please start editing your content.<br><br>You may edit, Service, Pricing and Testimonials.<br>This will automatically be saved to your database.</h2>
        <!-- <p class="para-loggedin">You can edit, Service, Pricing and Testimonials.</p> -->
<!--         <p class="para-loggedin">There is no obligation to book an appointment after your consultation, however prices are set so that most budgets can use this service.</p>
 -->        <div id="introButtons">
            <i id="rightarrow" class="fa fa-angle-right"></i>
            <div id="launchCareer">
                <a href="{{URL::to('addclient/')}}"><span>VIEW CLIENTS</span></a>
            </div>
            <div id="careerButton">
                <a href="{{URL::to('users/'.Auth::user()->id)}}"><span>ADD A CLIENT</span></a>
            </div>
        </div>
    </section>
    @else
    <section id="introduction">
        <h2 id="intro-paragraph-loggedin">Career Consult understands that when you are looking for a job, or need employment advice, money can be a concern. I aim to reduce this worry by offering a free 15 minute consultation to determine your needs and prepare a tailored plan.</h2>
        <!-- <p class="para-loggedin">I aim to reduce this worry by offering a FREE 15 minute consultation to determine your needs and prepare a tailored plan.</p>
        <p class="para-loggedin">There is no obligation to book an appointment after your consultation, however prices are set so that most budgets can use this service.</p> -->
        <div id="introButtons">
            <i id="rightarrow" class="fa fa-angle-right"></i>
            <div id="launchCareer">
                <a href="{{URL::to('book/')}}"><span>BOOK AN APPOINTMENT</span></a>
            </div>
            <div id="careerButton">
                <a href="{{URL::to('users/'.Auth::user()->id)}}"><span>CAREER PROFILE</span></a>
            </div>
        </div>
    </section>
    @endif
    <!-- End of Introduction Section -->
    <section id="animation">
        <h1 style="font-size: 0em;">Auckland Skyline</h1>
        <div id="aucklandSkyline"><img src="{{URL::to('img/Auckland-skyline.png')}}" alt="Auckland City"></div>
        <div id="ponsonbyHousing"><img src="{{URL::to('img/Ponsonby_Grey_Street.fw.png')}}" alt="Ponsonby"></div>
        <div id="hideBicycle"><img src="{{URL::to('img/CareerConsultBicyle_grey.png')}}" alt="Career Consult, working girl" id="workingGirl" style=""></div>
    </section>

</div>
<!-- End of Section One -->



@stop
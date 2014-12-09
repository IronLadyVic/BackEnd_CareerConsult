@extends('includes.master')
@section("content")

<div id="leftColomnTestimonials">

    <div class="leftColomn">

        <div class="cd-testimonials-wrapper cd-container">
            <h1>WHAT CLIENTS ARE SAYING.</h1>
            <ul class="cd-testimonials">

                @foreach(Testimonial::all() as $testimonial)
                <li> 
                    <p>{{$testimonial->content}}</p>
                    <div class="cd-client">
                        <img src="{{URL::to('img/'.$testimonial->avatar)}}" alt="Client Profile Image">
                        <ul class="cd-client-info">
                            <li>{{$testimonial->client}}</li>
                            <li>{{$testimonial->company}}</li>
                        </ul>
                    </div>                     
                </li> 
                @endforeach 

            </ul> 

        </div>

    </div>
    <div id="testimonialImage"><img src="{{URL::to('img/AucklandCityExtended.png')}}" alt="testimonials from career consult"></div>
</div>

<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))}}
    <p class="closeModel"><i class="fa fa-times"></i></p>
    <h1 class="header">LOG IN</h1>

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
    {{Form::text('username', '', array('placeholder'=>'Username', 'id'=>'userName', 'class'=>'border'))}}
</p>
{{$errors->first('username','<p class="error">:message</p>')}}
<p>
    <span class="border" ><i class="fa fa-lock"></i></span>       
    {{Form::password('password', array('placeholder' => 'Password', 'id'=>'passwordLogin'))}}
</p>
{{$errors->first('username','<p class="error">:message</p>')}}

{{Form::checkbox('check', 'none', false, array('id' => 'checkBoxRemember'));}}
<p  id="rememberMe">Remember Me</p>

{{Form::submit('LOG IN', array('id'=>'logIn', 'class'=>'border'))}}


{{Form::close()}}
{{Session::get("error")}}
</div>


<div id="background"></div>
<!-- End of Log in pop up -->

@stop
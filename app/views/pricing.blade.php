@extends('includes.master')
@section("content")

<!-- Start of Services -->
<div id="sectionPrices">
    <section id="pricesListed">
        @if(Auth::check())
            <h1 class="header">TAKE A LOOK AT OUR <a href="{{URL::to('services/1')}}" id="aLink">SERVICES</a> TODAY.</h1>
        @else
            <h1 class="header">TRY CAREER CONSULT FOR FREE. <a href="{{URL::to('users/new')}}" id="aLink">SIGN UP</a> TODAY.</h1>
        @endif
        <div class="pricing_table">
        @foreach(Price::all() as $price)
        <!-- Price type -->
            <div class="priceTable">
                <div class="pricesHeader"><h2>{{$price->price}}</h2>
                </div>
                <div class="priceContents">
                    <ul>
                        {{$price->content}}
                    </ul>
                </div>
            </div>
        @endforeach     
        </div>
    </section>
    </div>
        <div id="pricingImage"><img src="{{URL::to('img/AucklandCityExtended.png')}}" alt="testimonials from career consult"></div>
</div>   
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

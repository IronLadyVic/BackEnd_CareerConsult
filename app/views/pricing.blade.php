@extends('includes.master-login')
@section("content")

<!-- Start of Services -->
<div id="sectionPrices">
    <section id="pricesListed">
        <h1 id="header">TRY CAREER CONSULT FOR FREE. <a href="{{URL::to('users/new')}}" id="aLink">SIGN UP</a> TODAY.</h1>

        <div class="pricing_table">

        <?php $pricingTypes =  pricing::paginate(6); ?> 

        @foreach($pricingTypes as $price)
            <!-- Price type 1 -->
            <div class="priceTable">
                <div class="pricesHeader"><h2>{{$price->price}}</h2>

                </div>
                <div class="priceContents">
                    <ul>
                        <li>{{$price->content}}</li>
                        <li>{{$price->content}}</li>
                        <li>{{$price->content}}</li>
                        <li>{{$price->content}}</li>
                        <li>{{$price->content}}</li>
                    </ul>
                </div>
            </div>
        @endforeach     
            

        </div>
    </section>   
</div>

<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))}}
    <span role="close-modal"><i class="fa fa-times"></i></span>
    <h1 id="header">LOG IN</h1>

    <p id="loginDescription">Log in to update your career profile, or enquire about booking a service.</p>

    <p><img id="profileImage" src="URL::to('img/careerprofile-BLK.png')" alt="profile picture"></p>
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

    {{Form::submit('LOG IN', array('id'=>'logIn'))}}


    {{Form::close()}}
    {{Session::get("error")}}
</div>


<div id="background"></div>
<!-- End of Log in pop up -->


@stop

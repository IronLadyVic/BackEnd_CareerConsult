@extends('includes.master-login')
@section("content")

<div id="leftColomnTestimonials">

<div class="leftColomn">

<div class="cd-testimonials-wrapper cd-container">
<h1>WHAT CLIENTS ARE SAYING:</h1>
    <ul class="cd-testimonials">

    <?php 
        // $sEditable = "" ;
        // if(){
        //     $sEditable = 'data-editable="yes"';
        // }

    ?>


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
<div id="testimonialImage"><img src="img/AucklandCityExtended.png" alt="testimonials from career consult"></div>
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
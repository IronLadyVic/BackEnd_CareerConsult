@extends('includes.master')
@section("content")
<div id="mainSignUpBody">
    <div id="sectionSignUp">
        <section id="signing-up">
            <h1 class="header">SIGN UP</h1>

            <p id="description">Sign up and recieve a free 15 minute career consultation.</p>

            <ul id="reasonsToSignUp">
                <li>Why should I sign up?</li>
                <li>Help your Career Consultant tailor a service to your needs by filling in your Career Profile.</li>
                <li>Not sure on signing up? Please enquire with one of our <a href="{{URL::to('services/1')}}" id="aLink">services</a>.</li>
                <li>Upload your Career Profile Picture. Help your Career Consultant recognise who you are, when you decide to meet up.</li>
            </ul>


            {{Form::open(array('url'=>'users','files'=>'true','id'=>'signup-form'))}}

            <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

               $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

           }
           ?>
           <div class="profileAuto">
            <img id="profileImage" src="{{$sPhoto}}" alt="career profile">
        </div>
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>
            {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}
        </p>
        {{$errors->first('avatar','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::text('username', '', array('placeholder'=>'Username', 'id'=>'userName', 'class'=>'border'))}}            
        </p>
        {{$errors->first('username','<p class="error">:message</p>')}}
        <p>
            <span class="border" ><i class="fa fa-lock"></i></span>
            {{Form::password('password', array('placeholder'=>'Password'));}}
        </p>
        {{$errors->first('password','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-lock"></i></span>            
            {{Form::password('password_confirmation',array('placeholder'=>'Confirm Password'));}}             
        </p>
        {{$errors->first('password_confirmation','<p class="error">:message</p>')}}
        <p>
            <span class="border" ><i class="fa fa-user"></i></span>            
            {{Form::text('firstname', '', array('placeholder'=>'First Name', 'id'=>'firstName', 'class'=>'border'))}}           
        </p>
        {{$errors->first('firstname','<p class="error">:message</p>')}} 
        <p>
            <span class="border"><i class="fa fa-user"></i></span>            
            {{Form::text('lastname', '', array('placeholder'=>'Last Name', 'id'=>'lastName', 'class'=>'border'))}} 
        </p>
        {{$errors->first('lastname','<p class="error">:message</p>')}} 
        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::email('email', '', array('placeholder'=>'Email', 'id'=>'email', 'class'=>'border'))}}             
        </p>
        {{$errors->first('email','<p class="error">:message</p>')}}  
        <p>
            <span class="border" ><i class="fa fa-phone"></i></span>
            {{Form::text('phone', '', array('placeholder'=>'Contact Number', 'id'=>'contact', 'class'=>'border'))}}  
        </p>
        {{$errors->first('phone','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-hand-o-right"></i></span>
            {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}} 
        </p>
        {{$errors->first('service_type','<p class="error">:message</p>')}} 
        <p>
            <span class="border"><i class="fa fa-pencil-square-o"></i></span>           
            {{Form::textarea('comment', '',array('id'=>'comment', 'placeholder'=>'Questions or Comments'))}}            
        </p>
        {{$errors->first('comment','<p class="error">:message</p>')}} 

        <p id="agreementStatement" class="border">Terms & Conditions. In order to keep you informed and help you with your future career, we will retain your sign up information, private email address and mobile number on file to keep in touch with you. Please tick this box if you agree with this statement.</p>
        <div>
            {{Form::checkbox('check', 'I agree to the terms & conditions', true, array('id' => 'check'));}}
            {{$errors->first('check','<p class="error">:message</p>')}}  
            
        </div>
        
        {{Form::submit('SIGN UP', array('id'=>'signUp', 'class' => 'button'));}}
        
        

        {{Form::close()}}
        {{Session::get("error")}}
    </section>
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
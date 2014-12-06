@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">
            <div class="contentWrapper">
                <div class="headerTopic">
                    <h2 id="enquiryHeader">Enquire here</h2>
                </div>
                <div class="contentPost">
                    <p class="enquireContent">Did you know that employers tend to look at a CV and make up their mind within about 10 seconds… make sure your CV is a YES!</p>                   
                </div>

                {{Form::open(array('url'=>'users','files'=>'true','id'=>'enquire-form'))}}
                <p>
                    <span class="border" ><i class="fa fa-user"></i></span>

                    {{Form::text('firstname', '', array('placeholder'=>'First Name', 'id'=>'firstName', 'class'=>'border'))}}
                    {{$errors->first('firstname','<p class="error">:message</p>')}}

                </p>
                <p>
                    <span class="border"><i class="fa fa-user"></i></span>

                    {{Form::text('lastname', '', array('placeholder'=>'Last Name', 'id'=>'lastName', 'class'=>'border'))}}
                    {{$errors->first('lastname','<p class="error">:message</p>')}}   

                </p>
                <p>
                    <span class="border"><i class="fa fa-envelope"></i></span>

                    {{Form::email('email', '', array('placeholder'=>'Email', 'id'=>'email', 'class'=>'border'))}}
                    {{$errors->first('email','<p class="error">:message</p>')}}   

                </p>
                <p>
                    <span class="border"><i class="fa fa-hand-o-right"></i></span>

                    {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
                    {{$errors->first('select','<p class="error">:message</p>')}}  
                </p>
                <p>
                    <span class="border"><i class="fa fa-pencil-square-o"></i></span>

                    {{Form::textarea('comment', '',array('id'=>'comment', 'placeholder'=>'Questions or Comments'))}}
                    {{$errors->first('comment','<p class="error">:message</p>')}} 

                </p>
                {{Form::submit('SUBMIT ENQUIRY', array('id'=>'enquire', 'class' => 'button'));}}
                {{Form::close()}}
            </div> 
        </article>

    </div>

    <aside id="rightColomn">
        <section id="enquireContact">
            <h2>CONTACT US</h2>
            <div class="panelTopics">
                <ul>
                    <li><a href="0800 CAREER CONSULT"><i class="fa fa-phone"></i>0800 CAREER CONSULT</a></li>
                    <li><a href="karyn@careerconsult.co.nz"><i class="fa fa-envelope"></i>karyn@careerconsult.co.nz</a></li>
                    <li><a href="#"><i class="fa fa-skype"></i>karyn@careerconsult.co.nz</a></li>
                    <li><div id="flex-google"></div></li>
                    
                </ul>
            </div>    
        </section>

    </aside>
    <!-- End of Container -->
<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))}}
    <span role="close-modal"><i class="fa fa-times"></i></span>
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
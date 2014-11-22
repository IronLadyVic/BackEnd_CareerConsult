@extends('includes.master-login')
@section("content")

<div id="sectionSignUp">
    <section id="signing-up">
        <h1 id="header">SIGN UP</h1>

        <p id="description">Sign up and recieve a free 15 minute career consultation.</p>

        <ul id="reasonsToSignUp">
            <li>Why should I sign up?</li>
            <li>Help your Career Consultant tailor a service to your needs by filling in your Career Profile.</li>
            <li>Not sure on signing up? Please enquire with one of our <a href="{{URL::to('services/')}}" id="aLink">services</a>.</li>
            <li>Upload your Career Profile Picture. Help your Career Consultant recognise who you are, when you decide to meet up.</li>
        </ul>


        {{Form::open(array('url'=>'signup','id'=>'signup-form'))}}
        <div class="profileAuto">
            <img id="profileImage" src="{{URL::to('careerprofile/')}}" alt="career profile">
        </div>
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>
            {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}
            
        </p>
        <p>
            <span class="border"><i class="fa fa-user"></i></span>

            {{Form::text('username', '', array('placeholder'=>'Username', 'id'=>'userName', 'class'=>'border'))}}
            {{$errors->first('username','<p class="border">:message</p>')}}
        </p>
        <p>
            <span class="border" ><i class="fa fa-lock"></i></span>
            {{Form::text('password', '', array('placeholder'=>'Password', 'id'=>'passwordSignUp', 'class'=>'border'))}}
            {{$errors->first('password','<p class="border">:message</p>')}}       
        </p>
        <p>
            <span class="border"><i class="fa fa-lock"></i></span>
            {{Form::text('confirm_password', '', array('placeholder'=>'Confirm Password', 'id'=>'confirm_password', 'class'=>'border'))}}
            {{$errors->first('confirm_password','<p class="border">:message</p>')}}  
            
        </p>
        <p>
            <span class="border" ><i class="fa fa-user"></i></span>
            {{Form::text('firstname', '', array('placeholder'=>'First Name', 'id'=>'firstName', 'class'=>'border'))}}
            {{$errors->first('firstname','<p class="border">:message</p>')}}
            
        </p>
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::text('lastname', '', array('placeholder'=>'Last Name', 'id'=>'lastName', 'class'=>'border'))}}
            {{$errors->first('lastname','<p class="border">:message</p>')}}   
            
        </p>
        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::email('email', '', array('placeholder'=>'Email', 'id'=>'email', 'class'=>'border'))}}
            {{$errors->first('email','<p class="border">:message</p>')}}   
            
        </p>
        <p>
            <span class="border" ><i class="fa fa-phone-square"></i></span>
            {{Form::text('phone', '', array('placeholder'=>'Contact Number', 'id'=>'contact', 'class'=>'border'))}}
            {{$errors->first('phone','<p class="border">:message</p>')}}  
            
        </p>
        <p>
            <span class="border"><i class="fa fa-hand-o-right"></i></span>
            {{Form::select('name', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice', 'class'=>'border'))}}
            {{$errors->first('select','<p class="border">:message</p>')}}  
        </p>
        <p>
            <span class="border"><i class="fa fa-pencil-square-o"></i></span>
            <label for="comment"></label>
            <textarea name="comment" id="comment" placeholder="Comments or Questions" class="border"></textarea>
        </p>

        <p id="agreementStatement" class="border">In order to keep you informed and help you with your future career, we will retain your sign up information, private email address and mobile number on file to keep in touch with you. Please tick this box if you agree with this statement.</p>
        <div>
        {{Form::checkbox('check', 'agreement', true, array('id' => 'check'));}}
        {{$errors->first('checkbox','<p class="border">:message</p>')}}    
         
        </div>
        
        {{Form::button('SIGN UP', array('id'=>'signUp', 'class' => 'button'));}}
        
        

        {{Form::close()}}
        {{Session::get("error")}}
    </section>
</div>


@stop
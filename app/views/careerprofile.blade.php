@extends('includes.master')
@section("content")


<!-- Career Profile Client add info. -->
<div id="sectionCareerProfile">
<section id="career-profile">
    <h1 id="header">CAREER PROFILE</h1>
    
    <p id="description">By updating your Career Profile, this will help your career consultant provide the correct service and help you launch your career, faster and easier.</p>
    
    {{ Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put', 'id'=>'careerProfile-form')) }} 
    
        <div class="profileAuto">
        <img id="profileImage" src="img/careerprofile-BLK.png" alt="profile picture">
        </div>

        <p>
        <span class="border"><i class="fa fa-camera"></i></span>
        <label for="avatar"></label>
        <input type="file" name="imageType" id="avatar" class="border"  >
        </p>

        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::label('userName', '')}}
        {{Form::text('username', array('id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
        {{$errors->first('username','<p class="error">:message</p>')}}
        
        </p>

        <p>
        <span class="border"><i class="fa fa-envelope"></i></span>
        {{Form::label('email', '')}}
        {{Form::email('email', array('id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
        {{$errors->first('email','<p class="error">:message</p>')}}
        </p>

        <p>
        <span class="border"><i  class="fa fa-user"></i></span>
        {{Form::label('firstName', '')}}
        {{Form::text('firstname', array('id'=>'firstName', 'placeholder'=>'First Name', 'class'=>'border'))}}
        {{$errors->first('firstname','<p class="error">:message</p>')}}
        </p>

        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::label('lastName', '')}}
        {{Form::text('lastname', array('id'=>'lastName', 'placeholder'=>'Last Name', 'class'=>'border'))}}
        {{$errors->first('lastname','<p class="error">:message</p>')}}
        </p>

        <p>
        <span class="border"><i  class="fa fa-phone-square"></i></span>
        {{Form::label('contact', '')}}
        {{Form::text('phone', array('id'=>'contact', 'placeholder'=>'Contact Number', 'class'=>'border'))}}
        {{$errors->first('phone','<p class="error">:message</p>')}}
        </p>
      
        <p>
        <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
        {{Form::label('personalGoals', '')}}
        {{Form::textarea('personal_goal', array('id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
        {{$errors->first('personal_goal','<p class="error">:message</p>')}}
        </p>

        <p>
        <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
        {{Form::label('experience, '')}}
        {{Form::textarea('experience', array('id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
        {{$errors->first('experience','<p class="error">:message</p>')}} 
        </p>
        
        <p>
        <span class="border"><i class="fa fa-university"></i></span>
        {{Form::label('education, '')}}
        {{Form::textarea('education', array('id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
        {{$errors->first('education','<p class="error">:message</p>')}} 
        </p>

        <p>
        <span class="border"><i  class="fa fa-trophy"></i></span>
        {{Form::label('acheivements, '')}}
        {{Form::textarea('acheivements', array('id'=>'acheivements', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
        {{$errors->first('acheivements','<p class="error">:message</p>')}}  
        </p>

        <p>
        <span class="border"><i class="fa fa-history"></i></span>
        {{Form::label('career_history, '')}}
        {{Form::textarea('career_history', array('id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
        {{$errors->first('career_history','<p class="error">:message</p>')}}  
        </p>

        <p>
        <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
        {{Form::label('career_type, '')}} 
        {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration & Office Support','3'=>'Advertising, Arts & Media',
        '4'=>'Banking Financial Services', '5'=>'Call Centre & Customer Service', '6'=>'CEO & General Management', '7'=>'Community Services & Development',
        '8'=>'Construction', '9'=>'Consulting & Strategy', '10'=>'Community Services & Development', 'class'=>'border'))}}
        {$errors->first('select','<p class="error">:message</p>')}}     
        <select id="careerClass" class="border">
            <option value="0">Choose your Career Class</option>
            <option value="1">Accounting</option>
            <option value="2">Administration & Office Support</option>
            <option value="4">Advertising, Arts & Media</option>
            <option value="5">Banking Financial Services</option>
            <option value="6">Call Centre & Customer Service</option>
            <option value="7">CEO & General Management</option>
            <option value="8">Community Services & Development</option>
            <option value="9">Construction</option>
            <option value="10">Consulting & Strategy</option>
            <option value="11">Community Services & Development</option>
            <option value="12">Design &amp Architecture</option>
            <option value="13">Education &amp Training</option>
            <option value="14">Engineering</option>
            <option value="15">Farming, Animals &amp Conservation</option>
            <option value="16">Government &amp Defence</option>
            <option value="17">Healthcare &amp Medical</option>
            <option value="18">Hospitality &amp Tourism</option>
            <option value="19">Human Resources &amp Recruitment</option> 
            <option value="20">Information &amp Communication Technology</option>
            <option value="21">Insurance &amp Superannuation</option>
            <option value="22">Legal</option>
            <option value="23">Manufacturing, Transport &amp Logistics</option>
            <option value="24">Marketing &amp Communications</option>
            <option value="25">Mining, Resources &amp Energy</option>
            <option value="26">Real Estate &amp Property</option>
            <option value="27">Retail &amp Consumer Products</option>
            <option value="28">Sales</option>
            <option value="29">Science &amp Technology</option>
            <option value="30">Self Employment</option>
            <option value="31">Sport &amp Recreation</option>
            <option value="32">Trades &amp Services</option>
        </select>
        </p>
       <p>
        <span class="border"><i  class="fa fa-hand-o-right"></i></span>
        <label for="servicesSel"></label>
        <select id="servicesSel" class="border">
            <option value="0">Services I'm Interested In...</option>
            <option value="1">CV Writing & Cover Letters</option>
            <option value="2">Interview Preparation</option>
            <option value="4">New to NZ</option>
            <option value="5">Employment Contracts</option>
            <option value="6">General Job Seeking Advice</option>
            <option value="7">General Employment Advice</option>
        </select>
        </p>
        

        <p>
        <p id="agreementStatement" class="border">In order to keep you informed and help you with your future career, we will retain your career profile for future career consult meetings & career planning. I consent by ticking this box.
        
        {{Form::checkbox('check', 'consent given', false, array('id' => 'checkboxCareerProfile'))}}
        {{$errors->first('checkbox','<p class="border">:message</p>')}}   
        

        <label for="updateProfile"></label>
        <input type="submit" name="button" id="updateProfile" class="button" value="UPDATE MY PROFILE">
    {{ Form::close() }}
</section>
</div>



@stop
@extends('includes.master')
@section("content")


<!-- Career Profile Client add info. -->
<div id="sectionCareerProfile">
    <section id="career-profile">
        <h1 id="header">CAREER PROFILE</h1>

        <p id="description">By updating your Career Profile, this will help your career consultant provide the correct service and help you launch your career, faster and easier.</p>

        {{ Form::model($user, array('url' => 'users/'.$user->id, 'files'=>'true', 'id'=>'careerProfile-form')) }} 

        <div class="profileAuto">
            <img id="profileImage" src="{{URL::to('uploads/'.$user->id)}}" alt="profile picture">
        </div>

        <p>
            <span class="border"><i class="fa fa-camera"></i></span>
            {{Form::label(array('id'=>'avatar'))}}
            {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}
            {{$errors->first('avatar','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label(array('id'=>'userName'))}}
            {{Form::text('username', array('id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
            {{$errors->first('username','<p class="error">:message</p>')}}

        </p>

        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::label(array('id'=>'email'))}}
            {{Form::email('email', array('id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
            {{$errors->first('email','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-user"></i></span>
            {{Form::label(array('id'=>'firstName'))}}
            {{Form::text('firstname', array('id'=>'firstName', 'placeholder'=>'First Name', 'class'=>'border'))}}
            {{$errors->first('firstname','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label(array('id'=>'lastName'))}}
            {{Form::text('lastname', array('id'=>'lastName', 'placeholder'=>'Last Name', 'class'=>'border'))}}
            {{$errors->first('lastname','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-phone-square"></i></span>
            {{Form::label(array('id'=>'contact'))}}
            {{Form::text('phone', array('id'=>'contact', 'placeholder'=>'Contact Number', 'class'=>'border'))}}
            {{$errors->first('phone','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label(array('id'=>'personalGoals'))}}
            {{Form::textarea('personal_goal', array('id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
            {{$errors->first('personal_goal','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label(array('id'=>'experience'))}}
            {{Form::textarea('experience', array('id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
            {{$errors->first('experience','<p class="error">:message</p>')}} 
        </p>
        
        <p>
            <span class="border"><i class="fa fa-university"></i></span>
            {{Form::label(array('id'=>'education'))}}
            {{Form::textarea('education', array('id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
            {{$errors->first('education','<p class="error">:message</p>')}} 
        </p>

        <p>
            <span class="border"><i  class="fa fa-trophy"></i></span>
            {{Form::label(array('id'=>'acheivements'))}}
            {{Form::textarea('acheivements', array('id'=>'acheivements', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
            {{$errors->first('acheivements','<p class="error">:message</p>')}}  
        </p>
        <p>
            <span class="border"><i class="fa fa-history"></i></span>
            {{Form::label(array('id'=>'careerHistory'))}}
            {{Form::textarea('career_history', array('id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
            {{$errors->first('career_history','<p class="error">:message</p>')}}  
        </p>
        <p>
            <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
            {{Form::label(array('id'=>'career_type'))}}
            {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration & Office Support','3'=>'Advertising, Arts & Media',
            '4'=>'Banking Financial Services', '5'=>'Call Centre & Customer Service', '6'=>'CEO & General Management', '7'=>'Community Services & Development',
            '8'=>'Construction', '9'=>'Consulting & Strategy', '10'=>'Community Services & Development', '11'=>'Construction', '12'=>'Consulting & Strategy','13'=>'Community Services & Development',
            '14'=>'Design &amp Architecture', '15'=>'Education &amp Training', '16'=>'Engineering', '17'=>'Farming, Animals &amp Conservation', '18'=>'Government &amp Defence', '19'=>'Healthcare &amp Medical', '20'=>'Hospitality &amp Tourism', '21'=>'Human Resources &amp Recruitment', '22'=>'Information &amp Communication Technology', 
            '23'=>'Insurance &amp Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport &amp Logistics', '26'=>'Marketing &amp Communications', '27'=>'Mining, Resources &amp Energy',
            '28'=>'Real Estate &amp Property', '29'=>'Retail &amp Consumer Products', '30'=>'Sales', '31'=>'Sales', '32'=>'Science &amp Technology', '33'=>'Self Employment', '34'=>'Sport &amp Recreation', '35'=>'Trades &amp Services'))}}
            {$errors->first('select','<p class="error">:message</p>')}}     
        </p>
        <p>
            <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
            {{Form::label(array('id'=>'servicesSel'))}}
            {{Form::select('service_type', array('0' => 'Services I am Interested In...', '1'=>'CV Writing & Cover Letters', '2'=>'Interview Preparation', '3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
            {$errors->first('service_type','<p class="error">:message</p>')}} 
        </p>

        
        <p id="agreementStatement" class="border">In order to keep you informed and help you with your future career, we will retain your career profile for future career consult meetings and career planning. I consent by ticking this box.

            {{Form::checkbox('check', 'consent given', false, array('id' => 'checkboxCareerProfile'))}}
            {{$errors->first('checkbox','<p class="border">:message</p>')}}   

            {{Form::label(array('id'=>'updateProfile'))}}
            {{Form::submit('UPDATE MY PROFILE', array('id'=>'updateProfile','class'=>'button'))}}

            {{Form::close()}}
        </section>
    </div>



    @stop
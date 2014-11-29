@extends('includes.master')
@section("content")


<!-- Career Profile Client add info. -->
<div id="sectionCareerProfile">
    <section id="career-profile">
        <h1 id="header">CAREER PROFILE</h1>

        <p id="description">By updating your Career Profile, this will help your career consultant provide the correct service and help you launch your career, faster and easier.</p>

        {{ Form::model($user, array('url' => 'users/'.$user->id, 'files'=>'true', 'id'=>'careerProfile-form')) }} 
        <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

                 $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

            }
        ?>
        <div class="profileAuto">
            <img id="profileImage" src="{{$sPhoto}}" alt="profile picture">
        </div>
        
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>
            {{Form::label('avatar','', array('id'=>'avatar'))}}
            {{Form::file('avatar', array('disabled'=>'disabled', 'id' => 'avatar', 'class'=>'border'))}}
            <!-- {{$errors->first('avatar','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('username','', array('id'=>'userName'))}}
            {{Form::text('username', $user->username, array('disabled'=>'disabled', 'id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
            <!-- {{$errors->first('username','<p class="error">:message</p>')}} -->

        </p>

        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::label('email','', array('id'=>'email'))}}
            {{Form::email('email', $user->email, array('disabled'=>'disabled', 'id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
            <!-- {{$errors->first('email','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i  class="fa fa-user"></i></span>
            {{Form::label('firstname','', array('id'=>'firstName'))}}
            {{Form::text('firstname', $user->firstname, array('disabled'=>'disabled', 'id'=>'firstName', 'placeholder'=>'First Name', 'class'=>'border'))}}
            <!-- {{$errors->first('firstname','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('lastname','', array('id'=>'lastName'))}}
            {{Form::text('lastname', $user->lastname, array('disabled'=>'disabled', 'id'=>'lastName', 'placeholder'=>'Last Name', 'class'=>'border'))}}
            <!-- {{$errors->first('lastname','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i  class="fa fa-phone-square"></i></span>
            {{Form::label('phone','', array('id'=>'contact'))}}
            {{Form::text('phone', $user->phone, array('disabled'=>'disabled', 'id'=>'contact', 'placeholder'=>'Contact Number', 'class'=>'border'))}}
            <!-- {{$errors->first('phone','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('personal_goal','', array('id'=>'personalGoals'))}}
            {{Form::textarea('personal_goal', '', array('disabled'=>'disabled', 'id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
            <!-- {{$errors->first('personal_goal','<p class="error">:message</p>')}} -->
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('experience','', array('id'=>'experience'))}}
            {{Form::textarea('experience', '', array('disabled'=>'disabled', 'id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
            <!-- {{$errors->first('experience','<p class="error">:message</p>')}}  -->
        </p>
        
        <p>
            <span class="border"><i class="fa fa-university"></i></span>
            {{Form::label('education','', array('id'=>'education'))}}
            {{Form::textarea('education', '', array('disabled'=>'disabled', 'id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
            <!-- {{$errors->first('education','<p class="error">:message</p>')}}  -->
        </p>

        <p>
            <span class="border"><i  class="fa fa-trophy"></i></span>
            {{Form::label('acheivements','', array('id'=>'acheivements'))}}
            {{Form::textarea('acheivements', '', array('disabled'=>'disabled', 'id'=>'acheivements', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
            <!-- {{$errors->first('acheivements','<p class="error">:message</p>')}}   -->
        </p>
        <p>
            <span class="border"><i class="fa fa-history"></i></span>
            {{Form::label('career_history','', array('id'=>'careerHistory'))}}
            {{Form::textarea('career_history', '', array('disabled'=>'disabled', 'id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
           <!--  {{$errors->first('career_history','<p class="error">:message</p>')}}   -->
        </p>
        <p>
            <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
            {{Form::label('career_type','', array('id'=>'career_type'))}}
            
            {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration and Office Support','3'=>'Advertising, Arts and Media',
            '4'=>'Banking Financial Services', '5'=>'Call Centre and Customer Service', '6'=>'CEO and General Management', '7'=>'Community Services and Development',
            '8'=>'Construction', '9'=>'Consulting and Strategy', '10'=>'Community Services and Development', '11'=>'Construction', '12'=>'Consulting and Strategy','13'=>'Community Services and Development',
            '14'=>'Design and Architecture', '15'=>'Education and Training', '16'=>'Engineering', '17'=>'Farming, Animals and Conservation', '18'=>'Government and Defence', '19'=>'Healthcare and Medical', '20'=>'Hospitality and Tourism', '21'=>'Human Resources and Recruitment', '22'=>'Information and Communication Technology', 
            '23'=>'Insurance and Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport and Logistics', '26'=>'Marketing and Communications', '27'=>'Mining, Resources and Energy',
            '28'=>'Real Estate and Property', '29'=>'Retail and Consumer Products', '30'=>'Sales', '31'=>'Sales', '32'=>'Science and Technology', '33'=>'Self Employment', '34'=>'Sport and Recreation', '35'=>'Trades and Services'))}}
            
           <!--  {{$errors->first('select','<p class="error">:message</p>')}}  -->    
        </p>
        <p>
            <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
            {{Form::label('service_type','', array('id'=>'service_type'))}}

            {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
            <!-- {{$errors->first('service_type','<p class="error">:message</p>')}}  -->
        </p>
        
        <p class="editProfile">
            <a href="{{URL::to('careerprofile/'.$user->id.'/edit')}}">UPDATE MY PROFILE</a>
            </p>
        <p id="agreementStatement" class="border">In order to keep you informed and help you with your future career, we will retain your career profile for future career consult meetings and career planning. I consent by ticking this box. </p>           
        <p>{{Form::checkbox('check', 'consent given', true, array('id' => 'checkboxCareerProfile'))}}</p>        
            <!-- {{$errors->first('checkbox','<p class="border">:message</p>')}} -->            
            
            
            {{Form::close()}}
        </section>
    </div>



@stop
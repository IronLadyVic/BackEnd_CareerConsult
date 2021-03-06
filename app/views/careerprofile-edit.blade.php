@extends('includes.master')
@section("content")


<!-- Career Profile Client -->
<div id="sectionCareerProfile">
    <section id="career-profile">


        @if(Auth::user()->admin == 1)
        <h1 class="header">REMINDERS</h1>
        @else
        <h1 class="header">CAREER PROFILE</h1>
        @endif
        @if(Auth::user()->admin == 1)
        <p id="description">Go ahead, and make some notes.</p>
        @else
        <p id="description">Start updating your Career Profile.</p>
        @endif
        
        {{ Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put', 'id'=>'careerProfile-form')) }}
        <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

                 $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

            }
        ?>
        <div class="profileAuto">
            <img id="profileImage" src="{{$sPhoto}}" alt="profile picture">
        </div>
        @if(Auth::user()->admin == 1)
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>
            {{Form::label('avatar','', array('id'=>'avatar'))}}
            {{Form::file('avatar', array('disabled'=>'disabled', 'id' => 'avatar', 'class'=>'border'))}}
            
        </p>
        {{$errors->first('avatar','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('username','', array('id'=>'userName'))}}
            {{Form::text('username', $user->username, array('id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
           
        </p>

        {{$errors->first('username','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('comment','', array('id'=>'comment'))}}
            {{Form::textarea('comment', '', array('id'=>'comment', 'placeholder'=>'1:', 'class'=>'border'))}}            
        </p>
        <!-- {{$errors->first('comment','<p class="error">:message</p>')}} -->
        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('comment','', array('id'=>'comment'))}}
            {{Form::textarea('comment', '', array('id'=>'comment', 'placeholder'=>'2:', 'class'=>'border'))}}            
        </p>
        <!-- {{$errors->first('comment','<p class="error">:message</p>')}} -->
        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('comment','', array('id'=>'comment'))}}
            {{Form::textarea('comment', '', array('id'=>'comment', 'placeholder'=>'3:', 'class'=>'border'))}}
            
        </p>
        {{Form::submit('SAVE UPDATE', array('id'=>'updateCareerButton'));}}

        @else
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>            
            {{Form::label('avatar','', array('id'=>'avatar'))}}
            {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}           
        </p>
        {{$errors->first('avatar','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('username','', array('id'=>'userName'))}}
            {{Form::text('username', $user->username, array('disabled'=>'disabled', 'id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
        </p>
        {{$errors->first('username','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::label('email','', array('id'=>'email'))}}
            {{Form::email('email', $user->email, array('id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
            
        </p>
        {{$errors->first('email','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-user"></i></span>
            {{Form::label('firstname','', array('id'=>'firstName'))}}
            {{Form::text('firstname', $user->firstname, array('placeholder'=>'First Name', 'class'=>'border'))}}
            
        </p>
        {{$errors->first('firstname','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('lastname','', array('id'=>'lastName'))}}
            {{Form::text('lastname', $user->lastname, array('placeholder'=>'Last Name', 'class'=>'border'))}}
            
        </p>
        {{$errors->first('lastname','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-phone-square"></i></span>
            {{Form::label('phone','', array('id'=>'contact'))}}
            {{Form::text('phone', $user->phone, array( 'id'=>'contact', 'placeholder'=>'Contact Number', 'class'=>'border'))}}
            
        </p>
        {{$errors->first('phone','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('personal_goal','', array('id'=>'personalGoals'))}}
            {{Form::textarea('personal_goal', $user->personal_goal, array('id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
        </p>
        {{$errors->first('personal_goal','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('experience','', array('id'=>'experience'))}}
            {{Form::textarea('experience', $user->experience, array('id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
        </p>
        {{$errors->first('experience','<p class="error">:message</p>')}}        
        <p>
            <span class="border"><i class="fa fa-university"></i></span>
            {{Form::label('education','', array('id'=>'education'))}}
            {{Form::textarea('education', $user->education, array('id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
        </p>
        {{$errors->first('education','<p class="error">:message</p>')}} 
        <p>
            <span class="border"><i  class="fa fa-trophy"></i></span>
            {{Form::label('acheivement','', array('id'=>'acheivements'))}}
            {{Form::textarea('acheivement', $user->acheivement, array('id'=>'acheivement', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
        </p>
        {{$errors->first('acheivement','<p class="error">:message</p>')}}  
        <p>
            <span class="border"><i class="fa fa-history"></i></span>
            {{Form::label('career_history','', array('id'=>'careerHistory'))}}
            {{Form::textarea('career_history', $user->career_history, array('id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
        </p>
         {{$errors->first('career_history','<p class="error">:message</p>')}}  
        <p>
            <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
            {{Form::label('career_type','', array('id'=>'career_type'))}}
            
            {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration and Office Support','3'=>'Advertising, Arts and Media',
            '4'=>'Banking Financial Services', '5'=>'Call Centre and Customer Service', '6'=>'CEO and General Management', '7'=>'Community Services and Development',
            '8'=>'Construction', '9'=>'Consulting and Strategy', '10'=>'Community Services and Development', '11'=>'Construction', '12'=>'Consulting and Strategy','13'=>'Community Services and Development',
            '14'=>'Design and Architecture', '15'=>'Education and Training', '16'=>'Engineering', '17'=>'Farming, Animals and Conservation', '18'=>'Government and Defence', '19'=>'Healthcare and Medical', '20'=>'Hospitality and Tourism', '21'=>'Human Resources and Recruitment', '22'=>'Information and Communication Technology', 
            '23'=>'Insurance and Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport and Logistics', '26'=>'Marketing and Communications', '27'=>'Mining, Resources and Energy',
            '28'=>'Real Estate and Property', '29'=>'Retail and Consumer Products', '30'=>'Sales', '31'=>'Science and Technology', '32'=>'Self Employment', '33'=>'Sport and Recreation', '34'=>'Trades and Services'))}}                
        </p>
        {{$errors->first('select','<p class="error">:message</p>')}}
        <p>
            <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
            {{Form::label('service_type','', array('id'=>'service_type'))}}
            {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}} 
        </p>
        {{$errors->first('service_type','<p class="error">:message</p>')}}
        
        {{Form::submit('SAVE UPDATE', array('id'=>'updateCareerButton'));}}
        @endif
         
            
            
            {{Form::close()}}
        </section>
    </div>
@if(Auth::user()->admin == 1)
<div id="careerprofileImage"><img src="{{URL::to('img/AucklandCityExtended.png')}}" alt="testimonials from career consult"></div>
@endif


@stop
@extends('includes.master')
@section("content")


<!-- Career Profile Client add info. -->
<div id="sectionCareerProfile">
    <section id="career-profile">
        <h1 class="header">ADD A CLIENT</h1>
      
        <p id="description">You can add your client here. This is for safe keeping, and will help you determine a service, and tailor a CV!</p>
                
        
        {{Form::open(array('url'=>'users','files'=>'true','id'=>'careerProfile-form'))}}
        
        <div class="profileAuto">
        
            <img id="profileImage" src="{{URL::to('img/careerprofile-BLK.png')}}" alt="career profile">

        </div>
        <p>
            <span class="border"><i class="fa fa-camera"></i></span>


            {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}
            {{$errors->first('avatar','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('username','', array('id'=>'userName'))}}
            {{Form::text('username', '', array('id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
            {{$errors->first('username','<p class="error">:message</p>')}}

        </p>

        <p>
            <span class="border"><i class="fa fa-envelope"></i></span>
            {{Form::label('email','', array('id'=>'email'))}}
            {{Form::email('email', '', array('id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
            {{$errors->first('email','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-user"></i></span>
            {{Form::label('firstname','', array('id'=>'firstName'))}}
            {{Form::text('firstname', '', array('id'=>'firstName', 'placeholder'=>'First Name', 'class'=>'border'))}}
            {{$errors->first('firstname','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i class="fa fa-user"></i></span>
            {{Form::label('lastname','', array('id'=>'lastName'))}}
            {{Form::text('lastname', '', array('id'=>'lastName', 'placeholder'=>'Last Name', 'class'=>'border'))}}
            {{$errors->first('lastname','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-phone-square"></i></span>
            {{Form::label('phone','', array('id'=>'contact'))}}
            {{Form::text('phone', '', array('placeholder'=>'Contact Number', 'id'=>'contact', 'class'=>'border'))}}
            {{$errors->first('phone','<p class="error">:message</p>')}} 
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('personal_goal','', array('id'=>'personalGoals'))}}
            {{Form::textarea('personal_goal', '', array( 'id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
            {{$errors->first('personal_goal','<p class="error">:message</p>')}}
        </p>

        <p>
            <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
            {{Form::label('experience','', array('id'=>'experience'))}}
            {{Form::textarea('experience', '', array( 'id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
            {{$errors->first('experience','<p class="error">:message</p>')}} 
        </p>
        
        <p>
            <span class="border"><i class="fa fa-university"></i></span>
            {{Form::label('education','', array('id'=>'education'))}}
            {{Form::textarea('education', '', array('id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
            {{$errors->first('education','<p class="error">:message</p>')}} 
        </p>

        <p>
            <span class="border"><i  class="fa fa-trophy"></i></span>
            {{Form::label('acheivements','', array('id'=>'acheivements'))}}
            {{Form::textarea('acheivements', '', array( 'id'=>'acheivements', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
            {{$errors->first('acheivements','<p class="error">:message</p>')}}  
        </p>
        <p>
            <span class="border"><i class="fa fa-history"></i></span>
            {{Form::label('career_history','', array('id'=>'careerHistory'))}}
            {{Form::textarea('career_history', '', array('id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
            {{$errors->first('career_history','<p class="error">:message</p>')}}  
        </p>
        <p>
            <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
            {{Form::label('career_type','', array('id'=>'career_type'))}}
            
            {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration and Office Support','3'=>'Advertising, Arts and Media',
            '4'=>'Banking Financial Services', '5'=>'Call Centre and Customer Service', '6'=>'CEO and General Management', '7'=>'Community Services and Development',
            '8'=>'Construction', '9'=>'Consulting and Strategy', '10'=>'Community Services and Development', '11'=>'Construction', '12'=>'Consulting and Strategy','13'=>'Community Services and Development',
            '14'=>'Design and Architecture', '15'=>'Education and Training', '16'=>'Engineering', '17'=>'Farming, Animals and Conservation', '18'=>'Government and Defence', '19'=>'Healthcare and Medical', '20'=>'Hospitality and Tourism', '21'=>'Human Resources and Recruitment', '22'=>'Information and Communication Technology', 
            '23'=>'Insurance and Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport and Logistics', '26'=>'Marketing and Communications', '27'=>'Mining, Resources and Energy',
            '28'=>'Real Estate and Property', '29'=>'Retail and Consumer Products', '30'=>'Sales', '31'=>'Science and Technology', '32'=>'Self Employment', '33'=>'Sport and Recreation', '34'=>'Trades and Services'))}}
            
            {{$errors->first('select','<p class="error">:message</p>')}}     
        </p>
        <p>
            <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
            {{Form::label('service_type','', array('id'=>'service_type'))}}
            {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
            {{$errors->first('service_type','<p class="error">:message</p>')}} 
        </p>

       
        {{Form::submit('SAVE CLIENT', array('id'=>'saveClient', 'class' => 'addButton'));}}


    {{Form::close()}}
    {{Session::get("error")}}
        </section>
    </div>



@stop
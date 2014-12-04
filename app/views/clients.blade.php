@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">
            <div class="contentWrapper">
                <?php $pagClientTypes =  User::paginate(1); ?>
                @foreach($pagClientTypes as $user)
                {{ Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put', 'id'=>'')) }}

                <?php
                $sPhoto = URL::to('img/careerprofile-BLK.png');

                ?>
                <div class="profileAuto">
                    <img id="profileImage" src="{{$sPhoto}}" alt="career profile">
                </div>
                <p>
                    <span class="border"><i class="fa fa-camera"></i></span>


                    {{Form::file('avatar', array('id' => 'avatar', 'class'=>'border'))}}
                    <!-- {{$errors->first('avatar','<p class="error">:message</p>')}} -->
                </p>

                <p>
                    <span class="border"><i class="fa fa-user"></i></span>
                    {{Form::label('username','', array('id'=>'userName'))}}
                    {{Form::text('username', $user->username, array('disabled'=>'disabled','id'=>'userName', 'placeholder'=>'Username', 'class'=>'border'))}}
                    <!-- {{$errors->first('username','<p class="error">:message</p>')}} -->

                </p>

                <p>
                    <span class="border"><i class="fa fa-envelope"></i></span>
                    {{Form::label('email','', array('id'=>'email'))}}
                    {{Form::email('email', $user->email, array('disabled'=>'disabled','id'=>'email', 'placeholder'=>'Email', 'class'=>'border'))}}
                    <!-- {{$errors->first('email','<p class="error">:message</p>')}} -->
                </p>

                <p>
                    <span class="border"><i  class="fa fa-user"></i></span>
                    {{Form::label('firstname','', array('id'=>'firstName'))}}
                    {{Form::text('firstname', $user->firstname, array('disabled'=>'disabled','id'=>'firstName', 'placeholder'=>'First Name', 'class'=>'border'))}}
                    <!-- {{$errors->first('firstname','<p class="error">:message</p>')}} -->
                </p>

                <p>
                    <span class="border"><i class="fa fa-user"></i></span>
                    {{Form::label('lastname','', array('id'=>'lastName'))}}
                    {{Form::text('lastname', $user->lastname, array('disabled'=>'disabled','id'=>'lastName', 'placeholder'=>'Last Name', 'class'=>'border'))}}
                    <!-- {{$errors->first('lastname','<p class="error">:message</p>')}} -->
                </p>

                <p>
                    <span class="border"><i  class="fa fa-phone-square"></i></span>
                    {{Form::label('phone','', array('id'=>'contact'))}}
                    {{Form::text('phone', $user->phone, array('disabled'=>'disabled','placeholder'=>'Contact Number', 'id'=>'contact', 'class'=>'border'))}}
                    <!-- {{$errors->first('phone','<p class="error">:message</p>')}}  -->
                </p>

                <p>
                    <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
                    {{Form::label('personal_goal','', array('id'=>'personalGoals'))}}
                    {{Form::textarea('personal_goal', $user->personal_goal, array('disabled'=>'disabled', 'id'=>'personalGoals', 'placeholder'=>'Personal Goals', 'class'=>'border'))}}
                    <!-- {{$errors->first('personal_goal','<p class="error">:message</p>')}} -->
                </p>

                <p>
                    <span class="border"><i  class="fa fa-pencil-square-o"></i></span>
                    {{Form::label('experience','', array('id'=>'experience'))}}
                    {{Form::textarea('experience', $user->experience, array('disabled'=>'disabled', 'id'=>'experience', 'placeholder'=>'Experience', 'class'=>'border'))}}
                    <!-- {{$errors->first('experience','<p class="error">:message</p>')}}  -->
                </p>

                <p>
                    <span class="border"><i class="fa fa-university"></i></span>
                    {{Form::label('education','', array('id'=>'education'))}}
                    {{Form::textarea('education', $user->education, array('disabled'=>'disabled','id'=>'education', 'placeholder'=>'Education', 'class'=>'border'))}}
                    <!-- {{$errors->first('education','<p class="error">:message</p>')}}  -->
                </p>

                <p>
                    <span class="border"><i  class="fa fa-trophy"></i></span>
                    {{Form::label('acheivements','', array('id'=>'acheivements'))}}
                    {{Form::textarea('acheivements', $user->acheivements, array('disabled'=>'disabled', 'id'=>'acheivements', 'placeholder'=>'Acheivements', 'class'=>'border'))}}
                    <!-- {{$errors->first('acheivements','<p class="error">:message</p>')}} -->  
                </p>
                <p>
                    <span class="border"><i class="fa fa-history"></i></span>
                    {{Form::label('career_history','', array('id'=>'careerHistory'))}}
                    {{Form::textarea('career_history', $user->career_history, array('disabled'=>'disabled','id'=>'careerHistory', 'placeholder'=>'Career History', 'class'=>'border'))}}
                    <!-- {{$errors->first('career_history','<p class="error">:message</p>')}}  --> 
                </p>
                <p>
                    <span class="border"><i class="fa fa-thumbs-o-up"></i></span>
                    {{Form::label('career_type', $user->career_type, array('disabled'=>'disabled','id'=>'career_type'))}}

                    {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration and Office Support','3'=>'Advertising, Arts and Media',
                    '4'=>'Banking Financial Services', '5'=>'Call Centre and Customer Service', '6'=>'CEO and General Management', '7'=>'Community Services and Development',
                    '8'=>'Construction', '9'=>'Consulting and Strategy', '10'=>'Community Services and Development', '11'=>'Construction', '12'=>'Consulting and Strategy','13'=>'Community Services and Development',
                    '14'=>'Design and Architecture', '15'=>'Education and Training', '16'=>'Engineering', '17'=>'Farming, Animals and Conservation', '18'=>'Government and Defence', '19'=>'Healthcare and Medical', '20'=>'Hospitality and Tourism', '21'=>'Human Resources and Recruitment', '22'=>'Information and Communication Technology', 
                    '23'=>'Insurance and Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport and Logistics', '26'=>'Marketing and Communications', '27'=>'Mining, Resources and Energy',
                    '28'=>'Real Estate and Property', '29'=>'Retail and Consumer Products', '30'=>'Sales', '31'=>'Science and Technology', '32'=>'Self Employment', '33'=>'Sport and Recreation', '34'=>'Trades and Services'))}}

                    <!-- {{$errors->first('select','<p class="error">:message</p>')}} -->     
                </p>
                <p>
                    <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
                    {{Form::label('service_type', $user->service_type, array('disabled'=>'disabled', 'id'=>'service_type'))}}
                    {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
                    <!-- {{$errors->first('service_type','<p class="error">:message</p>')}}  -->
                </p>


                {{Form::submit('EDIT CLIENT', array('id'=>'saveClient', 'class' => 'addButton'));}}


                {{Form::close()}}

                @endforeach 
            </div>
            <div id="pagination">{{$pagClientTypes->links()}}</div>         
        </article>
        <!-- End of Post -->


        <!-- end of paginator -->
    </div>
    <!-- Main Topics -->
    <aside id="rightColomn">
        <section>
            <h2>CLIENT LIST</h2>               
            <div class="panelTopics">
                <ul>
                    @foreach(User::all() as $user)
                    <li><a href="{{URL::to('users/'.$user->id)}}">{{$user->firstname}}</a></li>
                    @endforeach 
                </ul>
            </div>
        </section>
    </aside>
    <!-- End of Topics -->
</div>
<!-- Log in pop up -->
<!-- <div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

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

    {{Form::submit('LOG IN', array('id'=>'logIn', 'class'=>'border'))}}


    {{Form::close()}}
    {{Session::get("error")}}
</div>


<div id="background"></div> -->
<!-- End of Log in pop up -->



@stop
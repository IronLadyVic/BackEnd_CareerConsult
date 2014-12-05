@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">
            <div class="contentWrapper" id="clientList">
                <?php $pagClientTypes =  User::paginate(1); ?>
                @foreach($pagClientTypes as $user)
                {{ Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put', 'id'=>'clientDisplayInfo')) }}

                <?php
                $sPhoto = URL::to('uploads/'.$user->avatar);

                ?>
                <div class="profileAuto">
                    <img id="profileImage" src="{{$sPhoto}}" alt="career profile">
                </div>
                
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

                    <!-- {{Form::select('career_type', array('0' => 'Choose your Career Class','1'=>'Accounting','2'=>'Administration and Office Support','3'=>'Advertising, Arts and Media',
                    '4'=>'Banking Financial Services', '5'=>'Call Centre and Customer Service', '6'=>'CEO and General Management', '7'=>'Community Services and Development',
                    '8'=>'Construction', '9'=>'Consulting and Strategy', '10'=>'Community Services and Development', '11'=>'Construction', '12'=>'Consulting and Strategy','13'=>'Community Services and Development',
                    '14'=>'Design and Architecture', '15'=>'Education and Training', '16'=>'Engineering', '17'=>'Farming, Animals and Conservation', '18'=>'Government and Defence', '19'=>'Healthcare and Medical', '20'=>'Hospitality and Tourism', '21'=>'Human Resources and Recruitment', '22'=>'Information and Communication Technology', 
                    '23'=>'Insurance and Superannuation', '24'=>'Legal', '25'=>'Manufacturing, Transport and Logistics', '26'=>'Marketing and Communications', '27'=>'Mining, Resources and Energy',
                    '28'=>'Real Estate and Property', '29'=>'Retail and Consumer Products', '30'=>'Sales', '31'=>'Science and Technology', '32'=>'Self Employment', '33'=>'Sport and Recreation', '34'=>'Trades and Services'))}} -->

                    <!-- {{$errors->first('select','<p class="error">:message</p>')}} -->     
                </p>
                <p>
                    <span class="border"><i  class="fa fa-hand-o-right"></i></span>        
                    {{Form::label('service_type', $user->service_type, array('disabled'=>'disabled', 'id'=>'service_type'))}}
<!--                     {{Form::select('service_type', array('0' => 'Services I am interested in..','1'=>'CV Writing & Cover Letters','2'=>'Interview Preparation','3'=>'New to NZ', '4'=>'Employment Contracts', '5'=>'General Job Seeking Advice', '6'=>'General Employment Advice'))}}
 -->                    <!-- {{$errors->first('service_type','<p class="error">:message</p>')}}  -->
                </p>


                <p class="editProfile">
                    <a href="{{URL::to('clients/'.$user->id.'/edit')}}">EDIT CLIENT PROFILE</a>
                </p>


                {{Form::close()}}

                @endforeach 
            </div>
            <div id="pagination">{{$pagClientTypes->links()}}</div>         
        </article>
        <!-- End of Post -->


        <!-- end of paginator -->
    </div>
    <!-- Main Clients -->
    <aside id="rightColomn">
        <section>
            <h2>CLIENT LIST</h2>               
            <div class="panelTopics">
                <ul>
                    @foreach(User::where("admin","=",0)->get() as $user)
                    <li><a href="{{URL::to('$user->id')}}">{{$user->firstname}}</a></li>
                    @endforeach 
                </ul>
            </div>
        </section>
    </aside>
    <!-- End of Clients -->
</div>


@stop
@extends('includes.master-login')
@section("content")

<div id="mobdeskLogin">
<section id="mobdeskSection">
    <h1 id="header">LOG IN</h1>
    
    <p id="mobdeskDescription">Log in to update your career profile, or enquire about booking a service.</p>

    {{Form::open(array('url'=>'login', 'id'=>'mobdeskForm'))}}
        <p><img id="profileImage" src="{{URL::to('img/careerprofile-BLK.png')}}" alt="profile picture"></p>
        
        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::text('username', '', array('placeholder'=>'Username', 'id'=>'userName', 'class'=>'border'))}}
        {{$errors->first('username','<p class="border">:message</p>')}}
        </p>

        <p>
        <span class="border" ><i class="fa fa-lock"></i></span>       
        {{Form::password('password', array('placeholder' => 'Password', 'id'=>'passwordLogin'))}}
        {{$errors->first('password','<p class="border">:message</p>')}}     
        </p>

       <!-- {{Form::checkbox('check', 'none', false, array('id' => 'checkBoxRemember'));}}
       <p  id="rememberMe">Remember Me</p>
        {{$errors->first('checkbox','<p class="border">:message</p>')}} -->
        
        
        
        {{Form::submit('LOG IN', array('id'=>'loggingInButton', 'class' => 'button'));}}
        

{{Form::close()}}
{{Session::get("error")}}

</section>
</div>
@stop
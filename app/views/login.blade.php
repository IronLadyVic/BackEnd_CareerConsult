@extends('includes.template')
@section("content")

<div id="mobdeskLogin">
<section id="mobdeskSection">
    <h1 id="header">LOG IN</h1>
    
    <p id="mobdeskDescription">Log in to update your career profile, or enquire about booking a service.</p>

    {{Form::open(array('url'=>'login', 'id'=>'mobdeskForm'))}}
        <p><img id="profileImage" src="{{URL::to('careerprofile/'.$user->avatar)}}" alt="profile picture"></p>
        
        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::text('username', array('placeholder'=>'Username', 'class'=>'border'))}}
        </p>

        <p>
        <span class="border" ><i class="fa fa-lock"></i></span>       
        {{Form::password('password', array('placeholder'=>'Password', 'class'=>'border'))}}     
        </p>

        {{Form::checkbox(array('id'=>'checkBoxRemember', 'class'=>'border'))}} 
        <p id="rememberMe">Remember Me</p>    

    {{Form::submit('LOG IN', array('id'=>'loggingInButton', 'class'=>'border'))}}
        
{{Form::close()}}
{{Session::get("error")}}

</section>
</div>
@stop
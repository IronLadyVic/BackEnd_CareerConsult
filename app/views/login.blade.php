@extends('includes.master')
@section("content")

<div id="mobdeskLogin">
<section id="mobdeskSection">
    <h1 class="header">LOG IN</h1>
    
    <p id="mobdeskDescription">Log in to update your career profile, or enquire about booking a service.</p>

    {{Form::open(array('url'=>'login', 'id'=>'mobdeskForm'))}}

        <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

                 $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

            }
        ?>


        <p><img id="profileImage" src="{{$sPhoto}}" alt="profile picture"></p>
        
        <p>
        <span class="border"><i class="fa fa-user"></i></span>
        {{Form::text('username', '', array('placeholder'=>'Username', 'id'=>'userName', 'class'=>'border'))}}
        </p>
        {{$errors->first('username','<p class="error">:message</p>')}}
        <p>
        <span class="border" ><i class="fa fa-lock"></i></span>       
        {{Form::password('password', array('placeholder' => 'Password', 'id'=>'passwordLogin'))}}
        </p>
        {{$errors->first('username','<p class="error">:message</p>')}}

       {{Form::checkbox('check', 'none', false, array('id' => 'checkBoxRemember'));}}
       <p  id="rememberMe">Remember Me</p>
        
        
    
        {{Form::submit('LOG IN', array('id'=>'loggingInButton', 'class' => 'button'));}}
        

{{Form::close()}}
{{Session::get("error")}}

</section>
</div>
@stop
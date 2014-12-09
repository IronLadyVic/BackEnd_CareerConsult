@extends('includes.master')
@section("content")

<!-- Start of Services -->
<div id="mainServicesBody">
<div id="sectionServices">
    <section id="servicesListed">
        <h1 class="header">SERVICES</h1>
        <p>Career Consult offer a number of services, which you can pick and choose to suit your needs. Please sign up to and recieive a free 15min consultation and let us help you launch your career.</p>
        <div id="accordion">
        @foreach(Service::all() as $service)
        <img src="{{URL::to('uploads/'.$service->icon)}}" alt="header services, icon image" class="serviceIcon">

            @if($service->id == $id)
             <h3 class="open">{{$service->service_type}}</h3>
            @else

             <h3>{{$service->service_type}}</h3>
            @endif
           
            
            <div class="serviceContent">
                <ul>
                    {{$service->content}}
                    
                    <li class="enquiryButton">
                        <a href="{{URL::to('services/'.$service->id.'/enquire')}}">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
            </div>
        @endforeach      
        </div>
        <p>During your appointment you are encouraged to ask anything!<br>No question is too silly. </p>
        <p id="testimonialButton">
         <a href="{{URL::to('testimonial')}}"><span>TESTIMONIALS</span></a>
     </p>
 </section>
</div>
</div>

<aside id="serviceEnquire">
    <section id="enquireServiceType">
      <div>
        <!-- Post to add by Admin -->
        <h2>ENQUIRE</h2>
                <?php
                    $selectedService = Service::find($id);
                ?>
        
                {{Form::model($selectedService, array('url'=>$selectedService->id.'/enquire','method'=>'post','id'=>'enquire-form'))}}
                <p>
                    <span class="border" ><i class="fa fa-user"></i></span>
                    {{Form::text('firstname', '', array('placeholder'=>'First Name', 'id'=>'firstName', 'class'=>'border'))}}
                </p>
                {{$errors->first('firstname','<p class="error">:message</p>')}}
                <p>
                    <span class="border"><i class="fa fa-user"></i></span>
                    {{Form::text('lastname', '', array('placeholder'=>'Last Name', 'id'=>'lastName', 'class'=>'border'))}}
                </p>
                {{$errors->first('lastname','<p class="error">:message</p>')}} 
                <p>
                    <span class="border"><i class="fa fa-envelope"></i></span>
                    {{Form::email('email', '', array('placeholder'=>'Email', 'id'=>'email', 'class'=>'border'))}}
                </p>
                {{$errors->first('email','<p class="error">:message</p>')}}

                <p>
                <span><img src="{{URL::to('uploads/'.$selectedService->icon)}}" alt="Service Type Icon" class="serviceTypeIcon"></span>
                {{Form::text('service_type', $selectedService->service_type, array('disabled'=>'disabled', 'class'=>'border'))}}
                </p>            
             

                <p>
                    <span class="border"><i class="fa fa-pencil-square-o"></i></span>
                    {{Form::textarea('comment', '',array('id'=>'comment', 'placeholder'=>'Questions or Comments'))}}
                </p>
                {{$errors->first('comment','<p class="error">:message</p>')}}
                {{Form::submit('SUBMIT ENQUIRY', array('id'=>'enquire', 'class' => 'button'));}}
                {{Form::close()}}
              </div>
    </section>
        
</aside>

<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form', 'class'=>'pure-form pure-form-stacked'))}}
    <p class="closeModel"><i class="fa fa-times"></i></p>
    <h1 class="header">LOG IN</h1>

    <p id="loginDescription">Log in to update your career profile, or enquire about booking a service.</p>

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

{{Form::submit('LOG IN', array('id'=>'logIn', 'class'=>'border'))}}


{{Form::close()}}
{{Session::get("error")}}
</div>


<div id="background"></div>
<!-- End of Log in pop up -->

@stop
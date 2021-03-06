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
                    @if($service->id == $id)
                    <li class="enquiryButton">
                        <a href="{{URL::to('services/'.$service->id.'/enquire')}}">BOOKING ENQUIRY</a>
                    </li>
                    @else 
                    <li class="enquiryButton">
                        <a href="{{URL::to('services/'.$service->id.'/enquire')}}">BOOKING ENQUIRY</a>
                    </li>
                    @endif  
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

<aside id="asideCareerAdvice">
    <section id="latestUpdates">
        <h2>LATEST CAREER ADVICE</h2>
        
        <?php $pagPostTypes =  Post::paginate(2); ?>
        @foreach($pagPostTypes as $post)
        <article>

            <div class="divWrapperHeader">
                <h2><a href="#">{{$post->title}}</a></h2>
            </div>
            <div class="hashTag">
                <p>
                    <a href="#"><i class="fa fa-bookmark"></i>{{$post->topic->name}}</a></p>
                </div>
                <div class="content">
                    <p>{{substr($post->content, 0, 300)}}.......</p>

                </div>
                <div class="readMore">
                    <p><a href="{{URL::to('post/'.$post->id)}}">
                    {{Form::button('Read More.');}}
                    {{@Form::hidden("postID",$post->id)}}
                    </a></p>
               </div>
                <div class="shareSocial">
                    <p><a href="http://twitter.com/share?text=Contact%20Career%20Consult%20&amp;url=http://www.careerconsult/services.co.nz"><i class="fa fa-twitter"></i></a></p>
                    <p><a href="http://www.facebook.com/sharer.php?text=Career%20Consult%20Services&amp;u=http://www.careerconsult/services.co.nz"><i class="fa fa-facebook"></i></a></p>
                    <p><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.careerconsult/services.co.nz"><i class="fa fa-linkedin"></i></a></p>
                </div>
                <div class="avatarProfile">
                    <img src="{{URL::to('img/'.$post->avatar)}}" alt="Avatar Profile Picture">
                </div>
                <div class="editor">
                    <p>Editor: {{$post->editor}}</p>
                </div>
                <div class="date">
                    <p>{{$post->created_at}}</p>
                </div>
            </article>   
            @endforeach
            <!-- this will create links which is a ul li -->
            <div id="pagination">{{$pagPostTypes->links()}}</div>        
  
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
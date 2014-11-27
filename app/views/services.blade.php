@extends('includes.master-login')
@section("content")

<!-- Start of Services -->
<div id="sectionServices">
    <section id="servicesListed">
        <h1 id="header">SERVICES</h1>
        <p>Career Consult offer a number of services, which you can pick and choose to suit your needs. Please sign up to and recieive a free 15min consultation and let us help you launch your career.</p>
        <div id="accordion">

            <h3><i class="fa fa-file-text"></i>CV Writing & Cover Letters</h3>
            
            <div class="serviceContent">
                <ul>
                    <li>Choose from a number CV templates & assistance in creating a CV.</li>
                    <li>Receive honest critique about your existing CV and / or cover letter.</li>
                    <li>How to tailor your CV and cover letter to a specific job.</li>
                    <li>Tips to help you ‘get that interview’.</li>
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
            </div>

            <h3><i class="fa fa-comments"></i>Interview Preparation</h3>
            
            <div class="serviceContent">
                <ul>
                    <li>Learn about the types of questions asked and how to effectively answer these.</li>
                    <li>Complete a ‘mock interview’ to practice your approach & gain confidence.</li>
                    <li>Useful tips to impress your interviewers and stand out from the crowd.</li>
                    <li>Graduates: what to expect when attending a graduate programme interview.</li>
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
            </div>
            <h3><i class="fa fa-plane"></i>New to NZ</h3>
            <div class="serviceContent">
                <ul>
                    <li>NZ workplace culture – what to expect and how to adapt your approach.</li>
                    <li>Comprehensive spelling and grammar support for your CV and cover letter.</li>
                    <li>Options for job searching in NZ.</li>
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
                
            </div>
            <h3><i class="fa fa-file-archive-o"></i>Employment Contracts</h3>
            <div class="serviceContent">
                <ul>
                    <li>Independent advice on an employment contract before you sign it.</li>
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                       
                    </li>       
                </ul>
                
            </div>
            <h3><i class="fa fa-users"></i>General Job Seeking Advice</h3>
            <div class="serviceContent">
                <ul>
                    <li>Effective on-line job searching.</li>
                    <li>Understand recruitment agencies and how to get the best out of them.</li>
                    <li>Create an effective LinkedIn profile.</li>
                    <li>Understand the realities of the job market.</li>
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
                
            </div>
            <h3><i class="fa fa-thumbs-up"></i>General Employment Advice</h3>
            <div class="serviceContent">
                <ul>
                    <li>Ask questions about your employment situation and your rights.</li>
                    <li>Coaching for approaching difficult situations at work.</li>
                    <li>Advice and / or support person in disciplinary meetings.</li> 
                    <li>
                        <a href="services/" class="enquiryButton">BOOKING ENQUIRY</a>
                    </li>   
                </ul>
            </div>
        </div>
        <p>During your appointment you are encouraged to ask anything!  No question is too silly. </p>
        <p id="testimonialButton">
         <a href="{{URL::to('testimonials/')}}"><span>TESTIMONIALS</span></a>
     </p>
 </section>


</div>


<aside id="asideLatestNews">
    <section id="latestUpdates">
        <h2>LATEST CAREER ADVICE</h2>
        
        <?php $pagPostTypes =  Post::paginate(1); ?>
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
                    <p>{{$post->content}}</p>

                </div>
                <div class="readMore">
                    <p><a href="{{URL::to('post/{id}')}}">Read More.</a></p>
                </div>
                <div id="shareSocial">
                    <p><a href="http://twitter.com/share?text=Contact%20Career%20Consult%20&url=http://www.careerconsult/services.co.nz"><i class="fa fa-twitter"></i></a></p>
                    <p><a href="http://www.facebook.com/sharer.php?text=Career%20Consult%20Services&u=http://www.careerconsult/services.co.nz"><i class="fa fa-facebook"></i></a></p>
                    <p><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.careerconsult/services.co.nz"><i class="fa fa-linkedin"></i></a></p>
                </div>
                <div class="avatarProfile">
                    <img src="{{URL::to('uploads/'.$post->avatar)}}" alt="Avatar Profile Picture">
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
            {{$pagPostTypes->links()}}        
            <div id="pagination">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>       
        </section>
        
    </aside>
<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">
    
    {{Form::open(array('url'=>'login', 'id'=>'logIn-form'))}}

        <?php
            $sPhoto = URL::to('img/careerprofile-BLK.png');

            if(Auth::check()){

                 $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

            }
    ?>

    <span role="close-modal"><i class="fa fa-times"></i></span>
    <h1 id="header">LOG IN</h1>

    <p id="loginDescription">Log in to update your career profile, or enquire about booking a service.</p>

    <p><img id="profileImage" src="{{$sPhoto}}" alt="profile picture"></p>
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


<div id="background"></div>
<!-- End of Log in pop up -->


@stop
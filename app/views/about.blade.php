@extends('includes.master')
@section("content")

<!-- About -->
<div id="aboutBody">
    <div id="leftColomn">
        <article id="postWrapper">
            <div class="contentWrapper" id="clientList">
                <div class="profileAuto">
                    <img id="profileImage" src="{{URL::to('img/KarynsProfilePic.png')}}" alt="career profile">
                </div>
                <p class="qualifications">
                Founder: Karyn McDonald<br>BBS, Human Resource Management & Communication Management (Massey University)<br>Cert, Refugee Resettlement (RMS Refugee Resettlement)

                </p>
                <h2 class='header'>ABOUT</h2>

                <p class="aboutPara">
                Career Consult provides one-on-one professional and independent advice on CV writing, interview preparation and employment issues.<br>
                This service is open to any job seeker and those in employment, however, I also have an interest and experience in assisting graduates and those new to New Zealand.
                </p> 
                <p class="aboutPara">
                Over the years I’ve helped friends and family with their CVs and provided advice on interviews and employment issues.  What I’ve learnt is that there is a lot of useful, free information out there (often generic and doesn’t cater to individual needs) and some great organisations that offer CV writing and employment advice services (but at a cost many people can’t afford).
                </p> 
                <p class="aboutPara">
                I believe that everyone has the right to prepare themselves for success, and money should not be a barrier.  I also believe in working ‘with’ you, not just doing it ‘for’ you, so that you can get the most from this service by realising your potential and being able to use these skills going forward.  This is where my passion for establishing Career Consult came from.
                </p>
                <p class="aboutPara">
                    With over 8 years’ experience as a human resources contractor and recruitment specialist in a number of industries and organisations, including: financial services, professional services, government, engineering, insurance, and property, I continue to work with organisations to ensure my skills and understanding of employer needs remain current.
                </p>                
            </div>                 
        </article>        
    </div>
</div>     
    <!-- End of About -->
    <aside id="aboutCareerAdvice">
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
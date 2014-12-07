@extends('includes.master')
@section("content")

<!-- Start of Services -->
<div id="editSectionServices">
    <section id="servicesListed">
        <h1 class="header">SERVICES</h1>
        <p>Career Consult offer a number of services, which you can pick and choose to suit your needs. Please sign up to and recieive a free 15min consultation and let us help you launch your career.</p>
        <div id="accordion">
            @foreach(Service::all() as $service)
            <img data-editable="icon" src="{{URL::to('uploads/'.$service->icon)}}" alt="header services, icon image" class="serviceIcon">
            <h3 data-editable="service_type" data-url="{{URL::to('uploads/'.$service->service_type)}}">{{$service->service_type}}</h3>
            <div class="serviceContent" id="serviceEditLi">
                <ul data-editable="content" data-url="{{URL::to('uploads/'.$service->content)}}">
                    {{$service->content}} 
                </ul>
            </div>
            @endforeach
        </form>     
    </div>
    <p>During your appointment you are encouraged to ask anything!<br>No question is too silly. </p>
    <p id="testimonialButton">
     <a href="{{URL::to('testimonials/edit')}}"><span>TESTIMONIALS</span></a>
 </p>
</section>


</div>


<aside id="asideLatestNews">
    <section id="latestUpdates">
      <div>
        <!-- Post to add by Admin -->
        <h2>ADD A POST</h2>

        {{Form::open(array('url'=>'posts','files'=>'true','id'=>'addPostForm'))}}
        <p>
            <span class="border"><i class="fa fa-font"></i></span>
            {{Form::label('title','', array('id'=>'titleLabel'))}}
            {{Form::text('title', '', array('id'=>'title', 'placeholder'=>'Post Title'))}}
            
        </p>
        <p> 
            <span class="border"><i class="fa fa-link"></i></span>
            {{Form::label('hashTag','', array('id'=>'hashTagLabel'))}}
            {{Form::text('hashTag', '', array('id'=>'hashTag', 'placeholder'=>'Topic'))}}   
            
        </p>
        <p> 
            <span class="border"><i class="fa fa-camera"></i></span>  
            {{Form::label('postPicture','', array('id'=>'postPictureLabel'))}}
            {{Form::file('postPicture', '', array('id'=>'postPicture'))}}    
        </p>
        <p>
            <span class="border"><i class="fa fa-file-text-o"></i></span>
            {{Form::label('content','', array('id'=>'contentLabel'))}}
            {{Form::textarea('content', '', array('id'=>'content', 'placeholder'=>'Start Writing...'))}}             
        </p>
        <p>
            <span class="border"><i class="fa fa-eraser"></i></span>
            {{Form::label('editor','', array('id'=>'editorLabel'))}}
            {{Form::text('editor', '', array('id'=>'editor', 'placeholder'=>'Editor Name'))}}                
        </p> 
        <p>
            <span class="border"><i class="fa fa-calendar"></i></span>
            {{Form::label('date','', array('id'=>'dateLabel'))}}
            {{Form::text('date', '', array('id'=>'date', 'placeholder'=>'Date'))}}             
        </p>      
        <label for="addAPost"></label>
        
        {{Form::submit('ADD A POST', array('id'=>'addAPost', 'class' => 'addButton'));}}
        {{Form::close()}}
    </div>

    <!-- Post to read as seen by users -->

    <h2>LATEST CAREER ADVICE</h2>
    <?php $pagPostTypes =  Post::paginate(1); ?>
    @foreach($pagPostTypes as $post)
    <article>
        <div class="divWrapperHeader">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="hashTag">
            <p>
                <a href="{{URL::to('post/'.$post->id)}}"><i class="fa fa-bookmark"></i>{{$post->topic->name}}</a></p>
            </div>
            <div class="content">
                <p>{{substr($post->content, 0, 300)}}.......</p>

            </div>
            <div class="readMore">
                
                <p><a href="{{URL::to('post/'.$post->id)}}">
                {{Form::open(array('url'=>'posts', $post->id))}}   
                    {{Form::button('Read More.');}}
                    {{@Form::hidden("postID",$post->id)}}                                      
                {{Form::close()}}</a></p>
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

    {{Form::open(array('url'=>'login', 'id'=>'logIn-form'))}}

    <?php
    $sPhoto = URL::to('img/careerprofile-BLK.png');

    if(Auth::check()){

     $sPhoto = URL::to('uploads/'.Auth::user()->avatar);

 }
 ?>

 <span role="close-modal"><i class="fa fa-times"></i></span>
 <h1 class="header">LOG IN</h1>

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
@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">

            <div class="contentWrapper">
            <?php $pagPostTypes =  Post::paginate(1); ?>
            @foreach($pagPostTypes as $post)
                <div class="headerTopic">
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="hashtagPost">
                    <p><a href="{{URL::to('post/'.$post->topic->name)}}"><i class="fa fa-bookmark"></i>{{$post->topic->name}}</a></p>
                    </div>
                    <div class="postPhoto">
                        <img src="{{URL::to('uploadPostPhotos/'.$post->photo_path)}}" alt="Post Image">
                    </div>
                    <div class="contentPost">
                        <p>{{$post->content}}</p>
                    </div>
                    <div class="postAvatar">
                        <img src="{{URL::to('uploads/'.$post->avatar)}}" alt="avatar">
                    </div>
                    <div class="">
                        <p>Editor: {{$post->editor}}</p>
                    </div>
                    <div class="">
                        <p>{{$post->created_at}}</p>
                    </div>
              @endforeach 
                </div>
            <div id="pagination">{{$pagPostTypes->links()}}</div>         
            </article>
            <!-- End of Post -->


            <!-- end of paginator -->
        </div>
                    <!-- Main Topics -->
            <aside id="rightColomn">
                <section>
                    <h2>CAREER ADVICE TOPICS</h2>               
                    <div class="panelTopics">
                        <ul>
                        @foreach(Topic::all() as $topic)
                            <li><a href="{{URL::to('topics/'.$topic->id)}}">{{$topic->name}}</a></li>
                        @endforeach 
                        </ul>
                    </div>
                </section>
            </aside>
        <!-- End of Topics -->
    </div>
<!-- Log in pop up -->
<div id="loginForm" class="l-box-lrg pure-u-1 pure-u-md-2-5">

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


<div id="background"></div>
<!-- End of Log in pop up -->


    
@stop
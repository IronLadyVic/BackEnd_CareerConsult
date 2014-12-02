@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">

            <div class="contentWrapper">
          
                <div class="headerTopic">
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="hashtagPost">
                    <p>
                        <a href="#"><i class="fa fa-bookmark"></i></a></p>
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
              
                </div>
            </article>
            <!-- End of Post -->


            <!-- end of paginator -->

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
    </div>
@stop
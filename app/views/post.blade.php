@extends('includes.master')
@section("content")

<!-- Main Post -->
<div id="mainPostBody">
    <div id="leftColomn">
        <article id="postWrapper">
        	<?php 
        	$paginatePosts =  Post::paginate(1); 

        	$topic = Topic::find($post->topic_id);

        	?>

        	@foreach($paginatePosts as $post)
        	
            <div class="contentWrapper">
                <div class="headerTopic">
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="hashtagPost">
                    <p>
                        <a href=""><i class="fa fa-bookmark"></i>{{$topic->name}}</a></p>
                    </div>
                    <div class="postPhoto">
                        <img src="{{URL::to('uploadPostPhotos/'.$post->photo_path)}}" alt="Post Image">
                    </div>
                    <div class="contentPost">
   					<p>$post->content</p>
                    </div>
                    <div class="postAvatar">
                        <img src="{{URL::to('uploads/'.$post->avatar)}}" alt="avatar">
                    </div>
                    <div class="">
                        <p>Editor: $post->editor</p>
                    </div>
                    <div class="">
                        <p>$post->created_at</p>
                    </div>
                </div>
               @endforeach 
        </article>
   
   <div id="pagination">{{$pagPostTypes->links()}}</div>

<!-- Main Topics -->
        <aside id="rightColomn">
            <section>
                <h2>CAREER ADVICE TOPICS</h2>
                <div class="panelTopics">
                    <ul>
                        <li class="styleList"><a href="">Trying things out</a></li>
                        <li class="styleList"><a href="">Tips</a></li>
                        <li class="styleList"><a href="">New to NZ</a></li>
                        <li class="styleList"><a href="">Returning to the workforce</a></li>
                        <li class="styleList"><a href="">CV Advice</a></li>
                    </ul>
                </div>
            </section>

        </aside>
        <!-- End of Container -->
</div>
</div>
@stop
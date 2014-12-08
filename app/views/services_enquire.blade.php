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
        
                    {{$service->content}}
                    
                    <li class="enquiryButton">
                        <a href="{{URL::to('services/enquire'.$service->id)}}">BOOKING ENQUIRY</a>
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

<aside id="asideEnquireService">
    <section id="">
        <?php
            $sServiceType = URL::to('services/enquire'.find::service()->service_type);

        ?>
        <h2>ENQUIRE ABOUT {{$sServiceType}}</h2>
              sdffgoadfgladfgjdaghsdhglkdsglkjsdlkgjldskjgl
        </section>
        
    </aside>



@stop
@extends('includes.master')
@section("content")

<!-- Start of Services -->
<div id="sectionPrices">
    <section id="pricesListed">            
       <h1 id="header">EDIT YOUR<a href="{{URL::to('services/edit')}}" id="aLink"> SERVICES</a>.</h1>                    
        <div class="pricing_table">       
        @foreach(Price::all() as $price)
        <!-- Price type  -->
            <div class="priceTable">
                <div class="pricesHeader">
                    
                    <h2 data-editable="price" data-url="{{URL::to('pricing/'.$price->id)}}">{{$price->price}}</h2>
                    
                </div>
                <div class="priceContents">
                    <ul>
                        <li data-editable="content" data-url="{{URL::to('pricing/'.$price->id)}}">{{$price->content}}</li>
                    </ul>
                </div>
            </div>
        @endforeach  
        </div>
    </section>
    </div>
        <div id="pricingImage"><img src="{{URL::to('img/AucklandCityExtended.png')}}" alt="testimonials from career consult"></div>
</div>   
</div>


@stop

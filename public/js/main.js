$(function(){
	

	$(".nav-handle a").on("click", function(){

		$("div#main-header").toggleClass("hide");
		$(".fa .fa-angle-down").toggleClass("hide");
		
	});
	//-----------Nav handle drop down menu-----------//

	$(".nav-handle a").on("click", function(){

		$("ul#main-nav li").toggleClass("show");
		$(".fa .fa-angle-down").toggleClass("show");

		
	});

	$(".nav-handle-other a").on("click", function(){

		$("ul#main-nav li").toggleClass("show");
		$("#droparrow").toggleClass("show");

		
	});


	//-----------Introduction in mobile show-----------//

	$(".nav-handle a").on("click", function(){

		$("body").toggleClass("show");
		$("section#introduction").toggleClass("hide");
		$("section#animation").toggleClass("hide");
		

	});
	//-----------Services drop down menu-----------//
	$("li#menuServices").on("click", function(){
		$("ul#main-nav li#seletedServices").toggleClass("display");
		$("ul#main-nav li#seletedServices p").toggleClass("display");
		$("ul#main-nav li#seletedServices i").toggleClass("display");
	});

	$(".nav-handle-sign-up a").on("click", function(){


		$("#main-nav").toggleClass("show");
		$("#droparrow").toggleClass("show");
		
		
	});
//-----------When in Desktop pop up log in-----------//
	
	$("#loginHandle").on("click",function(e){

		e.preventDefault();
		
		$("#background").show().animate({width:"100%",height:"100%"},1000);
		$("div#loginForm").toggleClass("show");
		$("div#loginForm").show().appendTo("#background");

	});

	$("#loginForm p.closeModel").on("click",function(){

		$("#background").animate({width:"0%",height:"0%",display:"none"},1000,function(){
			$(this).hide();
			$("div#loginForm").appendTo("body").hide();
		});
		
	});

});
//-----------Search Function-----------//


document.getElementById('txtsearch').onsubmit = function (event)
    {
        // Prevent the form from submitting
        event.preventDefault();

        // Build the url using the form action and the topic value
        var topic = document.querySelectorAll('input[name="topic"]')[0];
        window.location.href = this.action + '/' + encodeURIComponent(topic.value);
    };

//----------- editing admin only-----------//

$("[data-editable]").on("click",function(){ //this [data-editiable] is the attribute to p in userDetails.blade.php

	var url = $(this).data("url"); //the current url- so at its current location
	//we want to create a text area using json so user can update details. PUT

	var options={
		//configuration of the control do you want to make a request, put request, a get a post,. we want to do a put to edit something
		//PUT(route) request that goes to user id(method) user/id
		//ajax can do a request natively _PUT laravel thinks it will make a post request. but underneath we want it to be a put request so it goes to the put route
		type: "textarea",
		cssclass: "inserted", //finding out the text area we need. this is putting the class into the form for you.

		submitdata:{
			_method: "PUT",
			field: $(this).data("editable") //this is the a created attribute
		},
		submit: "OK"

	};

	$(this).editable(url, options);

});


//----------- google map-----------//


function initialize(){

	var mapLocation = new google.maps.LatLng(-36.855945, 174.746430);
	var mapStyles = [{
		stylers:[
			{hue: "#f4f2ef"},
			{saturation: -80}
			]
	}];

	var markerStyles =[{
		stylers:[
		{hue: "#9B8FFB"},
		{saturation: -80},
		{fillColor: "#9B8FFB"},
		]
	}]
	
	var mapOptions ={
		zoom: 16,
		center: mapLocation,
		styles: mapStyles

	}

	

	var map = new google.maps.Map(document.getElementById('flex-google'), mapOptions);

		var marker = new google.maps.Marker({
		position: mapLocation,
		map: map,
		styles: markerStyles,
		animation: google.maps.Animation.DROP,
		position: mapLocation,
		// icon: logoMarker
		// title: 'Laser Mt Eden Swim Club'
		
	});
	google.maps.event.addListener(marker,'click',toggleBounce);
}



//animate the marker

function toggleBounce(){

	if(marker.getAnimation() != null){
		marker.setAnimation(null);
	}else{
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}

google.maps.event.addDomListener(window,'load',initialize);




//User deletes their profile - with message

$(document).on('submit', '#deleteProfile', function(){
    return confirm('Are you sure?');
});
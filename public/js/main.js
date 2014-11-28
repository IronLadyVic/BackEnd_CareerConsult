$(function(){
	

	$(".nav-handle a").on("click", function(){

		$("div#main-header").toggleClass("hide");
		$(".fa .fa-angle-down").toggleClass("hide");
		
	});
	//-----------Nav handle drop down menu-----------//

	$(".nav-handle a").on("click", function(){

		$("ul#main-nav li").toggleClass("show");
		$("#droparrow").toggleClass("show");

		
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

	$("#loginForm [role='close-modal']").on("click",function(){

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
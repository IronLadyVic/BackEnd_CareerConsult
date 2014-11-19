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
	//-----------Introduction in mobile show-----------//

	$(".nav-handle a").on("click", function(){

		$("body").toggleClass("show");
		$("section#introduction").toggleClass("hide");
		$("section#animation").toggleClass("hide");
		

	});
	//-----------Services drop down menu-----------//
	$("li#menuServices").on("click", function(){
		$("li#seletedServices").toggleClass("display");
		$("#seletedServices p").toggleClass("display");
		$("#seletedServices i").toggleClass("display");
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
		$("div#loginForm").appendTo("#background");

	});

	$("#loginForm [role='close-modal']").on("click",function(){

		$("#background").animate({width:"0%",height:"0%"},1000,function(){
			$(this).hide();
			$("div#loginForm").appendTo("body");
		});
		
	});

});

//-----------services accordion-----------//

	$(function() {
		$( "#accordion" ).accordion();
	});

//-----------In mobile click nav handle to hide menu list-----------//



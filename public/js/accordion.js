$(function(){


//accordinan bit

$("#accordion .serviceContent").hide();
$("#accordion h3").on("click",function(e){
	
	e.preventDefault();

//close other opened items

$("#accordian h3").not(this).next().slideUp(); //using next to go to the next sibling of the h3. which is the p.

//controlling the item being clicked on
	if($(this).data("open") == 1){
	//slide up
	$(this).next().slideUp(function(){
	$(this).prev().find("i").removeClass("fa fa-angle-up").addClass("fa fa-angle-down");
	$(this).prev().data("open",0);

	});

	}else{
	//slide down
	$(this).next().slideDown(function(){
	$(this).prev().find("i").removeClass("fa fa-angle-down").addClass("fa fa-angle-up");
	$(this).prev().data("open",1);
	});
}

});


});
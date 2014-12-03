//----------------------------------edit user details--------------------------------//

$("#sectionServices").on("click","[data-editable]",function(){ //this [data-editiable] is the attribute to p in services_edit.blade.php

	var url = window.location.href; //the current url- so at its current location
	//we want to create a text area using json so user can update details. PUT

	var options={
		//configuration of the control do you want to make a request, put request, a get a post,. we want to do a put to edit something
		//PUT(route) request that goes to user id(method) user/id
		//ajax can do a request natively _PUT laravel thinks it will make a post request. but underneath we want it to be a put request so it goes to the put route
		type: "textarea",
		//cssclass: "inserted", //finding out the text area we need. this is putting the class into the form for you.

		submitdata:{
			_method: "PUT",
			field: $(this).data("data-editable") //this is the a created attribute
		},
		submit: "OK"

	};

	$(this).editable(url, options);

});

//----------------------------------wysiwyg--------------------------------//
// tinymce.init({
// 	selector: "textarea"
// });

$(document).on("DOMNodeInserted",function(e){

	//console.log(this); //this is-document.
	//console.log(event.target); //finding out what the target has been inserted in. The target is the form that has the text area.
	if($(e.target).hasClass("inserted")){ //when the class inserted has kicked in to the userdetails form
		console.log(e.target);

		//initialise the textarea in wysywyg, but only inside the class
		
		tineyMCE.editors=[]; //removing any exisiting references

		tinymce.init({
 		selector: ".inserted textarea" //jquery css selector.so when we double click on the userdetails yo uwill have a editable form to edit in your style using tinymce
 		});
	} //taking further action knowing that jeditable kicks in

});

$(".main").on("click","[data-product]",function(){ //just so happens the .main has a click handler so this is data-product on the button
	//delegating here when you click on the add button on type fish your delegating out using the .main
	var iProductId = $(this).attr("data-product");//this always refers to not the object not the main it refers to only in jquery.
	var cart = makeCart();

	cart.addToCart(iProductId); //which is already in localstorage



});

});


//we now need to modify UserController.php to tell if the user updates each feield tell it to update that field.
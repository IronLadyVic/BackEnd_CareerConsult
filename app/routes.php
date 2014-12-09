<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	
	//return the index view
});



//index not logged in
Route::get('home', function(){
	return View::make('home');
	//return the index view
});
//index not logged in
Route::get('services', function(){
	return View::make('services');
	//return the index view
});


//services edit page for admin only
Route::get('services/edit', function(){
	
	return View::make('services_edit');
	
});
//services with enquiry form with service_type
Route::get('services/{id}/enquire',function($id){

	return View::make('services_enquire')->with("id",$id);

});

//services 
Route::get('services/{id?}', function($id=null){
	return View::make('services')->with("id",$id);
	
});

//post service edit page for admin only
Route::put('services/{id}', function($id){
	$sField = Input::get("field");
	$sValue = Input::get("value");

	$oService = Service::find($id);
	$oService->$sField = $sValue;

	$oService->save();

	//return value that value is going to be used to be put back into place
	//return Input::all();
	return $sValue;
	
});
//delete a service type using id | admin only
Route::delete('services/{id}',function($id){
	$oService = Service::find($id);	
	$oService->delete();
	return Redirect::to('services/edit');	
});

//Adding a service and return back to editing services page | admin only
Route::post('service',function(){
	
	$aRules = array(
		'icon'=>'required',
		'service_type'=>'required|unique:services',
		'content'=>'required'
		
		);

	$aAdminInput = Input::all();

	$messages= array(
		"required"=>'The :attribute field is required.'
		);

	$oValidator = Validator::make($aAdminInput, $aRules, $messages);


	if($oValidator->passes()){
		$sServiceIcon = Input::get("service_type").".".Input::file('icon')->getClientOriginalExtension();
		Input::file("icon")->move("uploadServiceIcons",$sServiceIcon);
		
		//hash password	
		$aDetails = Input::all();	

		$aDetails["icon"] = $sServiceIcon;
		//create new User
		$oService = Service::create($aDetails);

		
		return Redirect::to('services/1');
		}else{

		//redirect new client form with errors and sticky data
		return Redirect::to('services/edit')->withErrors($oValidator)->withInput();

	}

});










//testimonials get non edit
Route::get('testimonial', function(){
	return View::make('testimonial');
	
});

//testimonials get edit
Route::get('testimonials/edit', function(){
	return View::make('testimonial_edit');
	
});
Route::put('testimonials/{id}', function($id){

	$sField = Input::get("field");
	$sValue = Input::get("value");

	$oTestimonial = Testimonial::find($id);
	$oTestimonial->$sField = $sValue;

	$oTestimonial->save();

	//return value that value is going to be used to be put back into place
	//return Input::all();
	return $sValue;


});
//delete a testimonial using id | admin only
Route::delete('testimonials/{id}',function($id){
	$oTestimonial = Testimonial::find($id);	
	$oTestimonial->delete();
	return Redirect::to('testimonials/edit');	
});


//pricing 
Route::get('pricing', function(){
	return View::make('pricing');
	
});

//pricing 
Route::get('pricing/edit', function(){
	return View::make('pricing_edit');
	
});

Route::put('pricing/{id}', function($id){

	$sField = Input::get("field");
	$sValue = Input::get("value");

	$oPrice = Price::find($id);
	$oPrice->$sField = $sValue;

	$oPrice->save();

	return $sValue;


});




//enquire
Route::get('enquire', function(){
	
	return View::make('enquire');
	
});

//enquire
Route::post('enquire', function(){
	
	return View::make('success');
	
});












//index logged in
Route::get('welcome/{id}', function($id){

	$oUser = User::find($id);
	return View::make('home-loggedin')->with("user",$oUser);
	//return the index view logged in with user id showing in URI

})->before("auth");


// Login for main desktop routes, GET POST, GET

//GET desktop login

Route::get('login', function()
{
	return View::make('login');
});



//POST
Route::post('login',function(){

	$aLoginDetails=array(
		'username'=>Input::get('username'),
		'password'=>Input::get('password')
		// 'checkbox'=>Input::get('check')
		);
	if(Auth::attempt($aLoginDetails)){
		//redirect to user home page or admin editable pages to view clients, add clients
		
		if(Auth::user()->admin == 1){

			return Redirect::intended("welcome/".Auth::user()->id);

		}else{
			return Redirect::intended("welcome/".Auth::user()->id);
		}
		
	}else{
		//send back to login page with errors
		return Redirect::to("login")->with("error","Incorrect Login, please try again.");
	}

});
//GET

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('home');
});





//Sign up GET, sign up form for users/new route (ReSTful URI)
Route::get('users/new', function(){

	return View::make('signup');

});


//Sign up POST
//User Inputs into form the sign up form and is validated and photo is renamed and placed into 'careerprofile'


Route::get('email', function(){

		Mail::send('emails.welcome', array('username'=>'Vicram'), function($message){ //send 'emails.welcome' is the view the user will see
			$message->to('clark.victoriajane@gmail.com', 'vic clark')->subject('Welcome to Career Consult!');
		});

			return "email sent";


});






Route::post('users',function(){

	//validate input in the sign up form

	$aRules = array(
		'avatar'=>'required',
		'username'=>'required|unique:users',
		'password'=>'required|confirmed',
		'password_confirmation'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		"email"=>"required|email|unique:users",
		'phone'=>'required',
		'service_type'=>'required',
		'check'=>'required'
		);

	$aUserInput = Input::all();

	$messages= array(
		"email"=>'email is invalid',
		"avatar"=>'please upload either a jpeg, jpg, png, bmp, gif, or an svg file',
		"required"=>'The :attribute field is required.'
		);

	$oValidator = Validator::make($aUserInput, $aRules, $messages);


	if($oValidator->passes()){
		

		$sNewPhotoName = Input::get("firstname").".".Input::file('avatar')->getClientOriginalExtension();
		Input::file("avatar")->move("uploads",$sNewPhotoName);
		
		//hash password	
		$aDetails = Input::all();
		$aDetails["password"] = Hash::make($aDetails["password"]);	

		$aDetails["avatar"] = $sNewPhotoName;
		//create new User
		$oUser = User::create($aDetails);

		//email client about sign up success
		// Mail::send('users.mails.welcome', array('firstname'=>Input::get('firstname')), function($message){
		// 	$message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to Career Consult!');
		// });

		//redirect to product list
		return Redirect::to('login')->with('message', 'Thanks for signing up!');
		
	}

	else{

		//redirect new user form with errors and sticky data
		return Redirect::to("users/new")->withErrors($oValidator)->withInput();

	}

});




//add a client
Route::get('clients/new', function(){
	
	return View::make('add_client');
	
});

//Client input and the form is validated and renamed and placed into client profile - only seen by admin
Route::post('clients', function(){
	
	//validate input in the add client form

	$aRules = array(
		'avatar'=>'required',
		'username'=>'required|unique:users',
		'firstname'=>'required',
		'lastname'=>'required',
		"email"=>"required|email|unique:users",
		'phone'=>'required',
		'personal_goal'=>'required',
		'experience'=>'required',
		'education'=>'required',
		'acheivement'=>'required',
		'career_history'=>'required',
		'career_type'=>'required',
		'service_type'=>'required',
		'comment'=>'required'
		);

	$aAdminInput = Input::all();

	$messages= array(
		"email"=>'email is invalid',
		"avatar"=>'please upload either a jpeg, jpg, png, bmp, gif, or an svg file',
		"required"=>'The :attribute field is required.'
		);

	$oValidator = Validator::make($aAdminInput, $aRules, $messages);


	if($oValidator->passes()){

		$sClientImage = Input::get("firstname").".".Input::file('avatar')->getClientOriginalExtension();
		Input::file("avatar")->move("uploads",$sClientImage);


		

		$aDetails = Input::all();
		

		$aAdminInput["avatar"] = $sClientImage;
		//create new User
		$oClient = User::create($aAdminInput);

		//redirect to client list
		return Redirect::to('clients/'.$id)->withInput();
	}

	else{

		//redirect new client form with errors and sticky data
		return Redirect::to("clients/new")->withErrors($oValidator)->withInput();

	}

});

Route::get('clients/{id}', function($id){
	$oClient = User::find($id);
	return View::make("clients")->with("client", $oClient);
	
});

Route::get('clients/{id}/edit', function($id){
	$oClient = User::find($id);
	return View::make("clients_edit")->with("client", $oClient);
	
});


Route::put('clients/{id}',function($id){

	// validate data
	$aRules = array(
		"email" => 'required|email|unique:users,email,'.$id,	
		"firstname" => 'required',
		"lastname" => 'required',
		"phone" => 'required',
		"service_type" => 'required',
		"career_type" => 'required'

		);

	$oValidator = Validator::make(Input::all(),$aRules);

	if($oValidator->passes()){
		
		// update user details
		$oClient = User::find($id);
		$oClient->fill(Input::all());


		$oClient->save();

		// redirect to client page with their id 
		return Redirect::to('clients/'.$id)->withInput();


	}else{
		// redirect to edit Clients details with sticky data input and errors
		return Redirect::to('clients/'.$id.'/edit')->withErrors($oValidator)->withInput();//session flash data (old input)
		
		
	}

})->before("auth");



Route::get('clients', function(){
	$aClients = User::where("admin","=",0)->get();
	return View::make('clients')->with("clients",$aClients);
	
})->before("auth");








//posts
Route::get('post/{id}', function($id){
	$oPost = Post::find($id);
	return View::make('post')->with("post",$oPost);
	
});









// make a new post	
Route::post('posts',function(){
	
//validate input in the sign up form

	$aRules = array(
		'topic_id'=>'required|unique:posts',
		'title'=>'required',
		'photo_path'=>'required',
		'content'=>'required',
		'avatar'=>'required',
		'editor'=>'required',
		'date'=>'required'

		);

	$aAdminInput = Input::all();

	$messages= array(
		"required"=>'The :attribute field is required.'
		);

	$oValidator = Validator::make($aAdminInput, $aRules, $messages);


	if($oValidator->passes()){
		

		$sPostImageName = Input::get("topic").".".Input::file('photo_path')->getClientOriginalExtension();
		Input::file("photo_path")->move("uploadPostPhotos",$sPostImageName);
		
		
		$aPostDetails = Input::all();
		

		$aPostDetails["photo_path"] = $sPostImageName;
		//create new User
		$oPost = Post::create($aPostDetails);

		//redirect to post and services lists
		return Redirect::to('post/'.$id);
		
	}

	else{

		//redirect new post form with errors and sticky data
		return Redirect::to("services/edit")->withErrors($oValidator)->withInput();

	}

})->before("auth");












Route::delete('posts/{id}',function($id){
	$oPost = Post::find($id);	
	$oPost->delete();
	return Redirect::to('services/edit');	
});



Route::get('topics/{id}', function($id){
	$oTopic = Topic::find($id);
	return View::make('topic')->with("topic",$oTopic);
	
});



//make form for CareerProfile with user id and put the concrete data into the controls
Route::get('users/{id}', function($id){

	$oUser = User::find($id);

	return View::make('careerprofile')->with("user",$oUser); //"user" is the object assigned to the varible name $oUser.

})->before("auth"); //this is a filter to check if input is filled in - auth is a filter. you could name this anything.



Route::get('users/{id}/edit',function($id){
	// allow sticky data to you are able to edit the data
	$oUser = User::find($id);

	return View::make("careerprofile-edit")->with("user", $oUser);
	// now bind one by one for each input


})->before("auth");



Route::put('users/{id}',function($id){

	// validate data
	$aRules = array(
		"email" => 'required|email|unique:users,email,'.$id,	
		"firstname" => 'required',
		"lastname" => 'required',
		"phone" => 'required',
		"personal_goal" => 'required',
		"experience" => 'required',
		"education" => 'required',
		"acheivement" => 'required',
		"career_history" => 'required',
		"service_type" => 'required',
		"career_type" => 'required'

		);
		$messages= array(
		"required"=>'The :attribute field is required.'
		);
 

	$oValidator = Validator::make(Input::all(),$aRules);

	if($oValidator->passes()){
		
		// update user details
		$oUser = User::find($id);
		$oUser->fill(Input::all());

		// update user avatar

		// $sNewPhotoName = Input::get("firstname").".".Input::file('avatar')->getClientOriginalExtension();
		// Input::file("avatar")->move("uploads",$sNewPhotoName);

		// $aDetails["avatar"] = $sNewPhotoName;

		$oUser->save();

		// redirect to user page
		return Redirect::to('users/'.$id)->withInput();


	}else{
		// redirect to editUserDetails with sticky data input and errors
		return Redirect::to('users/'.$id.'/edit')->withErrors($oValidator)->withInput();//session flash data (old input)
		
		
	}

})->before("auth");


Route::delete('users/{id}',function($id){

	// $oUser = User::find($id);
	// $iUserId = $oUser->user->id;
	// $oUser->delete();
	$user = User::find($id);

	$user->delete();
	return Redirect::to('home');

	
});
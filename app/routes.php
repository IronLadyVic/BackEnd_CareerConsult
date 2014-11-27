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

// ROUTES FOR VIEWING WHEN NOT LOGGED IN

//index not logged in
Route::get('index', function(){
	return View::make('index');
	//return the index view
});

//services not logged in
Route::get('services', function(){
	return View::make('services');
	
});





//index logged in
Route::get('welcome/{id}', function($id){

	$oUser = User::find($id);
	return View::make('index-loggedin')->with("user",$oUser);
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
		'password'=>Input::get('password'),
		// 'checkbox'=>Input::get('check')
	);
	if(Auth::attempt($aLoginDetails)){
		//redirect to user home page or admin editable pages to view clients, add clients
		
		if(Auth::user()->admin == 1){

			return Redirect::intended("admin/".Auth::user()->id);

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
	return Redirect::to('index');
});





//Sign up GET, sign up form for users/new route (ReSTful URI)
Route::get('users/new', function(){

	 return View::make('signup');

});


//Sign up POST
//User Inputs into form the sign up form and is validated and photo is renamed and placed into 'careerprofile'

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
		//hash password	
		
		//uploading avatar career profile picture
		//we need to tell the route when a user fills in their details that the colomns in the table need to be filled in SQL.
		
		//in laravel we need to tell aDetails that it is a key to be filled into the database user table
		// rename users profile picture, and rename to users name.
		$sNewPhotoName = Input::get("firstname").".".Input::file('avatar')->getClientOriginalExtension();
		Input::file("avatar")->move("uploads",$sNewPhotoName);


		

		$aDetails = Input::all();
		$aDetails["password"] = Hash::make($aDetails["password"]);	
	
		$aDetails["avatar"] = $sNewPhotoName;
		//create new User
		$oUser = User::create($aDetails);

		//redirect to product list
		return Redirect::to("welcome/".Auth::user()->id);
		}else{

		//redirect new user form with errors and sticky data
		return Redirect::to("users/new")->withErrors($oValidator)->withInput();

	}
		
});





//make form for CareerProfile with user id and put the concrete data into the controls
Route::get('careerprofile/{id}', function($id){

	$oUser = User::find($id);

	return View::make('careerprofile')->with("user",$oUser); //"user" is the object assigned to the varible name $oUser.

})->before("auth"); //this is a filter to check if input is filled in - auth is a filter. you could name this anything.



Route::get('users/{id}/edit',function($id){
	// allow sticky data to you are able to edit the data
	$oUser = User::find($id);

	return View::make("editprofile")->with("user", $oUser);
	// now bind one by one for each input

})->before("auth");
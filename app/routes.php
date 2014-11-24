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

Route::get('index', function()
{
	return View::make('index');
	//return the index view
});
Route::get('welcome', function()
{
	return View::make('index-loggedin');
	//return the index view logged in
});



// Login for main desktop routes, GET POST, GET

//GET

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
		// return Redirect::intended("users/".Auth::user()->id);
		return Redirect::to('login')->with("error","Submission Required");
	}else{
		return Redirect::to('welcome'); //error control
	}

});
//GET

Route::get('logout', function()
{
	return Redirect::to('index');
});





//Sign up GET, sign up form for new users
Route::get('users/new', function(){

	 return View::make('signup');

});


//Sign up POST
//User Inputs into form the sign up form and is validated and photo is renamed and placed into 'careerprofile'

Route::post('users',function(){

	//validate input in the sign up form

	$aRules = array(
		'avatar'=>'required|mimes:jpeg,jpg,png,bmp,gif,svg',
		"username"=>"required|unique:users",
		'password'=>'required|confirmed',
		'password_confirmation'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		"email"=>"required|email|unique:users",
		'phone'=>'required',
		'service_type'=>'required',
		'comment'=>'required',
		'check'=>'required'
		);

	$aUserInput = Input::all();

	$messages= array(
		"email"=>"email is invalid",
		"avatar"=>"please upload either a jpeg, jpg, png, bmp, gif, svg file",
		"required"=>"Submission required"
		);

	$oValidator = Validator::make($aUserInput, $aRules, $messages);

	if($oValidator->fails()){
		return Redirect::to("users/new")->withErrors($oValidator)->withInput();
	}else{

		$aDetails = Input::all();
		$aDetails["password"] = Hash::make($aDetails["password"]);
		//we need to tell the route when a user fills in their details that the colomns in the table need to be filled in SQL.
		
		//in laravel we need to tell aDetails that it is a key to be filled into the database user table
		// rename users profile picture, and rename to users name.

		//upload photo
		$sNewName = Input::get("username").".".Input::file("avatar")->getClientOriginalExtension(); //now tell laravel to move the photo file from temporary location to new location
		Input::file("avatar")->move("careerprofile/",$sNewName);

		$aDetails = Input::all();
		$aDetails['avatar'] = $sNewName;

				
		User::create($aDetails);
		//redirect back to login page once sign up is complete
		return Redirect::to("users/1");

	}

});







//make form for CareerProfile with user id and put the concrete data into the controls
Route::get('users/{id}', function($id){

	$oUser = User::find($id);

	return View::make('careerprofile')->with("user",$oUser);

});
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
		'rememberMe'=>Checkbox::get('check')

	);

	if(Auth::attempt($aLoginDetails)){
		return Redirect::intended("users/".Auth::user()->id);

	}else{
		return Redirect::to('login')->with("error","Submission Required"); //error control
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
		'avatar'=>'required',
		"username"=>"required|unique:users",
		'password'=>'required',
		'confirm_password'=>'required',
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
		"avatar"=>"please upload a jpg or png file",
		"required"=>"please fill in"
		);

	$oValidator = Validator::make(Input::all(), $aRules);

	if($oValidator->fails()){
		return Redirect::to("users/new")->withErrors($oValidator)->withInput();
	}else{
		$aDetails = Input::all();
		$aDetails["password"] = Hash::make($aDetails["password"]);
		//we need to tell the route when a user fills in their details that the colomns in the table need to be filled in SQL.
		
		//in laravel we need to tell aDetails that it is a key to be filled into the database user table
		User::create($aDetails);
		//redirect back to login page once sign up is complete
		return Redirect::to("login");

	}

});

//make form for CareerProfile with user id and put the concrete data into the controls
// Route::get('users/{id}', function($id){

// 	$oUser = User::find($id);

// 	return View::make('careerProfile')->with("user",$oUser);

// });
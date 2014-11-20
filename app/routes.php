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
	return View::make('index');
	//return the index view
});



// Login routes, GET POST, GET

//GET

Route::get('login', function()
{
	return View::make('login');
});

//POST
Route::post('login',function(){

	$aLoginDetails=array(
		'username'=>Input::get('username'),
		'password'=>Input::get('password')

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

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token'); //this is if you echo out user you dont see password or remember_me token

	//we need to tell the route when a user fills in their details that the colomns in the table need to be filled in the database.
	protected $fillable = array('username', 'password','firstname','lastname','email','phone','avatar','personal_goal','experience','education','acheivement','career_history','career_type','service_type','comment');

}

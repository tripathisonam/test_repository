<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Input;
use Hash;

class Register extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
/*

class Register extends Model {*/
protected $table = 'register_users';

public static function insertUser($request) {
    $name  = Input::get('name');
    $email = Input::get('email');
    $pwd   = Hash::make(Input::get('pwd'));

    $user = new Register();
   	$user->name = $name;
   	$user->email = $email;
   	$user->password = $pwd;

   	$user->save();
}
}
<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Input;
use Validator;
use Redirect;
use App\Register;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller {
public function store(){	
           	$rquest = Input::except(array('_token'));
           	$rule = array(
           			'name'=>'required',
           			'email'=>'required|email',
           			'pwd'=>'required|min:6',
           			'confirm_pwd'=>'required|same:pwd',
           		);
           	$message = array(
					'confirm_pwd.required' => "The confirm password is required",
					'confirm_pwd.required' => "The confirm password must be at least 6 character",
           	);
           	$validator=Validator::make($rquest,$rule,$message);
           	if ($validator->fails()) {
           		return Redirect::to('register')->withErrors($validator);
           	} else {
           		Register::insertUser(Input::except(array('_token','confirm_pwd')));
           		return Redirect::to('register')->with('success','Registered successfully');
           	}
}

public function login() {
		$rquest = Input::except(array('_token'));
        $rule   = array(
           			'email'=>'required|email',
           			'password'=>'required',
        );
       	$validator = Validator::make($rquest,$rule);
       	if ($validator->fails()) {
       		return Redirect::to('login')->withErrors($validator);
       	} else {
			error_reporting(E_ALL);
			if(Auth::attempt($rquest)) {
       			echo "match";
       			exit;
       			return Redirect::to('home');
       		} else {
       			echo "i am here";
       			exit;
       			return Redirect::to('login');
       		}
       	}
}

}
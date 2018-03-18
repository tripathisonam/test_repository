<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function() {
       return view('home'); 
});

Route::get('/login', function() {
       return view('login'); 
});

Route::get('/register', function() {
       return view('register.register
       	'); 
});
Route::post('/actionRegister', 'RegisterController@store');
Route::post('/login_check', 'RegisterController@login');


Route::get('/createTask', function() {
       return view('task.createTask
        '); 
});

Route::post('actionCreateTask', 'TaskController@create');
Route::get('listTask', 'TaskController@show');

//Route::get('/', 'ListController@show');	
//Route::get('/', 'WelcomeController@index');

/*Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin-panel'],function(){
     Route::get('sonam Tripathi',[
     	'as'=>'sonama',
     	'uses'=>'
     	AdminController@req',]);
});

Route::get('/',function(){
	echo route('sonama');
});*/

//Route::get('/home_page', 'AdminController@index');
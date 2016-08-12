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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//back end
Route::resource('/product','ProductController');
Route::get('/product/destroy/{id}','ProductController@destroy');

Route::resource('/customer','CustomerController');
Route::get('/customer/destroy/{id}','CustomerController@destroy');

Route::get('/CreateProduct','CustomerController@CreateProduct');
Route::post('/StoreProduct','CustomerController@StoreProduct');

Route::get('login', function() {
	  return View::make('login');
	});
Route::post('login', 'CustomerController@login');
	
//front end
Route::get('/index','CustomerController@FrontEnd');

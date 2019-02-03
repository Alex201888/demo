<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'account'], function() {

	Route::get('/logout', ['uses' => 'AccountController@getLogout']);
	Route::get('/register', ['uses' => 'AccountController@getRegister']);

	Route::post('/registerForm', ['uses' => 'AccountController@postRegister']);
	Route::get('/login', ['as' => 'login','uses' => 'AccountController@getLogin']);
	Route::post('/verify', ['uses' => 'AccountController@postLogin']);
});

Route::group(['prefix' => 'myActivity'], function() {
	Route::post('/uploadFile', ['uses' => 'ActivityController@postUploadFile']);
	Route::post('/add', ['uses' => 'ActivityController@postAddActivity']);
	Route::get('/addNewActivity', ['uses' => 'ActivityController@getAddNewActivity']);

	Route::get('/updateActivity/{id}', ['uses' => 'ActivityController@getUpdateActivity']);
	Route::post('/update/', ['uses' => 'ActivityController@postUpdateActivity']);

	Route::get('/delete/{id}', ['uses' => 'ActivityController@deleteActivity']);
	Route::get('/getAll', ['uses' => 'ActivityController@getAllActivities']);
});
Route::get('/detail/{id}', ['uses' => 'HomeController@getDetail']);
Route::get('/home', ['uses' => 'HomeController@getHome']);
Route::get('/map', ['uses' => 'HomeController@getMap']);
Route::get('/', ['uses' => 'HomeController@getHome']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/rocky', function() {
// 	return "handsome!";
// });

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

Route::get('/', function () {
    return view('welcome');
});
//login
Route::get('login','AuthoController@login');
Route::post('loginstore','AuthoController@loginstore');

//middleware
Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('dashboard','AuthoController@dashboard');
	Route::get('logout','AuthoController@logout');

	Route::group(['middleware' => 'isTeacher'], function(){
		Route::get('teacher1','AuthoController@teacher1');
		Route::get('teacher2','AuthoController@teacher2');
	});

	Route::group(['middleware' => 'isStudent'], function(){
		Route::get('student1','AuthoController@student1');
		Route::get('student2','AuthoController@student2');

	});


});






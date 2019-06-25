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

Route::get('/dashboard', function () {
	return view('welcome');
});
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

	Route::resource('dashboard/branch', 'BranchController', ['except' => ['show']]);
	Route::resource('dashboard/user', 'UserController', ['except' => ['show']]);
	Route::get('dashboard/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('dashboard/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('dashboard/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

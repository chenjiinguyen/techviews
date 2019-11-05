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
})->middleware('verify.id');

Auth::routes();

Route::get('verify', 'VerifyController@index');
Route::post('verify', 'VerifyController@verify');


Route::get('login/{provider}', 'AuthController@redirectToProvider');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

Route::group(['middleware' => ['auth','verify.id']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});



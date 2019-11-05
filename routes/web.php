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

<<<<<<< HEAD
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('verify', 'VerifyController@index');
Route::post('verify', 'VerifyController@verify');


Route::get('login/{provider}', 'AuthController@redirectToProvider');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

=======
Auth::routes();

Route::get('login/{provider}', 'AuthController@redirectToProvider')->name('login');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home');
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f
=======
Auth::routes();

Route::get('login/{provider}', 'AuthController@redirectToProvider')->name('login');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home');
>>>>>>> 13adcff1f32da76d7d02b19b28b63d2466ab407f

Route::group(['middleware' => ['auth','verify.id']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

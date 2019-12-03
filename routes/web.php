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

// use Illuminate\Routing\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('verify', 'VerifyController@index')->name('verify');
Route::post('verify', 'VerifyController@verify')->name('verify');

Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('login/{provider}', 'AuthController@redirectToProvider')->name('login');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

Route::middleware('auth', 'verify.id')->group(function() {
	Route::resource('user', 'UserController')->except('show');

	Route::get('/profile', 'ProfileController@index')->name('profile');

	// Route::prefix('profile', function() {
	// 	Route::get('', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	// 	Route::put('', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	// 	Route::put('password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	// });

    Route::get('post/new', 'Post\CreatePostController@index')->name('create.post');
    Route::post('post/new', 'Post\CreatePostController@create');
	Route::get('post/{hash}', 'PostController@index');

});



<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(
// 	['prefix'=> 'auth'], function () {
		
// 		Route::post('login', 'Auth\AuthController@login')->name('login');
// 		Route::post('register', 'Auth\AuthController@register')->name('register');

// 		Route::group(
// 			['middleware' => 'auth:api'], function() {
// 				Route::get('logout', 'Auth\AuthController@logout');
// 				Route::get('user', 'Auth\AuthController@user');
// 			});
// 	});

Route::group(['prefix' => 'v1'], function () 
{
    // Login
    Route::post('/login', 'UserController@login');
    // Register 
    Route::post('/register', 'UserController@register');
    // Profile
    Route::get('/user/profile/{id}', 'UserController@showprofile')->middleware('auth:api');
    // Logout
    Route::get('/logout', 'UserController@logout')->middleware('auth:api');
    // List of Classes Videos
    Route::get('/showlive', 'UserController@showlive');
    // Requested Video
    Route::get('/showlive/{slug}', 'UserController@showliveslug');
    // List of Classes Videos by Board 
    Route::get('/showlive/board/{board}', 'UserController@showliveboard');
    // List of Courses 
    Route::get('/packages', 'UserController@showpackages');
    // Live List UserID
    Route::get('/paidlive/{userId}', 'UserController@userpaidlives');    
    // Live Single UserID and Slug
    Route::get('/paidlive/category/{category}', 'UserController@livebyCategory');

    Route::get('/live/{userID}/{slug}', 'UserController@userpaidlive')->middleware('auth:api');
    // This is for payment 
    Route::post('/subscription','UserController@subscribed')->middleware('auth:api');

    Route::get('/subscription/list/{userId}', 'UserController@userpaidcourselist');
});




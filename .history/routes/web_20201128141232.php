<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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


Route::get('/posts', function () {
    $posts = App\Post::all();
    return view('post', compact('posts'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('page/{slug}', function($slug){
	$page = App\Page::where('slug', '=', $slug)->firstOrFail();
	return view('page', compact('page'));
});




Route::get('/lives', 'LifeController@index');

Route::get('/category/{cat_slug}', 'LifeController@indexByCategory');

Route::get('lives/{slug}', 'LifeController@show')->middleware('auth');

Route::get('pack/{slug}','MainController@show')->name('pack');

// Payment Gateway Routes
Route::get('/packages', 'MainController@index')->name('packages');
Route::post('/payment', 'MainController@payment')->name('payment');
Route::post('/pay' , 'MainController@pay')->name('pay');
Route::get('/success', 'MainController@success')->name('success');
Route::get('/unsuccessful', 'MainController@unsuccessful')->name('unsuccessful');

// Route for user profile
Route::get('/profile/profile', 'ProfileController@show')->middleware('auth')->name('profile');
Route::post('/profile/store', 'ProfileController@store')->middleware('auth')->name('store_profile');
Route::get('/profile/create','ProfileController@create')->middleware('auth')->name('create_profile');
Route::get('/profile/edit/{id}','ProfileController@edit')->middleware('auth')->name('profile.edit');
Route::post('/profile/update/{id}','ProfileController@update')->middleware('auth')->name('profile.update');

// Search Courses
Route::any('/search',function(){
    $q = Request::input('q');
    $course = \App\Category::where('name','LIKE','%'.$q.'%')->orWhere('slug','LIKE','%'.$q.'%')->get();
    if(count($course) > 0)
        return view('course_res')->withDetails($course)->withQuery ( $q );
    else return view ('course_res')->withMessage('No Details found. Try to search again !');
});

// Career Page
Route::get('/career', function() {
    $career = \App\Career::all();
    return view('extra.career', compact('career'));
});

// Live Videos by Board
Route::get('/board/{board}', function($board) {
    $lives = \App\Life::where('board',$board)->get();
    return view('lives.board', compact('lives'));
});

Route::get('study-materials/{board}', function($board) {
    $materials = \App\Material::where('board', $board)->get();
     return view('study', compact('materials'));
});

Route::get('freelivevideo', function() {
    return view('freevideo');
});

Route::get('/bookfreeonlineclass', 'CampaignController@create');
Route::post('/campfire/store','CampaignController@store')->name('store_campaign');

Route::get('/course_error', function () {
   return view('errors.coursebug');
});

Route::get('/freeebook', function() {
    return view('campaign.freebookcapsule');
});

Route::get('/thankyoufreeebook', function() {
    return view('campaign.freeebookthankyou');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Carbon;
use App\Contact;
use App\Post;
use App\Page;
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

// Post Section
//_________________________________________________________________________________________________//

Route::get('/posts', function () {
    $featuredPosts = Post::where([
        ['featured', '=', '1'],
        ['status', '=', 'PUBLISHED'],
    ])->whereDate('created_at', '<=', Carbon::now())
        ->limit(4)
        ->orderBy('created_at', 'desc')
        ->get();

    $recentPosts = Post::where([
        ['status', '=', 'PUBLISHED'],
    ])->whereDate('created_at', '<=', Carbon::now())
        ->limit(4)
        ->orderBy('created_at', 'desc')
        ->get();
    $posts = Post::all();
    return view('posts.posts', compact('featuredPosts', 'recentPosts', 'posts'));
    // $posts = App\Post::all();
    // return view('posts.posts', compact('posts'));
});

Route::get('/posts/{category}', function($category) {
    $categoryByPost = Post::where('category_id', $category)
        ->orderBy('created_at', 'desc')
        ->get();
    return  view('posts.categorypost', compact('categoryByPost'));
});

Route::get('/post/{slug}', function($slug) {
    $post = Post::where('slug', '=', $slug)->firstOrFail();
    return view('posts.post', compact('post'));
})->name('posts.post');

// Voyager Admin Layouts
//____________________________________________________________________________________________________//
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Auth Routes
//____________________________________________________________________________________________________//
Auth::routes();

// Home Section
//_______________________________________________________________________________________________________//
Route::get('/home', 'HomeController@index')->name('home');


// Page Section
//_________________________________________________________________________________________________________//
Route::get('page/{slug}', function($slug){
    $page = App\Page::where('slug', '=', $slug)->firstOrFail();
    $pages = Page::inRandomOrder()->take(10)->get();
    return view('extra.page', compact('page', 'pages'));
});




// Live Video Section
//___________________________________________________________________________________________________________//

Route::get('/lives', 'LifeController@index');
Route::get('/category/{cat_slug}', 'LifeController@indexByCategory');
Route::get('lives/{slug}', 'LifeController@show')->middleware('auth');
// Live Videos by Board
Route::get('/board/{board}', function($board) {
    $lives = \App\Life::where('board',$board)->get();
    return view('lives.board', compact('lives'));
});
//____________________________________________________________________________________________________________//

// Route for user profile
//____________________________________________________________________________________________________________//
Route::get('/profile/profile', 'ProfileController@show')->middleware('auth')->name('profile');
Route::post('/profile/store', 'ProfileController@store')->middleware('auth')->name('store_profile');
Route::get('/profile/create','ProfileController@create')->middleware('auth')->name('create_profile');
Route::get('/profile/edit/{id}','ProfileController@edit')->middleware('auth')->name('profile.edit');
Route::post('/profile/update/{id}','ProfileController@update')->middleware('auth')->name('profile.update');

// Search Section
//____________________________________________________________________________________________________________//

// 1. Search Courses
Route::any('/search',function(){
    $q = Request::input('q');
    $course = \App\Category::where('name','LIKE','%'.$q.'%')->orWhere('slug','LIKE','%'.$q.'%')->get();
    if(count($course) > 0)
        return view('search.course_res')->withDetails($course)->withQuery ( $q );
    else return view ('search.course_res')->withMessage('No Details found. Try to search again !');
});


//______________________________________________________________________________________________________________//

// Career Section
// _____________________________________________________________________________________________________________//

Route::get('/career', function() {
    $career = \App\Career::all();
    return view('career.career', compact('career'));
});

//______________________________________________________________________________________________________________//


// Extra Section
//______________________________________________________________________________________________________________//
// 1. Disclaimer

Route::get('/disclaimer', function() {
    return view('extra.disclaimer');
});

// 2. Free Live Video
// _____________________________________________________________________________________________________________//
Route::get('freelivevideo', function() {
    return view('extra.freevideo');
});

// 3. Privacy
//______________________________________________________________________________________________________________//
Route::get('/privacypolicy', function() {
    return view('extra.privacypolicy');
});

// 4. Our Teachers
//_______________________________________________________________________________________________________________//
Route::get('/teachers', function() {
    return view('extra.ourteachers');
});

// 5. Terms
//________________________________________________________________________________________________________________//
Route::get('/terms', function() {
    return view('extra.terms');
});

// 6. Terms Website
//________________________________________________________________________________________________________________//
Route::get('/website-terms', function () {
    return view('extra.web-terms');
});

// 7. Contact-Us
//________________________________________________________________________________________________________________//
Route::get('/contact-us', function () {
    return view("extra.contact");
});

// 8. Promoters
//_______________________________________________________________________________________________________________//
Route::get('/our-management-team', function () {
    return view("extra.promoters");
});

// 9. FAQs
//_______________________________________________________________________________________________________________//
Route::get('/faqs', function () {
    return view("extra.faq");
});
// 10. Become a Teacher
//_______________________________________________________________________________________________________________//
Route::get('/teach-on-tneos', function () {
    return view("extra.becometeacher");
});

// 11. Our-Network
//_______________________________________________________________________________________________________________//
Route::get('/our-network', function () {
    return view("extra.network");
});

Route::get('/our-network-world', function () {
    return view("extra.network-world");
});
// 12. About
//_______________________________________________________________________________________________________________//
Route::get('/about',function () {
    return view("extra.about-us");
});
Route::get('/vision', function () {
    return view('extra.vision');
});
// Payment Gateway Routes
//_______________________________________________________________________________________________________________//
// 1. Packages
Route::get('/packages', 'MainController@index')->name('packages');

// 2. Pack (Single Package/Product)
Route::get('pack/{slug}','MainController@show')->name('pack');

// 3. Payment Initiation
Route::post('/payment', 'MainController@payment')->name('payment');

// 4. Payment
Route::post('/pay' , 'MainController@pay')->name('pay');

// 5. Successful Payment
Route::get('/success', 'MainController@success')->name('success');

// 6. Unsuccessful  Unsuccessful
Route::get('/unsuccessful', 'MainController@unsuccessful')->name('unsuccessful');


// Study Material
//________________________________________________________________________________________________________________//

Route::get('study-materials/{board}', function($board) {
    $materials = \App\Material::where('board', $board)->get();
    return view('extra.study', compact('materials'));
});


// Error Section
//_________________________________________________________________________________________________________________/
Route::get('/course_error', function () {
    return view('errors.coursebug');
});

// Contact
// ________________________________________________________________________________________________________________/

Route::post('/contact', function()  {
    $contact = new Contact;
    $contact->firstname = request('firstname');
    $contact->lastname = request('lastname');
    $contact->email = request('email');
    $contact->phone = request('phone');
    $contact->message = request('message');

    $contact->save();
    return redirect()->back() ->with('alert', 'Thanks for contacting us! Our customer support will contact you very soon. ðŸ™‚');
})->name('contactus');



// Campaigns
// _______________________________________________________________________________________________________________/

Route::get('/bookfreeonlineclass', 'CampaignController@create');

Route::post('/campfire/store','CampaignController@store')->name('store_campaign');

Route::get('/freeebook', function() {
    return view('campaign.freebookcapsule');
});
Route::get('/thankyoufreeebook', function() {
    return view('campaign.freeebookthankyou');
});
Route::get('/free-trial-classes', function() {
    return view('campaign.freetrialclasses');
});

Route::get('/thankyou-free-trial-classes', function() {
    return view('campaign.freetrialclassesthankyou');
});

Route::get('class-on-demand', function () {
    return view('campaign.classondemand');
});

/*Route::get("/hello", function () {
   abort(500);
});*/

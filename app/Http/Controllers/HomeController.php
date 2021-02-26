<?php

namespace App\Http\Controllers;

use App\Life;
use App\Subscription;
use App\Profile;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $categories = Category::all();
        $user_subscribed = Subscription::where('user_id', Auth::id());
        $live_status = Life::where('status', 1);
//      /* Date 08/10/2020 10:42 am */
        $profile_status = Profile::where('user_id', Auth::id())->exists();
        $user_purchased = Subscription::where('user_id',"=" ,Auth::id())->where('payment_done', true);
        $user_subs = Subscription::where('user_id',"=" ,Auth::id())->where('payment_done', true)->get();
        if(!$user_subs) {
            return view('/packages');
        }
        if(!$profile_status) {
            return view('profile.create-profile');
        }
        return view('home', compact('categories','user_subscribed', 'live_status', 'profile_status', 'user_purchased', 'user_subs'));
    }


    public function course() {
        $course_subs = Subscription::where('user_id', "=", Auth::id())->where('payment_done', true)->get();
        return view('subscribed', compact('course_subs'));
    }
}

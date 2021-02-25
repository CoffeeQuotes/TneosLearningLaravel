<?php

namespace App\Http\Controllers;

use App\Category;
use http\Client\Curl\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Life;
use Illuminate\Support\Facades\DB;
use App\Subscription;
use Illuminate\Support\Facades\Auth;



class LifeController extends Controller
{

    public function  index() {

        $lives = Life::paginate(8);

        return view('lives.lives', compact('lives'));
    }

    public function indexByCategory($cat_slug) {
        $live_status = Life::where('category_id', $cat_slug)->first();
        if($live_status === null) {
            return redirect('/course_error');
        }
        $course = Category::where('slug', $cat_slug)->firstOrFail();

        $cat_live = Life::where('category_id', $cat_slug)->get();
        return view('lives.livebycategroy', compact('cat_live','course'));
    }

    public function show($slug) {

        $live =Life::where('slug', $slug)->firstOrFail();
        $category_slug = $live->category_id;
        $category_id = Category::where('slug',$category_slug)->firstOrFail()->id;
//        dd($category_id);
        $subscription = Subscription::where('user_id', Auth::id())->where('category_id',$category_id)->first()['payment_done'];
//        dd($subscription);
        if($subscription == 1 ) {
             return view('lives.life', compact('live'));
         }

       // return "You are not authorized";


        return redirect('/packages');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
   
    public function index() 
    {
        $packages = Category::all();
        $latest_courses = Category::latest()->take(4)->get();
        return view('packages', compact('packages', 'latest_courses'));
    }
    
    /* 15:10 13-10-2020*/
     public function show($slug) 
     {
        $category_id = Category::where('slug', $slug)->first()->id;
        $paid_already = Subscription::where('user_id', Auth::id())->where('category_id',$category_id)->where('payment_done', 1)->exists();
        $pack= Category::where('slug','=', $slug)->firstOrFail();
        if($paid_already == true)
        {
            return redirect()->back();
        }
        if(Auth::check()) {return view('pack', compact('pack'));}
        return redirect('/register');
    }

    public function  payment(Request $request) 
    {
        $title = $request->input('title');
        $amount = $request->input('amount');
        $category_id = $request->input('category_id');
        $slug = $request->input('slug');

        $api = new Api(env('RAZOR_KEY'),env('RAZOR_SECRET'));
        $order = $api->order->create(array('receipt'=>'123', 'amount'=> $amount*100,'currency'=>'INR'));
        $orderId = $order['id'];

        $userId = Auth::id();


        $user_pay = new Subscription();

        $user_pay->title = $title;
        $user_pay->amount = $amount;
        $user_pay->payment_id = $orderId;
        $user_pay->user_id = $userId;
        $user_pay->category_id = $category_id;
        $user_pay->save();

        Session::put('order_id',$orderId);
        Session::put('amount', $amount);

        return redirect()->route('pack', ['slug' => $slug]);

    }

    public function pay(Request $request) 
    {
        $data = $request->all();
        $user = Subscription::where('payment_id', $data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_payment_id'];
        $user->save();
        return redirect('/success');
    }

    public function success() 
    {
        return view('success');
    }

    public function unsuccessful() 
    {
        return view('unsuccessful');
    }

}

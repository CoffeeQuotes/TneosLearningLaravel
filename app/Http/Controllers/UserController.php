<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Life;
use App\Category;
use App\Profile;
use App\Subscription;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
	public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) 
        {
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
           //After successfull authentication, notice how I return json parameters
            return response()->json(
              [
                'success' => true,
                'token' => $success,
                'user' => $user
              ]
            );
        } else {
       //if authentication is unsuccessfull, notice how I return json parameters
          return response()->json(
            [
              'success' => false,
              'message' => 'Invalid Email or Password',
            ], 401);
        }
    }
	public function register(Request $request)
    {
        $validator = Validator::make($request->all(), 
          [
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required',
          ]
      );
        if ($validator->fails()) 
        {
          return response()->json(
              [
              'success' => false,
              'message' => $validator->errors(),
              ], 401
        );
        }
        
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('appToken')->accessToken;
        
        return response()->json(
          [
            'success' => true,
            'token' => $success,
            'user' => $user
          ]
        );
    }

	public function logout(Request $res)
    {
      if  (Auth::user()) {
        $user = Auth::user()->token();
        $user->revoke();

        return response()->json(
          [
          'success' => true,
          'message' => 'Logout successfully'
          ]
        );
      } else {
        return response()->json(
          [
          'success' => false,
          'message' => 'Unable to Logout'
          ]
        );
      }
	 }
	 
   public function showlive() 
   {
		 $lives = Life::all();
		 return response()->json($lives)->header('Connection', 'keep-alive');	
   }

   public function showpackages() 
   {
     $packages = Category::latest()->get();
     return response()->json($packages)->header('Connection', 'keep-alive');
   }

   public function showliveslug(Request $request, $slug) 
   {  

      $live =Life::where('slug', $slug)->firstOrFail();
      return response()->json($live);
    }

   public function showliveboard(Request $request, $board) 
   {
     $lives = Life::where('board', $board)->get();
     return response()->json($lives)->header('Connection', 'keep-alive');
   }

   public function showprofile(Request $request, $id) 
   {
     
     $profile = Profile::where('user_id', $id)->firstOrFail();
     return response()->json($profile);
   }

   public function userpaidlive($userId, $slug) {
      // Getting Live based on slug
      $lives = Life::where('slug', $slug)->firstOrFail();
      // Category Slug
      $categorySlug = $lives->category_id;
      $categoryID = Category::where('slug', $categorySlug)->firstOrFail()->id;
      // Category ID
      $subscription = Subscription::where('user_id', $userId)->where('category_id',$categoryID)->first()['payment_done'];
      
      if($subscription == 1) {
        return response()->json($lives);
      }  

   } 

   public function userpaidlives($userId) {
     $subscription = Subscription::where('user_id', $userId)->where('payment_done',1)->firstOrFail();
     $categoryID = $subscription->category_id; // integer
     $categorySlug = Category::find($categoryID)->slug;
     $lives = Life::where('category_id', $categorySlug)->get();
     if($lives) {
       return response()->json($lives);
     } 
   } 
   
   public function livebyCategory($category) {
     $categoryID = Category::find($category);
     $slug = $categoryID->slug; 
     $lives = Life::where('category_id', $slug)->get();
     if($lives) {
       return response()->json($lives);
     }
   }

   public function userpaidcourselist($userId) {
     $subscription = Subscription::where('user_id', $userId)->where('payment_done',1)->get();
     return response()->json($subscription);
   }

   public function subscribed(Request $request) {
     
    $subscription = new Subscription;
    $subscription->title = $request->name;
    $subscription->amount = $request->amount;
    $subscription->payment_id = $request->order_id;
    $subscription->razorpay_id = $request->razorpay_id;
    $subscription->payment_done = 1;
    $subscription->category_id = $request->category_id;
    $subscription->user_id = $request->user_id;

    $subscription->save();

    return response()->json($subscription);
   }

   
}

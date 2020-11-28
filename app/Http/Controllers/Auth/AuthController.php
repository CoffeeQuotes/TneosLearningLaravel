<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // Attempt to login
	public function login(Request $request) 
	{
    	
    	// Validating the request
    	$request->validate([
    		'email' => 'required|string|email',
    		'password' => 'required|string',
    		//'remember_me' => 'boolean'
    	]); 

    	// Checking credentials
    	$credentials = request(['email','password']);
    	
    	if(!Auth::attempt($credentials))
    		return response()->json([
    			'message' => 'Unauthorized'
    		], 401);

    	// Personal Access Token
    	$user = $request->user();
    	$tokenResult = $user->createToken('Personal Access Token');
    	$token = $tokenResult->token;

    	// Remember me 
    	 if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
   	
    }

    // Register user

    public function register(Request $request) {

    	$request->validate([
    		'name' => 'required|string',
    		'email' => 'required|string|email|unique:users',
    		'password' => 'required|string'
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);

    	$user->save();

    	return response()->json([
    		'message' => 'Successfully created user!'
    	], 201);
    
    }
    
    // Logout 
	public function logout(Request $request) 
	{

    	$request->user()->token()->revoke();
    	return response()->json([
    		'message' => 'Successfully logged out'
    	
    	]);
    
    }

    // Getting User 
	public function user(Request $request) 
	{

    	return response()->json($request->user());
    }

}

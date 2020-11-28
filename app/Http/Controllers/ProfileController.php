<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //
    public function show() 
    {
        $currUserId = Auth::id();
        $user_profile = Profile::where('user_id', $currUserId)->firstOrFail();
//        dd($user_profile);
        return view('profile.profile', compact('user_profile'));
    }


    public function create() 
    {
        return view('profile.create-profile');
    }

    public function store(Request $request) 
    {

      $profile = new Profile;

       $profile = new Profile;
       $profile->firstname = $request->firstname;
       $profile->lastname = $request->lastname;
       $profile->mobile = $request->mobile;
       $profile->class = $request->class;
       $profile->user_id = Auth::id();
       $profile->school_name = $request->school_name;
       $image = $request->file('image');
       if($image) {
           $image_n = Str::random('10');
           $ext=strtolower($image->getClientOriginalExtension());
           $image_fn = $image_n.'.'.$ext;
           $path="profile/";
           $img_url=$path.$image_fn;
           $success=$image->move($path,$image_fn);

           if($success) {
               $profile->image=$img_url;
               $profile->save();
               return redirect('/profile/profile');
           } else {
               return redirect()->back();
           }
       }

    }

    public function edit($id)
    {
        $data=Profile::find($id);
        return view('profile.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->firstname = $request->firstname;
        $profile->lastname = $request->lastname;
        $profile->mobile = $request->mobile;
        $profile->class = $request->class;
        $profile->user_id = Auth::id();
        $profile->school_name = $request->school_name;
        $image = $request->file('image');
        if($image) {
            @unlink($request->Old_image);
            $image_n = Str::random('10');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_fn = $image_n.'.'.$ext;
            $path="profile/";
            $img_url=$path.$image_fn;
            $success=$image->move($path,$image_fn);

            if($success) {
                $profile->image=$img_url;
                $profile->save();
                return redirect('profile/profile');
            } else {
                return redirect()->back();
            }
        }  else {
            $con->image=$request->Old_image;
            $con->save();
            return redirect('/profile/profile');
        }

    }

}

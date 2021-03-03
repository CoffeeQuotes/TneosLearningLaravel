@extends('layouts.app')
@section('page_title', $user_profile->firstname.' Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.admin.sidebar')
        <div class="col-md-9 main-dashboard-area">
            <div class="container my-2 p-2 text-dark profile"  style="max-height: 200px!important;">
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-white text-capitalize p-4"
                            style="font-weight: 200; color:#fefefe!important;">Profile Page</h4>
                        <div class="btn-group my-2">
                            <a href="/profile/edit/{{$user_profile->id}}" class="btn m-4 itmeo_branding border-0 text-white"><i class="fa fa-pencil-square" aria-hidden="true"></i> &nbsp;Edit Profile</a>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="circle-avatar  shadow" style="background-image: url({{asset(Auth::user()->profile->image)}});  width: 50%;
                            max-width: 50%;
                            padding-top: 50%;">
                        </div>
    {{--                    <img class="rounded-circle" src="{{\Illuminate\Support\Facades\URL::to($user_profile->image)}}" width="180" height="180" alt="..." class="img-thumbnail">--}}
                    </div>
                    <hr>
                        <h4 class="p-4" style="font-weight: 200; color:#fefefe!important;">About Yourself</h4>
               </div>
                <div class="row">
                    <div class="col-12 sidebar-dashboard-secondary p-4">
                        <div class="row">
                            <div class="col-md-6">
                               <p class="text-white text-capitalize"> Name : {{  $user_profile->firstname }}&nbsp;{{  $user_profile->lastname }}</p>
                                <p class="text-white text-capitalize"> Mobile (Private to you) : {{  $user_profile->mobile }}</p>
                                <p class="text-white text-capitalize"> Class : {{  $user_profile->class }}th</p>
                                <p class="text-white text-capitalize"> School : {{  $user_profile->school_name }}</p>

                            </div>
                            <div class="col-md-6 text-right">
                                <img class="" src="{{asset('app-assets/img/bg-img/dashboard-study.webp')}}" class="img-responsive" style="max-height: 200px; height: auto;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--        <div class="row p-1">
            <div class="col-md-6 ">
                <h6>First Name </h6>
                <table class="table table-responsive bg-transparent shadow"><tr><td><img src="https://img.icons8.com/cute-clipart/64/000000/name.png"/></td>
                    <td><h6>{{  $user_profile->firstname }}</h6></td></tr></table>
            </div>


            <div class="col-md-6">
                <h6>Last Name </h6>
               <table class="table table-responsive bg-transparent shadow"><tr> <td><img src="https://img.icons8.com/fluent/48/000000/employee-card.png"/></td>
                   <td><h6>{{  $user_profile->lastname }}</h6></td></tr></table>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-md-6">
                <h6>Contact Number </h6>
               <table class="table table-responsive bg-transparent shadow"><tr> <td><img src="https://img.icons8.com/color/48/000000/google-mobile.png"/></td>
                <td>
                    <h6>{{  $user_profile->mobile }}</h6></td></tr></table>

            </div>


            <div class="col-md-6">
                <h6>Class </h6>
               <table class="table   table-responsive bg-transparent shadow"><tr> <td><img src="https://img.icons8.com/color/48/000000/class.png"/></td>
                   <td><h6>{{  $user_profile->class }}</h6></td></tr></table>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-md-6">
                <h6>School </h6>
              <table class="table  table-responsive bg-transparent shadow"><tr> <td> <img src="https://img.icons8.com/plasticine/100/000000/building.png"/></td>
                  <td><h6>{{  $user_profile->school_name }}</h6></td></tr></table>
            </div>
        </div>--}}
    </div>
    </div>
</div>

@endsection

@extends('layouts.app')
@section('page_title', $user_profile->firstname.' Profile')
@section('content')
    <div class="container  my-2 p-2 text-dark profile">
        <div class="row">
            <div class="col">
                <h2 class="title_profile">Profile Page</h2>
            </div>
        </div>
        <hr>
       <div class="btn-group my-2">
            <a href="/profile/edit/{{$user_profile->id}}" class="btn btn-info">Edit Profile</a>
            <a href="/home" class="btn btn-info">Home</a>
        </div>
        <div class="">
            <img src="{{\Illuminate\Support\Facades\URL::to($user_profile->image)}}" width="180" height="180" alt="..." class="img-thumbnail">
        </div>
        <div class="row p-1">
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
        </div>
    </div>


@endsection

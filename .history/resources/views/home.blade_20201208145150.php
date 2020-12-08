@extends('layouts.app')
@section('page_title','Dashboard')
@section('content')
<div class="container my-4">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
     <div class="container">
        <div class="row">
            <h4 class="text-dark">{{Auth::user()->name}}'s Dashboard</h4>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-3 col-sm-6 col-12">
            <a href="{{ route('packages') }}">
            <div class="card bg-primary px-2">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="https://img.icons8.com/fluent/48/000000/video.png"/>
                            </div>
                            <div class="media-body text-right" style="border-radius: 50px;
                            background: #007BFF;
                            box-shadow:  20px 20px 60px #0069d9,
                                         -20px -20px 60px #008dff;">
                                <h3>{{ $categories->count() }}</h3>
                                <span>Browse Our Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-warning px-2">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="https://img.icons8.com/emoji/48/000000/books-emoji.png"/>
                            </div>
                            <div class="media-body text-right" >
                                <h3>{{ $user_subscribed->count() }}</h3>
                                <span>Courses subscribed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-success px-2">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="https://img.icons8.com/fluent/48/000000/click-and-collect.png"/>
                            </div>
                            <div class="media-body text-right" >
                                <h3>{{ $user_purchased->count() }}</h3>
                                <span>Courses purchased</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-info px-2">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="https://img.icons8.com/color/48/000000/online-support.png"/>
                            </div>
                            <div class="media-body text-right" >
                                <h3>{{ $live_status->count() }}</h3>
                                <span>Teacher's Live</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2 p-2 pl-0">
        <div class="col-md-4">
            <div class="btn-group" role="group" aria-label="dashboard">
             {{-- Date 08/10/2020 10:40 am --}}
                @if($profile_status)
                    <a href="/profile/profile" class="btn btn-primary">Profile</a>
                @else
                    <a href="/profile/create" class="btn btn-primary">Edit Profile</a>
                @endif
                {{-- end --}}
                <a href="/packages" class="btn btn-primary">Courses</a>
                <a href="/lives" class="btn btn-primary">Learn</a>
            </div>
        </div>
    </div>
      <h2>Your Courses</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Course</th>
                <th scope="col">Browse</th>
            </tr>
            </thead>
            <tbody>
            @if($user_subs)
                @foreach($user_subs as $subs)
                    <tr>
                        <th scope="row">{{$subs->title}}</th>
                        <td> <a class="text-info" href="category/{{Str::slug($subs->title,"-")}}">{{$subs->title}}</a><br/></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <h2>Get Latest Courses Now!</h2>
        <span><a class="btn btn-primary" href="/packages">Browse Courses</a></span>
</div>

    <br/>
    <br/>

@endsection


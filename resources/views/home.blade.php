@extends('layouts.app')
@section('page_title','Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            {{--    Dashboard's Sidebar Menu Start   --}}
            @include('layouts.admin.sidebar')
            {{--Dashboard's Sidebar Menu End--}}
            <div class="col-md-9 main-dashboard-area" style="min-height: 100vh;">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <h4 class="text-white text-capitalize p-4"
                            style="font-weight: 200; color:#fefefe!important;">{{Auth::user()->name}}'s Dashboard</h4>
                    </div>
                </div>

                <div class="row justify-content-center m-2">
                    <div class="col-xl-3 col-sm-6 mb-4 col-12">
                        <a href="{{ route('packages') }}">
                            <div class="card ripe_malinka p-3 text-white border-0 shadow">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <img src="https://img.icons8.com/fluent/48/000000/video.png"/>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3 style="color: #fefefe!important;">{{ $categories->count() }}</h3>
                                                <span>Browse Our Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4 col-12">
                        <div class="card high_flight p-3 text-white border-0 shadow">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <img src="https://img.icons8.com/emoji/48/000000/books-emoji.png"/>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3 style="color: #fefefe!important;">{{ $user_subscribed->count() }}</h3>
                                            <span>Courses subscribed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4 col-12">
                        <div class="card smart_indigo  p-3 text-white border-0 shadow">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <img src="https://img.icons8.com/fluent/48/000000/click-and-collect.png"/>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3 style="color: #fefefe!important;">{{ $user_purchased->count() }}</h3>
                                            <span>Courses purchased</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4 col-12">
                        <div class="card teen_party  p-3 text-white border-0 shadow">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <img src="https://img.icons8.com/color/48/000000/online-support.png"/>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3 style="color: #fefefe!important;">{{ $live_status->count() }}</h3>
                                            <span>Teacher's Live</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-12">
                        <h4 class="text-white text-capitalize p-4"
                            style="font-weight: 200; color:#fefefe!important;">Your Courses</h4>
                        <div class="sidebar-dashboard-secondary p-4">

                            {{-- <div class="col-md-4">
                                 <div class="btn-group" role="group" aria-label="dashboard">
                                     --}}{{-- Date 08/10/2020 10:40 am --}}{{--
                                     @if($profile_status)
                                         <a href="/profile/profile" class="btn btn-primary">Profile</a>
                                     @else
                                         <a href="/profile/create" class="btn btn-primary">Edit Profile</a>
                                     @endif
                                     --}}{{-- end --}}{{--
                                     <a href="/packages" class="btn btn-primary">Courses</a>
                                     <a href="/lives" class="btn btn-primary">Learn</a>
                                 </div>
                             </div>--}}
                            <table class="table text-white table-borderless table-sm border-0 table-hover" style="font-weight: 300!important;">
                                <thead>
                                <tr>
                                    <th scope="col">Course</th>
                                    <th scope="col">Browse</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($user_subs)
                                    @foreach($user_subs as $subs)
                                        <tr class="rounded shadow">
                                            <td class="text-capitalize p-3 " scope="row">{{$subs->title}}</td>
                                            <td>
                                                <div class="rounded-circle malibu_beach shadow" style="width: 30px; height: 30px; cursor: pointer;">
                                                    <a class=""
                                                   href="category/{{Str::slug($subs->title,"-")}}"  ><img src="https://img.icons8.com/color/48/000000/circled-right-2--v1.png"></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


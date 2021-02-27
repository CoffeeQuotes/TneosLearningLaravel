@extends('layouts.app')
@section('page_title','Dashboard')
@push('styles')
    <style>
        .latest-heading {
            font-size: 1em;
        }
    </style>
@endpush
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
                            style="font-weight: 200; color:#fefefe!important;">Latest Lectures</h4>
                    </div>
                </div>
            <div class="row">
                @foreach($latest_Lives as $latest_live)
                <div class="col-md-3">
                    <a href="/lives/{{ $latest_live->slug}}">
                    <div class="card shadow rounded border-0 sidebar-dashboard-secondary">
                        <img class="card-img-top rounded p-1" src="{{ Voyager::image( $latest_live->image ) }}" alt="" >

                        <div class="card-body">
                            <h6 class="latest-heading text-uppercase p-2 m-0 card-title" style="font-weight: 100; color: #9163cb;">
                                {{$latest_live->title}}
                            </h6>
                            <div class="d-flex mt-0 justify-content-between">
                                <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$latest_live->board}}</span>
                                <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$latest_live->subject}}</span>
                                <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$latest_live->class}}th class</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    </div>
            @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <h4 class="text-white text-capitalize p-4"
                        style="font-weight: 200; color:#fefefe!important;">Latest Courses</h4>
                </div>
            </div>
            <div class="row">
                @foreach($latest_courses as $course)
                    <div class="col-md-3">
                        <a href="/category/{{ $course->slug}}">
                        <div class="card shadow rounded border-0 sidebar-dashboard-secondary">
                            <img class="card-img-top rounded p-1" src="{{ Voyager::image( $course->image ) }}" alt="" >

                            <div class="card-body">
                                <h6 class="latest-heading text-uppercase p-2 m-0 card-title" style="font-weight: 100; color: #9163cb;">
                                    {{$course->name}}
                                </h6>
                                <div class="d-flex mt-0 justify-content-between">
                                    <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$course->board}}</span>
                                    <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$course->subject}}</span>
                                    <span class="badge badge-pill plum_plate text-white   m-1 border-0 font-weight-lighter">{{$course->class}}th class</span>
                            </div>
                        </div>
                    </div>
                        </a>
                    </div>
                @endforeach

        </div>
    </div>
    </div>
</div>
@endsection

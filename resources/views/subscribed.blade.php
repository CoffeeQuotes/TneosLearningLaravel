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
                                style="font-weight: 200; color:#fefefe!important;">{{Auth::user()->name}}'s Courses</h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($course_subs as $subs)
                            <div class="col-md-4">
                               <div class="rounded border-0 card p-1 shadow sidebar-dashboard-secondary m-2" style="width: 18rem;">
                                   <img  class="card-img-top rounded" src="/storage/{{$subs->category->image}}" alt="{{$subs->category->name}}">
                                   <div class="card-body">
                                       <h6 class="card-title p-2 pb-0 mb-0 text-uppercase" style="font-weight: 100; color: #9163cb;"> {{$subs->category->name}}</h6>
                                       <p class="card-text text-white" style="color: #eccaff!important;">Course Started: <span style="color: #a5adff;">{{$subs->category->created_at->diffForHumans()}}</span></p>
                                       {{-- {!! $subs->category->description !!}--}}
                                       <p style="background: none!important; color: #eccaff!important;">Subject: <span style="color: #a5adff;">{{$subs->category->subject}}</span> Board: <span style="color: #a5adff;"> {{$subs->category->board}}</span>  class: <span style="color: #a5adff;"> {{$subs->category->class}}th</span></p>
    {{--                                   <a href="#" class="btn my-2 new_retrowave btn-sm pull-right border-0 shadow text-white">Continue</a>--}}
                                   </div>
                                   <div class="card-footer">
                                       <small class=""><span style="color: #a5adff;">Last updated {{$subs->category->updated_at->diffForHumans()}}</small>
                                       <a href="category/{{$subs->category->slug}}" class="btn btn-sm rounded-pill pull-right border-0 text-white new_retrowave">Continue</a>
                                   </div>
                               </div>

                            </div>
                        @endforeach
                    </div>
            </div>

        </div>
    </div>
@endsection

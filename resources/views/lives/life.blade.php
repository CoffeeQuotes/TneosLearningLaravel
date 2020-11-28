@extends('layouts.app')
@section('page_title',  $live->title)
@section('content')

    <div class="container-fluid pt-1 bg-info page-body-wrapper">
    <div class="row">
        <div class="col-md-9">
            <div id="main">
                {{--            <button class="openbtn fixed-bottom" onclick="openNav()">&#9776; Open Sidebar</button>--}}
                <div class="embed-responsive embed-responsive-16by9">
                    {!! $live->embed_code !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-2 mt-3" style="width: 15rem;">
                <img src="{{Voyager::image($live->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="card-title ml-1 font-weight-bold" style="font-size: 4vh;">{{ $live->title }}</span>
                    <span class="font-weight-bold">{!! $live->description !!}</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Board</strong> : {{ $live->board }} </li>
                    <li class="list-group-item"><strong>Class</strong> : {{ $live->class }}</li>
                    <li class="list-group-item"><strong>Subject</strong> : {{ $live->subject }}</li>
                </ul>
                <div class="card-body">
{{--                    <div class="btn-group" role="group" aria-label="Basic example">--}}
                        <a href="/home" class="card-link btn btn-warning btn-block">Dashboard</a>
{{--                    </div>--}}
                </div>
            </div>

        </div>
    </div>

    </div>
@endsection

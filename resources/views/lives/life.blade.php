@extends('layouts.app')
@section('page_title',  $live->title)
@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>

    </style>
@endpush
@section('content')

    <div class="container-fluid page-body-wrapper" style="background-image: url({{asset('app-assets/img/core-img/vintage-wallpaper.webp')}})">
    <div class="row">
        <div class="col-12  d-flex text-center perfect_blue justify-content-between shadow p-2 text-white font-weight-bold" style="letter-spacing: 0.1em;">
            <div class="text-uppercase text-white">
                {{ $live->board }}
            </div>
            <div class="text-white text-capitalize">
               <span class="text-warning"> {{ $live->subject }} - </span> {{$live->title}}
            </div>
            <div class="text-uppercase text-white">
                {{ $live->class }}th class
            </div>
        </div>
        <div class="col-md-9">
            <div id="main">
                {{--            <button class="openbtn fixed-bottom" onclick="openNav()">&#9776; Open Sidebar</button>--}}
                <div class="embed-responsive perfect_blue embed-responsive-16by9">
                    {!! $live->embed_code !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center perfect_blue mt-2 rounded border-0 p-2 justify-content-between">
                <h6 class="font-weight-light mt-2 text-white text-uppercase" style="letter-spacing: 0.1em;"> <i class="fa fa-play-circle"></i> Now Playing</h6>
            </div>
            <div class="card perfect_blue p-2 mt-3" style="width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{Voyager::image($live->image)}}" class=" mt-2 shadow" alt="{{ $live->title }}">
                    </div>
                <div class="col-md-8">
                    <div class="card-body mt-2">
                        <span class="card-title text-white" style="letter-spacing: 0.1em;">{{ $live->title }}</span>
    {{--                    <span class="font-weight-bold">{!! $live->description !!}</span>--}}
                    </div>
               {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Board</strong> : {{ $live->board }} </li>
                    <li class="list-group-item"><strong>Class</strong> : {{ $live->class }}</li>
                    <li class="list-group-item"><strong>Subject</strong> : {{ $live->subject }}</li>
                </ul>--}}
                </div>
            </div>
            </div>
            <div class="card perfect_blue p-2 mt-3" style="width: 100%;">
                <a href="/home" class="card-link pull-right btn btn-sm teen_party border-0 rounded shadow text-white">Dashboard</a>
            </div>
        </div>
    </div>

    </div>
@endsection

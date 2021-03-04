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
                <div class="row g-0">
                    <div class="col-12">
                        <h6 class="text-white mt-2 font-weight-light" style="letter-spacing: 0.1em;">{{$live->title}}</h6>
                    </div>
                    <div class="col-4" style="color: #abc4ff;">Uploaded {{$live->created_at->diffForHumans()}}</div>
                    <div class="col-8"></div>
                </div>
                <hr style="background-color: #abc4ff;">
                <div class="row">
                    <div class="col-md-1 col-sm-3">
                        <div class="rounded-circle plum_plate text-center shadow" style="height: 66px; width: 66px;">
                            <span class="mx-auto my-auto text-white font-weight-bold" style="line-height: 66px; font-size: 1.6em;">{{$live->class}}</span>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-9">
                       <h6 class="font-weight-light text-uppercase text-white" style="line-height: 60px; letter-spacing: 0.1em;"> {{$live->board}} Board | Subject -  {{$live->subject}}</h6>
                    </div>
                    <div class="offset-1 text-justify bg-white p-4 rounded col-11" >
                        {!! $live->description !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-100">
            <div class="text-center perfect_blue mt-2 rounded border-0 p-2 justify-content-between">
                <h6 class="font-weight-light mt-2 text-white text-uppercase" style="letter-spacing: 0.1em;"> <i class="fa fa-play-circle"></i> Now Playing</h6>
            </div>
            <div class="card slick_carbon border-success mt-3" style="width: 100%;">
                <img src="{{asset('app-assets/img/bg-img/source.gif')}}" class="card-img-top"  alt="">
                <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.2);  backdrop-filter: saturate(180%) blur(2px)">
                <div class="row g-0 p-2">
                    <div class="col-4">
                        <img src="{{Voyager::image($live->image)}}" class=" m-2 shadow" alt="{{ $live->title }}">
                    </div>
                <div class="col-8">
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
            </div>
            <div class="card border-0 perfect_blue p-2 mt-3" style="width: 100%;">
                <a href="/home" class="card-link pull-right btn btn-sm teen_party border-0 rounded shadow text-white">Dashboard</a>
            </div>
            <div class="text-center perfect_blue mt-2 rounded border-0 p-2 justify-content-between">
                <h6 class="font-weight-light mt-2 text-white text-uppercase" style="letter-spacing: 0.1em;"> <i class="fa fa-file-video-o"></i> Other Videos</h6>
            </div>
            @foreach($videos as $video)
                <a href="{{route('liveshow', $video->slug)}}">
                <div class="card perfect_blue p-2 mt-3" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{Voyager::image($video->image)}}" class=" mt-2 shadow" alt="{{ $video->title }}">
                        </div>
                        <div class="col-8">
                            <div class="card-body mt-2">
                                <span class="card-title text-white" style="letter-spacing: 0.1em;">{{ $video->title }}</span>
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
                </a>
            @endforeach
            <div class="text-center perfect_blue mt-2 rounded border-0 p-2 justify-content-between">
                <h6 class="font-weight-light mt-2 text-white text-uppercase" style="letter-spacing: 0.1em;"> <i class="fa fa-book"></i> Study Material</h6>
            </div>
            @foreach($materials as $material)
                <a href="{{$material->link}}">
                    <div class="card perfect_blue p-2 mt-3" style="width: 100%;">
                        <div class="card-body mt-2">
                            <span class="card-title text-white" style="letter-spacing: 0.1em;">{{ $material->title }}</span>
                            {{--                    <span class="font-weight-bold">{!! $live->description !!}</span>--}}
                        <div class="badge teen_party text-white badge-pill px-2" style="letter-spacing: 0.1em;">{{$material->type}}</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    </div>
@endsection

@extends('layouts.app')
@section('page_title', $course->name)
@section('page_keywords',"" )
@section('page_description',"" )
@section('og_image', "")
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        body {

            font-smooth: always;
            letter-spacing: 0.1em;
            background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);
        }

        .description p {
            color: #000000 !important;
            letter-spacing: 0.1em;
        }

        .description * {
            color: #000000 !important!important;
        }

        .circle {
            /*background: gold;*/
            width: 40px;
            height: 40px;
            color: #fefefe;
            border-radius: 50%;
            display: flex; /* or inline-flex */
            align-items: center;
            justify-content: center;
        }
    </style>
@endpush
@section('content')

    <div class="container-fluid p-0">
        <div class="border-0 m-0 p-3 premium_white" style="border: 0!important;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img class="p-0 m-0 img-thumbnail" src="{{ Voyager::image( $course->image ) }}"
                             alt="{{$course->name}}">
                    </div>
                    <div class="col-md-8">
                        @if($cat_live)
                            <div class="container-fluid">
                                <div class="row text-left">
                                    <div class="col-12">
                                        <h2 class="text-uppercase text-justify text-white d-none d-sm-none d-md-block d-lg-block d-xl-block"
                                            style="font-weight: 100; color: #000000!important;">{{$course->name}}</h2>
                                        <h5 class="text-uppercase text-justify text-white d-md-none d-lg-none"
                                            style="font-weight: 100; color: #000000!important;">{{$course->name}}</h5>
                                    </div>
                                    <div class="col-md-4 py-2">
                                        <span class="text-warning" style="letter-spacing: 0.1em;"><span
                                                class="fa fa-university pl-2"></span> Board -</span> <span
                                            class="ripe_malinka p-1 m-2 rounded shadow text-white">
                                            {{$course->board}}
                                        </span>
                                    </div>
                                    <div class="col-md-4 py-2">
                                        <span class="text-warning" style="letter-spacing: 0.1em;"><span
                                                class="fa fa-graduation-cap pl-2"></span> Class - </span> <span
                                            class="ripe_malinka p-1 m-2 rounded shadow text-white">
                                            {{$course->class}}th
                                        </span>
                                    </div>
                                    <div class="col-md-4 py-2">
                                        <span class="text-warning" style="letter-spacing: 0.1em;"><span
                                                class="fa fa-book pl-2"></span> Subject - </span> <span
                                            class="ripe_malinka p-1 m-2 rounded shadow text-white">
                                            {{$course->subject}}
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <div
                                            class="my-3 description"
                                            style="color: #fefefe!important!important; ">{!! html_entity_decode(\Illuminate\Support\Str::limit($course->description, 150, $end='...')) !!}</div>
                                        <p class="text-dark"><span class="fa fa-file-video-o pl-2"></span> This course
                                            has a total {{$cat_live->count()}} videos.</p>
                                        <p class="text-dark"><span class="fa fa-clock-o pl-2"></span> Last Updated
                                            at {{$course->updated_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row  mb-4">
            <div class="col-12 p-3">
                    <span class="display-4 ml-2 font-weight-lighter featured-live-heading">Course Content &nbsp; <img
                            src="https://img.icons8.com/color/48/000000/youtube-live.png"/></span>
            </div>
            <div class="col-12 p-3">
                <p class="ml-2">This course has total <span>{{$cat_live->count()}} videos.</span></p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row rounded bg-white shadow-lg my-4 mx-2 p-3">
            @foreach($cat_live as $life)
                <div class="p-2">
                    <div class="card shadow life-card mb-4 border-0" style="width: 16rem; padding-bottom: 20px;">
                        <a href="/lives/{{ $life->slug }}">
                            @if ($life->status === '1')
                                <div class="card-img-overlay">
                                    <span class="badge badge-danger live-badge pull-right">Live</span>
                                </div>
                            @endif
                            <img class="card-img-top" style="max-height: 200px; max-width: 320px;"
                                 src="{{ Voyager::image( $life->image ) }}"/>

                            <div class="card-body descripiton-card">
                                {{-- <div class="d-flex justify-content-between text-justify p-2">
                                  <span class="badge badge-danger p-1 px-2 border border-dark">{{$life->board}}</span>
                                  <span class="badge badge-warning p-1 px-2 border border-dark">{{$life->class}}'th class</span>
                                  <span class="badge badge-info p-1 px-2 border border-dark">{{$life->subject }}</span>
                                </div> --}}
                                <div class="d-flex justify-content-start">
                                    <div class="row mb-2">
                                        <div class="col-3">
                                            <div class="circle m-1  high_flight"
                                                 style="min-height: 60px; min-width: 60px;">
                                                {{-- <svg width="50" height="50">
                                                     <circle cx="25" cy="25" r="20" fill="#17A2B8"/>
                                                     <text fill="#ffffff" font-size="12"  x="15" y="30">--}}
                                                {{$life->class}}th
                                                {{--      </text>
                                                  </circle>
                                                  </svg>--}}
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="card-title mb-0 videotitle p-1"
                                                 data-toggle="tooltip" data-placement="top" style="color: #72a0fe!important;"
                                                 title="{{$life->title}}">{{\Illuminate\Support\Str::limit($life->title, 28, $end='...')}}</div>
                                            <div class="ml-1 d-flex flex-wrap content-justify-between">
                                                <p class="p-0 m-0 mr-auto"
                                                   style="font-size: 11px; color: #73726c;">{{$life->board}}</p>
                                                <p class="p-0 mx-2 m-0"
                                                   style="font-size: 9px; color: #73726c;">{{$life->subject}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="rounded-circle high_flight">
                                        --}}{{-- <svg width="50" height="50">
                                             <circle cx="25" cy="25" r="20" fill="#17A2B8"/>
                                             <text fill="#ffffff" font-size="12"  x="15" y="30">--}}{{--
                                             {{$life->class}}th
                                       --}}{{--      </text>
                                         </circle>
                                         </svg>--}}{{--
                                     </div>--}}
                                    {{-- <div>
                                     <div class="card-title mb-0 videotitle text-info p-1" data-toggle="tooltip" data-placement="top" title="{{$life->title}}">{{\Illuminate\Support\Str::limit($life->title, 28, $end='...')}}</div>
                                     <div class="ml-1 d-flex flex-wrap content-justify-between">
                                         <p class="p-0 m-0 mr-auto" style="font-size: 11px; color: #73726c;">{{$life->board}}</p>
                                         <p class="p-0 mx-2 m-0" style="font-size: 9px; color: #73726c;">{{$life->subject}}</p>
                                     </div>
                                     <p class="p-0 mx-1 m-0"  style="font-size: 9px; color: #73726c;">{{$life->created_at->diffForHumans()}}</p>
                                 </div>--}}
                                </div>
                            <!--{!! Str::of($life->description)->limit(140,'(...)') !!}-->
                            </div>
                        </a>
                    </div>
                </div>
                {{-- @endif --}}
            @endforeach

        </div>
    </div>
    {{-- {{ $cat_live->links() }} --}}
    </div>
@endsection

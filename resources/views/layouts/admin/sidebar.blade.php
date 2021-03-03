@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        body {
            max-width: 100%;
            text-overflow: clip;
            letter-spacing: 1px;
            font-smooth: 2em;
        }

        .sidebar-dashboard-menu {
            background-color: #202442;
        }

        .main-dashboard-area {
            background-color: #2b3058;
        }

        .sidebar-dashboard-secondary {
            background-color:  rgba(43,48,74,0.95);  /* #25294a; */
            backdrop-filter: blur(10px) saturate(180%);
        }
        div.circle-avatar{
            /* make it responsive */
            max-width: 100%;
            width:100%;
            height:auto;
            display:block;
            /* div height to be the same as width*/
            padding-top:100%;

            /* make it a circle */
            border-radius:50%;

            /* Centering on image`s center*/
            background-position-y: center;
            background-position-x: center;
            background-repeat: no-repeat;

            /* it makes the clue thing, takes smaller dimension to fill div */
            background-size: cover;

            /* it is optional, for making this div centered in parent*/
            margin: 0 auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        label {
            color: #fefefe!important;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            /*border: 1px solid #ccc;*/
            display: inline-block;
            /*padding: 6px 12px;*/
            cursor: pointer;
        }
    </style>
@endpush
<div class="col-md-3 sidebar-dashboard-menu shadow" style="min-height: 100vh;" >
    <div class="row m-4">
        <div class="col-4">
            <div class="circle-avatar shadow" style="background-image: url({{asset(Auth::user()->profile->image ?? "https://i.pravatar.cc/300
")}})">
                {{--                            <img class="rounded-circle z-depth-2" src="{{asset(Auth::user()->profile->image)}}" alt="">--}}
            </div>
        </div>
        <div class="col-8 text-capitalize my-auto ">
            <h6 class=" ml-3 p-2 pt-2 font-weight-lighter text-white"
                style="font-weight: 200;">{{Auth::user()->name}}</h6>
        </div>
    </div>
    <div class="row m-4">
        <div class="col-12 sidebar-dashboard-secondary rounded p-2">
            {{-- Date 08/10/2020 10:40 am --}}
            <ul>
                <li><a href="{{route('home')}}"
                       class="btn btn-sm btn-block new_life my-2 shadow border-0 text-white"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp; Dashboard</a>
                </li>
                <li><a href="/profile/profile"
                       class="btn btn-sm btn-block malibu_beach my-2 shadow border-0 text-white"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; Profile</a>
                </li>
                <li><a href="{{route('subscribed_course')}}"
                       class="btn btn-sm btn-block phoenix_start my-2 shadow border-0 text-white"><i class="fa fa-graduation-cap" aria-hidden="true"></i> &nbsp; Courses</a>
                </li>
                <li><a href="{{route('learn')}}"
                       class="btn btn-sm btn-block october_silence my-2 shadow border-0 text-white"><i class="fa fa-leanpub" aria-hidden="true"></i> &nbsp; Learn</a>
                </li>
            </ul>
        </div>
        <div class="text-center mt-100 col-12">
            <span class=" text-center"><a class="sugar_lollipop text-white btn border-0 btn-block" href="/packages"><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Browse Courses</a></span>
        </div>
    </div>
</div>

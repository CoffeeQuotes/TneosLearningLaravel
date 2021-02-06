<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <meta name="description" content="{{setting('site.description')}}">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="{{ setting('site.title') }}">
    <meta property="og:image" content="{{asset("app-assets/img/core-img/all-in-one.png")}}">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:site_name" content="Tneos Eduloutions Ltd.">
    <meta property="og:locale" content="en_US">
    <!-- Next tags are optional but recommended -->
    <meta property="og:image:width" content="833">
    <meta property="og:image:height" content="1185">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content"{{Request::url()}}">
    <meta name="twitter:creator" content="@TneosL">
    <meta name="twitter:url" content="{{Request::url()}}">
    <meta name="twitter:title" content="{{ setting('site.title') }}">
    <meta name="twitter:description" content="{{setting('site.description')}}">
    <meta name="twitter:image" content="{{asset("app-assets/img/core-img/all-in-one.png")}}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    {{--    <title>{{ config('app.name', 'Laravel') }} </title>--}}
    <title>@yield('page_title', setting('site.title') . " - " . setting('site.description'))</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="{{asset("app-assets/img/core-img/favicon.ico")}}">
    <link rel="canonical" href="{{Request::url()}}">
    <!-- Core Stylesheet -->
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset("app-assets/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Push a style dynamically from a view -->
    @stack('styles')
<!-- Script Tags -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('head-scripts')
    @laravelPWA
</head>

<body>
<!-- ##### Preloader ##### -->
<!-- <div id="preloader">
    <i class="circle-preloader"></i>
</div> -->
<!-- ##### Header Area Start ##### -->

<!--<header class="header-area" style=" background-image: url({{asset("app-assets/img/core-img/small-banner.png")}});   background-size: cover;  background-color: #333333; background-blend-mode: overlay; "> -->
<header class="header-area" style="background-color: #000000;">
    <!-- Top Header Area -->
{{--    <div class="top-header">--}}
{{--        <div class="container-fluid h-100">--}}
{{--            <div class="row h-100">--}}
{{--                <div class="col-12 h-100">--}}
{{--                    <div class="header-content h-100 d-flex align-items-center justify-content-between">--}}
{{--                        <div class="academy-logo">--}}
{{--                            --}}{{-- <a href="index.html"><img src="{{asset("app-assets/img/core-img/brand2.png")}}" alt=""></a> --}}
{{--                            <a href="/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid"--}}
{{--                                             style="max-width: 40%;" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="login-content">--}}
{{--                            <div id="app">--}}
{{--                                <nav class="navbar navbar-expand-md navbar-light" style="--}}
{{--                                     border-radius: 50px;--}}
{{--                                     <!--background: #152188;-->--}}
{{--                                     --}}{{--box-shadow:  20px 20px 60px #121c74, -20px -20px 60px #2abbdf !important;--}}
{{--                                     z-index: 1000; --}}
{{--                                    ">--}}
{{--                                    <div class="container">--}}
{{--                                        <a class="navbar-brand brand-desc d-none  d-sm-none d-md-block d-xl-block d-lg-block"--}}
{{--                                           href="{{ url('/freelivevideo') }}">--}}

{{--                                            {{ setting('site.description') }}--}}
{{--                                        </a>--}}
{{--                                        <button class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--                                                data-target="#navbarSupportedContent"--}}
{{--                                                aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                                                aria-label="{{ __('Toggle navigation') }}">--}}
{{--                                            <span class="navbar-toggler-icon"></span>--}}
{{--                                        </button>--}}

{{--                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                                            <!-- Left Side Of Navbar -->--}}
{{--                                            <ul class="navbar-nav mr-auto">--}}

{{--                                            </ul>--}}

{{--                                            <!-- Right Side Of Navbar -->--}}
{{--                                            <ul class="navbar-nav ml-auto">--}}
{{--                                                <!-- Authentication Links -->--}}
{{--                                                @guest--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link text-warning"--}}
{{--                                                           href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                                    </li>--}}
{{--                                                    @if (Route::has('register'))--}}
{{--                                                        <li class="nav-item">--}}
{{--                                                            <a class="nav-link text-warning"--}}
{{--                                                               href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                                        </li>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <li class="nav-item dropdown">--}}
{{--                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"--}}
{{--                                                           role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                                                           aria-expanded="false" v-pre>--}}
{{--                                                            {{ Auth::user()->name }}--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-right"--}}
{{--                                                             aria-labelledby="navbarDropdown">--}}
{{--                                                            <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>--}}

{{--                                                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                                               onclick="event.preventDefault();--}}
{{--                                                                                 document.getElementById('logout-form').submit();">--}}
{{--                                                                {{ __('Logout') }}--}}
{{--                                                            </a>--}}


{{--                                                            <form id="logout-form" action="{{ route('logout') }}"--}}
{{--                                                                  method="POST" class="d-none">--}}
{{--                                                                @csrf--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                @endguest--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </nav>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--       --}}
{{--    </div>--}}
@include('layouts.includes.partials.navbar')
<!-- Calling Info -->
    {{--    <div class="calling-info">--}}
    {{--        <div class="call-center">--}}
    {{--            <a href="tel:+91{{setting('site.customer_care')}}"><i class="icon-telephone-2"></i>--}}
    {{--                <span>(+91) {{setting('site.customer_care')}}</span></a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    </nav>
    </div>
    </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

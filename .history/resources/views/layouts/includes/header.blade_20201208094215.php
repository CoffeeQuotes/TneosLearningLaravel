<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{setting('site.description')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
{{--    <title>{{ config('app.name', 'Laravel') }} </title>--}}
    <title>@yield('page_title', setting('site.title') . " - " . setting('site.description'))</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset("app-assets/img/core-img/favicon.ico")}}">

    <!-- Core Stylesheet -->
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset("app-assets/style.css")}}">

    @laravelPWA
</head>

<body>
    <!-- ##### Preloader ##### -->
    <!-- <div id="preloader">
        <i class="circle-preloader"></i>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                {{-- <a href="index.html"><img src="{{asset("app-assets/img/core-img/brand2.png")}}" alt=""></a> --}}
                            <a href="/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style="max-width: 40%;" alt=""></a>
                            </div>
                            <div class="login-content">
                                <div id="app">
                                    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="
                                     border-radius: 50px;
                                     background: #152188;
                                     box-shadow:  20px 20px 60px #121c74, -20px -20px 60px #18269c !important;
                                     z-index: 1000;
                                     ">
                                        <div class="container">
                                            <a class="navbar-brand brand-desc d-none  d-sm-none d-md-block d-xl-block d-lg-block" href="{{ url('/freelivevideo') }}">

                                                {{ setting('site.description') }}
                                            </a>
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>

                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <!-- Left Side Of Navbar -->
                                                <ul class="navbar-nav mr-auto">

                                                </ul>

                                                <!-- Right Side Of Navbar -->
                                                <ul class="navbar-nav ml-auto">
                                                    <!-- Authentication Links -->
                                                    @guest
                                                        <li class="nav-item">
                                                            <a class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link text-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="nav-item dropdown">
                                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }}
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                 <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>

                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>


                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endguest
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.includes.partials.navbar')
    </div>
<!-- Calling Info -->
<div class="calling-info">
    <div class="call-center">
        <a href="tel:+91{{setting('site.customer_care')}}"><i class="icon-telephone-2"></i> <span>(+91) {{setting('site.customer_care')}}</span></a>
    </div>
</div>
</nav>
</div>
</div>
</div>
</header>
<!-- ##### Header Area End ##### -->

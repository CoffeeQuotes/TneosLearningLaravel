@extends('layouts.app')
@section('page_title','Welcome, Join Tneos Eduloution')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        @media (min-width: 768px) and (max-width: 991px) {
            /* Show 4th slide on md if col-md-4*/
            .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }

        @media (min-width: 576px) and (max-width: 768px) {
            /* Show 3rd slide on sm if col-sm-6*/
            .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -50%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }

        @media (min-width: 576px) {
            .carousel-item {
                margin-right: 0;
            }

            /* show 2 items */
            .carousel-inner .active + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be also positioned for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        /* MD */
        @media (min-width: 768px) {
            /* show 3rd of 3 item slide */
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* right or prev direction */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        /* LG */
        @media (min-width: 991px) {
            /* show 4th item */
            .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }

            /* Show 5th slide on lg if col-lg-3 */
            .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -25%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* right or prev direction //t - previous slide direction last item animation fix */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }


        #brands-carousel {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        #brands-carousel .brand-images {
            height: 90px;
            width: auto;
            margin: 15px;
        }

        @media (min-width: 992px) {
            #brands-carousel .brand-images {
                height: 115px;
            }
        }

        #brands-carousel .carousel-item {
            border-radius: 0.25rem;
        }

        #brands-carousel .carousel-item:hover {
            background-color: #F3F3F3;
        }

        #brands-carousel .brands-intro {
            height: 100px;
            width: 100%;
            overflow: hidden;
            padding: 0.25rem 0.5rem;
            color: #6C757D;
            border-radius: 0.25rem;
            text-align: center;
        }

        @media (min-width: 992px) {
            #brands-carousel .brands-intro {
                padding: 0.5rem 1rem;
            }
        }

        #brands-carousel .brands-intro p {
            margin: 0;
            font-size: 1rem;
            line-height: 1.2;
        }

        #brands-carousel .carousel-control-next,
        #brands-carousel .carousel-control-prev {
            top: calc(50% - 0.75rem);
            bottom: calc(50% - 0.75rem);
            width: 2rem;
            opacity: 0.5;
            transition: all 1s ease;
        }

        @media (min-width: 576px) {
            #brands-carousel .carousel-control-next,
            #brands-carousel .carousel-control-prev {
                width: 3rem;
            }
        }

        #brands-carousel .carousel-control-next:hover,
        #brands-carousel .carousel-control-prev:hover {
            opacity: 0.66;
            transform: scale(1.1);
        }

        #brands-carousel .carousel-control-next {
            right: 0;
        }

        @media (min-width: 576px) {
            #brands-carousel .carousel-control-next {
                right: -2rem;
            }
        }

        #brands-carousel .carousel-control-prev {
            left: 0;
        }

        @media (min-width: 576px) {
            #brands-carousel .carousel-control-prev {
                left: -2rem;
            }
        }

        #brands-carousel .carousel-control-next-icon,
        #brands-carousel .carousel-control-prev-icon {
            height: 1rem;
            width: 1rem;
            content: "";
            border-style: solid;
            border-width: 2px 2px 0 0;
            border-color: #000;
            display: inline-block;
            background-image: none;
        }

        #brands-carousel .carousel-control-next-icon {
            transform: rotate(45deg);
        }

        #brands-carousel .carousel-control-prev-icon {
            transform: rotate(-135deg);
        }
        @media screen and (max-width: 600px) {
            .mt-600-100 {
                margin-top: 5.6rem;
            }
            .mt-600-none {
                margin-top: 1rem!important;
                font-weight: 520!important;
                font-size: 1.4rem!important;
            }
            .mb-600-100 {
                margin-bottom: 5.6rem;
            }

            .footer-600-pos {
                position: relative !important;
                top: -45px !important;
            }
        }
    </style>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-skyblue.min.css"
          integrity="sha256-iKLupyKsBxuiVANiNvCu9m7yHijYpoFheW1dgHB92us=" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.4.6/dist/css/splide-extension-video.min.css"
          integrity="sha256-nZJWefZxHmYJe1K2TFC2GxGaAlque1b6EqZbIcxE+hI=" crossorigin="anonymous">
@endpush
@push('head-scripts')

@endpush
@section('content')
    <!-- ##### Hero Area Start ##### -->
    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background: #FDAF52;  outline: 0!important; border: 0; position: absolute; top: 660px; z-index: 2000;">--}}
    {{--        Hey ðŸ˜‹, We have <br/>Something For you!  </button>--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: #FDAF52;">
                <button type="button" class="close p-1" style="width:20px!important;" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container"
                     style="background-image: url({{asset("app-assets/img/core-img/child-book.png")}}); backround-position: center center;  background-repeat: no-repeat;  background-size: cover;">
                    <div class="row">
                        <div class="col">
                            <h6 class="modal-title py-4 pl-1" id="exampleModalCenterTitle text-dark"
                                style="color: #222222; font-weight: bold;">Tneos Learning App<img
                                    src="https://twemoji.maxcdn.com/v/12.1.3/72x72/1f929.png" class="emoji" width="30"
                                    height="30"></h6>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>

                            <span class="ml-5 mt-5"><a
                                    href="https://play.google.com/store/apps/details?id=com.tneos.tneos_eduloution">
                        <img src="{{asset("app-assets/img/core-img/google-play-badge.png")}}"
                             class="img-responsive mt-5 pt-5"/></a></span>
                        </div>
                        <div class="col">
                            <img class="img-responsive ml-2" src="{{asset("app-assets/img/core-img/screenshot.png")}}"/>
                            <blockquote class="blockquote">
                                <p class="mb-0"><q> Best app for academy </q></p>
                                <footer class="blockquote-footer"><cite title="Source Title"
                                                                        style="color: rgb(6, 103, 86);">Jain Morg</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Snowfall Area

     <!--<div id="SnowFall"></div>-->

     <section class="hero-area" style="background-image: url({{asset("app-assets/img/core-img/tneos-site-hero.png")}});
       background-position: center center;
     background-repeat: no-repeat;  background-size: cover;">

     <section class="hero-area" style="background: #3c0e8d;  /* fallback for old browsers */
     background: -webkit-linear-gradient(to bottom, #3f216a, #3C108A);  /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to bottom, #3f216a, #3c0e8d); /* W3C, IE 60+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ min-height: 62vh;   background-color: #2ebf91; background-blend-mode: color-burn;">
         <div style="height: 100vh; filter: blur(8); position: absolute; top:0; width: 100%;"></div>

             <div style="background-image: url({{asset("app-assets/img/core-img/hero-universe.png")}}); background-position: center; background-size: cover; background-color: #000000; background-blend-mode: hard-light;">--}}
    <section class="hero-area"
             style="background-color: #FFFFFF; background-image: url({{ URL::asset('app-assets/img/core-img/bg-hero-vh.webp') }});">
        <div class="container-fluid pb-5">
            <div class="row pb-5">
                <div class="col-md-5 offset-1 text-center">
                    <h1 class="mt-100 mt-600-none" style="color: #333333!important; font-size: 2rem; font-weight: 800;">Join Tneos
                        Learning Program</h1>
                    <span class="display-6 text-capitalize text-dark-50" style="font-weight: 800;">Better education for all.</span>
                    <p><span class="badge  high_flight text-white p-1">Class 1st -12th</span>  <span class="badge  high_flight text-white p-1">CBSE</span> <span class="badge  high_flight text-white p-1">ICSE</span> <span class="badge  high_flight text-white p-1">IB</span> <span class="badge  high_flight text-white p-1">States Boards</span></p>
                    <div class="row text-center">
                        <div class="col d-flex justify-content-end">
                            <a href="/packages" class="btn btn-dark p-2 d-none d-sm-none d-md-block d-lg-block d-xl-block" style="min-width: 200px;">Live Classes</a>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <a href="/register" class="btn btn-warning p-2  d-none d-sm-none d-md-block d-md-block d-lg-block d-xl-block">Register For Free Demo Classes</a></div>
                    </div>
                    <div class="mt-5 pull-left text-justify d-none d-sm-none d-md-block">

                        {{-- <ul>
                             <li class=""
                                 style="background: url({{asset("app-assets/img/core-img/bullet.png")}}) no-repeat top left;   margin: 0;
                                     padding: 4px 0 4px 72px;
                                     list-style: none;">--}}
                        <img src="https://img.icons8.com/emoji/48/000000/check-box-with-check-emoji.png"/>Interactive
                        Classes with expert teachers <br/>
                        {{--                        </li>
                                                <li class=""
                                                    style="background: url({{asset("app-assets/img/core-img/bullet.png")}}) no-repeat top left;   margin: 0;
                                                        padding: 4px 0 4px 72px;
                                                        list-style: none;">--}}
                        <img src="https://img.icons8.com/emoji/48/000000/check-box-with-check-emoji.png"/>Concept Videos
                        and Downloadable Revision Notes<br/>
                        {{--</li>
                        <li class=""
                            style="background: url({{asset("app-assets/img/core-img/bullet.png")}}) no-repeat top left;   margin: 0;
                                padding: 4px 0 4px 72px;
                                list-style: none;">--}}
                        <img src="https://img.icons8.com/emoji/48/000000/check-box-with-check-emoji.png"/>Chapter-wise
                        weekly tests & reports<br/>
                        {{--</li>
                        <li class=""
                            style="background: url({{asset("app-assets/img/core-img/bullet.png")}}) no-repeat top left;   margin: 0;
                                padding: 4px 0 4px 72px;
                                list-style: none;">--}}
                        <img src="https://img.icons8.com/emoji/48/000000/check-box-with-check-emoji.png"/>Ask your
                        Doubt, Anytime, Anywhere with our expert teacher<br/>
                        {{--  </li>
                          <li></li> </ul>--}}

                    </div>
                </div>
                <div class="col-md-6 text-center" style="/*** background-image: url({{asset('app-assets/img/core-img/x-2.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; ***/">
                    <img class="img-responsive mt-50" src="{{asset('app-assets/img/core-img/hiro-ok.gif')}}"
                         alt="Hero Tneos Images"/>
                </div>
                <div class="row mx-auto py-3 high_flight rounded  d-md-none d-lg-none">
                    <div class="col text-center">
                        <a href="/register" class="btn btn-warning p-2" style="min-width: 300px;">Register For Free Demo Classes</a></p>
                        <a href="/packages" class="btn btn-dark p-2"  style="min-width: 300px;">Live Classes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-none d-sm-none d-md-block" style="max-height: 0vh;">
            <div class="row teen_party m-md-2 m-lg-2 d-flex d-flex justify-content-center"
                 style="border-radius: 32px; position: relative; top: -160px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px; backdrop-filter: blur(20px);">
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem;">
                    <div class="row p-3">
                        <div class="col-3">
                            <div class="rounded-circle text-center pt-1" style="width: 42px; height: 42px;  background-color: rgba(255, 255, 255, 0.6);
  backdrop-filter: blur(20px);">
                                <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-1.png")}}"
                                     style="width: 32px; height: 32px;"/>
                            </div>
                        </div>
                        <div class="col-9 pt-1">
                            Strong Foundation
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem; ">
                    <div class="row p-3">
                        <div class="col-3">
                            <div class="rounded-circle  text-center pt-1" style="width: 42px; height: 42px;  background-color: rgba(255, 255, 255, 0.6);
  backdrop-filter: blur(20px);">
                                <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-2.png")}}"
                                     style="width: 32px; height: 32px;"/>
                            </div>
                        </div>
                        <div class="col-9 pt-1">
                            Study Material
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem;">
                    <div class="row p-3">
                        <div class="col-3">
                            <div class="rounded-circle  text-center pt-1" style="width: 42px; height: 42px;  background-color: rgba(255, 255, 255, 0.6);
  backdrop-filter: blur(20px);">
                                <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-3.png")}}"
                                     style="width: 32px; height: 32px;"/>
                            </div>
                        </div>
                        <div class="col-9 pt-1">
                            Learn Interactively
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--          <div class="hero-slides owl-carousel">
                  <!-- Single Hero Slide -->
                  <div class="single-hero-slide bg-img "
                  >
                      <div class="single-hero-slide bg-img">
                          <div class="container-fluid pt-4">
                              <div class="row  offset-1 pt-4">
                                  <div class="col-md-4 pt-5">
                                      <div class="card  bg-transparent rounded hero-card mb-600-100" style="width: 16rem; ">
                                          <img src="{{asset("app-assets/img/core-img/tneos-class-6th-girl-online-class.png")}}" class="card-img-top"
                                               alt="...">
                                          <div class="card-body bg-white m-0 ">
                                              <h5 class="card-title text-dark text-center pt-2"> Class 6th to 8th</h5>
                                              <p class="card-text  font-weight-bold text-center">The best Class 6th to 8th all
                                                  Subject Teachers</p>
                                          </div>
                                          <a href="/packages" class="btn btn-info rounded-0 x">Learn More</a>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single-hero-slide bg-img">
                      <div class="single-hero-slide bg-img">
                          <div class="container-fluid pt-4">
                              <div class="row  offset-1 pt-4">
                                  <div class="col-md-4 pt-5">
                                      <div class="card  bg-transparent rounded hero-card mb-600-100" style="width: 16rem;">
                                          <img src="{{asset("app-assets/img/core-img/tneos-boy-taking-online-class.png
      ")}}" class="card-img-top"
                                               alt="...">
                                          <div class="card-body bg-white m-0 text-center">
                                              <h5 class="card-title text-dark pt-2">9th & 10th Class</h5>
                                              <p class="card-text font-weight-bold  text-center ">Get ready for the board
                                                  examinations<br/>
                                                  &nbsp;</p>
                                          </div>

                                          <a href="/packages" class="btn btn-info rounded-0 y">Learn More</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single-hero-slide bg-img">
                      <div class="single-hero-slide bg-img">
                          <div class="container-fluid pt-4">
                              <div class="row  offset-1 pt-4">
                                  <div class="col-md-4 pt-5">
                                      <div class="card  bg-transparent rounded hero-card mb-600-100" style="width: 16rem;">
                                          <img src="{{asset("app-assets/img/core-img/studentcard.png")}}" class="card-img-top"
                                               alt="...">
                                          <div class="card-body  bg-white m-0 r text-dark">
                                              <h5 class="card-title text-dark text-center pt-2">Class 11th & 12th</h5>
                                              <p class="card-text font-weight-bold text-center">Prepare with best subject
                                                  expert in order to excel</p>
                                          </div>

                                          <a href="/packages" class="btn btn-info rounded-0 z">Learn More</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

  --}}

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    {{--    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms" style="background-image: url({{asset("app-assets/img/core-img/small-banner-02.png")}});  background-position: center center; background-repeat: no-repeat;   background-size: cover; ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="features-content"  style="background: url({{asset("app-assets/img/core-img/small-banner.png")}}); background-color: #333333; background-blend-mode: overlay;">
                            <div class="row no-gutters">
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <!--<i class="icon-agenda-1"></i>-->
                                        <img src="https://img.icons8.com/plasticine/100/000000/address-book--v1.png" style="max-width:40px; height: auto;"/>
                                        <a href="/packages"><h5 class="text-white"  style="color: #fefefe!important;">Online Courses</h5></a>
                                    </div>
                                </div>
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <img src="https://img.icons8.com/clouds/100/000000/classroom.png" style="max-width:40px; height: auto;"/>
                                        <!--<i class="icon-assistance"></i>-->
                                        <a href="/teachers"><h5 class="text-white"  style="color: #fefefe!important;">Amazing Teachers</h5></a>
                                    </div>
                                </div>
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <img src="https://img.icons8.com/fluent/96/000000/customer-support.png" style="max-width:40px; height: auto;"/>
                                        <!--<i class="icon-telephone-3"></i>-->
                                        <h5 class="text-white"  style="color: #fefefe!important;">Great Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    <!-- ##### Top Feature Area End ##### -->

    <!---### New Top Featured Area Starts  ###-->
    <section class="">
        <div class="container">
            <div class="display-4" style="font-size: 2rem; font-weight: 800">Specialize Live Learning</div>
            <p class="display-5" style="font-size: 1.2rem;">With Innovative e-learning Solutions</p>
            <div class="row mb-100 mt-100">

                <div class="col-md-4  text-center">
                    <div class="card bg-transparent mx-auto mb-600-100" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-live-lecture.webp')}}"
                             style="margin-bottom: -80px; width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center aqua_guidance"
                             style="border-radius: 32px; /*background-color: #0acfdc!important; /*#01a9fe #fee48f*/ z-index: -100; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500;  color:#fefefe!important;">
                                Live Classes</h5>
                            <p class="card-text text-white">Best online education that help develop a strong
                                foundation.</p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card bg-transparent mx-auto mb-600-100" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-interactive-courses.webp')}}"
                             style="margin-bottom: -80px;  width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center millennium_pine"
                             style="border-radius: 32px; z-index: -100; /* background-color: #ef6d24!important; /* #eb1945 #6ba5fe*/ box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500; color:#fefefe!important;">
                                Examination</h5>
                            <p class="card-text text-white">Time tested approach & methods for preparation of any kind
                                of examination.</p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card bg-transparent mx-auto mb-600-100" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-interactive.webp')}}"
                             style="margin-bottom: -80px; width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center bg-white amour_amour"
                             style="border-radius: 32px; /*background-color: #78d3e1!important;*/ z-index: -100; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500;  color:#fefefe!important;">
                                Visuals Learning</h5>
                            <p class="card-text text-white">Learning through visuals gives a crystal clear
                                understanding.
                            </p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

            </div>
            {{--  <p class="text-center" style="font-size: 1rem; font-weight: 200;">Tneos brings for you the Best Online
                  Education.</p> --}}
        </div>
    </section>

    <!---### New More Featured Area Starts  ###-->
    <section class="mt-100">
        <div class="container">
            <div class="display-4" style="font-size: 2rem; font-weight: 800">Find Out the Easiest Way</div>
            <p class="display-5" style="font-size: 1.2rem;">To Learn any Concepts </p>
            <div class="row mb-100 mt-100">
                <div class="row">
                    <div class="col-md-6 px-4">
                        <p style="font-weight: lighter; font-size: 1rem;">Figure out hard theories in a smart way, don't
                            just work on problems but comprehend the complexities of the problem, Tneos Innovative
                            classes are structured to encourage student's thirst of knowledge.</p>
                        <dl class="row" style="font-weight: 400;">
                            <dt class="col-md-3" style="font-weight: 400;">Our Advantages</dt>
                            <dd class="col-md-9" style="">We teach students in their own language for e.g. English, HINDI, &
                                Other State Board language.
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle my-5 text-center pt-3  millennium_pine wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-rocket fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"> </span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 bg-white shadow-lg rounded p-3 text-justify wow fadeIn" data-wow-delay="100ms">
                                <span style="font-weight: 600;">Not just Getting marks but also understanding</span>
                                <p style="font-weight: 200;">We emphasize not only focus on getting higher marks but
                                    also develop understanding in particular subject so that a student could understand
                                    their environment, body and mind.
                                </p>
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle my-5 text-center pt-3 sunny_morning wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-fighter-jet fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 bg-white shadow-lg rounded p-3 text-justify wow fadeIn" data-wow-delay="500ms"><span style="font-weight: 600;">Learning
                                through high quality Audio & Video</span>
                                <p style="font-weight: 200;">we offer Online Tuition Classes, Recorded classes inform of
                                    PAN DRIVE, SD CARD (Memory Card), Tablet. A student who has not access of internet
                                    also learn by using recorded video in SD card. </p>
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle my-5 text-center pt-3 party_bliss wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-user-plus fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 bg-white shadow-lg rounded p-3 text-justify wow fadeIn" data-wow-delay="700ms"><span style="font-weight: 600;">Students can
                                ask their doubts any time and watch video several times till their end sessions.</span>
                                <p style="font-weight: 200;">we offer Online Tuition Classes, Recorded classes inform of
                                    PAN DRIVE, SD CARD (Memory Card), Tablet. A student who has not access of internet
                                    also learn by using recorded video in SD card. </p>
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle my-5 text-center pt-3 aqua_guidance wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-calculator fa-3x  text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 bg-white shadow-lg rounded p-3 text-justify wow fadeIn" data-wow-delay="700ms"><span style="font-weight: 600;">Cutting Edge Technology in Education</span>
                                <p style="font-weight: 200;">We are Educational Tech company ready to challenge established education systems by utilization of modern technologies. </p>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid wow slideInRight" data-wow-delay="300ms"
                             alt="Features of Joining Tneos Classes"
                             src="{{asset('app-assets/img/core-img/featured-icon.webp')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <div class="display-4" style="font-size: 2rem; font-weight: 800">Find Out the Easiest Way</div>
                    <p class="display-5" style="font-size: 1.2rem;">To Learn any Concepts </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img class="img-responsive wow bounceInUp" data-wow-delay="300ms"
                         src="{{asset('app-assets/img/core-img/all-in-one.webp')}}" alt="Tneos Live classes">
                </div>
                <div class="col-md-4">
                    <p style="font-weight: lighter; font-size: 1rem;">Practical, systematic and progressive courses,
                        standarized curriculam, to offer a student perfect understanding and knowledge.</p>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-users fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Excellent Teacher</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-leanpub fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Natural Learning</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-shield fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Safe & Secure</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-video-camera fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Live Classes</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-puzzle-piece fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Beautiful Content</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-clock-o fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">24*7 Learning</p>
                            </div>
                        </div>
                        <div class="row mt-100">
                            <div class="col-md-12">
                                <p style="font-weight: bold; font-size: 1rem; letter-spacing: 0.02em; font-weight: 450; text-align: justify">
                                    Start Homework with free Study Material</p>
                                <ol class="ml-4">
                                    <li style="list-style-type: decimal; font-weight: 600;">NCERT Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 600;">IB Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 600;">ISCE Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 600;">State Board Solutions</li>
                                </ol>
                            </div>

                            <a class="btn  grass_shampoo mt-30 text-uppercase button-hover-size wow pulse"
                               data-wow-delay="300ms"
                               style="border-radius:  1rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;"
                               href="/register">
                                Request A Free Demo Class
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-100  py-5" style="background-image: linear-gradient( 135deg, #90F7EC 10%, #32CCBC 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 text-center">
                    <div class="display-4" style="font-size: 2rem; font-weight: 800">A Brand New Approach</div>
                    <p class="display-5" style="font-size: 1.2rem;">To Study & Practice</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-2 m-0 p-0">
                    <img src="{{asset('app-assets/img/core-img/tneos-girl.webp')}}" alt="a girl standing folding her hand, tneos eduloutions" class="img-responsive wow fadeIn" data-wow-delay="600ms">
                </div>
                <div class="col-md-10 col-10 party_bliss p-2 wow slideInLeft" data-wow-delay="600ms"
                     style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <div class="splide p-example__splide">
                        <div id="example-video"
                             class="splide js-splide-video p-splide splide--slide splide--ltr splide--draggable is-active splide--has-video"
                             data-splide="{&quot;heightRatio&quot;:0.5625,&quot;cover&quot;:true,&quot;lazyLoad&quot;:&quot;sequential&quot;,&quot;video&quot;:[]}"
                             style="visibility: visible;">
                            <div class="splide__track" id="example-video-track">
                                <ul class="splide__list" id="example-video-list" style="transform: translateX(0px);">
                                    <li class="splide__slide p-splide__slide splide__slide--has-video is-active is-visible"
                                        data-splide-youtube="https://youtu.be/wnK4LEaOLSg" id="example-video-slide01"
                                        aria-hidden="false" tabindex="0"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url({{asset('app-assets/img/core-img/promo-01.webp')}}) center center / cover no-repeat;">
                                        <img data-splide-lazy="{{asset('app-assets/img/core-img/promo-01.webp')}}"
                                             srcset="" src="{{asset('app-assets/img/core-img/promo-01.webp')}}"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=1I0FWSvFHkw"
                                        id="example-video-slide02" aria-hidden="true" tabindex="-1"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url({{asset('app-assets/img/core-img/chemistry-at-tneos.webp')}}) center center / cover no-repeat;">
                                        <img
                                            data-splide-lazy="{{asset('app-assets/img/core-img/chemistry-at-tneos.webp')}}"
                                            srcset="" src="{{asset('app-assets/img/core-img/chemistry-at-tneos.webp')}}"
                                            style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=aPUCJWyrVVM"
                                        id="example-video-slide03"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url({{asset('app-assets/img/core-img/STAR.webp')}}) center center / cover no-repeat;">
                                        <img data-splide-lazy="{{asset('app-assets/img/core-img/STAR.webp')}}"
                                             srcset="" src="{{asset('app-assets/img/core-img/STAR.webp')}}"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=n_A1ZgWb7C0"
                                        id="example-video-slide04"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url({{asset('app-assets/img/core-img/MATH.webp')}}) center center / cover no-repeat;">
                                        <img data-splide-lazy="{{asset('app-assets/img/core-img/MATH.webp')}}"
                                             srcset="" src="{{asset('app-assets/img/core-img/MATH.webp')}}"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="splide__arrows p-splide__arrows">
                                <button class="splide__arrow p-splide__arrow splide__arrow--prev p-splide__arrow--prev"
                                        aria-controls="example-video-track" aria-label="Previous slide" disabled="">
                                    <span class="spi-angle-left"></span></button>
                                <button class="splide__arrow p-splide__arrow splide__arrow--next p-splide__arrow--next"
                                        aria-controls="example-video-track" aria-label="Next slide"><span
                                        class="spi-angle-right"></span></button>
                            </div>
                            <ul class="splide__pagination p-splide__pagination">
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page is-active"
                                            type="button" aria-controls="example-video-slide01"
                                            aria-label="Go to slide 1" aria-current="true"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide02" aria-label="Go to slide 2"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide03" aria-label="Go to slide 3"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide04" aria-label="Go to slide 4"></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--                    <div class="splide">--}}
                    {{--                        <div class="splide__track">--}}
                    {{--                            <ul class="splide__list">--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://youtu.be/wnK4LEaOLSg">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=FTlczfR82mQ">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=6L-PAmZajfA">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/207247/pexels-photo-207247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 text-justify offset-md-2">
                    {{--  <p class="p-2" style="font-weight: 200; font-size: 16px;">Tneos is highly student-oriented and
                          that's why we consider every response and feedback very valuable.</p> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ###### New Section #####-->


    <section class="card-area d-none d-md-block d-lg-block d-xl-block d-sm-none d-md-block">

        <div class="container-fluid">
            <div class="row mt-100">
                <div class="col-md-12 text-center">
                    <div class="display-4" style="font-size: 2rem; font-weight: 800">Get Free Homework Help</div>
                    <p class="display-5" style="font-size: 1.2rem;">with Tneos Free study materials</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 p-2">
                    <section class="card-section wow slideInLeft" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp" style="background: #F8F047;
background: -webkit-radial-gradient(top left, #F8F047, #E7BE89);
background: -moz-radial-gradient(top left, #F8F047, #E7BE89);
background: radial-gradient(to bottom right, #F8F047, #E7BE89);">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <g>
                                    <path d="M52.4,10.7H15.9l0,0l0,0c-1.1,0-2.7-0.3-2.7-2.4c0-1.6,1.3-2.9,2.9-2.9h37.1c1.6,0,2.7-1.1,2.7-2.7S54.8,0,53.2,0H16.1
		c-4.3,0-8,3.5-8.3,7.7V8v49.3c0,3.7,3.2,6.7,7.2,6.7h37.6c1.9,0,3.5-1.6,3.5-3.5V14.1C55.9,12.3,54.3,10.7,52.4,10.7z M50.5,58.7
		H15.1c-1.1,0-1.9-0.5-1.9-1.3V15.5c0.8,0.3,1.6,0.5,2.7,0.5l0,0l0,0h34.7V58.7z"/>
                                    <path
                                        d="M23.9,56h16c1.6,0,2.7-1.1,2.7-2.7c0-1.6-1.1-2.7-2.7-2.7h-16c-1.6,0-2.7,1.1-2.7,2.7C21.2,54.9,22.3,56,23.9,56z"/>
                                    <path d="M23.9,32h16c1.6,0,2.7-1.1,2.7-2.7v-8c0-1.6-1.1-2.7-2.7-2.7h-16c-1.6,0-2.7,1.1-2.7,2.7v8C21.2,30.9,22.3,32,23.9,32z
		 M26.5,24h10.7v2.7H26.5V24z"/>
                                </g>
                                </svg>
                                            <h2 class="card-front__heading text-capitalize">
                                                NCERT Solutions
                                            </h2>
                                            <p class="card-front__text-price text-white text-capitalize">
                                                For class 6 - 12
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="{{asset('app-assets/img/core-img/V - 1 mp.mp4')}}"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city text-capitalize">
                                        NCERT Solutions
                                    </h3>
                                    <p class="inside-page__text text-capitalize">
                                        Get the solutions of all your textbook questions.
                                    </p>
                                    <a href="/study-materials/CBSE" class="inside-page__btn inside-page__btn--city">View</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 p-2">
                    <section class="card-section wow fadeIn" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp" style="background: #FDE6CC;
background: -webkit-radial-gradient(top left, #FDE6CC, #2A1908);
background: -moz-radial-gradient(top left, #FDE6CC, #2A1908);
background: radial-gradient(to bottom right, #FDE6CC, #2A1908);">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <g>
                                    <path d="M32,0C14.4,0,0,14.4,0,32s14.4,32,32,32s32-14.4,32-32S49.6,0,32,0z M32,58.7c-14.7,0-26.7-12-26.7-26.7S17.3,5.3,32,5.3
		s26.7,12,26.7,26.7S46.7,58.7,32,58.7z"/>
                                    <path d="M33.9,10.9c-3.2-0.5-6.4,0.3-8.8,2.4s-3.7,4.8-3.7,8c0,1.3,0.3,2.4,0.5,3.5c0.5,1.3,2.1,2.1,3.5,1.6
		c1.3-0.5,2.1-2.1,1.6-3.5c-0.3-0.3-0.3-1.1-0.3-1.6c0-1.6,0.8-3.2,1.9-4c1.3-1.1,2.7-1.3,4.5-1.1c2.1,0.3,4,2.1,4.3,4.3
		c0.5,2.4-0.8,5.1-3.2,5.9c-2.9,1.1-4.8,4-4.8,7.2V40c0,1.6,1.1,2.7,2.7,2.7c1.6,0,2.7-1.1,2.7-2.7v-6.4c0-1.1,0.5-2.1,1.3-2.4
		c4.5-1.9,7.2-6.7,6.4-11.7C41.9,15.2,38.1,11.5,33.9,10.9z"/>
                                    <circle cx="32" cy="48" r="2.7"/>
                                </g>
                                </svg>
                                            <h2 class="card-front__heading text-capitalize">
                                                Important Question
                                            </h2>
                                            <p class="card-front__text-price text-white text-capitalize">
                                                with Solutions
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="{{asset('app-assets/img/core-img/V 2 1Kk4-1.mp4')}}"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city text-capitalize">
                                        Important Questions
                                    </h3>
                                    <p class="inside-page__text text-capitalize">
                                        Solutions for most important questions that are most likely come in examination.
                                    </p>
                                    <a href="/study-materials/CBSE" class="inside-page__btn inside-page__btn--city">View</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 p-2">
                    <section class="card-section wow slideInRight" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp juicy_cake">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <path d="M59.3,42.8l-5.9-3.5l5.6-3.2c1.3-0.5,1.9-1.9,2.1-3.2c0-1.3-0.8-2.7-1.9-3.2l-6.7-4l6.7-3.7c1.3-0.5,1.9-1.9,2.1-3.2
	c0-1.3-0.8-2.7-1.9-3.2L34.5,0.7c-1.1-0.8-2.7-0.8-3.7,0L4.4,15.4c-1.1,0.8-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l6.9,3.7l-6.9,4
	c-1.1,0.5-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l6.1,3.5l-6.1,3.5c-1.1,0.5-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l26.1,14.1
	c0.5,0.3,1.3,0.5,1.9,0.5c0.5,0,1.3-0.3,1.9-0.5l24.8-14.1c1.3-0.5,1.9-1.9,2.1-3.2C61.2,44.7,60.4,43.4,59.3,42.8z M9.7,18.6
	L32.7,5.5l21.6,13.1L32.4,30.8L9.7,18.6z M9.7,32.7l7.2-4l13.6,7.5c0.5,0.5,1.3,0.5,1.9,0.5c0,0,0,0,0.3,0c0.8,0,1.3-0.3,1.9-0.8
	l12.8-7.2l6.9,4L32.7,45L9.7,32.7z M32.4,58.3L9.7,46l6.4-3.7l14.4,8c0.5,0.3,1.3,0.5,1.9,0.5c0.5,0,1.3-0.3,1.9-0.5l13.9-8l6.1,3.7
	L32.4,58.3z"/>
                                </svg>
                                            <h2 class="card-front__heading">
                                                Previous Year
                                            </h2>
                                            <p class="card-front__text-price text-white">
                                                Questions Paper
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="{{asset('app-assets/img/core-img/V 3 MP.mp4')}}"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city text-capitalize">
                                        Previous year Papers
                                    </h3>
                                    <p class="inside-page__text text-capitalize">
                                        Solve previous year question papers and get prepared well for the examinations.
                                    </p>
                                    <a href="/study-materials/CBSE" class="inside-page__btn inside-page__btn--city">View Deals</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-100">
        <div class="container">
            <div class="row mt-100">
                <div class="col-md-12 text-center">
                    <div class="display-4" style="font-size: 2rem; font-weight: 800;">Meet Our Teacher's</div>
                    <p class="display-5" style="font-size: 1.2rem;">Team</p>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="six"
                       aria-selected="true">Grade 6th to 8th</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="seven"
                       aria-selected="false">Grade 7</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab" aria-controls="eight"
                       aria-selected="false">Grade 8</a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" id="nine-tab" data-toggle="tab" href="#nine" role="tab" aria-controls="nine"
                       aria-selected="false">Grade 9th to 10th</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" id="tenth-tab" data-toggle="tab" href="#tenth" role="tab" aria-controls="tenth"
                       aria-selected="false">Grade 10</a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" id="eleventh-tab" data-toggle="tab" href="#eleventh" role="tab"
                       aria-controls="eleventh" aria-selected="false">Grade 11th to 12th</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" id="twelveth-tab" data-toggle="tab" href="#twelveth" role="tab"
                       aria-controls="twelveth" aria-selected="false">Grade 12</a>
                </li>--}}
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="six" role="tabpanel" aria-labelledby="six-tab">
                    <div class="col-md-12 mt-100 mb-4">
                        <div class="display-4" style="font-size: 2rem;">For Better the Foundation</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 px-0">
                            <div class="card m-2 ripe_malinka rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0 ml-1">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Abhishek Kumar Sir, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1"
                                                style="font-weight: 220; color: #fefefe!important;">Mr. Abhishek
                                                Kumar</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-white text-capitalize">Clear all your doubts with our maths
                                                experts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 love_kiss rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ANINDHITHA.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Anindhitha mam, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2)); backdrop-filter: blur(10);">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1"
                                                style="font-weight: 220; color: #fefefe!important;">Miss. Anindita
                                                Giri</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300;color: rgba(255,255,255,0.6)!important;">
                                                English</h6>
                                            <p class="card-text text-white text-capitalize">Understand english better than never
                                                before.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 glass_water rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/vijendra.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Vijendra Singh Sir, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));" alt="Vijendra Sir, Tneos Eduloutions Ltd.">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #000000!important;">
                                                Mr. Vijendra Singh</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(0,0,0,0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-dark text-capitalize">Bring out the extraordinary in an ordinary aspirant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

            {{-- <div class="tab-pane fade" id="seven" role="tabpanel" aria-labelledby="seven-tab">
                 <div class="row">
                     <div class="col-md-12 mt-100 mb-4">
                         <div class="display-4" style="font-size: 2rem;">Building Upon the Foundation</div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 orange_juice rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/GAURAV.png')}}" class="card-img mb-0 pb-0" alt="Gaurav Dixit Sir, Tneos Eduloutions Ltd." style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">MR. Gaurav Dixit</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Mathematics</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 grown_early rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/RISHAB.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Mr. Rishabh Gupta</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Mathematics</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 sugar_lollipop rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div> --}} <!--Tab Pane Ends -->

            {{--<div class="tab-pane fade" id="eight" role="tabpanel" aria-labelledby="eight-tab">
                <div class="row">
                    <div class="col-md-12 mt-100 mb-4">
                        <div class="display-4" style="font-size: 2rem;">Developing a better Understanding</div>
                    </div>
                    <div class="col-md-4 px-0">
                        <div class="card m-2 angel_care rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col m-0 p-0">
                                        <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                        <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-0">
                        <div class="card m-2 space_shift rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col m-0 p-0">
                                        <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                        <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-2 fruit_blend rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col m-0 p-0">
                                        <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                        <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>  <--}}<!--Tab Pane Ends -->

                <div class="tab-pane fade" id="nine" role="tabpanel" aria-labelledby="nine-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Building Upon the Foundation</div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 strong_stick rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/GAURAV.png')}}"
                                                 class="card-img mb-0 pb-0" alt=""
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1"
                                                style="font-weight: 220; color: #fefefe!important;">Mr. Gaurav
                                                Dixit</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-white">Help you understanding in the simplest manner.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 love_kiss rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ANINDHITHA.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Anindhitha Mam, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2)); backdrop-filter: blur(10);">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1"
                                                style="font-weight: 220; color: #fefefe!important;">Miss. Anindita
                                                Giri</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300;color: rgba(255,255,255,0.6)!important;">
                                                English</h6>
                                            <p class="card-text text-white">Understand english better than never
                                                before.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 raccoon_back rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/NEERAJ.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Neeraj Nailwal Sir, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1"
                                                style="font-weight: 220; color: #fefefe!important;">Mr. Neeraj
                                                Nailwal</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">
                                                Science</h6>
                                            <p class="card-text text-white">Teaching methodology that enhances knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Solving Complex Problems</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 hidden_jaguar rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 mars_party rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 amour_amour rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">My mission to assist students to remove their doubts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                </div>  <!--Tab Pane Ends -->

            {{-- <div class="tab-pane fade" id="tenth" role="tabpanel" aria-labelledby="tenth-tab">
                 <div class="row">
                     <div class="col-md-12 mt-100 mb-4">
                         <div class="display-4" style="font-size: 2rem;">Mastering the art of problem-solving</div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 love_kiss rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                         <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                         <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                         <div class="card-body">
                                 <div class="row">
                                     <div class="col m-0 p-0">
                                         <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                     </div>
                                     <div class="col">
                                         <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                         <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                         <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                             elit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>  --}}<!--Tab Pane Ends -->

                <div class="tab-pane fade" id="eleventh" role="tabpanel" aria-labelledby="eleventh-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Getting Ready for the Brighter Future</div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 glass_water rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/vijendra.webp')}}"
                                                 class="card-img mb-0 pb-0" alt=""
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #000000!important;">
                                                Mr. Vijendra Singh</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(0, 0, 0, 0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-dark">We will learn through curiosity, joy, affection, and thought.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 ripe_malinka rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Abhishek Sir, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">
                                                Mr. Abhishek Kumar</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-white">Basic Knowledge and ability of making a difference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card m-2 gentle_care rounded"
                                 style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/RISHAB.webp')}}"
                                                 class="card-img mb-0 pb-0" alt="Rishabh Sir, Tneos Eduloutions Ltd."
                                                 style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">
                                                Mr. Rishabh Gupta</h5>
                                            <h6 class="card-subtitle"
                                                style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">
                                                Mathematics</h6>
                                            <p class="card-text text-white">My mission to assist students to remove their doubts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                {{--  <div class="tab-pane fade" id="twelveth" role="tabpanel" aria-labelledby="twelveth-tab">
                      <div class="row">
                          <div class="col-md-12 mt-100 mb-4">
                              <div class="display-4" style="font-size: 2rem;">Becoming Confident</div>
                          </div>
                          <div class="col-md-4">
                              <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                              <div class="card-body">
                                      <div class="row">
                                          <div class="col m-0 p-0">
                                              <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img"
                                                   alt="" style="">
                                          </div>
                                          <div class="col">
                                              <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                              <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                              <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                              <div class="card-body">
                                      <div class="row">
                                          <div class="col m-0 p-0">
                                              <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img"
                                                   alt="" style="">
                                          </div>
                                          <div class="col">
                                              <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                              <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                              <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                              <div class="card-body">
                                      <div class="row">
                                          <div class="col m-0 p-0">
                                              <img src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" class="card-img"
                                                   alt="" style="">
                                          </div>
                                          <div class="col">
                                              <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                              <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                              <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>  <!--Tab Pane Ends -->--}}
            </div>

        </div>
    </section>
    {{-- Card For Best Teacher--}}
    {{-- <section class="mt-100">
             <div class="container">
                 <h2 style="font-weight: 320;" class="mt-4">Get Free Demo Classes</h2>
                 <div class="row">
                     <div class="col-md-4">
                         <div class="card-teacher" data-state="#about">
                             <div class="card-header-teacher">
                                 <div class="card-cover-teacher" style="background-image: url('https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80')"></div>
                                 <img src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="teacher" class="card-avatar-teacher">
                                 <h1 class="card-fullname-teacher">Nobody Singh</h1>
                                 <h2 class="card-jobtitle-teacher">No Subject</h2>
                             </div>
                             <div class="card-main-teacher">
                                 <div class="card-section-teacher is-active" id="about">
                                     <div class="card-content-teacher">
                                         <div class="card-subtitle-teacher">ABOUT</div>
                                         <p class="card-desc-teacher">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut explicabo incidunt molestias qui saepe. Adipisci amet doloribus dolorum et fugiat hic ipsa, laboriosam natus nostrum perferendis provident quis sit velit?</p>
                                     </div>
                                     <div class="card-social-teacher">
                                         <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" /></svg></a>
                                         <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                 <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" /></svg></a>
                                         <a href="#"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
                                                 <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
                                                 <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" /></svg></a>
                                         <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z" /></svg></a>
                                     </div>
                                 </div>
                                 <div class="card-section-teacher" id="experience">
                                     <div class="card-content-teacher">
                                         <div class="card-subtitle-teacher">WORK EXPERIENCE</div>
                                         <div class="card-timeline-teacher">
                                             <div class="card-item-teacher" data-year="2021">
                                                 <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                 <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                             </div>
                                             <div class="card-item-teacher" data-year="2021">
                                                 <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                 <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                             </div>
                                             <div class="card-item-teacher" data-year="2021">
                                                 <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                 <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                             </div>
                                             <div class="card-item-teacher" data-year="2021">
                                                 <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                 <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="card-section-teacher" id="contact">
                                 <div class="card-content-teacher">
                                     <div class="card-subtitle-teacher">CONTACT</div>
                                     <div class="card-contact-wrapper-teacher">
                                         <div class="card-contact-teacher">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                 <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                                 <circle cx="12" cy="10" r="3" /></svg>
                                             Algonquin Rd, Three Oaks Vintage, MI, 49128
                                         </div>
                                         <div class="card-contact-teacher">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                 <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" /></svg>(269) 756-9809</div>
                                         <div class="card-contact-teacher">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                 <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                                 <path d="M22 6l-10 7L2 6" /></svg>
                                             william@rocheald.com
                                         </div>
                                         <button class="contact-me-teacher">WORK TOGETHER</button>
                                     </div>
                                 </div>
                             </div>
                             <div class="card-buttons-teacher">
                                 <button data-section="#about" class="is-active">ABOUT</button>
                                 <button data-section="#experience">EXPERIENCE</button>
                                 <button data-section="#contact">CONTACT</button>
                             </div>
                         </div>
                     </div>  <!-- Card-teacher -->
                 </div>  <!--col-md-4-->
                 <div class="col-md-4">

                 </div>  <!--col-md-4-->
                 <div class="col-md-4">

                 </div> <!--col-md-4-->
             </div> <!--row-->
         </section>--}}

    <!-- ##### Course Area Start ##### -->
    {{--     <div class="academy-courses-area"  style="padding-top: 60px!important;
             background-image: url({{asset("app-assets/img/core-img/middle-banner.png")}});
             background-position: center center; background-repeat: no-repeat;  background-attachment: fixed; background-size: cover;">
             <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="First slide">
                         <div class="carousel-caption d-none d-md-block">
                             <img src="{{asset("app-assets/img/core-img/10th-clas.png")}}" alt="class 10th" width="144"/>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <img class="d-block w-100" src="{{asset("app-assets/img/core-img/2-one.png")}}" alt="Second slide">
                     </div>
                     <div class="carousel-item">
                         <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="Third slide">
                         <div class="carousel-caption d-none d-md-block">
                             <img src="{{asset("app-assets/img/core-img/10th-clas.png")}}" alt="class 10th" width="144"/>
                         </div>
                     </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                 </a>
             </div>
             <div class="container mt-5">
                 <div class="row">
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/color/96/000000/school-building.png"/>
                             </div>
                             <div class="course-content">

                                 <h5 class="p-1" >Primary</h5>
                                 <p class="p-2">Best primary education that help develop a strong foundation.</p>

                             </div>
                         </div>
                     </div>
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/color/96/000000/training.png"/>
                             </div>
                             <div class="course-content">
                                 <h5 class="p-1" >Academic</h5>
                                 <p class="p-2">Higher education demand very strong tutoring so that you can grow.</p>
                             </div>
                         </div>
                     </div>
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/color/96/000000/class.png"/>
                             </div>
                             <div class="course-content">
                                 <h5 class="p-1" >Examination</h5>
                                 <p class="p-2">Time tested approach & methods for preparation of any kind of examination.</p>
                             </div>
                         </div>
                     </div>
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/fluent/96/000000/new-job.png"/>
                             </div>
                             <div class="course-content">
                                 <h5 class="p-1" >Occupation</h5>
                                 <p class="p-2">Choose a better career path for more happier & a brighter future.</p>
                             </div>
                         </div>
                     </div>
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/color/96/000000/consultation.png"/>
                             </div>
                             <div class="course-content">
                                 <h5 class="p-1" >Counselling</h5>
                                 <p class="p-2">Our expert team, comprised of top career counsellors will assists you in your journey.</p>
                             </div>
                         </div>
                     </div>
                     <!-- Single Course Area -->
                     <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                             <div class="course-icon">
                                 <img src="https://img.icons8.com/color/96/000000/service.png"/>
                             </div>
                             <div class="course-content">
                                 <h5 class="p-1" >Support</h5>
                                 <p class="p-2">A well trained experts are always ready to Support you achieve your goals.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>--}}
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    {{--     <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('app-assets/img/bg-img/bg-2.jpg')}});">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                             <span>our testimonials</span>
                             <h3>See what our satisfied customers are saying about us</h3>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <!-- Single Testimonials Area -->
                     <div class="col-12 col-md-6">
                         <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms" style="border-radius: 20px;
                         background: linear-gradient(145deg, #fefefe, #ffffff);
                         box-shadow:  20px 20px 60px #acccd3,
                                      -20px -20px 60px #e8ffff;">
                             <div class="testimonial-thumb">
                                 <img src="{{asset("app-assets/img/bg-img/t5.jpeg")}}" alt="">
                             </div>
                             <div class="testimonial-content py-4">
                                 <h5>Great teachers</h5>
                                 <p class="text-capitalize">Everyone here works together to achieve one common goalâ€¦what is best for our children. As a family, we are proud to be part of the Tneos Eduloutions.</p>
                                 <h6><span>Asha Sharma,</span> Parent</h6>
                             </div>
                         </div>
                     </div>
                     <!-- Single Testimonials Area -->
                     <div class="col-12 col-md-6">
                         <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms" style="border-radius: 20px;
                         background: linear-gradient(145deg, #fefefe, #ffffff);
                         box-shadow:  20px 20px 60px #acccd3,
                                      -20px -20px 60px #e8ffff;">
                             <div class="testimonial-thumb">
                                 <img src="{{asset("app-assets/img/bg-img/t4.png")}}" alt="">
                             </div>
                             <div class="testimonial-content py-4">
                                 <h5>Easy and user friendly courses</h5>
                                 <p class="text-capitalize">Tneos video has helped me to understand Science better than ever.</p>
                                 <h6><span>Aanand,</span> Student</h6>
                             </div>
                         </div>
                     </div>
                     <!-- Single Testimonials Area -->
                     <div class="col-12 col-md-6">
                         <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms" style="border-radius: 20px;
                         background: linear-gradient(145deg, #fefefe, #ffffff);
                         box-shadow:  20px 20px 60px #acccd3,
                                      -20px -20px 60px #e8ffff;">
                             <div class="testimonial-thumb">
                                 <img src="{{asset("app-assets/img/bg-img/t2.png")}}" alt="">
                             </div>
                             <div class="testimonial-content py-4">
                                 <h5>One good academy</h5>
                                 <p class="text-capitalize">â€œThe teachers get to know your children as individuals and push them to levels they can and should achieve.</p>
                                 <h6><span>Neeru Gupta,</span> Parent</h6>
                             </div>
                         </div>
                     </div>
                     <!-- Single Testimonials Area -->
                     <div class="col-12 col-md-6">
                         <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms" style="border-radius: 20px;
                         background: linear-gradient(145deg, #fefefe, #ffffff);
                         box-shadow:  20px 20px 60px #acccd3,
                                      -20px -20px 60px #e8ffff;">
                             <div class="testimonial-thumb">
                                 <img src="{{asset("app-assets/img/bg-img/t3.png")}}" alt="">
                             </div>
                             <div class="testimonial-content py-4">
                                 <h5>I just love the courses here</h5>
                                 <p>We are impressed by the encouragement and support of all the faculty that helps each student keep up with, and enjoy, the academic rigor. The children are truly set up for success in future education.</p>
                                 <h6><span>jyoti Nigam,</span> Parent</h6>
                             </div>
                         </div>
                     </div>
                     <!-- Single Testimonials Area -->

                 </div>
                 <div class="row">
                     <div class="col-12 pb-5 mb-5">
                         <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                             <a href="/lives" class="btn academy-btn">See More</a>
                         </div>
                     </div>
                 </div>

             </div>
             <div class="custom-shape-divider-bottom-1607487037">
                 <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                     <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                 </svg>
             </div>
         </div>--}}

    <!-- ##### Top Popular Courses Area Start ##### -->
    {{--     <div class="top-popular-courses-area section-padding-100-70" style="background-color: #ffffff;">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                             <span>The Best</span>
                             <h3>Top Popular Faculty</h3>
                         </div>
                     </div>
                 </div>
                 <div class="row">

                     <!-- Single Top Popular Course -->
                     <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                             <div class="popular-course-content">
                                 <h5>Mathematics</h5>
                                 <span>By Abhishek Kumar |B.Sc., B.Ed., CTET Qual. | 7+ yrs. Exp.  </span>
                                 <div class="course-ratings">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </div>
                                 <p>Clear all your doubts with our maths experts.</p>
                                 <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                             </div>
                             <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher0.png')}});"></div>
                         </div>
                     </div>

                     <!-- Single Top Popular Course -->
                     <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                             <div class="popular-course-content">
                                 <h5>English</h5>
                                 <span>By Anindita Giri | M.A. Eng.(HONS), B.Ed., CTET QUAL.</span>
                                 <div class="course-ratings">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </div>
                                 <p>Understand english better than never before.</p>
                                 <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                             </div>
                             <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/tneos_teacher_Anindita.png')}});"></div>
                         </div>
                     </div>

                     <!-- Single Top Popular Course -->
                     <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                             <div class="popular-course-content">
                                 <h5>Science & Mathematics</h5>
                                 <span>By Neeraj Nailwal | B-tech (Mechanical &amp; Automation Engineering) | 6+ yrs. Teaching Exp.   </span>
                                 <div class="course-ratings">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </div>
                                 <p>Solve important questions of Science with Expert
                                     Study Smart Not hard with Neeraj Nailwal</p>
                                 <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                             </div>
                             <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/neeraj-sir-tneos.png')}});"></div>
                         </div>
                     </div>

                     <!-- Single Top Popular Course -->
                     <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                             <div class="popular-course-content">
                                 <h5>Physics & Mathematics</h5>
                                 <span>By Gaurav Dixit| B-tech (Electronics and Communications Engineering) | 6+ yrs. Teaching Exp.</span>
                                 <div class="course-ratings">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </div>
                                 <p>Clear your doubts, learn more, and understand better that other with our science faculty</p>
                                 <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                             </div>
                             <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/gaurav-sir-tneos.png')}});"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>--}}

    <!-- ##### Testimonials new  ##### -->
    <section class="mt-100">
        <div class="container-fluid morpheus_den">
            <div class="row p-4">
                <div class="col-md-6 col-sm-12">
                    <section id="testim" class="testim">
                        <!--         <div class="testim-cover"> -->
                        <div class="wrap">

                            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                            <ul id="testim-dots" class="dots">
                                <li class="dot active"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li>
                            </ul>
                            <div id="testim-content" class="cont">

                                <div class="active">
                                    <div class="img"><img
                                            src="{{asset('app-assets/img/bg-img/01.webp')}}"
                                            alt="Ritesh Negi, class 6th, Tneos Eduloutions Ltd."></div>
                                    <h2>Ritesh Negi, class 6th</h2>
                                    <p class="text-capitalize">Tneos guided me, inspired me, supported me. </p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/02.webp')}}"
                                                          alt="Sneha Singh, class 10th, Tneos Eduloutions Ltd."></div>
                                    <h2>Sneha Singh, class 10th</h2>
                                    <p class="text-capitalize">Teachers are the great inventor and leaders who are always motivated and inspired
                                        me to do great things, Thank you Tneos!</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/03.webp')}}"
                                                          alt="Sweta Singh, class 6th, Tneos Eduloutions Ltd."></div>
                                    <h2>Sweta Singh, class 6th</h2>
                                    <p class="text-capitalize">Being one is the highest privilege having one of the best Teachers.</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/04.webp')}}"
                                                          alt="Rishabh Negi, class 8th, Tneos Eduloutions Ltd."></div>
                                    <h2>Rishabh Negi, class 8th</h2>
                                    <p class="text-capitalize">Thank you, for continually inspiring me to do the best in my studies.</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/05.webp')}}" alt="Chanda Kumari, class 7th, Tneos Eduloutions"></div>
                                    <h2>Chanda Kumari, class 7th</h2>
                                    <p class="text-capitalize">Tneos helped me during my examination, the study material helped me prepare everything.</p>
                                </div>

                            </div>

                        </div>
                        <!--         </div> -->
                    </section>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div align="center" class="embed-responsive embed-responsive-16by9">
                        <div class="video-wrapper">
                            <iframe class="embed-responsive-item" height="315"
                                    src="https://www.youtube.com/embed/O1s7MMlpTOQ" frameborder="0"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row text-center d-flex justify-content-center">
                <section class="brand-slider">
                    <div class="container">
                        <div class="row mt-100">
                            <div class="col-md-12 text-center">
                                <div class="display-4" style="font-size: 2rem; font-weight: 800">Our Boards</div>
                                <p class="display-5" style="font-size: 1.2rem;"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="brands-carousel" class="carousel slide" data-ride="carousel">
                                <div class="row justify-content-center">
                                    <div class="col-10 col-sm-12">
                                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/01.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Bihar Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Bihar State Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/02.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>CBSE Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/03.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="CBSE Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Harayana State Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/04.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Harayana Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>International Baccalaureate Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/05.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="IB Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Jharkhand State Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/06.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="J&K Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Jammu & Kashmir State Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/07.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Madya Pradesh Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Madhya Pradesh Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/08.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Odisha State Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Odisha State Board</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <a href="#">
                                                    <img src="{{asset("app-assets/img/clients-img/boards/09.png")}}"
                                                         class="img-fluid mx-auto d-block brand-images" alt="Uttar pradesh Board Education at Tneos Eduloutions Ltd.">
                                                </a>
                                                <div class="brands-intro">
                                                    <p>Uttar Pradesh State Board</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#brands-carousel" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#brands-carousel" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{--<div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/boards/01.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/boards/02.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/boards/03.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/boards/04.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/boards/05.png")}}" alt=""></a>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->
    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap"
                         style="max-height: 29px;">
                        <h3 class="footer-600-pos" style="position: relative; top: -100px;">Enroll in our online classes, Get in touch!</h3>
                        <a style="position: relative; top: -100px;" href="/packages" class="btn academy-btn footer-600-pos">See
                            More</a>
                        <img class="d-none d-xs-none d-sm-none d-md-block"
                             src="{{asset('app-assets/img/bg-img/giri.webp')}}" alt="Neeraj Sir Tneos"
                             style="width: 200px; position: relative; top: -200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>(function (w, d) {
            w.CollectId = "5fe4bf8318dfdb0f2fe0b80f";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);</script>
    <!-- ##### CTA Area End ##### -->
    <!-- ##### OLD TEMPLATE ##### --->
    {{-- <!DOCTYPE html>

       <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
       <head><meta charset="windows-1252">

           <meta name="viewport" content="width=device-width, initial-scale=1">

           <title>Laravel</title>

           <!-- Fonts -->
           <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

           <!-- Styles -->
           <style>
               html, body {
                   background-color: #fff;
                   color: #636b6f;
                   font-family: 'Nunito', sans-serif;
                   font-weight: 200;
                   height: 100vh;
                   margin: 0;
               }

               .full-height {
                   height: 100vh;
               }

               .flex-center {
                   align-items: center;
                   display: flex;
                   justify-content: center;
               }

               .position-ref {
                   position: relative;
               }

               .top-right {
                   position: absolute;
                   right: 10px;
                   top: 18px;
               }

               .content {
                   text-align: center;
               }

               .title {
                   font-size: 84px;
               }

               .links > a {
                   color: #636b6f;
                   padding: 0 25px;
                   font-size: 13px;
                   font-weight: 600;
                   letter-spacing: .1rem;
                   text-decoration: none;
                   text-transform: uppercase;
               }

               .m-b-md {
                   margin-bottom: 30px;
               }
           </style>
       </head>
       <body> --}}
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}


    @push('footer-scripts')
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"
                integrity="sha256-SmCcbf/1ehhlBnw3ZGinNu6fjQV471LDBjc4yMMJhsk=" crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.4.6/dist/js/splide-extension-video.min.js"
            integrity="sha256-I3Lk9RNz3uJpEcexacrPX4zspt56m+ENJZtMWkCRy5I=" crossorigin="anonymous"></script>
        <script>
            // Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling
            $(document).ready(function () {
                // Check if element is scrolled into view
                function isScrolledIntoView(elem) {
                    var docViewTop = $(window).scrollTop();
                    var docViewBottom = docViewTop + $(window).height();

                    var elemTop = $(elem).offset().top;
                    var elemBottom = elemTop + $(elem).height();

                    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
                }

                // If element is scrolled into view, fade it in
                $(window).scroll(function () {
                    $('.animate__animated').each(function () {
                        if (isScrolledIntoView(this) === true) {
                            $(this).addClass('animate__backInDown');
                        }
                    });
                });

            });

            new Splide('.splide', {
                playerOptions: {
                    youtube: {
                        cc_lang_pref: 'jpn',
                    },
                    vimeo: {
                        byline: true,
                    },
                    htmlVideo: {
                        playsinline: true,
                    },
                },
                video: {
                    loop: true,
                },
                'cover': true,
                'heightRatio': 0.5,
                'hideControls': true,
                'autoplay': true,
                'lazyLoad': 'sequential',
                'rewind': true,
            }).mount(window.splide.Extensions);


            const buttons = document.querySelectorAll(".card-buttons-teacher button");
            const sections = document.querySelectorAll(".card-section-teacher");
            const card = document.querySelector(".card-teacher");

            const handleButtonClick = (e) => {
                const targetSection = e.target.getAttribute("data-section");
                const section = document.querySelector(targetSection);
                targetSection !== "#about"
                    ? card.classList.add("is-active")
                    : card.classList.remove("is-active");
                card.setAttribute("data-state", targetSection);
                sections.forEach((s) => s.classList.remove("is-active"));
                buttons.forEach((b) => b.classList.remove("is-active"));
                e.target.classList.add("is-active");
                section.classList.add("is-active");
            };

            buttons.forEach((btn) => {
                btn.addEventListener("click", handleButtonClick);
            });

        </script>
        <script>
            // vars
            'use strict'
            var testim = document.getElementById("testim"),
                testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
                testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
                testimLeftArrow = document.getElementById("left-arrow"),
                testimRightArrow = document.getElementById("right-arrow"),
                testimSpeed = 4500,
                currentSlide = 0,
                currentActive = 0,
                testimTimer,
                touchStartPos,
                touchEndPos,
                touchPosDiff,
                ignoreTouch = 30;
            ;

            window.onload = function () {

                // Testim Script
                function playSlide(slide) {
                    for (var k = 0; k < testimDots.length; k++) {
                        testimContent[k].classList.remove("active");
                        testimContent[k].classList.remove("inactive");
                        testimDots[k].classList.remove("active");
                    }

                    if (slide < 0) {
                        slide = currentSlide = testimContent.length - 1;
                    }

                    if (slide > testimContent.length - 1) {
                        slide = currentSlide = 0;
                    }

                    if (currentActive != currentSlide) {
                        testimContent[currentActive].classList.add("inactive");
                    }
                    testimContent[slide].classList.add("active");
                    testimDots[slide].classList.add("active");

                    currentActive = currentSlide;

                    clearTimeout(testimTimer);
                    testimTimer = setTimeout(function () {
                        playSlide(currentSlide += 1);
                    }, testimSpeed)
                }

                testimLeftArrow.addEventListener("click", function () {
                    playSlide(currentSlide -= 1);
                })

                testimRightArrow.addEventListener("click", function () {
                    playSlide(currentSlide += 1);
                })

                for (var l = 0; l < testimDots.length; l++) {
                    testimDots[l].addEventListener("click", function () {
                        playSlide(currentSlide = testimDots.indexOf(this));
                    })
                }

                playSlide(currentSlide);

                // keyboard shortcuts
                document.addEventListener("keyup", function (e) {
                    switch (e.keyCode) {
                        case 37:
                            testimLeftArrow.click();
                            break;

                        case 39:
                            testimRightArrow.click();
                            break;

                        case 39:
                            testimRightArrow.click();
                            break;

                        default:
                            break;
                    }
                })

                testim.addEventListener("touchstart", function (e) {
                    touchStartPos = e.changedTouches[0].clientX;
                })

                testim.addEventListener("touchend", function (e) {
                    touchEndPos = e.changedTouches[0].clientX;

                    touchPosDiff = touchStartPos - touchEndPos;

                    console.log(touchPosDiff);
                    console.log(touchStartPos);
                    console.log(touchEndPos);


                    if (touchPosDiff > 0 + ignoreTouch) {
                        testimLeftArrow.click();
                    } else if (touchPosDiff < 0 - ignoreTouch) {
                        testimRightArrow.click();
                    } else {
                        return;
                    }

                })
            }

        </script>
        <script>
            $(document).ready(function () {
                $('.carousel').carousel({
                    interval: 2000
                });
                $('#brands-carousel').on('slide.bs.carousel', function (e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 7;
                    var totalItems = $('.carousel-item').length;
                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });
            });
        </script>
        <script type=”application/ld+json”>

        {

        “@context”: “http://schema.org”,

        “@type”: “WebSite”,

        “url”: “https://tneos.com/”,

        “potentialAction”: {

        “@type”: “SearchAction”,

        “target”: “https://tneos.com/search?q={search_term_string}”,

        “query-input”: “required name=search_term_string”

        }

        }

        </script>
    @endpush
@endsection

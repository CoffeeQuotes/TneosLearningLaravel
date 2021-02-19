@extends('layouts.app')
@section('page_title','Our India Network, Tneos Eduloution Ltd')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        .flex-column {
            -webkit-box-direction: normal;
            -webkit-box-orient: vertical;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .relative {
            position: relative;
        }

        .single-member {
            margin-top: 30px;
        }

        .single-member .thumb {
            background-repeat: no-repeat !important;
            background-position: center center !important;
            background-size: cover !important;
            height: 300px;
        }

        .single-member .thumb .overlay-member {
            background: #00c6ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #0072ff, #00c6ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #0072ff, #00c6ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            text-align: center;
            padding: 30px;
            min-height: 300px;
            opacity: 0;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .single-member .thumb .overlay-member p {
            margin: 0;
            font-size: 12px;
        }

        .single-member .thumb .overlay-member .line {
            margin: 20px 0 20px 0;
            width: 100%;
            height: 1px;
            background: #00ff8c;
        }

        .single-member .thumb .overlay-member .social a {
            color: rgba(255, 255, 255, 0.5);
            margin: 0 4px;
            padding: 2px;
        }

        .single-member .thumb .overlay-member .social a:hover {
            color: #00ff8c;
        }

        .single-member .thumb:hover .overlay-member {
            opacity: 1;
        }

        .single-member .desc {
            padding: 30px;
        }

        .single-member .desc h5 a {
            color: #222222;
        }

        .single-member .desc h5 a:hover {
            color: #00ff8c;
        }

        .single-member .desc p {
            margin: 0;
        }
        .flex-column {
            -webkit-box-direction: normal;
            -webkit-box-orient: vertical;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

    </style>
@endpush

@push('head-scripts')
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
@endpush
@section('content')
    <div class="container-fluid mx-0 px-0">
        <div class="m-0 jumbotron rounded-0 crystalline p-5">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="glass_water px-4 py-2">
                        <h2 class="text-dark">Our Network - India</h2>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="bg-white p-1" style="-webkit-box-shadow: 0 4px 6px #777;  -moz-box-shadow: 0 4px 6px #000; box-shadow: 0 4px 6px #000;">
                        <img  src="https://images.pexels.com/photos/4427618/pexels-photo-4427618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="tneos our network" style="max-height: 300px;">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="pt-5" style="color: #000000!important; font-weight: 200;">Our Network Benefits</h2>
                <span style="color: #000000!important; font-weight: 200; letter-spacing: 0.6em"></span>
            </div>
            <div class="container mt-100">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-12 mt-10">
                        <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; padding: 32px; border-radius: 12px;">
                            <img class="img-fluid" style="max-height: 64px;" src="{{asset('app-assets/img/core-img/rocket-performance.svg')}}" alt="performance network tneos">
                            <h5>Performance</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at cumque dolore dolorem doloribus enim, esse facilis fuga hic in magnam molestiae non officiis omnis pariatur quibusdam quidem quisquam, quos!</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-10">
                        <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; padding: 32px; border-radius: 12px;">
                            <img class="img-fluid" style="max-height: 64px;" src="{{asset('app-assets/img/core-img/reliability.svg')}}" alt="reliablity network tneos">
                            <h5>Reliability</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium, amet animi autem ex hic illo in, iste, laudantium libero optio porro quae quaerat reiciendis sit totam voluptatem voluptatum?</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-50">
                    <div class="col-md-6 col-sm-12 mt-10">
                        <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; padding: 32px; border-radius: 12px;">
                            <img class="img-fluid" style="max-height: 64px;" src="{{asset('app-assets/img/core-img/support.svg')}}" alt="support network tneos">
                            <h5>Support</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam blanditiis, ea, exercitationem laborum laudantium magni molestias nostrum optio suscipit ullam, voluptatibus! At atque doloremque, ducimus eos nam quas veritatis.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-10">
                        <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; padding: 32px; border-radius: 12px;">
                            <img class="img-fluid" style="max-height: 64px;" src="{{asset('app-assets/img/core-img/coverage.svg')}}" alt="support network tneos">
                            <h5>Coverage</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio eius magnam
                                maiores, ratione ullam vero! Aliquid asperiores doloribus, ea est explicabo iste numquam
                                odio placeat provident, tempore veniam voluptas!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 class="pt-5" style="color: #000000!important; font-weight: 200;">Join Brilliant & Creative </h2>
                <span style="color: #000000!important; font-weight: 200; letter-spacing: 0.6em">TEAM</span>
            </div>
            <div class="row mb-4">
                <div class="col text-center">
                    <h5 class="p-2 mt-4" style="font-weight: lighter;">As a trustworthy and responsible partner we are always at your side.</h5>
                </div>
            </div>
           {{-- <div class="row text-center">
                <h2 class="pt-5" id="india" style="color: #000000!important; font-weight: 200;">Our Network in India</h2>
            </div>
            <div class="container-fluid my-5">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Sunil Sundaram</a></h5>
                                <p><i class="icon-mobile-phone"></i>9632587998</p>
                                <p>Bangalore, Karnataka</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--<div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                    <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                    <div class="line"></div>
                                    <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                </div>
                            </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Damian Bastin</a></h5>
                                <p><i class="icon-mobile-phone"></i>8610584943</p>
                                <p>Chennai, Tamil Nadu</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">S K Gupta</a></h5>
                                <p><i class="icon-mobile-phone"></i>8097893453</p>
                                <p>Mumbai, Maharashtra</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--  <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                  <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                      <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                      <div class="line"></div>
                                      <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                  </div>
                              </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Satpal Singh</a></h5>
                                <p><i class="icon-mobile-phone"></i>9826155455</p>
                                <p>Rai Garh, Chattishgarh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--  <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                  <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                      <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                      <div class="line"></div>
                                      <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                  </div>
                              </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Neeraj Agarwal</a></h5>
                                <p><i class="icon-mobile-phone"></i>7897323715</p>
                                <p>Prayagraj, Uttarpradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--  <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                  <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                      <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                      <div class="line"></div>
                                      <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                  </div>
                              </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Anand Kumar</a></h5>
                                <p><i class="icon-mobile-phone"></i>8610584943</p>
                                <p>New Delhi, Delhi</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Raghvender Singh</a></h5>
                                <p>New Delhi, Delhi</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Ravi Badshapur</a></h5>
                                <p>Badshapur, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--   <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                   <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                       <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                       <div class="line"></div>
                                       <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                   </div>
                               </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Pramod Uttam</a></h5>
                                <p>Prayagraj, Uttarpradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Alok Joshi</a></h5>
                                <p>Ahmedabad, Gujrat</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Bilal</a></h5>
                                <p>Srinagar, J&K</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--   <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                   <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                       <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                       <div class="line"></div>
                                       <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                   </div>
                               </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Harinder Pratap</a></h5>
                                <p>Bareilly, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Kavita</a></h5>
                                <p>Indore, Madhya Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--   <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                   <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                       <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                       <div class="line"></div>
                                       <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                   </div>
                               </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">L N Tiwari</a></h5>
                                <p>Kanpur, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--   <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                   <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                       <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                       <div class="line"></div>
                                       <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                   </div>
                               </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Dr Rajeev Mohan</a></h5>
                                <p>Prayagraj, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--  <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                  <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                      <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                      <div class="line"></div>
                                      <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                  </div>
                              </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Floyd Jafney</a></h5>
                                <p>Ghazaibad, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{--  <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                  <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                      <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                      <div class="line"></div>
                                      <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                  </div>
                              </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Tyagi Prop</a></h5>
                                <p>Ghazaibad, Uttarpradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Pramod Gupta</a></h5>
                                <p>Gurugram, Haryana</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-member  bg-white shadow rounded" style=" height: 200px; width: 260px;">
                            --}}{{-- <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                                 <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                     <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                     <div class="line"></div>
                                     <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                                 </div>
                             </div>--}}{{--
                            <div class="desc text-center">
                                <h5 class="text-capitalize"><a href="#">Anupam Srivatava</a></h5>
                                <p>Ghazaibad, Uttar Pradesh</p>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}

            <div class="row text-center">
                <h2 class="pt-5" id="world" style="color: #000000!important; font-weight: 200;">Our Overseas Network</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                <div class="line"></div>
                                <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Shafi Naqvi</a></h5>
                            <p>Sharjha</p>
                            <p>UAE</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                <div class="line"></div>
                                <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Tariq Ahmad</a></h5>
                            <p><i class="icon-mobile-phone"></i>+1 437 970 6786</p>
                            <p>Toronto</p>
                            <p>Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                <div class="line"></div>
                                <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Aparmit Rai</a></h5>
                            <p><i class="icon-mobile-phone"></i>9873346020</p>
                            <p>Mexico City</p>
                            <p>Mexico</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                <div class="line"></div>
                                <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Rohit Pateria</a></h5>
                            <p><i class="icon-mobile-phone"></i>9958688331</p>
                            <p>Singapore City</p>
                            <p>Singapore</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{asset('app-assets/img/bg-img/Image-Not-Available.webp')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
                                <div class="line"></div>
                                <div class="social d-flex align-items-center justify-content-center"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Shiv Kumar</a></h5>
                            <p>New York</p>
                            <p>USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

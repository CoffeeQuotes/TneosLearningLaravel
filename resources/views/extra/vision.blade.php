@extends('layouts.app')
@section('page_title',"Our Mission, Vision and Values",  Tneos Eduloutions')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        .etched-text {
            text-shadow: 0 2px white!important;
            font-size: 1.5rem!important;
            font-weight: bold!important;
            color: #b8bec5!important;
        }
        .scene {
            width: 100%;
            min-height: 500px;
            perspective: 600px;
        }
        .card-vision {
            width: 100%;
            height: 100%;
            position: relative;
            transition: transform 1s;
            transform-style: preserve-3d;
            transform-origin: center right;
        }

        .card__face {
            position: absolute;
            height: 100%;
            width: 100%;
            backface-visibility: hidden;
        }
        .card__face--front {
            /*background: red;*/
        }

        .card__face--back {
            /*background: blue;*/
            transform: rotateY( 180deg );
        }

        .card-vision.is-flipped {
            transform: translateX(-100%) rotateY(-180deg);
        }
    </style>
@endpush
@push('head-scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush
@section('content')
    <section  style="  background: linear-gradient(to right, #ee0979, #ff6a00);
">
        <div class="jumbotron  p-0  m-0 rounded-0"
             style="background: url({{asset('app-assets/img/core-img/vision.webp')}}) no-repeat; background-size: contain; background-position: center right;">
            <div>
                <div class="container p-5">
                    <div class="row">
                        <div class="col-md-6 pt-4 shadow mt-10 text-center rounded justify-content-center py-auto"
                             style="background-color: rgba(0,0,0,0.73); backdrop-filter:  saturate(180%) blur(20px); ">
                            <h2 class=" my-auto"
                                style="color:   #fefefe /*** #0b2e13 ***/!important; line-height: 1.1em;">Mission, Vision &amp; Values </h2>
                            <p class="lead text-white">Quality Education For Everyone</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="video-container">
                                {{--                        <img src="{{asset('app-assets/img/core-img/about-education-tneos.png')}}" alt="about education in Tneos" style="max-height: 200px;" class="img-responsive">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container  mt-100">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 border-0" style="max-width: 540px; background: linear-gradient(to right, #f2709c, #ff9472);">
                        <div class="row g-0">
                            <div class="col-md-4 mx-auto">
                                <lottie-player class="card-img-top mx-auto"
                                               src="{{asset('app-assets/img/core-img/tneos-intelligence-ai.json')}}"
                                               mode="bounce" background="transparent" speed="1"
                                               style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-1">
                                    <h5 class="card-title mt-2" style="color: #fefefe!important;">Our Mission</h5>
                                    <p class="card-text">Our mission is to position our online educational company to become one of the leading brands in the online tutorial services industry.</p>
                                    <p class="card-text"><small class="text-white">Our Mission</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 border-0" style="max-width: 540px;  background: linear-gradient(to right, #f2709c, #ff9472);">
                        <div class="row g-0">
                            <div class="col-md-4 mx-auto">
                                <lottie-player class="card-img-top mx-auto"
                                               src="{{asset('app-assets/img/core-img/our-vision-tneos.json')}}"
                                               mode="bounce" background="transparent" speed="1"
                                               style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-1">
                                    <h5 class="card-title mt-2" style="color: #fefefe!important;">Our Vision</h5>
                                    <p class="card-text">Our vision is to build an online educational services provider brand that will become one of the preferred online educational websites in the online community.</p>
                                    <p class="card-text"><small class="text-white">Our Vision</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 220px!important;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="etched-text mt-5" style="color: #f94b26!important; letter-spacing: 0.01em;  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', Helvetica, Arial,
    sans-serif;" >Commitment For Education</h2>
                    <p style="font-size: 1.20em;">Our vision is wide-ranging.  It encompasses aspiration, educational excellence, system leadership, social mobility, and cohesion.</p>
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group text-left list-group-flush" style="font-weight: 220;">
                                <li class="list-group-item"> &#10687;  Transform the educational achievement of the nation’s young people, online education and academies</li>
                                <li class="list-group-item"> &#10687;  Elevate the life chances of young people in areas of social and economic deprivation – from all backgrounds – to help them succeed at the highest levels of education, employment and the professions</li>
                                <li class="list-group-item"> &#10687;  Provide more choice for parents by offering them the chance to send their children to an inspirational online class.</li>
                                <li class="list-group-item"> &#10687;  Make a demonstrable impact on social mobility and equality in communities that have called out for change for so long.</li>
                                <li class="list-group-item"> &#10687;  Create a diverse network of online education, ensuring every child has access to a first-rate education that embodies opportunity for all.

                                    In doing so we will nurture today’s young people and inspire tomorrow’s leaders.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="etched-text mt-5" style="color: #f94b26!important; letter-spacing: 0.01em;  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', Helvetica, Arial,
    sans-serif; ">Our Values</h2>
                            <p class="font-italic" style="color: gray;"><q>Customers will never love a company until the employees love it first.</q> - <span style="background: linear-gradient(to right, #f12711, #f5af19);

  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;">Simon Sinek</span></p>
                        </div>
                        <div class="container scene text-center mt-5 mb-100">
                            <div class="card-vision">
                                <div class="card__face card__face--front" style="background: linear-gradient(to right, #ee0979, #ff6a00);
"><img src="{{asset('app-assets/img/core-img/mission-and-vision-icons.webp')}}" alt="mission, vision and value" class="img-responsive" style="backdrop-filter: drop-shadow(4px 4px 10px #0f0f0f);">
                                    <div class="row text-left p-2 mb-100">
                                        <table class="table  rounded shadow-lg elegance ">
                                            <tr>
                                                <td>&#10687; We develop relationship that make a positive difference in our customer's lives.</td>
                                                <td>&#10687; We provide outstanding courses and unsurpassed service that, together, deliver premium value to our customers.</td>
                                            </tr>
                                            <tr>
                                                <td>&#10687; We uphold the highest standards of integrity in all our customers and to help the company win.</td>
                                                <td>&#10687; We value our people, encourage their development and reward their performance.</td>
                                            </tr>
                                            <tr>
                                                <td>&#10687; We are good citizens in the communities in which we live and work.</td>
                                                <td>&#10687; We exhibit a strong will to win in the marketplace and in every aspect of our business.</td>
                                            </tr>
                                            <tr>
                                                <td> &#10687; We are personally accountable for delivering on our commitments.</td>
                                            </tr>
                                        </table>


                                    </div>
                                </div>
                                <div class="card__face card__face--back" style="  background: linear-gradient(to right, #50d5b7, #067d68);
">                                <div class="container">
                                        <div class="row p-5">
                                            <div class="col-md-4">
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Customer Commitment
                                                </div>
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Teamwork
                                                </div>
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Respect for People
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-none d-md-block d-lg-block">
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4 d-sm-none d-md-block" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Quality
                                                </div>
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4 d-sm-none d-md-block" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Good Citizenship
                                                </div>
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4 d-sm-none d-md-block" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    A Will to Win
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-none d-md-block d-lg-block">
                                                <div class="bg-white text-uppercase shadow rounded p-4 m-4 d-sm-none d-md-block" style="background: linear-gradient(to right, #0ccda3, #0ccda3, #c1fcd3); color: #fefefe; backdrop-filter: saturate(180%) blur(20px);">
                                                    Personal Accountability
                                                </div>
                                                {{--  <div class="bg-white shadow rounded p-2">
                                                      Integrity
                                                  </div>
                                                  <div class="bg-white shadow rounded p-2">
                                                      Integrity
                                                  </div>--}}
                                            </div>
                                        </div>
                                        <div class="row p-2 mb-100">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{--<img class="img-fluid" src="{{asset('app-assets/img/core-img/teams.png')}}" alt="" style="width: 100%; backdrop-filter: saturate(180) blur(20);">--}}
    @push('footer-scripts')
        <script>
            var card = document.querySelector('.card-vision');
            card.addEventListener( 'click', function() {
                card.classList.toggle('is-flipped');
            });
        </script>
    @endpush
@endsection

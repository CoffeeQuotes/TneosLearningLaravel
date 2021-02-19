@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>

        .jcarousel-wrapper {
            margin: 20px auto;
            position: relative;
            /*border: 10px solid #fff;*/
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 0 2px #999;
            -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
        }

        /** Carousel **/

        .jcarousel {
            position: relative;
            overflow: hidden;
            width: 100%;
            /*background: linear-gradient(to right, #283048, #859398);*/
            /*background: linear-gradient(to right, #c04848, #480048);*/
            background-image: linear-gradient(-225deg, #FF057C 0%, #8D0B93 50%, #321575 100%);
        }


        .jcarousel ul {
            width: 10000em;
            position: relative;
            list-style: none;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #283048, #859398);
        }

        .jcarousel li {
            width: 200px;
            float: left;
            /*border: 1px solid #fff;*/
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 20px;
        }

        .jcarousel img {
            display: block;
            max-width: 100%;
            height: auto !important;
        }

        /** Carousel Controls **/

        .jcarousel-control-prev,
        .jcarousel-control-next {
            position: absolute;
            top: 50%;
            margin-top: -15px;
            width: 30px;
            height: 30px;
            text-align: center;
            background: #4E443C;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 0 1px #000;
            font: 24px/27px Arial, sans-serif;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            -webkit-box-shadow: 0 0 4px #F0EFE7;
            -moz-box-shadow: 0 0 4px #F0EFE7;
            box-shadow: 0 0 4px #F0EFE7;
        }

        .jcarousel-control-prev {
            left: 15px;
        }

        .jcarousel-control-next {
            right: 15px;
        }

        /** Carousel Pagination **/

        .jcarousel-pagination {
            position: absolute;
            bottom: -40px;
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            margin: 0;
        }

        .jcarousel-pagination a {
            text-decoration: none;
            display: inline-block;

            font-size: 11px;
            height: 10px;
            width: 10px;
            line-height: 10px;

            background: #fff;
            color: #4E443C;
            border-radius: 10px;
            text-indent: -9999px;

            margin-right: 7px;


            -webkit-box-shadow: 0 0 2px #4E443C;
            -moz-box-shadow: 0 0 2px #4E443C;
            box-shadow: 0 0 2px #4E443C;
        }

        .jcarousel-pagination a.active {
            background: #4E443C;
            color: #fff;
            opacity: 1;

            -webkit-box-shadow: 0 0 2px #F0EFE7;
            -moz-box-shadow: 0 0 2px #F0EFE7;
            box-shadow: 0 0 2px #F0EFE7;
        }

        .slider-leader {
            min-height: 260px;
            min-width: 260px;
            /*background:  rgba(16, 18, 27/0.4);*/
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: blur(20px);
            font-weight: 500;
            color: #fefefe !important;
            font-size: 15px;
            text-align: justify;
            border-radius: 32px;
            background: url({{asset('app-assets/img/core-img/bg-core-team-2.webp')}}) no-repeat;
            background-size: cover;
        }
        .card-heading-promote {
            color: #007bff!important;
            font-weight: 200!important;
        }
        .card-designation-promote {
            color: #000!important;
            font-weight: 400!important;
        }
        .card-text-promote {
            font-weight: 100!important;
        }
    </style>
@endpush

@section('content')
    <section class="snow_again">
        {{--  <div class="jumbotron party_bliss" style="background-color: #ffffff; background-blend-mode: multiply; border-radius: 0; border-bottom-left-radius: 100%;  border-bottom-right-radius: 100%; ">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <h2 style="color: white!important; letter-spacing: 2px;">Our Promoters</h2>
                          <p class="lead text-white">Meet the people who inspires us</p>
                      </div>
                      <div class="col-md-6">
                          <img class="img-fluid" alt="promoters" src="{{'app-assets/img/core-img/promoters.png'}}"/>
                      </div>
                  </div>

              </div>
          </div>--}}
        <div class="container">
            <div class="py-md-5 py-sm-2"
                 style="background: linear-gradient(to left top, rgba(255,255,255,0.8), rgba(255,255,255,0.2)); border-radius: 2rem; z-index: 2; backdrop-filter: blur(2rem);">
                <div class="row py-md-2 py-sm-0 px-4">
                    <div class="col-md-6 py-md-5 py-sm-1 px-4">
                        <h2 class="my-5 text-capitalize" style="font-weight: lighter; text-align: left;">The Team behind
                            Tneos</h2>
                        <p class="font-weight-lighter font-serif">Tneos Eduloutions Limited, a Online Edu-Tech Co.
                            promoted by Technology & Financial Wizards of the Industry.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="" src="{{"app-assets/img/core-img/tneos-office-uk.webp"}}" alt="tneos promoters"
                             style="border: 2px solid rgba(255,255,255,0.8); box-shadow: 6px 6px 12px #aaaaaa;">
                    </div>
                </div>
            </div>
        </div>
        <section class="teachers-area ">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-12 mt-4">
                        <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms"
                             style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            {{-- <h5 class="text-uppercase etched-text" style="color: #b8bec5!important;
 ;"></h5> --}}
                            <h5 class="text-capitalize etched-text" style="color: #000000!important;
;">Our Management Team </h5>
                        </div>
                    </div>
                </div>
                <div class="container-fluid  pl-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-2 border-0 mb-3 bg-white shadow" style="background-color: rgba(0, 0, 0, 0.7);">
                                <div class="row no-gutters">
                                    <div class="col-md-4 pt-2">
                                        <img style="" alt='' class="card-img"
                                             src='{{asset('app-assets/img/bg-img/mukesh.webp')}}'>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-2">
                                            <h5 class="card-title pb-0 mb-0 card-heading-promote">Mr. Mukesh
                                                Kumar</h5>
                                            <span class="card-designation mt-0 card-designation-promote">Founder & Managing Director</span>
                                            <p class="card-text text-left card-text-promote">Mr. Mukesh a
                                                successful entrepreneur, angel investor and a business transformation coach.
                                                He has over 18 years of extensive experience.</p>
                                            <a class='text-primary' data-toggle="modal" data-target="#staticBackdrop"
                                               href='#'>
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="card-container mb-sm-4">
                            <div class="card-wrap">
                                <div class='card'>
                                    <div class='card-img-top'>
                                        <img style="border-top-left-radius: 32px; border-bottom-left-radius: 32px;" alt='' class='img-fluid' src='{{asset('app-assets/img/bg-img/latest-mukesh.webp')}}'>
                                    </div>
                                    <div class='card-block'>
                                        <div class="card-block-content">
                                            <h4 class='card-title mt-2' style="font-weight: 300; color: #007bff!important;">Mukesh Kumar</h4>
                                            <span class="card-designation mt-0" style="color: #000;">Founder & Managing Director</span>
                                            <p class='card-text' style="font-weight: 100!important;">Mr. Mukesh a successful entrepreneur, angel investor and a business transformation coach.</p>
                                            <a class='btn btn-primary'  data-toggle="modal" data-target="#staticBackdrop" href='#'>
                                                <i class='fa fa-plus'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        {{--   <div class="card p-2 border-0 mb-3 lemon_gate shadow" style="background-color: rgba(0, 0, 0, 0.7);">
                               <div class="row g-0">
                                   <div class="col-md-4">
                                       <img style="border-top-left-radius: 32px; border-bottom-left-radius: 32px;" alt='' class='' src='{{asset('app-assets/img/bg-img/latest-mukesh.webp')}}'>
                                   </div>
                                   <div class="col-md-8">
                                       <div class="card-body p-2">
                                           <h5 class="card-title" style="color: #2ab17f!important;">Mukesh Kumar</h5>
                                           <p class="card-text" style="line-height: 0.8rem; font-weight: 360;">Mr. Mukesh a successful entrepreneur, angel investor and a business transformation coach.</p>
                                       </div>
                                   </div>
                               </div>--}}

                        <div class="col-md-4">
                            <div class="card p-2 border-0 mb-3 bg-white shadow"
                                 style="background-color: rgba(0, 0, 0, 0.7); ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 pt-2">
                                        <img alt='' class='card-img' src='{{asset('app-assets/img/bg-img/arun-2.webp')}}'>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-2">
                                            <h5 class="card-title pb-0 mb-0 card-heading-promote">Mr. Arun
                                                Agarrwal</h5>
                                            <span class="card-designation mt-0 card-designation-promote ">Co-Founder & CEO</span>
                                            <p class="card-text text-left card-text-promote" >Mr. Arun brings in
                                                experience and expertise from an incubating eco-system having been part of a
                                                series of
                                                start-ups in capacity of founder promoter and on board.</p>
                                            <a class='text-primary' data-toggle="modal" data-target="#staticBackdrop2"
                                               href='#'>
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-2 border-0 mb-3 bg-white shadow"
                                 style="background-color: rgba(0, 0, 0, 0.7); ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 pt-2">
                                        <img style="" alt='' class='card-img'
                                             src='{{asset('app-assets/img/bg-img/mam.webp')}}'>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-2 text-justify">
                                            <h5 class="card-title pb-0 mb-0 card-heading-promote">Mrs. Neeru
                                                Gupta</h5>
                                            <span class="card-designation mt-0 card-designation-promote">Director Technical Strategy</span>
                                            <p class="card-text text-left card-text-promote" >Mrs. Neeru is a Post
                                                Graduate (M.Sc.) from Dehradun University in Physics and a DOEACC-A Level
                                                &amp; PGDCST
                                                (PGDCA) in Computer Programming.</p>
                                            <a class='text-primary' data-toggle="modal" data-target="#staticBackdrop3"
                                               href='#'>
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            {{--  <div class="col-md-6">
                                  <div class="card p-2 border-0 mb-3 bg-white shadow" style="background-color: rgba(0, 0, 0, 0.7); ">
                                      <div class="row g-0">
                                          <div class="col-md-4 pt-2">
                                              <img style="" alt='' class='card-img' src='{{asset('app-assets/img/bg-img/mam.webp')}}'>
                                          </div>
                                          <div class="col-md-8">
                                              <div class="card-body p-2">
                                                  <h5 class="card-title" style="color: #2ab17f!important;  font-weight: 200!important;">Neeru Gupta</h5>
                                                  <span class="card-designation mt-0"  style="color: #000;">Director Technical Strategy</span>
                                                  <p class="card-text" style="line-height: 0.8rem; font-weight: 360;">Neeru is a Post Graduate (M.Sc.) from Dehradun University in Physics and a DOEACC-A Level &amp; PGDCST
                                                      (PGDCA Software Technology) in Computer Programming.</p>
                                                  <a class='text-success' data-toggle="modal" data-target="#staticBackdrop3"  href='#'>
                                                      Read more
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>--}}
                            {{--<div class="card-container mb-sm-4 rounded">
                                <div class="card-wrap">
                                    <div class='card'>
                                        <div class='card-img-top'>
                                            <img style="" alt='' class='card-img' src='{{asset('app-assets/img/bg-img/latestneeru.webp')}}'>
                                        </div>
                                        <div class='card-block'>
                                            <div class="card-block-content">
                                                <h4 class='card-title mb-0' style="font-weight: 300; color: #007bff!important;">Neeru Gupta</h4>
                                                <span class="card-designation mt-0"  style="color: #000;">Director Technical Strategy</span>
                                                <p class='card-text' style="font-weight: 100!important;">Neeru is a Post Graduate (M.Sc.) from Dehradun University in Physics and a DOEACC-A Level &amp; PGDCST
                                                    (PGDCA Software Technology) in Computer Programming.</p>
                                                <a class='btn btn-primary' data-toggle="modal" data-target="#staticBackdrop3"  href='#'>
                                                    <i class='fa fa-plus'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                        {{-- Modals --}}
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Mr. Mukesh Kumar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Mr. Mukesh a successful entrepreneur, angel investor and a business transformation
                                        coach. He has over 18 years of extensive experience in building new product
                                        offerings, scaling start-up companies and managing large transformation initiatives.
                                        As a consultant he was involved with several mid-sized companies that have scaled
                                        their businesses with speed. A dynamic personality with focus and strategic planning
                                        has made immense contribution in managing and improvising operations, processes and
                                        policies in support for the company's mission. His significant role in long-term
                                        planning towards organizational excellence makes him stand out in his field of work.
                                        He is a qualified commerce graduate and is an engineering graduate diploma holder in
                                        the field of electronics & electricals from Delhi He has significant experience in
                                        corporate strategy, planning, business development, and responsible for setting
                                        strategic direction and overall future business performance of the company. He
                                        values importance of people development and dedicates his expertise and time in. He
                                        has a rich legacy of more than 15 years in Education Sector as a promoter & owner of
                                        SBP Institute Pvt Ltd to add to his credit.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Mr. Arun Agarrwal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Mr. Arun brings in experience and expertise from an incubating eco-system having
                                        been part of a series of start-ups in capacity of founder promoter and on board. He
                                        holds Masters in Management Degree (MBA) with specialization in Finance &
                                        International Business from Delhi, and is also a professional course CFA (I) from
                                        ICFAI Hyderabad. He has worked for various top corporate in top management positions
                                        in his 25 year career and handled various big projects. He also has vast knowledge
                                        in the field of investments and is well versed with Capital Markets, Corporate
                                        Restructuring, Investment Banking, Private Equity, International Trade Finance
                                        instruments. . To name of a few organizations where he has gained experience and
                                        exposure are Kotak Securities, Angel Broking, and India Bulls etc. Arun has spent
                                        quite a few years in developing companies of Education Domain and is also associated
                                        with Tenos as Executive Director- Finance & Strategy.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="staticBackdrop3" data-backdrop="static" tabindex="-1" role="dialog"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Neeru Gupta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Neeru is a Post Graduate (M.Sc.) from Dehradun University in Physics and a DOEACC-A
                                        Level & PGDCST (Post Graduate Diploma in Computer Software Technology) in Computer
                                        Programming. She has vast experience of more than decades in major Corporates of the
                                        country in IT & Education Sectors. To name of a few organizations where she has
                                        gained experience and exposure are ICFAI University, JIMS Management Institute, NDMC
                                        etc. Mrs. Gupta has spent quite a few years in Training and Organization and has
                                        worked extensively with National Centre for Agricultural & Policy Research & Aptara
                                        Corporation. She has developed content in almost all areas of Education Management
                                        and is also involved with E-Learning Education Management with Tenos as a Full Time
                                        Director.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--<div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img" src="{{asset('app-assets/img/bg-img/t2.png')}}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="/***color: #6c84ba!important; font-weight: lighter; border-bottom: #0a5faf 2px groove;***/">Neeru Gupta</h5>
                                        <span class="text-uppercase card-text" style="font-weight: bolder; margin-bottom: 50px!important;">Director Admin</span>
                                        <p class="text-justify card-text">Neeru is a <b>Post Graduate (M.Sc.)</b> from <i><strong>Dehradun University</strong></i> in Physics and a <b>DOEACC-A Level &amp; PGDCST</b>
                                            (Post Graduate Diploma in Computer Software Technology) in Computer Programming. She has vast
                                            experience of more than decades in major Corporates of the country in IT &amp; Education Sectors. To
                                            name of a few organizations where she has gained experience and exposure are ICFAI University, JIMS
                                            Management Institute, NDMC etc. Mrs. Gupta has spent quite a few years in Training and
                                            Organization and has worked extensively with National Centre for Agricultural &amp; Policy Research &amp;
                                            Aptara Corporation. She has developed content in almost all areas of Education Management and is
                                            also involved with E-Learning Education Management with Tenos as a Full Time Director.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-100">
                            <div class="col-md-4">
                                <img class="img-fluid p-4" src="{{asset('app-assets/img/bg-img/arun.jpg')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h5 class="display-4" style="color: #6c84ba!important; font-weight:  lighter; border-bottom: #0a5faf 2px groove;">Arun Agarrwal</h5>
                                <span class="text-uppercase" style="font-weight: bolder; margin-bottom: 50px!important;"> Executive Director- Finance</span>
                                <p class="text-justify">Arun brings in experience and expertise from an incubating eco-system having been part of a series of
                                    start-ups in capacity of founder promoter and on board. He holds Masters in <b>Management Degree
                                        (MBA)</b> with specialization in <b>Finance &amp; International Business</b> from Delhi, and is also a professional
                                    course CFA (I) from ICFAI Hyderabad. He has worked for various top corporate in top management
                                    positions in his 25 year career and handled various big projects. He also has vast knowledge in the
                                    field of investments and is well versed with Capital Markets, Corporate Restructuring, Investment
                                    Banking, Private Equity, International Trade Finance instruments. . To name of a few organizations
                                    where he has gained experience and exposure are Kotak Securities, Angel Broking, and India Bulls etc.
                                    Arun has spent quite a few years in developing companies of Education Domain and is also associated
                                    with Tenos as Executive Director- Finance &amp; Strategy.</p>
                            </div>
                        </div>
                        <div class="row mt-100">
                            <div class="col-md-4">
                                <img class="img-fluid p-4" src="{{asset('app-assets/img/bg-img/mukesh_sir.webp')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h5 class="display-4" style="color: #6c84ba!important; font-weight:  lighter; border-bottom: #0a5faf 2px groove;">Mukesh Kumar </h5>
                                <span class="text-uppercase" style="font-weight: bolder; margin-bottom: 50px!important;">Founder & MD</span>
                                <p class="text-justify">Mr Mukesh a successful entrepreneur, angel investor and a business transformation coach. He has over 18 years of extensive experience in building new product offerings, scaling start-up companies and managing large transformation initiatives.  As a consultant he was involved with several mid-sized companies that have scaled their businesses with speed.
                                    A dynamic personality with focus and strategic planning has made immense contribution in managing and improvising operations, processes and policies in support for the company's mission. His significant role in long-term planning towards organizational excellence makes him stand out in his field of work.
                                    He is a qualified commerce graduate and is an engineering graduate diploma holder in the field of electronics & electricals  from Delhi  He has significant experience in corporate strategy, planning, business development, and responsible for setting strategic direction and overall future business performance of the company. He values importance of people development and dedicates his expertise and time in. He has a rich legacy of more than 15 years in Education Sector as a promoter & owner of SBP Institute Pvt Ltd to add to his credit.
                                </p>
                            </div>
                        </div>--}}

                    </div>
                    <div class="row mt-4">
                        <div class="col-12 mt-4">
                            <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms"
                                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                {{--<h5 class="text-uppercase etched-text" style="color: #b8bec5!important;
    ;"></h5>--}}
                                <h5 class="text-capitalize etched-text" style="color: #000000!important;
;">Our Core Team </h5>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <div class="container-fluid  pl-2">
            <div class="wrapper mb-100">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel">
                        <ul>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Sunil Nigam</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Executive
                                            Director-Marketing Overseas Operations </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>PGBDA Finance, B.E.
                                                Metallurgy,
                                                B.Sc., Diploma in Production
                                                Management & Quality Control & ISO 9000</small></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">U. K Adhikari</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Vice President
                                            –Marketing Domestic Operations </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>B.A., Export Management,
                                                Professional
                                                Diploma from NIIT</small></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Bhupender Singh Dogra</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Territory Head Rural
                                            Sales- J&K </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>B.A. Diploma in Sales &
                                                Marketing</small></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Hari Singh </h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Territory Head Rural
                                            Sales- Uttar-Pradesh </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>Bachelors Of Arts</small>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white   rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Mukesh Chaudhary</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Sr. Manager- Digital
                                            Technology Promotion Team </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>Bachelors Of Arts</small>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Radhika Maurya </h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Sr. Manager Online
                                            Marketing </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>Bachelors Of Arts</small>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Alka Maurya</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Sr .Manager -
                                            Teaching Management</small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>B.Com., M.Com.</small></p>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="bg-white  rounded shadow m-3 p-3 text-center slider-leader">
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Abhishek Singh</h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Manager Camera
                                            Handling & Recording</small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>Bachelors Of Arts</small>
                                        </p>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="bg-white rounded shadow m-3 p-3 text-center slider-leader" >
                                    <div class="shadow">
                                        <h6 class="text-uppercase m-2 mt-5 p-2  text-dark ">Ambika </h6>
                                        <small class="text-dark p-2 rounded shadow" style="background-color: #d69a21; color: saddlebrown!important; font-weight: 600; letter-spacing: 0.1em;">Team Leader -Online
                                            Marketing </small>
                                        <p style="color: #000!important; letter-spacing: 0.2em;" class="  p-1"><small>Final year
                                                Graduation</
                                            small></p>
                                    </div>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                    <p class="jcarousel-pagination"></p>
                </div>
            </div>
    </section>
@endsection
@push('footer-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.9/jquery.jcarousel.min.js"
            integrity="sha512-5TU8T3STShZiLsdqDqiKnj0Z72ccPZpIDCuItxc2S7G3lyiwqiuLuDFVNsLQ7Hgu5f33DlZ2KAJspbn6NAXqnA=="
            crossorigin="anonymous"></script>
    <script>
        (function ($) {
            $(function () {
                var jcarousel = $('.jcarousel');

                jcarousel
                    .on('jcarousel:reload jcarousel:create', function () {
                        var carousel = $(this),
                            width = carousel.innerWidth();

                        if (width >= 600) {
                            width = width / 3;
                        } else if (width >= 350) {
                            width = width / 2;
                        } else if (width <= 350) {
                            width = width / 1;
                        }

                        carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
                    })
                    .jcarousel({
                        wrap: 'circular'
                    });

                $('.jcarousel-control-prev')
                    .jcarouselControl({
                        target: '-=1'
                    });

                $('.jcarousel-control-next')
                    .jcarouselControl({
                        target: '+=1'
                    });

                $('.jcarousel-pagination')
                    .on('jcarouselpagination:active', 'a', function () {
                        $(this).addClass('active');
                    })
                    .on('jcarouselpagination:inactive', 'a', function () {
                        $(this).removeClass('active');
                    })
                    .on('click', function (e) {
                        e.preventDefault();
                    })
                    .jcarouselPagination({
                        perPage: 1,
                        item: function (page) {
                            return '<a href="#' + page + '">' + page + '</a>';
                        }
                    });
            });
        })(jQuery);
    </script>
@endpush

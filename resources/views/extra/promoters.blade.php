@extends('layouts.app')
@section('page_title',"Our Promoters")
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
@endpush

@section('content')
<section class="snow_again">
     <div class="jumbotron party_bliss" style="background-color: #ffffff; background-blend-mode: multiply; border-radius: 0; border-bottom-left-radius: 100%;  border-bottom-right-radius: 100%; ">
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
     </div>
     <div class="container">
         <div class="py-md-5 py-sm-2" style="background-color: rgb(255,255,255); background: linear-gradient(to left top, rgba(255,255,255,0.8), rgba(255,255,255,0.2)); border-radius: 2rem; z-index: 2; backdrop-filter: blur(2rem);">
            <div class="row py-md-2 py-sm-0 px-4">
                <div class="col-md-6 py-md-5 py-sm-1 px-4">
                    <h2 class="my-5" style="font-weight: lighter;">Truly Excellent &amp; Well-rounded Courses</h2>
                    <p class="font-weight-lighter font-serif">We create simple, must-watch video courses, We build deep, surprising and wonderful relation with students &amp; We give positive, highly instructive and interesting class experience.</p>
                </div>
                <div class="col-md-6">
                    <img class="" src="{{"app-assets/img/core-img/tneos-office-uk.png"}}" alt="tneos promoters" style="border: 2px solid rgba(255,255,255,0.8); box-shadow: 6px 6px 12px #aaaaaa;">
                </div>
            </div>
        </div>
     </div>
         <section class="teachers-area section-padding-0-100">
             <div class="container">
                 <div class="row">
                     <div class="col-12 mt-100">
                         <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                             <span>Selected</span>
                             <span class="display-4">Promoters</span>
                         </div>
                     </div>
                 </div>
                 <div class="container bg-white section-padding-100 pl-2">
                     <div class="row">
                         <div class="col-md-4">
                             <img class="img-fluid p-4" src="{{asset('app-assets/img/bg-img/t2.png')}}" alt="">
                         </div>
                         <div class="col-md-8">
                             <h5 class="display-4" style="font-weight: lighter; border-bottom: #0a5faf 2px groove;">Neeru Gupta</h5>
                             <span class="text-uppercase" style="font-weight: bolder; margin-bottom: 50px!important;">Director Education Strategy, M.Sc. (Physics)</span>
                             <p class="text-justify">Neeru is a <b>Post Graduate (M.Sc.)</b> from <i><strong>Dehradun University</strong></i> in Physics and a <b>DOEACC-A Level &amp; PGDCST</b>
                                 (Post Graduate Diploma in Computer Software Technology) in Computer Programming. She has vast
                                 experience of more than decades in major Corporates of the country in IT &amp; Education Sectors. To
                                 name of a few organizations where she has gained experience and exposure are ICFAI University, JIMS
                                 Management Institute, NDMC etc. Mrs. Gupta has spent quite a few years in Training and
                                 Organization and has worked extensively with National Centre for Agricultural &amp; Policy Research &amp;
                                 Aptara Corporation. She has developed content in almost all areas of Education Management and is
                                 also involved with E-Learning Education Management with Tenos as a Full Time Director.</p>
                         </div>
                     </div>
                     <div class="row mt-100">
                         <div class="col-md-4">
                             <img class="img-fluid p-4" src="{{asset('app-assets/img/bg-img/arun.jpg')}}" alt="">
                         </div>
                         <div class="col-md-8">
                             <h5 class="display-4" style="font-weight:  lighter; border-bottom: #0a5faf 2px groove;">Arun Agarrwal</h5>
                             <span class="text-uppercase" style="font-weight: bolder; margin-bottom: 50px!important;">Director Education Strategy, M.Sc. (Physics)</span>
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
                 </div>
             </div>
         </section>
     </div>
</section>
@endsection

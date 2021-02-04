@extends('layouts.app')
@section('page_title','Become a Teacher, Tneos Eduloution Ltd')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
@endpush
@push('head-scripts')
    <script src="https://unpkg.com/fluidify-video"></script>
@endpush
@section('content')
    <section class="glass_water">
        <div class="jumbotron october_silence">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-white" style="color: #fefefe!important;">Teach On Tneos</h2>
                        <p class="lead text-white-50">Join Tneos Eduloutions Ltd.</p>
                        <a target="_blank" href="https://forms.gle/uMuyFU1pwqPinqx57" class="btn btn-primary">Teach On Tneos</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="video-container" style="max-width: 800px;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/O1s7MMlpTOQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
{{--                        <div class="solid_stone">--}}
{{--                            <img class="" style="max-height: 200px;" src="{{"app-assets/img/core-img/become-a-teacher.png"}}" alt="tneos faqs">--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="text-center">
                    <h2 style="color: #b721ff!important; font-weight: 400;">Why Teach with Tneos?</h2>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4 text-center">
                        <h5 class="p-2 mt-4" style="letter-spacing: 1.2px; font-weight: lighter;">Earn Well 💰</h5>
                        <img class="img-responsive p-4" src="https://img.icons8.com/plasticine/100/000000/money.png"/>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5 class="p-2 mt-4" style="letter-spacing: 1.2px; font-weight: lighter;">Anytime ⌚ & Anywhere</h5>
                        <img class="img-responsive p-4" src="https://img.icons8.com/plasticine/100/000000/time-machine.png"/>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5 class="p-2 mt-4" style="letter-spacing: 1.2px; font-weight: lighter;">Join a ❤️Community</h5>
                        <img class="img-responsive p-4" src="https://img.icons8.com/officel/80/000000/user-group-woman-woman.png"/>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4 sunny_morning">
                <div class="text-center pt-4">
                    <h2 style="color: #383d41!important; font-weight: 200;">Earning Potential</h2>
                </div>
                <div class="row text-center">
                    <div class="col text-center">
                        <p style="font-size: 20px;  line-height: 0.6;" class="m-0">From Minimum <b style="font-size: 40px; color: #edfb01;">⬅</b> <b style="font-size: 40px; color: #edfb01;">➡</b> Upto</p>
                        <h2 style="font-weight: lighter; /* color: #edfb01 */" class="mt-3 m-0"><b>₹</b> 15,000+ <strong style="/* color: #edfb01; */ font-weight: lighter;">&nbsp; &nbsp;- &nbsp; &nbsp;</strong> <b>₹</b> 1 Lac.</h2>
                    </div>
                </div>
                <div class="row text-center pb-4">
                    <div class="col-md-12 pb-4">
                        Daily Work ~ 3 Hrs/Days
                    </div>
                </div>
                </div>
        </section>

        <section class="final-cta text-center">
            <h2 class="headline text-center p-4" style="color: #383d41;">Get Started, Today!</h2>
            <div class="container">
                <div class="row">
                    <div class="col mb-100">
                        <p class="lead">Apply by filling in a simple form.</p>
                        <a target="_blank" href="https://forms.gle/uMuyFU1pwqPinqx57" class="btn btn-lg btn-success px-5">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection

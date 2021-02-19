@extends('layouts.app')
@section('page_title', 'Register New Account')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
<style>
    .bg-block-register {
        background-color: #2a2a72; background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
        min-height: 100vh;
    }
    .features-boxes {

    }

</style>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-block-register">
                <div class="row">
                    <div class="col text-center">
                        <img class="img-fluid  m-4  lady_lips  rounded-circle shadow" src="{{asset('app-assets/img/bg-img/ABHISHEK.webp')}}" alt="Abhishek Sir" style="width:50%; height: auto;"/>
                        <span class="display-5 d-block text-white">Mathematics</span>
                        <p class="font-weight-lighter text-monospace  text-white">By Abhishek Kumar |B.Sc., B.Ed., CTET Qual. | 7 yrs. Exp.</p>
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid  m-4 young_passion rounded-circle shadow" src="{{asset('app-assets/img/bg-img/ANINDHITHA.webp')}}" alt="Anindhitha Mam" style="width:50%; height: auto;"/>
                        <span class="display-5 d-block text-white">English</span>
                        <p class="font-weight-lighter text-monospace  text-white">By Anindita Giri | M.A. Eng.(HONS), B.Ed., CTET QUAL.</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="col text-center">
                        <img class="img-fluid m-4  premium_dark rounded-circle shadow" src="{{asset('app-assets/img/bg-img/NEERAJ.webp')}}" alt="Neeraj Sir" style="width:50%; height: auto;"/>
                        <span class="display-5 d-block text-white">Mathematics</span>
                        <p class="font-weight-lighter text-monospace  text-white">By  Neeraj Nailwal | B.SC., M.SC. | 2 yrs. Exp.</p>
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid m-4  premium_white rounded-circle shadow" src="{{asset('app-assets/img/bg-img/vijendra.webp')}}" alt="Vijendra Sir" style="width:50%; height: auto;"/>
                        <span class="display-5 d-block text-white">Science</span>
                        <p class="font-weight-lighter text-monospace  text-white">By Vijendra Singh | B.E. of Engineering (Mechanical)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


                <div class="text-center mt-5">
                    <h3 class="py-5">{{ __('Register') }} Now To Continue</h3>

                    <div>
                        <form class="text-left" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control textbox-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control textbox-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control textbox-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control textbox-input" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn btn-lg  mars_party text-white">
                                        {{ __('Register') }} Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-5 text-center text-capitalize">
                    <div class="col-6">
                        <a href="\website-terms">By joining you agree to our T&C</a>
                    </div>
                    <div class="col-6">
                        <a href="\login"> Already have an account? LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row risky_concrete pattern-section py-5">
            <h2 class="p-5">Program Features</h2>
            <div class="container-fluid mx-auto">
                <div class="row">
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-users fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Classes by India's best teachers </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-calendar-check-o fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Practice sessions with tutors </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-cubes fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Understand complex concepts </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-circle-o-notch fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">One-on-one guidance from mentors </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-area-chart fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Monthly progress report with performance update </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-file-video-o fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">24/7 video lessons on the app </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-users fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Instant doubt resolution</p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-calendar-check-o fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Topic choice flexibility </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-cubes fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Solve questions in real-time with tutors </p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-circle-o-notch fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Regular homework and assessment</p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-area-chart fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Personalised extra classes for revision</p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-file-video-o fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Unlimited practice tests</p>
                    </div>
                    <div class="col features-boxes p-3 m-2 font-weight-lighter shadow bg-white rounded">
                        <i class="fa fa-file-video-o fa-5x font-weight-lighter pull-left" aria-hidden="true"></i><br>
                        <p class="mt-2">Detailed student performance updates for parents</p>
                    </div>
                </div>
            </div>

{{--            <table class="table table-light table-sm table-striped">
                <thead>
                <th></th>
                <th><h2>Program Features</h2></th>
                </thead>
                <tbody>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Classes by Indiaâ€™s best teachers</td><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Instant doubt resolution</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Practice sessions with tutors</td><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Topic choice flexibility</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Understand complex concepts</td><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Solve questions in real-time with tutors</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>One-on-one guidance from mentors</td><td> <span class="text-warning">ðŸŒŸ</span>   </td><td>Regular homework and assessment</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Monthly progress report with performance update</td><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Personalised extra classes for revision</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>24/7 video lessons on the app</td><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Unlimited practice tests</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Individual knowledge graph for each student</td><td> <span class="text-warning">ðŸŒŸ</span>   </td><td>Mapped to the school syllabus</td></tr>
                <tr><td>  <span class="text-warning">ðŸŒŸ</span>  </td><td>Detailed student performance updates for parents</td></tr>
                </tbody>
            </table>--}}
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('page_title', 'Register New Account')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-2 pb-5 pt-2">
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <img class="img-fluid img-thumbnail rounded-circle shadow-sm" src="{{asset('app-assets/img/bg-img/teacher0.png')}}" alt="" style="width:50%; height: auto;"/>
                    <span class="display-5 d-block">Mathematics</span>
                    <p class="font-weight-bold font-italic text-secondary">By Abhishek Kumar |B.Sc., B.Ed., CTET Qual. | 7 yrs. Exp.</p>
                </div>
                <div class="col">
                    <img class="img-fluid img-thumbnail rounded-circle shadow-sm" src="{{asset('app-assets/img/bg-img/teacher_.png')}}" alt="" style="width:50%; height: auto;"/>
                    <span class="display-5 d-block">English</span>
                    <p class="font-weight-bold font-italic text-secondary">By Anindita Giri | M.A. Eng.(HONS), B.Ed., CTET QUAL.</p>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <img class="img-fluid img-thumbnail rounded-circle shadow-sm" src="{{asset('app-assets/img/bg-img/teacher2.png')}}" alt="" style="width:50%; height: auto;"/>
                    <span class="display-5 d-block">Science (Odia)</span>
                    <p class="font-weight-bold font-italic text-secondary">By Soumya Jena | M.C.A, B.Sc. (Phy.)</p>
                </div>
                <div class="col">
                    <img class="img-fluid img-thumbnail rounded-circle shadow-sm" src="{{asset('app-assets/img/bg-img/teacher3.png')}}" alt="" style="width:50%; height: auto;"/>
                    <span class="display-5 d-block">Science</span>
                    <p class="font-weight-bold font-italic text-secondary">By Piyush Prasad | B.E. of Engineering (Mechanical)</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            

            <div class="login-form-2 mt-5">
                <h3>{{ __('Register') }} Now</h3>

                <div>
                    <form method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-sm btnSubmit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
          <table class="table table-light table-sm table-striped">
                <thead>
                <th></th>
                <th><h2>Program Feature</h2></th>
                </thead>
                <tbody>
                    <tr><td>  <span class="text-warning">🌟</span>  </td><td>Classes by India’s best teachers</td><td>  <span class="text-warning">🌟</span>  </td><td>Instant doubt resolution</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>Practice sessions with tutors</td><td>  <span class="text-warning">🌟</span>  </td><td>Topic choice flexibility</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>Understand complex concepts</td><td>  <span class="text-warning">🌟</span>  </td><td>Solve questions in real-time with tutors</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>One-on-one guidance from mentors</td><td> <span class="text-warning">🌟</span>   </td><td>Regular homework and assessment</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>Monthly progress report with performance update</td><td>  <span class="text-warning">🌟</span>  </td><td>Personalised extra classes for revision</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>24/7 video lessons on the app</td><td>  <span class="text-warning">🌟</span>  </td><td>Unlimited practice tests</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>Individual knowledge graph for each student</td><td> <span class="text-warning">🌟</span>   </td><td>Mapped to the school syllabus</td></tr>
                <tr><td>  <span class="text-warning">🌟</span>  </td><td>Detailed student performance updates for parents</td></tr>
                </tbody>
            </table>
    </div>
</div>
@endsection

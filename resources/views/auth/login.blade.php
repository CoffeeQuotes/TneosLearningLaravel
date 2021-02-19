@extends('layouts.app')
@section('page_title',' Login to your account')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
        <style>
            .bg-block-register {
                background-color: #2a2a72; background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
                min-height: 100vh;
            }

        </style>
    @endpush
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4 bg-block-register">
            <div class="mt-5">
                <h3 class="py-5 text-white">Tneos Teaching Advantages</h3>
            </div>
            <ul>
                <li class="p-2 text-white"><span class="font-weight-bold pr-2"> ✓ </span>Unlimited practice tests</li>
                <li class="p-2 text-white"><span class="font-weight-bold pr-2"> ✓ </span>Personalised extra classes for revision</li>
                <li class="p-2 text-white"><span class="font-weight-bold pr-2"> ✓ </span>Regular homework and assessment</li>
                <li class="p-2 text-white"><span class="font-weight-bold pr-2"> ✓ </span>Topic choice flexibility</li>
                <li class="p-2 text-white"><span class="font-weight-bold pr-2"> ✓ </span>Classes by India's best teachers</li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="text-center mt-5">
                <h3 class="py-5">{{ __('Login') }} To Continue</h3>
                <div>
                    <form class="text-left" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control textbox-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control textbox-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class=" btnSubmit btn btn btn-lg  mars_party text-white ">
                                    {{ __('Login') }} Now
                                </button>
                                <br/>
                                <br/>

                                @if (Route::has('password.request'))
                                    <div class="justify-content-between">
                                    <a class="ForgetPwd text-warning pr-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                        Don't have an account yet? <a class="text-warning" href="/register"> Register Now </a>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

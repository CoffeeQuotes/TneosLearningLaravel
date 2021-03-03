@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
@endpush
@section('content')
<div class="container-fluid new_retrowave" style="height: 100vh!important;">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow  p-4 text-center mt-100 border-0">
                <div class="card-header border-0"><h6>{{ __('Verify Your Email Address') }}</h6></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

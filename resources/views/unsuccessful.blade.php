@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-transparent" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('app-assets/img/core-img/unsuccessful.png')}}" alt="Responsive image">
                    <div class="card-body bg-success">
                        <h5 class="card-title">We Don't Know What's Wrong!</h5>
                        <p class="card-text">Try again, after Sometime!!</p>
                        <a href="/" class="btn btn-primary">TneosLive</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-5">
                <h2 class="display-2 text-dark">Aww, Snap!</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda enim esse est hic ipsa
                    perferendis quisquam ratione tenetur vel. Id, molestiae tempora. Beatae consectetur dolor officia.
                    Fugiat natus, possimus.
                </p>
            </div>
        </div>
    </div>
    </div>
@endsection

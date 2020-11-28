@extends('layouts.app')

@section('content')

<!-- Jumbotron -->
<div class="container mt-5">
    <div class="jumbotron page-jumbo mb-0" style="background-image: url('{{ Voyager::image( $page->image ) }}');">
        <div class="overlay"></div>
        <div class="inner">
        <h1 class="display-5 text-center font-weight-bold page-heading">{{ $page->title }}</h1>
        <p class="lead text-center  text-white jumbo-body">{{ $page->excerpt }}</p>
    </div>
</div>
    <div class="container  pt-0 bg-light page-body-wrapper">
       <div class="row page-body-row">
        <div class="col-md-10 pt-0 mt-0 offset-md-1 page-body-col">
           {!! $page->body !!}
        </div>
       </div>
    </div>

</div>
@endsection

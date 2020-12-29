@extends('layouts.app')

<style>
.page-title {
    -webkit-font-smoothing: antialiased;
     box-sizing: inherit;
     margin: 0;
    padding: 0;
    font-family: SantralBold,sans-serif;
    font-style: normal;
    font-weight: 400;
    color: inherit;
    text-rendering: optimizeLegibility;
    margin-top: 0;
    line-height: 1.166;
    font-variant-ligatures: none;
    margin-bottom: 1rem;
    letter-spacing: -.2rem;
    font-size: 56px;
}
.date {
    color: #232635;
    -webkit-font-smoothing: antialiased;
    box-sizing: inherit;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    text-rendering: optimizeLegibility;
    font-family: Inter,'Helvetica Neue',Arial,sans-serif;
    font-size: 16px;
    font-weight: 400;
    font-variant-ligatures: none;
    letter-spacing: -.5px;
    margin-bottom: 0;
}
</style>
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <div class="page-header">
                <h2 class="page-title">{{ $post->title}}</h2>
            </div>
            <p class="date">Posted<span style="color: #828282;">  {{ $post->updated_at->diffForHumans() }}</span></p>
            <p><img src="https://img.icons8.com/metro/26/000000/share.png" width="12"/> <a class="" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}/post/{{$post->slug}}">Share</a></p>
            <div class="excerpt"  style="background: #D7EFFE;">
                <p class="p-2" style="font-weight: bolder; color: #1a73e8!important;">{{ $post->excerpt }}</p>
            </div>
            <img class="img-responsive" src="{{ Voyager::image($post->image)}}" alt="{{ $post->title}}"/>
            <div class="body pt-2 justify-content-start">
                {!! $post->body !!}
            </div>
            <hr style="color: #828282;">
            <p><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" width="14"/> <a class="" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}/post/{{$post->slug}}">Facebook</a>&nbsp;
                <img src="https://img.icons8.com/fluent/48/000000/twitter.png" width="14"/><a class="" href="https://twitter.com/intent/tweet?url={{Request::url()}}/post/{{$post->slug}}&text=">Twitter</a>&nbsp;

                <img src="https://img.icons8.com/fluent/48/000000/linkedin.png" width="14" /><a class="" href="https://pinterest.com/pin/create/button/?url={{Request::url()}}/post/{{$post->slug}}&media=&description="> Linkedin</a>
           </p>
        </div>
        <div class="col-4">col-4</div>
    </div>
<div class="row">
        <div class="col-md-3">

        </div>
    </div>
</div>
@endsection

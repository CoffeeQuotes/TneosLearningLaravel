@extends('layouts.app')

@section('content')
@push('styles')
        <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
        {{--<link href="https://unpkg.com/sanitize.css/evergreen.css" rel="stylesheet" />
--}}
        <style>
            html {
                color: #555!important;
            }
            .page-body-wrapper {
                line-height: 22px;
            }
            .page-body-wrapper .container-fluid h1, h2, h3, h4, h5, h6
            {
                color: #007bff!important;
            }
            .page-body-wrapper {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 1em!important;
                text-align: start!important;
                letter-spacing: normal!important;
                line-height: 24px!important;
                /*color: #000;*/
            }
            .page-body-wrapper a {
                color: #007bff!important;
            }
            .page-body-wrapper ul {
                list-style: none;
                margin: 2em!important;
            }
            .page-body-wrapper ul li::before {
                 content: "•"; color: black;
                 display: inline-block; width: 2em;
                 margin-left: -1.6em
            }
            .page-body-wrapper ol {list-style: none;  margin: 2em; counter-reset: li}
            .page-body-wrapper ol li::before {content: counter(li); color: black;
                font-weight: bolder;
                display: inline-block; width: 2em;
                margin-left: -1.6em}
            .page-body-wrapper li {counter-increment: li}
            .page-body-wrapper h2,
            .page-body-wrapper p {
                color: #555;
                font: 1.215em/1.575em "Helvetica Neue", Helvetica, Arial, sans-serif;

            }
            .page-body-wrapper a {
                color: #0087cc;
            }
            .page-body-wrapper a:hover {
                color: #ff7b29;
            }
            .page-body-wrapper h1, h2, h3, h4, h5, h6{
                margin-bottom: 6px;
            }
            .page-title {
                color: #000000;
            }
            .page-title, .page-body-wrapper h1 {
                font-size: 2.822em!important;
                line-height: 44px;
            }
            .page-body-wrapper h2 {
                font-size: 2.645em;
                line-height: 44px;
            }
            .page-body-wrapper h3 {
                font-size: 2.479em;
            }
            .page-body-wrapper h4 {
                font-size: 2.323em;
            }
            .page-body-wrapper h5 {
                font-size: 2.178em;

            }
            .page-body-wrapper h6 {

                font-size: 2.041em;

            }
            .page-body-wrapper strong {
                font-weight: 400;
            }
            .page-body-wrapper cite, .page-body-wrapper  em {
                font-style: italic;
            }

            #side-bar-links {
                list-style: none;
                margin: 2em!important;
            }
            .side-bar-links-li {
                padding: 1em;
            }
            .side-bar-links-li::before {
             content: none!important;
            }
            #share-buttons img {
                width: 35px;
                padding: 5px;
                border: 0;
                box-shadow: 0;
                display: inline;
            }

        </style>

@endpush
@push('head-scripts')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6027c066f71937001207d426&product=inline-share-buttons" async="async"></script>
@endpush
        <!-- Jumbotron -->



    <div class="container-fluid  pt-0 bg-light page-body-wrapper">
        <div class="top-page row mt-30">
            <div class="col-md-8">
                <h1 class="page-title">{{ $page->title }}</h1>
                <hr />
                <p class="lead">{{ $page->excerpt }}</p>
                <hr />
            </div>
            <div class="col-md-4">
                <!-- I got these buttons from simplesharebuttons.com -->
                <div id="share-buttons">



                    <!-- Email -->
                    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
                        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                    </a>

                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                    </a>


                    <!-- LinkedIn -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                    </a>

                    <!-- Pinterest -->
                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
                    </a>

                    <!-- Reddit -->
                    <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                    </a>
                    <!-- Yummly -->
                    {{--<a href="http://www.yummly.com/urb/verify?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
                    </a>--}}

                </div>
            </div>
        </div>
       <div class="row">
        <div class="col-md-8 pt-0 mt-0 text-justify">
            @if($page->image['0'])
                <img class="pt-2" src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
            @else

            @endif
           {!! $page->body !!}
        </div>
       <div class="col-md-4">
           <h6 style="color: #000!important;">You may also like</h6>
           <hr style="background-color: #000;">
           <ul id="side-bar-links" style="list-style: none;">
           @foreach($pages as $link)
               <li class="side-bar-links-li"><a href="{{$link->slug}}">{{\Illuminate\Support\Str::limit($link->title, 28, $end="...")}}</a></li><hr/>
           @endforeach
           </ul>
       </div>
       </div>
    </div>
@endsection

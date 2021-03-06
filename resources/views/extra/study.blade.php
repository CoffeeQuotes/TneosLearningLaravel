@extends('layouts.app')
@section('page_title','Free Study Material, Download Now')
@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>

    </style>
@endpush
@section('content')
    @foreach($materials as $material)
        @if ($loop->first)
            <div class="container-fluid  teen_party p-0" style="min-height: 240px;">
                <div class="d-flex justify-content-between" style="background-image: url({{asset('app-assets/img/bg-img/studymaterial.webp')}}); background-size: contain; background-repeat: no-repeat; background-position: right;">
                    <div class="m-2" >
                        <div class="col-md-8 p-4 shadow" style="background-color: rgba(0,0,0,0.4); backdrop-filter: saturate(180%) blur(10px);">
                            <h3 class="text-white"
                                style="letter-spacing: 0.1em;">Free Online Study Materials For {{ $material->board }} Board</h3>
                            <p class="text-white" style="font-size: 1em; letter-spacing: 0.1em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorum eaque enim facere illum in ipsa itaque labore libero perferendis quam quas totam ullam, unde velit voluptas, voluptates. At, eum.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <div class="container-fluid mt-100">
        <table class="table table-responsive table-bordered">
            <thead class="thead">
            <tr>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/50/000000/pdf.png"
                                     style="max-height: 32px; height: auto;"/> Title
                </th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/open-in-browser.png"
                                     style="max-height: 32px; height: auto;"/> Download
                </th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/select-all.png"
                                     style="max-height: 32px; height: auto;"/> Description
                </th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/google-classroom.png"
                                     style="max-height: 32px; height: auto;"/> Class
                </th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/learning.png"
                                     style="max-height: 32px; height: auto;"/>Subject
                </th>
                <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/content.png"
                                     style="max-height: 32px; height: auto;"/>Type
                </th>
            </tr>
            </thead>
            <tbody>


            @foreach($materials as $material)
                <tr>
                    <td><b> {{$material->title}} </b></td>
                    <td><a class="text-success" target="_blank" href="{{$material->link}}">{{$material->title}}</a></td>
                    <td> {{$material->description}} </td>
                    <td> {{$material->class}}</td>
                    <td> {{$material->subject}}</td>
                    <td> {{$material->type}}</td>
                </tr>
            @endforeach
       </tbody>
        </table>
    </div>
@endsection


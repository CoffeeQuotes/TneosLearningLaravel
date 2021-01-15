@extends('layouts.app')
@section('page_title','Free Study Material, Download Now')
    @section('content')
    <div class="container mt-4">
        <h1 class="display-4 pl-2 bg-primary " style="color: #fefefe!important; ; font-weight: 600!important; font-size: 34px;">Study Materials</h1>
        @foreach($materials as $material)

            @if ($loop->first)
                <span class="text-white pl-2 bg-secondary" style="font-size: 24px;">{{ $material->board }}</span><span class="text-white bg-secondary" style="font-size: 24px;"> Study Material </span>
            @endif

        @endforeach
        <table class="table table-responsive table-bordered">
            <thead class="thead">
            <tr>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/50/000000/pdf.png" style="max-height: 32px; height: auto;"/> Title</th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/open-in-browser.png" style="max-height: 32px; height: auto;"/> Download</th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/select-all.png" style="max-height: 32px; height: auto;"/> Description</th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/google-classroom.png" style="max-height: 32px; height: auto;"/> Class</th>
                <th scope="col"><img src="https://img.icons8.com/cute-clipart/64/000000/learning.png" style="max-height: 32px; height: auto;"/>Subject</th>
                <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/content.png" style="max-height: 32px; height: auto;"/>Type</th>

            </tr>
            </thead>
            <tbody>


                @foreach($materials as $material)
                    <tr>
                <td><b> {{$material->title}} </b></td>
                <td> <a class="text-success" target="_blank" href="{{$material->link}}">{{$material->title}}</a></td>
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


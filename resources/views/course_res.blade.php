@extends('layouts.app')
@section('page_title','Search Result')
@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col">
            @if(isset($details))
                <h2> {{ $details->count()  }} Courses Found !!</h2>
                <hr>
                    @foreach($details as $course)
                    <img class="img-fluid img-thumbnail pull-left" style="max-width: 20%; height: auto;"  src="{{Voyager::image($course->image)}}" alt=""></td>
                    <h5 class="font-weight-bolder">{{$course->name}}</h5>
                    <span class=""><a class="text-info" href="pack/{{$course->slug}}">{{$course->name}}</a></span>
                    <span>{!! $course->description !!}</span>
                    <div class="clearfix"></div>


                    @endforeach
             @else
                <img src="https://img.icons8.com/color/96/000000/nothing-found.png"/><br>
                <span class="display-6 text-center">Sorry, We didn't found anything, please <a class="text-success" href="/packages">Search again</a>...</span>
        
            @endif
        </div>
    </div>
</div>
@endsection

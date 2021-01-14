@extends('layouts.app')
@section('page_title','Search Result')
@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col">
            @if(isset($details))
                <h2> {{ $details->count()  }} Courses Found !!</h2>
                <hr>
                 <table>
                @foreach($details as $course)
                    <tr>
                        <td>
                            <div class="row mt-2">
                                <div class="col-2">
                                    <img class="img-fluid"  style=""  src="{{Voyager::image($course->image)}}" alt="">
                                </div>
                            <div class="col-10">
                                <h5 class="font-weight-bolder">{{$course->name}}</h5>
                                <span class="">
                                    <a class="text-info" href="pack/{{$course->slug}}">{{$course->name}}</a>
                                </span>
                                <br/>
                                <span>{{ \Illuminate\Support\Str::limit(strip_tags($course->description), 100, $end='...')}}</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
                 </table>
            @else
                <img src="https://img.icons8.com/color/96/000000/nothing-found.png"/><br>
                <span class="display-6 text-center">Sorry, We didn't found anything, please <a class="text-success" href="/packages">Search again</a>...</span>

            @endif
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('page_title','Buy the Course and get access to live videos')
@section('content')
    <div class="container mt-5 pt-0">
        <section>
           <div class="row text-center">
                <div class="offset-md-8 col-md-4 col-sm-12 col-xs-12">

                       <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}

                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                       placeholder="Search course...">

                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-warning">
                                        <img src="https://img.icons8.com/cotton/64/000000/search-in-cloud.png" style="max-height: 32px; width: auto;"/>
                                    </button>
                                </span>

                            </div>
                            {{-- Input Group --}}

                        </form>
                </div>
          </div>

          {{-- Row--}}

           <div class="row mb-4">
                <div class="col-12">
                    <span class="display-4  font-weight-bold featured-live-heading">
                        Latest Courses
                    <img src="https://img.icons8.com/cute-clipart/64/000000/new.png"/>
                    </span>
                </div>
           </div>

           {{-- Row --}}


           <div class="d-flex flex-wrap content-justify">
                @foreach($latest_courses as $category)
                    <div class=" p-2 py-2">
                    <div class="card mx-auto shadow-lg" style="width: 12rem; min-height: 400px;">
                            <img src="{{Voyager::image($category->image)}}" class="card-img-top" alt="{{$category->name}}">

                                <span class="card-text font-weight-bold text-uppercase  p-2" style="color:#3c3b37;"> {{$category->name }}
                                </span>
                                <span class="display-6 font-weight-bolder text-info">
                                    <img src="https://img.icons8.com/color/64/000000/rupee.png" width="20" height="20"/>
                                </span>
                                <span class="font-weight-bolder" style="line-height: 40px;">
                                    {{ $category->amount }}
                                </span>
                            {{-- Card header --}}
                            <div class="card-body text-justify ml-1">
                                <div class="p-2" style="overflow:hidden; color:#73726c;">{{ \Illuminate\Support\Str::limit(strip_tags($category->description), 150, $end='...') }}</div>
                                <span class="badge badge-success p-1 font-weight-lighter">
                                    {{ $category->board }}
                                </span>
                                <span class="badge badge-danger p-1 font-weight-lighter" >
                                    {{ $category->class }}th class
                                </span>
                                <span class="badge badge-info p-1 font-weight-lighter">
                                    {{ $category->subject }}
                                </span>
                            </div>

                            <div class="card-footer">

                                <form action="{{ route('payment') }}" method="post">
                                <input type="hidden" name="title" value="{{$category->name}}">
                                <input type="hidden" name="amount" value="{{$category->amount}}">
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <input type="hidden" name="slug" value="{{$category->slug}}">
                                <button type="submit" class="btn btn-success">Buy Now</button>
                            </form>
                        </div>
                    </div>
                    {{-- Card --}}
                </div>
                @endforeach
           </div>

           <div class="row mb-4">
            <div class="col">
                <span class="display-4 font-weight-bold featured-live-heading">Our Courses <img src="https://img.icons8.com/dusk/64/000000/online.png"/></span>
            </div>
          </div>

           <div class="d-flex flex-wrap content-justify">

              @foreach($packages as $category)
                    <div class="p-2  py-2">
                    <div class="card mx-auto  shadow-lg" style="width: 12rem; min-height: 400px;">
                    <img src="{{Voyager::image($category->image)}}" class="card-img-top" alt="{{$category->name }}">

                        <span class="card-text font-weight-bold text-uppercase p-2" style="color:#3c3c3c;"> {{$category->name }}</span>
                        <span class="display-6 font-weight-bolder text-info"><img src="https://img.icons8.com/color/64/000000/rupee.png" width="20" height="20"/></span><span class="font-weight-bolder" style="line-height: 40px;"> {{ $category->amount }}</span>
                        <div class="card-body text-justify ml-1">
                        <div class="p-2" style="overflow:hidden; color:#73726c;">{{ \Illuminate\Support\Str::limit(strip_tags($category->description), 150, $end='...') }}</div>
                        <span class="badge badge-success p-1 font-weight-lighter">{{ $category->board }}</span>
                            <span class="badge badge-danger p-1 font-weight-lighter" > {{ $category->class }}th class</span>
                            <span class="badge badge-info p-1 font-weight-lighter">{{ $category->subject }}</span>

                    </div>
                    <div class="card-footer">

                         <form action="{{ route('payment') }}" method="post">
                             <input type="hidden" name="title" value="{{$category->name}}">
                             <input type="hidden" name="amount" value="{{$category->amount}}">
                             <input type="hidden" name="category_id" value="{{$category->id}}">
                             <input type="hidden" name="slug" value="{{$category->slug}}">
{{--                             href="/pack/{{$category->slug}}"  --}}
                             <button type="submit"  class="btn btn-success">Buy Now</button>
                         </form>
                    </div>

                </div>
                </div>
              @endforeach

           </div>

    </section>
 </div>
@endsection


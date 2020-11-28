@extends('layouts.app')

@section('page_title','Online Live Classes and Videos')

@section('content')
<div class="container mt-5 mb-5 pt-0">
 <section>
    
    <div class="row mb-4">
        <div class="col">
                 <span class="display-4 font-weight-bold featured-live-heading">Featured Live &nbsp; <img src="https://img.icons8.com/color/48/000000/youtube-live.png"/>
                 </span>
        </div>
    </div>
    
    <div class="d-flex flex-wrap justify-content-between">
        @foreach($lives as $life)
            @if($life->featured === 1)
    <div class="mr-2">
        <div class="card life-card bg-transparent" style="width: 12.5rem">
            <a href="/lives/{{ $life->slug }}">
                @if ($life->status === '1')
                    <div class="card-img-overlay">
            
                        <span class="badge badge-danger live-badge pull-right">Live</span>
                        <span class="text-white font-weight-bolder p-2 text-center">FEATURED</span>
                    </div>
                @endif

            <img class="card-img-top border border-dark"  style="height: 135px; width: 240px;"  src="{{ Voyager::image( $life->image ) }}">
            <div class="bg-dark text-justify p-2">
                <span class="badge badge-danger">{{$life->board}}</span>
                <span class="badge badge-warning">{{$life->class}}'th class</span>
                <span class="badge badge-info">{{$life->subject }}</span>
            </div>
            
            <div class="card-body descripiton-card">
                <p  class="card-title mb-0 videotitle text-info p-1">{{ Str::of($life->title)->limit(48,'(...)') }}</p>
        
            </div>
            </a>
        </div>
    </div>
            @endif
        
        @endforeach

    </div>
    
    </br>
    <div class="clearfix"></div>
    {{ $lives->links() }}
    
    <div class="row mb-4">
            <div class="col">
                <span class="display-4 font-weight-bold featured-live-heading">Live Videos &nbsp; <img src="https://img.icons8.com/color/48/000000/youtube-live.png"/>
                </span>
            </div>
    </div>
   <div class="clearfix"></div>
    <div class="d-flex flex-wrap justify-content-between">
            @foreach($lives as $life)
            {{-- @if($life->featured === 1) --}}
                <div class="mr-2">
                    <div class="card life-card bg-transparent" style="width: 12.5rem;">
                         <a href="/lives/{{ $life->slug }}">
                            @if ($life->status === '1')
                                <div class="card-img-overlay">
                                <span class="badge badge-danger live-badge pull-right">Live</span>
                            </div>
                            @endif
                            <img class="card-img-top border border-dark"  style="height: 135px; width: 240px;"  src="{{ Voyager::image( $life->image ) }}">
                             <div class="bg-dark text-justify p-2">
                                <span class="badge badge-danger">{{$life->board}}</span>
                                <span class="badge badge-warning">{{$life->class}}'th class</span>
                                <span class="badge badge-info">{{$life->subject }}</span>
                            </div>
                             <div class="card-body descripiton-card">
                           
                                <p class="card-title mb-0 videotitle text-info p-1">
                                    {{ Str::of($life->title)->limit(48,'(...)') }}
                                </p>
                                 
                            </div>
                            </a>    
                    </div>
                </div>
        
            {{-- @endif --}}
            @endforeach
      </div>
    <br>   
    <div class="clearfix"></div>
    {{ $lives->links() }}
    
</section>
</div>

@endsection

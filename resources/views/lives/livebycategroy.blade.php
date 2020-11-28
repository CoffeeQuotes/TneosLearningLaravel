@extends('layouts.app')
@section('page_title', Str::title(str_replace('-', ' ', $cat_live[0]['category_id'])))
@section('content')

    <div class="container  mt-5 pt-0">
          @if($cat_live)
           <h2>{{ Str::title(str_replace('-', ' ', $cat_live[0]['category_id'])) }}</h2>
          @endif 
        <div class="row mb-4">
                <div class="col">
                    <span class="display-4 font-weight-bold featured-live-heading">Live Videos &nbsp; <img src="https://img.icons8.com/color/48/000000/youtube-live.png"/></span>
                </div>
        </div>
        <div class="row">
        @foreach($cat_live as $life)
            
            {{-- @if($life->featured === 1) --}}
            <a href="/lives/{{ $life->slug }}">
            <div class="col-md-3 mr-2">
                    <div class="card life-card bg-transparent" style="width: 12.5rem;">
                        @if ($life->status === '1')
                            <div class="card-img-overlay">
                                <span class="badge badge-danger live-badge pull-right">Live</span>
                            </div>
                        @endif

                            <img class="card-img-top border-dark"  style="height: 135px; width: 240px;"  src="{{ Voyager::image( $life->image ) }}">
                             <div class="bg-dark text-justify p-2">
                                    <span class="badge badge-danger">{{$life->board}}</span>
                                    <span class="badge badge-warning">{{$life->class}}'th class</span>
                                    <span class="badge badge-info">{{$life->subject }}</span>
                            </div>
                        <div class="card-body descripiton-card">
                            <p class="card-title mb-0 videotitle text-info p-1">{{ Str::of($life->title)->limit(48,'(...)') }}</p>
                            {!! Str::of($life->description)->limit(140,'(...)') !!}

                        </div>

                    </div>
                </div>
            </a>
            {{-- @endif --}}
        @endforeach

        </div>
        {{-- {{ $cat_live->links() }} --}}
</div>
</div>

@endsection

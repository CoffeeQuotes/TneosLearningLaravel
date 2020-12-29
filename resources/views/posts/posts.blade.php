@extends('layouts.app')
<style>
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #fefefe;
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        display: block;
        color: #828282;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 400;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add an active class to highlight the current page */
    .topnav a.active {
        /* background-color: #004686; */
        border-bottom: 3px solid #1a73e8;
        color: #1a73e8;
        box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 1px 2px rgba(0, 0, 0, .23);
    }

    /* Hide the link that should open and close the topnav on small screens */
    .topnav .icon {
        display: none;
    }

    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive a.icon {
            position: absolute;
            right: 50%;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav .search-container {
            float: none;
        }

        .topnav a,
        .topnav input[type=text],
        .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }

        .topnav input[type=text] {
            border: 1px solid #ccc;
        }

        .search {
            margin-top: 20px !important;
        }

    }

</style>
@section('content')

    <div class="container mt-4">
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search" style="border-radius: 18px; font-size: 14px;">
                    <button class="search"
                        style="background-color: #1a73e8; color: #fefef3; text-align: center; border-radius: 18px; padding: 6px 12px; font-size: 14px; font-weight: 700;"
                        type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="background: #D7EFFE;">
        @if($featuredPosts)
        <h2 class="px-2 pt-2" style="color: #1a73e8!important;">Featured</h2>
        <div class="row row-cols-4">
        @foreach ($featuredPosts as $featuredPost)

          <div class="col">
            <div class="card" style="width:13rem;margin:20px 0 24px 0; border: none;">

                @if (!empty($featuredPost->image))
                    <a href="
                    {{ route('posts.post', ['slug' => $featuredPost->slug]) }}

                    " class="block-image-text-img">
                        <img class="card-img-top" src="{{ Voyager::image( $featuredPost->image ) }}"  style="width:100%">
                    </a>
                @endif

                <div class="card-body p-1 text-center">
                    @if (!empty($featuredPost->title))
                        <h6 class="card-title" style="color: #1a73e8!important;">{{ Illuminate\Support\Str::limit($featuredPost->title, 50, '🎉') }}</h6>
                    @endif

                    @if (!empty($featuredPost->excerpt))
                        <p class="card-text" style="color: #828282!important;">{{ Illuminate\Support\Str::limit($featuredPost->excerpt, 50, '🎉') }}</p>
                    @endif

                    <a href="{{ route('posts.post', ['slug' => $featuredPost->slug]) }}"
                        class="button round">
                        Read Post
                    </a>
                </div>

        </div>
          </div>

        @endforeach
    </div>
        @endif
      </div>
      <div class="container mt-5">
        @if($posts)
        <div class="row row-cols-4">
        @foreach ($posts as $post)

          <div class="col">
            <div class="card" style="width:13rem;margin:20px 0 24px 0; border: none;">

                @if (!empty($post->image))
                    <a href="
                    {{ route('posts.post', ['slug' => $post->slug]) }}

                    " class="block-image-text-img">
                        <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}"  style="width:100%">
                    </a>
                @endif

                <div class="card-body p-1 text-center">
                    @if (!empty($post->title))
                        <h6 class="card-title" style="color: #1a73e8!important;">{{ Illuminate\Support\Str::limit($post->title, 50, '🎉') }}</h6>
                    @endif

                    @if (!empty($post->excerpt))
                        <p class="card-text" style="color: #828282!important;">{{ Illuminate\Support\Str::limit($post->excerpt, 50, '🎉') }}</p>
                    @endif

                    <a href="{{ route('posts.post', ['slug' => $post->slug]) }}"
                        class="button round">
                        Read Post
                    </a>
                </div>

        </div>
          </div>

        @endforeach
    </div>
    <hr style="color:#828282;">
        @endif
      </div>
    <div class="container">
        @if($recentPosts)
        <h2 class="p-2" style="color: #828282!important;">Recents</h2>
        <div class="row row-cols-4">
        @foreach ($recentPosts as $recentPost)

          <div class="col">
            <div class="card" style="width:13rem;margin:20px 0 24px 0; border: none;">

                @if (!empty($recentPost->image))
                    <a href="
                    {{ route('posts.post', ['slug' => $recentPost->slug]) }}

                    " class="block-image-text-img">
                        <img class="card-img-top" src="{{ Voyager::image( $recentPost->image ) }}"  style="width:100%">
                    </a>
                @endif

                <div class="card-body p-1 text-center">
                    @if (!empty($recentPost->title))
                        <h6 class="card-title" style="color: #1a73e8!important;">{{ Illuminate\Support\Str::limit($recentPost->title, 50, '🎉') }}</h6>
                    @endif

                    @if (!empty($recentPost->excerpt))
                        <p class="card-text" style="color: #828282!important;">{{ Illuminate\Support\Str::limit($recentPost->excerpt, 50, '🎉') }}</p>
                    @endif

                    <a href="{{ route('posts.post', ['slug' => $recentPost->slug]) }}"
                        class="button round">
                        Read Post
                    </a>
                </div>

        </div>
          </div>

        @endforeach
    </div>
    <hr style="color:#828282;">
        @endif
      </div>
        {{-- <div class="card" style="width:20rem;margin:20px 0 24px 0">
            <img class="card-img-top" src="img_avatar3.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="javascript:void(0)" class="btn btn-primary">See Profile</a>
            </div>
          </div> --}}
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
@endsection

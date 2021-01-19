<!-- Navbar Area -->
<div class="academy-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="academyNav">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('/') }}/storage/{{setting('site.logo')}}" alt="Tneos Logo" style="width:80px;">
                </a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <a class="pl-2" href="/packages">Buy Course</a>
                        <div class="dropdown">
                            <a class="dropdown-toggle mx-2" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Live Classes
                            </a>
                            <div class="dropdown-menu text-wrap" aria-labelledby="dropdownMenuButton"
                                 style="background-color: rgba(22, 22, 23, 0.8); backdrop-filter: saturate(180%) blur(20px); top: 0px; left: 0px; transform: translate3d(9px, 44px, 0px);">
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/CBSE"><img class="mr-2" width="24px"
                                                                                                         src="{{asset('app-assets/img/core-img/CBSE.jpg')}}"
                                                                                                         alt="">&nbsp;CBSE
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/ICSE"><img class="mr-2" width="24px"
                                                                                                         src="{{asset('app-assets/img/core-img/icse10.PNG')}}"
                                                                                                         alt="">&nbsp;ICSE
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/IB"><img class="mr-2" width="24px"
                                                                                                       src="{{asset('app-assets/img/core-img/ib.PNG')}}"
                                                                                                       alt="">&nbsp;IB
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/Bihar"><img class="mr-2" width="24px"
                                                                                                          src="{{asset('app-assets/img/core-img/biharboardlogo.jpg')}}"
                                                                                                          alt="">&nbsp;Bihar
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/MP"><img class="mr-2" width="24px"
                                                                                                       src="{{asset('app-assets/img/core-img/mpboard.jpg')}}"
                                                                                                       alt="">&nbsp;MP
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/Rajsthan"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/rajboard.jpg')}}"
                                        alt="">&nbsp;Rajsthan Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/Jharkhand"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/jharkhand board.jpg')}}"
                                        alt="">&nbsp;Jharkhand Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/Odisha"><img class="mr-2" width="24px"
                                                                                                           src="{{asset('app-assets/img/core-img/Bse.odisha.logo.jpg')}}"
                                                                                                           alt="">&nbsp;Odisha
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/UP"><img class="mr-2" width="24px"
                                                                                                       src="{{asset('app-assets/img/core-img/up board.jpg')}}"
                                                                                                       alt="">&nbsp;UP
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/Haryana/"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/Haryana-Board.jpg')}}"
                                        alt="">&nbsp;Haryana Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/board/JK/"><img class="mr-2" width="24px"
                                                                                                        src="{{asset('app-assets/img/core-img/jk.png')}}"
                                                                                                        alt="">&nbsp;Jammu
                                    & Kashmir</a>

                            </div>
                        </div>

                        <a href="/freelivevideo" class="pl-2">Free Live Classes</a>
                        <div class="dropdown">
                            <a class="dropdown-toggle mx-2" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Study Materials
                            </a>
                            <div class="dropdown-menu text-wrap" aria-labelledby="dropdownMenuButton"  style="background-color: rgba(22, 22, 23, 0.8); backdrop-filter: saturate(180%) blur(20px); top: 0px; left: 0px; transform: translate3d(9px, 44px, 0px);">
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/CBSE"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/CBSE.jpg')}}"
                                        alt="">&nbsp;CBSE Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/ICSE"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/icse10.PNG')}}"
                                        alt="">&nbsp;ICSE Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/IB"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/ib.PNG')}}"
                                        alt="">&nbsp;IB Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/Bihar"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/biharboardlogo.jpg')}}"
                                        alt="">&nbsp;Bihar Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/MP"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/mpboard.jpg')}}"
                                        alt="">&nbsp;MP Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/Rajsthan"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/rajboard.jpg')}}"
                                        alt="">&nbsp;Rajsthan
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/Jharkhand"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/jharkhand board.jpg')}}"
                                        alt="">&nbsp;Jharkhand
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/Odisha"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/Bse.odisha.logo.jpg')}}"
                                        alt="">&nbsp;Odisha
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/UP"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/up board.jpg')}}"
                                        alt="">&nbsp;UP Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/Haryana/"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/Haryana-Board.jpg')}}"
                                        alt="">&nbsp;Haryana
                                    Board</a>
                                <a class="dropdown-item" style="color: #fefefe;" href="/study-materials/JK/"><img class="mr-2"
                                        width="24px"
                                        src="{{asset('app-assets/img/core-img/jk.png')}}"
                                        alt="">&nbsp;Jammu &
                                    Kashmir</a>
                            </div>
                        </div>
                        <li style="list-style: none!important;"><a href="https://shop.tneos.com" class="pl-2">Shop <img
                                    src="https://img.icons8.com/fluent/48/000000/favorite-cart.png" width="22"/></a>
                        </li>
                        <li style="list-style: none!important;"><a href="/posts" class="pl-2">Blog <img
                                    src="https://img.icons8.com/nolan/64/google-blog-search.png" width="22"/></a></li>

                        <ul>
                            <li>
                                <a type="button" href="/contact-us">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                        @guest
                            <li style="list-style-type: none;" class="nav-item">
                                <a class="nav-link text-warning"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li style="list-style-type: none;" class="nav-item">
                                    <a class="nav-link text-warning"
                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li style="list-style-type: none;" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                   role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}"
                                          method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>

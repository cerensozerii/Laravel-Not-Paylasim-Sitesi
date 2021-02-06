@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

<header>

    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"><a href="{{route('homepage')}}"><img src="{{ asset('assets')}}/images/logo1.png"
                                                                        alt="#"> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                                    <li><a href="{{route('thenotes')}}">The Notes</a>
                                        <ul>
                                                <li><a href="#">High School Notes</a></li>
                                                <li><a href="#">Architecture</a></li>
                                                <li><a href="#">Art and Art History </a></li>
                                                <li><a href="#">Economics </a></li>
                                                <li><a href="#">Engineering </a></li>
                                                <li><a href="#">Health & Medicine</a></li>
                                                <li><a href="#">Humanities</a></li>
                                                <li><a href="#">Language and Literature</a></li>
                                                <li><a href="#">Law </a></li>
                                                <li><a href="#">Social Sciences</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('library')}}">library</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                    <li class="mean-last">
                                        <a href="{{route('login')}}"><img
                                                src="{{ asset('assets')}}/images/top-icon.png" alt="#"/></a>
                                        <ul>
                                            @auth
                                            <li><a href="#"> {{Auth::user()->name}} </a></li>
                                            @elseauth
                                            <li><a href="#"> Login </a></li>
                                            @endauth
                                            <li><a href="{{route('logout')}}"> Logout </a></li>
                                        </ul>
                                        @guest
                                            <ul>
                                            <li><a href="{{route('login')}}">Login</a></li>
                                                <li><a href="{{route('register')}}">Join</a> </li>
                                            </ul>
                                            @endguest

                                    </li>
                                    <li class="mean-last"><a href="#"><img
                                                src="{{ asset('assets')}}/images/search_icon.png" alt="#"/></a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->

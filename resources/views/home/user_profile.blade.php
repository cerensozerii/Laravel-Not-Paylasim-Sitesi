@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kahtalı Miçe">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets')}}/images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

@include('home._header')

@section('title', 'User Profile')


<!-- Library -->
<section id="aa-error-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-error-area">
                    <li>My Profile</li>
                    <li>My Profile</li>
                    <li>My Profile</li>
                    <li>My Profile</li>
                    <li>My Profile</li>
                    <li><h2>User Profile</h2></li>
                    <li><h2>User Profile</h2></li>
                    <li><h2>User Profile</h2></li>
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>User Profile</li>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div id=aside class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div id=aside class="col-md-10">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
<section>
@include('home._footer')

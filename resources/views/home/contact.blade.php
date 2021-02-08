@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('title', 'Contact-' . $setting->title)

@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)
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
<section id="aa-error-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-error-area">
                    <h3>
                        <div align="center"><p>Contact Page</p></div>
                    </h3>
                    <ol class="breadcrumb">
                        <li><a href="{{route('homepage')}}">HOME</a></li>
                        <li><a href="#"> </a> Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-error">
    <div class="container">
        <row>
            <div class="col-md-8">
                <h3 class="asside-title"> İletişim Bilgileri </h3>
                {!! $setting->contact !!}
            </div>
            <div class="col-md-4">
                <h3 class="asside-title"> İletişim Formu </h3>
                @include('home.message')
                <div class="aa-contact-form">

                    <form class="contactform" action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="form-control" placeholder="Name" name="name" type="text">
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <input class="form-control" placeholder="Email" name="email" type="Email">
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <input class="form-control" placeholder="Phone Number" name="phone" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="form-control" placeholder="Subject" name="subject" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="textarea" placeholder="Message" name="message">Message</textarea>
                                </div>
                            </div>
                            <button class="send-btn" action="{{route('sendmessage')}}">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="aa-error-area">
                    <h4></h4>
                </div>
            </div>
        </row>
    </div>
</section>
@include('home._footer')

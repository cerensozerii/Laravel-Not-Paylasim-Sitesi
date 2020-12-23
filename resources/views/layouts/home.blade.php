<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kahtalı Miçe">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="{{ asset('assets')}}/css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('assets')}}/css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ asset('assets')}}/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{ asset('assets')}}/style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 @yield('css')
 @yield('headerjs')
</head>
<body>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

@include('home._header')
<!-- BEGIN MENU -->
<div class="menu_area">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            @include('home._menu')
        </div>
    </nav>
</div>
@section('content')
    içerik alanı
@show
@include('home._footer')
@yield('footerjs')

</body>
</html>

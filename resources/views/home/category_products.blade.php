@section('title', $data->title.'Note List')
@section('description') {{ $data->description }} @endsection
@section('keywords',$data->keywords)
@php
    $parentCategories=\App\Http\Controllers\HomeController::CategoryList()
@endphp
    <!DOCTYPE html>
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
<div class="about">
    <div class="container">
        <div class="row box">
            @foreach($datalist as $rs)
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aboutheading">
                    <h3><strong class="black">{{$data->title }} Note List</strong></h3>
                    <img src="{{Storage::url($rs->image)}}" style="height:200px" alt="">
                    <div class="aa-secondary-btn" href="{{route('product',['id'=>$rs->id])}}"><a href="{{route('product',['id'=>$rs->id])}}" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
@include('home._footer')

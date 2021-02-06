@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', 'User Profile')

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section('content')
    <!-- Library -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><h2>User <strong class="black">Profile</strong></h2></li>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Library -->

@endsection

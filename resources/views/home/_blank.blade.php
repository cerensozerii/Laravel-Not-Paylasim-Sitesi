
@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section('content')
<!-- Library -->
<div class="Library">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <h2>User <strong class="black">Blank</strong></h2>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="Library-box">
                        <figure><img src="{{ asset('assets')}}/images/Library-.jpg" alt="#"/></figure>
                    </div>
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

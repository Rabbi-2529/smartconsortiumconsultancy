@extends('frontend.master')

@php

$currentPage = 'News';
@endphp


@section('custom_css')
    <link rel="stylesheet" href="{{ asset('assets/css/home-1.css') }}">
    <style>
              .banner .banner-img {
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        overflow: hidden;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-image: url('{{ isset($coverImages[$currentPage]) ? asset( $coverImages[$currentPage]->image) : asset('images/home-1/banner.png') }}');
    }
    </style>
@endsection
@section('banner-content')
    <!-- banner -->
    <div class="banner-section">
        <h1 class="heading split-collab">
            News Details
        </h1>
    </div>
@endsection

@section('main-content')
    <section class="latest-news">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container position-relative z-1">
            <div class="row text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h1 class="title skew-up">News Details</h1>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset($newsDetails->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$newsDetails->title}}</h2>
                            <p class="card-text">{{ strip_tags($newsDetails->description) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

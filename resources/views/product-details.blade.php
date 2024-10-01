@extends('frontend.master')
@php

$currentPage = 'Products & Service';
@endphp
@section('custom_css')
    <link href="{{ asset('assets/css/products_services.css') }}" rel="stylesheet" type="text/css" />

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
    <div class="banner-section">
        <h1 class="heading split-collab">Products and Services Details</h1>
    </div>
@endsection

@section('main-content')
    <section class="latest-news">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container position-relative z-1">
            <div class="row text-center">
                <div class="col-12">
                
                    <div class="card">
                    <img src="{{ asset('storage/app/public/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                        <div class="card-body">
                        <h1>{{ $product->title }}</h1>
                            <p>{!! $product->description !!}</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

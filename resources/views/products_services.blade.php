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
        <h1 class="heading split-collab">Products and Services</h1>
    </div>
@endsection


@section('main-content')
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="section-title">
                <h1 class="title skew-up">Our Products and Services</h1>
                </div>
            </div>

            <div class="col-12">
                <div class="latest-news-grid-item  card-box zoom-effect">
                    @foreach($productsAndServices as $productAndService)
                        <div class="content mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img">
                                        {{-- <a href="blog-details.html"><img src="assets/images/home-1/latest-news-1.png" alt=""></a> --}}
                                        <img src="{{ asset('storage/app/public/' . $productAndService->image) }}" alt="{{ $productAndService->title }}" width="100">
                                    </div>
                                </div>

                                <div class="services-div col-md-8">
                                    <h3 class="services-title-text">{{ $productAndService->title }}</h3>
                                  <p class="services-description-text mt-3">
                                    @if(strlen(strip_tags($productAndService->description)) > 150)
                                        {!! Str::limit(strip_tags($productAndService->description), 150) !!} 
                                        <a href="{{ route('product.details', $productAndService->id) }}" class="read-more-btn">Read More
                                        <span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="11" fill="red" fill-opacity="0.22" />
                                    <path d="M7.9996 12.9094L13.4906 9.19527M8.94727 8L13.8566 8.94766L12.909 13.857" stroke="white"
                                        stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </span>
                                        </a>
                                        
                                    @else
                                        {!! $productAndService->description !!}
                                    @endif
                                </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



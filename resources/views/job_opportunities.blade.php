@extends('frontend.master')
@php

$currentPage = 'Job Opportunities';
@endphp


@section('custom_css')
    <link href="{{ asset('assets/css/service.css') }}" rel="stylesheet" type="text/css" />
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
        .about-us .choose-up-grid-item .img-link a {
    background-color: #d909e9;
    border-radius: 35px;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    -ms-border-radius: 35px;
    -o-border-radius: 35px;
    display: inline-block;
    padding: 8px 29px;
    color: #fff;
    font-family: "Jost", sans-serif;
    font-weight: 500;
    font-size: 18px;
    line-height: 28px;
}
    </style>
@endsection

@section('banner-content')
    <div class="banner-section">
        <h1 class="heading split-collab">Job Opportunities</h1>
    </div>
@endsection


@section('main-content')
    <!-- about-us -->
    <section class="about-us">
        <div class="animated-circle left"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                    <h1 class="title skew-up">Build Your Career With Smart</h1>
                    </div>
                </div>
                @foreach($job_opportunities as $job_opportunity)
                    <div class="col-lg-4">
                        <div class="choose-up-grid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="choose-up-grid-item">
                                        <h2>{{ $job_opportunity->title }}</h2>
                                     <div class="job-inner-text">
    <p class="mb-0" style="color: #007bff;">Experience: {{ $job_opportunity->experience }}</p>
</div>

<div class="job-inner-text mt-3">
    <p class="mb-0" style="color: #28a745;">Salary: {{ $job_opportunity->salary }}</p>
</div>
                                        <div class="img-link">
                                            {{-- <div class="img">
                                                <img src="assets/images/home-2/choose-us-icon-1.png" alt="">
                                            </div> --}}
                                            <a href="{{ route('job_opportunity.single', $job_opportunity->id) }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about-us -->
@endsection



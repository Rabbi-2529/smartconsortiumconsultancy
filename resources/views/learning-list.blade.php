@extends('frontend.master')#
@php

$currentPage = 'E-Learning';
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
        background-color: #a616c3;
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


    .image-container img {
        width: 100px;
        /* Set fixed width */
        height: 100px;
        /* Set fixed height */
        object-fit: cover;
        /* Ensure the image covers the dimensions */
        border-radius: 10%;
        /* Make the image round */
        border: 2px solid #6b26d8;
        /* Optional: Add a border for better visibility */
        display: block;
        /* Ensure the image behaves like a block element */
        /* Center the image within the container */
    }
</style>
@endsection

@section('banner-content')
<div class="banner-section">
    <h1 class="heading split-collab">Learning Course</h1>
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

            @foreach($courses as $course)
<div class="col-lg-4">
    <div class="choose-up-grid">
        <div class="row">
            <div class="col-12">
                <div class="choose-up-grid-item">
                <h2>{{ $course->course_name }}</h2>
                    <!-- Image Section -->
                    <div class="image-container">
                        @if($course->course_teacher_image)
                            <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" alt="{{ $course->course_teacher_name }}">
                        @else
                            <img src="path/to/default/image.jpg" alt="Default Image">
                        @endif
                        <br>
                        <h2>{{ $course->course_teacher_name }}</h2>
                    </div>

                    <br>
                    <div class="job-inner-text">
                        <p class="mb-0">
                            <i class="fas fa-calendar"></i> {{ \Carbon\Carbon::parse($course->start_date)->format('d-m-Y') }} to {{ \Carbon\Carbon::parse($course->deadline_date)->format('d-m-Y') }}
                        </p>
                    </div>
                    <div class="job-inner-text">
                        <p class="mb-0">
                            After completing this course: “ {{ $course->course_description }}
                        </p>
                    </div>

                    <div class="job-inner-text mt-3">
                        <h6 class="mb-0" style="color: #00ffa3;">Price: ৳{{ $course->course_price }}</h6>
                    </div>
                    <br>
                    <div class="img-link" style="color:#6b26d8">
                        <a href="{{ route('elearning_registration', $course->id) }}">Register</a>
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
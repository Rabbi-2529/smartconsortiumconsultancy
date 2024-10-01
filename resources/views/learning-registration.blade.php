@extends('frontend.master')
@php

$currentPage = 'E-Learning';
@endphp
@section('custom_css')
<link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.html') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css') }}"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- Flag Icons -->
<link href="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css') }}" rel="stylesheet">

<!-- Swiper CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">

<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<!-- Common CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

<!-- Nav-1 CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/nav-1.css') }}">

<!-- Footer-1 CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/footer-1.css') }}">

<!-- Service CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
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
                <h1 class="heading split-collab">Registration for {{ $course->course_name }}</h1>
                <p class="description">
                  <a href="index.html">Home</a> <i class="fa-solid fa-chevron-right"></i>
                  <span>Registration</span>
                </p>
              </div>

@endsection
    <!-- navbar ends -->
    <!-- service details -->
    @section('main-content')
<div class="service-details">
  <div class="animated-circle right"></div>
  <div class="animated-circle left"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="left-bar">
          <div class="user-comment">
            <h2 class="comment-title">Course Membership Application for {{ $course->course_name }}</h2>
            <div class="comment-box">
            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
             @endif
            <form action="{{ route('store_registration', $course->id) }}" method="POST" class="row g-4">
    @csrf
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
    </div>
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
    </div>
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Phone" name="phone_number" required>
    </div>
    <div class="col-md-12">
        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
    </div>
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Address" name="address" required>
    </div>
    <div class="col-12">
        <button type="submit" class="button primary-link-btn" data-abc="true">
            Click To Pay
        </button>
    </div>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
 

  <!-- pre loader start -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- pre loader end -->
  <!-- jquery -->
  <script defer src="{{ asset('assets/code.jquery.com/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap JS -->
<script defer src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper JS -->
<script defer src="{{ asset('assets/js/swiper.js') }}"></script>

<!-- GSAP JS -->
<script defer src="{{ asset('assets/js/gsap.min.js') }}"></script>

<!-- Split Text JS -->
<script defer src="{{ asset('assets/js/split-text.js') }}"></script>

<!-- ScrollTrigger JS -->
<script defer src="{{ asset('assets/js/scrolltrigger.js') }}"></script>

<!-- Split Type JS -->
<script defer src="{{ asset('assets/js/split-type.js') }}"></script>

<!-- WAW JS -->
<script defer src="{{ asset('assets/js/waw.js') }}"></script>

<!-- Counter Up JS -->
<script defer src="{{ asset('assets/js/counter-up.js') }}"></script>

<!-- MetisMenu JS -->
<script defer src="{{ asset('assets/js/metismenu.js') }}"></script>

<!-- Magnific Popup JS -->
<script defer src="{{ asset('assets/js/magnific-popup.js') }}"></script>

<!-- Waypoint JS -->
<script defer src="{{ asset('assets/js/waypoint.js') }}"></script>

<!-- Main JS -->
<script defer src="{{ asset('assets/js/main.js') }}"></script>


  @endsection
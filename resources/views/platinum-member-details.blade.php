@extends('frontend.master')
@php
   
    $currentPage = 'Membership';
@endphp

@section('custom_css')
    <!-- home-1 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/home-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/team-details.css') }}">
<style>
    .banner .banner-img {
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        overflow: hidden;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-image: url('{{ isset($coverImages[$currentPage]) ? asset( $coverImages[$currentPage]->image) : asset('images/home-1/banner.png') }}') !important;
    }
</style>

@endsection
@section('banner-content')
    <div class="banner-section">
        <h1 class="heading split-collab">
            Membership Details
        </h1>
    </div>

    <div class="section">
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
    </div>
@endsection

@section('main-content')
<section class="team-member-info">
        <div class="animated-circle left"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('public/upload/profile_images/' . ($user->profile_image ?? 'default.png')) }}" alt="{{ $user->first_name }} {{ $user->last_name }}">
                </div>
                <div class="col-lg-6 team-bio">
                    <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                    <div class="table">
                        <div>
                            <p>Position</p>
                            <p>:</p>
                            <p style="color: green;">{{ $membership->membership_type == 1 ? 'Platinum' : 'N/A' }}</p>

                        </div>
                        <div>
                            <p>Practice Area</p>
                            <p>:</p>
                            <p>{{ $user->bio ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <p>Experience</p>
                            <p>:</p>
                            <p>{{ $user->experience ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <p>Phone</p>
                            <p>:</p>
                            <p>{{ $user->phone_number ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <p>Website</p>
                            <p>:</p>
                            <p>{{ $user->website ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <p>Email</p>
                            <p>:</p>
                            <p>{{ $user->email ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <ul class="social-link">
                        @if($user->facebook)
                            <li><a href="{{ $user->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        @endif
                        @if($user->instagram)
                            <li><a href="{{ $user->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                        @endif
                        @if($user->twitter)
                            <li><a href="{{ $user->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                        @endif
                        @if($user->linkedin)
                            <li><a href="{{ $user->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="summary">
                        <h5>Summary</h5>
                        <p>{{ $user->bio_summary ?? 'N/A' }}</p>
                    </div>
                </div>
                <div class="col-lg-12 professional-details">
                    <hr>
                               @forelse ($ads as $ad)
    <div class="col-12 col-lg-6 mb-4">
        <div class="row grid-item card-box zoom-effect">
            <div class="col-12 col-lg-4">
                <div class="img h-100">
                    <a href="{{ $ad->website }}" target="_blank">
                        @if ($ad->image)
                            <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" class="img-fluid">
                        @else
                            <img src="https://via.placeholder.com/400x300" alt="No Image" class="img-fluid">
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <a href="{{ $ad->website }}" target="_blank">
                   
                </a>
                <p class="specialist">{{ $ad->website }}</p>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <p class="text-center">No ads available.</p>
    </div>
@endforelse
                </div>
                <div class="col-lg-12 career-details">
                    <hr>
               
                </div>
            </div>
        </div>
        <div class="animated-circle right"></div>
    </section>
@endsection
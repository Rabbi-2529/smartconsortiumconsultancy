@extends('frontend.master')
@php

$currentPage = 'Job Opportunities';
@endphp
@section('custom_css')
    <link href="{{ asset('assets/css/service-details.css') }}" rel="stylesheet" type="text/css" />
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
        <h1 class="heading split-collab">Job Opportunities</h1>
    </div>
@endsection


@section('main-content')
    <!-- service details -->
    <div class="service-details">
        <div class="animated-circle right"></div>
        <div class="animated-circle left"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 order-2 order-lg-1">
                    <div class="left-bar">
                        <div class="service-1">
                            <div class=" overlay-anim zoom-effect overflow-hidden">
                                {{-- <img src="{{ asset('assets/images/service/service-1.png') }}" alt=""> --}}
                                @if($job_opportunity->image)
                                    <img src="{{ asset('storage/app/public/' . $job_opportunity->image) }}" alt="Job Image">
                                @endif
                            </div>
                            <div class="p-3">
                                <h2 class="mb-1">{{ $job_opportunity->title }}</h2>
                                <div class="row mb-4">
                                    <div class="col-12 mb-1">
                                        <span class="job-icon-span"><i class="fa-solid fa-briefcase"></i></span>
                                        <span class="job-icon-text-span">Job Type: {{ $job_opportunity->job_type }}</span>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <span class="job-icon-span"><i class="fa-solid fa-clock"></i></span>
                                        <span class="job-icon-text-span">Deadline: {{ $job_opportunity->deadline }}</span>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <p class="ms-4"><span class="job-icon-text-span">For any query email us at: 445961@iglweb.com</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-description p-3">
                                {{!! $job_opportunity->description }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 order-1 order-lg-2">
                    <div class="right-bar position-sticky top-0">
                        <div class="main-service">
                            <h2>Key Informations</h2>
                            <ul class="mb-5">
                                <li>
                                    <span class="key-info-text">Published On:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->created_at->format('Y-m-d') }}</span>
                                </li>
                                <li>
                                    <span class="key-info-text">Vacancy:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->vacancy }}</span>
                                </li>
                                <li>
                                    <span class="key-info-text">Experience:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->experience }}</span>
                                </li>
                                <li>
                                    <span class="key-info-text">Salary:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->salary }}</span>
                                </li>
                                <li>
                                    <span class="key-info-text">Job Type:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->job_type }}</span>
                                </li>
                                <li>
                                    <span class="key-info-text">Deadline:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->deadline }}</span>>
                                </li>
                                <li>
                                    <span class="key-info-text">Location:</span><span class="key-info-text-right ms-2">{{ $job_opportunity->location }}</span>>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('job_applicantion.client', $job_opportunity->id) }}" class="button primary-link-btn">Apply Now
                                    <span><svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.84375 5.78125L2.28125 10.4062C2.125 10.5625 1.875 10.5625 1.75 10.4062L1.125 9.78125C0.96875 9.625 0.96875 9.40625 1.125 9.25L4.8125 5.5L1.125 1.78125C0.96875 1.625 0.96875 1.375 1.125 1.25L1.75 0.625C1.875 0.46875 2.125 0.46875 2.28125 0.625L6.84375 5.25C7 5.40625 7 5.625 6.84375 5.78125Z" fill="white"></path></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details -->
@endsection



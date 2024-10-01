@extends('frontend.master')
@php
   
    $currentPage = 'Membership';
@endphp

@section('custom_css')
    <!-- home-1 css -->
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
        background-image: url('{{ isset($coverImages[$currentPage]) ? asset( $coverImages[$currentPage]->image) : asset('images/home-1/banner.png') }}') !important;
    }
</style>

@endsection
@section('banner-content')
    <div class="banner-section">
        <h1 class="heading split-collab">
        Membership
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
<section class="industry-expert">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="subtitle">Gold Members</h2>
                        <h1 class="title skew-up">
                            Our Expert Members <br>
                            Innovation in Action
                        </h1>
                    </div>
                </div>

                @forelse ($users as $user)
                    <div class="col-12 col-lg-6">
                        <div class="row grid-item card-box zoom-effect">
                            <div class="col-12 col-lg-4">
                                <div class="img h-100">
                                    <a href="{{ route('gold_member_details', $user->id) }}">
                                        <img src="{{ asset('public/' . ($user->profile_image ?? 'default.png')) }}" alt="{{ $user->first_name }} {{ $user->last_name }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <a href="{{ route('gold_member_details', $user->id) }}">
                                    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
                                </a>
                                <p class="specialist">{{ $user->membership->membership_type ?? 'N/A' }}</p>
                                <h2>Follow Me</h2>
                                <ul class="social-link">
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No Gold members found.</p>
                    </div>
                @endforelse

            </div>

            <!-- Pagination Controls -->
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
        background-image: url('{{ isset($coverImages[$currentPage]) ? asset($coverImages[$currentPage]->image) : asset('images/home-1/banner.png') }}');
    }

    .content h1, .content p {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    .content h1 {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .no-news-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color: #fff;
        padding: 50px;
    }
    .no-news-container img {
        margin-bottom: 20px;
    }
    .no-news-container h1 {
        font-size: 2rem;
        margin-bottom: 20px;
    }
    .no-news-container p {
        font-size: 1.2rem;
    }
    
    /* Custom pagination styles */
    .pagination {
        justify-content: center;
        margin-top: 20px;
        padding: 0;
        list-style: none;
        display: flex;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        display: block;
        padding: 10px 15px;
        border: 1px solid #000000;
        border-radius: 5px;
        color: #ff0000;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    
    .pagination a:hover {
        background-color: #db00ca;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    .pagination .active a {
        background-color: #ff0f0f;
        color: white;
        border: 1px solid #232d39;
        box-shadow: none;
        transform: translateY(0);
    }

    .pagination .disabled a {
        color: #ccc;
        pointer-events: none;
        background-color: transparent;
        border: 1px solid #ccc;
    }
</style>
@endsection

@section('banner-content')
<div class="banner-section">
    <h1 class="heading split-collab">News</h1>
</div>
@endsection

@section('main-content')
<section class="latest-news">
    <div class="container position-relative z-1">
        @if ($news->isEmpty())
            <div class="no-news-container">
                <img src="{{ asset('assets/images/no-news.jpeg') }}" alt="No News">
                <h1>No News Available</h1>
                <p>Please check back later for the latest updates and news.</p>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h1 class="title">Latest News</h1>
                    </div>
                </div>
                @foreach ($news as $newsItem)
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="latest-news-grid-item">
                            <div class="img">
                                <a href="{{ route('news_details', ['id' => $newsItem->id]) }}">
                                    <img class="product-div-images" style="height: 220px;" src="{{ asset($newsItem->image) }}" alt="{{ $newsItem->title }}">
                                </a>
                            </div>
                            <div class="content">
                                <a href="{{ route('news_details', ['id' => $newsItem->id]) }}" class="d-block">
                                    <h1 class="w-100">{{ $newsItem->title }}</h1>
                                    <p class="mb-3">{{ Str::limit(strip_tags($newsItem->description), 120) }}</p>
                                </a>
                                <a href="{{ route('news_details', ['id' => $newsItem->id]) }}">read more
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="11" fill="white" fill-opacity="0.22" />
                                            <path d="M7.9996 12.9094L13.4906 9.19527M8.94727 8L13.8566 8.94766L12.909 13.857" stroke="white" stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                <nav aria-label="News pagination">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        <li class="page-item {{ $news->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $news->previousPageUrl() }}" aria-disabled="{{ $news->onFirstPage() }}">Previous</a>
                        </li>

                        {{-- Pagination Elements --}}
                        @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $news->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        <li class="page-item {{ $news->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $news->nextPageUrl() }}" aria-disabled="{{ !$news->hasMorePages() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        @endif
    </div>
</section>
@endsection

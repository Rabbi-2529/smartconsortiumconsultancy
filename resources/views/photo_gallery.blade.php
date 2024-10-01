@extends('frontend.master')

@php
    $currentPage = 'Photo Gallery';
@endphp

@section('custom_css')
<link href="{{ asset('assets/css/about-us.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/css/custom_style.css') }}" rel="stylesheet" type="text/css" />
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
.page-link:hover {
    z-index: 2;
    color: var(--bs-pagination-hover-color);
    background-color: var(--bs-pagination-hover-bg);
    border-color: #120a0a !important;
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
        color: #ccc; /* Gray color for disabled links */
        pointer-events: none; /* Disable interaction */
        background-color: transparent; /* No background for disabled */
        border: 1px solid #ccc; /* Light gray border */
    }
</style>
@endsection

@section('banner-content')
<div class="banner-section">
    <h1 class="heading split-collab">Photo Gallery</h1>
</div>
<div class="section">
    <span class="hscroll-line"></span>
    <span class="hscroll-line"></span>
    <span class="hscroll-line"></span>
    <span class="hscroll-line"></span>
</div>
@endsection

@section('main-content')
<div class="mt-5">
    <div class="d-flex justify-content-center flex-wrap">
        @forelse ($photos as $photo)
            <div class="col-lg-4 col-md-6 col-12 mb-4" style="padding: 0 10px;">
                <div class="card" style="border: none;">
                    <img src="{{ asset('storage/app/public/' . $photo->photo_url) }}" class="card-img-top" alt="{{ $photo->caption }}" onclick="openPopup('{{ asset('storage/app/public/' . $photo->photo_url) }}')">
                    <div class="card-body">
                        <p class="card-text">{{ $photo->caption }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No photos available.</p>
        @endforelse
    </div>
    
    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Photo gallery pagination">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                <li class="page-item {{ $photos->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $photos->previousPageUrl() }}" aria-disabled="{{ $photos->onFirstPage() }}">Previous</a>
                </li>

                {{-- Pagination Elements --}}
                @foreach ($photos->getUrlRange(1, $photos->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $photos->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Next Page Link --}}
                <li class="page-item {{ $photos->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $photos->nextPageUrl() }}" aria-disabled="{{ !$photos->hasMorePages() }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="popup-container" class="popup-container">
    <div class="popup">
        <img id="popup-image" src="" alt="" class="success-tick popup-image-gallery">
        <div class="close-icon-div">
            <span class="close-icon mx-auto"><i class="fa-solid fa-xmark fa-xl"></i></span>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
    function openPopup(imageUrl) {
        $('#popup-image').attr('src', imageUrl);
        $('.popup').removeClass('show');
        setTimeout(function () {
            $('.popup').addClass('show');
        }, 50);
        $('#popup-container').addClass('show');

        $('.close-icon').on('click', function() {
            $('#popup-container').removeClass('show');
        });
    }
</script>
@endsection

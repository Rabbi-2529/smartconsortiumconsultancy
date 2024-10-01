@extends('frontend.master')

@php
    $currentPage = 'Video Gallery';
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

        .video-thumbnail img {
            max-height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .video-caption {
            margin-top: 10px;
        }

        .video-play-btn {
            width: 60px;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .ripple {
            cursor: pointer;
        }

        .card {
            margin-bottom: 20px;
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
        <h1 class="heading split-collab">Video Gallery</h1>
    </div>
@endsection

@section('main-content')
    <section class="about">
        <div class="animated-circle left"></div>
        <div class="container position-relative z-3">
            <div>
                <h1 class="text-center text-white">Video Gallery</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <!-- Loop through videos -->
                        @foreach($videos as $video)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="video-thumbnail position-relative">
                                        <!-- Video Thumbnail -->
                                        <a class="popup-video" data-video-url="{{ $video->video_url }}" data-bs-toggle="modal" data-bs-target="#videoModal">
                                            <img src="{{ $video->video_thumbnail }}" alt="{{ $video->caption }}" class="card-img-top">
                                            
                                            <div class="video-play-btn ripple position-absolute top-50 start-50 translate-middle">
                                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="25" cy="25" r="25" fill="rgba(0, 0, 0, 0.5)"/>
                                                    <path d="M20 15L35 25L20 35V15Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="video-caption card-body">
                                        <h5 class="card-title text-center">{{ $video->caption }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                <nav aria-label="Video gallery pagination">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        <li class="page-item {{ $videos->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $videos->previousPageUrl() }}" aria-disabled="{{ $videos->onFirstPage() }}">Previous</a>
                        </li>

                        {{-- Pagination Elements --}}
                        @foreach ($videos->getUrlRange(1, $videos->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $videos->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        <li class="page-item {{ $videos->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $videos->nextPageUrl() }}" aria-disabled="{{ !$videos->hasMorePages() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Video Player</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 24px; margin-left: auto;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="videoFrame" width="100%" height="400" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoLinks = document.querySelectorAll('.popup-video');

            videoLinks.forEach(link => {
                link.addEventListener('click', function () {
                    const videoUrl = this.getAttribute('data-video-url');
                    const videoId = videoUrl.includes('youtu.be') 
                        ? videoUrl.split('/').pop() 
                        : videoUrl.split('v=')[1].split('&')[0];
                    
                    const embedUrl = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&showinfo=0';

                    // Set the src attribute of the iframe in the modal
                    document.getElementById('videoFrame').src = embedUrl;
                });
            });

            // Clear the video when the modal is closed
            $('#videoModal').on('hidden.bs.modal', function () {
                document.getElementById('videoFrame').src = '';
            });
        });
    </script>
@endsection

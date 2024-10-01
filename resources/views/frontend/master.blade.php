<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Consortium Consultancy</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.html') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.png') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- font-awesome -->
    <!-- <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css"
        integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css"
        integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- flag-icons -->
    <link href="{{asset('assets/cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css')}}" rel="stylesheet">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">

    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

    <!-- nav-1 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nav-1.css') }}">

    <!-- footer-1 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/footer-1.css') }}">
    @yield('custom_css')
</head>

<body>
    <!-- main -->
    <div class="main">
        <!-- navbar start -->
        <header class="header">
            <!-- topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center text-light">
                                <a href="mailto:support@smartconsortiumconsultancy.com">support@smartconsortiumconsultancy.com
                                    <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                                <!--<p>Recommend and receive 25% bonus discount on checkout.</p>-->
                                <div class="d-flex align-items-center">
                       
                                @auth
                                
                                <form action="{{ route('logout') }}" method="POST" >
            @csrf
            <button type="submit"style="margin-right: 15px;color:white;">
                <i class="fa-solid fa-sign-out-alt" ></i> Logout
            </button>
        </form>
                <a href="{{ url('profile') }}">
                                <i class="fa-solid fa-user"></i> Profile
                            </a>
            @else
                <a href="{{ url('auth-login') }}">Login</a>
            @endauth
                                        
                                    @foreach ($socialLinks as $socialLink)
                                        <ul class="social-icon">
                                            <li>
                                                <a href="{{ $socialLink->link }}" target="_blank">
                                                    <i
                                                        class="fa-brands  fa-{{ strtolower($socialLink->title) }} me-3"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="banner">
                <div class="banner-img">
                    <div class="overlay">
                        <div class="container">
                            <!-- navbar -->
                            <nav class="navbar navbar-expand-lg header--sticky">
                                <div class="container">
                                    <a class="navbar-brand" href="{{route('index')}}">
                                        <img class="img-fluid" src="assets/images/logo.png" alt="">
                                    </a>
                                    <div class="navbar-toggler" aria-expanded="false" role="navigation">
                                        <button class="nav-link search-btn" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8223 11.873C13.0508 12.127 13.0508 12.5078 12.7969 12.7363L12.0859 13.4473C11.8574 13.7012 11.4766 13.7012 11.2227 13.4473L8.70898 10.9336C8.58203 10.8066 8.53125 10.6543 8.53125 10.502V10.0703C7.61719 10.7812 6.5 11.1875 5.28125 11.1875C2.36133 11.1875 0 8.82617 0 5.90625C0 3.01172 2.36133 0.625 5.28125 0.625C8.17578 0.625 10.5625 3.01172 10.5625 5.90625C10.5625 7.15039 10.1309 8.26758 9.44531 9.15625H9.85156C10.0039 9.15625 10.1562 9.23242 10.2832 9.33398L12.8223 11.873ZM5.28125 9.15625C7.05859 9.15625 8.53125 7.70898 8.53125 5.90625C8.53125 4.12891 7.05859 2.65625 5.28125 2.65625C3.47852 2.65625 2.03125 4.12891 2.03125 5.90625C2.03125 7.70898 3.47852 9.15625 5.28125 9.15625Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                        <button class="toggle-btn" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
                                            aria-label="Toggle navigation">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse">
                                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('index')}}"> Home </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="#">Pages <span class="ms-2"><i
                                                            class="fa-solid fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <!-- <li>
                                    <a class="" href="about-us.html">About</a>
                                </li> -->
                                                    <li>
                                                        <a class="" href="{{ route('photo_gallery.user') }}">Photo Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ route('video_gallery') }}">Video
                                                            Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{route('latest_news')}}">News</a>
                                                    </li>
                                                             <li>
                                                <a class="nav-link" href="{{ route('job_opportunities.client') }}"> Career </a>
                                            </li>
                                                <li>
                                                        <a class="" href="{{ route('aboutUs') }}">About Us</a>
                                                    </li>
                                                <li>
                                                    <a class="" href="{{ route('aboutCeo') }}">About CEO</a>
                                                </li>
                                        
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Blog Grid</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Blog Details</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Pricing Plan</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Project Grid</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">project Details</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Service</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Service Details</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Team</a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a class="" href="#">Team Details</a>-->
                                                    <!--</li>-->
                                                   
                                                </ul>
                                            </li>
                                             <li class="nav-item dropdown">
                                                <a href="#" class="nav-link"> Employers <span
                                                        class="ms-2"><i
                                                            class="fa-solid fa-angle-down"></i></span></a>
                                                @foreach ($employCorners as $employCorner)
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="" href="{{$employCorner->cv}}" download>Download Cv</a>
                                                        </li>
                                                        <li>
                                                            <a class="" href="{{$employCorner->short_video_resume}}" target="_blank">Short Resume</a>
                                                        </li>
                                                        <li>
                                                            <a class="" href="{{$employCorner->detailed_video_resume}}" target="_blank">Detailed Resume</a>
                                                        </li>

                                                    </ul>
                                                @endforeach
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link">Membership <span class="ms-2"><i class="fa-solid fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="" href="{{ route('platinum_members') }}">Platinum</a></li>
                                                    <li><a class="" href="{{ route('gold_members') }}">Gold</a></li>
                                                    <li><a class="" href="{{ route('silver_members') }}">Silver</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ route('elearning_list') }}">E-Learning</a>
                                            
                                        </li>
                                            <li class="nav-item">
                                                <a href="{{ route('products_services.client') }}" class="nav-link">Services </a>

                                            </li>
                                            <!--<li class="nav-item dropdown">-->
                                            <!--    <a href="#" class="nav-link"> About <span class="ms-2"><i-->
                                            <!--                class="fa-solid fa-angle-down"></i></span></a>-->
                                            <!--    <ul class="dropdown-menu">-->
                                            <!--        <li>-->
                                            <!--            <a class="" href="{{ route('aboutUs') }}">About Us</a>-->
                                            <!--        </li>-->
                                            <!--    <li>-->
                                            <!--        <a class="" href="{{ route('aboutCeo') }}">About CEO</a>-->
                                            <!--    </li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                                    
                                                  <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contractus') }}">Contact</a>
                                            </li>
                                           
                                       
                                         
                                        </ul>
                                        <a href="{{ url('join-us') }}" class="button primary-link-btn" style="padding-left: 10px; padding-right: 10px;">
                                            Join Us
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <!-- offcanvas-navbar -->
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                                aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header d-flex align-items-center justify-content-between">
                                    <div class="offcanvas-title" id="offcanvasExampleLabel">
                                        <span class="navbar-brand">
                                            <img class="img-fluid" src="assets/images/logo.png" alt="">
                                        </span>
                                    </div>
                                    <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('index')}}"> Home </a>
                                            </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="" href="#">Photo Gallery</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{route('video_gallery')}}">Video Gallery</a>
                                                </li>
                                                


                                                 <li>
                                                        <a class="" href="{{ route('photo_gallery.user') }}">Photo Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ route('video_gallery') }}">Video
                                                            Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{route('latest_news')}}">News</a>
                                                    </li>
                                                             <li>
                                                <a class="nav-link" href="{{ route('job_opportunities.client') }}"> Career </a>
                                            </li>
                                             <li>
                                                    <a class="" href="{{ route('aboutUs') }}">About</a>
                                                </li>

                                                <li>
                                                    <a class="" href="{{ route('aboutCeo') }}">About CEO</a>
                                                </li>
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Blog Standard</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Blog Grid</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Blog Details</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Pricing Plan</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Project Grid</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">project Details</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Service</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Service Details</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Team</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Team Details</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="contact.html">Contact Us</a>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <a class="" href="#">Faq</a>-->
                                                <!--</li>-->
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a href="#" class="nav-link">Membership <span class="ms-2"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="" href="{{ route('platinum_members') }}">Platinum</a></li>
                                                    <li><a class="" href="{{ route('gold_members') }}">Gold</a></li>
                                                    <li><a class="" href="{{ route('silver_members') }}">Silver</a></li>
                                                </ul>
                                            </li>
                                       
                                        <!--<li class="nav-item dropdown">-->
                                        <!--    <span class="nav-link"> About Us </span>-->

                                        <!--    <ul class="dropdown-menu">-->
                                        <!--        <li>-->
                                        <!--            <a class="" href="{{ route('aboutUs') }}">About</a>-->
                                        <!--        </li>-->

                                        <!--        <li>-->
                                        <!--            <a class="" href="{{ route('aboutCeo') }}">About CEO</a>-->
                                        <!--        </li>-->
                                        <!--    </ul>-->
                                        <!--</li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('elearning_list') }}">E-Learning</a>
                                            
                                            </li>
                                                  <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contractus') }}">Contact</a>
                                            </li>
                                           
                                                <li class="nav-item">
                                                <a class="nav-link" href="{{ url('auth-login') }}">Login</a>
                                            </li>

                                    </ul>
                                    <a href="{{ url('join-us') }}" class="button primary-link-btn" >
                                        Join Us
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <!-- Search Modal -->
                            <div class="search-modal modal fade" id="exampleModal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Search</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group mb-3">
                                                <input type="search" class="form-control" placeholder="Search"
                                                    aria-label="Search..." aria-describedby="button-addon2">
                                                <button class="btn" type="button" id="button-addon2">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @yield('banner-content')

                            <!-- line animation -->

                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!-- navbar ends -->

        @yield('main-content')

        <!-- footer -->
        <footer class="footer">
              <div class="left-img">
                <img src="{{asset('assets/images/footer-left-img.png')}}" alt="">
            </div>
            <div class="right-img">
                <img src="{{asset('assets/images/footer-right-img.png')}}" alt="">
            </div>
            <div class="container position-relative z-1">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                        </div>
                        <p>
                            A farm is a plot of land that is used to grow crops and raise
                            livestock, as in our farm, we raise sheep and sell their wool
                            the word farm is also.
                        </p>
                       <ul class="social-link">
                            @foreach ($socialLinks as $socialLink)
                                <li>
                                    <a href="{{ $socialLink->link }}" target="_blank">
                                        <i class="fa-brands fa-{{ strtolower($socialLink->title) }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h2 class="footer-title">Our Services</h2>
                        <ul class="footer-link">
                            <li>
                                <a href="#"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Visualizing Architecture Daily</a>
                            </li>
                            <li>
                                <a href="#"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Dose of Architecture Architizer</a>
                            </li>
                            <li>
                                <a href="#"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Architecture Daily Dose of</a>
                            </li>
                            <li>
                                <a href="#"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Architecture Visualizing</a>
                            </li>
                            <li>
                                <a href="#"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Architecture</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h2 class="footer-title">Useful Links</h2>
                        <ul class="footer-link">
                            <li>
                                <a href="blog-grid.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    News &amp; Media
                                </a>
                            </li>
                            <li>
                                <a href="about-us.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Sustainability About
                                </a>
                            </li>
                            <li>
                                <a href="team.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Expertise Case</a>
                            </li>
                            <li>
                                <a href="blog-grid.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Studies</a>
                            </li>
                            <li>
                                <a href="team.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Our Team</a>
                            </li>
                            <li>
                                <a href="contact.html"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4294 7.99993C13.4294 8.19279 13.3651 8.32136 13.2366 8.44993L6.16512 15.5214C5.90798 15.7785 5.52227 15.7785 5.26512 15.5214C5.00798 15.2642 5.00798 14.8785 5.26512 14.6214L11.8866 7.99993L5.26512 1.3785C5.00798 1.12136 5.00798 0.735645 5.26512 0.478502C5.52227 0.221359 5.90798 0.221359 6.16512 0.478502L13.2366 7.54993C13.3651 7.6785 13.4294 7.80707 13.4294 7.99993ZM8.73655 7.54993L1.66512 0.478502C1.40798 0.221359 1.02227 0.221359 0.765123 0.478502C0.50798 0.735645 0.50798 1.12136 0.765123 1.3785L7.38655 7.99993L0.765123 14.6214C0.50798 14.8785 0.50798 15.2642 0.765123 15.5214C1.02227 15.7785 1.40798 15.7785 1.66512 15.5214L8.73655 8.44993C8.86512 8.32136 8.92941 8.19279 8.92941 7.99993C8.92941 7.80707 8.86512 7.6785 8.73655 7.54993Z"
                                            fill="white" />
                                    </svg>
                                    Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h2 class="footer-title">Recent Projects</h2>
                        <div class="footer-gallery">
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-1.png')}}" alt="">
                            </a>
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-2.png')}}" alt="">
                            </a>
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-3.png')}}" alt="">
                            </a>
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-4.png')}}" alt="">
                            </a>
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-5.png')}}" alt="">
                            </a>
                            <a href="project-details.html" class="gallery-item">
                                <img src="{{asset('assets/images/home-1/footer-gallery-6.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tiny-footer -->
            <div class="tiny-footer">
                <div class="container">
                    <div class="row">
  <div class="col-12 col-lg-6">
    <p style="position: relative; z-index: 1;">
        Copyright © 
        <a href="https://iglweb.com/web/" target="_blank" style="color: greenyellow;">IGL Web Ltd.</a> 
        All Rights Reserved.
    </p>
</div>
                        <div class="col-12 col-lg-6">
                            <ul>
                                <li>
                                    <a href="index.html">Setting &amp; privacy </a>
                                </li>
                                <li>
                                    <a href="faq.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="contact.html">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tiny-footer -->

        </footer>
        <!-- footer -->
        <!-- progress area start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
            ">
                </path>
            </svg>
        </div>
        <!-- progress area end -->
    </div>
    <!-- main -->

    <!-- pre loader start -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- pre loader end -->

    <!-- jquery -->
    <script defer src="{{ asset('assets/code.jquery.com/jquery-3.6.0.min.js') }}"></script>

    <!-- bootstrap js -->
    <script defer src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- gsap js -->
    <script defer src="{{ asset('assets/js/swiper.js') }}"></script>

    <!-- gsap js -->
    <script defer src="{{ asset('assets/js/gsap.min.js') }}"></script>

    <!-- split-text js -->
    <script defer src="{{ asset('assets/js/split-text.js') }}"></script>

    <!-- split-text js -->
    <script defer src="{{ asset('assets/js/scrolltigger.js') }}"></script>

    <!-- split-type js -->
    <script defer src="{{ asset('assets/js/split-type.js') }}"></script>

    <!-- waw js -->
    <script defer src="{{ asset('assets/js/waw.js') }}"></script>

    <!-- counter-up js -->
    <script defer src="{{ asset('assets/js/counter-up.js') }}"></script>

    <!-- metismenu js -->
    <script defer src="{{ asset('assets/js/metismenu.js') }}"></script>

    <!-- metismenu js -->
    <script defer src="{{ asset('assets/js/magnific-popup.js') }}"></script>

    <!-- metismenu js -->
    <script defer src="{{ asset('assets/js/waypoint.js') }}"></script>

    <!-- main js -->
    <script defer src="{{ asset('assets/js/main.js') }}"></script>
<!--<script>-->
    // Array of predefined colors
<!--    document.addEventListener('DOMContentLoaded', function() {-->
<!--        const navLinks = document.querySelectorAll('.navbar .navbar-nav .nav-item .nav-link');-->
<!--        const colors = [-->
<!--'#FF5733',  '#3357FF', '#F1C40F', '#9B59B6', '#E74C3C', '#2ECC71'-->
<!--        ];-->

<!--        navLinks.forEach(link => {-->
<!--            link.addEventListener('mouseover', function() {-->
<!--                const randomColor = colors[Math.floor(Math.random() * colors.length)];-->
<!--                this.style.backgroundColor = randomColor;-->
                this.style.color = '#fff'; // Text color when hovering
<!--            });-->

<!--            link.addEventListener('mouseout', function() {-->
                this.style.backgroundColor = ''; // Reset background color
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->
    <script>
// Array of predefined colors
const colors = ['#FF5733',  '#3357FF', '#F1C40F', '#9B59B6', '#E74C3C', '#2ECC71'];

// Select all navbar links
const navLinks = document.querySelectorAll('.navbar .navbar-nav .nav-item .nav-link');

// Add hover event listeners to each link
navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
        // Get a random color from the array
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        link.style.color = randomColor; // Change to random color on hover
    });

    link.addEventListener('mouseout', () => {
        link.style.color = '#fff'; // Reset to default color when not hovering
    });
});

</script>

    @yield('custom_js')

</body>


<!-- Mirrored from devsaidul.com/html3/new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 03:56:42 GMT -->

</html>

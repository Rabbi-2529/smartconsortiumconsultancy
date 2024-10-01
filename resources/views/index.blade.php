@extends('frontend.master')
@php
   
    $currentPage = 'Home';
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
        <p class="subject">
        <span>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20.7266 1.28125C21 2.53125 21 3.50781 20.9609 4.48438C20.9609 8.50781 18.8125 10.9297 15.9609 12.7266V16.8281C15.9609 17.4531 15.5312 18.1953 14.9453 18.5078L11.0781 20.4219C10.9609 20.4609 10.8047 20.5 10.6875 20.5C10.1406 20.5 9.75 20.1094 9.75 19.5625V15.5C9.75 13.4688 8.07031 11.75 6 11.75H1.9375C1.39062 11.75 1 11.3594 1 10.8125C1 10.6953 1.03906 10.5391 1.07812 10.4219L3.03125 6.55469C3.30469 5.96875 4.04688 5.5 4.67188 5.5H8.77344C10.5703 2.6875 12.9922 0.5 17.0156 0.5C17.9922 0.5 18.9688 0.5 20.2188 0.773438C20.4531 0.851562 20.6484 1.04688 20.7266 1.28125ZM16 7.0625C16.8594 7.0625 17.5625 6.39844 17.5625 5.5C17.5625 4.64062 16.8594 3.9375 16 3.9375C15.1016 3.9375 14.4375 4.64062 14.4375 5.5C14.4375 6.39844 15.1016 7.0625 16 7.0625ZM2.36719 14.2891C3.92969 12.6875 6.03906 12.6094 7.48438 14.0156C8.89062 15.4609 8.8125 17.5703 7.21094 19.1328C6.23438 20.1484 3.69531 20.6172 1 20.5C0.882812 17.8047 1.35156 15.2656 2.36719 14.2891ZM5.57031 17.5703C6.07812 17.0234 6.11719 16.3203 5.64844 15.8516C5.17969 15.3828 4.47656 15.4219 3.92969 15.9297C3.61719 16.2812 3.46094 17.1016 3.5 18C4.39844 18.0391 5.21875 17.8828 5.57031 17.5703Z"
                fill="#D90A2C" />
            </svg> </span>Business Consulting & Training
        </p>
     <h1 class="heading split-collab">
    Ready to take your Career and Business Growth<br>
    to the next level through<br>
    Training and Consulting
</h1>
       <p class="description" style="color: yellow;">
    A complete solution for H.R, Administration, Compliance & RMG factory management with Training, Consultancy and Job Placement
</p>
        <a href="{{ url('join-us') }}" class="button primary-link-btn">Join Us
        <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                fill="white" />
            </svg> </span></a>
    </div>

    <div class="section">
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
        <span class="hscroll-line"></span>
    </div>
@endsection


@section('main-content')
<!-- about section -->
<section class="about">
    <div class="animated-circle left"></div>
    <div class="container position-relative z-3">
        <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="content">
            <h2 class="subtitle">About Company</h2>
            <h1 class="title skew-up">
                To be the pioneer in the consultancy, training
                <br> factory development services specializing in the RMG and manufacturing industry.
            </h1>
            </div>
            <p>
         We believe to support you with 100% correct knowledge and information and the supported documents, needs with the help of Technological Development, which directly hints to the Artificial Intelligence (A.I)
            </p>

            <div class="company">
            <div>
                <div class="icon">
                <img class="img-fluid" src="assets/images/home-1/product-development.png" alt="">
                </div>
                <div class="text">
                <p>Organizations and recognized work</p>
                </div>
            </div>
            <div>
                <div class="icon">
                <img class="img-fluid" src="assets/images/home-1/nanotechnology.png" alt="">
                </div>
                <div class="text">
                <p>We use latest tech to run your project and training</p>
                </div>
            </div>
            </div>
            <a href="{{ route('aboutUs') }}" class="button primary-link-btn">Read More
            <span><svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.84375 5.78125L2.28125 10.4062C2.125 10.5625 1.875 10.5625 1.75 10.4062L1.125 9.78125C0.96875 9.625 0.96875 9.40625 1.125 9.25L4.8125 5.5L1.125 1.78125C0.96875 1.625 0.96875 1.375 1.125 1.25L1.75 0.625C1.875 0.46875 2.125 0.46875 2.28125 0.625L6.84375 5.25C7 5.40625 7 5.625 6.84375 5.78125Z"
                    fill="white" />
                </svg> </span></a>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
            <div class="position-relative">
            <div class="img">
                <div class="img-1 wow overlay-anim zoom-effect"><img class="img-fluid w-100 " src="assets/images/home-1/about-1.png" alt=""></div>
                <div class="img-2 wow overlay-anim zoom-effect"><img class="img-fluid w-100" src="assets/images/home-1/about-2.png" alt=""></div>
            </div>
            <section class="video-area">
                <div class="video-play-btn ripple">
                <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=pGbIOC83-So">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_351_722)">
                        <path
                        d="M15.7911 8.8584L15.7924 8.85933C15.8655 8.90943 15.9328 8.97599 15.9978 9.06315C16.2379 9.4193 16.1469 9.90109 15.7955 10.1428L15.7949 10.1433L4.08695 18.2257C4.08691 18.2257 4.08688 18.2257 4.08684 18.2257C3.56895 18.5829 2.86328 18.2122 2.86328 17.5833V1.41844C2.86328 0.789571 3.5689 0.418834 4.08678 0.775971C4.08684 0.776009 4.08689 0.776047 4.08695 0.776085L15.7911 8.8584Z"
                        stroke="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_351_722">
                        <rect width="19" height="19" fill="white" transform="translate(-0.00390625 0.000976562)" />
                        </clipPath>
                    </defs>
                    </svg>

                    play video
                </a>
                </div>
            </section>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- about section -->

    <!-- marquee section start -->
    <div class="marquee-section">
    <div class="section-inner">
        <div class="top-inner section-bg2">
        <ul class="marquee">
            <li><span>RMG Compliance</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>RMG Factory Design & Development</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Fire Safety Consultancy & Sustainable Management System</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Full solution of HRM</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>KPI based Performance Management.</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Security System & Administration</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Small Business Management</span></li>
            <li>
                <span><sub>*</sub></span>
            </li>
            <li><span>RMG Compliance</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>RMG Factory Design & Development</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Fire Safety Consultancy & Sustainable Management System</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Full solution of HRM</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>KPI based Performance Management.</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Security System & Administration</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Small Business Management</span></li>


        </ul>
        </div>
        <div class="bottom-inner section-bg2">
        <ul class="marquee">
            <li><span>RMG Compliance</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>RMG Factory Design & Development</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Fire Safety Consultancy & Sustainable Management System</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Full solution of HRM</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>KPI based Performance Management.</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Security System & Administration</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Small Business Management</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>RMG Compliance</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>RMG Factory Design & Development</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Fire Safety Consultancy & Sustainable Management System</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Full solution of HRM</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>KPI based Performance Management</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Security System & Administration</span></li>
            <li>
            <span><sub>*</sub></span>
            </li>
            <li><span>Small Business Management</span></li>
        </ul>
        </div>
    </div>
    </div>
    <!-- marquee section end -->

    <!-- business partner start -->
       <section class="business-partner">
    <div class="animated-circle right"></div>
    <div class="container position-relative z-1">
        <div class="row">
        <div class="col-12 section-title">
            <h2 class="subtitle">Business Partners</h2>
            <h1 class="title split-collab">
            All You Need to Keep Your <br> Business Booming
            </h1>
        </div>

      
@if($products->isNotEmpty())
    @foreach($products as $product)
    <div class="col-12 col-lg-4">
        <div class="grid-card custom-grid">
            <div class="animatedLine">
                <div class="animatedLine-1"></div>
                <div class="animatedLine-2"></div>
            </div>
            <div class="img">
                <a href="{{ route('product.details', $product->id) }}">
                    <img src="{{ asset('storage/app/public/' . $product->image) }}" alt="{{ $product->title }}">
                </a>
            </div>
           <h3 class="title">{{ $product->title }}</h3>
            <p>
                {!! Str::limit($product->description, 100) !!}
                @if(strlen($product->description) > 100)
                    <a href="{{ route('product.details', $product->id) }}">Read More   
                        <span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="red" fill-opacity="0.22" />
                                <path d="M7.9996 12.9094L13.4906 9.19527M8.94727 8L13.8566 8.94766L12.909 13.857" stroke="white"
                                    stroke-linecap="square" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                @endif
            </p>
        </div>
    </div>
    @endforeach
@else
    <p>No products available at the moment.</p>
@endif

        <div class="col-12 col-lg-4">

        </div>
        <div class="col-12 col-lg-4">
            
        </div>
        <div class="col-12 col-lg-4">

        </div>

        <div class="col-12 col-lg-5">
            <div class="img">
              <img class="business-img" src="assets/images/home-1/Profile PIC.jpg" alt="">
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="website-builder">
             <div class="content">
                <p>SMART Consultancy & Training</p>
                <h1>Ready to Work Together?</h1>
            </div>
            <!-- <div class="action">
                <a href="#" class="button outline-link-btn">Join Us
                <span>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z"
                        fill="white" />
                    </svg>
                </span>
                </a>
            </div> -->
            <div class="ripling-animation">

            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="animated-circle left"></div>
    </section>
    <!-- business partner ends -->

    <!-- upcoming events start -->
  @if($latestEvent)
   @php
        $backgroundImage = $latestEvent && $latestEvent->image ? asset('storage/app/public/event_images/' . $latestEvent->image) : asset('images/home-1/up-coming-events-bg.png');
    @endphp

    <section class="upcoming-events" style="background-image: url('{{ $backgroundImage }}');">
        <div class="overlay"></div>
        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="content">
                        <h2 class="subtitle">Upcoming Event</h2>
                        <h1 class="title skew-up">{{ $latestEvent->title }}</h1>
                        <ul>
                            <li>
                                <span><svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_381_20)">
                                        <path d="M5.42857 0.857143C5.42857 0.382143 5.04643 0 4.57143 0C4.09643 0 3.71429 0.382143 3.71429 0.857143V2.28571H2.28571C1.025 2.28571 0 3.31071 0 4.57143V5.14286V6.85714V16C0 17.2607 1.025 18.2857 2.28571 18.2857H13.7143C14.975 18.2857 16 17.2607 16 16V6.85714V5.14286V4.57143C16 3.31071 14.975 2.28571 13.7143 2.28571H12.2857V0.857143C12.2857 0.382143 11.9036 0 11.4286 0C10.9536 0 10.5714 0.382143 10.5714 0.857143V2.28571H5.42857V0.857143ZM1.71429 6.85714H14.2857V16C14.2857 16.3143 14.0286 16.5714 13.7143 16.5714H2.28571C1.97143 16.5714 1.71429 16.3143 1.71429 16V6.85714Z" fill="#D90A2C" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_381_20">
                                            <rect width="16" height="18.2857" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></span>{{ $latestEvent->date->format('d M, Y') }}
                            </li>
                            <li>
                                <span><svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.9875 20.8C11.125 18.125 16 11.6417 16 8C16 3.58333 12.4167 0 8 0C3.58333 0 0 3.58333 0 8C0 11.6417 4.875 18.125 7.0125 20.8C7.525 21.4375 8.475 21.4375 8.9875 20.8ZM8 5.33333C8.70724 5.33333 9.38552 5.61428 9.88562 6.11438C10.3857 6.61448 10.6667 7.29276 10.6667 8C10.6667 8.70724 10.3857 9.38552 9.88562 9.88562C9.38552 10.3857 8.70724 10.6667 8 10.6667C7.29276 10.6667 6.61448 10.3857 6.11438 9.88562C5.61428 9.38552 5.33333 8.70724 5.33333 8C5.33333 7.29276 5.61428 6.61448 6.11438 6.11438C6.61448 5.61428 7.29276 5.33333 8 5.33333Z" fill="#D90A2C" />
                                </svg></span>{{ $latestEvent->location }}
                            </li>
                        </ul>
                        <a class="button primary-link-btn" href="{{ route('contractus') }}">Contact Us
                            <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.42497 6.19103C5.40287 5.99216 5.57965 5.81538 5.80062 5.81538H15.0372C15.2582 5.81538 15.4129 5.97006 15.4129 6.19103V15.4276C15.4129 15.6486 15.2361 15.8254 15.0372 15.8033L14.1754 15.8254C13.9544 15.8254 13.7777 15.6486 13.7998 15.4497L13.7777 8.57752L6.24256 16.1126C6.08788 16.2673 5.86691 16.2673 5.71223 16.1126L5.09351 15.4939C4.96093 15.3613 4.93883 15.1183 5.09351 14.9636L12.6286 7.42847H5.77852C5.57965 7.45056 5.40287 7.27379 5.40287 7.05282L5.42497 6.19103Z" fill="white" />
                            </svg></span></a>
                    </div>
                </div>


                
                <div class="col-12 col-lg-6">
                    @if($latestEvent->video)
                        <a href="{{ $latestEvent->video }}" class="popup-video">
                           
                            <svg viewBox='0 0 200 200' width='200' height='200' xmlns='http://www.w3.org/2000/svg' class="link__svg" aria-labelledby="link1-title link1-desc">
                                <path id="link-circle" class="link__path" d="M 20, 100 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0" stroke="none" fill="none" />
                                <text class="link__text">
                                    <textPath href="#" stroke="none">
                                        Cool Branding and Development
                                    </textPath>
                                </text>
                            </svg>
                            <span class="play-btn">PLAY</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- upcoming events ends -->



    <!-- question-ans -->
   <section class="question-ans">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="subtitle">Questions &amp; Answers</h2>
                    <h1 class="title skew-up-2">
                        Have Any Question On Mind! <br>
                        Asked Questions ?
                    </h1>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="accordion" id="accordionExample">
                    @foreach($faqs as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/home-1/faq.png" alt="">
            </div>
        </div>
    </div>
</section>
    <!-- question-ans -->

    <!-- simple package -->
    <section class="simple-package">
    <div class="animated-circle right"></div>
    <div class="animated-circle left"></div>
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section-title">
            <h1 class="subtitle">Product And Services List</h2>
            <h1 class="title skew-up-2">
               Consultancy Product and Services as well as <br>
                Training Offers
            </h1>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="grid-package-item card-box zoom-effect">
            <div class="img">
                <a href="#">
                <img src="assets/images/home-1/package-1.png" alt="">
                </a>
            </div>
            <div class="content">
                <ul>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Maintenance of fences
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Gate maintenance
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Video surveillance system
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Configuring access systems
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    24/7 Support
                </li>
                </ul>
                <div class="price-link">
                <p>$150 /Day</p>
                <a href="#">Join Us</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="grid-package-item card-box zoom-effect">
            <div class="img">
                <a href="#">
                <img src="assets/images/home-1/package-2.png" alt="">
                </a>
            </div>
            <div class="content">
                <ul>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Maintenance of fences
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Gate maintenance
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Video surveillance system
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Configuring access systems
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    24/7 Support
                </li>
                </ul>
                <div class="price-link">
                <p>$150 /Day</p>
                <a href="#">Join Us</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="grid-package-item card-box zoom-effect">
            <div class="img">
                <a href="#">
                <img src="assets/images/home-1/package-3.png" alt="">
                </a>
            </div>
            <div class="content">
                <ul>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Maintenance of fences
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Gate maintenance
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Video surveillance system
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    Configuring access systems
                </li>
                <li>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03455 6.00009L4.44205 8.78388L11.4766 0.432733C12.0033 -0.131524 12.8309 0.470316 12.4171 1.10983L5.49542 11.6803C4.96875 12.3574 4.25406 12.4327 3.65213 11.7556L0.153703 7.58001C-0.523397 6.6019 1.20696 5.21023 2.03455 6.00008V6.00009Z"
                        fill="#D90A2C" />
                    </svg>
                    24/7 Support
                </li>
                </ul>
                <div class="price-link">
                <p>$150 /Day</p>
                <a href="#">Join Us</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- simple package -->

    <!-- subscribe -->
    <!-- <section class="subscribe">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-12 text-center">
            <div class="content">
            <h1 class="title split-collab">Subscribe To Stay Connected</h1>
            <form action="#" class="row g-3">
                <div class="col-auto">
                <input type="email" class="form-control" placeholder="Enter Your Email...">
                </div>
                <div class="col-auto">
                <button type="submit" class="button primary-link-btn">
                    Subscribe
                </button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section> -->
    <!-- subscribe -->

    <!-- latest-news -->
    <section class="latest-news">
    <div class="animated-circle right"></div>
    <div class="animated-circle left"></div>
    <div class="container position-relative z-1">
        <div class="row">
            @foreach($news as $item) <!-- Loop through the news items -->
            <div class="col-12 col-lg-4">
                <div class="latest-news-grid-item card-box zoom-effect">
                    <div class="img">
                        <a href="{{ route('news_details', ['id' => $item->id]) }}">
                            <img src="{{ asset($item->image) }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <p class="date">{{ $item->created_at->format('F j, Y') }}</p>
                        <a href="{{ route('news_details', ['id' => $item->id]) }}">
                            <h1>{{ $item->title }}</h1>
                        </a>
                        <a href="{{ route('news_details', ['id' => $item->id]) }}">read more
                            <span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="11" fill="white" fill-opacity="0.22" />
                                    <path d="M7.9996 12.9094L13.4906 9.19527M8.94727 8L13.8566 8.94766L12.909 13.857" stroke="white"
                                        stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    <!-- latest-news -->
@endsection

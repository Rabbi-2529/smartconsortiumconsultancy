
    <!-- navbar and banner ends -->
     <!--vission-->
     @extends('frontend.master')
@php

$currentPage = 'About Us';
@endphp
@section('custom_css')
<link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}">
   
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
    
    li, p, i{
        color: white;
    }
    </style>
@endsection

@section('banner-content')

    <div class="banner-section">
                <h1 class="heading skew-up">About Company</h1>
                <p class="description">
                  SMART Consultancy and Development Consortium
                  -A complete solution for H.R, Administration, Compliance & RMG factory management with Training, Consultancy and Job Placement 
                  as well as 
                  Small Business Management

                </p>
              </div>

@endsection

@section('main-content')
     <section class="why-choose-us">
      <!-- left circle -->
      <div class="animated-circle left"></div>
      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-lg-5">
          <div class="section-title">
    <h1 class="title split-collab">
        Our Vision and <br>
        Mission
    </h1>
    @if($aboutus)
        <p>
            {!! $aboutus->our_vision !!}
        </p>
    @else
        <p>No vision available.</p>
    @endif
</div>
            <div class="choose-grid">
              <div class="choose-grid-item">
                
              </div>
              <div class="choose-grid-item">
                
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="image-wrap">
              <div class="image">
                <div class="animatedLine">
                  <div class="animatedLine-1"></div>
                  <div class="animatedLine-2"></div>
                </div>
                <img src="assets/images/home-2/choose-us.png" alt="">
              </div>
              <div class="image-line">
                <div class="line-1 line"></div>
                <div class="line-2 line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--promise-->

    <section class="why-choose-us">
      <!-- left circle -->
      <div class="animated-circle left"></div>
      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-lg-5">
          <div class="section-title">
    <h1 class="title split-collab">
        Our Promise
    </h1>
    @if($aboutus)
      <p style="color:white !important;">
    {!! $aboutus->our_promise !!}
</p>
    @else
        <p>No promise available.</p>
    @endif
</div>
            <div class="choose-grid">
              <div class="choose-grid-item">
                
              </div>
              <div class="choose-grid-item">
                
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="image-wrap">
              <div class="image">
                <div class="animatedLine">
                  <div class="animatedLine-1"></div>
                  <div class="animatedLine-2"></div>
                </div>
                <img src="assets/images/home-2/banner.png" alt="">
              </div>
              <div class="image-line">
                <div class="line-1 line"></div>
                <div class="line-2 line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- why-choose-us -->
    <section class="why-choose-us">
      <!-- left circle -->
      <div class="animated-circle left"></div>
      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-lg-5">


          <div class="section-title">
          <h1 class="title split-collab">
                Why do you  <br>
                need us?
              </h1>
    @if($aboutus)
     <p style="color:white !important;">
    {!! $aboutus->our_promise !!}
</p>
    @else
        <p>No promise available.</p>
    @endif
</div>
        
            <div class="choose-grid">
              <div class="choose-grid-item">
                
              </div>
              <div class="choose-grid-item">
                
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="image-wrap">
              <div class="image">
                <div class="animatedLine">
                  <div class="animatedLine-1"></div>
                  <div class="animatedLine-2"></div>
                </div>
                <img src="assets/images/home-2/choose-us.png" alt="">
              </div>
              <div class="image-line">
                <div class="line-1 line"></div>
                <div class="line-2 line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- why-choose-us -->

    <!--why are we different-->

    <section class="why-choose-us">
      <!-- left circle -->
      <div class="animated-circle left"></div>
      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-title">
              <h1 class="title split-collab">
                Why are we different   <br>
                than others?
              </h1>
              @if($aboutus)
        <p>
            {!! $aboutus->why_different !!}
        </p>
    @else
        <p>No promise available.</p>
    @endif
            </div>
            <div class="choose-grid">
              <div class="choose-grid-item">
                
              </div>
              <div class="choose-grid-item">
                
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="image-wrap">
              <div class="image">
                <div class="animatedLine">
                  <div class="animatedLine-1"></div>
                  <div class="animatedLine-2"></div>
                </div>
                <img src="assets/images/home-2/banner.png" alt="">
              </div>
              <div class="image-line">
                <div class="line-1 line"></div>
                <div class="line-2 line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- upcoming events start -->
<section class="upcoming-events">
    <div class="overlay"></div>
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="subtitle">Upcoming Event</h2>
                    <h1 class="title skew-up">{{ $latestEvent->title }}</h1>
                    <ul>
                        <li>
                            <span>
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.42857 0.857143C5.42857 0.382143 5.04643 0 4.57143 0C4.09643 0 3.71429 0.382143 3.71429 0.857143V2.28571H2.28571C1.025 2.28571 0 3.31071 0 4.57143V5.14286V6.85714V16C0 17.2607 1.025 18.2857 2.28571 18.2857H13.7143C14.975 18.2857 16 17.2607 16 16V6.85714V5.14286V4.57143C16 3.31071 14.975 2.28571 13.7143 2.28571H12.2857V0.857143C12.2857 0.382143 11.9036 0 11.4286 0C10.9536 0 10.5714 0.382143 10.5714 0.857143V2.28571H5.42857V0.857143ZM1.71429 6.85714H14.2857V16C14.2857 16.3143 14.0286 16.5714 13.7143 16.5714H2.28571C1.97143 16.5714 1.71429 16.3143 1.71429 16V6.85714Z" fill="#D90A2C" />
                                </svg>
                            </span>{{ \Carbon\Carbon::parse($latestEvent->date)->format('d F, Y') }}
                        </li>
                    </ul>
                   
                </div>
            </div>
            <div class="col-lg-6">
                <a href="{{ $latestEvent->video }}" class="popup-video">
                    <span class="play-btn">PLAY</span>
                </a>
            </div>
        </div>
    </div>
</section>
    <!-- upcoming events ends -->

    <!-- industry expert -->
<section class="industry-expert">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="subtitle">Industry Experts</h2>
          <h1 class="title skew-up">
            Our Expert Teams <br>
            Innovation in Action
          </h1>
        </div>
      </div>

      <!-- Loop through the team members dynamically -->
      @foreach($teamMembers as $member)
        <div class="col-12 col-lg-6">
          <div class="row grid-item card-box zoom-effect">
            <div class="col-12 col-lg-4">
              <div class="img h-100">
                <a href="team-details.html">
                  <!-- Dynamically load the team member's image -->
                  <img src="{{ asset('storage/app/public/' . $member->image) }}" alt="{{ $member->name }}">
                </a>
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <a href="team-details.html">
                <!-- Dynamically display the team member's name -->
                <h1>{{ $member->name }}</h1>
              </a>
              <!-- Dynamically display the team member's designation -->
              <p class="specialist">{{ $member->designation }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
    <!-- industry expert -->

    <!-- trusted-client-area -->
    <section class="trusted-client-area">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="img right-curve">
            <img src="assets/images/home-3/trusted-client-area-1.png" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h1 class="split-collab">Exceptional Expertise for <br> Breakthrough Results</h1>
            <p>
              Logistics is generally the detailed the organiz ation and implem
              entation of a complex operation. In a general info of the main
              business.Logistics is generally the detailed
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="counting-part">
            <div class="counting-part-item">
              <div class="orb_graphic">
                <svg>
                  <circle class="fill" cx="50" cy="50" r="40"></circle>
                  <circle class="progress" cx="50" cy="50" r="35"></circle>
                </svg>
                <div class="orb_value">
                  <i class="fa-solid fa-heart"></i><span class="counter">7230</span>
                </div>
              </div>
              <div class="title">
                <h4>Trusted Clients</h4>
                <p>There are of Lorem Ipsum</p>
              </div>
            </div>
            <div class="counting-part-item">
              <div class="orb_graphic">
                <svg>
                  <circle class="fill" cx="50" cy="50" r="40"></circle>
                  <circle class="progress" cx="50" cy="50" r="35"></circle>
                </svg>
                <div class="orb_value">
                  <i class="fa-solid fa-star"></i>
                  <span><span class="counter">98</span>%</span>
                </div>
              </div>
              <div class="title">
                <h4>Successful Cases</h4>
                <p>There are of Lorem Ipsum</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="img left-curve">
            <img src="assets/images/home-3/trusted-client-area-2.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- trusted-client-area -->

    <!-- our-clients -->
    <section class="our-clients">
      <div class="animated-circle right"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="subtitle">Our Clients</h2>
              <h1 class="title skew-up">
                Trusted From Over +3K <br>
                Happy Clients
              </h1>
            </div>

            <div class="swiper client-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide slider-item">
                  <div class="slider-item-style">
                    <div class="client-title-rating">
                      <div class="client-title">
                        <div class="img">
                          <img src="assets/images/home-2/client-1.png" alt="">
                        </div>
                        <div class="content">
                          <h2>Nathan Joe</h2>
                          <p>CEO, Datasoft</p>
                        </div>
                      </div>
                      <div class="client-rating">
                        <ul>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="client-comment">
                      <h4>
                        “Thrown specialize in custom-tailored software
                        solutions &amp; computer technology.”
                      </h4>
                      <p>
                        Et nec tantas accusamus salutatus, sit commodo veritus
                        te, erat fabulas has ut. Rebum cum laudem cum ea,
                        accusamus salutatus, sit commodo veritus te,erat
                        legere fabulas has cum laudem .
                        <img src="assets/images/home-2/cotation.png" alt="">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide slider-item">
                  <div class="slider-item-style">
                    <div class="client-title-rating">
                      <div class="client-title">
                        <div class="img">
                          <img src="assets/images/home-2/client-2.png" alt="">
                        </div>
                        <div class="content">
                          <h2>Nathan Joe</h2>
                          <p>CEO, Datasoft Systems</p>
                        </div>
                      </div>
                      <div class="client-rating">
                        <ul>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="client-comment">
                      <h4>
                        “Thrown specialize in custom-tailored software
                        solutions &amp; computer technology.”
                      </h4>
                      <p>
                        Et nec tantas accusamus salutatus, sit commodo veritus
                        te, erat fabulas has ut. Rebum cum laudem cum ea,
                        accusamus salutatus, sit commodo veritus te,erat
                        legere fabulas has cum laudem .
                        <img src="assets/images/home-2/cotation.png" alt="">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide slider-item">
                  <div class="slider-item-style">
                    <div class="client-title-rating">
                      <div class="client-title">
                        <div class="img">
                          <img src="assets/images/home-2/client-1.png" alt="">
                        </div>
                        <div class="content">
                          <h2>Nathan Joe</h2>
                          <p>CEO, Datasoft</p>
                        </div>
                      </div>
                      <div class="client-rating">
                        <ul>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="client-comment">
                      <h4>
                        “Thrown specialize in custom-tailored software
                        solutions &amp; computer technology.”
                      </h4>
                      <p>
                        Et nec tantas accusamus salutatus, sit commodo veritus
                        te, erat fabulas has ut. Rebum cum laudem cum ea,
                        accusamus salutatus, sit commodo veritus te,erat
                        legere fabulas has cum laudem .
                        <img src="assets/images/home-2/cotation.png" alt="">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide slider-item">
                  <div class="slider-item-style">
                    <div class="client-title-rating">
                      <div class="client-title">
                        <div class="img">
                          <img src="assets/images/home-2/client-2.png" alt="">
                        </div>
                        <div class="content">
                          <h2>Nathan Joe</h2>
                          <p>CEO, Datasoft Systems</p>
                        </div>
                      </div>
                      <div class="client-rating">
                        <ul>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                          <li>
                            <i class="fa-solid fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="client-comment">
                      <h4>
                        “Thrown specialize in custom-tailored software
                        solutions &amp; computer technology.”
                      </h4>
                      <p>
                        Et nec tantas accusamus salutatus, sit commodo veritus
                        te, erat fabulas has ut. Rebum cum laudem cum ea,
                        accusamus salutatus, sit commodo veritus te,erat
                        legere fabulas has cum laudem .
                        <img src="assets/images/home-2/cotation.png" alt="">
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our-clients -->

    @endsection

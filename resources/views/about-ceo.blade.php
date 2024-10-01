@extends('frontend.master')
@php

$currentPage = 'About Ceo';
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
    </style>
@endsection

@section('banner-content')

    <div class="banner-section">
             <h1 class="heading skew-up">About CEO</h1>
     
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
              {!! $aboutceo->name !!}
              </h1>
              <p>
              {!! $aboutceo->description !!}
              </p>
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
                <img src="{{ asset('storage/app/public/' . $aboutceo->image) }}" alt="">

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


 
    <!-- our-clients -->
    <!--<section class="our-clients">-->
    <!--  <div class="animated-circle right"></div>-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-12">-->
    <!--        <div class="section-title text-center">-->
    <!--          <h2 class="subtitle">Our Clients</h2>-->
    <!--          <h1 class="title skew-up">-->
    <!--            Trusted From Over +3K <br>-->
    <!--            Happy Clients-->
    <!--          </h1>-->
    <!--        </div>-->

    <!--        <div class="swiper client-slider">-->
    <!--          <div class="swiper-wrapper">-->
    <!--            <div class="swiper-slide slider-item">-->
    <!--              <div class="slider-item-style">-->
    <!--                <div class="client-title-rating">-->
    <!--                  <div class="client-title">-->
    <!--                    <div class="img">-->
    <!--                      <img src="assets/images/home-2/client-1.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="content">-->
    <!--                      <h2>Nathan Joe</h2>-->
    <!--                      <p>CEO, Datasoft</p>-->
    <!--                    </div>-->
    <!--                  </div>-->
    <!--                  <div class="client-rating">-->
    <!--                    <ul>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                    </ul>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="client-comment">-->
    <!--                  <h4>-->
    <!--                    “Thrown specialize in custom-tailored software-->
    <!--                    solutions &amp; computer technology.”-->
    <!--                  </h4>-->
    <!--                  <p>-->
    <!--                    Et nec tantas accusamus salutatus, sit commodo veritus-->
    <!--                    te, erat fabulas has ut. Rebum cum laudem cum ea,-->
    <!--                    accusamus salutatus, sit commodo veritus te,erat-->
    <!--                    legere fabulas has cum laudem .-->
    <!--                    <img src="assets/images/home-2/cotation.png" alt="">-->
    <!--                  </p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="swiper-slide slider-item">-->
    <!--              <div class="slider-item-style">-->
    <!--                <div class="client-title-rating">-->
    <!--                  <div class="client-title">-->
    <!--                    <div class="img">-->
    <!--                      <img src="assets/images/home-2/client-2.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="content">-->
    <!--                      <h2>Nathan Joe</h2>-->
    <!--                      <p>CEO, Datasoft Systems</p>-->
    <!--                    </div>-->
    <!--                  </div>-->
    <!--                  <div class="client-rating">-->
    <!--                    <ul>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                    </ul>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="client-comment">-->
    <!--                  <h4>-->
    <!--                    “Thrown specialize in custom-tailored software-->
    <!--                    solutions &amp; computer technology.”-->
    <!--                  </h4>-->
    <!--                  <p>-->
    <!--                    Et nec tantas accusamus salutatus, sit commodo veritus-->
    <!--                    te, erat fabulas has ut. Rebum cum laudem cum ea,-->
    <!--                    accusamus salutatus, sit commodo veritus te,erat-->
    <!--                    legere fabulas has cum laudem .-->
    <!--                    <img src="assets/images/home-2/cotation.png" alt="">-->
    <!--                  </p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="swiper-slide slider-item">-->
    <!--              <div class="slider-item-style">-->
    <!--                <div class="client-title-rating">-->
    <!--                  <div class="client-title">-->
    <!--                    <div class="img">-->
    <!--                      <img src="assets/images/home-2/client-1.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="content">-->
    <!--                      <h2>Nathan Joe</h2>-->
    <!--                      <p>CEO, Datasoft</p>-->
    <!--                    </div>-->
    <!--                  </div>-->
    <!--                  <div class="client-rating">-->
    <!--                    <ul>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                    </ul>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="client-comment">-->
    <!--                  <h4>-->
    <!--                    “Thrown specialize in custom-tailored software-->
    <!--                    solutions &amp; computer technology.”-->
    <!--                  </h4>-->
    <!--                  <p>-->
    <!--                    Et nec tantas accusamus salutatus, sit commodo veritus-->
    <!--                    te, erat fabulas has ut. Rebum cum laudem cum ea,-->
    <!--                    accusamus salutatus, sit commodo veritus te,erat-->
    <!--                    legere fabulas has cum laudem .-->
    <!--                    <img src="assets/images/home-2/cotation.png" alt="">-->
    <!--                  </p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="swiper-slide slider-item">-->
    <!--              <div class="slider-item-style">-->
    <!--                <div class="client-title-rating">-->
    <!--                  <div class="client-title">-->
    <!--                    <div class="img">-->
    <!--                      <img src="assets/images/home-2/client-2.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="content">-->
    <!--                      <h2>Nathan Joe</h2>-->
    <!--                      <p>CEO, Datasoft Systems</p>-->
    <!--                    </div>-->
    <!--                  </div>-->
    <!--                  <div class="client-rating">-->
    <!--                    <ul>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                        <i class="fa-solid fa-star"></i>-->
    <!--                      </li>-->
    <!--                    </ul>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="client-comment">-->
    <!--                  <h4>-->
    <!--                    “Thrown specialize in custom-tailored software-->
    <!--                    solutions &amp; computer technology.”-->
    <!--                  </h4>-->
    <!--                  <p>-->
    <!--                    Et nec tantas accusamus salutatus, sit commodo veritus-->
    <!--                    te, erat fabulas has ut. Rebum cum laudem cum ea,-->
    <!--                    accusamus salutatus, sit commodo veritus te,erat-->
    <!--                    legere fabulas has cum laudem .-->
    <!--                    <img src="assets/images/home-2/cotation.png" alt="">-->
    <!--                  </p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="swiper-pagination"></div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    @endsection

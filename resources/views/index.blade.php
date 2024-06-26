@extends('webLayout.app')
@section('page_content')

<!--Main Slider Start-->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",

    "navigation": {
        "nextEl": ".banner-slider-button-next",
        "prevEl": ".banner-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-2-2.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Handpicked') }}<br />
                                    {{ __('Spices and Herbs') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-1-1.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Discover the Exotic') }} <br />
                                    {{ __('Herbs and Spices') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-1-2.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Global Flavors Delivered') }} <br />
                                    {{ __('to Your Doorstep') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-1-3.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('From Our Fields') }} <br />
                                    {{ __('to Your Kitchen') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-2-1.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Give You Unique') }}<br />
                                    {{ __('Herbs and Spices') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-3-1.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Spice Imported') }}<br />
                                    {{ __('for Your Culinary Adventures') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-3-2.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Premium Exports') }} <br />
                                    {{ __('to Enhance Your Dishes') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="
                  background-image: url({{ asset('allAssets/web/assets/images/main-slider/slider-3-3.webp') }});
                "></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>{{ __('Export & Import Herbs and Spices') }}</p>
                                <h2>
                                    {{ __('Best Exporting for') }} <br />
                                    {{ __('Nature\'s Herbal Wonders') }}
                                </h2>
                                <!-- <a href="about.html" class="thm-btn">get to know us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="banner-slider-nav">
            <div class="banner-slider-button-prev">
                <span class="flaticon-right-arrow"></span>
            </div>
            <div class="banner-slider-button-next">
                <span class="flaticon-right-arrow"></span>
            </div>
        </div>
    </div>
</section>

<!-- CTA One Start -->
<section class="cta_one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta_one_inner">
                    <div class="cta_one_left_text">
                        <h1>{{ __('A High Quality Herbs & Spices') }}</h1>
                    </div>
                    <div class="cta_one_right_btn">
                        <a href="#" class="thm-btn">{{ __('Discover Products') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome One Start -->
<section class="welcome_one">
    <!-- <div class="welcome_one_shape_bg"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="welcome_one_left">
                    <div class="welcome_one_left_image">
                        <img src="{{ asset('allAssets/web/assets/images/resources/welcome-1-img-1.webp') }}"
                            alt="certification image" />
                        <ul class="counter_one list-unstyled">
                            <li class="counter_one_single">
                                <img src="{{ asset('allAssets/web/assets/images/resources/cer-2.webp') }}"
                                    alt="certification image" srcset="">
                            </li>
                            <li class="counter_one_single">
                                <div class="counter_one_experience">
                                    <h2>
                                        <img src="{{ asset('allAssets/web/assets/images/resources/cer-1.webp') }}"
                                            alt="certification" srcset="">

                                    </h2>
                                </div>
                            </li>
                            <li class="counter_one_single">
                                <img src="{{ asset('allAssets/web/assets/images/resources/cer-3.webp') }}"
                                    alt="certification" srcset="">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome_one_right_content">
                    <div class="block-title text-left">
                        <h4>{{ __('About Company') }}</h4>
                        <h2>{{ __('We’re More than Exporting Company') }}</h2>
                    </div>
                    <div class="welcome_one_right_text_box">
                        <p class="welcome_one_right_first_text">
                            {{ __('ind.welcomeOnHerb') }}
                        </p>
                        <p class="welcome_one_right_second_text">
                            {{ __('ind.welcomeOnHerb2') }}
                        </p>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check"></i>{{ __('ind.welcomeOnHerb3') }}
                        </li>
                        <li>
                            <i class="fa fa-check"></i>{{ __('ind.welcomeOnHerb4') }}
                        </li>
                        <li>
                            <i class="fa fa-check"></i>{{ __('ind.welcomeOnHerb5') }}
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Services One Start -->
<section class="our_services_one">
    <div class="container">
        <div class="block-title text-center">
            <!-- <h4>What we’re offering</h4> -->
            <h2>{{ __('Our excellence is our specialty') }}</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp">
                    <div class="our_services_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/service/service-1-img-1.webp') }}"
                            alt="service one" />
                        <div class="our_services_icon">
                            <span><img src="{{ asset('allAssets/web/assets/images/service/qu.webp') }}"
                                    alt="service two" srcset=""></span>
                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3>
                            <a href="">{{ __('Quality Assurance') }} </a>
                        </h3>
                        <p>
                            {{ __('ind.welcomeOnHerb6') }}
                        </p>
                        <a href="" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp" data-wow-delay="100ms">
                    <div class="our_services_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/service/service-1-img-2.webp') }}"
                            alt="service there" />
                        <div class="our_services_icon">

                            <span><img src="{{ asset('allAssets/web/assets/images/service/cs.webp') }}"
                                    alt="service four" srcset=""></span>
                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3>
                            <a href="">{{ __('Customer Support') }}
                            </a>
                        </h3>
                        <p>
                            {{ __('ind.welcomeOnHerb7') }}

                        </p>
                        <a href="" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp" data-wow-delay="200ms">
                    <div class="our_services_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/service/service-1-img-3.webp') }}"
                            alt="service five" />
                        <div class="our_services_icon">
                            <span><img src="{{ asset('allAssets/web/assets/images/service/mr.webp') }}"
                                    alt="service six" srcset=""></span>

                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3>
                            <a href="">{{ __('Market Insights and Trends') }}</a>
                        </h3>
                        <p>
                            {{ __('ind.welcomeOnHerb8') }}

                        </p>
                        <a href="" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inspiring_solutuions_one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 0%">
    <img src="{{ asset('allAssets/web/assets/images/resources/inspiring_solutuions_one_bg.webp') }}" alt="inspiring"
        class="image-layer jarallax-img" />
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="inspiring_solutuions_one_left">
                    <div class="block-title text-left">
                        <h4>{{ __('Products Quality') }}</h4>
                        <h2>
                            {{ __('Expert Workers are Giving Best Services') }}


                        </h2>
                    </div>
                    <!-- <div class="inspiring_solutuions_one_btn">
                <a href="contact.html" class="thm-btn">Get a free quote</a>
              </div> -->
                    <div class="inspiring_solutuions_one_left_bottom">
                        <div class="inspiring_solutuions_one_left_bottom_image">
                            <img src="{{ asset('allAssets/web/assets/images/resources/inspiring_solutuions_1-img-1.webp') }}"
                                alt="solutuions" />
                        </div>
                        <div class="inspiring_solutuions_one_left_bottom_text">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon_box">
                                        <span class="flaticon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('Herbs and spices are free from fillers') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon_box">
                                        <span class="flaticon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('Our Products are certified organic') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon_box">
                                        <span class="flaticon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('Always Fresh Products') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon_box">
                                        <span class="flaticon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('Truly Organic herbs and spices') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon_box">
                                        <span class="flaticon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ __('protect products from light, air, and moisture') }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="inspiring_solutuions_one_right">
                    <div class="inspiring_solutuions_one_video_box">
                        <a href="{{ asset('allAssets/web/assets/images/resources/herbs-test.mp4') }}"
                            class="video-one__btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="inspiring_solutuions_one_right_skills">
                        <div class="text">
                            <p>
                                {{ __('ind.welcomeOnHerb9') }}
                            </p>
                        </div>
                        <ul class="check list-unstyled">
                            <li>
                                <i class="fa fa-check"></i>{{ __('We always work with a great team') }}
                            </li>
                        </ul>

                        <div class="progress-levels">
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="text">{{ __('Industry') }}</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="100">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="text">{{ __('Construction') }}</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="4000" data-stop="100">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="text">{{ __('Factory') }}</div>
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3500" data-stop="100">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                            <div class="bar-fill" data-percent="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
            data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 1000, "items": 5, "dots": false, "nav": false, "margin": 140, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 140}}}'>
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/1200px-USDA_organic_seal.svg.webp') }}"
                    alt="organic" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/1547184389857.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/depositphotos_51834883-stock-illustration-kosher-stamp.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/Fairtrade-logo.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/RA_Seal_Core_Green_and_White_RGB-e1602838216833.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/ISO-Logo-22000-2005.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/Screen-Shot-2020-10-22-at-1.08.49-AM.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/images.webp') }}" alt="certificate" />
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ asset('allAssets/web/assets/images/certificate/0001_brc-logo-green-1_1649070677.webp') }}"
                    alt="certificate" />
            </div>
            <!-- /.item -->

        </div>
    </div>
</section>

<!--Projects One Start-->
<section class="our_projects_one mb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="block-title text-left">
                    <h4>{{ __('Products') }}</h4>
                    <h2>{{ __('Explore Our Products') }}</h2>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active">
                        <span class="filter-text">{{ __('All') }}</span>
                    </li>
                    <li data-filter=".inds">
                        <span class="filter-text">{{ __('type') }}</span>
                    </li>
                    <li data-filter=".fac">
                        <span class="filter-text">{{ __('type') }}</span>
                    </li>
                    <li data-filter=".elec">
                        <span class="filter-text">{{ __('type') }}</span>
                    </li>
                    <li data-filter=".cons">
                        <span class="filter-text last-pd-none">{{ __('type') }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            @foreach ( $data as $product )
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ $product->main_image }}"
                            alt="Powder" />
                        <div class="our_projects_one_icon">
                            <a href="{{ route('product-details', ['Product' => $product]) }}"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>
                                {{ $product->translate(LaravelLocalization::getCurrentLocale())->name }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec cons">
                <!--Projects One Single-->
               
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec fac">
                <!--Projects One Single-->
                
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons">
                <!--Projects One Single-->
               
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item fac cons">
                <!--Projects One Single-->
             
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
               
            </div>
        </div>
        <div class="cta_one_right_btn products-btn">
            <a href="#" class="thm-btn">{{ __('Discover Products') }}</a>
        </div>
    </div>

</section>

<!--Testimonails One Start-->
<!-- <section class="testimonails_one" style="
          background-image: url(assets/images/testimonials/testimonails_1-bg.webp') }});
        ">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-12">
            <div class="block-title text-left">
              <h4>Clients feedbacks</h4>
              <h2>What They’re Talking About Company Work</h2>
            </div>
            <div class="swiper-pagination" id="testimonials-one-pagination"></div>

          </div>
        </div>
      </div>
      <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                "el": "#testimonials-one-pagination",
                "type": "bullets",
                "clickable": true
              },"breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "1289": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "1440": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                }
            }}'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">

            <div class="testimonails_one_single">
              <div class="testimonails_one_quote_icon">
                <i class="fa fa-quote-left"></i>
              </div>
              <div class="testimonails_one_text">
                <p>
                  I was very impresed by the company service lore ipsum is
                  simply free text used by copy typing refreshing. Neque porro
                  est qui
                </p>
              </div>
              <div class="testimonails_one_client_name">
                <h3>Mike Hardson</h3>
                <p>CO Founder</p>
              </div>
              <div class="testimonails_one_image">
                <img src="{{ asset('allAssets/web/assets/images/testimonials/testimonails_1-img-1.webp') }}" alt="" />
              </div>
            </div>
          </div>

          <div class="swiper-slide">

            <div class="testimonails_one_single">
              <div class="testimonails_one_quote_icon">
                <i class="fa fa-quote-left"></i>
              </div>
              <div class="testimonails_one_text">
                <p>
                  I was very impresed by the company service lore ipsum is
                  simply free text used by copy typing refreshing. Neque porro
                  est qui
                </p>
              </div>
              <div class="testimonails_one_client_name">
                <h3>Jessica Brown</h3>
                <p>CO Founder</p>
              </div>
              <div class="testimonails_one_image">
                <img src="{{ asset('allAssets/web/assets/images/testimonials/testimonails_1-img-2.webp') }}" alt="" />
              </div>
            </div>
          </div>

          <div class="swiper-slide">

            <div class="testimonails_one_single">
              <div class="testimonails_one_quote_icon">
                <i class="fa fa-quote-left"></i>
              </div>
              <div class="testimonails_one_text">
                <p>
                  I was very impresed by the company service lore ipsum is
                  simply free text used by copy typing refreshing. Neque porro
                  est qui
                </p>
              </div>
              <div class="testimonails_one_client_name">
                <h3>Mike Hardson</h3>
                <p>CO Founder</p>
              </div>
              <div class="testimonails_one_image">
                <img src="{{ asset('allAssets/web/assets/images/testimonials/testimonails_1-img-1.webp') }}" alt="" />
              </div>
            </div>
          </div>

          <div class="swiper-slide">

            <div class="testimonails_one_single">
              <div class="testimonails_one_quote_icon">
                <i class="fa fa-quote-left"></i>
              </div>
              <div class="testimonails_one_text">
                <p>
                  I was very impresed by the company service lore ipsum is
                  simply free text used by copy typing refreshing. Neque porro
                  est qui
                </p>
              </div>
              <div class="testimonails_one_client_name">
                <h3>Jessica Brown</h3>
                <p>CO Founder</p>
              </div>
              <div class="testimonails_one_image">
                <img src="{{ asset('allAssets/web/assets/images/testimonials/testimonails_1-img-2.webp') }}" alt="" />
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->

<!--Two_sections One Start-->
<section class="two_sections_one">
    <div class="two_sections_one_map" style="
            background-image: url({{ asset('allAssets/web/assets/images/resources/two_sections-1-map.webp') }});
          "></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="two_sections_one_left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon_box">
                                <img src="{{ asset('allAssets/web/assets/images/resources/expert.webp') }}" alt="expert"
                                    srcset="">
                            </div>
                            <div class="content_box">
                                <h3>{{ __('We’re Professional') }}</h3>
                                <p>
                                    {{ __('Professionalism is our') }} <br />
                                    {{ __('law in dealing.') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon_box">
                                <img src="{{ asset('allAssets/web/assets/images/resources/fast-delivery.webp') }}"
                                    alt="delivery" srcset="">

                            </div>
                            <div class="content_box">
                                <h3>{{ __('Delivery on Time') }}</h3>
                                <p>
                                    {{ __('Punctuality and standards are') }} <br />
                                    {{ __('the basis of our work.') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon_box">
                                <img src="{{ asset('allAssets/web/assets/images/resources/quality-control.webp') }}"
                                    alt="quality" srcset="">

                            </div>
                            <div class="content_box">
                                <h3>{{ __('Quality Materials') }}</h3>
                                <p>
                                    {{ __('There is no dispute about') }} <br />
                                    {{ __('the quality of our products .') }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="two_sections_one_right">
                    <div class="block-title text-left">
                        <h4>{{ __('Global expertise') }}</h4>
                        <h2>{{ __('Deal with us Deal with the best') }}</h2>
                    </div>
                    <div class="two_sections_one_text_box">
                        <p>
                            {{ __('ind.welcomeOnHerb10') }}

                        </p>
                    </div>
                    <div class="two_sections_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/resources/callcenter.webp') }}"
                            alt="callcenter" />
                        <div class="two_sections_one_phone_number">
                            <div class="icon">
                                <img src="{{ asset('allAssets/web/assets/images/resources/whatsapp.webp') }}"
                                    alt="whatsapp" srcset="">
                            </div>
                            <div class="phone_number">
                                <a href="tel:92-666-888-0000">(+20)10 00 00 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Blog One Start-->
<!-- <section class="blog_one">
      <div class="container">
        <div class="block-title text-center">
          <h4>From The Blog</h4>
          <h2>News & Articles</h2>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-4">

            <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
              <div class="blog_one_image">
                <img src="{{ asset('allAssets/web/assets/images/blog/blog-1-img-1.webp') }}" alt="" />
                <div class="blog_one_date_box">
                  <p>
                    20 <br />
                    Oct
                  </p>
                </div>
              </div>
              <div class="blog-one__content">
                <ul class="list-unstyled blog-one__meta">
                  <li>
                    <a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                  </li>
                  <li>
                    <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                  </li>
                </ul>
                <div class="blog_one_title">
                  <h3>
                    <a href="blog-details.html">We are best for any industrial business solutions</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">

            <div class="blog_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="100ms">
              <div class="blog_one_image">
                <img src="{{ asset('allAssets/web/assets/images/blog/blog-1-img-2.webp') }}" alt="" />
                <div class="blog_one_date_box">
                  <p>
                    20 <br />
                    Oct
                  </p>
                </div>
              </div>
              <div class="blog-one__content">
                <ul class="list-unstyled blog-one__meta">
                  <li>
                    <a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                  </li>
                  <li>
                    <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                  </li>
                </ul>
                <div class="blog_one_title">
                  <h3>
                    <a href="blog-details.html">Organically grow the holistic world view of
                      disruptive</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">

            <div class="blog_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
              <div class="blog_one_image">
                <img src="{{ asset('allAssets/web/assets/images/blog/blog-1-img-3.webp') }}" alt="" />
                <div class="blog_one_date_box">
                  <p>
                    20 <br />
                    Oct
                  </p>
                </div>
              </div>
              <div class="blog-one__content">
                <ul class="list-unstyled blog-one__meta">
                  <li>
                    <a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                  </li>
                  <li>
                    <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                  </li>
                </ul>
                <div class="blog_one_title">
                  <h3>
                    <a href="blog-details.html">Bring to the table win-win survival strategies to</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!--Call One Start-->
<!-- <section class="call_one">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="call_one_inner">
              <div class="call_one_image">
                <img src="{{ asset('allAssets/web/assets/images/resources/call_1-img-1.webp') }}" alt="" />
              </div>
              <div class="call_one_content">
                <div class="text">
                  <p>
                    Gravida sodales condimentum pellentesq <br />
                    accumsan orci quam sagittis sapien. san <br />
                    orci quam sagittis sapien.
                  </p>
                </div>
                <div class="call_one_number">
                  <h4>Get a Free Estimate</h4>
                  <a href="tel:92-666-888-0000">92 666 888 0000</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!--Google Map-->
<!-- <section class="google_map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map__contact" allowfullscreen></iframe>
    </section> -->


@endsection
<!DOCTYPE html>
<html lang="en">

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8" />
    <meta name="description"
        content="Exporting high-quality herbs and spices from Egypt. شركة مصرية متخصصه في تصدير الاعشاب والتوابل">
    <meta name="keywords" content="توابل, اعشاب, تصدير,مصرية,herbs,spices,exporting,egyption,herbnest,هيربنيست">
    <link rel="canonical" href="https://www.herbnest-eg.com/ar">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="Egyptian Herbs and Spices Exporter">
    <meta property="og:description"
        content="We are an Egyptian company that specializes in exporting high-quality herbs and spices. Our products are grown and processed with care and expertise, ensuring that you receive only the best. Browse our selection of chamomile, calendula, hibiscus, peppermint, fennel, basil, anise, marjoram, parsley, caraway, dill, and more. Contact us today to learn more about our products and services.">
    <meta property="og:image" content="https://ibb.co/rxvRnTR">
    <meta property="og:url" content="https://www.herbnest-eg.com/en">
    <meta property="og:type" content="website">
    <title>HerbNest (EG)</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('allAssets/web/assets/images/favicons/fav.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('allAssets/web/assets/images/favicons/fav.webp') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('allAssets/web/assets/images/favicons/fav.webp') }}" />
    <link rel="manifest" href="{{ asset('allAssets/web/assets/images/favicons/fav.webp') }}" />

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" /> 

    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/ziston-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/flaticon.css') }}" />
    <!-- Template styles -->
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('allAssets/web/assets/css/responsive.css') }}" />
    
    @if (app()->getLocale()=='ar')
    @php
    $font =asset('allAssets/web/assets/fonts/18410-ah-naskh-hadith(1).ttf') ;
    @endphp
    <style>
        @font-face {
            font-family: myFirstFont;
            src: url($font);
        }

        .swiper-slide .swiper-slide-inner h2 {
            font-family: myFirstFont;
            color: #ffffff;

        }
    </style>
    @else
    @php
    $font =asset('allAssets/web/assets/fonts/Sauce Tomato.otf') ;
    @endphp
    <style>
        @font-face {
            font-family: myFirstFont2;
            src: url($font);
        }
        
        .swiper-slide .swiper-slide-inner h2 {
            font-family: myFirstFont2;
            color: #ffffff;
        }
        
        </style>

@endif
@stack('custom_css')

</head>

<body>
    <div class="preloader">
        <img src="{{ asset('allAssets/web/assets/images/resources/logo/w-loader.webp') }}" class="preloader__image"
        alt="main logo in white" />
    </div>
    <!-- /.preloader -->
    
    <div class="page-wrapper">
        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_two d-none d-lg-block">
                <div class="container">
                    <div class="header_top_two_inner_right d-flex justify-content-center">

                        <div class="header_top_two_inner_right float-right">
                            <div class="header_contact_two">
                                <ul class="list-unstyled">

                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('Send Email') }}</p>
                                            <h5>
                                                <a href="mailto:help@herbnest-eg.com">help@herbnest-eg.com</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('Call Anytime') }}</p>
                                            <h5>
                                                <a href="tel:+0201001001000">(+20)10 00 00 0000</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('Visit Us') }}</p>
                                            <h5>{{ __('18st Gamal-AbdElnasr Fayoum, Egypt') }}</h5>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="mobile-nav__language">
                                            <img src="{{ asset('allAssets/web/assets/images/resources/'.app()->getLocale().'.webp') }}"
                                                alt=" lang image flag" />
                                            <select class="lang-slct" id="language-select" onchange="changeLanguage()">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                                $properties)
                                                <option
                                                    value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                    {{ app()->getLocale() == $localeCode ? 'selected' : '' }}>
                                                    {{ $properties['native'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="">
              <h5 class="">Language</h5>
              <select class="">
                <option selected="selected">English</option>
                <option>Arabic</option>
              </select>
            </div>-->
                    </div>
                </div>
            </div>

            @include('sweetalert::alert')
            <header class="main-nav__header-one">
                <div class="container">
                    <nav class="header-navigation one stricky py-2">
                        <div class="container-box clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left_one float-left">
                                <div class="logo_one">
                                    <a href="{{ route('main') }}" class="main-nav__logo">
                                        <img src="{{ asset('allAssets/web/assets/images/resources/logo/m-w-logo.png') }}"
                                            class=" main-logo" alt="Awesome Image" />
                                    </a>
                                </div>
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>

                            <div class="main-nav__main-navigation one float-right">
                                <ul class="main-nav__navigation-box float-left">
                                    <li class="dropdown {{ Request::segment(2) ?? 'current' }} ">
                                        <a href="{{ route('main') }}">{{ __('Home') }}</a>

                                        <!-- /.sub-menu -->
                                    </li>

                                    <li class="dropdown">
                                        <a href="">{{ __('Services') }}</a>
                                        <!-- <ul>
                      <li><a href="services.html">Services</a></li>
                      <li>
                        <a href="services-details.html">Services Details</a>
                      </li>
                    </ul> -->
                                        <!-- /.sub-menu -->

                                    </li>
                                    <li class="dropdown {{ Request::segment(2) == 'product' ? 'current' : '' }} ">
                                        <a href="{{ route('product') }}">{{ __('Products') }}</a>

                                        <!-- /.sub-menu -->
                                    </li>
                                    <li class="dropdown">
                                        <a href="">{{ __('About Us') }}</a>

                                    </li>
                                    <li class="{{ Request::segment(2) == 'contact' ? 'current' : '' }}">
                                        <a href="{{ route('contact') }}">{{ __('Contact') }}</a>
                                    </li>
                                </ul>
                                <!-- <div class="main-nav__right main-nav__right_one float-left">
                  <div class="header_btn_1">
                    <a href="contact.html">Get a free quote</a>
                  </div>
                </div> -->
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </header>

        </div>
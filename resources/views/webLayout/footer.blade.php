<!--Site Footer Start-->
<footer class="site-footer"
    style="background-image: url({{ asset('allAssets/web/assets/images/resources/logo/clr-pat.webp') }})">
    <div class=" container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="footer-widget__column footer-widget__about wow fadeInUp animated" data-wow-delay="100ms">
                    <div class="footer-widget__about_logo">
                        <a href="{{ route('main') }}"><img
                                src="{{ asset('allAssets/web/assets/images/resources/logo/m-w-logo.png') }}"
                                alt="logo in white" /></a>
                    </div>
                    <div class="footer-widget_about_text__box">
                        <p>
                            {{ __('ind.welcomeOnHerb11') }}

                        </p>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <div class="footer-widget_about_icon">
                                <span class="flaticon-email"></span>
                            </div>
                            <div class="footer-widget_about_text">
                                <a href="mailto:help@herbnest-eg.com">help@herbnest-eg.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="footer-widget_about_icon">
                                <span class="flaticon-telephone"></span>
                            </div>
                            <div class="footer-widget_about_text">
                                <a href="tel:92-666-888-0000">(+20)10 00 00 0000</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6">
                <div class="footer-widget__column footer-widget__explore wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="footer-widget__title">
                        <h3>Explore</h3>
                    </div>
                    <ul class="footer-widget__explore_list list-unstyled">
                        <li><a href="{{ route('main') }}">{{ __('Home') }}</a></li>
                        <li><a href="">{{ __('About Us') }}</a></li>
                        <li><a href="{{ route('product') }}l">{{ __('Products') }}</a></li>
                        <li><a href="">{{ __('Certificate') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>

                    </ul>

                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="we_are_commited_image_box">
                    <img src="{{ asset('allAssets/web/assets/images/resources/inspiring_solutuions_one_bg.webp') }}"
                        alt="inspiring solutuions">
                    <div class="we_are_commited_video_box">
                        <a href="{{ asset('allAssets/web/assets/images/resources/herbs-test.mp4 ') }}"
                            class="commited_video__btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="we_are_commited_tabs">
                    <div class="three-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                            <li data-tab="#our-mission" class="tab-btn mission active-btn"><span>{{ __('Our Mission')
                                    }}</span></li>
                            <li data-tab="#our-vision" class="tab-btn mission"><span>{{ __('Our Promise') }}</span></li>
                        </ul>

                        <div class="tabs-content">
                            <div class="tab active-tab" id="our-mission" style="display: block;">
                                <div class="we_are_commited_tab_text">
                                    <p>{{ __('ind.welcomeOnHerb12') }}</p>
                                </div>
                            </div>

                            <div class="tab" id="our-vision" style="display: none;">
                                <div class="we_are_commited_tab_text">
                                    <p>{{ __('ind.welcomeOnHerb13') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!--Site Footer Bottom Start-->
<div class="site-footer_bottom">
    <div class="container">
        <div class="site-footer_bottom_copyright">
            <p>© Copyright 2023 by <a href="{{ route('main') }}">HerbNest-eg.com</a> Designed By <a
                    href="https://github.com/ahmdsydysf">Ahmd Syd</a> </p>
        </div>
        <div class="site-footer__social">
            <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</div>
<!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ route('main') }}" aria-label="logo image"><img
                    src="{{ asset('allAssets/web/assets/images/resources/logo/m-w-logo.png') }}" width="101"
                    alt="logo in white" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container clearfix"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="flaticon-email"></i>
                <a href="mailto:help@herbnest-eg.com">help@herbnest-eg.com</a>
            </li>
            <li>
                <i class="flaticon-telephone"></i>
                <a href="tel:666-888-0000">(+20)10 00 00 0000</a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="{{ asset('allAssets/web/assets/images/resources/'.app()->getLocale().'.webp') }}"
                    alt="flag" />
                <select class="lang-slct" id="language-select-mobile" onchange="changeLanguageOnMobile()">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                    $properties)
                    <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" {{ app()->
                        getLocale() == $localeCode ? 'selected' : '' }}>
                        {{ $properties['native'] }}
                    </option>
                    @endforeach
                </select>
                <script>
                    function changeLanguage() {
                        var selectedLang = document.getElementById('language-select').value;
                        window.location.href = selectedLang;
                    }
                    function changeLanguageOnMobile() {
                        var selectedLang = document.getElementById('language-select-mobile').value;
                        window.location.href = selectedLang;
                    }
                </script>
            </div>
            <!-- /.mobile-nav__language -->
            <div class="mobile-nav__social">

                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>

                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search...." />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<script src="{{ asset('allAssets/web/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/TweenMax.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/wow.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/swiper.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/typed-2.0.11.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/vegas.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/countdown.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/nouislider.min.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/isotope.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/appear.js')}}"></script>
<script src="{{ asset('allAssets/web/assets/js/jarallax.min.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<!-- template scripts -->
<script src="{{ asset('allAssets/web/assets/js/theme.js')}}"></script>
@stack('custom_js')


</body>

</html>
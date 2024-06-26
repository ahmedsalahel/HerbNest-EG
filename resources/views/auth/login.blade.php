{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>HerbNest-eg Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('allAssets/web/assets/images/favicons/fav.png') }}">
    <link rel="icon" href="{{ asset('allAssets/web/assets/images/favicons/fav.png') }}" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{ asset('allAssets/dash/dist/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div> --}}
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="{{ route('main') }}">
                    <img class="brand-img" src="{{ asset('allAssets/web/assets/images/resources/logo/m-w-logo.png') }}"
                        alt="brand" />
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="{{ route('main') }}" class="btn btn-outline-secondary">Website</a>
                    <a href="#" class="btn btn-outline-secondary">Facebook</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap"
                                style="background-image:url({{ asset('allAssets/web/assets/images/main-slider/slider-2-1.jpg') }});">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">We’re More than Exporting Company
                                        </h1>
                                        <p class="text-white">Welcome to HerbNest-EG, your premier gateway to the finest
                                            herbs and spices from
                                            around the
                                            globe With a rich heritage rooted in the ancient traditions of spice trade,
                                            we are
                                            dedicated to bringing
                                            the
                                            aromatic treasures of the earth to your kitchen.</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap"
                                style="background-image:url({{ asset('allAssets/web/assets/images/main-slider/slider-3-2.jpg') }});">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">We’re More than Exporting Company
                                        </h1>
                                        <p class="text-white">Our catalog features an extensive selection of herbs and
                                            spices,
                                            carefully
                                            curated to meet the diverse needs of our customers.Quality, integrity, and
                                            customer satisfaction are the
                                            cornerstones of our
                                            business. we promises to deliver an unmatched sensory experience through our
                                            products</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <h1 class="display-4 mb-10">Welcome Back :)</h1>
                                    <p class="mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" :value="old('email')"
                                            type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Password" :value="__('Password')"
                                                name="password" type="password" id="password">

                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox"
                                            name="remember" checked>
                                        <label class="custom-control-label font-14" for="same-address">Keep me logged
                                            in</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('allAssets/dash/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('allAssets/dash/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('allAssets/dash/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('allAssets/dash/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('allAssets/dash/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('allAssets/dash/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('allAssets/dash/dist/js/feather.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('allAssets/dash/dist/js/init.js') }}"></script>
    <script src="{{ asset('allAssets/dash/dist/js/login-data.js') }}"></script>
</body>

</html>
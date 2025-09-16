<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Blog Site' }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/template/logo/favicon.svg') }}">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/carouselTicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/odometer.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @stack('styles')
</head>

<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('assets/js/vendors/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/headhesive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/smart-stick-nav.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/Splitetext.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/howler.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.carouselTicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('assets/js/gsap-custom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/image-hover-effects.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>

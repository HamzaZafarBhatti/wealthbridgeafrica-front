<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>@yield('title') | {{ $set->title }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name" content="{{ $set->title }}">
    <meta name="keywords" content="">
    <meta name="description" content="{{ $set->site_desc }}">

    <!-- OG meta data -->
    <meta property="og:title" content="{{ $set->title }}">
    <meta property="og:site_name" content="{{ $set->site_name }}">
    <meta property="og:description" content="{{ $set->site_desc }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="https://wealthbridgeafrica.com/public/assets/images/icon/upload/logo2-wealthbridge.png" alt="preloader icon">
    </div>
    <!-- ===============>> Preloader end here <<================= -->

    <!-- ===============>> light&dark switch start here <<================= -->
    {{-- <div class="lightdark-switch">
        <span class="dark-btn" id="btnSwitch"><img src="{{ asset('assets/images/icon/moon.svg') }}"
                alt="light-dark-switchbtn" class="swtich-icon"></span>
    </div> --}}
    <!-- ===============>> light&dark switch start here <<================= -->

    @include('layout.header')

    @if (Route::is('index'))
        @include('layout.home-banner')
    @else
        @include('layout.banner')
    @endif

    @yield('content')
    
    @include('layout.footer')

    <!-- ===============>> scrollToTop start here <<================= -->
    <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
    <!-- ===============>> scrollToTop ending here <<================= -->
    <!-- vendor plugins -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script src="//code.tidio.co/cesuuzx6lqmvxfxa0xkpqhw9lekg4e5c.js" async></script>
</body>

</html>

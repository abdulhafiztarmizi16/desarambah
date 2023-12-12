@php
    $desa = App\Models\Desa::find(1);
@endphp
<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">

    <!-- SEO Management-->
    <meta name="author" content="Maulana Kevin Pradana">
    <meta name="keywords" content="desa arjasa,arjasa jember,arjasa,desa,desa.id,arjasa arjasa jember,desa di kecamatan arjasa jember,desa arjasa jember,daerah arjasa,website desa arjasa, web desa arjasa, website arjasa, web arjasa">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset(Storage::url($desa->logo)) }}" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    {{-- animation AOS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @yield('styles')
</head>

<body>
        {{-- navbar --}}
        @include('layouts.components.navbar')
        
        <!-- Header -->
        <div class="header-layout bg-primary-600 position-relative">
            <svg style="height: 100%; width:100%; overflow:hidden;" viewBox="0 0 658 250" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.112705" filter="url(#filter0_f_143_13396)">
                    <path
                        d="M137.503 59.2354C119.574 59.2353 101.821 62.7692 85.257 69.6351C68.6931 76.501 53.6427 86.5645 40.9653 99.251C28.2878 111.938 18.2315 126.999 11.3706 143.575C4.50958 160.15 0.978298 177.916 0.978333 195.858C0.984808 214.555 4.82634 233.052 12.2651 250.204H262.74C270.179 233.052 274.02 214.555 274.027 195.858C274.027 177.916 270.496 160.15 263.635 143.575C256.774 126.999 246.717 111.938 234.04 99.251C221.362 86.5645 206.312 76.501 189.748 69.6351C173.184 62.7692 155.431 59.2353 137.503 59.2354Z"
                        fill="#D4F0DF" />
                </g>
                <path opacity="0.133197"
                    d="M325.593 128.394C315.549 128.394 305.603 130.373 296.323 134.22C287.043 138.067 278.612 143.704 271.509 150.812C264.407 157.92 258.773 166.357 254.929 175.644C251.085 184.93 249.107 194.884 249.107 204.935C249.126 221.225 254.339 237.083 263.985 250.204H387.202C396.848 237.083 402.06 221.225 402.079 204.935C402.079 184.635 394.021 165.167 379.677 150.812C365.333 136.458 345.879 128.394 325.593 128.394Z"
                    fill="#D4F0DF" />
                <path opacity="0.157787"
                    d="M307.337 0.761826C307.207 3.0398 307.121 5.32008 307.081 7.60139C307.081 54.1175 325.546 98.7284 358.414 131.62C391.283 164.512 435.862 182.99 482.344 182.99C528.827 182.99 573.406 164.512 606.274 131.62C639.142 98.7281 657.607 54.1174 657.607 7.60139C657.603 5.32079 657.554 3.0405 657.46 0.761826H307.337Z"
                    fill="#D4F0DF" />
                <path opacity="0.133197"
                    d="M525.708 232.88C509.299 232.882 493.492 239.067 481.434 250.204H569.99C557.93 239.065 542.12 232.88 525.708 232.88Z"
                    fill="#D4F0DF" />
                <defs>
                    <filter id="filter0_f_143_13396" x="0.978137" y="59.2352" width="273.049" height="190.969"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="9.75268e-05" result="effect1_foregroundBlur_143_13396" />
                    </filter>
                </defs>
            </svg>
            @yield('header')
        </div>

        <!-- Page content-->
        <section class="py-4">
            <div class="container">
                @yield('content')
                <div id="overlay"></div>
                <div id="popup" class="bg-primary-200">
                    <h2 class="text-center">Pengumuman</h2>
                    <div>
                        <p>{!! $desa->pengumuman !!}</p>
                    </div>
                    <button id="closeButton" class="bg-danger">X</button>
                </div>
            </div>
        </section>

        {{-- footer --}}
        @include('layouts.components.footer')


    <!--   Core   -->
    <script src="{{ url('/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--   Optional JS   -->

    {{-- animation AOS CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    <!--   Argon JS   -->
    <script src="{{ url('/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        const baseURL = $('meta[name="base-url"]').attr('content');
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>

        <!-- Template Main JS File -->
        <script src="{{ asset('/js/main.js') }}"></script>
        <script>
            // button pengumuman
            $(document).ready(function() {
            $('#alertButton').click(function() {
                $('#overlay').show();
                $('#popup').show();
            });

            $('#closeButton, #overlay').click(function() {
                $('#overlay').hide();
                $('#popup').hide();
            });
        });
        // animasi button allert
        $(document).ready(function() {
            $('#alertButton').hover(function() {
                $(this).css('animation-play-state', 'paused');
            }, function() {
                $(this).css('animation-play-state', 'running');
            });
        });
        </script>

        <!-- Vendor JS Files -->
        <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <script src="{{ asset('/vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
    @stack('scripts')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.partials.top-bar')
    @include('layouts.partials.nav-bar')
    @include('layouts.partials.search')
        @yield('content')
    @include('layouts.partials.footer')
    <!-- ALL JS FILES -->
    <script src="{{ asset('vendor/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('vendor/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('vendor/js/inewsticker.js') }}"></script>
    <script src="{{ asset('vendor/js/bootsnav.js') }}"></script>
    <script src="{{ asset('vendor/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('vendor/js/isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('vendor/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('vendor/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('vendor/js/custom.js') }}"></script>
</body>
</html>

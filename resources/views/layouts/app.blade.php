<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="image/png" sizes="16x16" rel="icon" href="{{asset("images/favicon16.png")}}">
    <link type="image/png" sizes="32x32" rel="icon" href="{{asset("images/favicon32.png")}}">
    <link type="image/png" sizes="96x96" rel="icon" href="{{asset("images/favicon96.png")}}">
    <link type="image/png" sizes="120x120" rel="icon" href="{{asset("images/favicon120.png")}}">
    <link type="image/x-icon" rel="shortcut icon" href="{{asset("images/favicon.ico")}}">
    <title>@lang('Стоматология Perfect Stom')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fontawesome all css -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- slicknav js -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    {{--<script src="{{ asset('js/mixitup.min.js') }}"></script>--}}
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/form-contact.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

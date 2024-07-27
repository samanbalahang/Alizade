<!DOCTYPE html>
<html lang="fa" class="dark-style customizer-hide" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>{{ Session::get('pageTitle') }}</title>

    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/fav/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/fav/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/fav/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/fav/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/fav/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/fav/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/fav/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/fav/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/fav/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/fav/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/fav/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/fav/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('images/fav/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/fav/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/pages/page-auth.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('/assets/js/config.js') }}"></script>
</head>

<body>

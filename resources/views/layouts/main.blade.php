<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
</head>
<body>
<div class="limiter">
    @yield('content')
</div>
<script src="{{asset('public/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('public/bootstrap/js/popper.js') }}"></script>
<script src="{{asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('public/select2/select2.min.js') }}"></script>
<script src="{{asset('public/js/main.js') }}"></script>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Infinite Developer | Page Not Found</title>

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    {{-- meta data --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-93daf664.css') }}">
    <script src="{{ asset('build/assets/app-51e8fec5.js') }}"></script>

    @yield('styles')

</head>

<body>
    @yield('content')
</body>

</html>

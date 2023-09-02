<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('page_title')</title>

    {{-- meta data --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description')">

    {{-- google ads --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9801423369579333"
        crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-93daf664.css') }}">
    <script src="{{ asset('build/assets/app-51e8fec5.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <script src="{{ asset('js/prism.js') }}"></script>

    <script src="{{ asset('js/scroll.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @yield('styles')

</head>

<body class="@yield('class')">
    @include('partials.navigation')
    @yield('content')
</body>

</html>

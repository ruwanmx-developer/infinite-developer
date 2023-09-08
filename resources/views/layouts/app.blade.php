<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('page_title')</title>

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    {{-- meta data --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description')">

    {{-- google ads --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9801423369579333"
        crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-93daf664.css') }}">
    <script src="{{ asset('build/assets/app-51e8fec5.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <script src="{{ asset('js/prism.js') }}"></script>

    <script src="{{ asset('js/scroll.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @yield('styles')

    <script>
        let FF_FOUC_FIX;
    </script>
</head>

<body class="@yield('class')">
    @include('partials.navigation')
    <div class="app">
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>

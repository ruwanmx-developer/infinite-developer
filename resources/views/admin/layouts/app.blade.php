<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Infinite Developer') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-93daf664.css') }}">
    <script src="{{ asset('build/assets/app-51e8fec5.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <script src="{{ asset('js/prism.js') }}"></script>

    <script src="{{ asset('js/scroll.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


</head>

<body class="@yield('class')">
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.sidebar')
            <div class="col-md-9 ms-sm-auto col-lg-10 px-5 pt-3">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>

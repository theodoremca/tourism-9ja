<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/tourismPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{-- <link rel="stylesheet" href="{{ asset('sass/main.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/clean-blog.css') }}"> --}}


    <!-- ICONS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}"> --}}
    {{-- <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"> --}}

    <title>{{ config('app.name', 'Tourism Naija') }}</title>
</head>
<body>
    <div id="app">
        <header>
            <nav>
                <div class="navbar-center container">
                    <span class="nav-icon"><img src="{{ asset('img/logo-green-small-1x.png') }}" alt="logo"></span>
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><a href="{{ route('blog') }}">blog</a></li>
                        <li><a href="{{ route('about') }}">about</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                    </ul>
                    <div class="hamburger">&nbsp;</div>

                </div>
            </nav>
            <div class="container">
                <div class="hero-text">
                    <h1>Tourist Naija</h1>
                    <h2>Heart of Tourism</h2>

                </div>
            </div>
        </header>
        <main class="py-4 px-5">
             @yield('content')
        </main>

        @include('layouts.footer')
    </div>
</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

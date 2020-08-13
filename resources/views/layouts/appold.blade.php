<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tourism Naija') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clean-blog.css') }}">

    <!-- Bootstrap core CSS -->
    {{-- <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

    <!-- ICONS -->
    <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

</head>
<body>
    <div id="app">
        <header class="header">
            <div class="header__logo-box">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                            aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Navigation -->
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Tourist Naija</span>
                    <span class="heading-primary--sub">Heart of Tourism</span>
                </h1>
                <a href="{{ route('login') }}" class="btn btn--white btn--animated">is where life happens</a>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer__logo-box">
                <img src="{{ asset('img/logo-green-small-1x.png') }}" alt="full logo" class="footer__logo">
                <p> TouristNaija</p>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contact</a></li>
                            <li class="footer__item"><a href="login.php" class="footer__link">SignUp / Login</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Others</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">TouristNaija</p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>

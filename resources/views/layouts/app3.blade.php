<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clean-blog.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <title>TouristNaija</title>


</head>
<body>
<div id="app">


    <main class="py-4">
        @yield('content')
    </main>

</div>
</body>
</html>

@extends('layouts.app_blog')

@section('content')


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<!-- Bootstrap core CSS -->--}}
        {{--<link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">--}}

        {{--<!-- ICONS -->--}}
        {{--<link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">--}}
        {{--<link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">--}}

        {{--<!-- Custom fonts for this template -->--}}
        {{--<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>--}}
        {{--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>--}}

        {{--<!-- Custom styles for this template -->--}}
        {{--<link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">--}}

        {{--<title>{{ config('app.name', 'Toursim Naija') }}</title>--}}
    {{--</head>--}}

    {{--<body>--}}

{{--<!-- Navigation -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="home.php">Tourism Blog</a>--}}
        {{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"--}}
                {{--data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--Menu--}}
            {{--<i class="fas fa-bars"></i>--}}
        {{--</button>--}}
        {{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="home.php">Home</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">About</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="login.php">Login</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Contact</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

{{--<!-- Page Header -->--}}
{{--<header class="masthead" style="background-image: url('public/images/tourism2.jpg')">--}}
    {{--<div class="overlay"></div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 col-md-10 mx-auto">--}}
                {{--<div class="site-heading">--}}
                    {{--<h1>Tourism Blog</h1>--}}
                    {{--<span class="subheading">Learn about different tourist centres</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}

<!-- Main Content -->
<div class="container">
    <div class="row pt-3">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="/blog/{1}">
                    <h2 class="post-title font-weight-bold" >
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/blog/{1}">
                    <h2 class="post-title font-weight-bold">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 18, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/blog/{1}">
                    <h2 class="post-title font-weight-bold">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on August 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/blog/{1}">
                    <h2 class="post-title font-weight-bold">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on July 8, 2019</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-success float-right text-center" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
                <p class="copyright text-muted">Copyright &copy; TouristNaija 2020</p>
            </div>

</footer>

<!-- Bootstrap core JavaScript -->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}

<!-- Custom scripts for this template -->
{{--<script src="{{ asset('js/clean-blog.min.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}

@endsection

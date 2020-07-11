<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!-- ICONS -->
        <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/clean-blog.css') }}">

        <title>TouristNaija</title>
    </head>
    <body>
        <header class="header">
            <div class="header__logo-box">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                            aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <!-- Navigation -->
                {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand" href="home.php">Tourism Blog</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> --}}
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Tourist Naija</span>
                    <span class="heading-primary--sub">Heart of Tourism</span>
                </h1>
                <a href="{{ route('login') }}" class="btn btn--white btn--animated">is where life happens</a>
            </div>
        </header>

        <main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">Tourist Attractions</h2>
                </div>
                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Tourist Centres</h3>
                        <p class="paragraph">
                            Tourism is the physical evidence of genius architectural designs and brain work, coupled with the
                            mysterious dynamism of natural
                            ingenuity make them the go-to place for a memorable tourism experience.
                        </p>
                        <h3 class="heading-tertiary u-margin-bottom-small">Music and Life</h3>
                        <p class="paragraph">Music can be a form of art; an expression of emotions through harmonic frequencies</p>
                        <a href="#" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="{{ asset('img/nat-1-large.jpg') }}" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="{{ asset('img/nat-2-large.jpg') }}" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="{{ asset('img/nat-3-large.jpg') }}" alt="Photo 3" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">This Indigeneous me</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam neque, dignissimos adipisc.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Music and Life</h3>
                            <p class="feature-box__text">
                                Consectetur adipisicing elit. Odio eos obcaecati ratione minus, reiciendis nihil veniam sit fugit.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Straight Heads</h3>
                            <p class="feature-box__text">
                                Dolor amet consectetur adipisicing elit. Voluptas, quibusdam libero fuga laudantium vero voluptatum.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">First Time</h3>
                            <p class="feature-box__text">
                                Sit amet consectetur adipisicing elit. Numquam optio repellendus delectus earum id aperiam.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">Popular Tourist Centres in Nigeria</h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">&nbsp;</div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Tourist Centres</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Obudu Plateau</li>
                                        <li>Erinjesha Waterfall</li>
                                        <li>Olumo Rock</li>
                                        <li>Ogbunike Cave</li>
                                        <li>Omu Resort</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Cattle Ranch</p>
                                        <p class="card__price-only">Waterfall</p>
                                        <p class="card__price-value">Resort</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">&nbsp;</div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">Music</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Fuji Music</li>
                                        <li>Highlife</li>
                                        <li>Jazz</li>
                                        <li>Reggae</li>
                                        <li>Genre: All kinds</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Play</p>
                                        <p class="card__price-value">Favourite artist</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">&nbsp;</div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">
                                    This Indegineous Me
                                    </span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                    <li>Our culture and its diversities</li>
                                    <li>Its diversities</li>
                                    <li>Food varieties</li>
                                    <li>Dressing Pattern</li>
                                    <li>Language Differences</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Uniqueness in Diversity</p>
                                        <p class="card__price-value">Culture</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn btn--green">Discover others</a>
                </div>
            </section>

            <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                    <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
                    <source src="{{ asset('img/video.webm') }}" type="video/webm">
                    Your browser is not supported!
                    </video>
                </div>
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">We make people genuinely happy</h2>
                </div>
                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="{{ asset('img/nat-8.jpg') }}" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Mary Smith</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">I had the time with my family</h3>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, ad aliquam voluptatibus ipsum
                                nobis sapiente commodi, doloribus magnam sint ducimus consectetur velit quod modi doloremque
                                quibusdam. Veniam at consectetur magni?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="{{ asset('img/nat-9.jpg') }}" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Jack Wilson</figcaption>
                        </figure>

                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">WOW! my life is completely different now</h3>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, ad aliquam voluptatibus ipsum
                                nobis sapiente commodi, doloribus magnam sint ducimus consectetur velit quod modi doloremque
                                quibusdam. Veniam at consectetur magni?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn-text">Read all stories &rarr;</a>
                </div>
            </section>

            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="#" class="form">
                                <div class="u-center-text u-margin-bottom-medium">
                                    <h2 class="heading-secondary">Register now</h2>
                                </div>
                                <div class="form__group">
                                    <input type="text" class="form__input" id="name" placeholder="Full name" required>
                                    <label for="name" class="form__label">Full name</label>
                                </div>
                                <div class="form__group">
                                    <input type="email" class="form__input" id="email" placeholder="Email address" required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>
                                <div class="form_group">
                                    <button class="btn btn--green">Sign Up &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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

        <div class="popup" id="popup">
            <div v class="popup__content">
                <div class="popup__left">
                    <img src="{{ asset('img/nat-8.jpg') }}" alt="Tour Photo" class="popup__img">
                    <img src="{{ asset('img/nat-9.jpg') }}" alt="Tour Photo" class="popup__img">

                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">Join Us</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before signing up</h3>
                    <p class="popup__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Quis
                        eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Auctor urna nunc id cursus metus. In mollis
                        nunc sed id semper risus. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Mi
                        sit amet mauris commodo quis imperdiet massa tincidunt. Neque aliquam vestibulum morbi blandit. Sodales
                        ut etiam sit amet nisl purus in mollis. Viverra ipsum nunc aliquet bibendum. Ullamcorper morbi tincidunt
                        ornare massa eget egestas purus.
                    </p>
                    <a href="#" class="btn btn--green">Book now</a>
                </div>
            </div>
        </div>
    </body>
</html>

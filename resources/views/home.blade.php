@extends('layouts.app')

@section('content')

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

@endsection

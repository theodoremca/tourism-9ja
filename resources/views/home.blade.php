@extends('layouts.app')

@section('content')

    <body>
    <div class="sub-header">
        <div class="card" style="width: 18rem;">
            <i class="tourism-image"></i>
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Tourism</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-success">Learn More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="lifestyle-image"></i>
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Lifestyle</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-success">Learn More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="culture-image"></i>
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Culture</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-success">Learn More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <i class="dest-image"></i>
            {{--<img src="..." class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Destinations</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-success">Learn More</a>
            </div>
        </div>

    </div>

    <div class="about-us mx-auto pt-4">
        <div class="media">
            <img src="/images/hero.jpg" class="mr-5" alt="..." width="35%" height="auto">
            <div class="media-body text-justify">
                <h5 class="mt-0 font-weight-bold text-center">About Us</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>

    <div class="blog-news row pt-5">
        {{--<div class="latest-news">--}}
        {{--<h4>Latest News</h4>--}}

        {{--<ul class="list-unstyled">--}}
        {{--<li>abcd</li>--}}
        {{--<li>abcd</li>--}}

        {{--</ul>--}}

        {{--</div>--}}

        {{--<div class="blog">--}}
        {{--<h4>Latest Blog Updates</h4>--}}

        {{--<ul class="list-unstyled">--}}
        {{--<li>--}}
        {{--abcd--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}

        <div class="col-md-6 col-sm-4">
            <div class="latest-news">
                <h4 class="font-weight-bold">Latest News</h4>

                <ul class="list-unstyled">
                    <li class="pb-3 pt-4"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>
                    <li class="pb-3"><a href="">Olumo rock to be renovated for the second time in 5 years</a></li>


                </ul>
                <a href="#" class="btn btn-success">See More</a>
            </div>

        </div>
        <div class="col-md-6 col-sm-4">
            <div class="blog">
                <h4 class="font-weight-bold">Latest Blog Updates</h4>

                <ul class="list-unstyled">
                    <li>
                        <div class="media pt-4">
                            <img src="/images/card-image.jpg" class="mr-3" alt="..." width="20%" height="auto">
                            <div class="media-body text-justify">
                                <h5 class="mt-0">Why you should visit santorini</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis..
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <div class="media pt-4">
                            <img src="/images/card-image.jpg" class="mr-3" alt="..." width="20%" height="auto">
                            <div class="media-body text-justify">
                                <h5 class="mt-0">Why you should visit santorini</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis..
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <div class="media pt-4">
                            <img src="/images/card-image.jpg" class="mr-3" alt="..." width="20%" height="auto">
                            <div class="media-body text-justify">
                                <h5 class="mt-0">Why you should visit santorini</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis..
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn btn-success">See More</a>

            </div>
        </div>

    </div>

    </body>


@endsection

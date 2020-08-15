@extends('layouts.app_blog')

@section('content')

    <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="name" placeholder="Full Name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                    <input class="input100" type="text" name="email" placeholder="E-mail">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                    <input class="input100" type="text" name="phone" placeholder="Phone">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
                    <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

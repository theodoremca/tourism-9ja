@extends('layouts.appUI')

@section('content')
    <!--Banner Area Start-->
    <div class="banner-area signin-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Sign <span>IN</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of Banner Area-->
    <!--Sign In Form Start-->
    <div class="sign-in-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title text-center title-left">
                        <div class="title-border">
                            <h1>Sign <span>in</span></h1>
                        </div>
                    </div>
                    <div class="sign-in-container">
                        <form action="https://designermachinefonts.net/dm/html/adventure/adventures/mail.php" method="post" id="signin">
                            <div class="sign-in-buttons">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <a href="#" class="facebook">Facebook</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a href="#" class="twitter">Twitter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sign-in-form">
                                <input name="email" type="email" class="form-box required" placeholder="Email Address">
                                <input type="password" name="psw" class="form-box required" placeholder="Password">
                                <div class="sign-in-settings">
                                    <input type="checkbox" name="newsletter" value="1">
                                    <span>Remember me</span>
                                    <a href="#">Lost your password?</a>
                                </div>
                                <input type="submit" class="submit-button" value="Signin">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title text-center title-right">
                        <div class="title-border">
                            <h1>Create New <span>Account</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                    <div class="sign-up-form">
                        <form action="https://designermachinefonts.net/dm/html/adventure/adventures/mail.php" method="post">
                            <input name="email" type="text" class="form-box required" placeholder="First Name">
                            <input name="email" type="text" class="form-box required" placeholder="Last Name">
                            <input name="email" type="text" class="form-box required" placeholder="Tribe">
                            <input name="email" type="text" class="form-box required" placeholder="State of Origin">
                            <input name="email" type="text" class="form-box required" placeholder="Nationality">
                            <input name="email" type="email" class="form-box required" placeholder="Email Address">
                            <input type="password" name="psw" class="form-box" placeholder="Password">
                            <input type="password" name="re-psw" class="form-box" placeholder="Repeat Password">
                            <input type="submit" class="submit-button" value="Signup">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Sign In Form-->


















{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-10">--}}
{{--                <div class="register">--}}
{{--                    <div class="register-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="first_name">--}}
{{--                                    <label for="first_name"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('First Name') }}</label>--}}


{{--                                    <input id="name" type="text"--}}
{{--                                           class="form-control @error('first_name') is-invalid @enderror"--}}
{{--                                           name="first_name" value="{{ old('first_name') }}" required--}}
{{--                                           autocomplete="first_name" autofocus>--}}

{{--                                    @error('first_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                                <div class="last_name">--}}
{{--                                    <label for="last_name"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('Last Name') }}</label>--}}


{{--                                    <input id="name" type="text"--}}
{{--                                           class="form-control @error('last_name') is-invalid @enderror" name="last_name"--}}
{{--                                           value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>--}}

{{--                                    @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                            </div>--}}


{{--                            <div class="form-group row">--}}
{{--                                <div class="email">--}}
{{--                                    <label for="email"--}}
{{--                                           class="col-form-label label pl-0 pr-0">{{ __('E-Mail Address') }}</label>--}}

{{--                                    <input id="email" type="email"--}}
{{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                                           value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="nationality">--}}
{{--                                    <label for="nationality"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('Nationality') }}</label>--}}

{{--                                    <input id="nationality" type="nationality"--}}
{{--                                           class="form-control @error('nationality') is-invalid @enderror" name="nationality"--}}
{{--                                           value="{{ old('nationality') }}" required autocomplete="nationality">--}}

{{--                                    @error('nationality')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="password">--}}
{{--                                    <label for="password"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('Password') }}</label>--}}

{{--                                    <input id="password" type="password"--}}
{{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                           required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="confirmPassword">--}}
{{--                                    <label for="password-confirm"--}}
{{--                                           class="col-form-label label">{{ __('Confirm Password') }}</label>--}}


{{--                                    <input id="password-confirm" type="password" class="form-control"--}}
{{--                                           name="password_confirmation" required autocomplete="new-password">--}}

{{--                                </div>--}}

{{--                            </div>--}}


{{--                            <div class="form-group row">--}}
{{--                                <div class="state">--}}
{{--                                    <label for="state"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('State of Origin') }}</label>--}}


{{--                                    <input id="state" type="text"--}}
{{--                                           class="form-control @error('state') is-invalid @enderror" name="state"--}}
{{--                                           value="{{ old('state') }}" required autocomplete="state" autofocus>--}}

{{--                                    @error('state')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="tribe">--}}
{{--                                    <label for="tribe"--}}
{{--                                           class="col-form-label pl-0 pr-0 label">{{ __('Tribe') }}</label>--}}

{{--                                    <input id="tribe" type="text"--}}
{{--                                           class="form-control @error('tribe') is-invalid @enderror" name="tribe"--}}
{{--                                           value="{{ old('tribe') }}" required autocomplete="tribe" autofocus>--}}

{{--                                    @error('tribe')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}


{{--                            </div>--}}


{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="text-center submit_details mt-3" >--}}
{{--                                    <button type="submit" class="btn btn-primary ml-0">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

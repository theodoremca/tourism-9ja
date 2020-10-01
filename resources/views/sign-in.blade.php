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

@endsection

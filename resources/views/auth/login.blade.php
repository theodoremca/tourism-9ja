@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-right:0;">
        <div class="col-md-8">
            <div class="login">
                <div class="login_header">{{ __('Login') }}</div>

                <div class="login-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 text-md-right login_label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom:4rem">
                            <label for="email" class="col-md-4 text-md-right login_label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-6 forgot_password forgot text-sm-center">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-sm text-right mt-2 pass"
                                       href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="submit_details">
                                <button type="submit" class="btn btn-lg text-center text-white">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="register text-center mt-2">
                        <small> Don't have an account? <span><a class="" href= "{{route('register')}}">Register here</a></span></small>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

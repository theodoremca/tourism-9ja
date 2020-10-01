@extends('layouts.app_blog')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="register">
                    <div class="register-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="first_name">
                                    <label for="first_name"
                                           class="col-form-label pl-0 pr-0 label">{{ __('First Name') }}</label>


                                    <input id="name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ old('first_name') }}" required
                                           autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                                <div class="last_name">
                                    <label for="last_name"
                                           class="col-form-label pl-0 pr-0 label">{{ __('Last Name') }}</label>


                                    <input id="name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                           value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="email">
                                    <label for="email"
                                           class="col-form-label label pl-0 pr-0">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="nationality">
                                    <label for="nationality"
                                           class="col-form-label pl-0 pr-0 label">{{ __('Nationality') }}</label>

                                    <input id="nationality" type="nationality"
                                           class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                                           value="{{ old('nationality') }}" required autocomplete="nationality">

                                    @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="password">
                                    <label for="password"
                                           class="col-form-label pl-0 pr-0 label">{{ __('Password') }}</label>

                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="confirmPassword">
                                    <label for="password-confirm"
                                           class="col-form-label label">{{ __('Confirm Password') }}</label>


                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">

                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="state">
                                    <label for="state"
                                           class="col-form-label pl-0 pr-0 label">{{ __('State of Origin') }}</label>


                                    <input id="state" type="text"
                                           class="form-control @error('state') is-invalid @enderror" name="state"
                                           value="{{ old('state') }}" required autocomplete="state" autofocus>

                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="tribe">
                                    <label for="tribe"
                                           class="col-form-label pl-0 pr-0 label">{{ __('Tribe') }}</label>

                                    <input id="tribe" type="text"
                                           class="form-control @error('tribe') is-invalid @enderror" name="tribe"
                                           value="{{ old('tribe') }}" required autocomplete="tribe" autofocus>

                                    @error('tribe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>


                            </div>


                            <div class="form-group row mb-0">
                                <div class="text-center submit_details mt-3" >
                                    <button type="submit" class="btn btn-primary ml-0">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

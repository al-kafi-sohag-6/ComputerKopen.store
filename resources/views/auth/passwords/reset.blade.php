@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="cnt">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="right-side">
                <div class="signin_form s_form">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="login">
                            <h2>{{ __('Reset Password') }}</h2>
                        </div>
                        <div class="input_text">
                            <input placeholder="Email" id="email" type="email"
                                class="input_email form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                            <i class="fa-solid fa-envelope"></i>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input_text" id="password">
                            <input type="password" value="{{ old('password') }}" name="password"
                                class="input_password form-control @error('password') is-invalid @enderror signup_pass"
                                placeholder="Password" autocomplete="current-password" required>
                            <i class="fa fa-lock"></i>
                            <i id="show_hide_password" class="fa fa-eye-slash signup_eye"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input_text" id="conf_password">
                            <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="input_password form-control @error('password_confirmation') is-invalid @enderror signup_pass" placeholder="Password" autocomplete="new-password" required>
                            <i class="fa fa-lock"></i>
                            <i id="conf_show_hide_password" class="fa fa-eye-slash signup_eye"></i>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="login_btn">
                            <button type="submit" class="login_button">Reset Password</button>
                        </div>
                        <div class="create margin">
                            <a href="{{ route('register') }}" class="create_acc">Create your Account </a> / <a href="{{ route('login') }}" class="create_acc">Login</a> <i
                            class="fa fa-long-arrow-right"></i>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#show_hide_password").on('click', function(event) {
            event.preventDefault();
            if($('#password input').attr("type") == "text"){
                $('#password input').attr('type', 'password');
                $('#password #show_hide_password').addClass( "fa-eye-slash" );
                $('#password #show_hide_password').removeClass( "fa-eye" );
            }else if($('#password input').attr("type") == "password"){
                $('#password input').attr('type', 'text');
                $('#password #show_hide_password').removeClass( "fa-eye-slash" );
                $('#password #show_hide_password').addClass( "fa-eye" );
            }
        });

        $("#conf_show_hide_password").on('click', function(event) {
            event.preventDefault();
            if ($('#conf_password input').attr("type") == "text") {
                $('#conf_password input').attr('type', 'password');
                $('#conf_password #conf_show_hide_password').addClass("fa-eye-slash");
                $('#conf_password #conf_show_hide_password').removeClass("fa-eye");
            } else if ($('#conf_password input').attr("type") == "password") {
                $('#conf_password input').attr('type', 'text');
                $('#conf_password #conf_show_hide_password').removeClass("fa-eye-slash");
                $('#conf_password #conf_show_hide_password').addClass("fa-eye");
            }
        });
    });
</script>





@endsection

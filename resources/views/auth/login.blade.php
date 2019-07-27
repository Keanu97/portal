@extends('layouts.auth')
@section('title')
    @lang('auth.sign in')
@endsection
@section('content')
    <!--begin::Head-->
    <div class="kt-login__head">
        <span class="kt-login__signup-label">@lang('auth.no account')</span>&nbsp;&nbsp;
        <a href="{{ route('register') }}" class="kt-link kt-login__signup-link">@lang('auth.sign up')!</a>
    </div>
    <!--end::Head-->

    <!--begin::Body-->
    <div class="kt-login__body">

        <!--begin::Signin-->
        <div class="kt-login__form">
            <div class="kt-login__title">
                <h3>@lang('auth.sign in')</h3>
            </div>

            <!--begin::Form-->
            <form method="POST" class="kt-form" action="{{ route('login') }}" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('auth.email')">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('auth.password')">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--begin::Action-->
                <div class="kt-login__actions">
                    <a href="#" class="kt-link kt-login__link-forgot">
                        @lang('auth.forgot password')
                    </a>
                    <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">@lang('auth.sign in')</button>
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
    </div>
    <!--end::Body-->
@endsection

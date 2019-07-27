@extends('layouts.auth')
@section('content')
    <!--begin::Head-->
    <div class="kt-login__head">
        <span class="kt-login__signup-label">@lang('auth.already account')</span>&nbsp;&nbsp;
        <a href="{{ route('login') }}" class="kt-link kt-login__signup-link">@lang('auth.sign in')!</a>
    </div>
    <!--end::Head-->

    <!--begin::Body-->
    <div class="kt-login__body">

        <!--begin::Signin-->
        <div class="kt-login__form">
            <div class="kt-login__title">
                <h3>@lang('auth.sign up')</h3>
            </div>

            <!--begin::Form-->
            <form method="POST" class="kt-form" action="{{ route('register') }}" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="@lang('auth.name')">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('auth.email')">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="@lang('auth.password')">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="@lang('auth.confirm password')">
                </div>
                <!--begin::Action-->
                <div class="kt-login__actions">
                    <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">@lang('auth.sign up')</button>
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
    </div>
    <!--end::Body-->
@endsection

@extends('layouts.auth.auth_layout')
@section('auth_content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('auth/images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <span class="login100-form-title">
                    {{ __('Reset Password') }}
                </span>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    
                    <input class="input100 " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Enter your Email">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/register">
                        {{-- Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> --}}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

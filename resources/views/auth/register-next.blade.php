@extends('layouts.auth.auth_layout')

@section('auth_content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('auth/images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title">
                    {{ __('Register') }}
                </span>
                @error('email')
                    <span class="text-danger"  role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror
                @error('password')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="wrap-input100 validate-input" data-validate = "Valid name is required: A-Za-z">
                    
                    <input class="input100 " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" placeholder="username">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    
                    <input class="input100 " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Email">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    
                    <input class="input100 @error('password') is-invalid @enderror" name="password" required type="password"  placeholder="Password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    
                    <input class="input100 @error('password') is-invalid @enderror" name="password_confirmation" required  type="password"  placeholder="Confirm Password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div>
                    <input type="hidden" name="firstname" value="{{Session::get('firstname')}}">
                    <input type="hidden" name="lastname" value="{{Session::get('lastname')}}">
                    <input type="hidden" name="address" value="{{Session::get('address')}}">
                    <input type="hidden" name="country" value="{{Session::get('country')}}">
                    <input type="hidden" name="phone" value="{{Session::get('phone')}}">
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/register">
                        {{-- Create your Account --}}
                        {{-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> --}}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

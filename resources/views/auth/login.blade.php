@extends('layouts.auth.auth_layout')
{{-- @extends('layouts.app') --}}
@section('auth_content')
{{-- @section('content') --}}

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('auth/images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                    Member Login
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
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    
                    <input class="input100 " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Email">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    
                    <input class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password"  placeholder="Password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    @if (Route::has('password.request'))
                        <span class="txt1">
                            Forgot
                        </span>
                    
                        <a class="txt2" href="{{ route('password.request') }}">
                            Username / Password?
                        </a>
                    @endif
                    {{-- <a class="txt2" href="#">
                        Username / Password?
                    </a> --}}
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/register">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

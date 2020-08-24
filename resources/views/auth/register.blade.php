<?php 
    use App\Country as Country;

    $Country = new Country;
    $countries_list = $Country->all();
?>
@extends('layouts.auth.auth_layout')

@section('auth_content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('auth/images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('next') }}">
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
                <div class="wrap-input100 validate-input" data-validate = "Valid first name is required: A-Za-z">
                    
                    <input class="input100 " name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus type="text" placeholder="first name">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid last name is required: A-Za-z">
                    
                    <input class="input100 " name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus type="text" placeholder="last name">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid address is required: ex@abc.xyz">
                    
                    <input class="input100 " name="address" value="{{ old('address') }}" required autocomplete="address" autofocus type="text" placeholder="Home Address">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid country is required: ex@abc.xyz">
                    
                    <select class="input100" id="country" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="country">
                        <option value="">Please select country</option>
                        @foreach ($countries_list as $country)
                        <option value="{{$country->country_code}}">{{$country->country_name}}</option>
                        @endforeach
                    </select>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    
                    <input class="input100 @error('phone') is-invalid @enderror" id="phone" name="phone" required type="phone"  placeholder="phone">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Continue') }}
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
<script>
    var country = document.getElementById('country');
    var phone = document.getElementById('phone');

    country.onchange = ()=> {
        phone.value = country.value+" "
    }
</script>
@endsection


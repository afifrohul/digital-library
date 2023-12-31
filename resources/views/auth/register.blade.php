{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
	<title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetBack/css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/logos/digital-library-logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/logos/digital-library-logo.png')}}" type="image/x-icon">

</head>
<body>
	<div class="limiter">
        <div class="container-login100" style="background-image: url({{ asset('assets/img-admin/bg.png') }})">
        {{-- <div class="container-login100"> --}}
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('assets/logos/digital-library-logo.png')}}" alt="IMG">
                </div>
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title" style="color: white;">Digital Library Register</span>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                        <input class="input100" type="text" name="name" placeholder="name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required">
                        <input class="input100" type="text" name="email" placeholder="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-at" aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>
                    <a href="{{url('/login')}}" class="register-text" style="color: white;">Already Register?</a>
                </form>
            </div>
        </div>
    </div>
	
    <script src="{{asset('assetBack/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assetBack/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assetBack/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assetBack/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assetBack/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{asset('assetBack/js/main.js')}}"></script>
</body>
</html>
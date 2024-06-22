{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}


@extends('website.layouts.app')
@section('content')

{{--    <style>--}}
{{--        .breadcrumb-item+.breadcrumb-item::before {--}}
{{--            float: left;--}}
{{--            padding-right: .5rem;--}}
{{--            color: #6c757d;--}}
{{--            content: var(--bs-breadcrumb-divider, "http://samspetgroomers.com/");--}}
{{--        }--}}
{{--    </style>--}}
{{--    <section class="banner" style="background-color: #fff8e5; background-image:url(website/assets/img/banner.png)">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="banner-text">--}}
{{--                        <h2>Login</h2>--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <a href="{{route('home')}}">Home</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active"  aria-current="page">Login</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="banner-img">--}}
{{--                        <div class="banner-img-1">--}}
{{--                            <svg width="260" height="260" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#fa441d"></path>--}}
{{--                            </svg>--}}
{{--                            <img src="website/assets//img/banner-img-1.jpg" alt="banner">--}}
{{--                        </div>--}}
{{--                        <div class="banner-img-2">--}}
{{--                            <svg width="320" height="320" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#fa441d"></path>--}}
{{--                            </svg>--}}
{{--                            <img src="website/assets//img/banner-img-2.jpg" alt="banner">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <img src="website/assets//img/hero-shaps-1.png" alt="hero-shaps" class="img-2">--}}
{{--        <img src="website/assets//img/hero-shaps-1.png" alt="hero-shaps" class="img-4">--}}
{{--    </section>--}}
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 col-sm-12 offset-sm-0">
                    <div class="box login">
                        <h3>Log In Your Account</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="email" name="email" placeholder="Username or email address">
                            <input type="password" name="password" placeholder="Password">
                            <div class="remember">
                                <div class="first">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox">Remember me</label>
                                </div>
                                <div class="second">
                                    <a href="javascript:void(0)">Forget a Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="button">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

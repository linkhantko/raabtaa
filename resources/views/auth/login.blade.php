{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .page1{
        background-color: #19944f;
    }
    .page2{
        background-color: #ffff;
    }
    .btn-primary{
        background-color: #19944f;
        border: none;
    }
    .btn-primary:hover{
        background-color: #19944f;
    }
    .text-green
    {
        color: #19944f;
    }
</style>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-6 page1" style="height: 1000px">
            <nav class="m-3"><img src="{{asset("images/logo.png")}}" alt="" width="90"></nav>
            <div class="text-center" style="margin-top: 25%">
                <h2 class="text-light">Haven't Signed Up?</h2>
                <h5 class="text-dark">*No Credut card required</h5>
                <a href="{{url('register')}}" class="btn btn-light text-uppercase text-green px-3 py-2 mt-3">create account</a>
            </div>
        </div>
        {{--  --}}
        <div class="col-6 page2">
            <div style="margin-top: 30%">
                    <main class="text-center">
                        <div>
                            <h2 class="text-green">Employee Login</h2>
                        </div>
                        <div class="container-fluid">
                            <div class="mt-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <div>
                                    <input id="email" type="email" class="form-control py-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Company Emain">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                    <input id="password" type="password" class="form-control py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </main>
                    <div class="mx-3">
                        <h5 class="text-uppercase">problem in singing up</h5>
                    </div>
                    <div class="mx-3 my-2">
                        <a href="#" class="text-uppercase text-green">reset password</a> <span class="text-uppercase">or call our support</span>
                    </div>
                    <div class="mx-3">
                        <span class="text-uppercase">line:</span> <a href="#" class="text-green">+923333321</a>
                    </div>
                    <div class="row">
                       <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end text-uppercase px-5 py-3">
                            {{ __('Login') }}
                        </button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
        {{--  --}}
    </div>
</div>
{{-- @endsection --}}

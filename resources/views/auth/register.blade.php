{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    .full-height {
        height: 100%;
    }

    .page1 {
        background-color: #19944f;
        display: block;
    }

    .page2 {

        background-color: #ffff;
        display: block;
    }

    .page1,
    ::after {
        background-image: url('images/watermark.png');
        background-repeat: no-repeat;
        background-position: bottom 50px left 380px;
    }

    .page2,
    ::after {
        content: "";
        background-image: url('images/watermark.png');
        background-repeat: no-repeat;
        background-position: bottom 46px right 377px;
        z-index: 0;
        opacity: 0.9;
        /* position: absolute; */

    }

    @media all and (max-width: 1900px) {
        .left {
            position: absolute;
            left: 0;
            top: 64px;
            bottom: 0;
            width: 255px;
            background-color: #47AF7C;
            position: fixed;
            height: 100%;
            overflow: hidden;
        }

        .page1,
        ::after {
            /* background-image: url('images/watermark.png'); */
            background-repeat: no-repeat;
            background-position: bottom 50px left 136px;
        }

        .page2,
        ::after {
            content: "";
            background-image: url('images/watermark.png');
            background-repeat: no-repeat;
            background-position: bottom 46px right 136px;
            z-index: 0;
            /* opacity: 0.5; */
            /* position: absolute; */

        }
    }

    .btn-primary {
        background-color: #19944f;
        border: none;
    }

    .btn-primary:hover {
        background-color: #19944f;
    }

    .text-green {
        color: #19944f;
    }

    /* file upload */
    .file-upload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        width: 100px;
        height: 100px;
        background-color: #eee;
        border: 2px solid #ddd;
        text-align: center;
        padding: 10px;
    }

    .file-upload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        height: 100%;
        width: 100%;
    }
</style>
<div class="container-fluid full-height">
    <div class="row full-height">
        <div class="col-6 page1">
            <nav class="m-3"><img src="{{ asset('images/logo.png') }}" alt="" width="90"></nav>
            <div class="text-center" style="margin-top: 25%">
                <h2 class="text-light">Already Signed Up?</h2>
                <h5 class="text-dark">Click here and access your employer portal and find the right matches for your
                    workplace with ease!</h5>
                <a href="{{ url('login') }}" class="btn btn-light text-uppercase text-green px-5 py-2 mt-3">log
                    in</a>
                <p class="text-light text-uppercase mt-3">PROBLEM SIGNING UP?</p>
                <p class="text-light text-uppercase"><a href="#" class="text-light">RESET PASSWORD</a> OR CALL OUR
                    SUPPORT LINE: <a href="#" class="text-light">+923333217934</a>
                </p>
            </div>
        </div>
        {{--  --}}
        <div class="col-6 page2">
            <div style="margin-top: 10%">
                <main class="text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <h2 class="text-green">Employer Sign Up</h2>
                            <h5>*No credit card required</h5>
                            <div class="file-upload btn btn-primary">
                                <span><img src="{{ asset('images/profile.png') }}" alt=""></span>
                                <input type="file" class="upload" id="upload-btn" name="file">
                            </div>
                            <h5 class="text-uppercase">CHOOSE COMPANY LOGO FROM <span class="text-green">GALLERY</span>
                            </h5>
                        </div>
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div>
                                    <input id="name" type="text"
                                        class="form-control py-3 @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Company Name" style="opacity: 0.9">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div>
                                    <input id="email" type="email"
                                        class="form-control py-3 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Company Email" style="opacity: 0.9">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- start --}}
                            <div class="row mb-3">
                                <div>
                                    <input id="phone" type="text"
                                        class="form-control py-3 @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone"
                                        style="opacity: 0.9">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                    <select name="city" id="city" value="{{ old('city') }}" required
                                        autocomplete="email" placeholder="City"
                                        class="form-control py-3 @error('city') is-invalid @enderror"
                                        style="opacity: 0.9">
                                        <option value="">Area</option>
                                        <option value="yangon">Yangon</option>
                                        <option value="mandalay">Mandalay</option>
                                    </select>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>

                                    <select name="area" id="area" value="{{ old('area') }}" required
                                        class="form-control py-3 @error('area') is-invalid @enderror"
                                        style="opacity: 0.9">
                                        <option value="">City</option>
                                        <option value="yangon">Yangon</option>
                                        <option value="mandalay">Mandalay</option>
                                    </select>


                                    @error('area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div>
                                    <textarea name="address" id="address" cols="3" rows="3" placeholder="Address" class="form-control"
                                        style="opacity: 0.9"></textarea>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end --}}

                            <div class="row mb-3">
                                <div class="col-6">
                                    <input id="password" type="password"
                                        class="form-control py-3 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Password"
                                        style="opacity: 0.9">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input id="password-confirm" type="password" class="form-control py-3"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password" style="opacity: 0.9">
                                </div>
                            </div>
                            <div class="row float-end">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary text-uppercase px-5 py-3">
                                        {{ __('Containue') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
        {{--  --}}
    </div>
</div>
<script>
    $('.upload').each(function() {
        var $t = $(this),
            $span = $t.siblings('span'),
            value;
        $t.change(function() {
            value = $t.val();
            $span.text(value);
        });
    });
</script>
{{-- @endsection --}}

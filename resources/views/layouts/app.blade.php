<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>raabtaa</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    html {
        height: 100%;
    }

    .top {
        position: absolute;
        left: 0;
        right: 0;
        height: 92px;
    }

    .bottom {
        left: 255;
        height: 92px;
        /* background-color: #47745E; */
        z-index: -1;
    }

    .left {
        position: absolute;
        left: 0;
        top: 70px;
        bottom: 0;
        width: 255px;
        background-color: #47AF7C;
        position: fixed;
        height: 100%;
        overflow: hidden;
        box-sizing: border-box;
    }

    .main {
        position: absolute;
        left: 255px;
        top: 70px;
        right: 0;
        bottom: 0;
        flex-grow: 1;
    }

    /* media */
    @media screen and (max-width: 1440px) {
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
    }

    .secondary {
        background-color: #47745E;
    }

    .fixedbutton {
        position: fixed;
        bottom: 22px;
        left: 15px;
        margin-left: 10px;
    }

    input,
    textarea {
        border: 1px solid #eeeeee;
        box-sizing: border-box;
        margin: 0;
        outline: none;
        padding: 10px;
    }

    input[type="button"] {
        -webkit-appearance: button;
        cursor: pointer;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .input-group {
        clear: both;
        margin: 15px 0;
        position: relative;
    }

    .input-group input[type='button'] {
        background-color: #eeeeee;
        min-width: 38px;
        width: auto;
        transition: all 300ms ease;
        margin: 10px;
    }

    .input-group .button-minus,
    .input-group .button-plus {
        font-weight: bold;
        height: 38px;
        padding: 0;
        width: 38px;
        position: relative;
    }

    .input-group .quantity-field {
        position: relative;
        height: 38px;
        left: -6px;
        text-align: center;
        width: 62px;
        display: inline-block;
        font-size: 13px;
        margin: 0 0 5px;
        resize: vertical;
    }

    .button-plus {
        left: -13px;
    }

    input[type="number"] {
        -moz-appearance: textfield;
        -webkit-appearance: none;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light secondary shadow-sm"
            style="position:fixed; overflow:auto; width:100%; z-index: 1; overflow-y: scroll;">
            <a class="navbar-brand mx-3" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Laravel') }} --}}
                <img src="{{ asset('images/logo.png') }}" alt="" width="90">
            </a>
            <div class="container">
                <h1 class="text-light" style="margin-left:200px">
                    @yield('status')
                </h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item d-inline-flex"
                                style="border: solid; border-radius:5px; background-color:rgba(0, 0, 0, 0.25);">
                                <img src="{{ asset('images/profile.png') }}" width="33" style="margin-right:30px"
                                    alt="">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="margin-right:20px">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="left">
            <div class="fixedbutton">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('images/logout.png') }}" width="32" class="mx-2" alt="">
                    <span class="text-uppercase text-light">log out</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @yield('side')
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('javascript')
</body>

</html>

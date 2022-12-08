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
    .top {
        position: absolute;
        left: 0;
        right: 0;
        height: 92px;
    }

    .left {
        position: absolute;
        left: 0;
        top: 70px;
        bottom: 0;
        width: 255px;
        background-color: #47AF7C;
    }

    .main {
        position: absolute;
        left: 178px;
        top: 92px;
        right: 0;
        bottom: 0;
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
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light secondary shadow-sm">
            <a class="navbar-brand mx-3" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Laravel') }} --}}
                <img src="{{ asset('images/logo.png') }}" alt="" width="90">
            </a>
            <div class="container">
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
</body>

</html>

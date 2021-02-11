<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:rgb(20, 82, 82);">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="#" style="font-size: 24px; text-decoration:none; font-family: fraunces; color: rgb(230, 230, 230); color: white;
    text-shadow: 2px 2px 4px #000000;">
<b>System Administrator's and Director's Dashboard</b></div>
                </a>
                <!--
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto " style="list-style: none; display: flex; margin-top: -40px; margin-left: 590px; font-weight: 400;
                    font-family: fraunces;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="margin-right: 20px;">
                                <a class="nav-link" href="{{ route('login') }}" style="text-decoration: none; color:rgb(20, 46, 32);; font-size: 20px; color: rgb(255, 204, 255);">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="margin-left: 40px;">
                                    <a class="nav-link" href="{{ route('register') }}"  style="text-decoration: none;  color: rgb(20, 46, 32); font-size: 20px; color: rgb(255, 204, 255);">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="float: right; padding-left: 100px;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:rgb(0, 179, 179); text-decoration: none; font-family: fraunces; margin-top: 5px; text-shadow: 2px 2px 4px #000000;">
                                        {{ __('Click Here To Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <hr>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covid 19 Update System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background:rgb(20, 82, 82);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                font-weight: 1000;
            }

            .title {
                font-size: 84px;
            }
                        .links > a {
                            border:1px solid black;
                            border-radius: 5px;
                            background:rgb(0, 179, 179);
                            padding: 5px;
                            font-family: fraunces;
                color:white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > p {
                font-family: fraunces;
                color:white;
                padding: 0 25px;
                font-size: 13px;
                font-weight:600;
                letter-spacing: .1rem;
                text-decoration: none;
                padding: 0 25px;
                font-size: 13px;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background:rgb(20, 82, 82);">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" >
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="padding: 5px;
    text-shadow: 2px 2px 4px #000000;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="padding: 5px;
    text-shadow: 2px 2px 4px #000000;">Registration</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="padding-bottom: 75px; margin-top: -80px; font-family: fraunces; color:white;
    text-shadow: 2px 2px 4px #000000;">
                    Covid-19 update system
                </div>
                <div style="font-family: sans-serif;color:white; font-weight: 600; font-family: fraunces">
                    <h2 style="color: white;
    text-shadow: 2px 2px 4px #000000;">Web System Users;</h2>
                </div>

                <div class="links">
<p>System Administrator</p>
<p>Directors</p>
                    <!--
                    <a href="https://laravel-news.com">Covid-19 Officer</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                -->
                </div>
            </div>
        </div>
    </body>
</html>

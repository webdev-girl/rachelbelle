<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rachel Belle</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/belle.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                background-color: violet;
                color: #636b6f;
                /* font-family: 'Nunito', sans-serif; */
                font-family: 'Lora', serif;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a href="https://laravel.com/docs">Find a store</a>
                    <a href="https://laracasts.com">Help</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Clearance</a>
                    <a href="https://forge.laravel.com">New arrivals</a>
                    <a href="https://github.com/laravel/laravel">Shopping cart</a>
                </div>

                <div class="title m-b-md">
                    Rachel Belle
                </div>


            </div>

        </div>
      <div id="belle-banner-image">
          <img src="/images/bellebanner.jpg" alt="banner"/>
      </div>
    </body>
</html>

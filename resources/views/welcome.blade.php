<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rachel Belle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous8/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/belle.css')}}">
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <style>
            html, body {
            font-family: 'Lora', serif;
            height: 100vh;
            }
        </style>
    </head>
    <body>
        <div class="links">
            <div class="dropdown links">
                <button class="dropbtn">New arrivals</button>
                <div class="dropdown-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="https://nova.laravel.com">Blouses</a>
                                <a href="https://nova.laravel.com">Bottoms</a>
                                <a href="https://nova.laravel.com">Dresses</a>
                            </div>
                            <div class="col-sm">
                                <p>Recieve new stock daily</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="dropbtn">Clearance</button>
                <div class="dropdown-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="https://nova.laravel.com">Blouses</a>
                                <a href="https://nova.laravel.com">Bottoms</a>
                                <a href="https://nova.laravel.com">Dresses</a>
                            </div>
                            <div class="col-sm">
                                    <p>Up to 30%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="dropbtn">Point rewards</button>
                <div class="dropdown-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="https://nova.laravel.com">Sign up</a>
                                <a href="https://nova.laravel.com">Rewards</a>
                            </div>
                            <div class="col-sm">
                                <p>Recieve 10% off when you reach 500 points</p>
                                <p> for more details on how you save</p>
                                <p> sign up to become a VIP and start collecting today</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" position-ref">
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
            </div>
        </div>
        <div id="belle-logo-image">
            <img src="/images/logorb.jpg" alt="logo" width="100" height="100"/>
        </div>
        <div class="belle-title">
            <h2 class="title">Rachel Belle Boutiques</h2>
        </div>
        <div class="content">
            <div>
                <img src="/images/girl-umbrella.jpg" alt="banner" width="1050px" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="/images/polka-dots.jpg" style="width:80%"  height="300">
                          <div class="text">Office</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="/images/model-white.jpg" style="width:80%"  height="300">
                            <div class="text">Casual</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="/images/dress.jpg" style="width:80%" height="300">
                          <div class="text">Dressy</div>
                        </div>

                    </div>
                    <br/>
                    <div style="text-align:center">
                       <span class="dot"></span>
                       <span class="dot"></span>
                       <span class="dot"></span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="/images/polka-dots.jpg" style="width:80%"  height="300">
                          <div class="text">Office</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="/images/flouncy-blouse.jpg" style="width:80%"  height="300">
                            <div class="text">Casual</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="/images/beaded-neckalace.jpg" style="width:80%" height="300">
                          <div class="text">Dressy</div>
                        </div>

                    </div>
                    <br/>
                    <div style="text-align:center">
                       <span class="dot"></span>
                       <span class="dot"></span>
                       <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div>

                    </div>
                </div>
                <div class="col-sm"> --}}
                    {{-- <div class="content">
                        <div id="belle-banner-image">
                            <img src="/images/frontbanner.jpg" alt="banner" width="100%" />
                        </div>
                    </div> --}}
                {{-- </div>
                <div class="col-sm">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="/images/polka-dots.jpg" style="width:100%"  height="300">
                          <div class="text">Office</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="/images/model-white.jpg" style="width:100%"  height="300">
                            <div class="text">Casual</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="/images/dress.jpg" style="width:100%" height="300">
                          <div class="text">Dressy</div>
                        </div>

                    </div>
                    <br/>
                    <div style="text-align:center">
                       <span class="dot"></span>
                       <span class="dot"></span>
                       <span class="dot"></span>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}
         @include('partials.footer')
        <script type="text/javascript" src="{{url::asset('js/coolstuff.js') }}" ></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{url::asset('js/coolstuff.js') }}" ></script>
        <script src="{{ mix('js/bootstrap.js') }}"></script>

         <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>

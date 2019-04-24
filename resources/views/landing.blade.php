<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{csrf_token()}}"> --}}
        <title>Rachel Belle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous8/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/belle.css')}}">
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: violet;
                color: #636b6f;
                font-family: 'Lora', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
            }

            .full-height {
                height: 100vh;
            }

           .small-text {
               font-size: 14px;
           }
           .product-box {
               border: 1px solid #cccccc;
               padding: 10px 15px;
           }
            .hero-section {
               /* height: 30vh; */
               background: violet;
               align-items: center;
               margin-bottom: 20px;
               margin-top: 20px;
           }
            .title {
               font-size: 60px;
               color: #ffffff;
           }

        </style>
    </head>
    <body>
        {{-- <div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
            <h2 class="title">Welcome to Rachel Belle Boutiques</h2>
        </div> --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel links">
            <div class="container">
                <router-link :to="{name: 'home'}" class="navbar-brand">Rachel Belle</router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
                        <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
                        {{-- <span v-if="isLoggedIn">
                            <router-link :to="{ name: 'userboard' }" class="nav-link" v-if="user_type == 0"> Hi, {{name}}</router-link> --}}
                            {{-- <router-link :to="{ name: 'admin' }" class="nav-link" v-if="user_type == 1"> Hi, {{name}}</router-link>
                        </span>  --}}
                        <li class="nav-link" v-if="isLoggedIn" @click="logout"> Logout</li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
            <h2 class="title">Welcome to Rachel Belle Boutiques</h2>
        </div>
        {{-- <div id="belle-banner-image">
            <img src="/images/grey.jpg" alt="banner" width="1200" height="350"/>
        </div> --}}
            <div class="container belle-banner">
                 <div class="row">
                     <div class="col-sm">
                         <div id="belle-logo-image">
                             <img src="/images/logorb.jpg" alt="logo" width="150" height="150"/>
                         </div>
                     </div>
                     <div class="col-sm">
                         <div class="content">
                             {{-- <div class="title m-b-md">
                                 Rachel Belle
                             </div> --}}
                             <div id="belle-banner-image">
                               <img src="/images/bellebanner.jpg" alt="banner" width="500" height="250"/>
                           </div>
                         </div>
                     </div>
                     <div class="col-sm">
                         <div class="slideshow-container">

                             <div class="mySlides fade">
                               <div class="numbertext">1 / 3</div>
                               <img src="/images/polka-dots.jpg" style="width:100% "width="220" height="300">
                               <div class="text">Office</div>
                             </div>

                             <div class="mySlides fade">
                               <div class="numbertext">2 / 3</div>
                               <img src="/images/model-white.jpg" style="width:100%" width="220" height="300">
                                 <div class="text">Casual</div>
                             </div>

                             <div class="mySlides fade">
                               <div class="numbertext">3 / 3</div>
                               <img src="/images/dress.jpg" style="width:100%" width="220" height="300">
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
             <div id="app">
                 <app></app>
             </div>
             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
             {{-- <script type="text/javascript" src="{{url::asset('js/coolstuff.js') }}" ></script> --}}
             <script src="{{ mix('js/bootstrap.js') }}"></script>
             <script src="{{ mix('js/app.js') }}"></script>
        @include('partials.footer')
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

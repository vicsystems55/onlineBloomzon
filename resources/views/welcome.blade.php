<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BloomZon</title>

        <!-- Fonts -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">"
  />
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('/asset/img/tttt.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: left center;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                position:relative;
            }
            
            body::before{
                content:"";
                position:absolute;
                width:100%;
                height:100%;
                background-color: black;
                opacity:0.7;
            
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
                font-size: 66px;
                color: white;
            }
            
            .tit{
                
                background-color: white;
                padding: 5px;
                width:150px;
                height:120px;
                margin: auto;
            }

            .links > a {
                color: white;
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
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                 <div class="tit animate__animated animate__slideInLeft">
                   <img width="100" height="100" src="{{asset('asset')}}/img/bloomzon.png">
                </div>
                <div class="title animate__animated animate__slideInRight">
                    BloomZon
                </div>

                <div id="example"></div>
                
                <div class="col-md-5 mx-auto">
                    
                    <a href="/login" class="btn btn-success btn-block shadow">Login</a>
                
                    
                    <a href="/register" class="btn btn-warning btn-block shadow">Create Account</a>
                </div>\
                <p></p>

                <div class="links">
                    <a class="animate__animated animate__fadeInUp animate__delay-1s"  href="">Bags</a>
                    <a class="animate__animated animate__fadeInUp animate__delay-3s" href="">Shoes</a>
                    <a class="animate__animated animate__fadeInUp animate__delay-4s" href="">Cloths</a>
                    <a class="animate__animated animate__fadeInUp animate__delay-5s" href="">Accessories</a>
                    <a class="animate__animated animate__fadeInUp animate__delay-5s" href="">And More</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>

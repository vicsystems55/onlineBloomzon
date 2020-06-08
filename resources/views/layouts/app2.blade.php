<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('asset')}}/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/ui.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/responsive.css">
    <!-- Latest compiled and minified CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.4-build.3588/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Buyer's Dashboard</title>
    
    <style>
        /* Fixed sidenav, full height */
        .sidenav {
          height: 100%;
          width: auto;
          color: #02499B;
          line-height: 40px;
          padding: 10px;
        }
        
        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 16px;
          color: #02499B;
          display: block;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          cursor: pointer;
          outline: none;
          border-bottom: solid 1px #f2f2f2;
        }
        
        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
          color: #fff;
          background-color: #02499B;
          /*border-radius: 5px;*/
        }
        
        /* Main content */
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
          font-size: 20px; /* Increased text to enable scrolling */
          padding: 0px 10px;
        }
        
        /* Add an active class to the active dropdown button */
        .active {
          background-color: #02499B;
          color: white;
          border-radius: 5px;
        }

        .sidenav .active {
          background-color: #02499B;
          color: white;
          border-radius: 5px;
        }
        
        a .active {
          background-color: #02499B;
          color: white;
          border-radius: 5px;
        }

        a .act {
          background-color: #02499B;
          color: red;
          border-radius: 5px;
        }
        
        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
          display: none;
          background-color: #f2f2f2;
          padding-left: 8px;
        }
        
        /* Optional: Style the caret down icon */
        .fa-caret-down {
          float: right;
          padding-right: 8px;
          padding-top: 20px;
        }
        .navbar{
          display: none;
        }
        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {

          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 16px;}
        }

        @media only screen and (max-width: 838px) {
         
          .sidenav {display: none;}
          .navbar{
            display: block;
          }

          
        }
    </style>
</head>

<body style="background-color: #fff;">

    <header class="section-header">

        <section class="header-top" style="background-color: #fff !important; box-shadow: 2px 2px 4px #f2f2f2;">
            <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <a href="/" class="">
                            <img class="logo" src="{{asset('asset')}}/img/bloomzon.png" width="120" height="auto" alt="logo">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-md-2 d-flex order-3" style="padding-left: 80px !important;">
                        <div class="top-view" style="border-right: none !important;">
                            <h5 style="color: #02499B;"><b>Buyers ID:</b></h5>
                            <h5 style="color: #02499B;"><b>Last Login:</b></h5>
                            <h5 style="color: #02499B;"><b>Location:</b></h5>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex order-3">
                        <div class="top-view" style="border-right: none !important;">
                            <h5 style="color: #02499B;"><b>{{Auth::user()->buyersId}}</b></h5>
                            <h5 style="color: #02499B;"><b>{{Auth::user()->updated_at->diffForHumans()}}</b></h5>
                            <h5 style="color: #02499B;"><b>Abuja, Nigeria</b></h5>
                        </div>
                    </div>
                    <!-- col.// -->
                    <div class="col-md-6 order-2 order-lg-3">
                        <div class="widgets-wrap d-flex justify-content-end">
                            
                            
                          <div class="p-5 col-4 font-weight-bold ">

                            <?php 

                          $user_id = auth()->user()->id; // or any string represents user identifier
                          $cartThings = Cart::session($user_id)->getContent();

                          $noItems = $cartThings->count();

                             ?>
                           <a class="btn btn-lg btn-primary" href="/cart">
                            <i class="fas fa-shopping-cart"></i>
                           My Cart:{{$noItems}}</a> 
                          </div>
                          
                            <!-- widget  dropdown.// -->
                            <div class="widget-header ml-3 text-center">

                                <a href="#">
                                    <img src="{{asset('asset')}}/avatar/{{Auth::user()->gender}}.png" class="img img-circle m-auto" width="80" height="80">
                                    <p class="text-center">{{Auth::user()->name}}</p>
                                </a>
                            </div>
                        </div>
                        <!-- widgets-wrap.// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>

    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
   
  </div>
</nav>

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pb-5">
                <div class="card p-0">
                    <div class="sidenav p-0">
                      
                        <h2 class="text-center p-3">MENU</h2>
                        <a  class="
                        {{ (request()->is('dashboard')) ? 'active' : '' }}

                        {{ (request()->is('dashboard/*')) ? 'active' : '' }}

                         act" href="/dashboard" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a class="
                        {{ (request()->is('profile')) ? 'active' : '' }}

                        {{ (request()->is('profile/*')) ? 'active' : '' }}

                          " href="/profile"><i class="fa fa-user-circle"></i> Profile</a>
                        <a class="
                        {{ (request()->is('purchaseHistory')) ? 'active' : '' }}

                        {{ (request()->is('purchaseHistory/*')) ? 'active' : '' }}

                        " href="/purchaseHistory"><i class="fas fa-clock"></i> Purchase History</a>
                        <a class="{{ (request()->is('notifications')) ? 'active' : '' }}" href="/notifications"><i class="fa fa-bell"></i> Notifications</a>
                        <a class="{{ (request()->is('favourites')) ? 'active' : '' }}" href="/favourites"><i class="fa fa-heart"></i> Favourites</a>
                        <a class="{{ (request()->is('bloomzonProducts')) ? 'active' : '' }}" href="/bloomzonProducts"><i class="fas fa-shopping-cart"></i> Bloomzon Products</a>
                        <a class="{{ (request()->is('paymentHistory')) ? 'active' : '' }}" href="/paymentHistory"><i class="fas fa-credit-card"></i> Payment History</a>
                        <a class="
                        {{ (request()->is('messages')) ? 'active' : '' }}

                        {{ (request()->is('messages/*')) ? 'active' : '' }}

                        " href="/messages"><i class="fas fa-envelope"></i> Messages</a>
                        <a class="{{ (request()->is('points')) ? 'active' : '' }}" href="/points"><i class="fa fa-dot-circle"></i> Points</a>
                        <button class="dropdown-btn
                        {{ (request()->is('allAds')) ? 'bg-primary text-light' : '' }}

                        {{ (request()->is('postNewAds')) ? 'bg-primary text-light' : '' }}
                        "><i class="

                          fas fa-bullhorn"></i> Adverts
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="dropdown-item {{ (request()->is('allAds')) ? 'active' : '' }}" href="/allAds"> All Ads</a>
                            <a class="dropdown-item {{ (request()->is('postNewAds')) ? 'active' : '' }}" href="/postNewAds"> Post New Ads</a>
                        </div>
                        <a href="/contactAdmin"
                        class="{{ (request()->is('contactAdmin')) ? 'active' : '' }}" 
                        ><i class="fa fa-envelope"></i> Contact Admin</a>
                        <button class="dropdown-btn

                        {{ (request()->is('dispute')) ? 'bg-primary text-light' : '' }}

                         {{ (request()->is('feedback')) ? 'bg-primary text-light' : '' }}

                         {{ (request()->is('reviews')) ? 'bg-primary text-light' : '' }}

                        "><i class="fas fa-star-half-alt"></i>  Service Rating
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="dropdown-item {{ (request()->is('dispute')) ? 'active' : '' }}" href="/dispute"> Dispute</a>
                            <a class="dropdown-item {{ (request()->is('feedback')) ? 'active' : '' }}" href="/feedback"> Feedback</a>
                            <a class="dropdown-item {{ (request()->is('reviews')) ? 'active' : '' }}" href="/reviews"> Reviews</a>
                        </div>

                        <button class="dropdown-btn
                        {{ (request()->is('becomeSeller')) ? 'active' : '' }}
                        "><i class="fas fa-upload"></i>  Upgrade
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="dropdown-item {{ (request()->is('becomeSeller')) ? 'active' : '' }}" href="/becomeSeller"> Become a Seller</a>
                        </div>
                       

                         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-dot-circle"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                @yield('content');
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{asset('asset')}}/js/js.js"></script>
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Xeedus
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>

                        @include('layouts.cate')

                    </li>
                </ul>




                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        @if(Auth::user()->role == 1)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Admin <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/categories') }}"><i class="fa fa-btn fa-sign-out"></i>Categories</a></li>
                                    <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-sign-out"></i>Users</a></li>
                                    <li><a href="{{ url('/videos') }}"><i class="fa fa-btn fa-sign-out"></i>videos</a></li>
                                </ul>
                            </li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->voornaam }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">User menu</li>
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-out"></i>Mijn Profiel</a></li>
                                <li><a href="{{ url('/products/') }}"><i class="fa fa-btn fa-sign-out"></i>Mijn Producten</a></li>
                                <li role="separator" class="divider"></li>
                                <!--  //admin -->
                                <li class="dropdown-header">Author menu</li>
                                <li><a href="{{ url('profile/courses') }}"><i class="fa fa-btn fa-sign-out"></i>Mijn videos</a></li>
                                <!-- <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Mijn stream</a></li>-->
                                <li><a href="{{ url('course/upload/') }}"><i class="fa fa-btn fa-sign-out"></i>Upload</a></li>

                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/credits/') }}"><i class="fa fa-btn fa-sign-out"></i>Credits</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>


                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="footer" style="background-color: #F8F8F8; border: 1px solid #E7E7E7;">
        <div class="container">

            <div class="col-lg-3">
                <ul>
                    <li><h2>Social Media</h2></li>
                    <ul>
                        <li><a href="{{ url('/') }}">Twitter</a></li>
                        <li><a href="{{ url('/') }}">Google+</a></li>
                        <li><a href="{{ url('/') }}">Facebook</a></li>
                    </ul>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul>
                    <li><h2>Our Services</h2></li>
                    <ul>
                        <li><a href="{{ url('/support/') }}">support</a></li>
                        <li><a href="{{ url('/faq/') }}">FAQ</a></li>
                        <li><a href="{{ url('/partner/') }}">Partner Program</a></li>
                        <li><a href="{{ url('/contact/') }}">Contact</a></li>
                    </ul>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul>
                    <li><h2>About Us</h2></li>
                    <ul>
                        <li><a href="{{ url('/privacy-policy/') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/terms-and-conditions/') }}">Terms And Conditions</a></li>
                        <li><a href="{{ url('/sitemap/') }}">Sitemap</a></li>
                    </ul>
                </ul>
            </div>
            <hr>

            <p class="text-muted credit">Example courtesy <a href="">Deveron</a> and <a href="">Reniers</a>.</p>

        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {

            $("ul.menu > li").css("color", "red");
            $("li ul li.sub").css("color", "blue")
            $(".sub").hide();

            $("ul.menu li").hover(

                function() {
                    $(".sub", this).show();
                }, function() {
                    $(".sub", this).hide();
                }

            );

        });
    </script>
</body>
</html>

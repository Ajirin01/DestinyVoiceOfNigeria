<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('auth/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/main.css')}}">
    <!-- Title -->
    <title>Destiny &amp; Voice of Nigeria</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('site/img/core-img/destiny-logo.png')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('site/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a style="transform: scale(.7); margin-left: -50px" href="index.html"><img src="{{asset('site/img/core-img/destiny-logo.png')}}" alt=""></a>
                            </div>
                            
                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                        @guest
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            @if (Route::has('register'))
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                        @else
                                        <ul>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                        @endguest
                                </div>
                                
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="#" method="post">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('site/img/core-img/destiny-logo.png')}}" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Discover Nigeria</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Know About Nigeria</a></li>
                                                <li><a href="index.html">Invest in Nigeria</a></li>
                                                <li><a href="catagories-post.html">Political News</a></li>
                                                <li><a href="single-post.html">Beauty and Health</a></li>
                                                <li><a href="about.html">Business Enhancement</a></li>
                                                <li><a href="contact.html">Inspiration</a></li>
                                                <li><a href=""> Empowerment Project</a></li>
                                                <li><a href="index.html">Tourism Events</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="catagories-post.html">Oil and Gas</a></li>
                                                <li><a href="single-post.html">Agro Production</a></li>
                                                <li><a href="about.html">Food Processing</a></li>
                                                <li><a href="contact.html">Solid Meterials</a></li>
                                                <li><a href="">Other Interesting Reserves</a></li>
                                                <li><a href="">International Partnership</a></li>
                                                <li><a href="">Nigeria Events</a></li>
                                                <li><a href="">Career</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="">Place your Adverts</a></li>
                                                <li><a href="index.html">Made in Nigeria Products</a></li>
                                                <li><a href="catagories-post.html">Eminent Nigeria Profile</a></li>
                                                <li><a href="single-post.html">Eminent Disapora Profile</a></li>
                                                <li><a href="about.html">Nigeria Regisied News</a></li>
                                                <li><a href="contact.html">Disapora Subcontract</a></li>
                                                <li><a href="">join our Organization</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="{{asset('site/img/bg-img/23.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Nigeria Events/a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="{{asset('site/img/bg-img/24.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Politics News</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

        @yield('auth_content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img style="width: 250px; height: 70px" src="{{asset('site/img/core-img/destiny-logo.png')}}" alt=""></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                                <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                                <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Politics</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Featured</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Motorsport</a></li>
                                <li><a href="#">Horseracing</a></li>
                                <li><a href="#">Equestrian</a></li>
                                <li><a href="#">Sailing</a></li>
                                <li><a href="#">Skiing</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">FAQ</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Aviation</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Traveller</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">+More</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Autos</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i></a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->


    <!-- ##### All Javascript Files ##### -->

    
    <!-- jQuery-2.2.4 js -->
    

    <script src="{{asset('site/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('site/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('site/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('site/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('site/js/active.js')}}"></script>
    <!--===============================================================================================-->
    {{-- <script src="{{asset('auth/vendor/bootstrap/js/popper.js')}}"></script> --}}
    
    <script src="{{asset('auth/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('auth/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('auth/js/main.js')}}"></script>
</body>
</html>
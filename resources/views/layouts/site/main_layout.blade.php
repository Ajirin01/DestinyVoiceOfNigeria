<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
                            <div class="logo" style="padding-top: 30px">
                                <a style="transform: scale(.7); margin-left: -140px" href="index.html" style="width: 70%;">
                                    <div style="width: 100%">
                                            <img style="width: 100%" src="{{asset('site/img/core-img/destiny_logo2.png')}}">
                                            <div style="font-family: Brush Script Std; color: #24e600;
                                            position: relative;
                                            top: -45px;
                                            left: 27%;
                                            font-size: 2rem;
                                            font-weight: 100;
                                            ">...... the authentic global voice for  <i  style="font-family: Monotype Corsiva; font-weight: 800; color: #24e600">N</i>igeria ......</div>
                                    </div>
                                </a>
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
                                                <a style="color: rgb(34, 2, 34)" class="dropdown-item" href="{{ route('logout') }}"
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
                        <div class="logo" style="width: 100%; padding-top: 20px; padding-left: 60px">
                            <a href="index.html" style="width: 100%;">
                                <div style="width: 100%">
                                        <img style="transform: scale(1.8)" src="{{asset('site/img/core-img/destiny_logo2.png')}}">
                                        <div style="font-family: Brush Script Std; color: #24e600;
                                        position: relative; 
                                        width: 150%;
                                        top: -5px;
                                        left: 4%;
                                        font-size: .85rem;
                                        ">...the authentic global voice for <i  style="font-family: Monotype Corsiva; font-weight: 800; color: #24e600">N</i>igeria...</div>
                                </div>
                            </a>
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
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="#">Discover Nigeria</a></li>
                                    <li><a href="#">Business Opportunities</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="/articles/know-about-nigeria">Lifestyles</a></li>
                                                <li><a href="/articles/invest-in-nigeria">Nutrition & Health</a></li>
                                                <li><a href="/articles/know-about-nigeria">Nigerians at Home Achievers</a></li>
                                                <li><a href="/articles/nigerians-at-home-achievers">Nigerians in Diaspora Achievers</a></li>
                                                <li><a href="/articles/political-new">Notable Profiles</a></li>
                                                <li><a href="/articles/beauty-and-health">Regional Updates</a></li>
                                                <li><a href="/articles/business-enhancement">Disapora Updates</a></li>
                                                <li><a href="/articles/inspiration">Global Updates</a></li>
                                                <li><a href="/articles/empowerment-project"> Eminent Disapora Profile</a></li>
                                                <li><a href="/articles/tourism-events">Tribes & Culture</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="catagories-post.html">Beauty & fashion</a></li>
                                                <li><a href="single-post.html">Homes & Properties</a></li>
                                                <li><a href="catagories-post.html">Agriculture</a></li>
                                                <li><a href="single-post.html">Mineral Resources</a></li>
                                                <li><a href="about.html">Tourism</a></li>
                                                <li><a href="contact.html">Business Supports</a></li>
                                                <li><a href="">Agriculture</a></li>
                                                <li><a href="">Industrial Development</a></li>
                                                <li><a href="">Made in Nigeria Products</a></li>
                                                <li><a href="">Exclusive Services</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="">Love & Relationships</a></li>
                                                <li><a href="catagories-post.html">Marriage Corner</a></li>
                                                <li><a href="">Promotions</a></li>
                                                <li><a href="/">Invest in Nigeria</a></li>
                                                <li><a href="single-post.html">Not-for-Profits</a></li>
                                                <li><a href="about.html">Humanitarian</a></li>
                                                <li><a href="contact.html">Destiny Nigeria Development Projects "DNDP initiatives</a></li><br><br>
                                                <li><a href="">join our Organization</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="">Family & Parenting</a></li>
                                                <li><a href="catagories-post.html">Career Development</a></li>
                                                <li><a href="">Entertainment</a></li>
                                                <li><a href="/">Sports</a></li>
                                                <li><a href="single-post.html">"DNDP" Initatives</a></li>
                                                <li><a href="about.html">Place Your Adverts</a></li>
                                            </ul>
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

    <!-- ##### main body top starts here ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <!-- ##### left side menu starts here #####  -->
                <div class="col-12 col-md-6 col-lg-4" style="margin-top: 4%; background-color: #5d1d57; padding: 20px 0">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/lifestyles" class="post-catagory">Lifestyles</a>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex ">
                        <div class="post-data">
                            <a href="/articles/nutrition-and-health" class="post-catagory">Nutrition & Health</a>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/beauty-and-fashion" class="post-catagory">Beauty & fashion</a>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/homes-and-properties" class="post-catagory">Homes & Properties</a>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/love-and-relationships" class="post-catagory">Love & Relationships</a>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/marriage-corner" class="post-catagory">Marriage Corner</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/family-and-parenting" class="post-catagory">Family & Parenting</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/career-development" class="post-catagory">Career Development</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/business-development" class="post-catagory">Business Development</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/entertainment" class="post-catagory">Entertainment</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/sports" class="post-catagory">Sports</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/DNDP-initatives" class="post-catagory">"DNDP" Initatives</a>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-data">
                            <a href="/articles/place-your-adverts" class="post-catagory">Place Your Adverts</a>
                        </div>
                    </div>
                    

                </div>
                <!-- ##### left side menu ends here #####  -->
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="right-top-nav">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-12">
                                            <div class="nav">
                                                    <div><a href="{{URL::to('articles/nigerians-at-home-achievers')}}"> Nigerians at Home Achievers</a></div>
                                                    <div><a  href="{{URL::to('articles/nigerians-in-diaspora-achievers/1')}}"> Nigerians in Diaspora Achievers</a></div>
                                                    <div><a href="/articles/know-about-nigeria/1">Notable Profiles </a></div>
                                                    <div><a href="/articles/know-about-nigeria/1"> Regional Updates </a></div>
                                                    <div class=""><a href="/articles/know-about-nigeria/1">Disapora Updates </a></div>
                                                    <div><a href="/articles/know-about-nigeria/1"> Global Updates </a></div>
                                                    <div><a href="/articles/know-about-nigeria/1"> Tribes & Culture </a></div>
                                                    <div ><a href="/articles/know-about-nigeria/1">Agriculture </a></div>
                                                    <div ><a href="/articles/know-about-nigeria/1">Mineral Resources</a></div>
                                                    <div ><a href="/articles/know-about-nigeria/1">Tourism</a></div>
                                                    <div ><a style="padding: 5px 19px" href="/articles/know-about-nigeria/1">Technology Tips</a></div>
                                                    <div ><a style="padding: 5px 19px" href="/articles/know-about-nigeria/1">Business Supports</a></div>
                                                    <div ><a style="padding: 5px 19px" href="/articles/know-about-nigeria/1">Industrial Development</a></div>
                                                    <div><a style="padding: 5px 17px" href="/articles/know-about-nigeria/1">Made in Nigeria Products </a></div>
                                                    <div ><a style="padding: 5px 21px" href="/articles/know-about-nigeria/1">Exclusive Services </a></div>
                                                    <div ><a style="padding: 5px 21px" href="/articles/know-about-nigeria/1">Promotions</a></div>
                                                    <div><a style="padding: 5px 21px"  href="/articles/know-about-nigeria/1">Invest in Nigeria </a></div>
                                                    <div><a style="padding: 5px 20px"  href="/articles/know-about-nigeria/1">Not-for-Profits</a></div>
                                                    <div ><a style="padding: 5px 18px"  href="/articles/know-about-nigeria/1">Humanitarian </a></div>
                                                    <div ><a href="/articles/know-about-nigeria/1">Destiny Nigeria Development Projects "DNDP initiatives</a></div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- ##### Hero Area Start ##### -->
                        <div class="col-md-12">
                        <div class="hero-area">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-12">
                                        <!-- Breaking News Widget -->
                                        <div class="breaking-news-area d-flex align-items-top">
                                            <div class="news-title yellow-rect-box">
                                                <p class="yellow-rect-box">Breaking News</p>
                                            </div>
                                            <div id="breakingNewsTicker" class="ticker">
                                                <ul>
                                                    <li><a href="/articles/know-about-nigeria/1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                                    <li><a href="/articles/know-about-nigeria/1">Welcome to Colorlib Family.</a></li>
                                                    <li><a href="/articles/know-about-nigeria/1">Nam eu metus sitsit amet, consec!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                
                                        <!-- Breaking News Widget -->
                                        <div class="breaking-news-area d-flex align-items-center mt-15">
                                            <div class="news-title title2 yellow-rect-box">
                                                <p class="yellow-rect-box">International</p>
                                            </div>
                                            <div id="internationalTicker" class="ticker">
                                                <ul>
                                                    <li><a href="/articles/know-about-nigeria/1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                                    <li><a href="/articles/know-about-nigeria/1">Welcome to Colorlib Family.</a></li>
                                                    <li><a href="/articles/know-about-nigeria/1">Nam eu metus sitsit amet, consec!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- ##### Hero Area End ##### -->
                    <div class="col-12">
                    @yield('upper-content')
                    </div>

            </div>
        </div>
    </div>
    </div>

    <!-- ##### main body top ends here ##### -->
    <div>
        @yield('lower-content')
    </div>
    </div>

    <!-- ##### Footer Add Area Start ##### -->
    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        <a href="#"><img src="{{asset('site/img/bg-img/footer-add.gif')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

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
                            <h4 class="widget-title">Hot Navs</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Know about Nigeria</a></li>
                                <li><a href="#">Invest in Nigeria</a></li>
                                <li><a href="#">Place your adverts</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Just For You</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Nutrition & Health</a></li>
                                <li><a href="#">Beauty & fashion</a></li>
                                <li><a href="#">Homes & Properties</a></li>
                                <li><a href="#">Love & Relationships</a></li>
                                <li><a href="#">Family & Parenting</a></li>
                                <li><a href="#">Career Development</a></li>
                                <li><a href="#">Business Development</a></li>
                                <li><a href="#">"DNDP" Initatives</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Contacts</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">FaceBook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Linkedin</a></li>
                                <li><a href="#">Google+</a></li>
                                {{-- <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li> --}}
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
                                <li><a href="#">Discover Nigeria</a></li>
                                <li><a href="#">Lifestyles</a></li>
                                <li><a href="#"> Global Updates</a></li>
                                <li><a href="#">Agriculture</a></li>
                                <li><a href="#">Tourism</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Sports</a></li>
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
</body>
</html>
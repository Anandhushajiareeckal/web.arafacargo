<!DOCTYPE html>
<html>

<head>
        <title>Arafa Cargo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{asset('frontend/assets/img/logo/fav.png')}}" type="image/x-icon">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/font-elegant/elegant.css')}}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">


        <!-- Animate Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/media.css')}}">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/theme.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body id="home">
        <!-- Preloader -->
        <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>
        <!-- /.Preloader -->


        <!-- Main Wrapper -->
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            {{-- <div class="col-md-6 col-sm-5">
                                <ul class="list-items fs-10">
                                    <li><a href="#">sitemap</a></li>
                                    <li class="active"><a href="#">Privacy</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> --}}
                            <div class="col-md-12 col-sm-12 fs-12 ">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> +880-1756-390-370 </span> </p>
                            </div>
                        </div>
                    </div>
                    {{-- <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a> --}}
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="#"> <img src="{{asset('frontend/assets/img/logo/logo1.png')}}" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="@yield('home')">
                                            <a href="/"  >Home </a>
                                        </li>
                                        <li class="@yield('about')"> <a href="/about">about</a> </li>
                                        <li class="@yield('service')"> <a href="/service">Service</a> </li>
                                        <li class="@yield('gallery')"> <a href="/gallery">gallery</a> </li>
                                        <li class="@yield('tracking')"> <a href="/tracking"> tracking </a> </li>
                                        {{-- <li> <a href="pricing-plans.html"> pricing </a> </li> --}}
                                        <li class="@yield('contact')"> <a href="/contact"> contact </a> </li>
                                        {{-- <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Blog</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-left.html">Blog Left</a></li>
                                                <li><a href="single-blog.html">Single Post</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >pages </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="get-quote.html"> Quote Page </a></li>
                                                <li><a href="contact-us-2.html"> Contact-2 Page </a></li>
                                                <li><a href="404.html"> Error Page </a></li>
                                                <li><a href="coming-soon.html"> Coming Soon Page </a></li>
                                            </ul>
                                        </li> --}}
                                        <li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            @yield('content')

            <!-- Footer -->
            <footer>
                <div class="footer-main pad-120 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <a href="#"> <img class="logo" alt="#" src="{{asset('frontend/assets/img/logo/logo1.png')}}" />  </a>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">quick links</h2>
                                <ul>
                                    <li> <a href="/about">about</a> </li>
                                    <li> <a href="/service">service</a> </li>
                                    <li> <a href="/gallery">gallery</a> </li>
                                    <li> <a href="/tracking">tracking</a> </li>
                                    <li> <a href="/contact">contact</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">service</h2>
                                <ul>
                                    <li> <a href="/service">Air Freight</a> </li>
                                    <li> <a href="/service">Ocean Freight</a> </li>
                                    <li> <a href="/service">Road Freight</a> </li>
                                    <li> <a href="/service">Warehousing</a> </li>
                                    <li> <a href="/service">Supply Chain</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">get in touch</h2>
                                <ul class="social-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                                </ul>
                                {{-- <ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="{{asset('frontend/assets/img/icons/payment-1.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="{{asset('frontend/assets/img/icons/payment-2.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="{{asset('frontend/assets/img/icons/payment-3.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="{{asset('frontend/assets/img/icons/payment-4.png')}}" /> </a> </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p> © Copyright 2024, All rights reserved </p>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p> Design and <span class="theme-clr fa fa-heart"></span>  by <a href="#" class="main-clr"> Cyenosure </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">
                    <div class="login-wrap text-center">
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>
                        </div>
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login -->

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->
        @yield('script')
        <!-- Main Jquery JS -->
        <script src="{{asset('frontend/assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('frontend/assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap Select JS -->
        <script src="{{asset('frontend/assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
        <!-- OwlCarousel2 Slider JS -->
        <script src="{{asset('frontend/assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>
        <!-- Sticky Header -->
        <script src="{{asset('frontend/assets/js/jquery.sticky.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('frontend/assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
        <!-- Data binder -->
        <script src="{{asset('frontend/assets/plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>

        <!-- Slider JS -->


        <!-- Theme JS -->
        <script src="{{asset('frontend/assets/js/theme.js')}}" type="text/javascript"></script>

    </body>

</html>

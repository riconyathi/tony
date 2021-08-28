<!DOCTYPE html>
<html lang="en" dir="ltr">



    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <!-- Perfect Scrollbar -->
        <link type="text/css" href="{{ asset('front_assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="{{ asset('front_assets/css/app.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('front_assets/css/app.rtl.css')}}" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="{{ asset('front_assets/css/vendor-material-icons.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('front_assets/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css" href="{{ asset('front_assets/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('front_assets/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">

        <!-- ion Range Slider -->
        <link type="text/css" href="{{ asset('front_assets/css/vendor-ion-rangeslider.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('front_assets/css/vendor-ion-rangeslider.rtl.css')}}" rel="stylesheet">

    </head>

    <body class="layout-fixed layout-sticky-subnav">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->
            <div id="header" class="mdk-header bg-dark js-mdk-header m-0" data-fixed data-effects="waterfall">
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar"
                        data-primary>
                        <div class="container">

                            <!-- Navbar toggler -->
                            <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar"
                                type="button" data-toggle="sidebar">
                                <span class="material-icons">short_text</span>
                            </button>


                            <div class="d-flex sidebar-account flex-shrink-0 mr-auto mr-lg-0">
                                <a href="fixed-index.html" class="flex d-flex align-items-center text-underline-0">
                                    <span class="mr-1  text-white">
                                        <!-- LOGO -->
                                        <img src="{{ asset('front_assets/logo.jpg')}}" style="max-height: 3rem;">
                                    </span>

                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>



            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page">
                <div class="page__header  page__header-nav mb-0">
                    <div class="container page__container">
                        <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0 d-none d-md-flex"
                            id="secondaryNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="{{route('index')}}" class="nav-link">Home</a>


                                </li>
                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link">Services</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('project')}}" class="nav-link">Projects</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link">About</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Contact</a>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


                <!-- // END Header -->

                @yield('content')
                <div class="bg-dark text-white" id="footer">
                    <div class="container page__container">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" class="brand d-flex align-items-center mb-4">
                                    <span class="mr-2">

                                    </span>
                                    LEMA
                                </a>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <h5>Student</h5>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="">
                                                <a href="#">Courses</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Take Course</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Profile</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Edit Account</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <h5>Instructor</h5>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="">
                                                <a href="#">Dashboard</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Edit Course</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Instructor Profile</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Quizzes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <h5>Account</h5>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="">
                                                <a href="#">Login</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Sign up</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Edit Account</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Payout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <h5>Contact us</h5>
                                        <p class="text-light">Street Name, Suite 12<br /> Dublin, Ireland</p>

                                        <div class="d-flex ">

                                            <a href="#"
                                                class="btn btn-facebook btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"
                                                class="btn btn-twitter btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"
                                                class="btn btn-secondary btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i
                                                    class="fab fa-github"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->

        </div>
        <!-- // END Header Layout -->

        <!-- jQuery -->
        <script src="{{ asset('front_assets/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('front_assets/vendor/popper.min.js')}}"></script>
        <script src="{{ asset('front_assets/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('front_assets/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('front_assets/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{ asset('front_assets/vendor/material-design-kit.js')}}"></script>

        <!-- Range Slider -->
        <script src="{{ asset('front_assets/vendor/ion.rangeSlider.min.js')}}"></script>
        <script src="{{ asset('front_assets/js/ion-rangeslider.js')}}"></script>

        <!-- App -->
        <script src="{{ asset('front_assets/js/toggle-check-all.js')}}"></script>
        <script src="{{ asset('front_assets/js/check-selected-row.js')}}"></script>
        <script src="{{ asset('front_assets/js/dropdown.js')}}"></script>
        <script src="{{ asset('front_assets/js/sidebar-mini.js')}}"></script>
        <script src="{{ asset('front_assets/js/app.js')}}"></script>






    </body>




</html>
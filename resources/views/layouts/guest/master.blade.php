<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>@yield('title')</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/house-logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png')}}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Modernizr
    ================================================== -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- ====== Header Mobile area ====== -->
    <header class="mobile-header-area bg-nero hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 tb">
                    <div class="mobile-header-block">
                        <div class="menu-area tb-cell">
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg">
                                <div class="menucontent overlaybg"></div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                    <span id="menu-marker"></span>
                                </div><!--/.menuexpandermain-->
                                <div id="mobile-main-nav" class="main-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        <div class="left-content">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.left-content -->
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.menu-area -->
                        <div class="logo-area tb-cell">
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="site-logo" />
                                </a>
                            </div><!-- /.site-logo -->
                        </div><!-- /.logo-area -->
                        <div class="search-block tb-cell">
                            <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                        </div><!-- /.search-block -->
                        <div class="additional-content tb-cell">
                            <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                        </div><!-- /.additional-content -->
                    </div><!-- /.mobile-header-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.mobile-header-area -->

    <!-- ====== Header Top area ====== -->
    <header class="header-area bg-nero hidden-xs hidden-sm">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-md-7 col-sm-7 mobile-center">
                        <div class="site-logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('img/logo_uin.png')}}" alt="site-logo" style="width: 44px; height: 44px;"/>
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-5 col-sm-5 mobile-center">
                        <div class="left-content">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                </li>
                                <li>
                                    <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="trigger-overlay"><i class="fa fa-bars"></i></a>
                                </li> --}}
                            </ul>
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->
    @include('layouts.guest.navbar')

    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Clients</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->

        <!-- Registrar Or Sign In-content -->
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Sign in</a></li>
                    <li><a href="#0">New account</a></li>
                </ul>

                <!-- log in form -->
                <div id="cd-login">
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Remember me</label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width" type="submit" value="Login">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message">
                        <a href="#0">Forgot your password?</a>
                    </p>
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-login -->

                <!-- sign up form -->
                <div id="cd-signup">
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Username</label>
                            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Create account">
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->

                <!-- reset password form -->
                <div id="cd-reset-password">
                    <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content -->
    @yield('content')

    <!-- ====== Footer Area======= -->
    <footer class="footer-area" style="background-image:url({{asset('frontend/assets/images/footer-bg.png)')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget widget_about yellow-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">
                                Kontak Kami
                            </h3><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->
                        <div class="widget-about-content">
                            <div class="row">
                                 <div class="col-md-1">
                                    <i class="fa fa-phone"></i>
                                 </div>
                                 <div class="col-md-11">
                                     <span>08xx-xxxx-xxxx</span>
                                 </div>

                            </div>
                            <div class="row">
                             <div class="col-md-1">
                                <i class="fa fa-at"></i>
                             </div>
                             <div class="col-md-11">
                                 <span>syariah@uinjambi.ac.id</span>
                             </div>

                        </div>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget widget_about -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-6">
                    <div class="widget widget_place_category yellow-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">Menu Cepat</h3><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->
                        <ul>
                            <li> <a href="{{route('panduan')}}">Panduan Akademik</a></li>
                            <li> <a href="{{route('berita')}}">Berita</a></li>
                            <li> <a href="{{route('galeri')}}">Galeri</a></li>
                            <li> <a href="{{route('pencapaian')}}">Prestasi</a></li>
                            <li> <a href="http://e-journal.lp2m.uinjambi.ac.id/ojp/index.php/al-risalah/index">Jurnal Al-Risalah</a></li>
                            <li> <a href="http://e-journal.lp2m.uinjambi.ac.id/ojp/index.php/tpj/index">Jurnal Tanah Pilih</a></li>
                        </ul>
                    </div><!-- /.widget -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bottom-content">
                        <p>Copyright  &copy;2017 <a href="#">HTMLguru</a></p>
                    </div><!-- /.bottom-top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
     </footer><!-- /.footer-area -->


    <!-- All The JS Files
    ================================================== -->
    {{-- <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script> --}}
    <script src="{{asset('assets-admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script> <!-- main-js -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    @yield('linkfooter')
</body>
</html>

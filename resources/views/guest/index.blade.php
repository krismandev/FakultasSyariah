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
    <title>Beranda - Fakultas Syariah UIN STS Jambi</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/logo-uin.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/logo-uin.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/assets/images/logo-uin.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/assets/images/logo-uin.png')}}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- Modernizr
    ================================================== -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<style>
    .pimpinan-slider{
        position: relative;
    }
</style>

<body>
    <!-- ====== Header Mobile Area ====== -->
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
                                <a href="{{route('index')}}">
                                    <img src="{{asset('img/logo_uin.png')}}" alt="site-logo" style="width: 44px; height: 44px;"/>
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

    <!-- ====== Header Top Area ====== -->
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

    <!-- ======slider Area====== -->
    <div class="slider-area">
        <div class="pogoSlider">
            @if ($banners != null)
            @foreach ($banners as $banner)
            <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url({{url('img/banner/'.$banner->gambar)}}" style="width: 1920px; height: 590px;">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                {{-- <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                                <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a> --}}
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            @endforeach
            @endif
            {{-- <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url({{asset('frontend/assets/images/slider-one.png);')}}">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                                <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a>
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div> --}}
        </div><!-- .pogoSlider -->
    </div><!-- /.slider-area container-fluid -->

    <!-- ====== Category Menu ====== -->


    <!-- ====== Availability Area ======= -->


    <!-- ====== About Us Area ====== -->
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">Selayang Pandang</h2>
                        {{-- <h5 class="sub-title">Welcome to our House Rent Company</h5> --}}
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>

                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="{{asset('frontend/assets/images/user.jpg')}}" style="width: 458px; height: 346px; object-fit: cover; object-position: center;" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->

                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="{{asset('frontend/assets/images/about-image.png')}}" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->

                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                              <div class="image-content">
                                  <img src="{{asset('frontend/assets/images/about-image.png')}}" alt="about" />
                              </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                         </div> <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                 </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->

    <!-- ====== Apartments Area ====== -->







    <!-- ====== Blog Area ====== -->
    <div class="blog-area bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="heading-content-one">
                        <h2 class="title">Berita Terbaru</h2>
                        {{-- <h5 class="sub-title">Our News Feed</h5> --}}
                    </div><!-- /.blog-heading-content -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <div class="row">
                @if ($beritas != null)
                @foreach ($beritas as $berita)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="{{url('img/berita/'.$berita->gambar)}}" alt="blog" />
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    {{date("d M Y",strtotime($berita->created_at))}}
                                </span>
                                {{-- <span class="devied"></span> --}}
                                {{-- <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span> --}}
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="{{route('singleBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">{{$berita->judul}}</a></h3>
                            </div><!-- /.entry-header -->
                            {{-- <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer --> --}}
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
                @endforeach
                @endif
            </div><!-- /.row -->
            <a href="{{route('berita')}}" class="button">Lihat Semua Berita</a>
        </div><!-- /.container -->
    </div><!-- /.Blog-area-->

    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="heading-content-one">
                        <h2 class="title">Pencapaian</h2>
                        {{-- <h5 class="sub-title">Our News Feed</h5> --}}
                    </div><!-- /.blog-heading-content -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="apartment-tab-area">
                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach ($pencapaians as $pencapaian)
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.html">
                                                    <img src="{{url('img/pencapaian/'.$pencapaian->gambar)}}" alt="apartment" style="width: 377px; height: 283px; object-fit: cover; object-position: center;">
                                                </a>
                                            </div><!-- /.image-content -->

                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3>
                                                        <a href="#">{{$pencapaian->judul}}</a>
                                                    </h3>
                                                </div><!-- /.top-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->
                                    @endforeach

                                </div><!-- /.row -->
                                <a href="{{route('pencapaian')}}" class="more-link default-template-gradient">Lihat Semua</a>
                            </div><!-- /.popular-apartment -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <section class="about-bottom-content">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="heading-content-one">
                        <h2 class="title">Pimpinan Fakultas</h2>
                        {{-- <h5 class="sub-title">Our News Feed</h5> --}}
                    </div><!-- /.blog-heading-content -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <div class="row">
                <div class="">
                    @foreach ($pimpinans as $pimpinan)
                    <div class="col-md-4">
                        <div class="image-content gradient-circle">
                            <div>
                                <span>
                                    <img src="{{asset('img/pimpinan/'.$pimpinan->gambar)}}" alt="johan" style="width: 250px; height: 300px; object-fit: cover; object-position: center;">
                                </span>
                            </div>
                        </div><!-- /.image-content -->
                        <div class="author-content">
                            <div class="author-content-area">
                                <h4 class="author-name default-text-gradient">{{$pimpinan->nama}}</h4>
                                <p class="author-designation">{{$pimpinan->posisi}}</p>
                            </div><!-- /.author-content-area -->
                        </div><!-- /.author-content -->
                    </div><!-- /.col-md-7 -->
                    @endforeach
                </div>
            </div><!-- /.riv row -->
        </div><!-- /.container -->
    </section>

    <div class="gallery-area four">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="gallery-left-content">
                        <h2>Galeri Fakultas Syariah</h2>
                        <a href="{{route('galeri')}}" class="button nevy-button">Lihat semua</a>
                    </div><!-- /.right-content -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="gallery-slider owl-carousel owl-theme">
                        @if ($galeris->count() != 0)
                        @foreach ($galeris as $galeri)

                        <div class="item">
                            <a href="{{url('img/galeri/'.$galeri->gambar)}}">
                                <img src="{{url('img/galeri/'.$galeri->gambar)}}" alt="gallery" style="width: 240px; height: 271px; object-fit: cover; object-position: center;"/>
                            </a>
                        </div><!-- /.item -->
                        @endforeach
                        @endif
                     </div><!-- /.owl-demo -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.gallery-area -->

    <!-- ====== Footer Area ====== -->
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
    <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script> <!-- main-js -->
    <script>
        $(document).ready(function () {
            var $pimpinanslider = $(".pimpinan-slider");
			$pimpinanslider.owlCarousel({
				 loop: true,
				 margin: 30,
				 items: 3,
				 responsive:{
					280:{
						items: 1
					},
					500:{
						items: 1
					},
					600:{
						items: 2
					},
					800:{
						items: 2
					},
					1000:{
						items: 3
					},
					1200:{
						items: 3
					},
					1400:{
						items: 3
					}
				}
			});

        });
    </script>
</body>
</html>



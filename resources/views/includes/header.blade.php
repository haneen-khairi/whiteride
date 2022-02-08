<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="White Car">
    <meta name="keywords" content="White Car ">

    <!--====== TITLE TAG ======-->
    <title>White Car | App Landing Page</title>
{{--  {{ asset('img/ ') }} }}--}}
    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('img/whitecar.webp') }}">

    <!--====== STYLESHEETS ======-->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jquery.mb.YTPlayer.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
</head>

<body class="home-video" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--- PRELOADER -->
<!--    <div class="preeloader">-->
<!--        <div class="preloader-spinner"></div>-->
<!--    </div>-->

<!--SCROLL TO TOP-->
<a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

<!--START TOP AREA-->
<header class="top-area" id="home">
    <div class="header-top-area" id="scroolup">
        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#home" class="navbar-brand"><img src="{{ asset('img/whitecar.webp') }}" width="100" alt="logo"></a>
                    </div>
                    <div id="main-nav" class="stellarnav">
                        <ul id="nav" class="nav navbar-nav pull-right">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
{{--                            <li><a href="#features">Features</a></li>--}}
                            <li><a href="#screenshot">Screenshot</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#faqs">Faqs</a></li>

                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>
    <div class="welcome-text-area white">
        <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/4cYOHJ2JnTo',containment:'body',autoPlay:true,showControls:false, mute:true, startAt:0, opacity:1}">My video</div>
        <div class="welcome-area">
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="welcome-text">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s">White Ride App Rent</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor anagi icdunt ut labore et dolore magna aliqua. </p>
                            <div class="download-button mt60 xs-mt40 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="left" href="#"><i class="fa fa-android"></i> <div><p class="font14">avilable on</p><span class="font18 font700">Google Store</span></div></a>
                                <a class="left active" href="#"><i class="fa fa-apple"></i><div><p class="font14">avilable on</p><span class="font18 font700">Apple Store</span></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="welcome-mockup right wow fadeInRight">
                            <img src="{{ asset('img/home/home-mockup.png') }}" alt="">
                            <div class="home-mockup-slider">
                                <div class="single-mockups">
                                    <img src="{{ asset('img/p1.jpg') }}" alt="">
                                </div>
                                <div class="single-mockups">
                                    <img src="{{ asset('img/p2.jpg') }}" alt="">
                                </div>
                                <div class="single-mockups">
                                    <img src="{{ asset('img/p3.jpg') }}" alt="">
                                </div>
                                <div class="single-mockups">
                                    <img src="{{ asset('img/p4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--END TOP AREA-->

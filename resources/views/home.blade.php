@extends('layouts.default')
@section('content')


    <!--FEATURES TOP AREA-->
    <section class="features-top-area padding-100-30" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box mb50 center wow fadeInUp padding20 box-hover-1" data-wow-delay="0.1s">
                        <div class="box-img-icon features-box-icon">
                            <img src="{{ asset('img/icon/tools.svg') }}" alt="">
                        </div>
                        <h3 class="box-title">Best Deal</h3>
                        <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara incididunt !</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative active mb50 center  wow fadeInUp padding20 box-hover-1" data-wow-delay="0.2s">
                        <div class="box-img-icon features-box-icon">
                            <img src="{{ asset('img/icon/schedule.svg') }}" alt="">
                        </div>
                        <h3 class="box-title">2 Month Free Trail</h3>
                        <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara incididunt !</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 center wow fadeInUp padding20 box-hover-1" data-wow-delay="0.2s">
                        <div class="box-img-icon features-box-icon">
                            <img src="{{ asset('img/icon/tools.svg') }}" alt="">
                        </div>
                        <h3 class="box-title">24/7 Hour Support</h3>
                        <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara incididunt !</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 center wow fadeInUp padding20 box-hover-1 visible-sm" data-wow-delay="0.1s">
                        <div class="box-img-icon features-box-icon">
                            <img src="{{ asset('img/icon/quality.svg') }}" alt="">
                        </div>
                        <h3 class="box-title">Quality Service</h3>
                        <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara incididunt !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES TOP AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area sky-gray-bg section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>How <span>White Ride</span> Work?</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row flex-v-center">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 xs-center">
                        <h3 class="mb30">Best Quality and Support</h3>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor sereit amet, consectetur</p>

                        <p class="mt20">Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor.</p>
                        <a href="#" class="read-more mt30 inline-block">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-mockup right wow fadeIn">
                        <img src="{{ asset('img/hand.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row flex-v-center padding-top">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-mockup wow fadeIn xs-mb50">
                        <img src="{{ asset('img/hand.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content xs-center">
                        <h3 class="mb30">Best Quality and Support</h3>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor sereit amet, consectetur</p>

                        <p class="mt20">Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor.</p>
                        <a href="#" class="read-more mt30 inline-block">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row flex-v-center padding-top">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content xs-center">
                        <h3 class="mb30">Best Quality and Support</h3>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor sereit amet, consectetur</p>

                        <p class="mt20">Lorem ipsum madolor sit amet, consectetur adipisicing elitid do eiumod tempor coli incidit labore Lorem ipsum amet mdolor sit amet Lorem ipsum madolor.</p>
                        <a href="#" class="read-more mt30 inline-block">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-mockup right wow fadeIn xs-mt50">
                        <img src="{{ asset('img/hand.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--FEATURES AREA-->
{{--    <section class="features-area padding-100-50">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">--}}
{{--                    <div class="area-title text-center wow fadeIn">--}}
{{--                        <h2>Awesome <span>Features</span></h2>--}}
{{--                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.1s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/layout.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">High Resolution</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.2s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/018-sketch.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">Creative Design</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.3s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/012-opacity.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">Pixel Parfect</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.1s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/html.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">Clean Codes</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.2s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/015-browser-1.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">Ratina Ready</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">--}}
{{--                    <div class="text-icon-box relative mb50 wow fadeInUp padding20 box-hover-1" data-wow-delay="0.3s">--}}
{{--                        <div class="box-img-icon">--}}
{{--                            <img src="{{ asset('img/icon/chat.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <h3 class="box-title">Full Chat Free</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amt, consectet op adipisicing elit, semeid do eiusmod porara incididunt lorem opsum damy!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--FEATURES AREA END-->

    <!--VIDEO PROMO AREA-->
    <section class="video-area" id="video">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="video-promo-details white relative center wow fadeIn">
                        <div class="area-bg"></div>
                        <img src="{{ asset('img/video-bg.jpg') }}" alt="">
                        <div class="video-promo-content">
                            <span data-video-id="j1S66liv1t8" class="video-area-popup mb30"><i class="fl-esn-play-button-1"></i></span>
                            <h3 class="mb0">Watch Video</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--VIDEO PROMO AREA END-->

    <!--SCREENSHOT AREA-->
    <section class="screenshot-area section-padding" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>App <span>Screenshot</span></h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="screenshot-slider-area wow fadeIn">
                        <div class="screenshot-slider">

                            <div class="single-screenshot">
                                <img src="{{ asset('img/c2.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c3.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c4.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c5.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c1.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c2.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c3.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c4.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c5.png') }}" alt="">
                            </div>    <div class="single-screenshot">
                                <img src="{{ asset('img/c1.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c2.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c3.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c4.png') }}" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/c5.png') }}" alt="">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SCREENSHOT AREA END-->

    <!--TEAM AREA-->
    <section class="team-area padding-100-70 sky-gray-bg" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Team <span>Member</span></h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-image">
                            <img src="{{ asset('img/team/member-1.jpg') }}" alt="">
                        </div>
                        <div class="member-details">
                            <div class="name-and-designation">
                                <h4>Haneen Yousef</h4>
                                <p>Employee</p>
                            </div>
                            <div class="social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member-image">
                            <img src="{{ asset('img/team/member-2.jpg') }}" alt="">
                        </div>
                        <div class="member-details">
                            <div class="name-and-designation">
                                <h4>Haneen Yousef</h4>
                                <p>Employee</p>
                            </div>
                            <div class="social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member-image">
                            <img src="{{ asset('img/team/member-3.jpg') }}" alt="">
                        </div>
                        <div class="member-details">
                            <div class="name-and-designation">
                                <h4>Haneen Yousef</h4>
                                <p>Employee</p>
                            </div>
                            <div class="social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-image">
                            <img src="{{ asset('img/team/member-4.jpg') }}" alt="">
                        </div>
                        <div class="member-details">
                            <div class="name-and-designation">
                                <h4>Haneen Yousef</h4>
                                <p>Employee</p>
                            </div>
                            <div class="social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->

    <!--TESTMONIAL AREA AREA-->
    <section class="testmonial-area section-padding" id="testmonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Testimonials</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testmonial-slider">
                        <div class="single-testmonial">
                            <div class="author-content padding40 mb50 xs-mb30">
                                <div class="testmonial-quote"></div>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet</p>
                            </div>
                            <div class="author-name-image relative">
                                <div class="author-img">
                                    <img src="{{ asset('img/testmonial/testmonial.jpg') }}" alt="">
                                </div>
                                <h4>Michael Clarke</h4>
                                <a href="#">vistor 1</a>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content padding40 mb50 xs-mb30">
                                <div class="testmonial-quote"></div>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet</p>
                            </div>
                            <div class="author-name-image relative">
                                <div class="author-img">
                                    <img src="{{ asset('img/testmonial/testmonial.jpg') }}" alt="">
                                </div>
                                <h4>Michael Clarke</h4>
                                <a href="#">vistor 1</a>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content padding40 mb50 xs-mb30">
                                <div class="testmonial-quote"></div>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet</p>
                            </div>
                            <div class="author-name-image relative">
                                <div class="author-img">
                                    <img src="{{ asset('img/testmonial/testmonial.jpg') }}" alt="">
                                </div>
                                <h4>Michael Clarke</h4>
                                <a href="#">vistor 1</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA AREA END-->

    <!--FUN FACT AREA AREA-->
    <section class="fun-fact-area center white relative padding-100-70" id="fact">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-icon font36 mb20">
                            <i class="ti ti-user"></i>
                        </div>
                        <h3 class="font400 font36 xs-font26"><span class="counter">1350</span></h3>
                        <p class="font600">Total User</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="fact-icon font36 mb20">
                            <i class="ti ti-heart"></i>
                        </div>
                        <h3 class="font400 font36 xs-font26"><span class="counter">1300</span></h3>
                        <p class="font600">Loyal Customer</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-icon font36 mb20">
                            <i class="ti ti-cup"></i>
                        </div>
                        <h3 class="font400 font36 xs-font26"><span class="counter">1150</span></h3>
                        <p class="font600">Total Achivement</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="fact-icon font36 mb20">
                            <i class="ti ti-star"></i>
                        </div>
                        <h3 class="font400 font36 xs-font26"><span class="counter">1000</span></h3>
                        <p class="font600">App Ratting</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FUN FACT AREA AREA END-->

    <!--PRICING AREA AREA-->

    <!--FAQS AREA AREA-->
    <section class="faqs-area padding-top" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Frequently <span>Asked</span> Questions</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row flex-v-center">
                <div class="col-md-4">
                    <div class="faqs-mockup hidden-sm xs-center xs-mb50">
                        <img src="{{ asset('img/c1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-7">
                    <div class="panel-group sm-mb50 xs-mb50" id="accordion-main">
                        <!-- start tab content -->
                        <div class="panel panel-default active">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                    <div class="panel-title">
                                        <span>01</span>
                                        <span>We're ready to start now</span>
                                        <i class="pull-right fa fa-angle-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore</div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                    <div class="panel-title">
                                        <span>02</span>
                                        <span>Sedeiusmod tempor inccsetetur ?</span>
                                        <i class="pull-right fa fa-angle-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore</div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseThree">
                                    <div class="panel-title">
                                        <span>03</span>
                                        <span>Sedeiusmod inccsetetur aliquatraiy?</span>
                                        <i class="pull-right fa fa-angle-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore</div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFour">
                                    <div class="panel-title">
                                        <span>04</span>
                                        <span>Tempor inccsetetur aliquatraiy?</span>
                                        <i class="pull-right fa fa-angle-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS AREA AREA END-->

    <!--DOWNLOAD AREA AREA-->
    <section class="download-area sky-gray-bg section-padding" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="subscriber-form-area mb70 wow fadeIn">
                        <!--<form action="#" class="subscriber-form mb100">
                                <input type="email" name="email" id="email" placeholder="Email Address">
                                <button type="submit">Subscribe</button>
                            </form>-->
                        <form id="mc-form" class="subscriber-form mb100">
                            <label class="mt10" for="mc-email"></label>
                            <input type="email" id="mc-email" placeholder="email@example.com">
                            <button type="submit" class="plus-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Download <span>White Ride</span> Today</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="download-content center wow fadeIn">
                        <div class="download-button m50 xs-mt20">
                            <a class="left" href="#"><i class="fa fa-android"></i> <div><p class="font14">avilable on</p><span class="font18 font700">Google Store</span></div></a>
                            <a class="active left" href="#"><i class="fa fa-apple"></i><div><p class="font14">avilable on</p><span class="font18 font700">Apple Store</span></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--DOWNLOAD AREA AREA END-->

    <!--BLOG AREA-->
    <section class="blog-feed-area padding-100-50" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Blog <span>Posts</span></h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incidit labore Lorem ipsum amet madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 wow fadeIn">
                        <div class="blog-thumb mb30">
                            <a href="blog.html"><img src="{{ asset('img/blog/blog-1.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-details">
                            <p class="blog-meta font14 mb20"><a href="#">Feb 01, 2016  </a> by <a href="#">Admin</a></p>
                            <h3 class="blog-title mb30"><a href="blog.html">Beautiful Place for your Great Journey</a></h3>
                            <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta.</p>
                            <a class="readmore font14 mt30 uppercase" href="blog.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 wow fadeIn">
                        <div class="blog-thumb mb30">
                            <a href="blog.html"><img src="{{ asset('img/blog/blog-2.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-details">
                            <p class="blog-meta font14 mb20"><a href="#">Feb 01, 2016  </a> by <a href="#">Admin</a></p>
                            <h3 class="blog-title mb30"><a href="blog.html">Beautiful Place for your Great Journey</a></h3>
                            <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta.</p>
                            <a class="readmore font14 mt30 uppercase" href="blog.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 wow fadeIn">
                        <div class="blog-thumb mb30">
                            <a href="blog.html"><img src="{{ asset('img/blog/blog-3.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-details">
                            <p class="blog-meta font14 mb20"><a href="#">Feb 01, 2016  </a> by <a href="#">Admin</a></p>
                            <h3 class="blog-title mb30"><a href="blog.html">Beautiful Place for your Great Journey</a></h3>
                            <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta.</p>
                            <a class="readmore font14 mt30 uppercase" href="blog.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 wow fadeIn visible-sm">
                        <div class="blog-thumb mb30">
                            <a href="blog.html"><img src="{{ asset('img/blog/blog-1.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-details">
                            <p class="blog-meta font14 mb20"><a href="#">Feb 01, 2016  </a> by <a href="#">Admin</a></p>
                            <h3 class="blog-title mb30"><a href="blog.html">Beautiful Place for your Great Journey</a></h3>
                            <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta.</p>
                            <a class="readmore font14 mt30 uppercase" href="blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--CONTACT US AREA-->
    <section class="contact-area padding-bottom-50 sky-gray-bg" id="contact">
        <div class="map-area relative">
            <div id="map" style="width: 100%; height: 600px;"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.1858825707895!2d35.8428207142411!3d31.955853532707835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1b0f339efab%3A0xfb98a1802019ab02!2sFast%20Techno%20LLC!5e0!3m2!1sen!2sjo!4v1644314872921!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
        <div class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                        <div class="contact-form-content padding50 xs-padding20 mb100 sm-mb80 xs-mb50">
                            <div class="contact-title text-center mb50 wow fadeIn">
                                <h3 class="font32">Get In Touch</h3>
                            </div>
                            <div class="contact-form wow fadeIn">
                                <form action="process.php" id="contact-form" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                            <div class="form-group" id="name-field">
                                                <div class="form-input">
                                                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                            <div class="form-group" id="email-field">
                                                <div class="form-input">
                                                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <div class="form-group" id="phone-field">
                                                <div class="form-input">
                                                    <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject..">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <div class="form-group" id="message-field">
                                                <div class="form-input">
                                                    <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <div class="form-group center mb0">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="text-icon-box mb50 center wow fadeIn">
                            <div class="box-icon">
                                <i class="ti-headphone-alt"></i>
                            </div>
                            <p>0096270000000</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="text-icon-box relative mb50 center  wow fadeIn">
                            <div class="box-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <p>8 circle, Amman-Jordan</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="text-icon-box relative mb50 xs-mb0 center wow fadeIn">
                            <div class="box-icon">
                                <i class="ti-email"></i>
                            </div>
                            <p>white_Car@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->

@stop

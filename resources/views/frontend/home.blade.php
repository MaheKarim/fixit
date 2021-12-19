@extends('frontend.master')

@section('contents')

    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>

                <li data-transition="fade">
                    <img src="{{ asset('/') }}frontend/images/slides/1.jpg" alt="" width="1920" height="540"
                         data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="125"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1>Welcome to RepairPlus <br>quick repair</h1>
                            <p>Using original manufactured parts and components, we are able to<br>restore your cell phones
                                or iDevice to like-new condition.</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="350"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-1" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="176"
                         data-y="top" data-voffset="350"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-2" href="#">contact us</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('/') }}frontend/images/slides/2.jpg" alt="" width="1920" height="540"
                         data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption tp-resizeme"
                         data-x="right" data-hoffset="0"
                         data-y="center" data-voffset="-24"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="500">
                        <div class="slide-content-box">
                            <h1>We will replace quality <br>accessories</h1>
                            <p>Using original manufactured parts and components, we are able to<br>restore your cell phones
                                or iDevice to like-new condition.</p>
                            <div class="button">
                                <a class="thm-btn bg-1" href="#">Buy Now</a>
                                <a class="thm-btn bg-2" href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('/') }}frontend/images/slides/3.jpg" alt="" width="1920" height="540"
                         data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="125"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1>We can fix it broken<br>mobile glasses</h1>
                            <p>Using original manufactured parts and components, we are able to<br>restore your cell phones
                                or iDevice to like-new condition.</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="350"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-1" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="173"
                         data-y="top" data-voffset="350"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-2" href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->

    <!--Start call to action area-->
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <a href="#">
                            <h5>Smart phone Repair</h5>
                        </a>
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/callto-action/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC,
                                Nexus, Motorola, Blackberry & Tablets.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <a href="#">
                            <h5>Tablets & Ipad Repair</h5>
                        </a>
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/callto-action/2.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned
                                catagories as per requirement.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <a href="#">
                            <h5>Desktop & Mac Repair</h5>
                        </a>
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/callto-action/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>We specialist in providing On-Site Computer Desktop Repair Service and Network Support for
                                all sized business, On-Site Computer.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End call to action area-->

    <!--Start categories area-->
    <section class="categories-area" style="background-image:url(images/resources/categories-bg.jpg);">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Categories</h1>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-apple-logo"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>Apple iPhone</h5>
                            <p>Disassembly & replacement guides for the original iPhone, iPhone 3GS, iPhone 4...</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-android"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>Android Phone</h5>
                            <p>We are pleased to offer a wide range of Android repairs services we can repair..</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-windows"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>windows Phone</h5>
                            <p>Repair guides and teardowns for many Windows cell phones, a of manufacturers.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-technology-2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>Blackberry Phone</h5>
                            <p>Are you looking for Blackberry repair? We carry out large number repairs every day...</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-music-headphones"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>Phone Accessory</h5>
                            <p>If you have any problems in your phone accessories dont worry our will repair...</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <span class="flaticon-desktop-monitor"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h5>Desktop Laptop</h5>
                            <p>Also we done all types of desktop repair,we have experienced technicians...</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End categories area-->

    <!--Start about us area-->
    <section class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <div class="sec-title-two">
                            <h1>About Us</h1>
                            <span class="border"></span>
                        </div>
                        <ul>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('/') }}frontend/images/about/1.jpg" alt="Awesome Image">
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('/') }}frontend/images/about/2.jpg" alt="Awesome Image">
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('/') }}frontend/images/about/3.jpg" alt="Awesome Image">
                                </div>
                            </li>
                        </ul>
                        <div class="text-holder">
                            <p>Our commitment to bring professionalism, good service & trust to the Phone repair service &
                                maintenance business. We take immense pride in sending some of the most of professional
                                technicians to yours phone to fix things that aren't workings. </p>
                            <h3>Save time, Save money, With Quality Phone Repair Service, <span>Purchase - RepairPlus</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-us-content">
                        <div class="sec-title-two">
                            <h1>Why Choose Us</h1>
                            <span class="border"></span>
                        </div>
                        <ul>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-tool"></span>
                                </div>
                                <div class="text-holder">
                                    <h4>Free Diagnostics</h4>
                                    <p>Mr.Fixit is a quick and easy way of checking the set up on your Mobile Phones,
                                        Desktop & Laptop, Acessories and ect... We done its free of cost.</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-wrench"></span>
                                </div>
                                <div class="text-holder">
                                    <h4>Quick Repair Process</h4>
                                    <p>The repair process is fast and convenient & our expert teams of Mr.Fixit repair, If
                                        you see a phone symbol in the top left corner of the screen.</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-customer-support"></span>
                                </div>
                                <div class="text-holder">
                                    <h4>24/7 Customer Support</h4>
                                    <p>24x7 techsupport is one of the best services in the Mr.Fixit. 24x7 tech support
                                        providing quality services at anytime, anywhere in the world.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End about us area-->

    <!--Start fact counter area-->
    <section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
        <div class="container">
            <div class="row">
                <!--Start single item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item text-center">
                        <h1><span class="timer" data-from="1" data-to="2456" data-speed="5000" data-refresh-interval="50">2456</span>
                        </h1>
                        <span class="border"></span>
                        <h3>Mobiles Repaired</h3>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item text-center">
                        <h1><span class="timer" data-from="1" data-to="146" data-speed="5000"
                                  data-refresh-interval="50">146</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                        <span class="border"></span>
                        <h3>Expert Technicians</h3>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item text-center">
                        <h1><span class="timer" data-from="1" data-to="853" data-speed="5000"
                                  data-refresh-interval="50">853</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                        <span class="border"></span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item text-center">
                        <h1><span class="timer" data-from="1" data-to="2381" data-speed="5000" data-refresh-interval="50">2381</span>
                        </h1>
                        <span class="border"></span>
                        <h3>Desktop Repaired</h3>
                    </div>
                </div>
                <!--End single item-->

            </div>
        </div>
    </section>
    <!--End fact counter area-->

    <!--Start appoinment area-->
    <section class="appoinment-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="products">
                        <div class="sec-title-two">
                            <h1>Works Before & After</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <ul>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/before-1.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">Before</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/after-1.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">After</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <ul>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/before-2.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">Before</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/after-2.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">After</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>

                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <ul>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/before-3.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">Before</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/after-3.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">After</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-product">
                                    <ul>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/before-4.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">Before</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-holder">
                                                <img src="{{ asset('/') }}frontend/images/appoinment/after-4.jpg"
                                                     alt="Awesome Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="#">After</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="appoinment">
                        <div class="sec-title-two">
                            <h1>Make an Appoinment</h1>
                            <span class="border"></span>
                        </div>
                        <form class="appoinment-form">
                            <div class="row margin">
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <input type="text" name="mail" placeholder="Email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <input type="text" name="phone" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <input type="text" name="date" placeholder="Date" id="datepicker">
                                        <div class="icon-box">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <input type="text" name="time" placeholder="Time">
                                        <div class="icon-box">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pd">
                                    <div class="input-box">
                                        <select class="selectmenu">
                                            <option selected="selected">Select Service</option>
                                            <option>Select Service one</option>
                                            <option>Select Service Two</option>
                                            <option>Select Service Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="col-md-12 pd">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="thm-btn bg-1" type="submit">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End appoinment area-->

    <!--Start latest blog area-->
    <section class="latest-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title-two pull-left">
                        <h1>Latest News</h1>
                    </div>
                    <div class="button pull-right">
                        <a href="blog.html">Read More News<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start single latest blog-->
                <div class="col-md-4">
                    <div class="single-latest-blog">
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/blog/lat-blog-1.jpg" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Fletcher</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">April 21, 2016</a></li>
                            </ul>
                            <a href="blog-single.html">
                                <h3 class="blog-title">iPad Repairs For Schools / Universities Across The Usa</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End single latest blog-->
                <!--Start single latest blog-->
                <div class="col-md-4">
                    <div class="single-latest-blog">
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/blog/lat-blog-2.jpg" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Fletcher</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">April 11, 2016</a></li>
                            </ul>
                            <a href="blog-single.html">
                                <h3 class="blog-title">We offer the best in same day iPhone Repairs plymouth</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End single latest blog-->
                <!--Start single latest blog-->
                <div class="col-md-4">
                    <div class="single-latest-blog">
                        <div class="img-holder">
                            <img src="{{ asset('/') }}frontend/images/blog/lat-blog-3.jpg" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Fletcher</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">March 15, 2016</a></li>
                            </ul>
                            <a href="blog-single.html">
                                <h3 class="blog-title">All Software Boxes and Dongles At Best Prices</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End single latest blog-->
            </div>
        </div>
    </section>
    <!--End latest blog area-->

    <!--Start testimonial area-->
    <section class="testimonial-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Testimonials</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel">
                        <!--Start single item-->
                        <div class="single-item text-center">
                            <div class="img-holder">
                                <img src="{{ asset('/') }}frontend/images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h5>Water Damage Repair</h5>
                                <p>Excellent service and swift repair and I get to keep my Phone. I feel Really great.</p>
                            </div>
                            <div class="client-info">
                                <div class="name pull-left">
                                    <h6>John Wiliamson</h6>
                                    <p>Newyork City</p>
                                </div>
                                <div class="rating-box pull-right">
                                    <p>4.5<i class="fa fa-star" aria-hidden="true"></i></p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item text-center">
                            <div class="img-holder">
                                <img src="{{ asset('/') }}frontend/images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h5>Broken Glass Repair</h5>
                                <p>Great service as this was2nd repair with Mr.Fixit, excellent communication.</p>
                            </div>
                            <div class="client-info">
                                <div class="name pull-left">
                                    <h6>Astley Fletcher</h6>
                                    <p>Los Angles</p>
                                </div>
                                <div class="rating-box pull-right">
                                    <p>5.0<i class="fa fa-star" aria-hidden="true"></i></p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item text-center">
                            <div class="img-holder">
                                <img src="{{ asset('/') }}frontend/images/testimonial/3.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h5>Water Damage Repair</h5>
                                <p>Repaired my iPhone 6s through thorough examination, updated at all times.</p>
                            </div>
                            <div class="client-info">
                                <div class="name pull-left">
                                    <h6>Mitchel Starc</h6>
                                    <p>California</p>
                                </div>
                                <div class="rating-box pull-right">
                                    <p>5.0<i class="fa fa-star" aria-hidden="true"></i></p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial area-->

    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand">
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{ asset('/') }}frontend/images/brand/1.jpg"
                                             alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{ asset('/') }}frontend/images/brand/2.jpg"
                                             alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{ asset('/') }}frontend/images/brand/3.jpg"
                                             alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{ asset('/') }}frontend/images/brand/4.jpg"
                                             alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="{{ asset('/') }}frontend/images/brand/5.jpg"
                                             alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->

@endsection

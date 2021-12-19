<!--Start Top bar area -->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="welcome">
                    <p>Welcome to {{ config('app.name') }} Experts</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-2 col-sm-12 col-xs-12">
                <div class="top-social-links">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Top bar area -->

<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/') }}frontend/images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="flaticon-home-page"></span>
                            </div>
                            <div class="text-holder">
                                <h5>321, Breaking Street</h5>
                                <h6>Newyork ,USA 10002</h6>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Opening Time</h5>
                                <h6>Mon - Sat: 09.00 to 18.00</h6>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="flaticon-envelope"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Mail Us</h5>
                                <h6>Supportyou@Repairplus.com</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="index-2.html">Home</a></li>
                            <li class="dropdown"><a href="services.html">Services</a>
                                <ul>
                                    <li><a href="smartphone-repair.html">Smartphone Repair</a></li>
                                    <li><a href="tablet-repair.html">Tablet & iPad Repair</a></li>
                                    <li><a href="desktop-repair.html">Desktop & Mac Repair</a></li>
                                    <li><a href="game-repair.html">Game Console Repair</a></li>
                                    <li><a href="lcd-repair.html">LCD & LED Tv Repair</a></li>
                                    <li><a href="mp3-repair.html">MP3 & MP4 Player Repair</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="about.html">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="faq.html">FAQ’s</a></li>
                                    <li><a href="faq-single.html">FAQ's Single</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Shop Products</a></li>
                                    <li><a href="shop-single.html">Single Product</a></li>
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Default</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="customer-care pull-left">
                    <div class="icon-holder">
                        <span class="flaticon-cell-phone"></span>
                    </div>
                    <div class="title-holder">
                        <h5>Customer Care</h5>
                        <h4>1800-56-78-9012</h4>
                    </div>
                </div>
                <div class="top-search-box pull-right">
                    <button> <i class="thm-btn bg-1">Login</i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->

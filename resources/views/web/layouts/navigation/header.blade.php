{{-- <div id="preloader"></div> --}}

<!-- start header area -->
<header class="header-area">
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="left-info">

                        <p><span class="fa fa-clock"></span>Opening Hours : Mon - Sat : 8.30 to 16.00</p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="right-info">
                        <p><a href="#"><span><i class="fa fa-download"></i>Download Brochures</span></a> <a
                                href="#"><span><i class="fa fa-futbol-o"></i>Support</span> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-right-address">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sitelogo">
                        <a href="/"><img src="{{ $web_assets }}/asset/img/logo.png" alt="" /></a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="right-address">
                        <div class="single-address">
                            <div class="icon">
                                <img src="{{ $web_assets }}/asset/img/call.png" alt="" />
                            </div>
                            <div class="content">
                                <p>
                                    <span>Call Us:</span> +2 -450-000-0120
                                </p>
                            </div>
                        </div>
                        <div class="single-address">
                            <div class="icon">
                                <img src="{{ $web_assets }}/asset/img/envalope.png" alt="" />
                            </div>
                            <div class="content">
                                <p>
                                    <span>Email us: </span> support@lender.com
                                </p>
                            </div>
                        </div>
                        <div class="single-address">
                            <a href="{{route('web.contact-us')}}" class="button btn btn-default btn-sm"><i class="fa fa-reply-all"></i> GET A
                                QUOTES</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Start Google Translate Tag -->
        <div id="google_translate_element"></div>
        <!-- End Google Translate Tag  -->
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-11">
                    <div id="cssmenu">
                        <ul>
                            <li><a href="/">Home</a>
                                {{-- <ul>
                                    <li> <a href="index-2.html">Home 1</a></li>
                                    <li> <a href="index-3.html">Home 2</a></li>
                                    <li> <a href="index-4.html">Home 3</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('web.about-us') }}">About us </a></li>
                            <li><a href="{{ route('web.services') }}">Service</a>
                                <ul>
                                    <li><a href="{{ route('web.services-image') }}">Services Image</a></li>
                                    <li><a href="{{ route('web.business-loan') }}">Business Loan</a></li>
                                    <li><a href="{{ route('web.educational-loan') }}">Education Loan</a></li>
                                    <li><a href="{{ route('web.car-loan') }}">Car Loan</a></li>
                                    <li><a href="{{ route('web.home-loan') }}">Home Loan</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li> <a href="{{ route('web.single') }}">Single Blog</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('web.contact-us') }}">Contact us</a></li>
                            <li><a href="#">More</a>
                                <ul>
                                    {{-- <li> <a href="calculator.html">Calculator</a></li> --}}
                                    <li> <a href="gallery.html">Gallery</a></li>
                                    <li><a href="{{ route('web.team') }}">Team</a></li>
                                    <li><a href="{{ route('web.testimonial') }}">Testimonials</a></li>
                                    <li><a href="{{ route('web.faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('web.ways') }}">How It Works</a></li>
                                    <li><a href="{{ route('web.apply-now') }}">Apply Now</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <div class="searchbtn">
                        <a href="#" class="fa fa-search"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="searchform">
        <input type="text" name="s" placeholder="Search Here">
        <button><i class="fa fa-times"></i></button>
    </div>
</header>
<!-- end of header area -->

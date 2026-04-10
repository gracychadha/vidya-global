<header class="main-header header-style-three">
    <!-- Header Top -->
    <div class="header-top">
        <div class="inner-container">

            <div class="top-left">
                <!-- Info List -->
                <ul class="list-style-one">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:info@vidyaglobal.in">info@vidyaglobal.in</a>
                    </li>
                    <li><i class="fa fa-map-marker"></i> Bettiah, Bihar</li>
                    <li><i class="fa fa-clock"></i>Mon - Fri : 9:00 AM to 6:00 PM</li>
                </ul>
            </div>

            <div class="top-right">
                <ul class="social-icon-one">
                    <li><span class="text-white">Follow us on :</span></li>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('home') }}"><img
                            src="{{ asset('website/images/vidyaglobal-white.png') }}" alt="" title="Tronis"></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">

                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="{{ request()->routeIs('') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a> </li>
                        <li class="dropdown "><a href="javascript:void(0)">Who We Are</a>
                            <ul>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('director-message') }}">Director's Message</a></li>
                                <li><a href="{{ route('vision-mission') }}">Vision &amp; Mission</a></li>
                            </ul>
                        </li>
                        <li class="dropdown "><a href="javascript:void(0)">Associate Colleges</a>
                            <ul>
                                <li><a href="{{ route('andhra-pradesh') }}">Andhra Pradesh</a></li>
                                <li><a href="{{ route('delhi') }}">Delhi</a></li>
                                <li><a href="{{ route('haryana') }}">Haryana</a></li>
                                <li><a href="{{ route('punjab') }}">Punjab</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Courses</a>
                            <ul>
                                <li><a href="{{ route('admission-guidance') }}">Admission Guidance</a></li>
                                <li><a href="{{ route('career-counselling') }}">Career Counseling</a></li>
                                <li><a href="{{ route('diploma-admission') }}">Diploma Admission</a></li>
                                <li><a href="{{ route('engineering-admission') }}">Engineering Admission</a></li>
                            </ul>
                        </li>

                        <li class="{{ request()->routeIs('our-blogs') ? 'current' : '' }}"><a href="{{ route('our-blogs') }}">Our Blogs</a></li>
                        <li class="{{ request()->routeIs('contact-us') ? 'current' : '' }}"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- Main Menu End-->

                <div class="outer-box">
                    <a href="tel:+92(8800)9806" class="info-btn">
                        <img class="icon" src="{{ asset('website/images/icons/icon-phone.png') }}" alt="">
                        <small class="title">Call Anytime</small>
                        <strong class="text">+91 790 313 4933</strong>
                    </a>

                    {{-- <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                    </div> --}}

                    <a href="{{ route('contact-us') }}" class="theme-btn btn-style-one"><span class="btn-title">Contact
                            Us</span></a>

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img
                            src="{{ asset('website/images/vidyaglobal-white.png') }}" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+917903134933">+91 790 313 4933</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:info@vidyaglobal.in">info@vidyaglobal.in</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Fri : 9:00 AM to 6:00 PM
                    </div>
                </li>
            </ul>


            <ul class="social-links">
                <li><a href="#"><i class="fa fa-x"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    {{-- <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="{{ route('home') }}">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div> --}}
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ route('home') }}" title=""><img src="{{ asset('website/images/vidyaglobal-logo.png') }}"
                            alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
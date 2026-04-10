<div class="col-xl-4 col-lg-4">
    <div class="service-sidebar">
        <!--Start Services Details Sidebar Single-->
        <div class="sidebar-widget service-sidebar-single">
            <div class="service-sidebar wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200m">
                <div class="service-list">
                    <ul>
                        <li>
                            <a href="{{ route('admission-guidance') }}"
                                class="{{ Route::currentRouteName() == 'admission-guidance' ? 'current' : '' }}">
                                <i class="fas fa-angle-right"></i>
                                <span>Admission Guidance</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('career-counselling') }}"
                                class="{{ Route::currentRouteName() == 'career-counselling' ? 'current' : '' }}">
                                <i class="fas fa-angle-right"></i>
                                <span>Career Counseling</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('diploma-admission') }}"
                                class="{{ Route::currentRouteName() == 'diploma-admission' ? 'current' : '' }}">
                                <i class="fas fa-angle-right"></i>
                                <span>Diploma Admission</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('engineering-admission') }}"
                                class="{{ Route::currentRouteName() == 'engineering-admission' ? 'current' : '' }}">
                                <i class="fas fa-angle-right"></i>
                                <span>Engineering Admission</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--End Services Details Sidebar Single-->
        <div class="sidebar-widget banner-widget">


            <div class="widget-content" style="background-image: url(website/images/resource/contact.jpg);">
                <div class="shape" style="background-image: url(website/images/resource/overlay-shape.png);"></div>
                <div class="content-box">
                    <div class="icon-box">
                        <i class="lnr lnr-icon-pie-chart"></i>
                    </div>
                    <h3>Start Your Learning Journey Today</h3>
                    <a href="{{route('contact-us')}}" class="theme-btn btn-style-one light"><span class="btn-title">
                            Contact
                            us</span></a>
                </div>
            </div>
        </div>


    </div>
</div>
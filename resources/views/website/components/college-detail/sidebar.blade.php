<div class="col-xl-4 col-lg-4">
    <div class="service-sidebar">
        <!--Start Services Details Sidebar Single-->
        <div class="sidebar-widget service-sidebar-single">
            <div class="service-sidebar wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200m">
                <div class="service-list">
                    <ul>
                        @php
                        $collegeSidebar = \App\Models\College::where('status', 'active')->take(5)->get();
                        @endphp
                        @forelse($collegeSidebar as $college)
                        <li>
                            <a href="{{ route('courses', $college->slug) }}"
                                class="{{ request()->route('slug') == $college->slug ? 'current' : '' }}">
                                <i class="fas fa-angle-right"></i>
                                <span>{{ $college->name }}</span>
                            </a>
                        </li>
                        @empty
                        <li>
                            <p>No Course found yet</p>
                        </li>
                        @endforelse
                       
                    </ul>
                </div>
            </div>
        </div>

        <!--End Services Details Sidebar Single-->
        <div class="sidebar-widget banner-widget">


            <div class="widget-content" style="background-image: url(../../../../../public/website/images/resource/contact.jpg);">
                <div class="shape" style="background-image: url(../../../../../public/website/images/resource/overlay-shape.png);"></div>
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
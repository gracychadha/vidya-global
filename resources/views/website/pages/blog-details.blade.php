@extends('website.layout.app')
@section('title', 'Blog Details | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">How to Choose the Right College for Your Future</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>How to Choose the Right College for Your Future</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset('website/images/resource/news-details.jpg') }}" alt="">
                            <div class="blog-details__date">
                                <span class="day">28</span>
                                <span class="month">Aug</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="{{route('blog-details')}}"><i class="fas fa-user-circle"></i> Admin</a> </li>
                                <li><a href="{{route('blog-details')}}"><i class="fas fa-comments"></i> 02
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-details__title">How to Choose the Right College for Your Future</h3>
                            <p class="blog-details__text-2" align="justify">One of the first steps in choosing the right
                                college is identifying your career goals. Students should take time to understand their
                                interests, strengths, and the field they want to pursue in the future. Whether it is
                                engineering, management, medical studies, or diploma programs, selecting a college that
                                offers strong programs in your chosen field is essential. A college with experienced
                                faculty, practical learning opportunities, and updated course content can provide a solid
                                academic foundation.


                            </p>
                            <p class="blog-details__text-2" align="justify"> Another important factor to consider is the
                                accreditation and reputation of the college.
                                Accreditation ensures that the institution meets educational standards and offers recognized
                                degrees. A well-reputed college is more likely to provide quality education, experienced
                                faculty members, and better industry connections. Students should also review rankings,
                                student feedback, and alumni success stories to get a clear idea about the credibility of
                                the institution.
                            </p>

                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="lnr-icon-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest blogs</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image"> <img
                                            src="{{ asset('website/images/resource/news-1.jpg') }}" alt=""> </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>Admin</span> <a
                                                href="{{route('blog-details')}}">How to Choose the Right College for Your
                                                Future</a>
                                        </h3>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->

@endsection
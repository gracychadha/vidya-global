@extends('website.layout.app')
@section('title', 'Engineering Admission | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/upload/banner.png);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Engineering Admission</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Engineering Admission</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Start Services Details-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                {{-- course sidebar --}}
                @include('website.components.course.sidebar')

                {{-- main section --}}
                @include('website.components.course.engineering-admission')
            </div>
        </div>
    </section>
    <!--End Services Details-->
@endsection
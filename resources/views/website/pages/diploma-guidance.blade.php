@extends('website.layout.app')
@section('title', 'Diploma Guidance | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Diploma Guidance</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Diploma Guidance</li>
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
                @include('website.components.course.diploma-guidance')
            </div>
        </div>
    </section>
    <!--End Services Details-->
@endsection
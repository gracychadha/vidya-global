@extends('website.layout.app')
@section('title', 'Our Blogs | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Our Blogs</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    {{-- blog grid --}}
    @include('website.components.blogs.grid')
@endsection
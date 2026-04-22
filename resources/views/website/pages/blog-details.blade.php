@extends('website.layout.app')
@section('title', 'Blog Details | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ $blog->title }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $blog->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                @include('website.components.blogs.blog-details.details')
                @include('website.components.blogs.blog-details.sidebar')
            </div>
        </div>
    </section>
    <!--Blog Details End-->

@endsection
@extends('website.layout.app')
@section('title', 'Haryana Colleges | Vidya Global Portal')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Colleges in Haryana</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Colleges</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    {{-- main section --}}
    @include('website.components.associate-college.haryana')

    @include('website.components.associate-college.haryana-colleges')

    {{-- countries section --}}
    @include('website.components.home.countries-section')
@endsection
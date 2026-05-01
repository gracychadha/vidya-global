@extends('website.layout.app')
@section('title', 'Vision Mission | Vidya Global Portal')
@section('content')
    <section class="page-title" style="background-image: url(website/images/upload/banner.png);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Vision Mission</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Who We Are</li>
                    <li>Vision Mission</li>
                </ul>
            </div>
        </div>
    </section>
    @include('website.components.vision-mission.mission')
    @include('website.components.vision-mission.vision')
@endsection
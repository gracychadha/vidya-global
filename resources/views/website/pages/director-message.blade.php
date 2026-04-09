@extends('website.layout.app')
@section('title', 'Directors message | Vidya Global Portal')
@section('content')
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Director's Message</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Who We Are</li>
                    <li>Director's Message</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    @include('website.components.director-message.message')



@endsection
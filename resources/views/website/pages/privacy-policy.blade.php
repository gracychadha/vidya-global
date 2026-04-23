@extends('website.layout.app')
@section('title', 'Privacy Policy | Jharkhand Super League')
@section('content')
@php
$privacyPolicy = App\Models\PrivacyPolicy::where('is_active',true)->first();
@endphp
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Privacy </h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title">
                        <span class="sub-title">{{ $privacyPolicy->sub_title ?? 'Privacy Policy' }}</span>
                        <h2>Privacy <span class="color3">{{ $privacyPolicy->main_title ?? 'Privacy Policy' }}</span></h2>

                        <div class="text">
                            <p>{{ $privacyPolicy->description_1 ?? 'No policies found' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('website.layout.app')
@section('title', 'Terms Conditions | Jharkhand Super League')
@section('content')
    @php
        $termsCondition = App\Models\TermsCondition::where('is_active', true)->first();
    @endphp
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/upload/banner.png);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Terms </h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Terms & Conditions</li>
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
                        <span class="sub-title">{{ $termsCondition->sub_title ?? 'Terms Condition' }}</span>
                        <h2>Terms & <span class="color3">{{ $termsCondition->main_title ?? 'Terms Conditions'}}</span></h2>

                        <div class="text">
                            <p align="justify">
                                {{ $termsCondition->description_1 ?? ' No Description Found' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
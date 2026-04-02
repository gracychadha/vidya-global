@extends('website.layout.app')

@section('title', 'Welcome to Vidya Global')

@section('content')

    {{-- hero banner --}}
    @include('website.components.home.banner')

    {{-- offer section --}}
    @include('website.components.home.offer-section')

    {{-- client section --}}
    @include('website.components.common.client-section')

    {{-- about section --}}
    @include('website.components.home.about-section')

    {{-- process section --}}
    @include('website.components.home.process-section')

    {{-- cta section --}}
    @include('website.components.common.cta-section-1')


    {{-- countries section --}}
    @include('website.components.home.countries-section')

    {{-- faq section --}}
    @include('website.components.home.faq-section')

    {{-- training section --}}
    @include('website.components.home.training-section')

    {{-- why choose us --}}
    @include('website.components.home.why-choose')

    {{-- our blogs --}}
    @include('website.components.home.our-blogs')

    <!-- Map Section-->
    <section class="map-section">
        <iframe
            src="https://maps.google.com/maps?q=BSNL%20Office%20Koeri%20Tola%20Ward%20No%2026%20Bettiah%20Bihar%20845438&output=embed"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>
    <!--End Map Section-->
@endsection
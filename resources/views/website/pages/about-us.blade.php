@extends('website.layout.app')
@section('title', 'About Us | Vidya Global Portal')
@section('content')
	<section class="page-title" style="background-image: url(website/images/upload/banner.png);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Who We Are</li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	@include('website.components.about-us.about-section')

	{{-- why choose --}}
	@include('website.components.about-us.why-choose')

	{{-- training and certification --}}
	@include('website.components.about-us.training-certification')

	{{-- offer section --}}
	@include('website.components.home.offer-section')

@endsection
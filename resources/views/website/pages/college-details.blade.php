@extends('website.layout.app')
@section('title', 'Colleges | Vidya Global Portal')
@section('content')

  
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset("website/images/upload/banner.png") }}');">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">{{ $college->name ?? 'Course' }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $college->name ?? 'Course'}}</li>
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
                @include('website.components.college-detail.sidebar')

                {{-- main section --}}
                @include('website.components.college-detail.detail')
            </div>
        </div>
    </section>
    <!--End Services Details-->
@endsection
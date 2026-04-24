@php
    $stateSwiper = App\Models\CollegeState::where('status', 'active')->get();
@endphp
<section class="countries-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">States We Support</span>
            <h2>Explore Top Colleges <br> Across Key States with Expert <br> Admission <span
                    class="color3">Guidance</span></h2>
        </div>

        <div class="carousel-outer">
            <!-- Countries Carousel -->
            <div class="countries-carousel owl-carousel owl-theme">
                <!-- Country Block-->
                @foreach($stateSwiper as $sSwiper)
                   
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="flag"><img src="{{ $sSwiper->image ? asset('storage/'.$sSwiper->image) : asset('website/images/upload/delhi.png') }}" alt="{{ $sSwiper->name }}"></div>
                            <a href="{{ route('associate-colleges', $sSwiper->slug) }}" class="theme-btn">{{ $sSwiper->name }}</a>
                        </div>
                    </div>
                @endforeach
               


            </div>
        </div>
    </div>
</section>
<section class="training-section-three">
    <div class="auto-container">

        <div class="sec-title text-center">
            <span class="sub-title">{{ $state->name ?? '' }} Colleges</span>
            <h2>Top Colleges in <span class="color3">{{ $state->name ?? '' }}</span></h2>
        </div>

        <div class="carousel-outer">
            <div class="training-carousel-two owl-carousel owl-theme">
                @php
                    $colleges = App\Models\College::where('status', 'active')
                    ->where('state_id',$state->id)
                    ->get();
                @endphp
                @forelse($colleges as $college)
                            <div class="training-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ $college->image
                    ? asset('storage/' . $college->image)
                    : asset('website/images/resource/gallery-1.jpg') }}" alt="">
                                        </figure>

                                        <h4 class="title">{{ $college->name }}</h4>
                                    </div>

                                    <div class="overlay-content">
                                        <div class="inner">
                                            <h5 class="title">{{ $college->name }}</h5>

                                            <div class="text">
                                                {{ $college->description
                    ? \Illuminate\Support\Str::limit($college->description, 120)
                    : 'No description available' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                @empty
                    <p class="text-center">No colleges found for this state</p>
                @endforelse

            </div>
        </div>

    </div>
</section>
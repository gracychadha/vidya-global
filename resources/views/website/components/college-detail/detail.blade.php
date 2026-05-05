<div class="col-xl-8 col-lg-8">
    <div class="services-details__content">
        <img id="course-image" src="{{ $college->image ? asset('storage/'.$college->image) : asset('website/images/resource/service-details.jpg')  }}" alt="" />

        <h2 class="mt-4">{{ $college->name ?? 'College' }}</h2>
        <p align="justify">
            {{ $college->description ?? 'No data found' }}
        </p>

        <p align="justify">
            {{ $college->overview ?? 'No data found' }}
        </p>
    </div>
</div>
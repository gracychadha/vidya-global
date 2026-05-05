<div class="col-xl-8 col-lg-8">
    <div class="services-details__content">
        <img id="course-image" src="{{ $course->image ? asset('storage/'.$course->image) : asset('website/images/resource/service-details.jpg')  }}" alt="" />

        <h2 class="mt-4">{{ $course->title ?? 'Course' }}</h2>
        <p align="justify">
            {{ $course->description ?? 'No data found' }}
        </p>

        <p align="justify">
            {{ $course->overview ?? 'No data found' }}
        </p>
    </div>
</div>
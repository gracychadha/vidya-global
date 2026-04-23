<section class="country-details">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="country-details__img">
                    <img src="{{ $state->image ? asset('storage/' . $state->image) : asset('website/images/dummy-college.jpeg') }}"
                        alt="{{ $state->name }}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="country-content">
                    <h3>Colleges in {{ $state->name ?? 'Punjab' }}</h3>

                    <p align="justify">
                        @if($state->description)

                                @if($state->description == 'Auto created from import')
                                    <p align="justify">This college is committed to providing quality education and fostering academic excellence. It
                                        offers a range of undergraduate and postgraduate programs designed to support students’
                                        intellectual and professional growth. With experienced faculty, modern infrastructure, and a
                                        student-focused approach, the institution aims to create a dynamic learning environment. The
                                        college also encourages extracurricular activities, skill development, and overall personality
                                        enhancement to prepare students for future challenges.</p>
                                @else
                                <p>{{ $state->description }}</p>
                            @endif

                        @endif


                    </p>

                    <p align="justify">

                        @if($state->overview)
                                @if($state->overview == 'Auto created from import')
                                    <p align="justify">The college is a well-established institution dedicated to delivering high-quality education
                                        across various disciplines. It provides a supportive academic environment equipped with modern
                                        facilities, including classrooms, libraries, and laboratories. The institution focuses on both
                                        theoretical knowledge and practical learning to ensure students are industry-ready.</p>
                                @else
                                <p>{{ $state->overview }}</p>
                            @endif
                        @endif
                    </p>

                    <!-- <ul class="country-details-list">
                        <li>
                            <span>Location</span>
                            <span>Andhra Pradesh, India</span>
                        </li>

                        <li>
                            <span>Popular Courses</span>
                            <span>Engineering, Diploma, Management</span>
                        </li>

                        <li>
                            <span>Admission Process</span>
                            <span>Based on Eligibility & Entrance Exams</span>
                        </li>

                        <li>
                            <span>Education Facilities</span>
                            <span>Advanced Infrastructure & Skilled Faculty</span>
                        </li>
                    </ul> -->

                </div>
            </div>

        </div>
    </div>
</section>
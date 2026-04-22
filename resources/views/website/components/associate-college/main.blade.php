<section class="country-details">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="country-details__img">
                    <img src="{{ asset('storage/' . $state->image) }}" alt="{{ $state->name }}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="country-content">
                    <h3>Colleges in {{ $state->name }}</h3>

                    <p align="justify">
                       {{ $state->description   }}
                       

                    </p>

                    <p align="justify">
                       {{ $state->overview }}
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
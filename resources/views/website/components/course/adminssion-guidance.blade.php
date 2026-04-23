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



        <div class="mt-25">
            <h3>Frequently Asked Questions</h3>
            <p>
                Here are some common questions students ask about the admission process and how our guidance services
                can help them.
            </p>

            <ul class="accordion-box wow fadeInRight">

                <li class="accordion block active-block">
                    <div class="acc-btn active">
                        What is the role of Vidya Global in college admissions?

                        <div class="icon fa fa-plus"></div>
                    </div>
                    <div class="acc-content current">
                        <div class="content">
                            <div class="text">
                                We provide personalized guidance, help select suitable colleges, and support students
                                through the entire admission process.

                            </div>
                        </div>
                    </div>
                </li>

                <li class="accordion block">
                    <div class="acc-btn">
                        Do you provide support for entrance exams?

                        <div class="icon fa fa-plus"></div>
                    </div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                Yes, we help students understand the requirements and prepare for college-specific
                                entrance exams.

                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</div>
@extends('website.layout.app')
@section('title', 'Contact us | Vidya Global Portal')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(website/images/upload/banner.png);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">SEND US AN EMAIL</span>
                        <h2>Feel Free to Write to Us</h2>
                    </div>
                    <!-- Contact Form -->
                    <form id="contact-form" action="{{ route('contact-us.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="email" class="form-control" type="email" placeholder="Enter Email"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone Numner"
                                        pattern="[6-9]{1}[0-9]{9}" maxlength="10" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <select name="enquiry_for" class="form-control">
                                        <option value="">Select Enquiry</option>
                                        <option value="College ">College </option>
                                        <option value="Course ">Course </option>
                                        <option value="Service ">Service </option>
                                        <option value="General ">General </option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="7" placeholder="Enter Message"></textarea>
                        </div>

                        <!-- recaptcha hidden input -->
                        <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">

                        <div class="mb-3">
                            <button type="submit" class="theme-btn btn-style-one">
                                <span class="btn-title">Send Message</span>
                            </button>
                        </div>

                    </form>
                    <!-- Contact Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title mb-0">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">We’re here to help you take the next step in your education journey.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have Any Questions?</h6>
                                    <a href="tel:+918102851589"> +91 810 285 1589</a><br>
                                    <a href="tel:+917539910692"> +91 753 991 0692</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write an Email</h6>
                                    <a href="mailto:info@vidyaglobal.in">info@vidyaglobal.in</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit Anytime</h6>
                                    <span>Nearby Bsnl Office, Koeri Tola,<br> Ward No.26, Bettiah, Bihar-845438</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <!-- Divider: Google Map -->
    <!-- <section>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <iframe
                                src="https://maps.google.com/maps?q=BSNL%20Office%20Koeri%20Tola%20Ward%20No%2026%20Bettiah%20Bihar%20845438&output=embed"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </section> -->
@endsection
@push('scripts')

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const form = document.getElementById('contact-form');
            const tokenInput = document.getElementById('recaptcha-token');

            if (!form || !tokenInput) {
                return;
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                grecaptcha.ready(function () {
                    grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", { action: 'lead' })
                        .then(function (token) {

                            tokenInput.value = token;
                            form.submit();

                        });
                });

            });

        });
    </script>



    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#d33'
            });
        </script>
    @endif

@endpush
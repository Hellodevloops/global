@extends('layouts.app')
@section('content')


<!--open jobs section start-->
<section id="open-positions" class="open-jobs ptb-120">
    <div class="container ptb-40">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 col-md-12">
                <div class="section-heading">
                    {{-- <h4 class="h5 text-primary">Our Jobs</h4> --}}
                    <h2>Current Available Positions at <span class="text-primary">VriAum Technologies </span></h2>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <p>Unlock Your Potential and Join Our Innovative Team at VriAum Technologies, Where Cutting-Edge Solutions Meet Limitless Opportunities. Explore our Current Available Positions and Be Part of the Future of Technological Advancement.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <a href="{{route('contact.index')}}" class="text-decoration-none mt-4 mt-xl-0 mt-lg-0 single-open-job p-5 bg-dark text-white d-block rounded-custom">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="job-time h-6 mb-2"><i class="fas fa-briefcase me-2"></i> <strong>Remote
                                - Full Time</strong></span>
                        <span class="badge px-3 py-2 bg-custom-light rounded-pill small">Developer</span>
                    </div>
                    <h3 class="h5">Jr Frontend Developer</h3>
                    <ul class="job-info-list list-inline list-unstyled text-muted">
                        <li class="list-inline-item"><span class="fas fa-house me-1"></span> Google
                        </li>
                        <li class="list-inline-item"><span class="fas fa-location-pin me-1"></span> London, UK</li>
                        <li class="list-inline-item"><span class="fas fa-wallet me-1"></span> $35k - $45k</li>
                    </ul>
                    <div  class="btn btn-outline-light btn-sm d-inline-block mt-4">Apply Now</div>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="{{route('contact.index')}}" class="text-decoration-none mt-4 mt-xl-0 mt-lg-0 single-open-job p-5 bg-dark text-white d-block rounded-custom">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="job-time h-6 mb-2"><i class="fas fa-briefcase me-2"></i> <strong>Remote
                                - Full Time</strong></span>
                        <span class="badge px-3 py-2 bg-custom-light rounded-pill small">Designer</span>
                    </div>
                    <h3 class="h5">UI/UX and Product Designer</h3>
                    <ul class="job-info-list list-inline list-unstyled text-muted">
                        <li class="list-inline-item"><span class="fas fa-house me-1"></span> Figma</li>
                        <li class="list-inline-item"><span class="fas fa-location-pin me-1"></span> San
                            Francissco</li>
                        <li class="list-inline-item"><span class="fas fa-wallet me-1"></span> $25k - $35k</li>
                    </ul>
                    <div class="btn btn-outline-light btn-sm d-inline-block mt-4">Apply Now</div>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="{{route('contact.index')}}" class="text-decoration-none mt-4 single-open-job p-5 bg-dark text-white d-block rounded-custom">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="job-time h-6 mb-2"><i class="fas fa-briefcase me-2"></i> <strong>Full
                                Time</strong></span>
                        <span class="badge px-3 py-2 bg-custom-light rounded-pill small">Manager</span>
                    </div>
                    <h3 class="h5">Senior Office Manager</h3>
                    <ul class="job-info-list list-inline list-unstyled text-muted">
                        <li class="list-inline-item"><span class="fas fa-house me-1"></span> Dribble
                        </li>
                        <li class="list-inline-item"><span class="fas fa-location-pin me-1"></span> California</li>
                        <li class="list-inline-item"><span class="fas fa-wallet me-1"></span> $55k - $62k</li>
                    </ul>
                    <div class="btn btn-outline-light btn-sm d-inline-block mt-4">Apply Now</div>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a href="{{route('contact.index')}}" class="text-decoration-none mt-4 single-open-job p-5 bg-dark text-white d-block rounded-custom">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="job-time h-6 mb-2"><i class="fas fa-briefcase me-2"></i> <strong>Remote
                            </strong></span>
                        <span class="badge px-3 py-2 bg-custom-light rounded-pill small">Developer</span>
                    </div>
                    <h3 class="h5">Senior Backend Developer</h3>
                    <ul class="job-info-list list-inline list-unstyled text-muted">
                        <li class="list-inline-item"><span class="fas fa-house me-1"></span> Slack</li>
                        <li class="list-inline-item"><span class="fas fa-location-pin me-1"></span> United State
                            US</li>
                        <li class="list-inline-item"><span class="fas fa-wallet me-1"></span> $55k - $62k</li>
                    </ul>
                    <div class="btn btn-outline-light btn-sm d-inline-block mt-4">Apply Now</div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--open jobs section end-->

<!--career promo start-->
<section class="career-promo ptb-20 bg-light-subtle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Why Join Us</h4>
                    <h2>Great Working Environment</h2>
                    <p>Discover a Thriving Work Culture that Fosters Collaboration, Creativity, and Personal Growth - Your Ideal Destination for Professional Excellence.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="single-feature d-flex mt-0 p-5 bg-white rounded-custom">
                    <span class="fas fa-house-user fa-2x text-primary"></span>
                    <div class="ms-4 mt-2">
                        <h5>Remote Working Facilities</h5>
                        <p class="mb-0">Experience Seamless Connectivity and Optimal Productivity with our State-of-the-Art Remote Working Facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-feature d-flex mt-4 mt-xl-0 mt-lg-0 mt-md-0 p-5 bg-white rounded-custom">
                    <span class="fas fa-clock fa-2x text-primary"></span>
                    <div class="ms-4 mt-2">
                        <h5>Flexible Working Hours</h5>
                        <p class="mb-0">Empower Your Work-Life Balance with Flexible Working Hours Tailored to Your Needs and Priorities. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
                    <span class="fas fa-user-friends fa-2x text-primary"></span>
                    <div class="ms-4 mt-2">
                        <h5>Friendly Skilled Team</h5>
                        <p class="mb-0">Join a Friendly and Skilled Team that Embodies Collaboration, Support, and Continuous Learning </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
                    <span class="fas fa-briefcase-medical fa-2x text-primary"></span>
                    <div class="ms-4 mt-2">
                        <h5>Medical Insurance Facilities</h5>
                        <p class="mb-0">Enjoy Peace of Mind with Comprehensive Medical Insurance Facilities that Prioritize Your Health and Well-being. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--career promo end-->


<!--cat subscribe start-->
<section class="contact-us ptb-120 position-relative ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                    <h4 class="h5 text-primary">Quick Support</h4>
                    <h2>Get in Touch Today!</h2>
                    <p> Consultancy Contact for Career Opportunities and Migration Services.</p>
                </div>
                <div class="row justify-content-between pb-5">
                    <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0 aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="50">
                        <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Call Us</h5>
                            <p>Questions about our product or pricing? Call for support</p>
                            <a href="tel:+16464795816" class="read-more-link text-decoration-none"><i
                                    class="fas fa-phone me-2"></i>+1 (646)4795816</a>
                        </div>
                    </div>
                    <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box d-inline-block rounded-circle bg-danger-soft">
                            <i class="fas fa-headset fa-2x text-danger"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Chat Us</h5>
                            <p>Our support will help you from
                                <strong>9am to 5pm EST.</strong>
                            </p>
                            <a href="#crisp-chatbox" class="read-more-link text-decoration-none"><i
                                    class="fas fa-comment me-2"></i> Live Chat Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-12">
                <!-- Add this in your <head> tag -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="150">

                    <form class="cons-contact-form" id="contactForm" method="POST"
                        action="{{ route('contact.store') }}">

                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">First name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" value=""
                                        id="firstName" required="" placeholder="First name"
                                        aria-label="First name" fdprocessedid="kj2rk">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">Last name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="subject" class="form-control" value=""
                                        placeholder="Last name" aria-label="Last name" fdprocessedid="deicf">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="tel" name="phone" class="form-control" value=""
                                        required="" placeholder="Phone" aria-label="Phone"
                                        fdprocessedid="d66hwh">
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" value=""
                                        required="" placeholder="Email" aria-label="Email"
                                        fdprocessedid="xrlb5v">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourMessage" class="mb-1">Message <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4" fdprocessedid="ri7lf">Get in
                            Touch</button>
                    </form>
                    <div id="thankYouMessage" style="display: none;">
                        <h3>Thank you for your message!</h3>
                        <p>We will get in touch with you shortly.</p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Add this script at the end of your Blade template or in a separate JS file -->
                    <script>
                        $(document).ready(function() {
                            $('#contactForm').submit(function(event) {
                                event.preventDefault(); // Prevent the default form submission

                                var formData = $(this).serialize(); // Serialize the form data

                                // Send the AJAX request
                                $.ajax({
                                    url: "{{ route('contact.store') }}", // The Laravel route to handle the form submission
                                    method: "POST",
                                    data: formData,
                                    success: function(response) {
                                        // On success, display the thank you message
                                        // $('#contactForm').hide(); // Hide the form
                                        $('#thankYouMessage').show(); // Show the thank you message
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle the error if the AJAX request fails
                                        console.error(error);
                                    }
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
    <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5"
        style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
        {{-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div> --}}
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
<!--cat subscribe end-->
<!-- end -->

   @endsection
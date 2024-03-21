@extends('layouts.app')
@section('title', 'Choose Your Convenient Batch To Learn Foreign Languages in Nashik')
@section('meta_description', 'Master Foreign Languages Efficiently in our different course batches. Accelerate your linguistic journey with engaging content and expert guidance.')
@section('meta_keywords', 'Batch For Foreign Language Course')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SERVICES-3
        ============================================= -->
    <section id="services-3" class="wide-60 services-section division">
        <div class="container">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                @foreach ($batches as $batch)
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 icon-lg">
                            <a>

                                <!-- Title -->
                                <h5 class="h5-md">{{ $batch->course_name }}</h5>

                                <!-- Text -->
                                <p>Duration: {{ $batch->duration }} Weeks</p>

                                {{ \Carbon\Carbon::parse($batch->launch_date)->format('j F, Y') }}</p>
                                @php
                                    $batchTimings = json_decode($batch->timings, true);
                                    $formattedTimings = collect($batchTimings)
                                        ->map(function ($item) {
                                            return isset($item['Timings']) ? \Carbon\Carbon::parse($item['Timings'])->format('g A') : null;
                                        })
                                        ->filter()
                                        ->implode(', ');
                                @endphp

                                <p>Batch Timing(s): {{ $formattedTimings }}</p>

                                <!-- Enquiry Button -->
                                <button type="button" class="btn btn-primary mt-20 text-uppercase" data-type="general"
                                    data-toggle="modal" data-target="#enquiryModal">Enquire</button>


                            </a>
                        </div>
                    </div>
                @endforeach

                <!-- Modal -->
                <div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="enquiryModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="enquiryModalLabel">Send Enquiry </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


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
                                                    aria-label="First name">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="lastName" class="mb-1">Subject</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="subject" class="form-control" value=""
                                                    placeholder="subject" aria-label="subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="phone" class="mb-1">Phone <span
                                                    class="text-danger">*</span></label>
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
                                            <label for="email" class="mb-1">Email<span
                                                    class="text-danger">*</span></label>
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
                                {{-- @if (session('success'))
												<div class="alert alert-success">
													{{ session('success') }}
												</div>
											@endif --}}

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





            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END SERVICES-3 -->




    <!-- CALL TO ACTION-4
        ============================================= -->
    <section id="cta-4" class="bg-fixed cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">
                    <div class="cta-txt">

                        <!-- Title  -->
                        <h3 class="h3-xl">Consultations for prospective immigrants</h3>

                        <!-- Text -->
                        <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                            tempus, and blandit ligula varius
                        </p>

                        <!-- Button  -->
                        <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                            <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                        </a>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END CALL TO ACTION-4 -->
@endsection

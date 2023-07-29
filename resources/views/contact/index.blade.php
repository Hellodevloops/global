@extends('layouts.app')
@section('content')

       
				<!-- CONTACTS-4
				============================================= -->
				<section id="contacts-4" class="bg-lightgrey wide-80 contacts-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Have Questions? Get in Touch</h2>

								<!-- Text -->	
								<p class="p-md">If you have any questions or need further assistance,<br> please feel free to reach out to us. We are here to help!</p>

							</div>
						</div>	 <!-- END SECTION TITLE -->	


					 	<div class="row">


					 		<div class="col-lg-5">
								<div class="contact-boxes">

									<!-- LOCATION -->
									<div class="contact-box icon-xs clearfix mb-25">
										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>
										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color">2nd floor, Godagaurav Apartment, Shivgiri Colony, Next to Domino’s, College road, Nashik-422005</h5>
											<p class="grey-color">Our Location</p>
										</div>
									</div>
								
									<!-- PHONES -->
									<div class="contact-box icon-xs clearfix mb-25">
										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>
										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color">Phone: 08048040479</h5>
											<!-- <h5 class="h5-xs deepblue-color">F: N/A</h5>	 -->
											<p class="grey-color">Let's Talk</p>
										</div>
									</div>
								
									<!-- EMAIL -->
									<div class="contact-box icon-xs clearfix">
										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>
										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-xs deepblue-color"><a href="mailto:mailinfo.gec@gmail.com">mailinfo.gec@gmail.com</a></h5>
											<!-- <h5 class="h5-xs deepblue-color"><a href="mailto:mailinfo.gec@gmail.com">career@domain.com</a></h5>	 -->
											<p class="grey-color">Drop a Line</p>
										</div>
									</div>
								
								</div>
								
							</div>


							<!-- CONTACT FORM -->	
					 		<div class="col-lg-7">
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
					 		</div>	 <!-- END CONTACT FORM -->	 	


					 	</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END CONTACTS-4 -->




				<!-- GOOGLE MAP
				============================================= -->
				{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.003462146276!2d73.758336!3d20.0083694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb9bb8c3a9bb%3A0x1609378e82a8e04d!2sGLOBAL%20STUDY%20ABROAD!5e0!3m2!1sen!2sin!4v1688500573741!5m2!1sen!2sin" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}




   @endsection
   <!-- end -->
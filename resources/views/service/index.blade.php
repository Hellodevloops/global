@extends('layouts.app')
@section('content')
   {{-- banner strats --}}
   <section id="about-4" class="bg-lightgrey bg-tra-city pt-100 about-section division">
	<div class="container">
		<div class="row d-flex align-items-center">

		
	 <!-- About Text Section -->
	 <div class="col-lg-7 col-xl-6">
		<div class="about-4-txt mb-40">
			<span class="section-id id-color">Our Commitment to work speaks for itself</span>
			<h3 class="h3-lg darkblue-color">We provide the best services in this industry since 2015</h3>

			<!-- Text #1 -->
			<div class="box-list">							
				<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
				<p>We are dedicated to helping individuals refine their English communication skills, fostering an environment of growth and learning. Our commitment to quality education has been the foundation of our institute since its establishment in 2015. We believe that effective communication is essential in today's competitive world.</p>							
			</div>

			<!-- Text #2 -->
			<div class="box-list">							
				<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
				<p>At Global Education Consultancy, we understand the diverse needs of our students, whether they are preparing for competitive exams or seeking personal and professional development. Our experienced team of instructors is here to guide and empower you, helping you succeed in exams and in life.</p>							
			</div>

			<!-- Button -->
			<a href="tel: +91 8048040479" class="btn btn-md btn-primary black-hover">
				Call:  +91 8048040479
			</a>
		</div>							
	</div>
	<!-- END About Text Section -->


			<!-- SERVICES IMAGE -->
			 <div class="col-lg-5 col-xl-5 offset-xl-1">
				 <div class="about-4-img text-center">
					<img class="img-fluid" src="images/image-04.png" alt="about-image">
				</div>
			 </div>


		</div>    <!-- End row -->
	</div>     <!-- End container -->
</section>
   {{-- banner ends --}}


			    <!-- SERVICES-4
        ============================================= -->
		<section id="services-4" class="wide-70 services-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12 section-title center">
						<!-- Title -->
						<h2 class="h2-xs darkblue-color">What Global Services Offer</h2>
						<!-- Text -->
						<p class="p-md">Global offers a wide array of enticing opportunities that pave the way for success and self-discovery. Discover what Global offers and embark on a journey of knowledge, empowerment, and lasting connections.</p>
					</div>
				</div>
				
				<div class="row">
					@foreach ($services as $index => $service)
					@php
						// Calculate the background class number (1 to 8) based on loop index
						$bgClassNumber = ($index % 8) + 1;
						// Generate the corresponding background class
						$bgClass = 'bg-' . $bgClassNumber;
					@endphp
		
					<!-- SERVICE BOX #1 -->
					<div class="col-md-6 col-lg-4">
						<div class="sbox-4 icon-sm">
							<a href="study-abroad-details.html">
	
								<!-- Icon -->
								@if ($service->hero)
								<!-- Image -->
								{{-- <img class="img-fluid" src="{{ $service->hero }}" alt="service-image" /> --}}
							@endif
								<div class="sbox-4-icon primary-color"><img class="img-fluid" src="{{ $service->hero }}" alt="service-image" /></div>
	
								<!-- Text -->
								<div class="sbox-4-txt">
									<h5 class="h5-md primary-color">{{ $service->title }}</h5>
									<p>{{ Illuminate\Support\Str::limit($service->description, $limit = 80, $end = '...') }}</p>
								 <!-- Link -->
								 <a href="{{ route('service.show', ['service' => $service]) }}" class="h6">Read More</a>
								</div>
	
							</a>
						</div>
					</div>
	
					@endforeach
				</div> <!-- End row -->
			</div> <!-- End container -->
	
		</section>
		<!-- END SERVICES-4 -->
				



		
                
              
                

				

{{-- start 3fetures --}}
<section id="tabs-2" class="wide-60 tabs-section division">
	<div class="container">
		 <div class="row">


			<!-- TABS NAVIGATION -->
			<div class="col-md-12">
				<div class="tabs-nav clearfix">
					 <ul class="tabs-2 primary-tabs">

						 <!-- TAB-1 LINK -->
						<li class="tab-link displayed" data-tab="tab-11">
							<span>Goverment Approved</span>
						</li>

						<!-- TAB-2 LINK -->
						<li class="tab-link" data-tab="tab-12">
							<span>No Hidden Costs</span>	
						</li>

						<!-- TAB-3 LINK -->
						<li class="tab-link" data-tab="tab-13">
							<span>Fast, Easy &amp; Secure</span>
						</li>

					</ul>
				</div>
			</div>	<!-- END TABS NAVIGATION -->


			<!-- TABS CONTENT -->
			 <div class="col-md-12">
				<div class="tabs-content">


					<!-- TAB-1 CONTENT -->
					<div id="tab-11" class="tab-content displayed">
						<div class="row d-flex align-items-center">


							<!-- TAB-1 IMAGE -->
							<div class="col-md-6 mb-40">
								<div class="tab-img text-center">
									<img class="img-fluid" src="images/image-01.png" alt="tab-image">
								</div>
							</div>


							<!-- TAB-1 TEXT -->
							<div class="col-md-6">
								<div class="txt-block pc-20 mb-40">	

									<!-- Section ID -->	
									 <span class="section-id id-color">Visa Services</span>

									 <!-- Title -->
									<h3 class="h3-lg darkblue-color">Trusted Partner for Visa Success</h3>

									<!-- Text -->
									<p>Our institute holds an esteemed reputation as a trusted partner in navigating the complexities of visa applications. With our team's expertise and insights, we ensure a swift and efficient process, making your international aspirations a reality. Count on us for government-approved solutions that eliminate uncertainties and streamline your visa journey.
									</p>

									<!-- Small Title -->
									<h5 class="h5-md darkblue-color">Accurate paperwork and stay up-to-date with the latest immigration regulations</h5>

									<!-- Text Box #1 -->
									<div class="box-list">							
										<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
										<p>Our personalized approach ensures that your unique circumstances are taken into account. Whether you're pursuing higher education, skilled migration, or temporary work, we are committed to helping you achieve your international goals. Join the ranks of our satisfied clients who have successfully obtained their visas with our assistance.
										</p>							
									</div>
										
									<!-- Text Box #2 -->
									{{-- <div class="box-list">							
										<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
										<p>Embark on your journey to a global future with confidence. Choose Global Education Consultancy as your visa partner, and let us simplify the process, so you can focus on making the most of your international opportunities.</p>													
									</div> --}}

								</div>
							</div>				
						

						</div>  <!-- End row -->
					</div>	<!-- END TAB-1 CONTENT -->


					<!-- TAB-2 CONTENT for topic No Hidden Costs -->
<div id="tab-12" class="tab-content">
    <div class="row d-flex align-items-center">
        <!-- TAB-2 IMAGE -->
        <div class="col-md-6">
            <div class="tab-img text-center mb-40">
                <img class="img-fluid" src="images/image-03.png" alt="No Hidden Costs">
            </div>
        </div>
        <!-- TAB-2 TEXT -->
        <div class="col-md-6">
            <div class="txt-block pc-20 mb-40">	
                <!-- Section ID -->	
                <span class="section-id id-color">Transparent Pricing</span>
                <!-- Title -->
                <h3 class="h3-lg darkblue-color">Value Without Surprises</h3>
                <!-- Text -->
                <p>At Global Education Consultancy, we believe in providing you with exceptional value without any hidden costs. We understand the importance of clear pricing to help you plan your education or language enhancement journey confidently.</p>
                <!-- Text -->
                <p>We're proud to be a trusted choice for thousands of individuals seeking quality language training, exam preparation, and overall personality development. With us, you'll experience:</p>
                <!-- List of Benefits -->
                <ul>
                    <li><i class="fas fa-check"></i> Straightforward and transparent pricing.</li>
                    <li><i class="fas fa-check"></i> No unexpected fees or hidden charges.</li>
                    <li><i class="fas fa-check"></i> Clearly defined course inclusions.</li>
                    <li><i class="fas fa-check"></i> Comprehensive value for your investment.</li>
                </ul>
                <!-- Button -->
                <a href="#" class="btn btn-tra-grey primary-hover btn-arrow">
                    <span>Discover More <i class="fas fa-arrow-right"></i></span>
                </a>	
            </div>
        </div>
    </div>  <!-- End row -->
</div>	<!-- END TAB-2 CONTENT -->



					<!-- TAB-3 CONTENT for topic Fast, Easy, and Secure -->
<div id="tab-13" class="tab-content">
    <div class="row d-flex align-items-center">
        <!-- TAB-3 IMAGE -->
        <div class="col-md-6">
            <div class="tab-img text-center mb-40">
                <img class="img-fluid" src="images/image-02.png" alt="Fast, Easy, and Secure">
            </div>
        </div>
        <!-- TAB-3 TEXT -->
        <div class="col-md-6">
            <div class="txt-block pc-20 mb-40">
                <!-- Section ID -->	
                <span class="section-id id-color">Efficiency and Security</span>
                <!-- Title -->
                <h3 class="h3-lg darkblue-color">Your Journey Made Simple and Secure</h3>
                <!-- Text -->
                <p>Global Education Consultancy is committed to providing you with a seamless experience that is both fast and secure. We understand the importance of efficiency in today's dynamic world, and we ensure that your educational pursuits and language development are hassle-free.</p>
                <!-- Text -->
                <p>Here's what you can expect when you choose our services:</p>
                <!-- List of Benefits -->
                <ul>
                    <li><i class="fas fa-check"></i> Streamlined processes for quick results.</li>
                    <li><i class="fas fa-check"></i> Easy and user-friendly interactions.</li>
                    <li><i class="fas fa-check"></i> Protection of your personal information.</li>
                    <li><i class="fas fa-check"></i> Secure payment options.</li>
                </ul>
                <!-- Button -->
                <a href="#" class="btn btn-tra-grey primary-hover btn-arrow">
                    <span>Discover More <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>				
    </div>  <!-- End row -->
</div>	<!-- END TAB-3 CONTENT -->



				</div>
			</div>	<!-- END TABS CONTENT -->


		</div>    <!-- End row -->
	</div>     <!-- End container -->
</section>
{{-- end 3fetures --}}
{{-- stats start --}}
<div id="statistic-3" class="bg-image bg-scroll wide-60 statistic-section division">
	<div class="container white-color">


		<!-- STATISTIC 3 TITLE -->
		<div class="row">
			<div class="col-md-12">
				<div class="statistic-3-title primary-border">
					<h3 class="h3-lg">Thousands Of People Choose Our Services</h3>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12 ">
				<div class="row">


					<!-- STATISTIC BLOCK #1 -->
					<div class="col-sm-6 col-md-3">							
						<div class="statistic-block icon-sm">	

							<!-- Text -->
							<h5 class="yellow-color"><span class="count-element">2000</span>+</h5>
							<p>Achiever Students</p>		

						</div>								
					</div>

					<!-- STATISTIC BLOCK #2 -->
					<div class="col-sm-6 col-md-3">						
						<div class="statistic-block icon-sm">

							<!-- Text -->									
							<h5 class="yellow-color"><span class="count-element">4000</span>+</h5>
							<p>Universities Collabration</p>	

						</div>						
					</div>

					<!-- STATISTIC BLOCK #3 -->
					<div class="col-sm-6 col-md-3">						
						<div class="statistic-block icon-sm">

							<!-- Text -->									
							<h5 class="yellow-color"><span class="count-element">28</span>+</h5>
							<p>Global Countries</p>

						</div>						
					</div>

					<!-- STATISTIC BLOCK #4 -->
					<div class="col-sm-6 col-md-3">										
						<div class="statistic-block icon-sm">

							<!-- Text -->										
							<h5 class="yellow-color"><span class="count-element">20</span>+</h5>
							<p>Years Of Experience</p>

						</div>							
					</div>


				</div>
			</div>
		</div>	<!-- End row -->
	</div>	 <!-- End container -->		
</div>
{{-- stats end --}}
{{-- portfolio strats --}}
<section id="brands-3" class="wide-80 brands-section division">
	<div class="container">	


		<!-- SECTION TITLE -->
		<div class="row">	
			<div class="col-md-12 section-title center">			

				 <!-- Title -->
				<h2 class="h2-xs">Partner Institutes &amp; Universities</h2>

				<!-- Text -->	
				<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
				   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
				</p> 

			</div>
		</div>	 <!-- END SECTION TITLE -->	


		<!-- BRANDS FILTERING BUTTONS -->
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="brands-filter mb-50">
					<button data-filter="*" class=""> All Countries</button>
					<button data-filter=".canada" class="">Canada</button>
					<button data-filter=".australia" class="">Australia</button>
					<button data-filter=".usa" class="">USA</button>
					<button data-filter=".uk" class="">United Kingdom</button>
					<button data-filter=".new-zealand" class="">New Zealand</button>
					<button data-filter=".china" class="">China</button>
					<button class="last-button is-checked" data-filter=".south-korea">South Korea</button>
				</div>
			</div>
		</div>


		<!-- BRANDS HOLDER -->
		<div class="row">	
			<div class="col-md-12 brands-list">
				<div class="masonry-wrap grid-loaded hover-primary" style="position: relative; height: 198.469px;">

					<!-- BRAND #1 -->
					  <div class="brand-3 canada" style="position: absolute; left: 0%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-1.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #2 -->
					  <div class="brand-3 canada" style="position: absolute; left: 20%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #3 -->
					  <div class="brand-3 canada" style="position: absolute; left: 40%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-3.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #4 -->
					  <div class="brand-3 canada" style="position: absolute; left: 60%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-4.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #5 -->
					  <div class="brand-3 canada" style="position: absolute; left: 80%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-5.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #6 -->
					  <div class="brand-3 australia" style="position: absolute; left: 0%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-6.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #7 -->
					  <div class="brand-3 australia" style="position: absolute; left: 20%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-7.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #8 -->
					  <div class="brand-3 australia" style="position: absolute; left: 40%; top: 0px; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #9 -->
					  <div class="brand-3 usa" style="position: absolute; left: 60%; top: 198.469px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-1.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #10 -->
					  <div class="brand-3 usa" style="position: absolute; left: 80%; top: 198.469px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #11 -->
					  <div class="brand-3 usa" style="position: absolute; left: 0%; top: 396.938px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-3.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #12 -->
					  <div class="brand-3 uk" style="position: absolute; left: 20%; top: 396.938px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-4.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #13 -->
					  <div class="brand-3 uk" style="position: absolute; left: 40%; top: 396.938px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-5.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #14 -->
					  <div class="brand-3 uk" style="position: absolute; left: 60%; top: 396.938px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-6.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #15 -->
					  <div class="brand-3 uk" style="position: absolute; left: 80%; top: 396.938px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-7.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #16 -->
					  <div class="brand-3 uk" style="position: absolute; left: 0%; top: 595.407px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #17 -->
					  <div class="brand-3 new-zealand" style="position: absolute; left: 20%; top: 595.407px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-1.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #18 -->
					  <div class="brand-3 new-zealand" style="position: absolute; left: 40%; top: 595.407px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #19 -->
					  <div class="brand-3 new-zealand" style="position: absolute; left: 60%; top: 595.407px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-3.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #20 -->
					  <div class="brand-3 china" style="position: absolute; left: 80%; top: 595.407px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-4.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #21 -->
					  <div class="brand-3 china" style="position: absolute; left: 0%; top: 793.876px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-5.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #22 -->
					  <div class="brand-3 china" style="position: absolute; left: 20%; top: 793.876px; transform: scale(0.001); transition-property: opacity, transform; transition-duration: 0.7s; transition-delay: 0ms; display: none;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-6.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #23 -->
					  <div class="brand-3 south-korea" style="position: absolute; left: 0%; top: 0px;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-7.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #24 -->
					  <div class="brand-3 south-korea" style="position: absolute; left: 20%; top: 0px;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

					  <!-- BRAND #25 -->
					  <div class="brand-3 south-korea" style="position: absolute; left: 40%; top: 0px;">
						  <div class="brand-logo">
							<a href="#"><img class="img-fluid" src="images/brand-7.png" alt="brand-logo"></a>
							<p class="p-sm">Enter University Name Here</p>
						</div>
					  </div>

				</div>
			</div>
		</div>	<!-- END BRANDS HOLDER -->


	</div>     <!-- End container -->
</section>
{{-- portfolio ends --}}
			





				<!-- REQUEST FORM
       ============================================= -->
<div id="request-1" class="bg-image wide-60 request-form-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- REQUEST FORM TEXT -->
            <div class="col-md-6 col-xl-6">
                <div class="request-txt white-color pc-20 mb-40">
                    <!-- Section ID -->
                    <span class="section-id id-color">Free 24/7 Support</span>
                    <!-- Title -->
                    <h2 class="h2-xs">Get Free & Quality Online Consultation</h2>
                    <!-- Small Title -->
                    <h5 class="h5-md">Experience Expert Guidance Anytime</h5>
                    <!-- Text -->
                    <p>Our team is available 24/7 to provide you with free and high-quality online consultation
                        services. Whether you have questions about the immigration process or need guidance on visa
                        applications, we are here to help. Our experienced professionals will assist you every step of
                        the way, ensuring a smooth and successful journey towards your immigration goals.</p>
                </div>
            </div>
            <!-- END REQUEST FORM TEXT -->



            <!-- REQUEST FORM -->
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div id="request-form" class="text-center mb-40">
                    <form name="requestForm" class="row request-form bg-lightgrey">

                        <!-- Request Form Text -->
                        <div class="col-md-12">
                            <h5 class="h5-lg">Request Free Consultation</h5>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-name" class="col-md-12">
                            <input type="text" name="name" class="form-control name"
                                placeholder="Enter Your Name*" required>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-email" class="col-md-12">
                            <input type="text" name="email" class="form-control email"
                                placeholder="Enter Your Email*" required>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-phone" class="col-md-12">
                            <input type="tel" name="phone" class="form-control phone"
                                placeholder="Enter Your Phone Number*" required>
                        </div>

                        <!-- Request Form Select -->


                        <!-- Request Form Select -->
                        <div id="input-country" class="col-md-12 input-country">
                            <select id="inlineFormCustomSelect2" name="country" class="custom-select country"
                                required>
                                <option value="">Visa for</option>
                                <option>USA</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>New Zealand</option>
                                <option>United Kingdom</option>
                                <option>Ireland</option>
                                <option>Europe</option>
                                <option>Asia</option>
                            </select>
                        </div>

                        <!-- Request Form Button -->
                        <div class="col-md-12 form-btn">
                            <button type="submit" class="btn btn-primary tra-black-hover submit">Send
                                Request</button>
                        </div>

                        <!-- Request Form Message -->
                        <div class="col-md-12 request-form-msg text-center">
                            <div class="sending-msg"><span class="loading"></span></div>
                        </div>

                    </form>
                </div>
            </div> <!-- END REQUEST FORM -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END REQUEST FORM -->


@endsection

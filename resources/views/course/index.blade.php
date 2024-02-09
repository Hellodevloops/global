@extends('layouts.app')
@section('content')



				<!-- BREADCRUMB
				============================================= -->




				<!-- SERVICES-7
				============================================= -->
				<section id="services-7" class="wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">
							<div class="col-md-12 section-title center">
							  <h2 class="h2-xs">Explore Our Top Ranked Courses</h2>
							  <p class="p-md">Discover a wide range of courses with high rankings and quality education, offering valuable knowledge and skills for your future.</p>
							</div>
						  </div>

						<div class="row">


							<!-- SERVICE BOX #1 -->
                            @foreach ($courses as $index => $course)
                            @php
                                // Calculate the background class number (1 to 8) based on loop index
                                $bgClassNumber = ($index % 8) + 1;
                                // Generate the corresponding background class
                                $bgClass = 'bg-' . $bgClassNumber;
                            @endphp

                            <div class="col-md-6 col-lg-4">
                                <div class="sbox-7 sbox-color">
                                    @if ($course->hero)
                                        <!-- Image -->
                                        <img class="img-fluid" src="{{ $course->hero }}" alt="service-image" />
                                    @endif

                                    <!-- Text -->
                                    <div class="sbox-7-txt {{ $bgClass }} white-color">

                                        <!-- Title -->
                                        <h5 class="h5-xl">{{ $course->title }}</h5>

                                        <!-- Text -->
                                        <p class="p-sm">{{ Illuminate\Support\Str::limit($course->description, $limit = 80, $end = '...') }}</p>

                                        <!--Link -->
                                        <a href="{{ route('courses.show', ['slug' => $course->slug]) }}" class="btn btn-sm btn-tra-white primary-hover">Read More</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach







						</div>	  <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-7 -->

				<div class="blog-page-pagination">
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center primary-pagination">
							<li class="page-item {{ $courses->currentPage() == 1 ? 'disabled' : '' }}">
								@if ($courses->previousPageUrl())
									<a class="page-link" href="{{ $courses->previousPageUrl() }}" tabindex="-1">
										<i class="fas fa-long-arrow-alt-left"></i>
									</a>
								@else
									<span class="page-link" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></span>
								@endif
							</li>
							@for ($page = 1; $page <= $courses->lastPage(); $page++)
								<li class="page-item {{ $page == $courses->currentPage() ? 'active' : '' }}">
									<a class="page-link" href="{{ $courses->url($page) }}">{{ $page }}
										@if ($page == $courses->currentPage())
											<span class="sr-only">(current)</span>
										@endif
									</a>
								</li>
							@endfor
							<li class="page-item next-page {{ $courses->currentPage() == $courses->lastPage() ? 'disabled' : '' }}">
								@if ($courses->nextPageUrl())
									<a class="page-link" href="{{ $courses->nextPageUrl() }}">
										<i class="fas fa-long-arrow-alt-right"></i>
									</a>
								@else
									<span class="page-link"><i class="fas fa-long-arrow-alt-right"></i></span>
								@endif
							</li>
						</ul>
					</nav>
				</div>


				<!-- SERVICES-9
				============================================= -->
				<section id="services-9" class="bg-lightgrey wide-100 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">
							<div class="col-md-12 section-title center">

				 				<!-- Title -->
								<h2 class="h2-xs">Our Most Popular Courses</h2>

								<!-- Text -->
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p>

							</div>
						</div>	 <!-- END SECTION TITLE -->


						<!-- SERVICE BOXES CAROUSEL -->
						<div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel owl-theme owl-loaded services-carousel">

                                    <!-- Loop through courses -->
                                    @foreach ($courses as $index => $course)
                                        @php
                                            // Calculate the background class number (1 to 8) based on loop index
                                            $bgClassNumber = ($index % 8) + 1;
                                            // Generate the corresponding background class
                                            $bgClass = 'bg-' . $bgClassNumber;
                                        @endphp

                                        <div class="sbox-9 {{ $bgClass }} sbox-9-color">

                                            <!-- Image -->
                                            <img class="img-fluid" src="{{ $course->hero }}" alt="service-image" />

                                            <!-- Text -->
                                            <div class="sbox-9-txt">

                                                <!-- Title -->
                                                <h5 class="h5-lg">{{ $course->title }}</h5>

                                                <!-- Text -->
                                                <p class="p-sm">{{ $course->description }}</p>

                                                <!--Link -->
                                                <a href="{{ route('courses.show', ['slug' => $course->slug]) }}">Read More <i class="fas fa-caret-right"></i></a>

                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                              <!-- END SERVICE BOXES CAROUSEL -->


					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-9 -->




				<!-- FAQs-1
				============================================= -->
				<section id="faqs-1" class="wide-100 faqs-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">
							<div class="col-md-12 section-title center">

				 				<!-- Title -->
								<h2 class="h2-xs">Need Some Help? Look Here</h2>

								<!-- Text -->
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p>

							</div>
						</div>	 <!-- END SECTION TITLE -->


						<!-- QUESTIONS HOLDER -->
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
					 			<div id="accordion" role="tablist">


				 					<!-- QUESTION #1 -->
				 					<div class="card">

				 						<!-- Question -->
									    <div class="card-header" role="tab" id="headingOne">
									      	<h5 class="h5-sm">
									       		<a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
									         		<span>1.</span> What are the best free online English courses?
									        	</a>
									    	 </h5>
									    </div>

									    <!-- Answer -->
									    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
									     	<div class="card-body">

										        <!-- INFO BOX #1 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Explore a wide range of study abroad destinations that offer excellent educational opportunities and vibrant cultural experiences. Whether you're interested in studying in Europe, Asia, North America, or any other continent, our expert consultants will guide you through the best options.</p>
												</div>

												<!-- INFO BOX #2 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Discover top universities and colleges around the world that offer courses in your field of interest. From prestigious Ivy League institutions to cutting-edge research universities, we'll help you find the perfect fit for your academic aspirations.</p>
												</div>


									     	</div>
									   	</div>


									</div>	<!-- END QUESTION #1 -->


									<!-- QUESTION #2 -->
									<div class="card">

										<!-- Question -->
									    <div class="card-header" role="tab" id="headingTwo">
									      	<h5 class="h5-sm">
									       	    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
									          		<span>2.</span> What is the registration process?
									        	</a>
									     	 </h5>
									    </div>

									    <!-- Answer -->
									    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">

												<p>Our application process is designed to be straightforward and hassle-free. First, schedule a consultation with one of our study abroad experts to discuss your academic goals and preferences. Then, we'll guide you through the necessary documentation, university applications, and visa procedures. You'll receive personalized support at every step of the application process to ensure a smooth and successful journey to your dream study destination.</p>

											</div>
										</div>

									</div>	<!-- END QUESTION #2 -->


									<!-- QUESTION #3 -->
									<div class="card">

									 	<!-- Question -->
										 <div class="card-header" role="tab" id="headingThree">
											<h5 class="h5-sm">
												<a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
													<span>3.</span> Are there scholarships available for international students?
												</a>
											</h5>
										</div>

									   	<!-- Answer -->
										   <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">

												<!-- Text -->
												<p>Yes, there are numerous scholarships and financial aid options available for international students. Our consultants will help you explore scholarship opportunities based on your academic achievements, financial needs, and the country you wish to study in. We'll assist you in preparing strong scholarship applications and essays to maximize your chances of receiving funding for your study abroad journey.</p>

												<!-- INFO BOX #1 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Additionally, we can provide information on part-time job opportunities during your study abroad experience, which can further support your financial needs and enhance your overall learning experience.</p>
												</div>

												<!-- INFO BOX #2 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Contact us to explore the various scholarship options available and kickstart your journey to an affordable and rewarding study abroad experience.</p>
												</div>

											</div>
										</div>

									</div>	  <!-- END QUESTION #3 -->


									<!-- QUESTION #4 -->
									<div class="card">

									 	<!-- Question -->
										 <div class="card-header" role="tab" id="headingFour">
											<h5 class="h5-sm">
												<a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
													<span>4.</span> What are the study abroad application deadlines?
												</a>
											</h5>
										</div>

									    <!-- Answer -->
									    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
											<div class="card-body">

												<!-- Text -->
												<p>Application deadlines for study abroad programs vary depending on the university, country, and academic level. It's essential to start the application process well in advance to ensure you have enough time for documentation, language proficiency tests, and visa processing.</p>

												<!-- INFO BOX #1 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Our study abroad consultants will provide you with detailed information about specific application deadlines for your chosen universities and programs. We'll work together to create a personalized timeline that meets the application deadlines and increases your chances of acceptance.</p>
												</div>

												<!-- INFO BOX #2 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Contact us today to get started with the study abroad application process and secure your spot in the university of your dreams.</p>
												</div>

											</div>
										</div>
									</div>	  <!-- END QUESTION #4 -->


									<!-- QUESTION #5 -->
									<div class="card">

									 	<!-- Question -->
										 <div class="card-header" role="tab" id="headingFive">
											<h5 class="h5-sm">
												<a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">
													<span>5.</span> How can I prepare for studying abroad?
												</a>
											</h5>
										</div>

									    <!-- Answer -->
										<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
											<div class="card-body">

												<!-- Preparation Steps List -->
												<div class="prep-steps-list-container">
													<ul class="prep-steps-list">
														<li><i class="fas fa-check"></i> Research your desired study abroad destination and university options.</li>
														<li><i class="fas fa-check"></i> Ensure your academic documents and transcripts are up-to-date.</li>
														<li><i class="fas fa-check"></i> Take language proficiency tests such as IELTS or TOEFL if required.</li>
														<li><i class="fas fa-check"></i> Apply for scholarships and financial aid to support your studies.</li>
														<li><i class="fas fa-check"></i> Complete the university application process before the deadlines.</li>
														<li><i class="fas fa-check"></i> Obtain a student visa and necessary travel documents.</li>
														<li><i class="fas fa-check"></i> Arrange suitable accommodation for your stay abroad.</li>
														<li><i class="fas fa-check"></i> Learn about the culture and customs of your study destination.</li>
														<li><i class="fas fa-check"></i> Make a checklist for necessary items to bring along.</li>
													</ul>
												</div>

												<!-- INFO BOX #2 -->
												<div class="box-list">
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p>Our team is here to provide you with comprehensive support and resources during your study abroad preparation. Feel free to reach out to us with any questions or concerns, and we'll help you embark on this exciting journey with confidence.</p>
												</div>

											</div>
										</div>

									</div>	  <!-- END QUESTION #5 -->


								</div>	<!-- END ACCORDION -->
							</div>  <!-- End col-x -->
						</div>	<!-- END QUESTIONS HOLDER -->


						<!-- MORE QUESTIONS BUTTON -->
						<div class="row">
							<div class="col-md-12 text-center more-questions">
								<h5 class="h5-md">Still have a question? <a href="faqs.html" class="darkblue-color">Ask your question here</a></h5>
							</div>
						</div>


					</div>	   <!-- End container -->
				</section>	<!-- END FAQs-1 -->




				<!-- ABOUT-6
				============================================= -->
				<section id="about-6" class="bg-scroll pt-100 about-section division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">


							<!-- ABOUT IMAGE -->
				 			<div class="col-lg-6">
				 				<div class="about-6-img text-center">
									<img class="img-fluid" src="images/image-08.png" alt="about-image" />
								</div>
				 			</div>


							<!-- ABOUT TEXT -->
							<div class="col-lg-6">
								<div class="about-6-txt pc-20">

									<!-- Section ID -->
						 			<span class="section-id id-color">Overseas Education</span>

									<!-- Title -->
									<h2 class="h2-xs">Looking for Quality Abroad Education?</h2>

									<!-- Text -->
									<p class="p-md">Fringilla risus luctus mauris auctor purus euismod pretium purus at pretium
									   ligula rutrum viverra tortor sapien sodales quaerat sodales sapien blandit dolores and aliquam
									</p>

									<!-- Small Title -->
									<h5 class="h5-lg">350+ Universities in 17 Countries:</h5>

									<!-- Flags list -->
									<ul class="flags-list">
										<li><a href="country-details.html"><img src="images/flags/canada.png" alt="flag"/><span>Canada</span></a></li>
										<li><a href="country-details.html"><img src="images/flags/australia.png" alt="flag"/><span>Australia</span></a></li>
										<li><a href="country-details.html"><img src="images/flags/usa.png" alt="flag"/><span>USA</span></a></li>
										<li><a href="country-details.html"><img src="images/flags/united-kingdom.png" alt="flag"/><span>UK</span></a></li>
										<li><a href="country-details.html"><img src="images/flags/eu.png" alt="flag"/><span>Europe</span></a></li>
									</ul>

								</div>
							</div> <!-- END ABOUT TEXT -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-6 -->


@endsection

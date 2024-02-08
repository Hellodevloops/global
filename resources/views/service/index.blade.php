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
			<a href="tel:+918048040479" class="btn btn-md btn-primary black-hover">
				Call: +91 8048040479
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
							<a href="{{ route('services.show', ['slug' => $service->slug]) }}">

								<!-- Icon -->
								@if ($service->icon)
								<!-- Image -->
								{{-- <img class="img-fluid" src="{{ $service->hero }}" alt="service-image" /> --}}
							@endif
								{{-- <div class="sbox-4-icon primary-color"><img class="img-fluid" src="{{ $service->icon }}" alt="service-image" /></div> --}}
								<div class="sbox-4-icon primary-color"><span class="{{ $service->icon_class }}"></span></div>
								<!-- Text -->
								<div class="sbox-4-txt">
									{{-- <h5 class="h5-md primary-color">{{ $service->title }}</h5> --}}
                                    @if ($service->slug)
                                                <h5 class="h5-lg">
                                                    <a href="{{ route('services.show', ['slug' => $service->slug]) }}" class="darkblue-color">
                                                        {{ $service->title }}
                                                    </a>
                                                </h5>
                                            @else
                                                <h5 class="h5-lg">
                                                    {{ $service->title }}
                                                </h5>
                                            @endif
									<p>{{ Illuminate\Support\Str::limit($service->description, $limit = 80, $end = '...') }}</p>
								 <!-- Link -->
								 <a href="{{ route('services.show', ['slug' => $service->slug]) }}" class="h6">Read More</a>
								</div>

							</a>
						</div>
					</div>

					@endforeach
				</div> <!-- End row -->
			</div> <!-- End container -->

		</section>
		<!-- END SERVICES-4 -->


		<div class="blog-page-pagination">
			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-center primary-pagination">
					<li class="page-item {{ $services->currentPage() == 1 ? 'disabled' : '' }}">
						@if ($services->previousPageUrl())
							<a class="page-link" href="{{ $services->previousPageUrl() }}" tabindex="-1">
								<i class="fas fa-long-arrow-alt-left"></i>
							</a>
						@else
							<span class="page-link" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></span>
						@endif
					</li>
					@for ($page = 1; $page <= $services->lastPage(); $page++)
						<li class="page-item {{ $page == $services->currentPage() ? 'active' : '' }}">
							<a class="page-link" href="{{ $services->url($page) }}">{{ $page }}
								@if ($page == $services->currentPage())
									<span class="sr-only">(current)</span>
								@endif
							</a>
						</li>
					@endfor
					<li class="page-item next-page {{ $services->currentPage() == $services->lastPage() ? 'disabled' : '' }}">
						@if ($services->nextPageUrl())
							<a class="page-link" href="{{ $services->nextPageUrl() }}">
								<i class="fas fa-long-arrow-alt-right"></i>
							</a>
						@else
							<span class="page-link"><i class="fas fa-long-arrow-alt-right"></i></span>
						@endif
					</li>
				</ul>
			</nav>
		</div>








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










@endsection

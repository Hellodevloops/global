@extends('layouts.app')
@section('content')
    <!-- ABOUT-9
            ============================================= -->
    <section id="about-9" class="wide-60 about-section division">
        <div class="container">
            <div class="row">


                <!-- ABOUT TEXT -->
                <div class="col-lg-8">
                    <div class="about-9-txt mb-40 pr-15">

                        <!-- Title -->
                        <h3 class="h3-md">{{ $course->title }}</h3>

                        <!-- ABOUT BOXES -->
                        <div class="a-9-boxes row bg-lightgrey d-flex align-items-center">

                            <!-- ABOUT BOX #1 -->
                            <div class="col-md-4">
                                <div class="a9-box icon-xs">

                                    <!-- Icon -->
                                    <div class="a9-icon grey-color"><span class="flaticon-358-wall-clock-1"></span></div>

                                    <!-- Text -->
                                    <div class="a9-txt">
                                        <p class="grey-color txt-400">Duration</p>
                                        <p class="blue-color">40 Hours</p>
                                    </div>

                                </div>
                            </div>

                            <!-- ABOUT BOX #2 -->
                            <div class="col-md-4">
                                <div class="a9-box icon-xs">

                                    <!-- Icon -->
                                    <div class="a9-icon grey-color"><span class="flaticon-151-presentation"></span></div>

                                    <!-- Text -->
                                    <div class="a9-txt">
                                        <p class="grey-color txt-400">Assessment</p>
                                        <p class="blue-color">Yes</p>
                                    </div>

                                </div>
                            </div>

                            <!-- ABOUT BOX #3 -->
                            <div class="col-md-4">
                                <div class="a9-box icon-xs">

                                    <!-- Icon -->
                                    <div class="a9-icon grey-color"><span class="flaticon-360-clipboard"></span></div>

                                    <!-- Text -->
                                    <div class="a9-txt">
                                        <p class="grey-color txt-400">Certification</p>
                                        <p class="blue-color">Yes</p>
                                    </div>

                                </div>
                            </div>


                        </div> <!-- END ABOUT BOXES -->

                        {{-- <li class="nl-simple" aria-haspopup="true"> --}}
                            <a href="{{ asset('contact') }}"
                                class="header-btn btn-primary btn-sm tra-black-hover last-link">Book A Free Consultancy</a>
                        {{-- </li> --}}

                        <!-- Text -->
                        {!! $course->body !!}

                    </div>
                </div> <!-- END ABOUT TEXT -->


                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">


                    <!-- SIDEBAR CATEGORIES -->
                    <div class="blog-categories sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Popular Courses : </h5>

                        <!-- List -->
                        <ul class="blog-category-list clearfix">
                            @foreach ($courses as $index => $course)
                                @if ($index >= 5)
                                    {{-- Display only the first 5 popular courses --}}
                                @break
                            @endif
                            <li><a href="{{ route('courses.show', ['slug' => $course->slug]) }}" class="txt-400"><i
                                        class="fas fa-angle-double-right primary-color"></i>{{ $course->title }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>


                <!-- SIDEBAR COUNTRIES -->
                {{-- <div class="sidebar-countries sidebar-div mb-50">

									<!-- Title -->
									<h5 class="h5-lg">Popular Countries: </h5>

									<!-- List -->
									<ul class="sidebar-country-list clearfix">

										<li><a href="country-detail.html">
											<img class="img-fluid" src="images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
										</li>

										<li><a href="country-detail.html">
											<img class="img-fluid" src="images/sidebar-uk.jpg" alt="sidebar-image" />United Kingdom</a>
										</li>

										<li><a href="country-detail.html">
											<img class="img-fluid" src="images/sidebar-usa.jpg" alt="sidebar-image" />United States of America</a>
										</li>

									</ul>

								</div> --}}


            </aside> <!-- END SIDEBAR -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END ABOUT-9 -->




<!-- HORIZONTAL GREY LINE -->
<div class="section-divider">
    <div class="container">
        <div class="row">
            <div class="grey-border"></div>
        </div>
    </div>
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
        </div> <!-- END SECTION TITLE -->


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

                        {{-- @ --}}




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
                            <a href="{{ route('courses.show', ['slug' => $course->slug]) }}">Read More <i
                                    class="fas fa-caret-right"></i></a>

                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- END SERVICE BOXES CAROUSEL -->


    </div> <!-- End container -->
</section> <!-- END SERVICES-9 -->





<!-- ABOUT-6
       ============================================= -->
<section id="about-6" class="bg-scroll pt-100 about-section division">
    <div class="container white-color">
        <div class="row d-flex align-items-center">


            <!-- ABOUT IMAGE -->
            <div class="col-lg-6">
                <div class="about-6-img text-center">
                    <img class="img-fluid" src="{{ asset('images/image-08.png') }}" alt="about-image" />
                </div>
            </div>

            <!-- ABOUT TEXT -->
            <div class="col-lg-6">
                <div class="about-6-txt pc-20">
                    <!-- Section ID -->
                    <span class="section-id id-color">Unlock Your Global Study Abroad Consultancy Potential</span>
                    <!-- Title -->
                    <h2 class="h2-xs">Explore Quality Education Abroad</h2>
                    <!-- Text -->
                    <p class="p-md">Are you seeking top-notch education opportunities abroad? Look no further. Our
                        comprehensive network offers a wide range of quality education options to help you realize your
                        global aspirations. Whether you're interested in undergraduate, postgraduate, or research
                        programs, we've got you covered. Expand your horizons and embark on an enriching educational
                        journey with us.</p>
                    <!-- Small Title -->
                    <h5 class="h5-lg">4000+ Universities across 28 Countries:</h5>
                    <!-- Flags List -->
                    <ul class="flags-list">
                        <li><a href="country-details.html"><img src="{{ asset('images/flags/canada.png') }}"
                                    alt="flag" /><span>Canada</span></a></li>
                        <li><a href="country-details.html"><img src="{{ asset('images/flags/australia.png') }}"
                                    alt="flag" /><span>Australia</span></a></li>
                        <li><a href="country-details.html"><img src="{{ asset('images/flags/usa.png') }}"
                                    alt="flag" /><span>USA</span></a></li>
                        <li><a href="country-details.html"><img src="{{ asset('images/flags/united-kingdom.png') }}"
                                    alt="flag" /><span>UK</span></a></li>
                        <li><a href="country-details.html"><img src="{{ asset('images/flags/eu.png') }}"
                                    alt="flag" /><span>Europe</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- END ABOUT TEXT -->



        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END ABOUT-6 -->
@endsection

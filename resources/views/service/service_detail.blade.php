@extends('layouts.app')
@section('title', $service->metatitle )
@section('meta_description', $service->metadescription )
@section('meta_keywords', $service->keyword)
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
                            <h3 class="h3-md">{{ $service->title }}</h3>

                            <div class="blog-post-img mb-30">
                                <img class="img-fluid" src="{{ $service->hero }}" alt="blog-post-image" />
                            </div>

                            <!-- Text -->
                            {!! $service->body !!}

                        </div>
                    </div> <!-- END ABOUT TEXT -->

                    <!-- SIDEBAR -->
                    <aside id="sidebar" class="col-lg-4">


                        <div class="blog-categories sidebar-div mb-50">


                            <h5 class="h5-lg">Popular Services :</h5>


                            <ul class="blog-category-list clearfix">

                                @foreach ($recentservices as $index => $popularservice)
                                    @if ($index >= 5)

                                        @break
                                    @endif
                                    {{-- <li><a href="{{ route('services.show', ['service' => $popularservice]) }}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i>{{ $popularservice->title }}</a></li> --}}
                                    <li><a href="{{ route('services.show', ['slug' => $popularservice->slug]) }}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i>{{ $popularservice->title ?? 'Title Not Found' }}</a></li>
                                @endforeach
                            </ul>

                        </div>

                        	<!-- LATEST POSTS -->
								{{-- <div class="popular-posts sidebar-div mb-50">
                                    <!-- Title -->
                                    <h5 class="h5-lg">Latest Posts</h5>
                                    <ul class="latest-posts">
                                        @foreach ($recentposts as $recentpost)
                                            <!-- Latest Post -->
                                            <li class="clearfix">
                                                <!-- Date -->
                                                <p class="p-sm lp-date">{{ $recentpost->created_at->diffForHumans() }} - <span class="txt-400">{{ $recentpost->author_name->name }}</span></p>

                                                <!-- Link -->
                                                <h5 class="h5-sm">
                                                    <a href="{{ route('posts.show', ['post' => $recentpost]) }}">{{ $recentpost->title }}</a>
                                                </h5>

                                                <!-- Text -->
                                                <p>{{ $recentpost->excerpt }}</p>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div> --}}

                                <div class="popular-posts sidebar-div mb-50">
                                    <!-- Title -->
                                    <h5 class="h5-lg">Latest Posts</h5>
                                    <ul class="latest-posts">
                                        @foreach ($recentposts as $recentpost)
                                            <!-- Latest Post -->
                                            <li class="clearfix">
                                                <!-- Date -->
                                                <p class="p-sm lp-date">{{ $recentpost->created_at->diffForHumans() }} - <span class="txt-400">{{ $recentpost->author_name->name }}</span></p>

                                                <!-- Link -->
                                                <h5 class="h5-sm">
                                                    <a href="{{ route('posts.show', ['slug' => $recentpost->slug]) }}">{{ $recentpost->title ?? 'Title Not Found' }}</a>
                                                </h5>

                                                <!-- Text -->
                                                <p>{{ $recentpost->excerpt }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

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


                <h2 class="h2-xs">Our Most Popular Courses</h2>


                <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                    felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
                </p>

            </div>
        </div> <!-- END SECTION TITLE -->


    <!-- SERVICE BOXES CAROUSEL -->
<div class="row">
    <div class="col-lg-12">
        <div class="owl-carousel owl-theme owl-loaded services-carousel">


            {{-- @foreach ($service as $index => $service)
                @php

                    $bgClassNumber = ($index % 8) + 1;

                    $bgClass = 'bg-' . $bgClassNumber;
                @endphp

                <div class="sbox-9 {{ $bgClass }} sbox-9-color">


                    @if ($service->hero)
                        <img class="img-fluid" src="{{ $service->hero }}" alt="service-image" />
                    @endif

                   txt">


                        <h5 class="h5-lg">{{ $service->title }}</h5>


                        <p class="p-sm">{{ $service->description }}</p>


                        <a href="{{ route('services.show', ['service' => $service]) }}">Read More <i
                                class="fas fa-caret-right"></i></a>

                    </div>

                </div>
            @endforeach --}}

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

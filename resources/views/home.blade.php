@extends('layouts.app')
@section('title', 'Global Education Consultancy in Nashik | Join Best IELTS Course!')
@section('meta_description', 'Propel your education to new heights with Global Education Consultancy in Nashik City. Enroll in the top-rated IELTS Course.')
@section('meta_keywords', 'Best IELTS Course')
@section('content')

    <!-- HERO-2

============================================= -->
@if ($banners->count() > 0)
<section id="hero-1" class="hero-section division">
    <!-- SLIDER -->
    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($banners as $index => $banner)
                @if ($banner->hero)
                    <li data-target="#bannerCarousel" data-slide-to="{{ $index }}" @if($index === 0) class="active" @endif></li>
                @endif
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($banners as $index => $banner)
                @if ($banner->hero)
                    <div class="carousel-item @if($index === 0) active @endif">
                        <img src="{{ $banner->hero }}" class="d-block w-100" alt="slide-background">
                    </div>
                @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- END SLIDER -->

    <section id="cta-3" class="bg-darkblue cta-section division">
        <div class="container white-color">
            <div class="row ">
                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-12">
                    <div class="cta-txt text-center">
                        <h4 class="h4-xs txt-400">Unlock Your Empowering Futures: Study Abroad Tales with World-Class
                            Experts!</h4>
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
</section> <!-- END HERO-2 -->
@endif


    <!-- HERO-3
           ============================================= -->
    <section id="hero-3" class="bg-scroll hero-section division">

        <div class="container">

            <div class="row d-flex align-items-center">


                <div>
                    <style>
                        /* Slider CSS logic */
                        /* Slider CSS logic */
                        .slider1 {
                            --slider-inner-width: 1400px;
                            --slider-speed: 10s;
                        }

                        @keyframes scroll {
                            0% {
                                transform: translateX(-5%);
                            }

                            100% {
                                transform: translateX(calc((0px - var(--slider-inner-width)) - 5%));
                            }
                        }

                        .slider1 {
                            -webkit-transform: translate3d(0, 0, 0);
                            animation: scroll linear infinite var(--slider-speed);
                            width: calc(2 * var(--slider-inner-width));
                            transition: animation-play-state ease 0.3s;
                        }

                        .slider1:hover {
                            animation-play-state: paused;
                        }


                        .flex-container1 {
                            min-height: 100vh;
                            /* display: flex;
                               flex-direction: column; */
                            /* justify-content: center; */
                            /* align-items: center; */
                            /* padding: 4rem 0; */
                        }

                        .slider1-container1 {
                            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                            height: 530px;
                            overflow: hidden;
                            position: relative;
                            width: 100%;
                            margin-right: 10px;
                        }

                        .slider1-container1 .slider1 {
                            display: flex;
                            align-items: center;
                            list-style: none;
                            margin: 0;
                        }

                        .slider1-container1 .slider1__slide1 {
                            height: 530px;
                            flex-grow: 1;
                            /* flex-basis: 0; */
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            background: rgba(255, 255, 255, 0);
                            margin-right: 30px;
                            padding-top: 50px;
                        }

                        .slider1-container1 .slider1__slide1:hover {
                            background: rgba(234, 234, 234, 0.568);
                            cursor: pointer;
                        }

                        .slider1-container1 .slider1__slide1 .slide1__content1 {
                            color: white;
                            font-size: 80px;
                            /* height: 250px;
                                                        width: 250px;
                                                        margin-right: 5px; */
                        }
                    </style>
                    <div class="flex-container1">
                        <div class="slider1-container1">
                            <ul class="slider1">
                                @foreach ($posts as $post)
                                @if ($post->hero)
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="{{ $post->hero }}" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="black-color">{{ $post->title }}</a></h5>
                                                    <!-- Text -->
                                                    <p class="grey-color">{{ Illuminate\Support\Str::limit($post->description, $limit = 80, $end = '...') }}</p>
                                                    <!-- Post Data -->

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            @endforeach

                            </ul>
                        </div>

                    </div>

                    {{-- <div class="slider2">

                        <div class="slide2-track">
                            @foreach ($posts as $post)
							@if ($post->hero)
                                <div class="slide2">
                                    <div class="blog-post mx-3">
                                        <div class="blog-post-img mb-30">
                                            <img class="img-fluid cropped-image " src="{{ $post->hero }}"
                                                alt="blog-post-image">
                                        </div>
                                        <div class="blog-post-txt">
                                            <p class="post-meta"><a href="#" class="grey-color">Study Visa</a>- UK
                                            </p>
                                            <h5 class="h5-lg"><a href="{{ route('posts.show', ['post' => $post]) }}"
                                                    class="darkblue-color">{{ $post->title }}</a></h5>
                                            <p>{{ Illuminate\Support\Str::limit($post->description, $limit = 80, $end = '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
								@endif
                            @endforeach





                        </div>

                    </div> --}}
                    <!-- partial -->
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END HERO-3 -->






    <!-- ABOUT-2
           ============================================= -->
    <section id="about-2" class="wide-60 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- ABOUT IMAGE -->
                <div class="col-md-6">
                    <div class="about-img text-center mb-40">
                        <img class="img-fluid" src="images/aboutGlobal2.jpg" alt="about-image" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-2-txt pc-20 mb-40">


                        <!-- Title -->
                        <h3 class="h3-lg primary-color">About Global Study Abroad Consultancy </h3>

                        <!-- Section ID -->
                        <span class="section-id darkblue-color">Scholarships, Support, Success : Choose Global Study Abroad Consultancy </span>
                        <!-- INFO BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Founded in 2015, Global Study Abroad Consultancy in Nashik is a leading institute for English
                                communication skills development. We offer high-quality training in communicative English,
                                competitive exam preparation, and effective communication. With years of experience, our
                                teaching methods cater to the specific needs of every learner. Located on College Road, our
                                institute is renowned for its excellence in English language education.</p>
                        </div>

                        <!-- INFO BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>
                                GEC is a trusted study abroad consultant in Nashik, working with 35 countries worldwide. We
                                provide top-notch test preparation for IELTS, TOEFL, and PTE, along with foreign language
                                and spoken English courses. Choose GEC for the best options in foreign immigration programs.
                            </p>
                        </div>

                    </div>
                </div>




            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-2 -->


    <!-- COUNTRIES-2
        ============================================= -->
    <section id="countries-2" class="bg-tra-map bg-lightgrey wide-40 countries-section division">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <!-- Title -->
                    <h2 class="h2-xs primary-color justify-content-center">Where Dreams Take Flight</h2>

                    <!-- Text -->
                    <p class="p-md">Explore our diverse study programs abroad, discover scholarship opportunities, and
                        receive expert visa assistance. Prepare for an enriching journey and embrace cultural integration
                        for a meaningful experience to countries. Join us now and shape a brighter future!
                    </p>

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row">


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/canada.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">Canada</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">Canada offers a world-class education system and a diverse
                            cultural experience.
                            With its welcoming atmosphere and top-notch universities, studying in Canada opens doors
                            to numerous opportunities for personal and academic growth.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Explore Canadian universities and their excellent academic programs <i
                                        class="fas fa-caret-right"></i></a></li>


                            <li><a href="#">Learn about scholarships and funding options for international students
                                    in Canada <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/australia.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">Australia</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">Australia is renowned for its high-quality education and
                            research opportunities.
                            Immerse yourself in the Australian way of life while pursuing your academic goals,
                            and explore the unique landscapes and wildlife of this fascinating country.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Discover top Australian universities and their wide range of study
                                    programs <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="#">Learn about the student visa process and living as an international
                                    student in Australia <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/united-kingdom.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">United Kingdom</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">The United Kingdom has a rich academic heritage and is home
                            to some of the world's
                            most prestigious universities. Experience the vibrant culture of the UK and gain access to
                            exceptional educational resources.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Explore the top universities in the UK and their diverse study programs
                                    <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="#">Learn about the application process and requirements for international
                                    students <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/new-zealand.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">New Zealand</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">New Zealand offers a friendly and supportive environment for
                            international students.
                            Study in breathtaking landscapes and experience a unique blend of Maori and Pacific cultures.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Discover top universities in New Zealand and their academic excellence <i
                                        class="fas fa-caret-right"></i></a></li>

                            <li><a href="#">Learn about the New Zealand student visa process and work opportunities
                                    for students <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/singapore.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">Singapore</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">Singapore is a hub of education and innovation in Asia.
                            Experience the blend of Eastern
                            and Western cultures while pursuing world-class education and research opportunities in this
                            dynamic city-state.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Explore the academic programs offered by Singaporean universities <i
                                        class="fas fa-caret-right"></i></a></li>

                            <li><a href="#">Discover scholarships and financial aid options for international
                                    students <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img src="images/flags/usa.png" alt="flag-icon" />
                            <h5 class="h5-xl darkblue-color">USA</h5>
                        </div>

                        <!-- Text -->
                        <p class="p-sm justify-content-center">The United States is a dream destination for many
                            international students. With its
                            diverse culture and renowned universities, studying in the USA can be a transformative
                            experience
                            to global opportunities.
                        </p>

                        <!-- Links List -->
                        <ul class="links-list darkblue-color justify-content-center">

                            <li><a href="#">Learn about the application process, student visas, and life on American
                                    campuses <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="#">Discover funding options, scholarships, and work opportunities for
                                    international students <i class="fas fa-caret-right"></i></a></li>

                            <li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

                        </ul>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- END COUNTRIES-2 -->
    <!-- SERVICES-4
        ============================================= -->
    <section id="services-4" class="wide-70 services-section division">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <!-- Title -->
                    <h2 class="h2-xs darkblue-color">What Global Study Abroad Consultancy Offers?</h2>

                    <!-- Text -->
                    <p class="p-md">Presents a wide array of enticing opportunities that pave the way for success and
                        self-discovery. Discover what Global Study Abroad Consultancy offers and embark on a journey of knowledge, empowerment, and
                        lasting connections.</p>

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
                                <h5 class="h5-md primary-color">{{ $service->title }}</h5>
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

    <!-- STATISTIC-2
           ============================================= -->
    <div id="statistic-2" class="bg-blue-map wide-60 statistic-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center white-color">

                    <!-- Title -->
                    <h2 class="h2-xs">Why Choose Us?</h2>

                    <!-- Text -->
                    <p class="p-md">Unleashing Brilliance: Inspiring Tales of Triumphs from Our Institute's Global Study Abroad Consultancy Achievers. Expertise for Study Aboard process.
                    </p>

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row">


                <!-- STATISTIC BLOCK #1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                        <!-- Icon -->
                        <span class="flaticon-316-mortarboard"></span>

                        <!-- Text -->
                        <h5 class="primary-color"><span class="count-element">2000</span>+</h5>
                        <p class="p-md">Achiever Students</p>

                    </div>
                </div>

                <!-- STATISTIC BLOCK #2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                        <!-- Icon -->
                        <span class="flaticon-431-bank"></span>

                        <!-- Text -->
                        <h5 class="primary-color"><span class="count-element">4000</span>+</h5>
                        <p class="p-md">Universities Collabration</p>

                    </div>
                </div>

                <!-- STATISTIC BLOCK #3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                        <!-- Icon -->
                        <span class="flaticon-285-internet-2"></span>

                        <!-- Text -->
                        <h5 class="primary-color"><span class="count-element">28</span>+</h5>
                        <p class="p-md">Global Study Abroad Consultancy Countries </p>

                    </div>
                </div>

                <!-- STATISTIC BLOCK #4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                        <!-- Icon -->
                        <span class="flaticon-067-suitcase-1"></span>

                        <!-- Text -->
                        <h5 class="primary-color"><span class="count-element">20</span>+</h5>
                        <p class="p-md">Years Of Experience</p>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END STATISTIC-2 -->


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
                            <li><a href="country-details.html"><img src="images/flags/canada.png"
                                        alt="flag" /><span>Canada</span></a></li>
                            <li><a href="country-details.html"><img src="images/flags/australia.png"
                                        alt="flag" /><span>Australia</span></a></li>
                            <li><a href="country-details.html"><img src="images/flags/usa.png"
                                        alt="flag" /><span>USA</span></a></li>
                            <li><a href="country-details.html"><img src="images/flags/united-kingdom.png"
                                        alt="flag" /><span>UK</span></a></li>
                            <li><a href="country-details.html"><img src="images/flags/eu.png"
                                        alt="flag" /><span>Europe</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- END ABOUT TEXT -->



            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-6 -->







    <!-- BLOG-1
           ============================================= -->
    <section id="blog-1" class="wide-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <!-- POST SLIDER HEADER -->
            <div class="row">
                <div class="col-md-12 section-title center">
                    <!-- Title -->
                    <h2 class="h2-xs">Our Stories & News</h2>
                    <!-- Text -->
                    <p class="p-md">Explore our latest stories and news articles. Stay updated with valuable insights,
                        trends, and information in the field of education and immigration.</p>
                </div>
            </div> <!-- END POST SLIDER HEADER -->



            <!-- BLOG POSTS HOLDER -->
            <div class="row">


                @foreach ($posts as $key => $post)
                    @if ($key < 3)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-post">


                                <!-- BLOG POST IMAGE -->
                                @if ($post->hero)
                                    <div class="blog-post-img mb-30">
                                        <img class="img-fluid" src="{{ $post->hero }}" alt="blog-post-image" />
                                    </div>
                                @endif

                                <!-- BLOG POST TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Meta -->
                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12
                                        min read
                                    </p>

                                    <!-- Title -->
                                    {{-- <h5 class="h5-lg"><a href="single-post.html" class="darkblue-color">
                                            <a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                                    </h5> --}}

                                    {{-- @if ($post->slug)
    <h5 class="h5-lg">
        <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="darkblue-color">
            {{ $post->title }}
        </a>
    </h5>
@else
    <h5 class="h5-lg">
        {{ $post->title }}
    </h5>
@endif --}}




                                    <!-- Text -->
                                    <p> {{ Illuminate\Support\Str::limit($post->description, $limit = 120, $end = '...') }}
                                    </p>

                                    <!-- Post Data -->
                                    <p class="post-data">By <a href="#">{{ $post->author_name->name }}</a> -
                                        {{ $post->created_at->format('F d, Y') }}</p>

                                </div>


                            </div>
                        </div>
                    @else
                    @break
                @endif
            @endforeach



        </div> <!-- END BLOG POSTS HOLDER -->


    </div> <!-- End container -->
</section> <!-- END BLOG-1 -->




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

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


            <!-- REQUEST FORM -->
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div id="request-form" class="text-center mb-40">
                    <form name="requestForm" class="row request-form bg-lightgrey" method="POST"
                          action="{{ route('contact.store') }}">

                        @csrf

                        <!-- Request Form Text -->
                        <div class="col-md-12">
                            <h5 class="h5-lg">Request Free Consultation</h5>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-name" class="col-md-12">
                            <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-email" class="col-md-12">
                            <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-phone" class="col-md-12">
                            <input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number">
                        </div>

                        <!-- Request Form Input -->
                        <div id="input-subject" class="col-md-12">
                            <input type="text" name="subject" class="form-control subject" placeholder="Enter Subject" required>
                        </div>

                        <!-- Request Form Textarea -->
                        <div id="input-message" class="col-md-12">
                            <textarea name="message" class="form-control message" placeholder="Enter Your Message"></textarea>
                        </div>

                        <!-- Request Form Button -->
                        <div class="col-md-12 form-btn">
                            <button type="submit" class="btn btn-primary tra-black-hover submit" id="submitBtn">Send Request</button>
                        </div>

                        <!-- Request Form Message -->
                        <div class="col-md-12 request-form-msg text-center">
                            <div id="sendingMsg"><span class="loading"></span></div>
                            <div id="thankYouMessage" style="display: none;">
                                <h3>Thank you for your message!</h3>
                                <p>We will get in touch with you shortly.</p>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Add this script at the end of your Blade template or in a separate JS file -->
                <script>
                    $(document).ready(function() {
                        $('form[name="requestForm"]').submit(function(event) {
                            event.preventDefault(); // Prevent the default form submission

                            $('#sendingMsg .loading').text('Sending...'); // Display sending message

                            var formData = $(this).serialize(); // Serialize the form data

                            // Send the AJAX request
                            $.ajax({
                                url: "{{ route('contact.store') }}", // The Laravel route to handle the form submission
                                method: "POST",
                                data: formData,
                                success: function(response) {
                                    // On success, display thank you message and hide sending message
                                    $('#sendingMsg').hide();
                                    $('#thankYouMessage').show();
                                },
                                error: function(xhr, status, error) {
                                    // Handle the error if the AJAX request fails
                                    console.error(error);
                                    $('#sendingMsg .loading').text('Error!'); // Display an error message
                                }
                            });
                        });
                    });
                </script>


            </div> <!-- END REQUEST FORM -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END REQUEST FORM -->
@endsection

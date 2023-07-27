@extends('layouts.app')
@section('content')
    <!-- HERO-2
           ============================================= -->
    <section id="hero-2" class="hero-section division">


        <!-- SLIDER -->
        <div class="slider">
            <ul class="slides">



                <!-- SLIDE #2 -->
                <li id="slide-2">

                    <!-- Background Image -->
                    <img src="images/slider/slide-5.jpg" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center right-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-7">
                                    <div class="caption-txt white-color">

                                        <!-- Title -->
                                        <h3>Top Ranked</h3>
                                        <h2>Universities</h2>

                                        <!-- Text -->
                                        <h4 class="h4-md">The World is Your Classroom: Enroll at Global. Explore our
                                            diverse study programs abroad, discover scholarship opportunities, and receive
                                            expert visa assistance. </h4>

                                    </div>
                                </div>
                            </div> <!-- End row -->
                        </div> <!-- End container -->
                    </div> <!-- End Image Caption -->

                </li> <!-- END SLIDE #2 -->


                <!-- SLIDE #3 -->
                <li id="slide-3">

                    <!-- Background Image -->
                    <img src="images/slider/slide-6.jpg" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center left-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="caption-txt">

                                        <!-- Title -->
                                        <h3>Unleash Your Potential </h3>
                                        <h2 class="primary-color">Study Abroad with Global Eduction </h2>

                                        <!-- Text -->
                                        <h4 class="h4-md"> 40K+ Top Ranked Universities Collabration , 100% Counsellin
                                            free, Travel, Forex ad insaurance assiantanceand many more...</h4>

                                    </div>
                                </div>
                            </div> <!-- End row -->
                        </div> <!-- End container -->
                    </div> <!-- End Image Caption -->

                </li> <!-- END SLIDE #3 -->

            </ul>
        </div> <!-- END SLIDER -->


        <!-- SLIDER NAV -->
        <div class="hero-slider-nav icon-xs white-color">
            <div class="slider-btn">
                <a class="slide-prev"><span class="flaticon-442-left-arrow"></span></a>
                <a class="slide-next"><span class="flaticon-441-right-arrow"></span></a>
            </div>
        </div>
        <section id="cta-3" class="bg-darkblue cta-section division">
            <div class="container white-color">
                <div class="row ">


                    <!-- CALL TO ACTION TEXT -->
                    <div class="col-lg-12">
                        <div class="cta-txt text-center">
                            <h4 class="h4-xs txt-400">Unlock Your Empowering Futures : Study Abroad Tales with World-Class
                                Experts!</h4>
                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- End container -->
        </section>

    </section> <!-- END HERO-2 -->
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
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="images/path" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="images/path" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="images/path" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="images/path" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="path/to/image" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="path/to/image" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider1__slide1">
                                    <div class="slide1__content1">
                                        <div class="blog-post">
                                            <!-- BLOG POST IMAGE -->
                                            <div class="blog-post-img mb-30">
                                                <img class="img-fluid" src="./image/" alt="blog-post-image">
                                            </div>
                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">
                                                <a href="#">
                                                    <!-- Post Meta -->
                                                    <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read</p>
                                                    <!-- Title -->
                                                    <h5 class="h5-lg"><a href="#" class="primary-color">Post Title</a></h5>
                                                    <!-- Text -->
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                    <!-- Post Data -->
                                                    <p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                        <h3 class="h3-lg primary-color">About Global </h3>

                        <!-- Section ID -->
                        <span class="section-id darkblue-color">Scholarships, Support, Success : Choose Global </span>
                        <!-- INFO BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Founded in 2015, Global Education Consultancy in Nashik is a leading institute for English
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
                    <h2 class="h2-xs darkblue-color">What Global Offers?</h2>

                    <!-- Text -->
                    <p class="p-md">Presents a wide array of enticing opportunities that pave the way for success and
                        self-discovery. Discover what Global offers and embark on a journey of knowledge, empowerment, and
                        lasting connections.</p>

                </div>
            </div>

            <div class="row">

                <!-- SERVICE BOX #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-431-bank"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md primary-color">Study Programs Abroad</h5>
                                <p>Explore a perfect academic pathway to achieve your goals.</p>
                            </div>

                        </a>
                    </div>
                </div>

                <!-- SERVICE BOX #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-023-wallet"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md darkblue-color">Scholarships & Financial Aid</h5>
                                <p>Discover financial aid options to find funding for your dream education.</p>
                            </div>

                        </a>
                    </div>
                </div>

                <!-- SERVICE BOX #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-004-wrench"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md darkblue-color">Student Visa Assistance</h5>
                                <p>Navigating the overwhelming process by our experts guidance and support.</p>
                            </div>

                        </a>
                    </div>
                </div>

                <!-- SERVICE BOX #4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-032-user-3"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md darkblue-color">Pre-Departure Assistance</h5>
                                <p>Preparing for a smooth transition to help you to settle into your new academics.</p>
                            </div>

                        </a>
                    </div>
                </div>

                <!-- SERVICE BOX #5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-067-suitcase-1"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md darkblue-color">Accommodation Support</h5>
                                <p> We assist you in finding safe and comfortable living options near your university.</p>
                            </div>

                        </a>
                    </div>
                </div>

                <!-- SERVICE BOX #6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="sbox-4 icon-sm">
                        <a href="study-abroad-details.html">

                            <!-- Icon -->
                            <div class="sbox-4-icon primary-color"><span class="flaticon-318-planet-earth"></span></div>

                            <!-- Text -->
                            <div class="sbox-4-txt">
                                <h5 class="h5-md darkblue-color">Cultural Integration</h5>
                                <p> Our advisors help you adapt to the local customs and traditions for a meaningful stay.
                                </p>
                            </div>

                        </a>
                    </div>
                </div>

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
                    <p class="p-md">Unleashing Brilliance: Inspiring Tales of Triumphs from Our Institute's Global
                        Consultancy Achievers. Expertise for Study Aboard process.
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
                        <p class="p-md">Global Countries </p>

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
                        <span class="section-id id-color">Unlock Your Global Potential</span>
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
                                    <h5 class="h5-lg"><a href="single-post.html" class="darkblue-color">
                                            <a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                                    </h5>

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

@extends('layouts.app')
@section('content')

<!-- hero section -->

<section class="crm-hero ptb-120 position-relative overflow-hidden" style="background-image: url('assets/img/shape/crm-hero-bg.png')">
            <!-- <img src="assets/img/crm/slack.png" alt="slack" class="position-absolute slack-thumb"> -->
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="crm-hero-content position-relative z-1">
                            <img src="assets/img/shape/arrow-lg-red.png" alt="arrow" class="position-absolute arrow-lg-red z--1">
                            <h4 class="crm-subtitle fw-semibold">Build Everlasting<img src="assets/img/shape/arrow-red.png" alt="arrow" class="ms-2"></h4>
                            <h1 class="display-2 mb-0">Unlock Your Potential<span class="d-inline-block d-lg-block">with Our</span> Recruitment Services</h1>

                            <!-- <div class="crm-hero-bottom mt-60">
                                <p class="text-white lead">30 Day Free Trial <span class="dot"></span> No Credit Card Required</p>
                                <form class="crm-hero-form d-flex align-items-center">
                                    <input type="email" placeholder="Enter Your Email" fdprocessedid="od8yya">
                                    <button type="submit" class="crm-submit-btn" fdprocessedid="c95ehd">Subscribe</button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="crm-hero-img mt-60 mt-lg-0">
                            <img src="assets/img/crm/hero-img.png" alt="not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="crm-header-social d-none d-xl-flex align-items-center position-absolute z-5">
                <span class="title">Get In Touch</span>
                <ul class="social-list ms-3 list-unstyled p-0 m-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div> -->
        </section>

        <!-- about company -->

        <section class="dg-about-section pt-120 bg-white position-relative z-1">
            <img src="assets/img/digital-agency/ab-shadow-shape.png" alt="shadows" class="position-absolute end-0 top-0 z--1">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="dg-about-left pe-4">
                            <img src="assets/img/digital-agency/ab-1.jpg" class="rounded-4 img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="dg-about-right ps-lg-4">
                            <span class="fw-bold text-dg-primary">ABOUT COMPANY</span>
                            <h4 class="mt-2 mb-4 heading-dg-color">Technology is best when<br> people together</h4>
                            <p class="mb-5 text-dg-color"><b>We are dedicated to connecting exceptional talent with outstanding opportunities.  <span class="fw-bold text-dg-primary">With years of experience in the recruitment industry, we understand the importance of finding the perfect fit for both candidates and employers</span>. Our mission is to empower individuals to achieve their career goals and help organizations thrive by providing them with the best talent available. With our personalized approach, industry expertise, and commitment to excellence, we are your trusted partner in recruitment, ensuring mutual success and growth.</b></p>
                            <!-- <a href="services.html" class="btn dg-outline-btn rounded-pill">Browse all Service</a> -->
                            <div class="dg-about-bottom position-relative mt-70">
                                <img src="assets/img/digital-agency/ab-shape-box.jpg" alt="not found" class="rounded-3 shape-box">
                                <img src="assets/img/digital-agency/ab-2.jpg" alt="not found" class="rounded-4 img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/digital-agency/doted-line-left.png" alt="doted line" class="position-absolute start-0 bottom-0 z--1">
            <img src="assets/img/digital-agency/doted-line-right.png" alt="doted line" class="position-absolute end-0 bottom-0 z--1">
            <span class="dg-circle-1 dg-circle-style-1 position-absolute z--1 rounded-circle"></span>
            <span class="dg-circle-2 dg-circle-style-1 position-absolute z--1 rounded-circle"></span>
            <span class="dg-circle-3 dg-circle-style-2 position-absolute z--1 rounded-circle"></span>
            <span class="dg-circle-4 dg-circle-style-2 position-absolute z--1 rounded-circle"></span>
        </section>

        <!-- recruitment process -->

        <section class="dg-service-section bg-light-subtle pb-120 position-relative z-1 overflow-hidden">
            <img src="assets/img/digital-agency/sr-line.png" alt="doted line" class="position-absolute end-0 z--1 sr-line">
            <span class="sr-circle-1 dg-circle-style-1 rounded-circle position-absolute z--1"></span>
            <span class="sr-circle-2 dg-circle-style-2 rounded-circle position-absolute z--1"></span>
            <div class="container position-relative z-1">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section-title text-center mb-5">
                            <span class="fw-bold dg-text-primary">RECRUITMENT PROCESS</span>
                            <h2 class="mt-2 heading-dg-color">Finding Your Perfect Match.!!</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="dg-service-item bg-white rounded">
                            <!-- <div class="icon-wrapper rounded-circle shadow-1">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle w-100 h-100 bg-color-1">
                                  <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M22.6 7V19C22.6 22.6 20.8 25 16.6 25H7C2.8 25 1 22.6 1 19V7C1 3.4 2.8 1 7 1H16.6C20.8 1 22.6 3.4 22.6 7Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                      <path d="M13.3 15.4H18.4M8.20004 20.2H18.4M16 1V10.432C16 10.96 15.376 11.224 14.992 10.876L12.208 8.308C12.0976 8.20405 11.9517 8.14616 11.8 8.14616C11.6484 8.14616 11.5025 8.20405 11.392 8.308L8.60804 10.876C8.22404 11.224 7.60004 10.96 7.60004 10.432V1H16Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </span>
                            </div> -->
                            <a href="service-single.html">
                                <h5 class="mt-4 mb-2 heading-dg-color">Job Posting</h5>
                            </a>
                            <p class="mb-3 text-dg-color">Attracting qualified candidates by advertising open positions and providing detailed job descriptions..</p>
                            <span class="number-count position-relative color-1 fw-semibold">01</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="dg-service-item bg-white rounded">
                            <!-- <div class="icon-wrapper rounded-circle shadow-2">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle w-100 h-100 bg-color-2">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M10.12 22.6H15.88C20.68 22.6 22.6 20.68 22.6 15.88V10.12C22.6 5.32002 20.68 3.40002 15.88 3.40002H10.12C5.31999 3.40002 3.39999 5.32002 3.39999 10.12V15.88C3.39999 20.68 5.31999 22.6 10.12 22.6Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      <path d="M8.212 3.4V1M13 3.4V1M17.8 3.4V1M22.6 8.2H25M22.6 13H25M22.6 17.8H25M17.8 22.6V25M13.012 22.6V25M8.212 22.6V25M1 8.2H3.4M1 13H3.4M1 17.8H3.4M11.2 19H14.8C17.8 19 19 17.8 19 14.8V11.2C19 8.2 17.8 7 14.8 7H11.2C8.2 7 7 8.2 7 11.2V14.8C7 17.8 8.2 19 11.2 19Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      <path d="M13 10.24L11.872 12.208C11.62 12.64 11.824 13 12.328 13H13.672C14.176 13 14.38 13.36 14.128 13.792L13 15.76" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </span>
                            </div> -->
                            <a href="service-single.html">
                                <h5 class="mt-4 mb-2 heading-dg-color">Technical Assessments</h5>
                            </a>
                            <p class="mb-3 text-dg-color">Evaluating candidates' technical skills and knowledge through assessments, tests, or practical exercises.</p>
                            <span class="number-count position-relative color-2 fw-semibold">02</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="dg-service-item bg-white rounded">
                            <!-- <div class="icon-wrapper rounded-circle shadow-3">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle w-100 h-100 bg-color-3">
                                  <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M20.2 13V5.8C20.2 3.148 20.2 1 15.4 1H8.2C3.4 1 3.4 3.148 3.4 5.8V13M5.8 13C1 13 1 15.148 1 17.8V19C1 22.312 1 25 7 25H16.6C21.4 25 22.6 22.312 22.6 19V17.8C22.6 15.148 22.6 13 17.8 13C16.6 13 16.264 13.252 15.64 13.72L14.416 15.016C14.0795 15.3739 13.6732 15.6592 13.2223 15.8542C12.7714 16.0492 12.2853 16.1497 11.794 16.1497C11.3027 16.1497 10.8166 16.0492 10.3657 15.8542C9.91475 15.6592 9.50852 15.3739 9.172 15.016L7.96 13.72C7.336 13.252 7 13 5.8 13Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                      <path d="M10.06 9.67593H14.056M9.06396 6.07593H15.064" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </span>
                            </div> -->
                            <a href="service-single.html">
                                <h5 class="mt-4 mb-2 heading-dg-color">Interviews</h5>
                            </a>
                            <p class="mb-3 text-dg-color">Conducting structured interviews to assess candidates' qualifications, experience, and cultural fit within the organization</p>
                            <span class="number-count position-relative color-3 fw-semibold">03</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="dg-service-item bg-white rounded">
                            <!-- <div class="icon-wrapper rounded-circle shadow-4">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle w-100 h-100 bg-color-4">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M5.7904 4.58979V6.991M10.5928 4.58979V6.991M5.7904 18.997V21.3982M10.5928 18.997V21.3982M15.3952 5.7904H20.1976M15.3952 20.1976H20.1976M21.7824 10.5928H4.21761C2.44072 10.5928 1 9.14007 1 7.37519V4.21761C1 2.44072 2.45273 1 4.21761 1H21.7824C23.5593 1 25 2.45273 25 4.21761V7.37519C25 9.14007 23.5473 10.5928 21.7824 10.5928ZM21.7824 25H4.21761C2.44072 25 1 23.5473 1 21.7824V18.6248C1 16.8479 2.45273 15.4072 4.21761 15.4072H21.7824C23.5593 15.4072 25 16.8599 25 18.6248V21.7824C25 23.5473 23.5473 25 21.7824 25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </span>
                            </div> -->
                            <a href="service-single.html">
                                <h5 class="mt-4 mb-2 heading-dg-color">Final Selection</h5>
                            </a>
                            <p class="mb-3 text-dg-color">Making the ultimate decision based on a comprehensive evaluation of candidates and choosing the most suitable.</p>
                            <span class="number-count position-relative color-4 fw-semibold">04</span>
                        </div>
                    </div>
                </div>
                <img src="assets/img/digital-agency/sr-doted.png" alt="doted shape" class="position-absolute start-50 translate-middle-x sr-doted-shape z--1">
            </div>
        </section>

        <!-- our experts -->

        <section class="dg-team-section pb-100 position-relative z-1 overflow-hidden ptb-120">
            <img src="assets/img/digital-agency/team-curve-left.png" alt="team curve" class="position-absolute left tm-curve top-0 h-100 z--1 d-none d-xxl-block">
            <img src="assets/img/digital-agency/team-curve-right.png" alt="team curve" class="position-absolute right tm-curve top-0 z--1 h-100 d-none d-xxl-block">
            <img src="assets/img/digital-agency/team-line.png" alt="line shape" class="position-absolute team-line z--1 bottom-0">
            <span class="dg-circle-style-1 dg-circle-1 rounded-circle position-absolute z--1"></span>
            <span class="dg-circle-style-2 dg-circle-2 rounded-circle position-absolute z--1"></span>
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-5 col-lg-6">
                        <div class="dg-team-content text-center text-lg-start mb-4 mb-lg-0">
                            <span class="fw-bold text-dg-primary mb-2">MEET OUR EXPERTS</span>
                            <img src="assets/img/shape/arrow-red.png" alt="arrow" class="ms-1">
                            <h2 class="mb-4">Our awesome the trust from clients</h2>
                            <p class="mb-40"><b>Get to know our team of experienced recruitment professionals who bring industry expertise, deep insights, and a personalized approach to finding the best talent for your organization. With their guidance and support, we ensure a seamless and successful recruitment process that aligns with your specific needs and goals</b></p>
                            <!-- <a href="contact-us.html" class="btn dg-primary-btn rounded-pill">Join Our Team</a> -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="dg-team-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-abdfbffa19c5f9ab" aria-live="polite" style="transform: translate3d(-770px, 0px, 0px); transition-duration: 0ms;"><div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-1.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div><div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-2.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div><div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-3.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div>
                                <div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-1.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div>
                                <div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-2.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div>
                                <div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-3.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div>
                            <div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-1.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div><div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-2.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div><div class="dg-team-single swiper-slide rounded-3 position-relative overflow-hidden swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 232.667px; margin-right: 24px;">
                                    <img src="assets/img/digital-agency/team-3.jpg" alt="team" class="img-fluid">
                                    <div class="designation-box bg-white rounded-3 text-center">
                                        <h6 class="heading-dg-color mb-0">Forrest Collman</h6>
                                        <span class="fs-sm d-block">Founder &amp; CEO</span>
                                    </div>
                                </div></div>
                            <div class="dg-team-slider-controls dg-slider-control d-flex align-items-center justify-content-center mt-40 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- benefits -->

        <section class="why-choose-us pt-60 pb-120">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-12 order-1 order-lg-0">
                        <div class="feature-img-holder mt-5 mt-lg-0 mt-xl-0">
                            <img src="assets/img/benefitsr.jpg" class="img-fluid" alt="feature-image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-primary shadow-sm d-inline-block">
                                <i class="fas fa-shield fa-2x text-white"></i>
                            </div>
                            <h2>Benefits of Joining Our Company</h2>
                            <p><b>Experience a supportive and inclusive work environment that fosters personal and professional growth. Enjoy competitive compensation, comprehensive benefits, ongoing learning opportunities, and the chance to be part of a talented team driving innovation and making a meaningful impact.</b></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Access to Top Talent</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Improved Performance and Productivity</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Enhanced Diversity and Inclusion</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Cost Savings</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Positive Employer Branding</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Improved Employee Retention</li>
                            </ul>
                            <!-- <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="fas fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- how to apply -->

        <section class="sc-htw-section bg-light-subtle position-relative z-1 overflow-hidden ptb-120 border-line-bg">
            <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                    <div class="col-xxl-6 col-lg-7">
                        <div class="section-title text-center text-xxl-start">
                            <h2 class="mb-0">How to Apply</h2>
                        </div>
                    </div>
                </div>
                <img src="assets/img/software-company/line-doted.png" alt="not found" class="img-fluid mt-40 mb-4 line-doted">
                <div class="row g-4 justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="htw-single-item bg-white rounded">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper position-relative">
                                  <h4 class="mb-0 text-white position-absolute start-50 top-50 translate-middle">01</h4>
                                  <img src="assets/img/software-company/icon-shape-2.png" alt="icon">
                              </span>
                                <h5 class="mb-0 ms-3">Explore Open Positions</h5>
                            </div>
                            <p class="mb-0 mt-3"> Visit our website or job portals to browse through our current job openings, align with your skills, qualifications, and interests. </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="htw-single-item bg-white rounded">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper position-relative">
                                  <h4 class="mb-0 text-white position-absolute start-50 top-50 translate-middle">02</h4>
                                  <img src="assets/img/software-company/icon-shape-2.png" alt="icon">
                              </span>
                                <h5 class="mb-0 ms-3">Prepare Your Application</h5>
                            </div>
                            <p class="mb-0 mt-3">Tailor your resume and cover letter to highlight your relevant experience and achievements <br>and skills..</p>
                           
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="htw-single-item bg-white rounded">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper position-relative">
                                  <h4 class="mb-0 text-white position-absolute start-50 top-50 translate-middle">03</h4>
                                  <img src="assets/img/software-company/icon-shape-3.png" alt="icon">
                              </span>
                                <h5 class="mb-0 ms-3">Application Review</h5>
                            </div>
                            <p class="mb-0 mt-3">Our recruitment team will review your application carefully,we evaluate each applicant's qualifications.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="htw-single-item bg-white rounded">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper position-relative">
                                  <h4 class="mb-0 text-white position-absolute start-50 top-50 translate-middle">04</h4>
                                  <img src="assets/img/software-company/icon-shape-4.png" alt="icon">
                              </span>
                                <h5 class="mb-0 ms-3">Final Decision</h5>
                            </div>
                            <p class="mb-0 mt-3">After assessing all candidates, we will make a final decision and extend an offer to the selected candidate</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial -->

        <section class="crm-feedback-section pt-120 pb-40 overflow-hidden bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="crm-feedback-box rounded position-relative">
                            <div class="crm-feedback-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-a30f061a4ec10b2e2" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-4400px, 0px, 0px);"><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="crm-feedback-single swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="crm-feedback-single swiper-slide text-center swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="crm-feedback-single swiper-slide text-center swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="crm-feedback-single swiper-slide text-center" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="crm-feedback-single swiper-slide text-center" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                <div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div><div class="crm-feedback-single swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 870px; margin-right: 10px;">
                                        <p class="mb-4 text-white">“Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’rerunning a jobs. Our hosting costs have decreased by over 90% and we're running at about 25% of our capacity”</p>
                                        <h4 class="mb-0 text-white">Jerry G. Sanchez</h4>
                                        <ul class="crm-stars d-inline-flex align-items-center p-0 m-0">
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                            <li class="list-inline"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div></div>
                                <div class="crm-next-control" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a30f061a4ec10b2e2"></div>
                                <div class="crm-prev-control" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a30f061a4ec10b2e2"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="crm-feedback-control-slider swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                                <div class="swiper-wrapper" id="swiper-wrapper-e2985910bdf1392b" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-195px, 0px, 0px);"><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(60px, 0px, -925px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4;">
                                        <img src="assets/img/marketing/client-2.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(48px, 0px, -740px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -3;">
                                        <img src="assets/img/marketing/client-3.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(36px, 0px, -555px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2;">
                                        <img src="assets/img/marketing/client-4.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-visible" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(24px, 0px, -370px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -1;">
                                        <img src="assets/img/marketing/client-5.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="crm-feedback-control-thumb swiper-slide swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(12px, 0px, -185px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 0;">
                                        <img src="assets/img/marketing/client-1.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="crm-feedback-control-thumb swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1;">
                                        <img src="assets/img/marketing/client-2.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="crm-feedback-control-thumb swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-12px, 0px, -185px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 0;">
                                        <img src="assets/img/marketing/client-3.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="crm-feedback-control-thumb swiper-slide swiper-slide-visible" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-24px, 0px, -370px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -1;">
                                        <img src="assets/img/marketing/client-4.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="crm-feedback-control-thumb swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-36px, 0px, -555px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2;">
                                        <img src="assets/img/marketing/client-5.png" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                <div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-48px, 0px, -740px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -3;">
                                        <img src="assets/img/marketing/client-1.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-60px, 0px, -925px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4;">
                                        <img src="assets/img/marketing/client-2.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-72px, 0px, -1110px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -5;">
                                        <img src="assets/img/marketing/client-3.png" alt="client" class="img-fluid rounded-circle">
                                    </div><div class="crm-feedback-control-thumb swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 65px; transition-duration: 0ms; transform: translate3d(-84px, 0px, -1295px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -6;">
                                        <img src="assets/img/marketing/client-4.png" alt="client" class="img-fluid rounded-circle">
                                    </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="crm-next-control-outer crm-fd-slide-control"><i class="fa-solid fa-arrow-right"></i></div>
                            <div class="crm-prev-control-outer crm-fd-slide-control"><i class="fa-solid fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- contact us -->

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

      

        
        @endsection
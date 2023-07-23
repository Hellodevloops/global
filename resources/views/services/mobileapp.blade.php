@extends('layouts.app')
@section('content')

       
<!-- about service start -->
<section class="counter-with-video pt-120 pb-120" id="cyber-about">
    <div class="container">
        <div class="row ptb-40">
            <div class="col-lg-6 col-md-12">
                <div class="cyber-about-img text-center mb-30 mb-lg-0">
                    <img src="assets/img/smnew.jpg" alt="VR" class="img-fluid">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <div class  ="sheild-img">
                                <img src="assets/img/uiux1.jpg" alt="Sheild" class="img-fluid d-none d-lg-block">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="pe-2">
                                <div class="cyber-about-count-box d-md-flex bg-white p-3 mt-3 mb-3">
                                    <div class="pe-3">
                                        <h2>10+</h2>
                                    </div>
                                    <div>
                                        <h5 class="h6">Years Experience</h5>
                                        <p class="mb-0">Innovate To Inspire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pt-1">
                    <!-- <div class="d-flex about-icon-box-lg align-items-center">
                        <div class="me-3">
                            <img src="assets/img/Vri_logo_preview.png" alt="">
                        </div>
                        <div>
                            <h5>Empowering Businesses with Cutting-Edge</h5>
                        </div>
                    </div> -->
                    <div class="section-heading ">
                        <h4 class="lead mb-2">Driving Innovation and Transformation</h4>
                        <h2 class="mb-4 text-primary ">Mobile App Development</h2>
                            <p>
                                In the fast-paced world of mobile technology, having a powerful and user-friendly mobile app is essential for businesses to stay competitive.At <span class="text-primary">Vriaum </span>, we specialize in mobile app development, crafting innovative solutions that captivate users and drive business growth.
                            </p>
                            <p>
                                Our team of skilled developers and designers leverages the latest technologies and industry best practices to create high-performance apps for both <b>Android and iOS </b>platforms. With a focus on intuitive user interfaces, seamless functionality, and optimal performance, we ensure that your mobile app stands out in the crowded app marketplace.</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="">
                                <div class="feature-card border border-light border-2 rounded-custom p-3">
                                    <div class="rounded mb-2 d-flex align-items-center">
                                        <i class="fas fa-user-friends fa-2x text-primary me-3"></i>
                                        <h3 class="h5 mb-0"> Service Consultancy</h3>
                                    </div>
                                    <div class="feature-content">
                                        <p class="mb-0">Our experienced consultants will guide you through every step of your  journey, from strategy development to implementation.</p>
                                    </div>
                                    
                                </div>
                            </div></div>
                            <div class="col-6">
                                <div class="feature-card border border-light border-2 rounded-custom p-3">
                                    <div class="rounded mb-2 d-flex align-items-center">
                                        <i class="fas fa-fingerprint fa-2x text-primary me-3"></i>
                                        <h3 class="h5 mb-0"> Security Solutions</h3>
                                    </div>
                                    <div class="feature-content">
                                        <p class="mb-0">Safeguard your connected world with our advanced  security solution,trust us with our multi-layered  cutting-edge techniques.</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about service end -->
        <!--features grid section start-->
        <section class="feature-tab-section ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h5 class="h6 text-primary">Unleashing Innovation, Efficiency, and Growth</h5>
                            <h2>Mobile App Development</h2>
                            <p class="lead mt-3">With our expertise and dedication, we help businesses harness the power of App development to drive innovation, streamline operations, and achieve transformative growth.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav justify-content-center feature-tab-list-2 mt-4" id="nav-tab-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#tab-2-1" data-bs-toggle="tab" data-bs-target="#tab-2-1" role="tab" aria-selected="true">
                                    Android App Development
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#tab-2-2" data-bs-toggle="tab" data-bs-target="#tab-2-2" role="tab" aria-selected="false" tabindex="-1">
                                    iOS App Development
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#tab-2-3" data-bs-toggle="tab" data-bs-target="#tab-2-3" role="tab" aria-selected="false" tabindex="-1">
                                    Cross-Platform App Development
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="nav-tabContent-2">
                            <div class="tab-pane fade pt-60 active show" id="tab-2-1" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <div class="feature-tab-info">
                                            <h3>Android App Development</h3>
                                            <p>At  <span class="text-primary">VriAum</span>, we specialize in developing high-quality, scalable, and user-friendly Android applications. Our experienced team of Android developers is proficient in the latest technologies and frameworks to deliver exceptional app experiences. Whether you need a <b>native Android app or a hybrid app</b>, we ensure that your app is optimized for performance, security, and seamless functionality across various devices and screen sizes.</p>
                                            <h5 class="h6 text-primary">Unleash the Power of Android</h5>
                                            <p>Contact us today to discuss your Android app development requirements and let us help you unleash the power of the world's most popular mobile platform.</p>
                                            <a href="{{route('contact.index')}}" class="read-more-link text-decoration-none mt-4 d-block">Contact Us
                                                <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="assets/img/app.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-60" id="tab-2-2"
            
             role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="assets/img/iosandroid1.jpg" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="feature-tab-info">
                                            <h3>iOS App Development</h3>
                                            <p>Transform your business with our expert iOS app development services. Our team of skilled iOS developers creates elegant, functional, and engaging apps for the Apple ecosystem. Whether you need an iPhone, iPad, or Apple Watch app, we leverage the latest iOS technologies and industry best practices to deliver remarkable user experiences. From concept to launch, we ensure that your iOS app reflects your brand identity and meets the highest standards of quality and performance.</p>
                                            <h5 class="h6 text-primary">Unlock the Potential of iOS</h5>
                                            <p>Contact us today to discuss your iOS app development needs and unlock the potential of Apple's powerful platform.</p>
                                            <a href="contact.html" class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-60" id="tab-2-3" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <div class="feature-tab-info">
                                            <h3>Cross-Platform App Development</h3>
                                            <p>Reach a wider audience with our cross-platform app development services. <b>We leverage frameworks like React Native, Flutter, and Xamarin </b> to build high-performance apps that work seamlessly on multiple platforms, including Android and iOS. Our cross-platform apps provide a native-like experience while reducing development time and cost. With our expertise in cross-platform development, we help you maximize your app's reach and impact, enabling you to connect with users across different devices and operating systems.</p>
                                            <h5 class="h6 text-primary">Break Barriers with Cross-Platform Apps</h5>
                                            <p>Contact us today to explore the possibilities of cross-platform app development and break barriers in reaching your target audience.</p>
                                            <a href="contact.html" class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="assets/img/react.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--features grid section end-->
<!-- tab features strats -->
<section class="feature-section-two ptb-120">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h5 class="h6 text-primary">Why Choose Us?</h5>
            <h2> Key Features and Capabilities</h2>
            <p class="lead mt-3">Our mobile app development services offer a wide range of features and capabilities, designed to create impactful and engaging mobile applications. Here's a glimpse of what we offer.</p>
        </div>
        <div class="row align-items-center justify-content-lg-between justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="feature-img-wrap">
                    <img src="assets/img/mob1.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0 ">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mt-4">
                <div class="feature-content-wrap">

                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-mobile-alt text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">Cross-Platform Development</h3>
                            <p> We specialize in cross-platform development, allowing your app to run seamlessly on multiple operating systems and devices, maximizing your reach and user base.
                            </p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-bolt text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">High Performance</h3>
                            <p>We prioritize performance optimization to ensure your app delivers fast and smooth user experiences, keeping your users engaged and satisfied.
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4 mb-lg-0">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">Data Security</h3>
                            <p> We take data security seriously and implement robust security measures to protect sensitive user information, including encryption, authentication, and secure data storage.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
</section>
<!-- tab features end -->
  
<!-- integrate companies  -->
<section class="integration-section ptb-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3">
                <div class="integration-list-wrap">
                    <a  class="integration-1" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/1.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-2" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/2.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-3" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/3.png" alt="integration" class="img-fluid rounded-circle">
                    </a>

                    <a  class="integration-4" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/4.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-5" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/5.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-6" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/6.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="section-heading text-center my-5 my-lg-0 my-xl-0">
                    <h5 class="h6 text-primary">Integration</h5>
                    <h2>We Collaborate with Top Company in World</h2>
                    <p class="lead mt-3">At <span class="text-primary">VriAum</span>, we understand the power of collaboration. That's why we work closely with industry-leading companies to bring you the best innovative and robust solutions that meet the unique needs of your business. Together with our esteemed partners, we aim to drive digital transformation and shape the good future.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-lg-4">
                    <div class="integration-list-wrap">
                        <a  class="integration-7" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="">
                            <img src="assets/img/integations/7.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-8" data-bs-toggle="tooltip" data-bs-placement="t aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/8.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-9" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="">
                            <img src="assets/img/integations/9.png" alt="integration" class="img-fluid rounded-circle">
                        </a>

                        <a  class="integration-10" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/10.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-11" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/11.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-12" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/12.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- integrate end -->
<!-- testimonial start -->
<section class="testimonial-section ptb-120 bg-light-subtle">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Testimonials</h4>
                    <h2>What Our Clients Say</h2>
                    <!-- <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100">
                    <div class="swiper testimonialSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">John Doe</h6>
                                            <small>CEO, Company Yihu</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"Working with  <span class="text-primary">VriAum</span> on our mobile app development project has been a fantastic experience. Their team is highly skilled and professional, and they delivered a high-quality app within the specified timeframe. I highly recommend their services."</p>
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">Jane Smith</h6>
                                            <small>Founder, Startup ABC</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"I'm extremely satisfied with the mobile app developed by  <span class="text-primary">VriAum</span>. They understood our requirements

 perfectly and delivered a user-friendly and visually appealing app. The communication throughout the project was excellent, and they exceeded our expectations."</p>
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="border border-2 p-5 rounded-custom position-relative">
                                    <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">David Johnson</h6>
                                            <small>CTO, Tech Solutions</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"I have been impressed by the mobile app development services provided by  <span class="text-primary">VriAum</span>. Their attention to detail and commitment to delivering a top-notch app are commendable. I would gladly recommend them to anyone looking for mobile app development."</p>
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav-control">
                        <span class="swiper-button-next"></span>
                        <span class="swiper-button-prev"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->
{{-- contact us form start --}}
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
{{-- contact us form end --}}
 @endsection

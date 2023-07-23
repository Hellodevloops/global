@extends('layouts.app')
@section('content')
  
    
    <section class="counter-with-video  ptb-120" id="cyber-about">
        <div class="container">
            <div class="row ptb-40">
                <div class="col-lg-6 col-md-12">
                    <div class="cyber-about-img text-center mb-30 mb-lg-0">
                        <img src="assets/img/productdev1.jpg" alt="VR" class="img-fluid">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="sheild-img">
                                    <img src="assets/img/pd2n.jpg" alt="Sheild" class="img-fluid d-none d-lg-block">
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
                            <h2 class=" text-primary mb-4">Product Development</h2>
                            <p>Bringing innovative products to market requires a strategic approach and deep technical
                                expertise. At <span class="text-primary">VriAum</span>, we specialize in product
                                development, helping businesses turn their ideas into reality. Our team of skilled
                                professionals works closely with you to understand your vision, analyze market demands, and
                                develop comprehensive product strategies.</p>
                            <p>
                                From conceptualization and design to prototyping and manufacturing, we guide you through
                                every stage of the product development journey. With a commitment to quality, efficiency,
                                and customer satisfaction, we deliver innovative products that drive growth and
                                transformation in your industry.</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="">
                                    <div class="feature-card border border-light border-2 rounded-custom p-3">
                                        <div class="rounded mb-2 d-flex align-items-center">
                                            <i class="fas fa-user-friends fa-2x text-primary me-3"></i>
                                            <h3 class="h5 mb-0"> Consultancy Services</h3>
                                        </div>
                                        <div class="feature-content">
                                            <p class="mb-0">Our experienced consultants will guide you through every step
                                                of your journey, from strategy development to implementation.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-card border border-light border-2 rounded-custom p-3">
                                    <div class="rounded mb-2 d-flex align-items-center">
                                        <i class="fas fa-fingerprint fa-2x text-primary me-3"></i>
                                        <h3 class="h5 mb-0"> Security Solutions</h3>
                                    </div>
                                    <div class="feature-content">
                                        <p class="mb-0">Safeguard your connected world with our advanced security
                                            solution,trust us with our multi-layered cutting-edge techniques.</p>
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
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h5 class="h6 text-primary">Unleashing Innovation, Efficiency, and Growth</h5>
                    <h2>Product Development Services</h2>
                    <p class="lead mt-3">With our expertise and dedication, we help businesses harness the power of Product
                        development to drive innovation, streamline operations, and achieve transformative growth.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center feature-tab-list-2 mt-4" id="nav-tab-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#tab-2-1" data-bs-toggle="tab" data-bs-target="#tab-2-1"
                            role="tab" aria-selected="true">
                            Prototype Development
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#tab-2-2" data-bs-toggle="tab" data-bs-target="#tab-2-2" role="tab"
                            aria-selected="false" tabindex="-1">
                            Minimum Viable Product (MVP)
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#tab-2-3" data-bs-toggle="tab" data-bs-target="#tab-2-3" role="tab"
                            aria-selected="false" tabindex="-1">
                            Product Scaling and Enhancement
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent-2">
                    <div class="tab-pane fade pt-60 active show" id="tab-2-1" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>Prototype Development</h3>
                                    <p>Transform your ideas into tangible prototypes with our prototype development
                                        services. We utilize the latest tools and technologies to create functional and
                                        interactive prototypes that demonstrate the core features and user experience of
                                        your product. Our iterative approach allows for feedback and refinement, ensuring
                                        that your prototype aligns with your vision and user requirements. Whether you are a
                                        startup or an established business, our prototype development services can help you
                                        validate your ideas and attract potential investors or customers.</p>
                                    <h5 class="h6 text-primary">Bring Your Ideas to Life</h5>
                                    <p>Contact us today to discuss your prototype development needs and bring your ideas to
                                        life.</p>
                                    <a href="{{ route('contact.index') }}"
                                        class="read-more-link text-decoration-none mt-4 d-block">Contact Us
                                        <i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/img/prototype.jpg" alt="feature tab"
                                    class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-2-2" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <img src="assets/img/mvp1.jpg" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                            </div>
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>Minimum Viable Product (MVP)</h3>
                                    <p>Accelerate your product development process and validate your concept with a Minimum
                                        Viable Product (MVP). Our MVP development services focus on creating a scaled-down
                                        version of your product with essential features that solve your users' pain points.
                                        By launching an MVP, <b>you can gather user feedback, test market viability, and
                                            iterate based on real-world data</b>. Our team guides you through the entire MVP
                                        development cycle, from idea validation and MVP design to development and launch,
                                        helping you reduce time to market and minimize risks.</p>
                                    <h5 class="h6 text-primary">Validate and Launch Your Product Idea</h5>
                                    <p>Contact us today to discuss your MVP development requirements and validate your
                                        product idea.</p>
                                    <a href="contact.html"
                                        class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-2-3" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>Product Scaling and Enhancement</h3>
                                    <p>Once your product gains traction and attracts a growing user base, it's crucial to
                                        scale and enhance its capabilities. Our product scaling and enhancement services
                                        focus on optimizing your product's performance, scalability, and user experience.
                                        Whether it's implementing<b> new features, integrating third-party services, or
                                            enhancing the overall performance and security of your product</b>, our team has
                                        the expertise to ensure a smooth and successful product scaling process. We work
                                        closely with you to understand your evolving business needs and align our solutions
                                        to meet your growth objectives.</p>
                                    <h5 class="h6 text-primary">Scale and Enhance Your Product's Potential</h5>
                                    <p>Contact us today to discuss how our product scaling and enhancement services can help
                                        you take your product to the next level.</p>
                                    <a href="contact.html"
                                        class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/img/pse1.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--features grid section end-->
    <!-- tab features strats -->
    <section class="feature-section-two ptb-120">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <h5 class="h6 text-primary">Why Choose Us?</h5>
                <h2>Key Features and Capabilities</h2>
                <p class="lead mt-3">Our product development services offer a wide range of features and capabilities,
                    designed to bring your ideas to life and create innovative and successful products. Here's a glimpse of
                    what we offer.</p>
            </div>
            <div class="row align-items-center justify-content-lg-between justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="feature-img-wrap">
                        <img src="assets/img/keypd1.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0 ">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt-4">
                    <div class="feature-content-wrap">

                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-lightbulb text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Innovative Ideation</h3>
                                    <p> We excel in generating innovative ideas for products, combining creativity and
                                        market insights to develop unique and compelling concepts.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-cogs text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">End-to-End Development</h3>
                                    <p>We offer comprehensive end-to-end product development services, from concept design
                                        and prototyping to manufacturing and quality assurance.
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 mb-lg-0">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-line-chart text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Market Analysis</h3>
                                    <p> We conduct in-depth market analysis to identify trends, target audiences, and
                                        competition, ensuring that your product is positioned for success in the market.
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
                        <a class="integration-1" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/1.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a class="integration-2" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/2.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a class="integration-3" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/3.png" alt="integration" class="img-fluid rounded-circle">
                        </a>

                        <a class="integration-4" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/4.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a class="integration-5" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/5.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a class="integration-6" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                            data-bs-original-title="Y">
                            <img src="assets/img/integations/6.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="section-heading text-center my-5 my-lg-0 my-xl-0">
                        <h5 class="h6 text-primary">Integration</h5>
                        <h2>We Collaborate with Top Company in World</h2>
                        <p class="lead mt-3">At <span class="text-primary">VriAum</span>, we understand the power of
                            collaboration. That's why we work closely with industry-leading companies to bring you the best
                            innovative and robust solutions that meet the unique needs of your business. Together with our
                            esteemed partners, we aim to drive digital transformation and shape the good future.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-4">
                        <div class="integration-list-wrap">
                            <a class="integration-7" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                                data-bs-original-title="">
                                <img src="assets/img/integations/7.png" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a class="integration-8" data-bs-toggle="tooltip" data-bs-placement="t aria-label=""
                                data-bs-original-title="">
                                <img src="assets/img/integations/8.png" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a class="integration-9" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y
                                data-bs-original-title="">
                                <img src="assets/img/integations/9.png" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>

                            <a class="integration-10" data-bs-toggle="tooltip" data-bs-placement="" aria-label=""
                                data-bs-original-title="">
                                <img src="assets/img/integations/10.png" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a class="integration-11" data-bs-toggle="tooltip" data-bs-placement="" aria-label=""
                                data-bs-original-title="">
                                <img src="assets/img/integations/11.png" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a class="integration-12" data-bs-toggle="tooltip" data-bs-placement="" aria-label=""
                                data-bs-original-title="">
                                <img src="assets/img/integations/12.png" alt="integration"
                                    class="img-fluid rounded-circle">
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
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                            class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded"
                                                width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">John Doe</h6>
                                                <small>CEO, Company Xiu</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <p>"We partnered with <span class="text-primary">VriAum</span> for product
                                                development, and they exceeded our expectations. Their team displayed deep
                                                technical expertise and a thorough understanding of our market. The product
                                                they delivered was innovative, user-friendly, and perfectly aligned with our
                                                business goals. Its been wonderful to work with them."</p>
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                            class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="border border-2 p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                            class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded"
                                                width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Jane Smith</h6>
                                                <small>Founder, Startup Azyesi</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <p>"The product development experience with <span
                                                    class="text-primary">VriAum</span> was outstanding. They

                                                were highly collaborative and responsive throughout the entire process.
                                                Their team demonstrated a strong commitment to delivering a high-quality
                                                product, and we were impressed with their attention to detail and dedication
                                                to customer satisfaction."</p>
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                            class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="border border-2 p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                            class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded"
                                                width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Sarah Williams</h6>
                                                <small>Product Manager, Company Zilu</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <p>"Working with <span class="text-primary">VriAum</span> on product
                                                development was a great experience. Their team demonstrated deep expertise
                                                in the field and provided valuable insights throughout the development
                                                process. The end result was a top-notch product that met all our
                                                requirements and delighted our customers."</p>
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                            class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
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
    <!-- </section> -->
    {{-- contact us form end --}}
@endsection

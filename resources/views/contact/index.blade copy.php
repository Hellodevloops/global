@extends('layouts.app')
@section('content')

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Contact Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
           
            <!-- CONTACT FORM -->
            <div class="section-full twm-contact-one">   
                <div class="section-content">
                    <div class="container">
                            
                        <!-- CONTACT FORM-->
                        <div class="contact-one-inner">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-form-outer">

                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h2 class="wt-title">Send Us a Message</h2>
                                            <p>We value your feedback, inquiries, and partnership opportunities. Please use the form below to reach out to us, and we will get back to you as soon as possible. </p>
                                        </div>
                                        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                                        <!-- TITLE END--> 
                                        <form class="cons-contact-form" method="POST" action="{{ route('contact.store') }}">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                     </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                                                        @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="tel"  name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone">
                                                        @error('phone')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <style>
                                                            input::-webkit-outer-spin-button,
                                                            input::-webkit-inner-spin-button {
                                                              display: none;
                                                            }
                                                            input[type=number] { -moz-appearance: textfield;}
                                                          </style>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Subject">
                                                        @error('subject')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                            </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                                                @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Submit Now</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div> 

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-info-wrap">

                                        <div class="contact-info">
                                            <div class="contact-info-section">  
                                                    
                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class=" fas fa-map-marker-alt"></i></div>
                                                        <a href="https://www.google.com/maps?q=TMS LLC
                                                        8 Campus Drive, Parsippany-Troy Hills, New Jersey 07054, United States">
                                                            <p><span>Corporate Headquarters:</span>TMS LLC
                                                                8 Campus Drive, Parsippany-Troy Hills, New Jersey 07054, United States </p>
                                                          </a>
                                                        
                                                    </div>  

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i></div>
                                                        <h3 class="twm-title">Feel free to contact us</h3>
                                                        <p><a href="tel:201-254-7297">201-254-7297</a></p>
                                                        <!-- <p><a href="tel:+216-761-8331">+2 900 234 3219</a></p> -->
                                                    </div>

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                                        <h3 class="twm-title">Support</h3>
                                                        <p><a href="mailto:info@linktms.com">info@linktms.com</a></p>
                                                        
                                                       
                                                    </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- <div class="gmap-outline">
                <div class="google-map">
                    <div style="width: 100%">
                        <iframe height="460" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                    </div>
                </div>
            </div>
       -->

        </div>
        <!-- CONTENT END -->

   @endsection
   <!-- end -->
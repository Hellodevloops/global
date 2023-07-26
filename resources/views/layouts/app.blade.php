<!DOCTYPE html>

<html lang="en">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="Global Consltancy - Immigration and Visa Consulting Website Template"/>
		<meta name="keywords" content="Responsive, Jthemes, One Page, Landing, Business, Coaching, Consulting, Creative, Immigration, Visa">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Global Consltancy - Immigration and Visa Consulting Website Template</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="apple-touch-icon.html" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="{{asset('../../../../../use.fontawesome.com/releases/v5.7.2/css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('css/menu.css')}}" rel="stylesheet">	
		<link id="effect" href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{asset('css/tweenmax.css')}}" rel="stylesheet">	
		<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<link href="{{asset('css/red.css')}}" rel="stylesheet">

		<!-- STYLE SWITCHER CSS -->	
		<link href="{{asset('css/aqua.css')}}" rel="alternate stylesheet" title="aqua-theme"> 
		<link href="{{asset('css/blue.css')}}" rel="alternate stylesheet" title="blue-theme"> 
		<link href="{{asset('css/salmon.css')}}" rel="alternate stylesheet" title="salmon-theme"> 
		<link href="{{asset('css/green.css')}}" rel="alternate stylesheet" title="green-theme"> 	
		<link href="{{asset('css/olive.css')}}" rel="alternate stylesheet" title="olive-theme"> 
		<link href="{{asset('css/orange.css')}}" rel="alternate stylesheet" title="orange-theme"> 
		<link href="{{asset('css/darkred.css')}}" rel="alternate stylesheet" title="darkred-theme"> 
		<link href="{{asset('css/teal.css')}}" rel="alternate stylesheet" title="teal-theme"> 
		<link href="{{asset('css/yellow.css')}}" rel="alternate stylesheet" title="yellow-theme"> 
		
		<!-- RESPONSIVE CSS -->
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet"> 
	

		
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loader"><div class="cssload-box-loading"></div></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">



		<!-- HEADER
			============================================= -->
		<!-- HEADER
			============================================= -->
			<header id="header-2" class="header white-menu">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
				    	<span class="smllogo"><img src="{{asset('images/logo.png')}}" width="120" height="50" alt="mobile-logo"></span>
				    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
				 	</div>


				 	<!-- HEADER STRIP -->
				 	<div class="headtoppart bg-white clearfix">
				    	<div class="headerwp clearfix">

				    		<!-- Infotmation -->
				     		<div class="headertopleft">			     			
				        		<div class="header-info clearfix">
				        			<span class="txt-400"><i class="fas fa-map-marker-alt"></i>2nd floor, Godagaurav Apartment, Shivgiri Colony,  Nashik</span> 
				            	</div>
				     		</div>

				     		<!-- Contacts -->
						    <div class="headertopright header-contacts">						    	
						    	<!-- <a href="tel:123456789" class="callusbtn txt-400"><i class="fas fa-phone"></i>+91 8048040479</a> -->
						    	<a href="tel:8048040479" class="callusbtn b-right txt-400">&#8194;+91 8048040479</a>
						    	<a href="mailto:gec@gmail.com" class="txt-400"><i class="far fa-envelope-open"></i>gec@gmail.com</a>
					      	</div>

					    </div>
				  	</div>	<!-- END HEADER STRIP -->


				  	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- LOGO IMAGE -->
	    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
	    					<div class="desktoplogo"><a href="#hero-1" class="logo-black"><img src="{{asset('images/logo.png')}}" width="180" height="80" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="#hero-1" class="logo-white"><img src="{{asset('images/logo.png')}}" width="180" height="80" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix blue-header">
	        					<ul class="wsmenu-list">

									@php
									// Fetch courses from the database using Eloquent query or any other method
									$courses = \App\Models\Course::all(); // Replace \App\Models\Course with your actual Course model namespace
								@endphp
	        						<!-- DROPDOWN MENU -->
						        	<li class="nl-simple" aria-haspopup="true"><a href="{{ route('home')}}">Home</a></li>
						        	<li class="nl-simple" aria-haspopup="true"><a href="{{ route('about')}}">About us</a></li>
						        	<li aria-haspopup="true"><a href="#">Courses<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{route('course')}}">All Courses</a></li>
											@foreach ($courses as $course)
            <li aria-haspopup="true">
                <a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->title }}</a>
            </li>
        @endforeach
										   <li aria-haspopup="true"><a href="batch-list.html">Batches</a></li>
										   
										  
										</ul>
								   </li>


									<li aria-haspopup="true"><a href="#">Study At <span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="country-details.html">United states</a></li>
											<li aria-haspopup="true"><a href="country-details.html">Canada</a></li>
											<li aria-haspopup="true"><a href="country-details.html">United kingdom</a></li>
											<li aria-haspopup="true"><a href="country-details.html">Ireland</a></li>
											<li aria-haspopup="true"><a href="country-details.html">Australia</a></li>
										   <li aria-haspopup="true"><a href="country-details.html">New zealand</a></li>
										   <li aria-haspopup="true"><a href="country-details.html">Europe </a></li>
										   <li aria-haspopup="true"><a href="country-details.html">Asia</a></li>
										  
										</ul>
								   </li>	<!-- END DROPDOWN MENU -->

								   <li class="nl-simple" aria-haspopup="true"><a href="{{ route('blog')}}">Our Stories</a></li>
						          	<!-- MEGAMENU -->
						          


						          	<!-- SIMPLE NAVIGATION LINK -->
								    <li class="nl-simple" aria-haspopup="true"><a href="#"></a></li>

					    
								    <!-- LAST NAVIGATION LINK -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="{{asset('institute.pdf')}}" class="header-btn btn-primary tra-black-hover last-link">institute Partners</a>
								    </li>
								    

	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->

	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->

        @yield('content')

				<!-- FOOTER-2
				============================================= -->
				<footer id="footer-3" class="wide-40 footer division">
					<div class="container">
	
	
						<!-- FOOTER CONTENT -->
						<div class="row">	
	
	
							<!-- FOOTER CONTACTS -->
							<div class="col-lg-3 col-xl-3">
								<div class="footer-box mb-40">
								
									<!-- Title -->
									<h5 class="h5-md">Contact Details</h5>
	
									<!-- Address -->
									<p class="p-sm">2nd floor, Godagaurav Apartment,</p>
									<p class="p-sm">Shivgiri Colony, Next to Domino’s,</p>
									<p class="p-sm">College road, Nashik- 422005</p>
	
									<!-- Phone -->
									<p class="p-sm mt-20">Phone: +91 8048040479</p>
									
									<!-- Email -->
									<p class="p-sm foo-email">Email: <a href="mailto:gec@gmail.com">gec@gmail.com</a></p>
	
									<!-- Working Hours -->
									<p class="p-sm mt-20">Mon-Fri: 9:00AM - 6:30PM</p>
									<p class="p-sm">Saturday: 8:30AM - 3:30PM</p>
									<p class="p-sm">Sunday: Closed</p>
	
								</div>
							</div>
	
	
							<!-- FOOTER LINKS -->
							<div class="col-lg-3 col-xl-3">
								<div class="footer-links mb-40">
								
									<!-- Title -->
									<h5 class="h5-md">Useful Links</h5>
	
									<!-- Footer Links -->
									<ul class="foo-links clearfix">
										<li><a href="about.html">About Global Consltancy</a></li>
										<li><a href="contact.html">Visa Information</a></li>
										<li><a href="#request-1">Immigration FAQ</a></li>
										<li><a href="contact.html">Immigration Assistance</a></li>	
										<li><a href="#testimonials">Global Consltancy Testimonials</a></li>
										<li><a href="contact.html">Contact Us</a></li>
															
									</ul>
	
								</div>
							</div>
	
	
							<!-- FOOTER LINKS -->
							<div class="col-lg-3 col-xl-3">
								<div class="footer-links mb-40">
								
									<!-- Title -->
									<h5 class="h5-md">Visa Countrys</h5>
	
									<!-- Footer Links -->
									<ul class="foo-links clearfix">
										<li><a href="country-details.html">United states</a></li>
										<li><a href="country-details.html">Canada</a></li>						
										<li><a href="country-details.html">United kingdom</a></li>						
										<li><a href="country-details.html">Ireland</a></li>						
										<li><a href="country-details.html">Australia</a></li>						
										<li><a href="country-details.html">New zealand</a></li>						
										<li><a href="country-details.html">Europe</a></li>						
										<li><a href="country-details.html">Asia</a></li>						
									</ul>
								</div>
							</div>	
	
	
							<!-- FOOTER NEWSLETTER FORM -->
							<div class="col-lg-3 col-xl-3">
								<div class="footer-form mb-20">
	
									<!-- Title -->
									<h5 class="h5-md">Stay Always In Touch</h5>
	
									<!-- Newsletter Form Input -->
									<form class="newsletter-form">	
	
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Your email address" required id="s-email">			
											<span class="input-group-btn">
												<button type="submit" class="btn btn-primary tra-black-hover">Subscribe</button> 
											</span>
										</div>
	
										<!-- Newsletter Form Notification -->		
										<label for="s-email" class="form-notification"></label>
													
									</form>
															
								</div>
							</div>
	
	
						</div>	<!-- END FOOTER CONTENT -->
	
	
						<!-- BOTTOM FOOTER -->
						<div class="bottom-footer">
							<div class="row d-flex align-items-center">
	
	
								<!-- FOOTER LOGO -->
								<div class="col-md-4 col-lg-3">
									<!-- Footer Logo -->
									<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 420 x 100 pixels) -->
									<img src="{{asset('images/logo.png')}}" width="180" height="80" alt="footer-logo">
									
								</div>
	
	
								<!-- FOOTER SOCIALS LINKS -->
								<div class="col-md-8 col-lg-9 text-right">
									<p class="footer-copyright">&copy; Copyright <span>Global Consltancy 2023</span>. All Rights Reserved</p>
									<!-- <p class="p-sm"><a href="#">Privacy Policy</a></p>
									<p class="p-sm"><a href="#">Terms & Conditions</a></p>
									<p class="p-sm"><a href="#">Cookies</a></p> -->
								</div>
	
	
							</div>
						</div>	<!-- END BOTTOM FOOTER -->
	
	
					</div>	   <!-- End container -->										
				</footer>	<!-- END FOOTER-2 -->



		
		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('js/modernizr.custom.js')}}"></script>
		<script src="{{asset('js/jquery.easing.js')}}"></script>
		<script src="{{asset('js/jquery.appear.js')}}"></script>
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>	
		<script src="{{asset('js/menu.js')}}"></script>
		<script src="{{asset('js/materialize.js')}}"></script>	
		<script src="{{asset('js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{asset('js/hero-request-form.js')}}"></script>
		<script src="{{asset('js/hero-register-form.js')}}"></script>
		<script src="{{asset('js/request-form.js')}}"></script>	
		<script src="{{asset('js/contact-form.js')}}"></script>
		<script src="{{asset('js/comment-form.js')}}"></script>
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>	
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>	

		<!-- Custom Script -->		
		<script src="{{asset('js/custom.js')}}"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->
		

		<!-- STYLE SWITCHER
		============================================= -->
		
		<!-- <div id="stlChanger">
			<div class="blockChanger bgChanger">
            	<a href="#" class="chBut icon-xs"><span class="flaticon-292-gear"></span></a>
                <div class="chBody">	

                	<div class="stBlock text-center" style="margin: 30px 20px 20px 16px;">
						<p>Color Scheme</p>						
						<div class="stBgs">	
							<a href="javascript:chooseStyle('aqua-theme', 60)"><img src="{{asset('images/color-scheme/aqua.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('salmon-theme', 60)"><img src="{{asset('images/color-scheme/salmon.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('blue-theme', 60)"><img src="{{asset('images/color-scheme/blue.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('red-theme', 60)"><img src="{{asset('images/color-scheme/red.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('olive-theme', 60)"><img src="{{asset('images/color-scheme/olive.png')}}" width="50" height="50" alt="" /></a>			
							<a href="javascript:chooseStyle('darkred-theme', 60)"><img src="{{asset('images/color-scheme/darkred.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('teal-theme', 60)"><img src="{{asset('images/color-scheme/teal.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('yellow-theme', 60)"><img src="{{asset('images/color-scheme/yellow.png')}}" width="50" height="50" alt="" /></a>	
							<a href="javascript:chooseStyle('green-theme', 60)"><img src="{{asset('images/color-scheme/green.png')}}" width="50" height="50" alt="" /></a>																
						</div>
					</div>
					
					<div class="stBlock text-center" style="margin: 0px 32px 25px 20px;">
						<a class="btn btn-primary black-hover" href="javascript:chooseStyle('none', 60)">Reset color</a>							
					</div>

										
				</div>
			</div>
		</div>	 -->
		  <!-- END SWITCHER -->


		<script src="{{asset('js/changer.js')}}"></script>
		<script defer src="{{asset('js/styleswitch.js')}}"></script>	



	</body>




</html>	
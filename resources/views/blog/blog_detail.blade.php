@extends('layouts.app')
@section('content')

   

				<!-- SINGLE POST
				============================================= -->
				<section id="single-post" class="wide-80 blog-page-section division">
					<div class="container">
					 	<div class="row">


					 		<!-- POST CONTENT -->
					 		<div class="col-lg-8">
                                <div class="single-blog-post pr-15">
                                    <!-- BLOG POST IMAGE -->
                                    <div class="blog-post-img mb-30">
                                        <img class="img-fluid" src="{{ $post->hero }}" alt="blog-post-image" />
                                    </div>
                            
                                    <!-- Post Data -->
                                    <p class="post-meta">{{ $post->created_at->format('F d, Y') }} in <span>PR & Immigration</span></p>
                            
                                    <!-- Title -->
                                    <h4 class="h4-lg deepblue-color mb-30">{{ $post->title }}</h4>
                            
                                    <!-- POST TEXT -->
                                    <div class="sblog-post-txt">
                                        <!-- Post Body -->
                                        {!! $post->body !!}
                                    </div>
                            
                                    <!-- OTHER POSTS -->
                                    <div class="other-posts">
                                        <div id="op-row" class="row d-flex align-items-center">
                                            <!-- Previous Post -->
                                            <div class="col-md-5">
                                                @if ($previous)
                                                    <div class="prev-post mb-30 pr-45">
                                                        <h5 class="h5-xs"><i class="fas fa-arrow-left"></i> Previous Post</h5>
                                                        <a href="{{ route('posts.show', $previous->id) }}">{{ $previous->title }}</a>
                                                    </div>
                                                @endif
                                            </div>
                            
                                            <!-- All Posts -->
                                            <div class="col-md-2 text-center">
                                                <div class="all-posts mb-30">
                                                    <a href="blog-listing.html"><i class="fas fa-th-large"></i></a>
                                                </div>
                                            </div>
                            
                                            <!-- Next Post -->
                                            <div class="col-md-5 text-right">
                                                @if ($next)
                                                    <div class="next-post mb-30 pl-45">
                                                        <h5 class="h5-xs">Next Post <i class="fas fa-arrow-right"></i></h5>
                                                        <a href="{{ route('posts.show', $next->id) }}">{{ $next->title }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div> <!-- End row -->
                                    </div> <!-- END OTHER POSTS -->
                            
                                    <!-- Comment Section -->
                                    <div class="clear" id="comment-list">
                                        <div class="comments-area" id="comments">
                                            <!-- Comments will be rendered here if available. -->
                            
                                            <!-- LEAVE A REPLY START  -->
                                            {{-- Comment form can be enabled here if needed. --}}
                                            <!-- LEAVE A REPLY END -->
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                            
                            <!-- END POST CONTENT -->


							<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-4">


								<!-- SEARCH FIELD --> 
								<div id="search-field" class="sidebar-div mb-50">								
									<div class="input-group mb-3">
									  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
									 	<div class="input-group-append">
									    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									 	</div>
									</div>
								</div>


							

								<!-- LATEST POSTS -->
								<div class="popular-posts sidebar-div mb-50">
                                    <!-- Title -->
                                    <h5 class="h5-lg">Latest Posts</h5>
                                    <ul class="latest-posts">
                                        @foreach ($recentposts as $recentpost)
                                            <!-- Latest Post -->
                                            <li class="clearfix">
                                                <!-- Date -->
                                                <p class="p-sm lp-date">{{ $recentpost->created_at->diffForHumans() }} - <span class="txt-400">Immigration Visa</span></p>
                                
                                                <!-- Link -->
                                                <h5 class="h5-sm">
                                                    <a href="{{ route('posts.show', ['post' => $recentpost]) }}">{{ $recentpost->title }}</a>
                                                </h5>
                                
                                                <!-- Text -->
                                                <p>{{ $recentpost->excerpt }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                


								

								<!-- SIDEBAR COUNTRIES --> 
								<div class="sidebar-countries sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-lg">Countries: </h5>

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

								</div>
							

							</aside>	<!-- END SIDEBAR -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SINGLE POST -->

   @endsection
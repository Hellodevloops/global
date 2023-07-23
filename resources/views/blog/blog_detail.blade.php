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
                            <h2 class="wt-title">Blog detail</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->                            
                    
                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog detail</li>
                            </ul>
                        </div>
                    
                    <!-- BREADCRUMB ROW END -->                        
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->



        <!-- OUR BLOG START -->
        <div class="section-full  p-t120 p-b90 bg-white">
            <div class="container">
            
                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-lg-8 col-md-12">
                            <!-- BLOG START -->
                            <div class="blog-post-single-outer">
                                <div class="blog-post-single bg-white">                                    

                                    <div class="wt-post-info">
                        
                                        <div class="wt-post-media m-b30">
                                            <img src="{{ $post->hero }}" alt="">
                                        </div>
                                        
                                        
                                        <div class="wt-post-title ">
                                            <div class="wt-post-meta-list">
                                                <div class="wt-list-content post-date">{{ $post->created_at->format('F d, Y') }}</div>
                                                <div class="wt-list-content post-author">{{ $post->author_name->name }}</div>
                                            </div> 
                                            <h3 class="post-title">{{$post->title}}</h3>
                                            
                                        </div>
                                        
                                        <div class="wt-post-discription">

                                           
                                            {!! $post->body !!}
                                           
                                        </div> 
                                        

                                      


                                        
                                        
                                    </div>

                                    

                                </div>

                                
                                <div class="post-navigation m-t30">
                                    <div class="post-nav-links">
                                        @if ($previous)
                                            <div class="post-nav-item nav-post-prev">
                                                <div class="nav-post-arrow"> 
                                                    <a href="{{ route('posts.show', $previous->id) }}">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>
                                                </div>
                                                <div class="nav-post-meta"> 
                                                    <a href="{{ route('posts.show', $previous->id) }}">{{ $previous->title }}</a>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($next)
                                            <div class="post-nav-item nav-post-next">
                                                <div class="nav-post-arrow"> 
                                                    <a href="{{ route('posts.show', $next->id) }}">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="nav-post-meta"> 
                                                    <a href="{{ route('posts.show', $next->id) }}">{{ $next->title }}</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                                              

                                <div class="clear" id="comment-list">
                                    <div class="comments-area" id="comments">
                                        
                                        <div>
                                           
                                            
                                            <!-- LEAVE A REPLY START  -->
                                            {{-- <div class="comment-respond m-t30" id="respond">
                
                                                <h3 class="comment-reply-title section-head-small mb-4" id="reply-title">Leave a reply
                                                    <small>
                                                        <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                                    </small>
                                                </h3>
                
                                                <form class="comment-form" id="commentform" method="post">
                                                    <div class="row">
                                                        <div class="comment-form-author col-md-6 mb-3">
                                                            <label>Your Name* <span class="required">*</span></label>
                                                            <input class="form-control" type="text" value="" name="user-comment" placeholder="Your Name*" id="author">
                                                        </div>
                                                        
                                                        <div class="comment-form-email col-md-6 mb-3">
                                                            <label>Your Email* <span class="required">*</span></label>
                                                            <input class="form-control" type="text" value="" name="email" placeholder="Your Email*">
                                                        </div>
                                                                                                            
                                                        <div class="comment-form-comment col-md-12 mb-4">
                                                            <label>Message*</label>
                                                            <textarea class="form-control" rows="8" name="comment" placeholder="Message*" id="comment"></textarea>
                                                        </div>
                                                        
                                                        <div class="form-submit">
                                                            <button type="submit" class="site-button">Submit Now</button>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                
                                            </div> --}}
                                            <!-- LEAVE A REPLY END -->
                                    </div>
                                    </div>
                                </div>
                            </div>                             
                        </div>
                        
                        <div class="col-lg-4 col-md-12 rightSidebar">

                            <div class="side-bar">
                                {{-- <div class="widget search-bx">
                                                                            
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <button class="btn" type="button" id="button-addon2"><i class="feather-search"></i></button>
                                        </div>
                                    </form>
                                    
                                </div> --}}

                                {{-- <div class="widget all_services_list">
                                    <h4 class="section-head-small mb-4">Categories</h4> 
                                    <div class="all_services m-b30">
                                        <ul>
                                            <li><a href="job-detail.html">Categories</a> <span class="badge">08</span></li>
                                            <li><a href="job-detail.html">Education</a> <span class="badge">12</span></li>
                                            <li><a href="job-detail.html">Information</a><span class="badge">15</span></li>
                                            <li><a href="job-detail.html">Jobs</a><span class="badge">25</span></li>
                                            <li><a href="job-detail.html">Learn</a><span class="badge">36</span></li>
                                            <li><a href="job-detail.html">Skill</a><span class="badge">12</span></li>
                                        </ul>
                                    </div>
                                </div> --}}

                                <div class="widget recent-posts-entry">
                                    <h4 class="section-head-small mb-4">Recent Article</h4>
                                    <div class="section-content">
                                        <div class="widget-post-bx">

                                            @foreach ($recentposts as $recentpost)
                                                
                                            
                                            <div class="widget-post clearfix">
                                                <a href="{{ route('posts.show', ['post' => $recentpost]) }}">
                                                <div class="wt-post-media">
                                                    <img src="{{ $recentpost->hero }}" alt="">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">{{ $recentpost->created_at->format('F d, Y') }}</span>
                                                        <span class="post-title"> 
                                                            <a href="{{ route('posts.show', ['post' => $recentpost]) }}">{{ $recentpost->title }}</a>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                            </div>
                                            @endforeach
                                       
                                        </div>
                                    </div>
                                </div>

                               

                                {{-- <div class="widget tw-sidebar-tags-wrap">
                                    <h4 class="section-head-small mb-4">Tags</h4>
                                    
                                    <div class="tagcloud">
                                        <a href="job-list.html">General</a>
                                        <a href="job-list.html">Jobs </a>
                                        <a href="job-list.html">Payment</a>                                            
                                        <a href="job-list.html">Application </a>
                                        <a href="job-list.html">Work</a>
                                        <a href="job-list.html">Recruiting</a>
                                        <a href="job-list.html">Employer</a>
                                        <a href="job-list.html">Income</a>
                                        <a href="job-list.html">Tips</a>
                                    </div>
                                </div> --}}

                                
                            </div>


                        </div>
                    
                    </div>
                                            
                </div>
                
            </div>
            
        </div>   
        <!-- OUR BLOG END -->          
        
 
    </div>
    <!-- CONTENT END -->

   @endsection
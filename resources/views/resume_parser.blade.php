@extends('layouts.app')
@section('content')

  <!-- CONTENT START -->
  <div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Home</a></li>
                        <li>Resume Parser</li>
                    </ul>
                </div>
               
                <!-- BREADCRUMB ROW -->                            
                <div class="banner-title-outer">
                    <h2><div class="banner-title-name site-text-primary">
                        Resume Parser System
                </div></h2>
                    
                </div>
                  
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <!-- OUR BLOG START -->
    <div class="section-full p-t120  p-b90 site-bg-white">
        

        <div class="container">
            <div class="row">
                
                {{-- <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                    <div class="side-bar-st-1">
                        
                        <div class="twm-candidate-profile-pic">
                            
                            <img src="images/jobs-company/pic1.jpg" alt="">
                            <div class="upload-btn-wrapper">
                                
                                <div id="upload-image-grid"></div>
                                <button class="site-button button-sm">Upload Photo</button>
                                <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                            </div>
                            
                        </div>

                        <div class="twm-mid-content text-center">
                            <a href="{{route('home')}}" class="twm-job-title">
                                <h4>Technology Management System</h4>
                            </a>
                            <p></p>
                        </div>
                       
                        <div class="twm-nav-list-1">
                            <ul>
                                <li><a href="employer-profile.html"><i class="fa fa-user"></i> Company Profile</a></li>
                                <li><a href="employer-resume.html"><i class="fa fa-receipt"></i> Resume</a></li>
                                <li class="active"><a href="employer-manage-jobs.html"><i class="fa fa-suitcase"></i> Manage Jobs</a></li>
                                <li><a href="employer-post-job.html"><i class="fa fa-book-reader"></i> Post A Jobs</a></li>
                                <li><a href="employer-transaction.html"><i class="fa fa-credit-card"></i>Transaction</a></li>
                                <li><a href="candidate-grid.html"><i class="fa fa-user-check"></i> Browse Candidates</a></li>
                                <li><a href="employer-change-password.html"><i class="fa fa-fingerprint"></i> Change Passeord</a></li>
                                <li><a href="index.html"><i class="fa fa-share-square"></i> Logout</a></li>
                                <li><a href="employer-account-fresher.html"><i class="fa fa-pencil-alt"></i>Register Fresher</a></li>
                                <li><a href="employer-account-professional.html"><i class="fa fa-pencil-alt"></i>Register Professionals</a></li>
                            </ul>
                        </div>
                        
                    </div>

                </div> --}}

                <div class="col-xl-12 col-lg-12 col-md-12 m-b30">
                    <!--Filter Short By-->
                    <div class="twm-right-section-panel site-bg-gray">
                        <form>
                            <!--Basic Information-->
                            <div class="panel panel-default">
                                <div class="panel-heading wt-panel-heading p-a20">
                                    <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Manage Resumes</h4>
                                </div>
                                <div class="panel-body wt-panel-body m-b30 ">
                                    <div class="twm-D_table p-a20 table-responsive">
                                        <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Education</th>
                                                    <th>Skills</th>
                                                    <th>Experience</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--1-->
                                                <tr>
                                                    <td>
                                                        <div class="twm-bookmark-list">
                                                            
                                                            <div class="twm-mid-content">
                                                                <a href="#" class="twm-job-title">
                                                                    <h4>Senior Web Designer</h4>
                                                                    <p class="twm-bookmark-address">
                                                                        <i class="feather-map-pin"></i>Sacramento, California
                                                                    </p>
                                                                </a>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>Web Designer</td>
                                                    <td><div class="twm-jobs-category"><span class="twm-bg-green">Part Time</span></div></td>
                                                    <td><a href="javascript:;" class="site-text-primary">03 Applied</a></td>
                                                    <td>
                                                        <span class="text-clr-green2">Active</span>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="twm-table-controls">
                                                            <ul class="twm-DT-controls-icon list-unstyled">
                                                                <li>
                                                                    <button title="View profile" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                        <span class="fa fa-eye"></span>
                                                                    </button>
                                                                </li>
                                                                
                                                                <li>
                                                                    <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                        <span class="far fa-trash-alt"></span>
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Education</th>
                                                    <th>Skills</th>
                                                    <th>Experience</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>             
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>   
    <!-- OUR BLOG END -->
  
    

</div>
<!-- CONTENT END -->


@endsection
@extends('layouts.app')
@section('content')
    <!-- BLOG PAGE CONTENT
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
            </div>
            <!-- END POST SLIDER HEADER -->



            <!-- BLOG POSTS HOLDER -->
            <div class="row">

                <!-- BLOG POST #1 -->
                @foreach ($posts as $post)
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
                                <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12 min read
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
                @endforeach
                <!-- END  BLOG POST #1 -->

               
              
                

            </div> <!-- END BLOG POSTS HOLDER -->
            <div class="blog-page-pagination">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center primary-pagination">
                        <li class="page-item {{ $posts->currentPage() == 1 ? 'disabled' : '' }}">
                            @if ($posts->previousPageUrl())
                                <a class="page-link" href="{{ $posts->previousPageUrl() }}" tabindex="-1">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </a>
                            @else
                                <span class="page-link" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></span>
                            @endif
                        </li>
                        @for ($page = 1; $page <= $posts->lastPage(); $page++)
                            <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $posts->url($page) }}">{{ $page }}
                                    @if ($page == $posts->currentPage())
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </a>
                            </li>
                        @endfor
                        <li class="page-item next-page {{ $posts->currentPage() == $posts->lastPage() ? 'disabled' : '' }}">
                            @if ($posts->nextPageUrl())
                                <a class="page-link" href="{{ $posts->nextPageUrl() }}">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            @else
                                <span class="page-link"><i class="fas fa-long-arrow-alt-right"></i></span>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>


        </div> <!-- End container -->
    </section> <!-- END BLOG-1 -->



    <!-- CALL TO ACTION-4
        ============================================= -->
    <section id="cta-4" class="bg-fixed cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">
                    <div class="cta-txt">
                        <h3 class="h3-xl">Study Abroad Consultations</h3>
                        <p class="p-lg">Receive expert consultations for prospective international students, providing
                            valuable insights and guidance for your study abroad journey.</p>
                        <a href="mailto:gec@gmail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                            <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END CALL TO ACTION-4 -->
@endsection

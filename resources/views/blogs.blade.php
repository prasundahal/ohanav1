@extends('layouts.main')
@section('content')

    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="Blog"><span>Blog</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Post Section -->
    <section class="padding pt-xs-40">
        <div class="container">
            <div class="row">
                <!-- Post Item -->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 blog-post-hr">

                            @foreach($blogs as $blog)
                                <div class="blog-post mb-45">
                                    <div class="post-media"><img
                                            src="{{ URL::to($blog->image) }}" alt=""/><span
                                            class="event-calender blog-date"> 21 <span>june</span> </span></div>
                                    <div class="post-meta"><span>by <a
                                                href="javascript:avoid(0);">Admin</a></span>
                                        <div class="post-more-link pull-right">

                                            <div class="fb-share-button"
                                                 data-href="{{ route('readblog',$blog->id)}}"
                                                 data-layout="button_count">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="post-header">
                                        <h2><a href="{{ route('readblog',$blog->id)}}">{{ $blog->title }}</a></h2>
                                    </div>
                                    <div class="post-entry">
                                        <p> {{ substr($blog->post, 0,  500) }}...
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left"><a href="{{ route('readblog',$blog->id)}}"
                                                                             class="btn-text">Read More</a></div>
                                </div>
                                <hr/>
                            @endforeach


                        </div>
                    </div>
                    <style>
                        .page-item.active .page-link {
                            z-index: 5;
                            color: #fff;
                            background-color: #FF8C00;
                        }

                    </style>


                    <!-- Pagination Nav -->
                    <div class="text-left mt-60 mtb-xs-30">
                        {{ $blogs->links("pagination::bootstrap-4") }}
                    </div>
                    <!-- End Pagination Nav -->
                </div>
                <!-- End Post Item -->
                <!-- Sidebar -->
                <div class="col-lg-3 mt-sm-30">
                    <div class="sidebar-widget">
                        <h5>Search</h5>
                        <div class="widget-search pt-15">
                            <input class="form-full input-lg" type="text" value="" placeholder="Search Here"
                                   name="search" id="wid-search">
                            <input type="submit" value="" name="email" id="wid-s-sub">
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h5>Categories</h5>
                        <hr>
                        <ul class="categories">
                            @foreach($blogcategories as $blogcategory)
                                <li><a href="{{ route('blogcat',$blogcategory->id)}}">{{ $blogcategory->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>
    <!-- End Blog Post Section -->
@endsection


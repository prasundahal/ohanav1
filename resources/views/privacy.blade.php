@extends('layouts.main')

@section('content')

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Privacy Policy</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="about-us-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0">
                    <!-- Start Service Details Sidebar -->
                    <div class="service-details-sidebar mtm-40 mtm-sm-2 mtm-md-2">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">Projects</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    @foreach ($projectTypes as $project)
                                        <li><a href="{{route('project')}}"><img
                                                src="{{asset($project->imgmain)}}" alt="{{$project->type}}">{{$project->type}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>

                <div class="col-lg-8 order-0">
                    <div class="about-discover-content mb-md-22 mb-sm-22">
                        <div class="about-discover-head">
                            <h2>Privacy Policy</h2>
                            {{-- <P>We are committed to leaving a legacy of progress by developing local skills for sustained
                                economic opportunity and volunteering our time and talent to the communities where we
                                work.</P> --}}
                        </div>

                        <div class="about-history-wrapper mt-46 mt-sm-36">
                            @foreach ($portfolios as $portfolio)
                                
                                <div class="history-item">
                                    {{-- <div class="history-item__thumb">
                                        <img src="assets/img/service/service-01.jpg" alt="History"/>
                                    </div> --}}
                                    <div class="history-item__info">
                                        {{-- <h4 class="history-year">1898</h4> --}}
                                        <h2 class="history-title">{{$portfolio->title}}</h2>
                                        <p>{{$portfolio->content}}</p>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->
@endsection
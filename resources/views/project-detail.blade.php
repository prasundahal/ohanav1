@extends('layouts.main')
<meta property="og:title" content="{{$project->meta_title}}"/>
<meta property="og:description" content="{{$project->meta_description}}"/>
@section('content')
<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>{{$project->projectName}}</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('project')}}">Projects</a></li>
                        <li class="active"><a href="{{route('projectdetail',$project->id)}}">{{$project->projectName}}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-86 pb-sm-56 mb-xl-30">
    <div class="project-details-area-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Project Thumb Content -->
                    <div class="project-details-thumb ht-slick-slider" data-slick='{"arrows": false,"autoplay": true, "dots": true}' style="height: fit-content">
                        <figure class="project-thumb-item">
                            <img src="{{asset($project->imgmain)}}" alt="{{$project->projectName}}"/>
                        </figure>
                        @if (!empty($project->innerimg1))
                        <figure class="project-thumb-item">
                            <img src="{{asset($project->innerimg1)}}" alt="{{$project->projectName}}"/>
                        </figure>
                        @endif
                        @if (!empty($project->innerimg2))
                        <figure class="project-thumb-item">
                            <img src="{{asset($project->innerimg2)}}" alt="{{$project->projectName}}"/>
                        </figure>
                        @endif
                        @if (!empty($project->innerimg3))
                        <figure class="project-thumb-item">
                            <img src="{{asset($project->innerimg3)}}" alt="{{$project->projectName}}"/>
                        </figure>
                        @endif
                        @if (!empty($project->innerimg4))
                        <figure class="project-thumb-item">
                            <img src="{{asset($project->innerimg4)}}" alt="{{$project->projectName}}"/>
                        </figure>
                        @endif
                    </div>
                    <!-- End Project Thumb Content -->

                    <!-- Start Project Details Content -->
                    <div class="project-details-content row mt-40">
                        <div class="col-md-6 col-xl-7">
                            <div class="project-info">
                                <h2>{{$project->projectName}}</h2>
                                {!! $project->innerHeadingContent !!}
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-5">
                            <div class="project-desc">
                                <div class="section-title-wrap">
                                    <h2>Project Description</h2>
                                </div>

                                <ul class="project-desc-list">
                                    <li><strong>Client:</strong> {{$project->client}}</li>
                                    <li><strong>Location:</strong> {{$project->location}}</li>
                                    <li><strong>Surface Area:</strong> {{$project->surfaceArea}}</li>
                                    <li><strong>Year Completed:</strong> {{$project->yearcompleted}}</li>
                                    <li><strong>Value:</strong> {{$project->value}}</li>
                                    <li><strong>Architect:</strong> {{$project->architech}}</li>
                                </ul>

                                {{-- <a href="#" class="btn view-project">View Project</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End Project Details Content -->
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <nav class="project-pagination-wrap">
                        <ul class="project-pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i> Plaza in Singapore</a></li>
                            <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                            <li><a href="#">Commerce Centre <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->

@endsection

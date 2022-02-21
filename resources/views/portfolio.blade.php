@extends('layouts.main')
@section('content')
    <!-- CONTENT -->
    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="Project Details"><span>Portfolio</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>Portfolio</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Intro Section -->
    <!-- End Intro Section -->
    <div id="project-detail-section" class="padding pb-60 pt-xs-60">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="heading-box pb-30 ">
                        <h2><span>Our</span> Portfolio</h2>
                        <span class="b-line l-left"></span>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="project-details">
                        <figure>
                            <img src="{{ asset('/public/assets/images/parallax1.jpg')}}" alt="">
                        </figure>
                        <div class="project-info col-sm-12 col-lg-4">
                            <h3>Project Description</h3>
                            <ul>
                                <li>
                                    <strong>Client: {{$settings->client}}</strong>
                                </li>
                                <li>
                                    <strong>Location: {{$settings->company_location}}</strong>
                                </li>

                                <li>
                                    <strong>Years: {{$settings->years}}</strong>
                                </li>
                                <li>
                                    <strong>Types: {{$settings->types}}</strong>
                                </li>
                                <li>
                                    <strong>Architect: {{$settings->architect}}</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @foreach($portfolios as $portfolio)
                <div class="col-sm-12 col-lg-7 mt-30">
                    <div class="box-title mb-20">
                        <h3>{{$portfolio->title}}</h3>
                    </div>
                    <div class="text-content">
                        <p>
                           {!! $portfolio->content !!}
                        </p>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-12 col-lg-7 mt-40 mt-xs-15">
                    <div class="row">
                        <div class="col-sm-6 mb-xs-30">
                            <div class="box-title mb-20">
                                <h4>Our Objective</h4>
                            </div>
                            <div class="text-content">
                                <p>
                                <ul>
                                    @foreach($objectives as $objective)
                                    <li>{{$objective->objective}}</li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box-title mb-20">
                                <h4>Our Services</h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    We provide professional and quality services in the following sector
                                <ul>
                                    @foreach($services as $service)
                                        <li>{{$service->service}}</li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 mt-40">
                    <ul class="project-gallery text-right">
                        <li>
                            <a href="{{ asset('/public/assets/images/popup/small-1-1.jpg')}}" class="fancylight"
                               data-fancybox-group="light"><img src="assets/images/popup/small-1-1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="{{ asset('/public/assets/images/popup/small-2-1.jpg')}}" class="fancylight"
                               data-fancybox-group="light"><img src="assets/images/popup/small-2-1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="{{ asset('/public/assets/images/popup/small-3-1.jpg')}}" class="fancylight"
                               data-fancybox-group="light"><img src="assets/images/popup/small-3-1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="{{ asset('/public/assets/images/popup/small-4-1.jpg')}}" class="fancylight"
                               data-fancybox-group="light"><img src="assets/images/popup/small-4-1.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection

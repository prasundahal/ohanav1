@extends('layouts.main')
@section('content')

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>About Us</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('about')}}">About Us</a></li>
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
                            <h3 class="sidebar-heading">Services</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    @foreach (\App\Models\Service::all() as $service)
                                        
                                    <li><a href="service-details.html"><i class="{{$service->icon}}"></i> {{$service->service}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>

                <div class="col-lg-8 order-0">
                    <div class="about-us-page-content">
                        <div class="about-us-info mb-46">
                            <figure class="about-us-thumb mb-30 mb-sm-26">
                                <img src="{{asset($settings->company_image)}}" alt="Builder"/>
                            </figure>
                            <div class="about-us-txt">
                                <h2 class="h3">{{$settings->company_name}}</h2>
                                {!! $settings->about !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="h3">Our Mission</h2>
                                {!! $settings->company_mission !!}
                            </div>

                            <div class="col-md-6">
                                <h2 class="h3">Our Vision</h2>
                                {!! $settings->company_vision !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->

    {{-- <!-- About Section -->
    <div id="about-section" class="padding pt-xs-40">
        <div class="container">
            

            <div class="row">

                <div class="col-md-6 col-lg-8">


                    <div class="block-title v-line">
                        <h2><span>Our</span> MISSION</h2>
                        <p class="italic">
                            A MISSION TO BUILD THE NATION
                        </p>
                    </div>
                    <div class="text-content">
                        <p>
                            {{$settings->company_mission}}
                        </p>
                    </div>

                    <hr class="divider">

                    <div class="block-title v-line">
                        <h2><span>About</span> US</h2>
                        <p class="italic">
                            {{$settings->company_name}}
                        </p>
                    </div>
                    <div class="text-content">
                        <p>
                            {!! $settings->about !!}
                        </p>
                    </div>


                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="dark-bg our-vision light-color padding-40">
                        <div class="block-title">
                            <h2><span>Our</span> VISION</h2>
                            <p class="italic">
                                COMPANY VISION & MISSION
                            </p>
                        </div>
                        <p>
                            {{$settings->company_vision}}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End-->

    <!-- Mission Section -->
    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Our </span> Company</h2>
                        <p class="italic">
                            {{$settings->company_name}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($boardOfDirectors as $boardOfDirector)
                    <div class="col-md-12 col-lg-12">
                        <div class="about-block clearfix">
                            <div class="fl width-25per box-shadow mt-15 mb-xs-15">
                                <img class="img-responsive" src="{{ URL::to($boardOfDirector->image)}}"
                                     alt="Photo">
                            </div>
                            <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                                <div class="box-title">
                                    <h3>{{$boardOfDirector->name}}</h3>
                                    <h5>{{$boardOfDirector->designation}}</h5>
                                </div>
                                <div class="text-content">
                                    <p>
                                        {{$boardOfDirector->about}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider">
                @endforeach
            </div>
        </div>
    </div> --}}


@endsection

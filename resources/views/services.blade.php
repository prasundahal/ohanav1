@extends('layouts.main')
@section('content')

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Our Services</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('service')}}">Services</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="our-services-page-content">
        <div class="container">
            <div class="row mtm-30">
                @foreach (\App\Models\Service::all() as $service)
                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Single Service Item -->
                        <div class="service-item service-item--three white-bg">
                            <div class="service-item__icon">
                                <i class="{{$service->icon}}"></i>
                            </div>

                            <div class="service-item__info">
                                <h2><a href="#">{{$service->service}}</a></h2>
                                {!! str_limit($service->description,500) !!}
                            </div>
                        </div>
                        <!-- End Single Service Item -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->

@endsection
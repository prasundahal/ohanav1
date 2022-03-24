@extends('layouts.main')
@section('content')

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Terms Of Service</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('termsandcondition')}}">Terms Of Service</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

{{-- <!-- Start Page Content Wrapper -->
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="about-us-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 anim-section creer_page mb-30">
                    <h3 class="sidebar-heading">FAQ</h3>
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0 panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can we contact you to build my dream house for my residential purpose? <i class="fa fa-plus collape-plus"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show bg-custom" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <p>Please feel free to call us at 01-4102907 or mail us @dhaulagiriconstructions@gmail.com  or visit our office.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0 panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can we get a quotation for the services you offer? <i class="fa fa-plus collape-plus"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <p>Please mail us @ dhaulagiriconstructions@gmail.com or send us message directly at our website  to get the quotation for any kind of services ranging from architectural, structural and associated municipal drawing, 3-D designs ,construction of a private residential building to commercial buildings, interior design and finishing services like: painting, tile and marble laying, surveying, valuation, supply of building construction and finishing materials, valuation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0 panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How fast do you handover the project?<i class="fa fa-plus collape-plus"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-block">
                                    <p>Dear Sir/Madam, it totally depends on the site and the property you hold and your final design requirements. So, a discussion with us with the land property documents can help us answer you the time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper --> --}}

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
                                    @foreach ($services as $service)
                                    <li><a href="{{route('service')}}"><i class="{{$service->icon}}"></i> {{$service->service}}</a>
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
                            <h2>Terms and Conditions</h2>
                            {{-- <P>We are committed to leaving a legacy of progress by developing local skills for sustained
                                economic opportunity and volunteering our time and talent to the communities where we
                                work.</P> --}}
                        </div>

                        <div class="about-history-wrapper mt-46 mt-sm-36">
                            @foreach ($faqs as $faq)                                
                                <div class="history-item dropdown">
                                    <div class="history-item__info">
                                        <h2 class="dropdown-toggle history-title" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$faq->question}}</h2>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <p>{{$faq->answer}}</p>
                                        </div>
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

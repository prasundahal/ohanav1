@extends('layouts.main')
@section('content')
<section id="breadcrumb-wrapper">
    <div class="breadcrumb-title">
        <h3 class="font-weight-bold text-uppercase text-center m-0 text-white">About Us</h3>
    </div>
</section>
<section id="about-us-wrapper">
    <section id="who-are-we" class="default-padding bg-white">
        <div class="container">
            <div class="title-description-wrapper mb-5">
                <div class="title text-center mb-3">
                    <h1>Who Are We ?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="image-head-why-us mb-xl-0 mb-3">
                        <img src="{{$settings->company_image}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 justify-content-start flex-column align-items-center m-auto">
                    <div class="company-description mt-3 mb-4">
                        <p> {!! $settings->about !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mission-vision default-padding">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-6 mission-vision text-left align-items-center m-auto justify-content-end flex-column col-md-12 order-xl-1 order-md-2 order-2">
                    <h3 class="font-weight-bold"> Mission </h3>
                    <div class="company-description mt-3 mb-4"> {{$settings->company_mission}} </div>
                    <h3 class="font-weight-bold"> Vission </h3>
                    <div class="company-description mt-3 mb-4"> {{$settings->company_vision}}</div>
                </div>
                <div class="col-xl-6 col-md-12 order-xl-2 order-md-1 order-1">
                    <div class="image-header mb-4">
                        <img src="public/frontend/image/body/blog/5.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


{{-- technology --}}
@include('frontend.inc.technology')
{{-- technology --}}
{{-- counter --}}
@include('frontend.inc.counter')
{{-- endcounter --}}

{{-- projects --}}

    @include('frontend.inc.project')
{{-- endprojecte --}}



</section>

@endsection

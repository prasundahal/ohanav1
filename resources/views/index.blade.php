@extends('layouts.main')
@section('content')
<style>
    .counter::after {
        content: "+";
    }
</style>


{{-- slider --}}
@include('frontend.inc.slider')
{{-- endshider --}}


{{-- who we are --}}
@include('frontend.inc.weare')
{{-- end who we are --}}


{{-- Projects --}}


<section id="projects" class="default-padding bg-white">
    <div class="container">
        <div class="highlighted-services">
            <div class="title-description-wrapper mb-5">
                <div class="title text-center mb-3">
                    <h1>
                        Our Work
                    </h1>
                </div>
                <div class="discription text-center w-75 m-auto"> {{$settings->projects}}</div>
            </div>
            <div class="row justify-content-center  ">
                @foreach($projects as $key=>$project)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-lg-2 mb-4">
                    <div class="card">
                        <div class="card-head"> <img src="{{ asset($project->imgmain)}}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">{{ $project->projectName }}
                            </h5>
                            <p class="card-text mt-3">{{ $project->subName }}
                            </p>
                            <a href="{{ route('ourwork',$project->id)}}" class="btn mt-2">Explore More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- @include('frontend.inc.project') --}}


{{-- Projects --}}
{{-- counter --}}
@include('frontend.inc.counter')
{{-- endcounter --}}



{{-- services --}}
<section id="why-choose-us" class="default-padding position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    <h1> Recent Activities</h1>
                </div>
                <div class="discription text-center w-75 m-auto"> {{$settings->whyus}} </div>
            </div>
            <div class="col-lg-12">
                <div class="row card-items justify-content-center">

                    @php
                    if (Route::is('home')) {
                    $services=\App\Models\Service::latest()->limit(8)->get();
                    }
                    @endphp

                    @foreach($services as $service)
                    <div class="col-lg-3 col-sm-4">
                        <a href="#">
                            <div class="card" style="background-image: url({{$service->image}}); background-position:center;">
                                <div class="card-body mx-auto my-3 text-center">
                                    <i class="{{$service->icon}}" aria-hidden="true"></i>
                                    <div class="title-wrap py-1 px-2 mt-3">
                                        <h5 class="card-title">{{$service->service}}</h5>
                                        <h6 class="card-title">{!! str_limit($service->description, $limit = 20 ) !!}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @if (Route::is('home'))
                <div class="row card-items justify-content-center">
                    <a href="{{ route('service')}}" class="btn mt-2">Explore More</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- @include('frontend.inc.whychoseus') --}}



{{-- services --}}

{{-- contactus --}}
@include('frontend.inc.contactus')
{{-- endcontactus --}}

{{-- parallax --}}
@include('frontend.inc.parallax')
{{-- endparallax --}}

@endsection

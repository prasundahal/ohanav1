<section id="why-choose-us" class="default-padding position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    {{-- <h1> Recent Activities</h1> --}}
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

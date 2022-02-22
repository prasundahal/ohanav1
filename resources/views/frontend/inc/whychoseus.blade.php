<section id="why-choose-us" class="default-padding position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    <h1> Why Choose Us ?</h1>
                </div>
                <div class="discription text-center w-75 m-auto"> {{$settings->whyus}} </div>
            </div>
            <div class="col-lg-12">
                <div class="row card-items justify-content-center">


                    @foreach($services as $service)
                    <div class="col-lg-3 col-sm-4">
                        <a href="product-detail.html">
                            <div class="card">
                                <div class="card-body mx-auto my-3 text-center">
                                    <i class="{{$service->icon}}" aria-hidden="true"></i>
                                    <h5 class="card-title">{{$service->service}}</h5>
                                    <h6 class="card-title">{!! str_limit($service->description, $limit = 10 ) !!}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

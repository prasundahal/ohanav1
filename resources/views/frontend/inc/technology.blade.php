
    <section id="services" class="default-padding">
        <div class="container">
            <div class="title-description-wrapper text-center mb-5">
                <div class="title font-weight-bold mb-3 text-uppercase">
                    <h1>Technology We're Expertise In</h1>
                </div>
                <div class="discription w-75 m-auto">{{$settings->technologytext}}
                </div>
            </div>
            <div class="three-panel-block">
                <div class="row justify-content-center">
                    @foreach($partners as $partner)
                    <div class="col-lg-2 col-md-6 col-sm-6 mb-2">
                        <div class="service-block-overlay text-center p-lg-2">
                            <img src="{{ asset($partner->partnerImage)}}" class="img-fluid">
                            <a class="title" href="services.html">
                                <h3 class="mb-2 mt-2 font-weight-bold">{{ $partner->partnerName}}</h3>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

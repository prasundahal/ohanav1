<!-- Start Testimonial Wrapper -->
<section class="testimonial-area-wrapper mt-86 mt-sm-56 bg-img" data-bg="{{asset('public/frontend/assets/img/testimonial/home1-testi-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 white mb-38">
                    <h2>Testimonial</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonial-content-wrap">
                    <div class="ht-slick-wrapper">
                        <div class="ht-slick-slider slick-row-30"
                             data-slick='{"slidesToShow": 3, "dots": true, "autoplay": true, "arrows": false, "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}, {"breakpoint": 992,"settings":{"slidesToShow": 2}}]}'>
                            @foreach ($advisors as $advisor)
                                 
                            <!-- Start Single Testimonial Item -->
                            <div class="testimonial-item">
                                <div class="testimonial-item__quote">
                                    <p>{!! str_limit($advisor->content, $limit = 150 ) !!}</p>
                                </div>
                                <div class="testimonial-item__client">
                                    <figure class="testimonial-item__client__thumb">
                                        <img src="{{asset($advisor->image)}}" alt="Testimonial"/>
                                    </figure>
                                    <div class="testimonial-item__client__info">
                                        <h4>{{$advisor->name}} 
                                            {{-- <span class="client-title">Worker of HasTech</span> --}}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial Item -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Wrapper -->
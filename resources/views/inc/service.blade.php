<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="service-content-wrapper">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Our Services</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>

                    <!-- Start Service Content Inner -->
                    <div class="service-content-inner">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                 data-slick='{"slidesToShow": 3, "dots": true, "autoplay": true, "arrows": false, "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}, {"breakpoint": 992,"settings":{"slidesToShow": 2}}]}'>
                                 @foreach ($services as $service)
                                 <!-- Start Single Service Item -->
                                 <div class="service-item">
                                     <figure class="service-item__thumb">
                                         <a href="service-details.html"><img src="{{asset($service->image)}}"
                                                                             alt="{{$service->service}}"/></a>
                                         <figcaption class="service-item__thumb-hvr">
                                             <a href="service-details.html" class="read-more">Read More</a>
                                             <a href="service-details.html" class="btn-link-icon" target="_blank"><i
                                                     class="fa fa-external-link"></i></a>
                                         </figcaption>
                                     </figure>
                    
                                     <div class="service-item__info">
                                         <h2><a href="service-details.html">{{$service->service}}</a></h2>
                                         {!! str_limit($service->description, $limit = 300 ) !!}
                                         <a href="service-details.html" class="btn-read-more">Read More</a>
                                     </div>
                                 </div>
                                 <!-- End Single Service Item -->
                                 @endforeach
                    
                            </div>
                        </div>
                    </div>
                    <!-- End Service Content Inner -->
                </div>
            </div>

            {{-- <div class="col-md-6 col-lg-4">
                <!-- Start Leave a Message Area -->
                <div class="leave-message-area-wrapper mt-sm-40">
                    <div class="section-title-wrap mb-34">
                        <h2 class="mb-16">Leave A Message</h2>
                        <p>Looking for a quality constructor for your next project?</p>
                    </div>

                    <!-- Start Massage Form -->
                    <div class="leave-message-form">
                        <form action="#">
                            <div class="leave-message-form__inner">
                                <div class="leave-message-form__inner__item">
                                    <input type="text" placeholder="Your Name" required/>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <input type="email" placeholder="Your Email" required/>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <textarea rows="4" cols="10" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <button class="btn btn-brand">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Massage Form -->
                </div>
                <!-- End Leave a Message Area -->
            </div> --}}
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->

    
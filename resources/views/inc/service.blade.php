<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-8">
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
                                         <a href="{{route('service')}}"><img src="{{asset($service->image)}}"
                                                                             alt="{{$service->service}}"/></a>
                                         <figcaption class="service-item__thumb-hvr">
                                             <a href="{{route('service')}}" class="read-more">Read More</a>
                                             <a href="{{route('service')}}" class="btn-link-icon" target="_blank"><i
                                                     class="fa fa-external-link"></i></a>
                                         </figcaption>
                                     </figure>
                    
                                     <div class="service-item__info">
                                         <h2><a href="{{route('service')}}">{{$service->service}}</a></h2>
                                         {!! str_limit($service->description, $limit = 300 ) !!}
                                         <a href="{{route('service')}}" class="btn-read-more">Read More</a>
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

            <div class="col-md-6 col-lg-4">
                <!-- Start Leave a Message Area -->
                <div class="leave-message-area-wrapper mt-sm-40 py-4">
                    <div class="section-title-wrap mb-3">
                        <h2>Leave A Message</h2>
                    </div>

                    <!-- Start Massage Form -->
                    <div class="leave-message-form">
                        <form id="contact-form"enctype="multipart/form-data" method="post"
                        action="{{ route('createmessage')}}">
                        @csrf
                            <div class="leave-message-form__inner">
                                <div class="leave-message-form__inner__item">
                                    <input type="text" name="name" id="name" placeholder="Your Name*" required/>

                                </div>
                                <div class="leave-message-form__inner__item">
                                    <input type="email" name="email" id="email" placeholder="Your Email*" required/>

                                </div>
                                <div class="leave-message-form__inner__item">
                                    <input type="text" name="subject" placeholder="Your Phone"/>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <textarea id="message" name="message" cols="10" rows="4" placeholder="Write your Message*" required></textarea>

                                </div>
                                <div class="leave-message-form__inner__item">
                                    <button type="submit" name="button" class="btn btn-brand">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Massage Form -->
                </div>
                <!-- End Leave a Message Area -->
            </div>
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->

    
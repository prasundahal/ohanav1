@extends('layouts.main')
@section('content')

    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

    </style>

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->


    <!-- Contact Section -->
    {{-- <section class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-md-2 text-center">
                    <h2>KEEP IN TOUCH</h2>
                    <p class="lead">You can reach us anytime. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 contact pb-60 pt-30">
                    <div class="row text-center">
                        <div class="col-md-4 col-lg-4 pb-xs-30"><i class="ion-android-call icon-circle pos-s"></i><a
                                href="#" class="mt-15 i-block">{{$settings->phone_number}}</a></div>
                        <div class="col-md-4 col-lg-4 pb-xs-30"><i class="ion-ios-location icon-circle pos-s"></i>
                            <p class="mt-15">
                                @php
                                    $location=explode( ',', $settings->company_location);
                                    for($i=0;$i<count($location);$i++){
                                        echo $location[$i].'<br>';
                                    }
                                @endphp
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-4 pb-xs-30"><i class="ion-ios-email icon-circle pos-s"></i><a
                                href="mailto:{{$settings->email}}" class="mt-15 i-block">
                                {{$settings->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section -->
        <div class="map">
            <div class="center">


                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.660704985344!2d85.32861821453804!3d27.69687973255974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a30996b7a5%3A0xb48c75fad8a2c479!2sDurga%20Bhawan!5e0!3m2!1sen!2snp!4v1605757528294!5m2!1sen!2snp"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Map Section -->
    {{-- <div class="container contact-form padding pt-xs-40 mt-up" data-aos="zoom-in-up" data-aos-delay="1000">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h4>GET IN TOUCH</h4>
                <p>Leave a Message</p>
                <!-- Contact FORM -->
                <form class="contact-form mt-45" id="contact" enctype="multipart/form-data" method="post"
                      action="{{ route('createmessage')}}">
                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <x-alert/>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                {{ csrf_field() }}
                                <input class="input-sm form-full" id="name" type="text" name="name"
                                       placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="text" name="email"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="sub" type="text" name="subject"
                                       placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full" id="message" rows="7" name="message"
                                          placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-field text">
                                <input type="file" name="file" id="file">
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 mt-30">
                            <input type="submit" class="btn-text" name="button" value="Send Message">
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->
            </div>
        </div>
    </div> --}}

    <!-- Contact Section -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap">
    <div class="contact-page-area-wrapper">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="contact-content-wrap pt-84 pt-sm-54 pb-90 pb-sm-60 mb-xl-30">
                    <div class="col-lg-9 m-auto">
                        <div class="contact-page-content">
                            <div class="section-title-wrap mb-24">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="office-info">
                                <p><i class="fa fa-map-marker"></i> {{$settings->company_location}}</p>
                                <p><a href="tel:{{$settings->phone_number}}"><i class="fa fa-phone"></i> {{$settings->phone_number}}</a></p>
                                <p><a href="mailto:{{$settings->email}}"><i class="fa fa-envelope-o"></i> {{$settings->email}}</a></p>
                                {{-- <p><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 18:00</p> --}}
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-content-wrap pt-84 pt-sm-54 pb-90 pb-sm-60 mb-xl-30">
                    <div class="section-title-wrap mb-24">
                        <h2>Send Us A Quote</h2>
                    </div>

                    <div class="contact-form">
                        <form id="contact-form"enctype="multipart/form-data" method="post"
                        action="{{ route('createmessage')}}">
                        <x-alert/>
                        {{ csrf_field() }}
                            <div class="contact-form-content">
                                <div class="form-input-item">
                                    <input type="text" name="name" id="name" placeholder="Your Name*" required/>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-input-item">
                                            <input type="text" name="subject" placeholder="Your Phone"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-input-item">
                                            <input type="email" name="email" id="email" placeholder="Your Email*" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input-item">
                                    <textarea id="message" name="message" cols="30" rows="4"
                                              placeholder="Write your Message*" required></textarea>
                                </div>

                                <div class="form-input-item">
                                    <button type="submit" name="button" class="btn btn-brand">Send Message</button>
                                </div>
                            </div>

                            <!-- Show Message Notification -->
                            {{-- <div class="form-message mt-1"></div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->

<!-- Map Section -->

<div class="map">
    <div class="center">
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.660704985344!2d85.32861821453804!3d27.69687973255974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a30996b7a5%3A0xb48c75fad8a2c479!2sDurga%20Bhawan!5e0!3m2!1sen!2snp!4v1605757528294!5m2!1sen!2snp"
                width="900" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- Map Section -->


@endsection

@extends('layouts.main')
@section('content')
    <style>
        .counter::after {
            content: "+";
        }
    </style>
    <!-- star-banner -->
    <!--  Main Banner Start Here-->
    <div class="main-banner">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    @foreach($sliders as $slider)
                        <li data-title="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ URL::to($slider->image) }}" alt="" class="rev-slidebg">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title tp-resizeme"
                                 id="slide-129-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                                 data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                                 data-fontsize="['50','50','50','30']"
                                 data-lineheight="['55','55','55','35']"
                                 data-width="['600','600','600','420']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"

                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on">
                                <div class="banner-text">
                                    <span>{{ $slider->title }}</span>
                                    <h2>{{ $slider->subtitle1 }} <span>{{ $slider->subtitle2 }}</span></h2>
                                    <p>
                                        {{ $slider->content }}
                                    </p>


                                    <a class="btn-text" href="{{ url('/about') }}"> read more</a>
                                </div>
                            </div>

                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--  Main Banner End Here-->

    <!--About-->
    <section id="about_us" class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12 col-lg-7 about-left">

                    <div class="sec_hedding">
                        <h2><span>About </span>Company</h2>
                        <span class="b-line l-left"></span>
                    </div>
                    <p>
                        {!! str_limit($settings->about, $limit = 500 ) !!}
                        <a href="{{url('/about')}}">Read More</a>
                    </p>
                    <div class="row mt-30">
                        <div class="col-lg-4 col-md-4 process mb-40">
                            <div class="icon-lf float-left">
                                <i class="ion-ios-paperplane-outline"></i>
                            </div>
                            <div class="right-txt float-right">
                                <h3>Quick Help</h3>
                                <p>
                                    <a href="{{ url('/contact') }}">Contact Us</a>
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 process mb-40">
                            <div class="icon-lf float-left">
                                <i class="ion-ios-gear-outline"></i>
                            </div>
                            <div class="right-txt float-right">
                                <h3>Our Services</h3>
                                <p>
                                    <a href="{{ url('/#service_section') }}">Services</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 process mb-40">
                            <div class="icon-lf float-left">
                                <i class="ion-ios-bolt-outline"></i>
                            </div>
                            <div class="right-txt float-right">
                                <h3>Portfolio</h3>
                                <p>
                                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 col-lg-5">
                    <img src="{{ URL::to($settings->company_image)}}" class="repo-full">
                </div>

            </div>

        </div>
    </section>
    <!--About Us-->

    <!-- OUR_Service -->
    <section id="service_section" class="padding ptb-xs-40">
        <div class="container-fluid">
            <div class="row text-center mb-30">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2><span>Our</span> Service</h2>
                        <p>We provide professional and quality services in the following sector</p>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-xs-30 margin_top">
                        <div class="maine_box">
                            <div class="items_picher">
                                <img src="{{ asset($service->image)}}">
                            </div>

                            <div class="box_detail">
                                <div class="use_detail">
                                    <div class="event_detail">
                                        <i class="flaticon-tool-1"></i>
                                    </div>
                                </div>
                                <div class="datail_show">
                                    <h3>{{$service->service}}</h3>
                                    <p>
                                        {!! str_limit($service->description, $limit = 150 ) !!}
                                    </p>
                                    <a href="#!">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- OUR_Service END-->

    <!--Quick Quote Section start-->
    <section id="feadback" class="padding ptb-xs-40 img_bg1">
        <div class="container">
            <div class="row text-center mb-30  light-color">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2><span>Quick</span> Quote</h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-md-12 col-lg-12">

                    <!-- Contact FORM -->
                    <form class="quote-form" id="contact" method="post" enctype="multipart/form-data"
                          action="{{ route('createmessage')}}">
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <x-alert/>
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    {{  csrf_field() }}
                                    <input class="input-sm form-full" id="name" type="text" name="name"
                                           placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="email"
                                           placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" type="text" name="subject"
                                           placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="col-md-10 col-lg-10">
                                <div class="form-field">
                                    <textarea class="form-full" id="message" rows="7" name="message"
                                              placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 d-flex align-items-center">
                                <input type="submit" class="btn btn-text sent-but mt-xs-30" name="button" value="Send">

                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->
                </div>

            </div>

        </div>
    </section>
    <!--Quick Quote Section end-->

    <!-- Team Section -->
    <section id="team" class="padding ptb-xs-40 text-center gray-bg">
        <div class="container">
            <div class="row text-center mb-30">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2><span>Our</span> Team</h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>

            <!--Team Carousel -->
            <div class="row mt-10">
                <div class="col-md-12">
                    <div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme">
                        @foreach($members as $member)
                            <div class="team_head">
                                <div class="team_view">
                                    <figure>
                                        <img src="{{ asset($member->memberImage)}}" alt="">
                                    </figure>

                                    <div class="team_hover text-center">
                                        <div>
                                            <p class="text-white">
                                                {{ $member->memberDescription}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team_discoption text-center mt-15">
                                    <span class="team_name">{{ $member->memberName }}</span>
                                    <span class="postion">{{ $member->memberPost }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--End Team Carousel -->
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Related Project-->
    <div class="padding text-center">
        <div class="container my-4">

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="heading-box pb-30 ">
                    <h2><span>Our</span> Projects</h2>
                    <span class="b-line l-center"></span>
                </div>

                <!--Slides-->
                <div class="carousel-inner">
                    <!--First slide-->
                    <div class="slider projects">
                        @foreach($projects as $project)

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top img-fluid"
                                         src="{{ asset($project->imgmain)}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $project->projectName }}</h4>
                                        <p class="card-text">{{ $project->subName }}</p>
                                        <p>
                                        </p>
                                        <a href="{{ route('projectdetail',$project->id)}}"
                                           class="btn-text mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter Section -->
    <div class="fact-counter-wrapper padding ptb-xs-40">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-sm-30 mb-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-ios-list"></i>
                        </div>
                        <span class="counter" data-count="250"></span>
                        <p>
                            Total Projects
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30 mb-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-happy"></i>
                        </div>
                        <span class="counter" data-count="100"></span>
                        <p>
                            Happy Clients
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-person-stalker"></i>
                        </div>
                        <span class="counter" data-count="60"></span>
                        <p>
                            Active Member
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-trophy"></i>
                        </div>
                        <span class="counter" data-count="25"></span>
                        <p>
                            Won Award
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End-->

    <!--Testimonial Section Start-->
    <section class="testimonial_wrapper__block padding ptb-xs-40">
        <div class="container">
            <div class="row text-center mb-30">
                <div class="col-sm-12">
                    <div class="sec_hedding">
                        <h2><span>We</span>'ve heard things</h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial_carosule-wrap">
                        @foreach($advisors as $advisor)
                            <div class="single_carousel pt-40">
                                <p>
                                    {{$advisor->content}}
                                </p>
                                <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="{{ asset($advisor->image)}}" alt="">
                                        <p>
                                            {{$advisor->name}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Section End-->

    <!-- Related Project-->
    <div class="padding text-center">
        <div class="container my-4">

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="heading-box pb-30 ">
                    <h2><span>Our</span> Projects</h2>
                    <span class="b-line l-center"></span>
                </div>

                <!--Slides-->
                <div class="carousel-inner">
                    <!--First slide-->
                    <div class="slider autoplay">
                        @foreach($projects as $project)

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top img-fluid"
                                         src="{{ asset($project->imgmain)}}"
                                         alt="Card image cap">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

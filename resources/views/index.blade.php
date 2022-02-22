@extends('layouts.main')
@section('content')
    <style>
        .counter::after {
            content: "+";
        }
    </style>
    <section id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item active fade">

                <img class="d-block w-100" src="{{ asset('public/frontend/image/slider/a.jpg')}}" alt="First slide">
                <div class="discription">
                    <h1 class="fade-from-left1"> {{ $slider->title }} </h1>
                    <div class="fade-from-left2">
                        <p>{{ $slider->subtitle1 }}</p>
                        <span>{{ $slider->subtitle2 }}</span></br>
                    </div>
                    <a href="{{ url('/about') }}" class="btn fade-from-left3">Learn
                        More</a>
                </div>
            </div>
            @endforeach


        </div> <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <section id="services" class="default-padding">
        <div class="container">
            <div class="title-description-wrapper text-center mb-5">
                <div class="title font-weight-bold mb-3 text-uppercase">
                    <h1>Technology We're Expertise In</h1>
                </div>
                <div class="discription w-75 m-auto"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta
                    accusantium incidunt earum deserunt, tempore eos repudiandae consectetur ad expedita.
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

    <section id="our-team-wrapper" class="default-padding">
        <div class="container">
            <div class="title-description-wrapper text-center mb-3">
                <div class="title font-weight-bold mb-3 text-uppercase">
                    <h1 class="text-white">Our Team</h1>
                </div>
                <div class="discription w-75 m-auto text-white"> Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Soluta
                    accusantium incidunt earum deserunt, tempore eos repudiandae consectetur ad expedita.
                </div>
            </div>
            <div class="slick-slider-category">

                @foreach($members as $member)
                <div class="slick-item position-relative py-4 mx-2">
                    <div class="team-block">
                        <div class="team-img">
                            <img src="{{ asset($member->memberImage)}}" alt="" class="img-fluid">
                        </div>
                        <div class="team-content text-center">
                            <div class="name-designation mb-2">
                                <h3 class="m-0"><a href="#">{{ $member->memberName }}</a></h3>
                                <span>{{ $member->memberPost }}</span>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>

    <section id="who-are-we" class="default-padding bg-white">
        <div class="container">
            <div class="title-description-wrapper mb-5">
                <div class="title text-center mb-3">
                    <h1>Who Are We ?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="image-head-why-us mb-xl-0 mb-3">
                        <img src="{{ asset($settings->company_image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 justify-content-start flex-column align-items-center m-auto">
                    <div class="company-description mt-3 mb-4">
                        <p>{!! str_limit($settings->about, $limit = 500 ) !!}
                        </p>
                        <a href="{{url('/about')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project-statistics" class="">
        <div class="content default-padding">
            <div class="container">
                <div class="title-description-wrapper text-center mb-5">
                    <div class="title font-weight-bold mb-3 text-uppercase">
                        <h1 class="text-white">Project Statistics</h1>
                    </div>

                </div>

                <div class=" row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
                        <div class="service-block-overlay m-auto text-center">
                            <h2 class="">{{$settings->count1}}</h2>
                            <label for="block">{{$settings->countname1}}</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
                        <div class="service-block-overlay m-auto text-center">
                            <h2 class="">{{$settings->count2}}</h2>
                            <label for="block">{{$settings->countname2}}</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
                        <div class="service-block-overlay m-auto text-center">
                            <h2 class="">{{$settings->count3}}</h2>
                            <label for="block">{{$settings->countname3}}</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
                        <div class="service-block-overlay m-auto text-center">
                            <h2 class="">{{$settings->count4}}</h2>
                            <label for="block">{{$settings->countname4}}</label>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <section id="projects" class="default-padding bg-white">
        <div class="container">
            <div class="highlighted-services">
                <div class="title-description-wrapper mb-5">
                    <div class="title text-center mb-3">
                        <h1>
                            Successful Projects
                        </h1>
                    </div>
                    <div class="discription text-center w-75 m-auto"> Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Soluta accusantium incidunt earum deserunt, tempore eos repudiandae
                        consectetur ad expedita. </div>
                </div>
                <div class="row justify-content-center  ">
                    @foreach($projects as $project)

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
                                <a href="{{ route('projectdetail',$project->id)}}" class="btn mt-2">Explore More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="join-us" class=" default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12 circle d-flex justify-content-center flex-column flex-wrap">
                    <div class="content-title mb-1">
                        Join<h4 class="text-capitalize">Qa Analyst Classes</h4>
                    </div>
                    <ul class="content-wrap m-0 p-0">
                        <li>Training Duration: 4 Weeks</li>
                        <li>Training Start Date: 24th Jan 2022</li>
                        <li>Time: 8:30 AM to 9:30 AM CST</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="image">
                        <img src="{{ asset('public/frontend/image/body/services/6.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="qa" class="default-padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 col-md-6 col-12  circle d-flex justify-content-center flex-column flex-wrap">
                    <div class="content-title mb-1">
                        Quality Assurance (QA) Analyst</h4>
                    </div>
                    <ul class="content-wrap m-0 p-0">
                        <li class="font-weight-light">For beginners or those interested in pursuing a career o
                            software testing, we offer
                            a comprehensive end-to-end QA Analyst training. After completion of training, the areas
                            / technologies you will be Expert in:<br>
                            <div class="row mb-2">
                                <div class="col-6 font-weight-bold">-Selenium</div>
                                <div class="col-6 font-weight-bold">-Junit</div>
                                <div class="col-6 font-weight-bold">-Jira</div>
                                <div class="col-6 font-weight-bold">-Confulence</div>
                            </div>
                        </li>
                        <li class="text-success">One-to-One Rapid Marketing</li>
                        <li class="text-success">100% Job Placement</li>
                        <li>Salary & Benefits: $32/hr</li>
                        <li class="mt-3">
                            <div class="content-title">
                                Contact Us Now
                            </div>
                            <div class="number">{{$settings->phone_number}}</div>
                            <div class="email">{{$settings->email}}</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 col-12 ">
                    <div class="image">
                        <img src="{{ asset('public/frontend/image/body/services/j.png')}}" class="img-fluid" alt="">
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section id="testimonial" class=" testimonial default-padding position-relative">
        <div class="container">
            <div class="title-description-wrapper mb-2">
                <div class="title text-center text-white">
                    <h1>What Our Clients Have To Say ?</h1>
                </div>
                <!-- <div class="discription text-center w-75 m-auto"> Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Soluta accusantium incidunt earum deserunt, tempore eos repudiandae consectetur ad expedita.
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-8 col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators d-none">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">

                            <div class="item carousel-item active">
                                <div class="img-box"><img src="{{ asset('public/frontend/image/body/testimonial/1.jpg')}}" alt=""></div>
                                <p class="testimonial">“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil
                                    assumenda aliquid minus iste unde numquam perferendis odio soluta tempore,
                                    reprehenderit rem alias ipsum aspernatur quam sed accusamus, adipisci officia
                                    id! "
                                </p>
                                <p class="overview"><b>Paula Wilson</b>, Client</p>
                            </div>


                            <div class="item carousel-item">
                                <div class="img-box"><img src="{{ asset('public/frontend/image/body/testimonial/5.jpg')}}" alt=""></div>
                                <p class="testimonial">“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil
                                    assumenda aliquid minus iste unde numquam perferendis odio soluta tempore,
                                    reprehenderit rem alias ipsum aspernatur quam sed accusamus, adipisci officia
                                    id! "
                                </p>
                                <p class="overview"><b>Antonio Moreno</b>, Client</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="{{ asset('public/frontend/image/body/testimonial/6.jpg')}}" alt=""></div>
                                <p class="testimonial">“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil
                                    assumenda aliquid minus iste unde numquam perferendis odio soluta tempore,
                                    reprehenderit rem alias ipsum aspernatur quam sed accusamus, adipisci officia
                                    id! "
                                </p>
                                <p class="overview"><b>Michael Holz</b>, Client</p>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="default-padding position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="title-description-wrapper mx-auto mb-5">
                    <div class="title text-center mb-3">
                        <h1> Why Choose Us ?</h1>
                    </div>
                    <div class="discription text-center w-75 m-auto"> Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Soluta accusantium incidunt earum deserunt, tempore eos repudiandae
                        consectetur ad expedita. </div>
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
    <section id="contact-us" class="default-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 title-description-wrapper mx-auto mb-5">
                    <div class="title text-center mb-3">
                        <h1> Contact Us</h1>
                    </div>

                </div>
                <div class="col-lg-6 col-12 d-flex flex-column justify-content-center">
                    <div class="discription mb-3">An IT oriented enterprises which focuses on <span
                            class="font-weight-bold">
                            IT
                            services and consulting.
                        </span></div>
                    <ul class="content-wrap m-0 p-0">
                        <li class="mb-1"> <span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            {{$settings->company_location}}</li>
                        <li class="mb-1"> <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>{{$settings->phone_number}}
                        </li>
                        <li class="mb-1"> <span class="mr-2"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            {{$settings->email}}
                        </li>
                        {{-- <li class="mb-1"> <span class="mr-2"><i class="fa fa-globe" aria-hidden="true"></i></span>
                            {{$settings->youtube}}
                        </li> --}}
                    </ul>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image text-center">
                        <img src="{{ asset('public/frontend/image/body/services/1.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

@extends('layouts.main')
@section('content')

    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="About"><span>About</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>About</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Intro Section End-->

    <!-- About Section -->
    <div id="about-section" class="padding pt-xs-40">
        <div class="container">
            

            <div class="row">

                <div class="col-md-6 col-lg-8">


                    <div class="block-title v-line">
                        <h2><span>Our</span> MISSION</h2>
                        <p class="italic">
                            A MISSION TO BUILD THE NATION
                        </p>
                    </div>
                    <div class="text-content">
                        <p>
                            {{$settings->company_mission}}
                        </p>
                    </div>

                    <hr class="divider">

                    <div class="block-title v-line">
                        <h2><span>About</span> US</h2>
                        <p class="italic">
                            {{$settings->company_name}}
                        </p>
                    </div>
                    <div class="text-content">
                        <p>
                            {!! $settings->about !!}
                        </p>
                    </div>


                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="dark-bg our-vision light-color padding-40">
                        <div class="block-title">
                            <h2><span>Our</span> VISION</h2>
                            <p class="italic">
                                COMPANY VISION & MISSION
                            </p>
                        </div>
                        <p>
                            {{$settings->company_vision}}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End-->

    <!-- Mission Section -->
    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Our </span> Company</h2>
                        <p class="italic">
                            {{$settings->company_name}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($boardOfDirectors as $boardOfDirector)
                    <div class="col-md-12 col-lg-12">
                        <div class="about-block clearfix">
                            <div class="fl width-25per box-shadow mt-15 mb-xs-15">
                                <img class="img-responsive" src="{{ URL::to($boardOfDirector->image)}}"
                                     alt="Photo">
                            </div>
                            <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                                <div class="box-title">
                                    <h3>{{$boardOfDirector->name}}</h3>
                                    <h5>{{$boardOfDirector->designation}}</h5>
                                </div>
                                <div class="text-content">
                                    <p>
                                        {{$boardOfDirector->about}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider">
                @endforeach
            </div>
        </div>
    </div>


@endsection

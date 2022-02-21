@extends('layouts.main')
@section('content')

    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="History"><span>History</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>History</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Intro Section End-->

    <!-- CONTENT -->

    <section class="padding pt-xs-40">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-lg-3 mt-xs-40 pb-xs-40">
                    <div class="tab-title">
                        <ul class="clearfix">
                            <li>
                                <a href="{{ url('/about') }}">Company</a>
                            </li>
                            <li>
                                <a href="{{ url('/history') }}" class="active">History</a>

                            </li>
                            <li>
                                <a href="{{ url('/career') }}">Careers</a>

                            </li>
                            <li>
                                <a href="{{ url('/partnership') }}">Partnerships</a>

                            </li>
                            <li>
                                <a href="{{ url('/leadership') }}">Leadership</a>

                            </li>
                        </ul>
                    </div>
                    <div class="company-brochure mt-30">
                        <h4>Downlaod Brochure</h4>
                        <a href="{{ asset('/public/docs/DCDPL_Brochure.pdf')}}"><img
                                src="{{ asset('/public/assets/images/flyer.jpg')}}" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9">
                    <div class="tab-content">


                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <img src="{{ asset('/public/assets/images/people.jpg')}}" alt="">
                            </div>


                            <div class="col-md-12 col-lg-12">
                                <h2 class="pt-30">Our History</h2>
                                <p>Ohana technologies & Development Pvt. Ltd. (hereinafter referred to as “DCDPL”)
                                    is a company established by young enthusiasts which aims to provide various
                                    construction services of civil works of hydropower, buildings, roads, bridges,
                                    irrigation canal etc. It is a company registered under laws of Nepal on 4th
                                    Bhadra,2074 and its registered address is at Buddhana.
                                </p>

                            </div>

                        </div>

                    </div>
                    <div class="pt-90 pt-xs-60">
                        <div class="history-timeline__block">
                            <ul class="history-timeline">
                                @foreach($histories as $key=>$history)
                                    @if($key===0)
                                    <li>
                                        <div class="icon-dot"></div>
                                        <p class="date text-block text-bold m-b-30">{{$history->year}}</p>
                                        <div class="abt-block__slider">
                                            <div class="abt-block__wrap">
                                                <div class="abt-block__left abt-block__bg">
                                                    <h2>{{$history->title}}</h2>
                                                    <p>{{$history->content}}</p>
                                                </div>
                                                <div class="abt-block__right abt-block__img1">
                                                </div>
                                            </div><!--item 1-->
                                            <div class="abt-block__wrap">
                                                <div class="abt-block__left abt-block__bg">
                                                    <h2>{{$history->subtitle}}</h2>
                                                    <p>{{$history->subcontent}}</p>
                                                </div>
                                                <div class="abt-block__right abt-block__img1">
                                                </div>
                                            </div><!--item 2-->
                                        </div>
                                    </li>
                                    @else
                                    <li>
                                        <div class="icon-dot"></div>
                                        <p class="date text-block text-bold m-b-30">{{$history->year}}</p>
                                        <div class="mv-block">
                                            <div class="mv-block__mission mv-block__mission-bg">
                                                <h3>{{$history->title}}</h3>
                                                <p>{{$history->content}}
                                                </p>
                                            </div>
                                            <div class="mv-block__vision mv-block__vision-bg">
                                                <h3>{{$history->subtitle}}</h3>
                                                <p>{{$history->subcontent}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="abt-block">

                        </div>
                    </div>
                    <!-- About Section End-->
                </div>
            </div>
        </div>
    </section>
    </section>

@endsection

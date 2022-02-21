@extends('layouts.main')
@section('content')

    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="Leadership"><span>Leadership</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>Leadership</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section End-->

    <!-- CONTENT -->
    <section class="padding pt-xs-40">2
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 mt-xs-40 pb-xs-40">
                    <div class="tab-title">
                        <ul class="clearfix">
                            <li>
                                <a href="{{ url('/about') }}">Company</a>
                            </li>
                            <li>
                                <a href="{{ url('/history') }}">History</a>
                            </li>
                            <li>
                                <a href="{{ url('/career') }}">Careers</a>
                            </li>
                            <li>
                                <a href="{{ url('/partnership') }}">Partnerships</a>
                            </li>
                            <li>
                                <a href="{{ url('/leadership') }}" class="active">Leadership</a>
                            </li>
                        </ul>
                    </div>
                    <div class="company-brochure mt-30">
                        <h4>Downlaod Brochure</h4>
                        <a href="{{ asset('/public/docs/DCDPL_Brochure.pdf')}}"><img
                                src="{{ asset('/public/assets/images/flyer.jpg')}}" alt=""></a>
                    </div>
                </div>

                <div class="col-md-9 col-lg-9">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <img src="{{ asset('/public/assets/images/people.jpg')}}" alt="">
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <h2 class="pt-30">Our Leadership</h2>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- About Section -->
                    <div class="pt-60 pt-xs-60 ">
                        @foreach($bods as $bod)
                            <div class="row mb-60 bottom__brdr pb-40">
                                <div class="col-md-3 col-lg-3  t_cell text-center">
                                    <img src="{{ URL::to($bod->image)}}" alt="">
                                </div>
                                <div class="col-md-9 col-lg-9 no-padding t_cell">
                                    <div class="partner__content">
                                        <h3>{{$bod->name}}</h3>
                                        <span class="career_sub-title">{{$bod->designation}}</span>
                                        <p>{{str_limit($bod->about,450)}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- About Section End-->
                </div>
            </div>
        </div>
    </section>
@endsection

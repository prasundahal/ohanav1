<!--== Start Header Area Wrapper ==-->
<header class="header-area">
    <!-- Start Pre Header Area -->
    <div class="prehedaer-area-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-6 offset-xl-2 d-none d-sm-block">
                    <div class="pre-header-left d-sm-flex justify-content-center justify-content-lg-start">
                        <div class="pre-header-item">
                            <a href="tel:{{$settings->phone_number}}"><i class="fa fa-phone"></i> {{$settings->phone_number}}</a>
                        </div>

                        {{-- <div class="pre-header-item">
                            <span><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 18:00</span>
                        </div> --}}

                        <div class="pre-header-item">
                            <a href="mailto:{{$settings->email}}"><i class="fa fa-envelope-o"></i> {{$settings->email}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div class="pre-header-right text-center text-md-right">
                        <div class="social-icons">
                            <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$settings->youtube}}"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pre Header Area -->

    <!-- Start Header Bottom Area  -->
    <div class="header-bottom header-shape sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-lg-2">
                    <!-- Start Logo Area -->
                    <div class="logo-area">
                        <a href="{{route('index')}}"><img src="{{asset('public/frontend/assets/img/shareware-logo.png')}}" alt="Logo" style="height: 40px"/></a>
                    </div>
                    <!-- End Logo Area -->
                </div>

                <div class="col-lg-10 d-none d-lg-block">
                    <!-- Start Navigation Area -->
                    <nav class="navigation-area" style="float: right;">
                        <ul class="main-menu nav">
                            <li class="{{ Route::is('index') ? 'active' : '' }}"><a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="{{ Route::is('service') ? 'active' : '' }}"><a href="{{route('service')}}">Our Services</a>
                                
                            </li>
                            <li class="{{ Route::is('project') ? 'active' : '' }}"><a href="{{route('project')}}">Project</a>
                                
                            </li>
                            <li class="{{ Route::is('team') ? 'active' : '' }}"><a href="{{route('team')}}">Team</a>
                               
                            </li>
                            <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Navigation Area -->
                </div>

                {{-- <div class="col-7 col-lg-2">
                    <!-- Start Header Action Area -->
                    <div class="header-action-area">
                        <ul class="action-buttons nav justify-content-end">
                            <li>
                                <a href="#" class="btn-search">
                                    <i class="pe-7s-search"></i>
                                    <i class="pe-7s-close"></i>
                                </a>
                                <div class="header-search-box">
                                    <form action="#">
                                        <div class="search-box-content">
                                            <input type="search" placeholder="type here and hit enter"/>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li><a href="cart.html" class="btn-cart"><i class="pe-7s-cart"></i></a></li>
                            <li class="d-lg-none">
                                <button class="btn-canvas-open"><i class="pe-7s-menu"></i></button>
                            </li>
                        </ul>
                    </div>
                    <!-- End Header Action Area -->
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Header Bottom Area  -->
</header>
<!--== End Header Area Wrapper ==-->


<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
            <div class="off-canvas-item">
                <!-- Start Mobile Menu Wrapper -->
                <div class="res-mobile-menu">
                    <!-- Note Content Auto Generate By Jquery From Main Menu -->
                </div>
                <!-- End Mobile Menu Wrapper -->
            </div>

            <div class="off-canvas-item">
                <div class="off-canvas-footer text-center">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>

                    <div class="copyright-text">
                        <p>&copy; Duncan 2019. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Off Canvas Content Wrapper -->

        <button class="btn-close"><i class="fa fa-close"></i></button>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->
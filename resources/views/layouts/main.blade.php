@php
    $settings = DB::table('settings')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta property="og:url" content="{{URL::to('/')}}"/>
    <meta property="og:type" content="construction"/>
    <meta property="og:title" content="{{$settings->meta_name}}"/>
    <meta property="og:description"
          content="{{$settings->meta_description}}"/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>


    <title>{{$settings->company_name}}</title>
    <!--== Favicon ==-->
    <link href="{{ asset('public/frontend/image/logo/fav.png')}}" rel="icon">

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"/>

    <!--== All Vendor CSS ==-->
    <link href="{{asset('public/frontend/assets/css/slicknav.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/slick.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/settings.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/pe-7-stroke-icon.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/nice-select.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/magnific-popup.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/leaflet.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/jquery-ui.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/helper.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="{{asset('public/frontend/assets/css/style.css')}}" rel="stylesheet"/>




</head>
<body>


@include('layouts.navbar')

@yield('content')


<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area-wrapper">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row mtm-30">
                <div class="col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <a href="{{route('index')}}">
                            <img class="mb-24" src="{{asset('public/frontend/assets/img/shareware-logo.png')}}" alt="Logo" style="height: 60px"/><span class="navbar-brand ml-1 text-light">Shareware Nepal</span></a>
                            <p>{{$settings->company_vision}}</p>
                            <form enctype="multipart/form-data" method="post" action="{{ url('suscribe')}}">
                                {{ csrf_field() }}
                            <div class="d-flex mt-4">
                                <input type="email" name ="email" class="bg-transparent"
                                    placeholder="Email Address " style="color:white; height: 38px;
                                    border-color: chocolate;
                                    width: 70%;">   
                            </div>
                            <button type="submit" class="text-center" style="border-radius: 5px;
                            color: antiquewhite;
                            background-color: chocolate;
                            padding: 5px 15px;
                            margin-top: 10px;">Subscribe</button>
                            </form>
                            
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <div class="widget-title">
                                <h3>Information</h3>
                            </div>

                            <div class="widget-body">
                                <ul class="list list-6">
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{route('project')}}">Our Projects</a></li>
                                    <li><a href="{{route('service')}}">Our Services</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('team')}}">Our Team</a></li>
                                    <li><a href="{{route('termsandcondition')}}">Terms of Service</a></li>
                                    <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <div class="widget-title">
                                <h3>Our Office</h3>
                            </div>

                            <div class="widget-body">
                                <div class="office-info">
                                    <p><i class="fa fa-map-marker"></i>{{$settings->company_location}}</p>
                                    <p><a href="tel:{{$settings->phone_number}}" class="text-light"><i class="fa fa-phone"></i> {{$settings->phone_number}}</a></p>
                                    <p><a href="mailto:{{$settings->email}}" class="text-light"><i class="fa fa-envelope-o"></i> {{$settings->email}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="social-icons social-icons--two">
                            <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="text-center">
                            <div class="copyright-text">
                                <p>&copy; Copyright
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    <a href="https://sharewarenepal.com/" target="_blank">{{$settings->company_name}}</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Area Wrapper ==-->



<a href="#"style=" position: fixed;
top: 89%;
left: 95%;"><i class="fa fa-angle-double-up fa-2x"  aria-hidden="true"></i></a>


<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="{{asset('public/frontend/assets/js/vendor/modernizr.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/vendor/jquery-migrate.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/headroom.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/hoverdir.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jquery.counterup.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jQuery.headroom.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/leaflet.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/slick.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/tippy.all.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/plugins/waypoints.min.js')}}"></script>
<!--=== Active Js ===-->
<script src="{{asset('public/frontend/assets/js/active.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{asset('public/frontend/assets/js/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/revslider/extensions/revolution.extension.video.min.js')}}"></script>

<!--=== REVOLUTION JS ===-->
<script src="{{asset('public/frontend/assets/js/revslider/rev-active.js')}}"></script>


</body>
</html>

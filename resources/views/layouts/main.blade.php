@php
    $settings = DB::table('settings')->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
    <meta property="og:url" content="{{URL::to('/')}}"/>
    <meta property="og:type" content="construction"/>
    <meta property="og:title" content="{{$settings->company_name}}"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/frontend/image/logo/logo.png')}}">


    <title>{{$settings->company_name}}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <link rel="stylesheet" href="{{ asset('public/frontend/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/bootstrap-4.5.3-dist/css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Slick Css -->
    <link rel="stylesheet" href="{{ asset('public/frontend/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/slick/slick-theme.css') }}">
    <!-- Slick Css Ends-->
    <!-- font awesome -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        .toast-top-container {
            position: absolute;
            top: 65px;
            width: 280px;
            right: 40px;
            height: auto;
        }
    </style>
</head>
<body>


    @include('layouts.navbar')
    @yield('content')





    <footer id="footer" class="footer-bg-color footer-home text-white pt-5 pb-3">
        <div class=" container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="footer-logo-box text_white">
                        <div class="footer-logo mb-3">
                            <a class="footer-logo  our-services-text font-weight-bold text-uppercase  font-weight-bolder p-0"
                                href="index.html">
                                <img src="{{ asset('/public/frontend/image/logo/logo.png')}}" class="img-fluid " alt=""></a>
                        </div>
                        <p> {!! str_limit($settings->client, $limit = 30 ) !!}</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-12 mt-xl-0 mt-md-0 mt-5">
                    <div class="footer-title text_white footer_after">
                        <h4 class="mb-3 mb-md-4 our-services-text">Quick Links </h4>
                        <ul class="text-white p-0">
                            <li class="mb-2"><a href="/" class="our-services-text ">Home</a></li>
                            <li class="mb-2"><a href="{{ url('/recent-activities') }}" class="our-services-text ">Recent Activities</a></li>
                            <li class="mb-2"><a href="{{ url('/about') }}" class="our-services-text ">About Us</a></li>
                            {{-- <li class="mb-2">
                                <a href="" class="our-services-text ">FAQ</a>
                            </li> --}}
                            <li class="mb-2"><a href="{{ url('/contact') }}" class="our-services-text ">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-xl-0 mt-md-5 mt-5">
                    <div class="footer-title text_white footer_after footer-title2">
                        <h4 class="our-services-text mb-3 mb-md-4">EXPLORE </h4>
                        <p class="our-services-text mb-3"> <span class="mr-3"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i></span>{{$settings->company_location}}
                        </p>
                        <a href="#" class="our-services-text mb-3 d-block">
                            <span class="mr-2"><i class="fa fa-phone"
                                    aria-hidden="true"></i></span> {{$settings->phone_number}},
                        </a>
                        <a href="mailto:{{$settings->email}}" class="our-services-text mb-3 d-block">
                            <span class="mr-2"><i class="fa fa-envelope"
                                    aria-hidden="true"></i></span> {{$settings->email}}
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-xl-0 mt-md-5 mt-5">
                    <div class="footer-title text_white footer_after footer-title2">
                        <h4 class="our-services-text mb-3 mb-md-4">Suscribe Us </h4>
                        <form enctype="multipart/form-data" method="post" action="{{ url('suscribe')}}">
                            {{ csrf_field() }}
                        <div class="button-footer d-flex mt-4">
                            <input type="email" name ="email" class="form-control bg-transparent border-0"
                                placeholder="Email Address " style="color:white">
                                <button type="submit"
                                class="footer-btn footer-bg-btn our-services-text text-center font-weight-normal">SIGN
                                UP</button>
                        </div>
                        </form>
                        <div class="social-icon-footer mr-xl-5 mr-md-2 mr-0 mt-3 d-md-block d-flex">
                            <ul class="d-flex justify-content-start p-0">
                                <li class="logo-bg "><a href="{{$settings->facebook}}" class="our-services-text"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="feature_in_bg "><a href="{{$settings->instagram}}"
                                        class="our-services-text"=""=""><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="logo-bg "><a href="{{$settings->youtube}}" class="our-services-text"=""=""><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="logo-bg "><a href="{{$settings->linkedin}}"
                                        class="our-services-text"=""=""><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 justify-content-center align-items-center">

                    <h6 class="testimonial-title mx-auto  my-2 text-center">Powered by {{$settings->company_name}} | 2022  </h6>
                    <a href="https://www.sharewarenepal.com/"><p class="mb-0 our-services-text text-center"> Copyright Shareware Nepal All Right Reserved 2022.
                    </p></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $('.carousel').carousel({
            interval: 5500
        })
    </script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/frontend/jquery/jquery3.5.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-container",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif
    </script>
    <script src="{{ asset('public/frontend/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
    <!-- Slick Js -->
    <script src="{{ asset('public/frontend/slick/slick.min.js') }}"></script>
    <!-- Slick Js Ends-->
    <script src="{{ asset('public/frontend/js/scripts/main.js') }}"></script>
</body>

</html>


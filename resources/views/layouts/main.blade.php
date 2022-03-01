@php
    $settings = DB::table('settings')->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
    <meta property="og:url" content="{{URL::to('/')}}"/>
    <meta property="og:type" content="construction"/>
    <meta property="og:title" content="{{$settings->company_name}}"/>
    <meta property="og:description"
          content="Ohana Technologies and Development is a software company. The company has the best quality of works. Currently the company employs more than 50 In house staffs. The company also works in "/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>


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



    @include('frontend.inc.currency_modal')

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
                            <li class="mb-2"><a href="{{ url('/service') }}" class="our-services-text ">Services</a></li>
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
                                placeholder="Email Address ">
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
                    <p class="mb-0 our-services-text text-center"> Copyright Shareware Nepal All Right Reserved 2022.
                    </p>
                    <h6 class="testimonial-title mx-auto  my-2 text-center">Powered by {{$settings->company_name}} |</h6>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{ asset('public/frontend/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
    <!-- Slick Js -->
    <script src="{{ asset('public/frontend/slick/slick.min.js') }}"></script>
    <!-- Slick Js Ends-->
    <script src="{{ asset('public/frontend/js/scripts/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        function ConvertCurrency(first_rate, second_rate, input_value){
            var amount_to_usd = parseFloat(first_rate * input_value); // converted to usd first
            var convertedAmount = parseFloat(amount_to_usd / second_rate);
            return convertedAmount.toFixed(3);
        }





        $("#first_select").on('change', function(){
            // console.log($(this).find('option:selected').data('value'));
            var convertedData = '';
            var $this_rate = $(this).val(),
                $my_input_value = $("#first_value").val(),
                // $second_input_value = $("#second_value").val(),
                $second_rate = $("#second_select").val(); 
            if($my_input_value == ''){
                $("#second_value").val('');
            }  else {
                var convertedData = ConvertCurrency($this_rate, $second_rate, $my_input_value);
            }         
            
            $("#second_value").val(convertedData);
        });


        $("#second_select").on('change', function(){
            var $this_rate = $(this).val(),
                $my_input_value = $("#second_value").val(),
                $second_rate = $("#first_select").val();
            if($my_input_value == ''){
                $("#first_value").val('');
            } else {
                var convertedData = ConvertCurrency($this_rate, $second_rate, $my_input_value);
            }
            
            $("#first_value").val(convertedData);
        });


        $("#first_value").on('keyup', function(){
            var convertedData = '';
            var $this_value = $(this).val(),
                $my_rate = $("#first_select").val(),
                $second_rate = $("#second_select").val();
            if($this_value == ''){
                $("#second_value").val('');
            } else {
                var convertedData = ConvertCurrency($my_rate, $second_rate, $this_value);
            }
            
            $("#second_value").val(convertedData);

        });

        $("#second_value").on('keyup', function(){
            var convertedData = '';
            var $this_value = $(this).val(),
                $my_rate = $("#second_select").val(),
                $second_rate = $("#first_select").val();
            if($this_value == ''){
                $("#first_value").val('');
            } else {
                convertedData = ConvertCurrency($my_rate, $second_rate, $this_value);
            }
            $("#first_value").val(convertedData);
        });







        // $(document).on('change', '#first_select', function(){

        //     var $this_value = $(this).val();
        //     var first_value = $("#first_value").val();
        //     if(first_value == ''){
        //         first_value = 1;
        //     }
        //     console.log(first_value);
        //     console.log(first_value == 1);
        //     if(first_value != '' && first_value > 1){
        //         var amount = parseFloat($this_value * first_value);
        //     } else if(first_value == 1) {
        //         var amount = $this_value;
        //     }
        //     console.log(amount);

        //     $("#second_value").val(amount);
        //     $("#first_value").val('1');
        // });

        // $(document).on('keyup', "#first_value", function(){
        //     var currency = $("#first_select").val();
        //     var amount = parseFloat($(this).val() * currency);
        //     $("#second_value").val(amount);
        // });

        // $("#second_value").on('keyup', function(){
        //     var $this_value = $(this).val();
        //     var first_selected_currency_rate = $("#first_select :selected").val();
        //     var amount = $this_value / first_selected_currency_rate;
        //     console.log(amount);
        // });
    </script>

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
</body>

</html>


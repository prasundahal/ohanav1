@php
    $settings = DB::table('settings')->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
    <title>{{$settings->company_name}}</title>
    <meta property="og:url" content="{{URL::to('/')}}"/>
    <meta property="og:type" content="construction"/>
    <meta property="og:title" content="{{$settings->company_name}}"/>
    <meta property="og:description"
          content="Ohana Technologies and Development is a software company. The company has the best quality of works. Currently the company employs more than 50 In house staffs. The company also works in "/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>



    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/boxicons/css/boxicons.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/remixicon/remixicon.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" type="text/css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/assets/js/main.js') }}"></script>


</head>



<body>




    @yield('content')



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{$settings->company_name}}</h3>
              <p class="pb-3"><em>{!! str_limit($settings->client, $limit = 30 ) !!}</em></p>
              <p>
                {{$settings->company_name}}<br><br>
                <strong>Phone:</strong> {{$settings->phone_number}}<br>
                <strong>Email:</strong> {{$settings->email}}<br>
              </p>
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="https://www.facebook.com/profile.php?id=100075694552743" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/sharewarenepal/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://github.com/sharewarenepal" class="google-plus"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/shareware-nepal-767293228/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/service') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#project">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/contact') }}">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

         <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Suscribe for offer </p>


            <form enctype="multipart/form-data" method="post" action="{{ url('suscribe')}}">
                {{ csrf_field() }}
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$settings->company_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.prasundahal.com.np/">{{$settings->company_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->





</body>

</html>


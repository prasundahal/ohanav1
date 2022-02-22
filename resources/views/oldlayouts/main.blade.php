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
    <meta property="og:title" content="{{$settings->company_name}}"/>
    <meta property="og:description"
          content="Ohana Technologies and Development is a construction company. The company has the best quality of construction works. Currently the company employs more than 100 In house staffs. The company also works in the EPC(Engineering, Procurement And Construction) model In hydropower projects."/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>


    <title>{{$settings->company_name}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/animate.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet">
    <link id="page_favicon" href="{{ asset('public/assets/favicon.ico') }}" rel="icon" type="image/x-icon">
    <!--Main Slider-->
    <link href="{{ asset('public/assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('public/assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">

    <link href="{{ asset('public/assets/css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/css/index.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/css/header.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/css/footer.css') }}" type="text/css" rel="stylesheet">


    <!-- custom css -->
    <link href="{{ asset('public/assets/css/cssstyle.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/ajax-loader.gif"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">


    <link href="{{ asset('public/assets/css/theme-color/default.css') }}" rel="stylesheet" type="text/css"
          id="theme-color"/>

    {{-- {{ TawkTo::widgetCode() }}

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script> --}}

</head>
<body>


@include('layouts.navbar')

@yield('content')


<!-- FOOTER -->
<footer class="footer pt-80 pt-xs-60">
    <div class="container">
        <!--Footer Info -->
        <div class="row footer-info mb-60">
            <div class="col-lg-4 col-md-6 col-xs-12 mb-sm-30">
                <h4 class="mb-30">Contact Us</h4>
                <address>
                    <i class="ion-ios-location fa-icons"></i> {{$settings->company_location}}
                </address>
                <ul class="link-small">
                    <li>
                        <a href="mailto:{{$settings->email}}"><i class="ion-ios-email fa-icons"></i>{{$settings->email}}
                        </a>
                    </li>
                    <li>
                        <a><i class="ion-ios-telephone fa-icons">
                            </i>{{$settings->phone_number}}</a>
                    </li>
                </ul>
                <div class="icons-hover-black">
                    <a target="_blank" href="{{$settings->facebook}}">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="{{$settings->twitter}}">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="{{$settings->instagram}}">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a target="_blank" href="{{$settings->youtube}}">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a target="_blank" href="{{$settings->linkedin}}">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mb-sm-30">
                <h4 class="mb-30" style="padding-left:7em">Links</h4>
                <div class="row">
                    <div class="col-6">
                        <ul class="link blog-link">
                            <li>
                                <a href="{{ url('/about') }}"><i class="fa fa-angle-double-right"></i> About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/career') }}"><i class="fa fa-angle-double-right"></i> Careers</a>
                            </li>
                            <li>
                                <a href="{{ url('/faq') }}"><i class="fa fa-angle-double-right"></i> FAQ</a>
                            </li>
                            <li>
                                <a href="{{ url('/faq') }}"><i class="fa fa-angle-double-right"></i> Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="link blog-link">
                            <li>
                                <a href="{{ url('/#service_section') }}"><i class="fa fa-angle-double-right"></i>
                                    Services</a>
                            </li>
                            <li>
                                <a href="{{ url('/partnership') }}"><i class="fa fa-angle-double-right"></i>
                                    Partnerships</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right"></i> Register</a>
                            </li>
                            <li>
                                <a href="{{ url('/termsandcondition') }}"><i class="fa fa-angle-double-right"></i> Terms
                                    & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-15">
                <div class="newsletter">
                    <h4 class="mb-30">Newsletter Signup</h4>
                    <p>
                        Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
                    </p>
                    <form>
                        <input type="email" class="newsletter-input input-md newsletter-input mb-0"
                               placeholder="Enter Your Email">
                        <button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
                            <i class="fa fa-angle-right mr-0"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Footer Info -->
    </div>
    <!-- Copyright Bar -->
    <div class="copyright">
        <div class="container">
            <p class="">
                <a>Copyright &copy 2021 {{$settings->company_name}} | sn</a>
            </p>
        </div>
    </div>
    <!-- End Copyright Bar -->
</footer>
<!-- END FOOTER -->


<button class="open-button" onclick="openForm()">Convert</button>
<div class="chat-popup" id="myForm">
    <button type="button" onclick="closeForm()" class="close">&times;</button>
    <br>
    <div class="converter-wrapper">
        <form name="property_form">
            <div class="convert-main">
                <select class="select-property" name="the_menu" size=1
                        onChange="UpdateUnitMenu(this, document.form_A.unit_menu); UpdateUnitMenu(this, document.form_B.unit_menu)">
                </select>
            </div>
        </form>
        <div class="converter-side-a">
            <form name="form_A" onSubmit="return false">
                <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0"
                       onKeyUp="CalculateUnit(document.form_A, document.form_B)">
                <span>
        <select class="select-a" name="unit_menu" onChange="CalculateUnit(document.form_B, document.form_A)">
        </select>
      </span>
            </form>
        </div> <!-- /converter-side-a -->

        {{--        <div class="converter-equals">--}}
        {{--        </div> <!-- /converter-side-a -->--}}

        <div class="converter-side-b">
            <form name="form_B" onSubmit="return false">
                <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0"
                       onkeyup="CalculateUnit(document.form_B, document.form_A)">
                <span>
        <select class="select-b" name="unit_menu" onChange="CalculateUnit(document.form_A, document.form_B)">
        </select>
      </span>
            </form>
        </div> <!-- /converter-side-b -->
    </div>
</div>


<script type="text/javascript" src="{{ asset('public/assets/js/convert.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
<script src="{{asset('public/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/wow.min.js') }}"></script>
<!-- masonry,isotope Effect Js -->
<script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
<!-- revolution Js -->
<script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('public/assets/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('public/assets/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('public/assets/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('public/assets/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/jquery.revolution.js') }}"></script>
<!-- Mail Function Js -->
<script src="{{ asset('public/assets/js/validation.js') }}" type="text/javascript"></script>
<!-- Compiled and minified JavaScript -->
<script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/custom.js') }}" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    AOS.init();

    if (window.innerWidth < 700) {
        $(document).ready(function () {
            $('.autoplay').slick({
                slidesToShow: 3,
                infinite: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: false,
                pauseOnHover:false,
            });
            $('.projects').slick({
                infinite: true,
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: false,
                pauseOnHover:false,
            });
        });
    } else {
        $(document).ready(function () {
            $('.autoplay').slick({
                slidesToShow: 4,
                infinite: true,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: false,
                pauseOnHover:false,
            });
            $('.projects').slick({
                infinite: true,
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: false,
                pauseOnHover:false,
            });
        });
    }

</script>
<script>
    var property = new Array();
    var unit = new Array();
    var factor = new Array();

    property[0] = "Acceleration";
    unit[0] = new Array("Meter/sq.sec (m/sec^2)", "Foot/sq.sec (ft/sec^2)", "G (g)", "Galileo (gal)", "Inch/sq.sec (in/sec^2)");
    factor[0] = new Array(1, .3048, 9.806650, .01, 2.54E-02);

    property[1] = "Area";
    unit[1] = new Array("Square meter (m^2)", "Acre (acre)", "Are", "Barn (barn)", "Hectare", "Rood", "Square centimeter", "Square kilometer", "Circular mil", "Square foot (ft^2)", "Square inch (in^2)", "Square mile (mi^2)", "Square yard (yd^2)");
    factor[1] = new Array(1, 4046.856, 100, 1E-28, 10000, 1011.71413184285, .0001, 1000000, 5.067075E-10, 9.290304E-02, 6.4516E-04, 2589988, .8361274);

    property[2] = "Torque";
    unit[2] = new Array("Newton-meter (N m)", "Dyne-centimeter(dy cm)", "Kgrf-meter (kgf m)", "lbf-inch (lbf in)", "lbf-foot (lbf ft)");
    factor[2] = new Array(1, .0000001, 9.806650, .1129848, 1.355818);

    property[3] = "Electricity";
    unit[3] = new Array("Coulomb (Cb)", "Abcoulomb", "Ampere hour (A hr)", "Faraday (F)", "Statcoulomb", "Millifaraday (mF)", "Microfaraday (mu-F)", "Picofaraday (pF)");
    factor[3] = new Array(1, 10, 3600, 96521.8999999997, .000000000333564, 96.5219, 9.65219E-02, 9.65219E-05);

    property[4] = "Energy";
    unit[4] = new Array("Joule (J)", "BTU (mean)", "BTU (thermochemical)", "Calorie (SI) (cal)", "Calorie (mean)(cal)", "Calorie (thermo)", "Electron volt (eV)", "Erg (erg)", "Foot-pound force", "Foot-poundal", "Horsepower-hour", "Kilocalorie (SI)(kcal)", "Kilocalorie (mean)(kcal)", "Kilowatt-hour (kW hr)", "Ton of TNT", "Volt-coulomb (V Cb)", "Watt-hour (W hr)", "Watt-second (W sec)");
    factor[4] = new Array(1, 1055.87, 1054.35, 4.1868, 4.19002, 4.184, 1.6021E-19, .0000001, 1.355818, 4.214011E-02, 2684077.3, 4186.8, 4190.02, 3600000, 4.2E9, 1, 3600, 1);

    property[5] = "Force";
    unit[5] = new Array("Newton (N)", "Dyne (dy)", "Kilogram force (kgf)", "Kilopond force (kpf)", "Kip (k)", "Ounce force (ozf)", "Pound force (lbf)", "Poundal");
    factor[5] = new Array(1, .00001, 9.806650, 9.806650, 4448.222, .2780139, .4535924, .138255);

    property[6] = "Force / Length";
    unit[6] = new Array("Newton/meter (N/m)", "Pound force/inch (lbf/in)", "Pound force/foot (lbf/ft)");
    factor[6] = new Array(1, 175.1268, 14.5939);

    property[7] = "Length";
    unit[7] = new Array("Meter (m)", "Angstrom (A')", "Astronomical unit (AU)", "Caliber (cal)", "Centimeter (cm)", "Kilometer (km)", "Ell", "Em", "Fathom", "Furlong", "Fermi (fm)", "Foot (ft)", "Inch (in)", "League (int'l)", "League (UK)", "Light year (LY)", "Micrometer (mu-m)", "Mil", "Millimeter (mm)", "Nanometer (nm)", "Mile (int'l nautical)", "Mile (UK nautical)", "Mile (US nautical)", "Mile (US statute)", "Parsec", "Pica (printer)", "Picometer (pm)", "Point (pt)", "Rod", "Yard (yd)");
    factor[7] = new Array(1, 1E-10, 1.49598E11, .000254, .01, 1000, 1.143, 4.2323E-03, 1.8288, 201.168, 1E-15, .3048, .0254, 5556, 5556, 9.46055E+15, .000001, .0000254, .001, 1E-9, 1852, 1853.184, 1852, 1609.344, 3.08374E+16, 4.217518E-03, 1E-12, .0003514598, 5.0292, .9144);

    property[8] = "Light";
    unit[8] = new Array("Lumen/sq.meter (Lu/m^2)", "Lumen/sq.centimeter", "Lumen/sq.foot", "Foot-candle (ft-cdl)", "Foot-lambert", "Candela/sq.meter", "Candela/sq.centimeter", "Lux (lux)", "Phot");
    factor[8] = new Array(1, 10000, 10.76391, 10.76391, 10.76391, 3.14159250538575, 31415.9250538576, 1, 10000);

    property[9] = "Mass";
    unit[9] = new Array("Kilogram (kg)", "Gram (g)", "Milligram (mg)", "Microgram (μg)", "Carat (metric)(ct)", "Hundredweight (long)", "Hundredweight (short)", "Pound mass (lbm)", "Pound mass (troy)", "Ounce mass (ozm)", "Ounce mass (troy)", "Slug", "Ton (assay)", "Ton (long)", "Ton (short)", "Ton (metric)", "Tonne");
    factor[9] = new Array(1, .001, 1e-6, .000000001, .0002, 50.80235, 45.35924, .4535924, .3732417, .02834952, .03110348, 14.5939, .02916667, 1016.047, 907.1847, 1000, 1000);

    property[10] = "Mass Flow";
    unit[10] = new Array("Kilogram/second (kg/sec)", "Pound mass/sec (lbm/sec)", "Pound mass/min (lbm/min)");
    factor[10] = new Array(1, .4535924, .007559873);

    property[11] = "Density & Mass capacity";
    unit[11] = new Array("Kilogram/cub.meter", "Grain/galon", "Grams/cm^3 (gr/cc)", "Pound mass/cubic foot", "Pound mass/cubic-inch", "Ounces/gallon (UK,liq)", "Ounces/gallon (US,liq)", "Ounces (mass)/inch", "Pound mass/gal (UK,liq)", "Pound mass/gal (US,liq)", "Slug/cubic foot", "Tons (long,mass)/cub.yard");
    factor[11] = new Array(1, .01711806, 1000, 16.01846, 27679.91, 6.236027, 7.489152, 1729.994, 99.77644, 119.8264, 515.379, 1328.939);

    property[12] = "Power";
    unit[12] = new Array("Watt (W)", "Kilowatt (kW)", "Megawatt (MW)", "Milliwatt (mW)", "BTU (SI)/hour", "BTU (thermo)/second", "BTU (thermo)/minute", "BTU (thermo)/hour", "Calorie (thermo)/second", "Calorie (thermo)/minute", "Erg/second", "Foot-pound force/hour", "Foot-pound force/minute", "Foot-pound force/second", "Horsepower(550 ft lbf/s)", "Horsepower (electric)", "Horsepower (boiler)", "Horsepower (metric)", "Horsepower (UK)", "Kilocalorie (thermo)/min", "Kilocalorie (thermo)/sec");
    factor[12] = new Array(1, 1000, 1000000, .001, .2930667, 1054.35, 17.5725, .2928751, 4.184, 6.973333E-02, .0000001, .0003766161, .02259697, 1.355818, 745.7, 746, 9809.5, 735.499, 745.7, 69.7333, 4184);

    property[13] = "Pressure & Stress";
    unit[13] = new Array("Newton/sq.meter", "Atmosphere (normal)", "Atmosphere (techinical)", "Bar", "Centimeter mercury(cmHg)", "Centimeter water (4'C)", "Decibar", "Kgr force/sq.centimeter", "Kgr force/sq.meter", "Kip/square inch", "Millibar", "Millimeter mercury(mmHg)", "Pascal (Pa)", "Kilopascal (kPa)", "Megapascal (Mpa)", "Poundal/sq.foot", "Pound-force/sq.foot", "Pound-force/sq.inch (psi)", "Torr (mmHg,0'C)");
    factor[13] = new Array(1, 101325, 98066.5, 100000, 1333.22, 98.0638, 10000, 98066.5, 9.80665, 6894757, 100, 133.3224, 1, 1000, 1000000, 47.88026, 47.88026, 6894.757, 133.322);

    // !!! Caution: Temperature requires an increment as well as a multiplying factor
    // !!! and that's why it's handled differently
    // !!! Be VERY careful in how you change this behavior
    property[14] = "Temperature";
    unit[14] = new Array("Degrees Celsius ('C)", "Degrees Fahrenheit ('F)", "Degrees Kelvin ('K)", "Degrees Rankine ('R)");
    factor[14] = new Array(1, 0.555555555555, 1, 0.555555555555);
    tempIncrement = new Array(0, -32, -273.15, -491.67);

    property[15] = "Time";
    unit[15] = new Array("Second (sec)", "Day (mean solar)", "Day (sidereal)", "Hour (mean solar)", "Hour (sidereal)", "Minute (mean solar)", "Minute (sidereal)", "Month (mean calendar)", "Second (sidereal)", "Year (calendar)", "Year (tropical)", "Year (sidereal)");
    factor[15] = new Array(1, 8.640E4, 86164.09, 3600, 3590.17, 60, 60, 2628000, .9972696, 31536000, 31556930, 31558150);

    property[16] = "Velocity & Speed";
    unit[16] = new Array("Meter/second (m/sec)", "Foot/minute (ft/min)", "Foot/second (ft/sec)", "Kilometer/hour (kph)", "Knot (int'l)", "Mile (US)/hour (mph)", "Mile (nautical)/hour", "Mile (US)/minute", "Mile (US)/second", "Speed of light (c)", "Mach (STP)(a)");
    factor[16] = new Array(1, 5.08E-03, .3048, .2777778, .5144444, .44707, .514444, 26.8224, 1609.344, 299792458, 340.0068750);

    property[17] = "Viscosity";
    unit[17] = new Array("Newton-second/meter", "Centipoise", "Centistoke", "Sq.foot/second", "Poise", "Poundal-second/sq.foot", "Pound mass/foot-second", "Pound force-second/sq.foot", "Rhe", "Slug/foot-second", "Stoke");
    factor[17] = new Array(1, .001, .000001, 9.290304E-02, .1, 1.488164, 1.488164, 47.88026, 10, 47.88026, .0001);

    property[18] = "Volume & Capacity";
    unit[18] = new Array("Cubic Meter (m^3)", "Cubic centimeter", "Cubic millimeter", "Acre-foot", "Barrel (oil)", "Board foot", "Bushel (US)", "Cup", "Fluid ounce (US)", "Cubic foot", "Gallon (UK)", "Gallon (US,dry)", "Gallon (US,liq)", "Gill (UK)", "Gill (US)", "Cubic inch (in^3)", "Liter (new)", "Liter (old)", "Ounce (UK,fluid)", "Ounce (US,fluid)", "Peck (US)", "Pint (US,dry)", "Pint (US,liq)", "Quart (US,dry)", "Quart (US,liq)", "Stere", "Tablespoon", "Teaspoon", "Ton (register)", "Cubic yard");
    factor[18] = new Array(1, .000001, .000000001, 1233.482, .1589873, .002359737, .03523907, .0002365882, .00002957353, .02831685, .004546087, .004404884, .003785412, .0001420652, .0001182941, .00001638706, .001, .001000028, .00002841305, .00002957353, 8.8097680E-03, .0005506105, 4.7317650E-04, .001101221, 9.46353E-04, 1, .00001478676, .000004928922, 2.831685, .7645549);

    property[19] = "Volume Flow";
    unit[19] = new Array("Cubic meter/second", "Cubic foot/second", "Cubic foot/minute", "Cubic inches/minute", "Gallons (US,liq)/minute)");
    factor[19] = new Array(1, .02831685, .0004719474, 2.731177E-7, 6.309020E-05);

    // ===========
    //  Functions
    // ===========

    function UpdateUnitMenu(propMenu, unitMenu) {
        // Updates the units displayed in the unitMenu according to the selection of property in the propMenu.
        var i;
        i = propMenu.selectedIndex;
        FillMenuWithArray(unitMenu, unit[i]);
    }

    function FillMenuWithArray(myMenu, myArray) {
        // Fills the options of myMenu with the elements of myArray.
        // !CAUTION!: It replaces the elements, so old ones will be deleted.
        var i;
        myMenu.length = myArray.length;
        for (i = 0; i < myArray.length; i++) {
            myMenu.options[i].text = myArray[i];
        }
    }

    function CalculateUnit(sourceForm, targetForm) {
        // A simple wrapper function to validate input before making the conversion
        var sourceValue = sourceForm.unit_input.value;

        // First check if the user has given numbers or anything that can be made to one...
        sourceValue = parseFloat(sourceValue);
        if (!isNaN(sourceValue) || sourceValue == 0) {
            // If we can make a valid floating-point number, put it in the text box and convert!
            sourceForm.unit_input.value = sourceValue;
            ConvertFromTo(sourceForm, targetForm);
        }
    }

    function ConvertFromTo(sourceForm, targetForm) {
        // Converts the contents of the sourceForm input box to the units specified in the targetForm unit menu and puts the result in the targetForm input box.In other words, this is the heart of the whole script...
        var propIndex;
        var sourceIndex;
        var sourceFactor;
        var targetIndex;
        var targetFactor;
        var result;

        // Start by checking which property we are working in...
        propIndex = document.property_form.the_menu.selectedIndex;

        // Let's determine what unit are we converting FROM (i.e. source) and the factor needed to convert that unit to the base unit.
        sourceIndex = sourceForm.unit_menu.selectedIndex;
        sourceFactor = factor[propIndex][sourceIndex];

        // Cool! Let's do the same thing for the target unit - the units we are converting TO:
        targetIndex = targetForm.unit_menu.selectedIndex;
        targetFactor = factor[propIndex][targetIndex];

        // Simple, huh? let's do the math: a) convert the source TO the base unit: (The input has been checked by the CalculateUnit function).

        result = sourceForm.unit_input.value;
        // Handle Temperature increments!
        if (property[propIndex] == "Temperature") {
            result = parseFloat(result) + tempIncrement[sourceIndex];
        }
        result = result * sourceFactor;

        // not done yet... now, b) use the targetFactor to convert FROM the base unit
        // to the target unit...
        result = result / targetFactor;
        // Again, handle Temperature increments!
        if (property[propIndex] == "Temperature") {
            result = parseFloat(result) - tempIncrement[targetIndex];
        }

        // Ta-da! All that's left is to update the target input box:
        targetForm.unit_input.value = result;
    }

    // This fragment initializes the property dropdown menu using the data defined above in the 'Data Definitions' section
    window.onload = function (e) {
        FillMenuWithArray(document.property_form.the_menu, property);
        UpdateUnitMenu(document.property_form.the_menu, document.form_A.unit_menu);
        UpdateUnitMenu(document.property_form.the_menu, document.form_B.unit_menu)
    }

    // Restricting textboxes to accept numbers + navigational keys only
    document.getElementByClass('numbersonly').addEventListener('keydown', function (e) {
        var key = e.keyCode ? e.keyCode : e.which;

        if (!([8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
            (key == 65 && (e.ctrlKey || e.metaKey)) || // Select All
            (key == 67 && (e.ctrlKey || e.metaKey)) || // Copy
            (key == 86 && (e.ctrlKey || e.metaKey)) || // Paste
            (key >= 35 && key <= 40) || // End, Home, Arrows
            (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) || // Numeric Keys
            (key >= 96 && key <= 105) // Numpad
            (key == 190) // Numpad
        )) e.preventDefault();
    });


</script>

</body>
</html>

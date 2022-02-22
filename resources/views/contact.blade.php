@extends('layouts.main')
@section('content')



<div id="breadcrumb" class="">
    <div class="breadcrumb-title default-padding">
        <h3 class="font-weight-bold text-uppercase text-center m-0 text-white">Contact Us</h3>
    </div>
</div>
<!-- Breadcrumb Ends -->
<section id="contact-us" class="default-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    <h1>Ready to Get Started ?



                    </h1>

                    <hp>

{{$settings->email}},phone :{{$settings->phone_number}},       @php
$location=explode( ',', $settings->company_location);
for($i=0;$i<count($location);$i++){
    echo $location[$i].'<br>';
}
@endphp


</p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-12">
                <form class="contact-form mt-45" id="contact" enctype="multipart/form-data" method="post"
                action="{{ route('createmessage')}}">
                <x-alert/>
                {{ csrf_field() }}
                <div class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name"
                        name="name" placeholder="Your Name" value="" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value="" required>
                    </div>
                    <div class="form-group">
                        <input type="text"  id="sub" name="subject" class="form-control" placeholder="Your Phone Number"
                            value="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="7" placeholder="Your Message"
                            style="width: 100%; height: 150px;" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="button" class="btn">Submit</button>
                        <!-- <a href="#" class="btn mt-4">OUR SERVICES</a> -->
                    </div>
                </div>
                </form>

            </div>

            <div class="col-xl-6 col-lg-6 col-12 ">


                <div class="image text-center">
                    <img src="public/frontend/image/body/services/1.png" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="map" class="location-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56522.299158869304!2d85.30192792654009!3d27.69740520177342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1620992118229!5m2!1sen!2snp"
        style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
</section>

{{-- contactus --}}
@include('frontend.inc.contactus')

    {{-- endcontactus --}}

@endsection

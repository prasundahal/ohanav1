@extends('layouts.main')
@section('content')
<section id="breadcrumb-wrapper">
    <div class="breadcrumb-title">
        {{-- <h3 class="font-weight-bold text-uppercase text-center m-0 text-white">Donate Us</h3> --}}
    </div>
</section>
<section id="contact-us" class="default-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    <h1>
                        Donate Us
                    </h1>

                    <hp>

                        {{$settings->donation_text}}
    
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('frontend.inc.parallax')


</section>

@endsection

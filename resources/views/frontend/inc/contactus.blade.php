<section id="contact-us" class="default-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 title-description-wrapper mx-auto mb-5">
                <div class="title text-center mb-3">
                    <h1> Contact Us</h1>
                </div>

            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center">
                <div class="discription mb-3">Ashish Social Service Nepal (ASSN) is a registered non-profit, NGO <span class="font-weight-bold">
                        to fight against human trafficking and empower vulnerable women.
                    </span></div>
                <ul class="content-wrap m-0 p-0">
                    <li class="mb-1"> <span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        {{$settings->company_location}}
                    </li>
                    <li class="mb-1"> <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>{{$settings->phone_number}}
                    </li>
                    <li class="mb-1"> <span class="mr-2"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        {{$settings->email}}
                    </li>
                    <li class="mb-1"> <span class="mr-2"><i class="fa fa-archive" aria-hidden="true"></i></span>
                        P.O Box 95 Rupendehi

                    </li>
                    <li class="mb-1"> <span class="mr-2"><i class="fa fa-send" aria-hidden="true"></i></span>
                        Postal code 32900 -NEPAL
                    </li>
                    {{-- <li class="mb-1"> <span class="mr-2"><i class="fa fa-globe" aria-hidden="true"></i></span>
                        {{$settings->youtube}}
                    </li> --}}
                </ul>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image text-center">
                    <img src="{{ asset('public/frontend/image/body/services/1.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
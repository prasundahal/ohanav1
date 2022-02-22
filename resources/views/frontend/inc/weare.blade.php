<section id="who-are-we" class="default-padding bg-white">
    <div class="container">
        <div class="title-description-wrapper mb-5">
            <div class="title text-center mb-3">
                <h1>Who Are We ?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-12">
                <div class="image-head-why-us mb-xl-0 mb-3">
                    <img src="{{ asset($settings->company_image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 justify-content-start flex-column align-items-center m-auto">
                <div class="company-description mt-3 mb-4">
                    <p>{!! str_limit($settings->about, $limit = 500 ) !!}
                    </p>
                    <a href="{{url('/about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start About Area Wrapper -->
<section class="about-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <figure class="about-thumbnail-area">
                    <img src="{{asset($settings->company_image)}}" alt="About"/>
                </figure>
            </div>

            <div class="col-lg-6">
                <div class="about-content-wrap mt-md-36 mt-sm-36">
                    <div class="section-title-wrap">
                        <h2>Who We Are?</h2>
                    </div>

                    <div class="about-text mt-10 mt-sm-0">
                        {!! str_limit($settings->about, $limit = 500 ) !!}
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area Wrapper -->
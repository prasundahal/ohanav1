<!-- Start Team Area Wrapper -->
<section class="team-area-wrapper mt-80 mt-sm-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 mb-34">
                    <h2>Our Team</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="container mt-90 mb-90">
            <div class="project-content__inner row">
                @foreach (Route::is('index') ? \App\Models\Member::limit(4)->get() : \App\Models\Member::all() as $member)
                <!-- Start Single Project Wrap -->
                <div class="col-lg-3">
                    <figure class="project-item__thumb hvr-dir-item m-2">
                        <img src="{{asset($member->memberImage)}}" alt="{{$member->memberName}}" />
                        <figcaption class="project-item__info hvr-dir">
                            <div class="info-wrap">
                                <p class="text-light">{!! str_limit($member->memberDescription, $limit = 100 ) !!}</p>
                                <a href="{{$member->facebook}}" class="mr-2"><i class="fa fa-facebook"></i></a>
                                <a href="{{$member->github}}" class="mr-2"><i class="fa fa-github"></i></a>
                                <a href="{{$member->linkedin}}" class="mr-2"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$member->instagram}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="team-member__info ml-2">
                        <h3>{{$member->memberName}}</h3>
                        <span class="designation">{{$member->memberPost}}</span>
                    </div>
                </div>
                <!-- End Single Project Wrap -->
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Team Area Wrapper -->
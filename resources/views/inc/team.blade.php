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

        <div class="row mtm-30">
            @foreach ($members as $member)
                
            <div class="col-sm-6 col-lg-3">
                <!-- Start Team Member Item -->
                <div class="team-member">
                    <figure class="team-member__thumb">
                        <img src="{{asset($member->memberImage)}}" alt="Team Member"/>
                    </figure>

                    <div class="team-member__info">
                        <h3>{{$member->memberName}}</h3>
                        <span class="designation">{{$member->memberPost}}</span>
                    </div>
                </div>
                <!-- End Team Member Item -->
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Team Area Wrapper -->
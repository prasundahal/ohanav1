<section id="our-team-wrapper" class="default-padding">
    <div class="container">
        <div class="title-description-wrapper text-center mb-3">
            <div class="title font-weight-bold mb-3 text-uppercase">
                <h1 class="text-white">Our Team</h1>
            </div>
            <div class="discription w-75 m-auto text-white"> {{$settings->ourteamtext}}
            </div>
        </div>
        <div class="slick-slider-category">

            @foreach($members as $member)
            <div class="slick-item position-relative py-4 mx-2">
                <div class="team-block">
                    <div class="team-img">
                        <img src="{{ asset($member->memberImage)}}" alt="" class="img-fluid">
                    </div>
                    <div class="team-content text-center">
                        <div class="name-designation mb-2">
                            <h3 class="m-0"><a href="#">{{ $member->memberName }}</a></h3>
                            <span>{{ $member->memberPost }}</span>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

<section id="testimonial" class=" testimonial default-padding position-relative">
    <div class="container">
        <div class="title-description-wrapper mb-2">
            <div class="title text-center text-white">
                <h1>What Our Clients Have To Say ?</h1>
            </div>
            <!-- <div class="discription text-center w-75 m-auto"> Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Soluta accusantium incidunt earum deserunt, tempore eos repudiandae consectetur ad expedita.
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators d-none">
                        @foreach ($advisors as $key => $advisor)
                        <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        {{-- <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li> --}}
                        @endforeach
                        
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">

                        @foreach($advisors as $advisor)
                        <div class="item carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="img-box"><img src="{{ asset($advisor->image)}}" alt=""></div>
                            <p class="testimonial">
                                {{ $advisor->content }}
                            </p>
                            <p class="overview"><b>{{ $advisor->name }}</b>, Client</p>
                        </div>
                        @endforeach

                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

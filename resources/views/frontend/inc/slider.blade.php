<section id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($sliders as $slider)
        <div class="carousel-item active fade">

            <img class="d-block w-100" src="{{ asset('public/frontend/image/slider/a.jpg')}}" alt="First slide">
            <div class="discription">
                <h1 class="fade-from-left1"> {{ $slider->title }} </h1>
                <div class="fade-from-left2">
                    <p>{{ $slider->subtitle1 }}</p>
                    <span>{{ $slider->subtitle2 }}</span></br>
                </div>
                <a href="{{ url('/about') }}" class="btn fade-from-left3">Learn
                    More</a>
            </div>
        </div>
        @endforeach


    </div> <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

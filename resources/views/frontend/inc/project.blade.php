<section id="projects" class="default-padding bg-white">
    <div class="container">
        <div class="highlighted-services">
            <div class="title-description-wrapper mb-5">
                <div class="title text-center mb-3">
                    <h1>
                        Successful Projects
                    </h1>
                </div>
                <div class="discription text-center w-75 m-auto"> {{$settings->projects}}</div>
            </div>
            <div class="row justify-content-center  ">
                @foreach($projects as $project)

                <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-lg-2 mb-4">
                    <div class="card">
                        <div class="card-head"> <img src="{{ asset($project->imgmain)}}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">{{ $project->projectName }}
                            </h5>
                            <p class="card-text mt-3">{{ $project->subName }}
                            </p>
                            <a href="{{ route('projectdetail',$project->id)}}" class="btn mt-2">Explore More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

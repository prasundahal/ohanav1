<!-- Start Latest Project Wrapper -->
<section class="latest-project-wrapper {{Route::is('index') ? 'mt-90 mt-sm-60' : 'mb-90'}}">
    <div class="latest-project-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Title -->
                    <div class="section-title-wrap mb-30">
                        <h2>Latest Project</h2>
                    </div>
                    <!-- End Section Title -->

                    <!-- Latest Project Filter Menu -->
                    <div class="project-filter-menu">
                        <ul class="nav">
                            <li data-filter="*" class="active">All</li>
                            @php
                                $projectTypes = \App\Models\Project::select(DB::raw('sum(projectType) as total_quantity'),'projectType')->groupBy('projectType')->get();
                            @endphp
                            @foreach ($projectTypes as $filter)
                            <li data-filter=".{{$filter->projectType}}">{{$filter->projectType}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Latest Project Filter Menu -->
                </div>
            </div>
        </div>
    </div>

    <div class="project-content">
        <div class="project-content__inner filter-content">
            @foreach (Route::is('index') ? \App\Models\Project::limit(6)->latest()->get() : \App\Models\Project::all() as $project)
            <!-- Start Single Project Wrap -->
            <div class="project-item {{$project->projectType}}">
                <figure class="project-item__thumb hvr-dir-item">
                    <img src="{{asset($project->imgmain)}}" alt="{{$project->projectName}}" style="height:320px"/>
                    <figcaption class="project-item__info hvr-dir">
                        <div class="info-wrap">
                            <a href="{{route('projectdetail',$project->id)}}" class="cate-name">{{$project->projectName}}</a>
                            <h3><a href="{{route('projectdetail',$project->id)}}">{{$project->innerHeading}}</a></h3>
                            <a href="{{route('projectdetail',$project->id)}}" class="btn btn-read-more">Read More</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- End Single Project Wrap -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Latest Project Wrapper -->
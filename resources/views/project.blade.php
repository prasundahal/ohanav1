@extends('layouts.main')

@section('content')
<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Projects</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('project')}}">Projects</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

@include('inc.project')
			{{-- <div id="project-detail-section" class="padding pb-60 pt-xs-60">
				<div class="container">
					<div class="row ">
						<div class="col-sm-12">
							<div class="heading-box pb-30 ">
								<h2><span>{{ $project->projectName }}</span> {{ $project->subName }}</h2>
								<span class="b-line l-left"></span>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="project-details">

								<div class="project-info col-sm-12 col-lg-4 ">
									<h3>Project Description</h3>
									<ul>
										<li>
											<strong>Client:</strong> {{ $project->client }}
										</li>
										<li>
											<strong>Location:</strong> {{ $project->location }}
										</li>
										<li>
											<strong>Surface Area:</strong> {{ $project->surfaceArea }}
										</li>
										<li>
											<strong>Year Completed:</strong> {{ $project->yearcompleted }}
										</li>
										<li>
											<strong>Value:</strong> {{ $project->value }}
										</li>
										<li>
											<strong>Architect:</strong> {{ $project->architech }}
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-7 mt-30">
                            <figure>
                                <img src="{{ asset($project->imgmain)}}" alt="{{ $project->innerHeading }}">
                            </figure>
							<div class="box-title mb-20">
								<h3>{{ $project->innerHeading }}</h3>

							</div>
							<div class="text-content">
								<p>{{ $project->innerHeadingContent }}
									</p>
							</div>
						</div>


							<div class="col-sm-12 col-lg-5 mt-40">
								<ul class="project-gallery text-right">
									<li>
										<a href="assets/images/popup/small-1-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-1-1.jpg" alt=""></a>
									</li>
									<li>
										<a href="assets/images/popup/small-2-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-2-1.jpg" alt=""></a>
									</li>
									<li>
										<a href="assets/images/popup/small-3-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-3-1.jpg" alt=""></a>
									</li>
									<li>
										<a href="assets/images/popup/small-4-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-4-1.jpg" alt=""></a>
									</li>
								</ul>
							</div>

					</div>
				</div>
			</div> --}}
@endsection

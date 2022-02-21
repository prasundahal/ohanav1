@extends('layouts.main')
@section('content')
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Project Details"><span>Project Details</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Project Details</span>
						</div>

      	</div>

      </div>
    </div>
  </section>
			<!-- End Intro Section -->
			<!-- End Intro Section -->
			<div id="project-detail-section" class="padding pb-60 pt-xs-60">
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
			</div>
@endsection

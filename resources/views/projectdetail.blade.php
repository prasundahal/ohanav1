@extends('layouts.main')
@section('content')
<!-- CONTENT -->
<!-- Intro Section -->
{{-- <section class="inner-intro bg-img light-color overlay-before parallax-background">
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
  </section> --}}
<!-- End Intro Section -->
<!-- End Intro Section -->
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

<!-- Breadcrumb -->
<div id="breadcrumb" class="">
	<div class="breadcrumb-title default-padding">
		<h3 class="font-weight-bold text-uppercase text-center m-0 text-white">Project Detail</h3>
	</div>
</div>
<!-- Breadcrumb Ends -->
<!-- Product Detail  -->
<section id="product-detail-wrapper" class="bg-white">
	<section id="product-detail" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<div class="product-detail-slider">
						<div class="slick-item position-relative py-4 mx-2">
							<div class="team-block">
								<div class="team-img">
									<img src="{{asset($project->imgmain)}}" alt="{{$project->projectName}}" class="img-fluid" style="width:100%">
								</div>
							</div>
						</div>
						{{-- <div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/body/portfolio/2.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/body/portfolio/3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/body/portfolio/4.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/body/portfolio/5.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div> --}}


					</div>
					{{-- <div class="product-detail-ads-slider">
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/slider/a.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/slider/b.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="slick-item position-relative py-4 mx-2">
									<div class="team-block">
										<div class="team-img">
											<img src="frontend/image/slider/d.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
	
	
	
							</div> --}}
					<div class="my-3">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">{{$project->innerHeading}}</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active p-3" id="first" role="tabpanel" aria-labelledby="first-tab">{{$project->innerHeadingContent}}
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- <section id="project-statistics" class="">
				<div class="content default-padding">
					<div class="container">
						<div class="title-description-wrapper text-center mb-5">
							<div class="title font-weight-bold mb-3 text-uppercase">
								<h1 class="text-white">Project Statistics</h1>
							</div>
	
						</div>
	
						<div class=" row justify-content-center">
							<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
								<div class="service-block-overlay m-auto text-center">
									<h2 class="">{{$project->client}}</h2>
									<label for="block">Client</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
								<div class="service-block-overlay m-auto text-center">
									<h2 class="">{{$project->surfaceArea}}</h2>
									<label for="block">Surface Area</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
								<div class="service-block-overlay m-auto text-center">
									<h2 class="">NPR {{$project->value}}</h2>
									<label for="block">Value</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-2">
								<div class="service-block-overlay m-auto text-center">
									<h2 class="">{{$project->yearcompleted}}</h2>
									<label for="block">Completed Year</label>
								</div>
							</div>
	
						</div>
	
					</div>
				</div>
			</section> -->

</section>
<!-- Product Detail Ends -->
@endsection
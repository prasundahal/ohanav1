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
						<div class="col-xl-7 col-lg-6 col-md-6 col-12">
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
										<a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#first"
											role="tab" aria-controls="first" aria-selected="true">{{$project->innerHeading}}</a>
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active p-3" id="first" role="tabpanel"
										aria-labelledby="first-tab">{{$project->innerHeadingContent}}
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-6 col-12">
							<div class="d-flex justify-content-center h-100 product-detail flex-column">
								<div class="about mb-3">
									<div class="d-flex flex-row align-items-center mb-2">
										<h1 class="font-weight-bold m-0">{{$project->projectName}}</h1>
									</div>
									<div class="product-price d-flex ">
										<div class="second-price">{{$project->location}}</div>
									</div>
								</div>
								<div class="color-wrapper">
									<h5 class="">Tags</h5>
									<div class="my-color mb-3">
										<label class="radio m-0">
											{{-- <input type="radio" name="gender" value="MALE" checked="" /> --}}
											<span class="red">{{$project->tag}}</span>
										</label>
										{{-- <label class="radio m-0">
											<input type="radio" name="gender" value="FEMALE" />
											<span class="blue">Advance</span>
										</label>
										<label class="radio m-0">
											<input type="radio" name="gender" value="FEMALE" />
											<span class="green">Pro</span>
										</label> --}}
									</div>
								</div>
								<div class="mt-2">
									<h5>Description</h5>
									<p>
										{{$project->subName}}
									</p>
									{{-- <a href="" class="btn2" data-toggle="modal" data-target="#buymodal">Buy Now</a> --}}
									<!-- Modal -->
									<div class="modal fade" id="buymodal" tabindex="-1" role="dialog"
										aria-labelledby="buymodallabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="buymodallabel">Connect With Us</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="contact-form">
														<div class="form-group">
															<input type="text" name="txtName" class="form-control"
																placeholder="Your Name" value="">
														</div>
														<div class="form-group">
															<input type="text" name="txtEmail" class="form-control"
																placeholder="Your Email" value="">
														</div>
														<div class="form-group">
															<input type="text" name="txtPhone" class="form-control"
																placeholder="Your Phone Number" value="">
														</div>
														<div class="form-group">
															<textarea name="txtMsg" class="form-control"
																placeholder="Your Message"
																style="width: 100%; height: 150px;"></textarea>
														</div>
													</div>
												</div>
												<div class="modal-footer m-auto">
													<button type="submit" class="btn btn-secondary"
														data-dismiss="modal">Send</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</section>
	
			<section id="project-statistics" class="">
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
			</section>
	
		</section>
		<!-- Product Detail Ends -->
@endsection

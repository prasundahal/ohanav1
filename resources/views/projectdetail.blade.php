@extends('layouts.main')
@section('content')

<!-- Breadcrumb -->
<div id="breadcrumb" class="">
	<div class="breadcrumb-title default-padding">
		<h3 class="font-weight-bold text-uppercase text-center m-0 text-white text-uppercase">{{$project->projectName}}</h3>
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


					</div>

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


</section>
<!-- Product Detail Ends -->
@endsection

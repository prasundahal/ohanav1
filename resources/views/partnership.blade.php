@extends('layouts.main')
@section('content')

			 <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Partnerships"><span>Partnerships</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Partnerships</span>
						</div>

      	</div>

      </div>
    </div>
  </section>
 <!-- Intro Section End-->


  <!-- CONTENT -->

 <section class="padding pt-xs-40">
				<div class="container">

					<div class="row">
					<div class="col-md-3 col-lg-3 mt-xs-40 pb-xs-40">
						<div class="tab-title">
                            <ul class="clearfix">
                                <li>
                                    <a href="{{ url('/about') }}">Company</a>
                                </li>
                                <li>
                                    <a href="{{ url('/history') }}">History</a>

                                </li>
                                <li>
                                    <a href="{{ url('/career') }}">Careers</a>

                                </li>
                                <li>
                                    <a href="{{ url('/partnership') }}" class="active">Partnerships</a>

                                </li>
                                <li>
                                    <a href="{{ url('/leadership') }}">Leadership</a>

                                </li>
                            </ul>

                        </div>
							<div class="company-brochure mt-30">
							<h4>Downlaod Brochure</h4>
							<a href="{{ asset('/public/docs/DCDPL_Brochure.pdf')}}"><img src="{{ asset('/public/assets/images/flyer.jpg')}}" alt=""></a>
							</div>
								</div>

									<div class="col-md-9 col-lg-9">
							<div class="tab-content">


								<div class="row">

								<div class="col-md-12 col-lg-12">
								<img src="{{ asset('/public/assets/images/people.jpg')}}" alt="">
								</div>


									<div class="col-md-12 col-lg-12">
									<h2 class="pt-30">Our Partnerships</h2>
									<p>
			                            We are partners with many reputed institutions because of our dedicated work. We have experties of more than 40 years in the field of construction and we did various projects with different institutions.
                                    </p>
                                        <!-- About Section -->


                                        @foreach($partners as $partner)
                                        <div class="pt-60 pt-xs-60 ">
                                            <div class="row partner-blck__brdr mb-40">
                                                <div class="col-sm-3 no-padding t_cell partner-blck__brdr-r text-center">
                                                    <img src="{{ URL::to($partner->partnerImage) }}" alt="">
                                                </div>
                                                <div class="col-md-9 col-lg-9 no-padding t_cell">
                                                    <div class="partner__content partnership">
                                                        <h3>{{ $partner->partnerName}}</h3>
                                                        <p>{{ substr($partner->description, 0,  500)}}..</p>
                                                        <a href="{{ route('viewpartner',$partner->id)}}" class="abt__link"> Read More <i class="fa fa-chevron-circle-right abt__link-arrow" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                            @endforeach






                                        </div>
                                        <!-- About Section End-->

                                    </div>

								</div>

							</div>


						</div>



					</div>
				</div>
			</section>
@endsection

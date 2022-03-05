@extends('layouts.main')
@section('content')
    <!-- Breadcrumb -->
    <div id="breadcrumb" class="">
        <div class="breadcrumb-title default-padding">
            <h3 class="font-weight-bold text-uppercase text-center m-0 text-white">Product
                Details/{{ $project->projectName }}</h3>
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
                                        <img src="{{ asset($project->imgmain) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item position-relative py-4 mx-2">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="{{ asset($project->innreimg1) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item position-relative py-4 mx-2">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="{{ asset($project->innering2) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item position-relative py-4 mx-2">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="{{ asset($project->innering3) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="slick-item position-relative py-4 mx-2">
                            <div class="team-block">
                                <div class="team-img">
                                    <img src="{{ asset($project->imgmain4)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div> --}}


                        </div>
                        <div class="product-detail-ads-slider">
                            <div class="slick-item position-relative py-4 mx-2">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="{{ asset($project->innering4) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="slick-item position-relative py-4 mx-2">
                            <div class="team-block">
                                <div class="team-img">
                                    <img src="{{ asset($project->imgmain)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="slick-item position-relative py-4 mx-2">
                            <div class="team-block">
                                <div class="team-img">
                                    <img src="{{ asset($project->imgmain)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div> --}}



                        </div>
                        <div class="my-3">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#first"
                                        role="tab" aria-controls="first"
                                        aria-selected="true">{{ $project->innerHeading }}</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3" id="first" role="tabpanel"
                                    aria-labelledby="first-tab">
                                    <p>{{ $project->innerHeadingContent }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                        <div class="d-flex justify-content-center h-100 product-detail flex-column">
                            <div class="about mb-3">
                                <div class="d-flex flex-row align-items-center mb-2">
                                    <h1 class="font-weight-bold m-0">{{ $project->projectName }}</h1>
                                </div>
                                <div class="product-price d-flex ">
                                    <div class="second-price">{{ $project->value }}</div>
                                </div>
                            </div>
                            {{-- <div class="color-wrapper">
                            <h5 class="">Variation</h5>
                            <div class="my-color mb-3">
                                <label class="radio m-0">
                                    <input type="radio" name="gender" value="MALE" checked="" />
                                    <span class="red">Basic</span>
                                </label>
                                <label class="radio m-0">
                                    <input type="radio" name="gender" value="FEMALE" />
                                    <span class="blue">Advance</span>
                                </label>
                                <label class="radio m-0">
                                    <input type="radio" name="gender" value="FEMALE" />
                                    <span class="green">Pro</span>
                                </label>
                            </div>
                        </div> --}}
                            <div class="mt-2">
                                <h5>Description</h5>
                                <h5>Tag:{{ $project->tag }}</h5>
                                <h5>Total Sell:{{ $project->tag }}</h5>
                                <h5>Time :{{ $project->yearcompleted }}</h5>
                                <h5> Architech/Platform :{{ $project->architech }}</h5>

                                <p>

                                    {{ $project->subName }}

                                </p>
                                <a href="javascript:void(0);" class="btn2" data-toggle="modal"
                                    data-target-id="{{ $project->id }}" data-target="#buymodal">Buy Now</a>
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
                                            <form action="{{ route('buyproject.store') }}" method="POST" id="buyform">
                                                @csrf

                                                <div class="modal-body">
                                                    <div class="contact-form">
                                                        <div class="form-group">
                                                            <input type="hidden" name="project_id" class="form-control"
                                                                id="ProjectID">
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Your Name" value="">
                                                            <span class="require text-danger name"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="email" class="form-control"
                                                                placeholder="Your Email" value="">
                                                            <span class="require text-danger email"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number" class="form-control"
                                                                placeholder="Your Phone Number" value="">
                                                            <span class="require text-danger phone_number"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control"
                                                                placeholder="Your Message"
                                                                style="width: 100%; height: 150px;"></textarea>
                                                            <span class="require text-danger message"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer m-auto">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-secondary" id="Send">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- counter --}}
        @include('frontend.inc.counter')
        {{-- endcounter --}}

    </section>
    <!-- Product Detail Ends -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#buymodal").on("show.bs.modal", function(e) {
                var project_id = $(e.relatedTarget).data("target-id");
                $("#ProjectID").val(project_id);
            });

            $("#buymodal").on("hidden.bs.modal", function() {
                $(this).find('form')[0].reset();
                $(".require").css('display', 'none');
            });
        });

        $("#Send").on('click', function(e) {
            console.log('I am clicked')
            $(".require").css('display', 'none');
            e.preventDefault();
            var formdata = new FormData($("#buyform")[0]),
                action = $("#buyform").attr('action');
            console.log(action);
            $.ajax({
                url: action,
                type: 'post',
                data: formdata,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#Send").attr('disabled', true);
                },
                success: function(response) {
                    console.log('hey');
                    if (response.errors) {
                        var error_html = '';
                        $.each(response.errors, function(key, value) {
                            error_html = value;
                            $("." + key).css('display', 'block').html(error_html);
                        });
                    } else if (response.db_error) {
                        toastr.warning(response.db_error);
                    } else if (!response.errors && !response.db_error) {
                        $("#buymodal").modal('hide');
                        toastr.success(response.msg);
                    }
                }, 
                complete: function(){
                    $("#Send").attr('disabled', false);
                }
            });
        })
    </script>
@endsection

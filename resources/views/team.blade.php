@extends('layouts.main')
@section('content')
<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-left">
                    <h1>Teams</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="{{route('team')}}">Team</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<div class="container mt-90 mb-90">
    <div class="project-content__inner row">
        @foreach (\App\Models\Member::all() as $member)
        <!-- Start Single Project Wrap -->
        <div class="col-lg-3">
            <figure class="project-item__thumb hvr-dir-item m-2">
                <img src="{{asset($member->memberImage)}}" alt="{{$member->memberName}}" />
                <figcaption class="project-item__info hvr-dir">
                    <div class="info-wrap">
                        <h3><a href="#">{{$member->memberName}}</a></h3>
                        <h3><a href="#">{{$member->memberPost}}</a></h3>
                        <a href="#">{{$member->memberDescription}}</a>
                        {{-- <a href="project-details.html" class="btn btn-read-more">Read More</a> --}}
                    </div>
                </figcaption>
            </figure>
        </div>
        <!-- End Single Project Wrap -->
        @endforeach
    </div>
</div>

@endsection

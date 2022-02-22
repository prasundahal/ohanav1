@extends('layouts.main')
@section('content')
<section id="breadcrumb-wrapper">
    <div class="breadcrumb-title">
        <h3 class="font-weight-bold text-uppercase text-center m-0 text-white">All Services</h3>
    </div>
</section>

   {{-- why choose us --}}
   @include('frontend.inc.whychoseus')
   {{-- endwhy choose us --}}

@include('frontend.inc.extra')
{{-- technology --}}
@include('frontend.inc.technology')
{{-- technology --}}


{{-- projects --}}

    @include('frontend.inc.project')
{{-- endprojecte --}}



</section>

@endsection

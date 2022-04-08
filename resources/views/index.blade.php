@extends('layouts.main')
@section('content')
<style>
    .counter::after {
        content: "+";
    }
</style>


{{-- slider --}}
@include('frontend.inc.slider')
{{-- endshider --}}


{{-- who we are --}}
@include('frontend.inc.weare')
{{-- end who we are --}}


{{-- Projects --}}
@include('frontend.inc.project')
{{-- Projects --}}
{{-- counter --}}
@include('frontend.inc.counter')
{{-- endcounter --}}



{{-- services --}}
@include('frontend.inc.whychoseus')
{{-- services --}}

{{-- contactus --}}
@include('frontend.inc.contactus')
{{-- endcontactus --}}

{{-- parallax --}}
@include('frontend.inc.parallax')
{{-- endparallax --}}
<section id="scroll-btn">
    <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</section>
@endsection

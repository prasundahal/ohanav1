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

{{-- technology --}}
@include('frontend.inc.technology')
{{-- technology --}}

{{-- who we are --}}
@include('frontend.inc.weare')
{{-- end who we are --}}

{{-- counter --}}
@include('frontend.inc.counter')
{{-- endcounter --}}

{{-- contactus --}}
@include('frontend.inc.contactus')
{{-- endcontactus --}}

{{-- parallax --}}
@include('frontend.inc.parallax')
{{-- endparallax --}}
@endsection
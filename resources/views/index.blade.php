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
   {{-- team --}}
   @include('frontend.inc.team')
   {{-- endteam --}}

      {{-- who we are --}}
   @include('frontend.inc.weare')
   {{-- end who we are --}}

{{-- counter --}}
@include('frontend.inc.counter')
{{-- endcounter --}}

{{-- projects --}}

    @include('frontend.inc.project')
{{-- endprojecte --}}


  {{-- extra --}}
  @include('frontend.inc.extra')
  {{-- endextra --}}


  {{-- testimonial --}}

    @include('frontend.inc.testimonial')
    {{-- testimonial --}}

   {{-- why choose us --}}
   @include('frontend.inc.whychoseus')
   {{-- endwhy choose us --}}

{{-- contactus --}}
@include('frontend.inc.contactus')

    {{-- endcontactus --}}
    @endsection

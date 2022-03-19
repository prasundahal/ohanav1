<div>
    @if(session()->has('message'))
        toastr.success("{{session()->get('message')}}");
    @elseif(session()->has('error'))
        toastr.error("{{session()->get('message')}}");
    @elseif($errors->any())
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}")
        @endforeach
    @endif

</div>

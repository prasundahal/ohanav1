<div>
    @if(session()->has('message'))
        toastr.success("{{session()->get('message')}}");
    @elseif($errors->any())
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}")
        @endforeach
    @endif

</div>

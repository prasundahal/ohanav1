@extends('admin.layouts.adminmain')
@section('admincontent')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
  <script type="text/javascript">
  $('.colorpicker').colorpicker({});
</script>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Home Banner</h3>
                        <span class="pull-right">
							<a href="{{url('admin/sliders')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('homebanner.update') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('patch')
                            {{-- <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="sliderImage" class="form-control">
                            </div> --}}

                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $home_banner->title }}">
                            </div>

                              {{-- <div class="form-group">

    <h1>Bootstrap Colorpicker</h1>
    <div id="cp2" class="input-group colorpicker colorpicker-component">
      <input type="text" value="#00AABB" class="form-control" />
      <span class="input-group-addon"><i></i></span>
    </div> --}}

                            {{-- </div> --}}


                            <div class="form-group">
                                <strong>Sub Title</strong>
                                <input type="text" name="subtitle" class="form-control" placeholder="Sub Title 1" value="{{ $home_banner->subtitle }}">
                            </div>
                            {{-- <div class="form-group">
                                <strong>Sub Title 2</strong>
                                <input type="text" name="subtitle2" class="form-control" placeholder="Sub Title 2">
                            </div>

                            <div class="form-group">
                                <strong>Content</strong>
                                <input type="text" name="content" class="form-control" placeholder="Content">
                            </div> --}}
                            <div class="form-group">
                                <strong>Select Image</strong>
                                <input type="file" name="image" class="form-control" placeholder="Choose File">
                                @if($home_banner->image != null)
                                    @if(file_exists(public_path('uploads/'.$home_banner->image)))
                                        <img src="{{ asset('uploads/'.$home_banner->image) }}" height="300" width="300" id="book-image-view" onchange="loadFile(event)">
                                    @endif
                                @endif
                                {{-- <img id="preview-logo-before-upload"  height="200" width="200" class="rounded me-2 d-none" > --}}

                            </div>

                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Add Slider</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var loadFile = function(event) {
            document.getElementById('book-image-view').style.display = 'none';
            var output = document.getElementById('preview-logo-before-upload');
            output.className = 'd-block';
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('preview-logo-before-upload');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };

  </script>
@endsection

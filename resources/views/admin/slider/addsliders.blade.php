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
                        <h3 class="box-title">Add Slider</h3>
                        <span class="pull-right">
							<a href="{{url('admin/sliders')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeslider') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="sliderImage" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            
                              <div class="form-group">
                               
    <h1>Bootstrap Colorpicker</h1>
    <div id="cp2" class="input-group colorpicker colorpicker-component"> 
      <input type="text" value="#00AABB" class="form-control" /> 
      <span class="input-group-addon"><i></i></span> 
    </div>

                            </div>
                            
                            
                            <div class="form-group">
                                <strong>Sub Title 1</strong>
                                <input type="text" name="subtitle1" class="form-control" placeholder="Sub Title 1">
                            </div>
                            <div class="form-group">
                                <strong>Sub Title 2</strong>
                                <input type="text" name="subtitle2" class="form-control" placeholder="Sub Title 2">
                            </div>

                            <div class="form-group">
                                <strong>Content</strong>
                                <input type="text" name="content" class="form-control" placeholder="Content">
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
@endsection

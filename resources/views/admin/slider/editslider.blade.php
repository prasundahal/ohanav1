@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Slider</h3>
                        <span class="pull-right">
							<a href="{{url('admin/sliders')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateslider',$slider->id) }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Image</strong><br>
                                <img alt="" class="rounded" height="50px" src="{{ asset('/storage/app/sliderImages/' . $slider->image) }}"><br>
                                <input type="file" name="sliderImage" value="{{ $slider->sliderImage }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" value="{{ $slider->title }}" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <strong>Sub Title 1</strong>
                                <input type="text" name="subtitle1" value="{{ $slider->subtitle1 }}" class="form-control" placeholder="Sub Title 1">
                            </div>
                            <div class="form-group">
                                <strong>Sub Title 2</strong>
                                <input type="text" name="subtitle2" value="{{ $slider->subtitle2 }}" class="form-control" placeholder="Sub Title 2">
                            </div>

                            <div class="form-group">
                                <strong>Content</strong>
                                <input type="text" name="content" value="{{ $slider->content }}" class="form-control" placeholder="Content">
                            </div>

                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Update Slider</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Service</h3>
                        <span class="pull-right">
							<a href="{{url('admin/services')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <x-alert/>
                        <form action="{{ route('updateService',$service->id) }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Service</strong>
                                <input type="text" name="service" value="{{$service->service}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Icon</strong>
                                <input type="text" name="icon" value="{{$service->icon}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea class="form-control" name="description" rows="5">{{$service->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

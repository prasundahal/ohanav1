@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Board of Director</h3>
                        <span class="pull-right">
							<a href="{{url('admin/boardOfDirectors')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeBoardOfDirector') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Designation</strong>
                                <input type="text" name="designation"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="image"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>About</strong>
                                <textarea class="form-control" name="about" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

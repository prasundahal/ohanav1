@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add History</h3>
                        <span class="pull-right">
							<a href="{{url('admin/companyHistory')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeHistory') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Year</strong>
                                <input type="text" name="year"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Content</strong>
                                <textarea class="form-control" name="content" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <strong>Sub Title</strong>
                                <input type="text" name="subtitle"  class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Sub Content</strong>
                                <textarea class="form-control" name="subcontent" rows="5"></textarea>
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
    </section>
@endsection

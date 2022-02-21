@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Partner Company</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewPartners')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storepartner') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="partnerName" class="form-control" placeholder="Name">
                            </div>


                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="partnerImage" class="form-control">
                            </div>


                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea name="description" class="form-control" placeholder="Description"
                                          rows="3"></textarea>
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

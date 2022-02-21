@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Blog Category</h3>
                        <span class="pull-right">
							<a href="{{url('admin/blogCategory')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeblogcategory') }}" class="form-image-upload" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <strong>Blog Category</strong>
                                <input type="text" name="category" class="form-control" placeholder="Category">
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

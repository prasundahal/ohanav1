@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Portfolio</h3>
                        <span class="pull-right">
							<a href="{{url('admin/managePortfolio')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updatePortfolio',$portfolio->id) }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" value="{{$portfolio->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Content</strong>
                                <textarea class="form-control" name="content" rows="5">{{$portfolio->content}}</textarea>
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

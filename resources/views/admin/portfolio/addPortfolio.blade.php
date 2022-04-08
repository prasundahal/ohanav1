@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Contact Details</h3>
                        <span class="pull-right">
							<a href="{{url('admin/managePortfolio')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storePortfolio') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Place</strong>
                                <input type="text" name="title"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <strong>Content Number</strong>
                                <input type="text" name="content"  class="form-control" required>
                            </div>
                            {{-- <div class="form-group">
                                <strong>Content Number</strong>
                                <textarea class="form-control" name="content" rows="5"></textarea>
                            </div> --}}
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

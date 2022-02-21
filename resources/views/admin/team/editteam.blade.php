@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Team User</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewTeams')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateteam',$member->id) }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <strong>Name</strong>
                                <input type="text" value="{{ $member->memberName }}" name="memberName" class="form-control" placeholder="Name">
                            </div>


                            <div class="form-group">
                                <strong>Description</strong>
                                <input type="text" value="{{ $member->memberDescription }}" name="memberDescription" class="form-control" placeholder="Description">
                            </div>


                            <div class="form-group">
                                <strong>Image</strong><br>

                                <img alt="" class="rounded" height="50px" src="{{ asset($member->memberImage) }}">

                                <input type="file" name="memberImage" class="form-control">
                            </div>


                            <div class="form-group">
                                <strong>Post</strong>
                                <input type="text" name="memberPost" value="{{ $member->memberPost }}" class="form-control" placeholder="Position in Company">
                            </div>

                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

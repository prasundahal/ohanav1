@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Team Member</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewTeam')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('addteammember') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <strong>User Name</strong>
                                <input type="text" name="memberName" class="form-control" placeholder="Name of User" value="{{old('memberName')}}">
                            </div>

                            <div class="form-group">
                                <strong>Description(Up to 100 words only)</strong>
                                <input type="text" name="memberDescription" class="form-control"
                                       placeholder="Information about User" value="{{old('memberDescription')}}">
                            </div>
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="memberImage" class="form-control" value="{{old('memberImage')}}">
                            </div>
                            <div class="form-group">
                                <strong>Designation</strong>
                                <input type="text" name="memberPost" class="form-control"
                                       placeholder="Position in Company" value="{{old('memberPost')}}">
                            </div>
                            <div class="form-group">
                                <strong>Facebook</strong>
                                <input type="text" name="facebook" class="form-control"
                                       placeholder="facebook link" value="{{old('facebook')}}">
                            </div>
                            <div class="form-group">
                                <strong>Github</strong>
                                <input type="text" name="github" class="form-control"
                                       placeholder="github link" value="{{old('github')}}">
                            </div>
                            <div class="form-group">
                                <strong>LinkedIn</strong>
                                <input type="text" name="linkedin" class="form-control"
                                       placeholder="LinkedIn link" value="{{old('linkedin')}}">
                            </div>
                            <div class="form-group">
                                <strong>Instagram</strong>
                                <input type="text" name="instagram" class="form-control"
                                       placeholder="Instagram link" value="{{old('instagram')}}">
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

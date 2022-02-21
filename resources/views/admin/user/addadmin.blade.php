@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add User</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewAdmin')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeadmin') }}" class="form-image-upload" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>


                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="password" name="password" class="form-control" placeholder="Password">
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

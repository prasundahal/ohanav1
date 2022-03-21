@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Work</h3>
                        <span class="pull-right">
							<a href="{{url('admin/allProjects')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('storeproject')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Work Name</strong>
                                    <input type="text" name="project_name" class="form-control"
                                           placeholder="Project Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Work Sub Name</strong>
                                    <input type="text" name="sub_name" class="form-control" placeholder="Sub Name" >
                                </div>


                                <div class="col-md-6 form-group">
                                    <strong>Inner heading </strong>
                                    <input type="text" name="ih" class="form-control" placeholder="Inner Heading" >
                                </div>
                                <div class="col-md-12 form-group">
                                    <strong>Inner Heading Content</strong>
                                    <textarea name="ihc" rows="3" class="form-control" placeholder="Content"></textarea >
                                </div>

                                <div class="col-md-6 form-group">
                                    <strong>Image Main 1:</strong>
                                    <input type="file" name="main_image" class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Add Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

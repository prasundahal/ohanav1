@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Project</h3>
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
                                    <strong>Project Name</strong>
                                    <input type="text" name="project_name" class="form-control"
                                           placeholder="Project Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Sub Name</strong>
                                    <input type="text" name="sub_name" class="form-control" placeholder="Sub Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Client</strong>
                                    <input type="text" name="client" class="form-control" placeholder="Client" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Location</strong>
                                    <input type="text" name="location" class="form-control" placeholder="Location" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Surface Area</strong>
                                    <input type="text" name="surfacearea" class="form-control"
                                           placeholder="Surface Area" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Value</strong>
                                    <input type="text" name="value" class="form-control" placeholder="Value" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Year Completed</strong>
                                    <input type="text" name="yearcompleted" class="form-control"
                                           placeholder="Year Completed" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Architech</strong>
                                    <input type="text" name="architech" class="form-control" placeholder="Architech" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Tag</strong>
                                    <input type="text" name="tag" class="form-control" placeholder="Tag" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Inner heading </strong>
                                    <input type="text" name="ih" class="form-control" placeholder="Inner Heading" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <strong>Inner Heading Content</strong>
                                    <textarea name="ihc" rows="3" class="form-control" placeholder="Content"></textarea required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <strong>Image Main 1:</strong>
                                    <input type="file" name="main_image" class="form-control">
                                </div>
                                {{-- <div class="col-md-6 form-group">
                                    <strong>Image inner page 1:</strong>
                                    <input type="file" name="p1" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 2:</strong>
                                    <input type="file" name="p2" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 3:</strong>
                                    <input type="file" name="p3" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 4:</strong>
                                    <input type="file" name="p4" class="form-control">
                                </div> --}}
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

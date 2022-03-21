@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Work Details</h3>
                        <span class="pull-right">
							<a href="{{url('admin/allProjects')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Back to All Work</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateproject',$project->id) }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Work Name</strong>
                                    <input type="text" name="project_name" value="{{ $project->projectName }}"
                                           class="form-control" placeholder="Project Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Work sub Name</strong>
                                    <input type="text" name="sub_name" value="{{ $project->subName }}"
                                           class="form-control" placeholder="Project Name" required>
                                </div>




                                <div class="col-md-6 form-group">
                                    <strong>Inner heading </strong>
                                    <input type="text" name="ih" value="{{ $project->innerHeading }}"
                                           class="form-control" placeholder="Inner Heading" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Inner Heading Content</strong>
                                    <textarea rows="3" name="ihc" class="form-control"
                                              placeholder="Content">{{ $project->innerHeadingContent }}</textarea>
                                </div>

                                <div class="col-md-6 form-group">
                                    <strong>Image Main 1:</strong>
                                    <input type="file" name="main_image" value="{{ $project->imgmain }}"
                                           class="form-control">
                                </div>

                            </div>
                            <div class="col-md-2 form-group">
                                <br/>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

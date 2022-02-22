@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Project Details</h3>
                        <span class="pull-right">
							<a href="{{url('admin/allProjects')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Back to All Projects</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateproject',$project->id) }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Project Name</strong>
                                    <input type="text" name="project_name" value="{{ $project->projectName }}"
                                           class="form-control" placeholder="Project Name" required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <strong>Inner Heading Content</strong>
                                    <textarea rows="3" name="sub_name" required value="{{ $project->subName }}" class="form-control"
                                              placeholder="Content">{{ $project->innerHeadingContent }}</textarea>
                                </div>

                                {{-- <div class="col-md-6 form-group">
                                    <strong>Discription:</strong>
                                    <input type="text" name="sub_name" value="{{ $project->subName }}"
                                           class="form-control" placeholder="Sub Name" required>
                                </div> --}}
                                <div class="col-md-6 form-group">
                                    <strong>Client/Total sell:</strong>
                                    <input type="text" name="client" value="{{ $project->client }}" class="form-control"
                                           placeholder="Title" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Location/url</strong>
                                    <input type="text" name="location" value="{{ $project->location }}"
                                           class="form-control" placeholder="Title" required>
                                </div>
                                {{-- <div class="col-md-6 form-group">
                                    <strong>Surface Area</strong>
                                    <input type="text" name="surfacearea" value="{{ $project->surfaceArea }}"
                                           class="form-control" placeholder="Surface Area" required>
                                </div> --}}
                                <div class="col-md-6 form-group">
                                    <strong>Value</strong>
                                    <input type="text" name="value" value="{{ $project->value }}" class="form-control"
                                           placeholder="Value" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Year Completed</strong>
                                    <input type="text" name="yearcompleted" class="form-control" value="{{ $project->yearcompleted }}"
                                           placeholder="Year Completed" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Architech/Platform</strong>
                                    <input type="text" name="architech" value="{{ $project->architech }}"
                                           class="form-control" placeholder="Title" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Tag</strong>
                                    <input type="text" name="tag" value="{{ $project->tag }}" class="form-control"
                                           placeholder="Tag" required>
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
                                {{-- <div class="col-md-6 form-group">
                                    <strong>Image inner page 1:</strong>
                                    <input type="file" name="p1" value="{{ $project->innerimg1 }}" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 2:</strong>
                                    <input type="file" name="p2" value="{{ $project->innerimg2 }}" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 3:</strong>
                                    <input type="file" name="p3" value="{{ $project->innerimg3 }}" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Image inner page 4:</strong>
                                    <input type="file" name="p4" value="{{ $project->innerimg4 }}" class="form-control">
                                </div> --}}
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

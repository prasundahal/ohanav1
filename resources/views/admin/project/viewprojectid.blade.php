@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Project Detail</h3>
                        <span class="pull-right">
							<a href="{{url('admin/allProjects')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Back to All Projects</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Project Name:</strong> {{ $project->projectName }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Sub Name:</strong> {{ $project->subName }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Client:</strong> {{ $project->client }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Inner Heading:</strong> {{ $project->innerHeading }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Inner Heading Content:</strong> {{ $project->innerHeadingContent }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Location:</strong> {{ $project->location }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Tag:</strong> {{ $project->tag }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Surface Area:</strong> {{ $project->surfaceArea }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Year Completed:</strong> {{ $project->yearcompleted }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Value:</strong> {{ $project->value }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Architect:</strong> {{ $project->architech }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Main Image:</strong>
                                    <img alt="" class="rounded" height="50px"
                                         src="{{ asset($project->imgmain) }}">
                                @if(!empty($project->innerimg1))
                                        <strong>Inner Image 1:</strong>
                                        <img alt="" class="rounded" height="50px"
                                             src="{{ asset($project->innerimg1) }}">
                                @endif
                                @if(!empty($project->innerimg2))
                                        <strong>Inner Image 2:</strong>
                                        <img alt="" class="rounded" height="50px"
                                             src="{{ asset($project->innerimg2) }}">
                                @endif
                                @if(!empty($project->innerimg3))
                                        <strong>Inner Image 3:</strong>
                                        <img alt="" class="rounded" height="50px"
                                             src="{{ asset($project->innerimg3) }}">
                                @endif
                                @if(!empty($project->innerimg4))
                                        <strong>Inner Image 4:</strong>
                                        <img alt="" class="rounded" height="50px"
                                             src="{{ asset($project->innerimg4) }}">
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

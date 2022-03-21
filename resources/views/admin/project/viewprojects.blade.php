@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">View Work</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addProject')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Work Name</th>
                                <th>Work Sub Name</th>
                                <th>Inner Heading</th>
                                <th>Inner Heading content</th>

                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $key=>$project)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $project->projectName }}</td>
                                    <td>{{ $project->subName }}</td>

                                    <td>{{ $project->innerHeading }}</td>
                                    <td>{{ $project->innerHeadingContent }}</td>

                                    <td>
                                        <a href="{{ route('viewprojectid',$project->id) }}"><i class="fa fa-eye"></i></a>&nbsp;
                                        <a href="{{ route('editproject',$project->id) }}"><i class="fa fa-edit"></i></a>&nbsp;
                                        <form method="post" id="delete-form-{{ $project->id }}"
                                              action="{{ route('deleteproject',$project->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $project->id }}').submit();}
                                            else{event.preventDefault();}">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

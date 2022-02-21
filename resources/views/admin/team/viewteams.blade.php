@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Team Member</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addTeam')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $key=>$team)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td><img class="rounded" height="50px" src="{{ asset($team->memberImage) }}"></td>
                                    <td>{{ $team->memberName }}</td>
                                    <td>{{ $team->memberPost }}</td>
                                    <td>{{ $team->memberDescription }}</td>
                                    <td><a href="{{ route('editteam',$team->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $team->id }}" action="{{ route('deleteteam',$team->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $team->id }}').submit();}
                                            else{event.preventDefault();}">
                                            <i class="fa fa-trash-o"></i></a></td>
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

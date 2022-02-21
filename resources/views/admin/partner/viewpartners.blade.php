@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Partner Companies</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addPartners')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus">Add New</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($partners as $key=>$partner)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $partner->partnerName }}</td>
                                    <td>{{ str_limit($partner->description,  500)}}...</td>
                                    <td><img alt="" class="rounded" height="50px"
                                             src="{{ URL::to($partner->partnerImage) }}">
                                    </td>
                                    <td><a class="btn btn-raised btn-primary btn-sm"
                                           href="{{ route('editpartner',$partner->id )}}">Edit</a>
                                        ||
                                        <form method="post" id="delete-form-{{ $partner->id }}"
                                              action="{{ route('deletepartner',$partner->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <button onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $partner->id }}').submit();}
                                            else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm">
                                            Delete
                                        </button>
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


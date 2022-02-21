@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Blog Categories</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addBlogCategory')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-hover">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Category</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogcategories as $blogcategory)
                                <tr>
                                    <td scope="row">{{ $blogcategory->id }}</td>
                                    <td>{{ $blogcategory->category }}</td>
                                    <td><a href="{{ route('editcategory',$blogcategory->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp

                                        <form method="post" id="delete-form-{{ $blogcategory->id }}"
                                              action="{{ route('deleteblogcategory',$blogcategory->id) }}"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $blogcategory->id }}').submit();}
                                            else{event.preventDefault();}">
                                            <i class="fa fa-trash-o"></i></a>
                                    </td>
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

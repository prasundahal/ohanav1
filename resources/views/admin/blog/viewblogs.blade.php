@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Blog Posts</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addBlog')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($blogs))
                                @foreach($blogs as $key=>$blog)
                                    <tr>
                                        <td scope="row">{{ $key+1 }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ substr($blog->post, 0,  500)}}...</td>
                                        <td><img alt="" class="rounded" height="50px" src="{{ URL::to($blog->image) }}"></td>
                                        <td><a href="{{ route('editblog',$blog->id )}}"><i class="fa fa-edit"></i></a>
                                            &nbsp;
                                            <form method="post" id="delete-form-{{ $blog->id  }}" action="{{ route('deleteblog',$blog->id ) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <a onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $blog->id  }}').submit();}
                                                else{event.preventDefault();}">
                                                <i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


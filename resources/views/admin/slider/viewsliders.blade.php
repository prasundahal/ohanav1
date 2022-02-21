@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Sliders</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addsliders')}}" class="btn btn-sm btn-primary"> <i
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
                                <th>Sub Title 1</th>
                                <th>Sub Title 2</th>
                                <th>Silder Image</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key=>$slider)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->subtitle1 }}</td>
                                    <td>{{ $slider->subtitle2 }}</td>
                                    <td><img alt="" class="rounded" height="50px" src="{{ URL::to($slider->image) }}">
                                    </td>
                                    <td>{{ $slider->content}}</td>
                                    <td>
                                        <a href="{{ route('editslider',$slider->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $slider->id }}"
                                              action="{{ route('deleteslider',$slider->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $slider->id }}').submit();}
                                            else{event.preventDefault();}">
                                            <i class="fa fa-trash-o"></i></a>
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

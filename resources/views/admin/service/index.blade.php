@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Services</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addService')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Icon
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>
                                        <img src="{{URL::to($service->image)}}" class="img-thumbnail">
                                    </td>
                                    <td>
                                        <i class="{{$service->icon}}"></i>
                                    </td>
                                    <td>
                                        {{$service->service}}
                                    </td>
                                    <td>
                                        {!! $service->description !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('editService',$service->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $service->id  }}" action="{{ route('deleteService',$service->id ) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $service->id  }}').submit();}
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

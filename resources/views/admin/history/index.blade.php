@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Company History</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addHistory')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    S.No.
                                </th>
                                <th>
                                    Year
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Sub Title
                                </th>
                                <th>
                                    Sub Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($histories as $key=>$history)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        {{$history->year}}
                                    </td>
                                    <td>
                                        {{$history->title}}
                                    </td>
                                    <td>
                                        {{$history->content}}
                                    </td>
                                    <td>
                                        {{$history->subtitle}}
                                    </td>
                                    <td>
                                        {{$history->subcontent}}
                                    </td>
                                    <td>
                                        <a href="{{ route('editHistory',$history->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $history->id  }}"
                                              action="{{ route('deleteHistory',$history->id ) }}"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $history->id  }}').submit();}
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

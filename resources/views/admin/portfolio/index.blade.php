@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Company Portfolio</h3>
                        <span class="pull-right">
							<a href="{{url('admin/addPortfolio')}}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Title
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
                            @foreach($portfolios as $portfolio)
                                <tr>

                                    <td>
                                        {{$portfolio->title}}
                                    </td>
                                    <td>
                                        {{$portfolio->content}}
                                    </td>

                                    <td>
                                        <a href="{{ route('editPortfolio',$portfolio->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $portfolio->id  }}" action="{{ route('deletePortfolio',$portfolio->id ) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $portfolio->id  }}').submit();}
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

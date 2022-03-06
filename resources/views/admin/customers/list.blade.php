@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Customers List</h3>
                        <span class="pull-right">
                            <a href="{{ route('admin.currency.create') }}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus">Add New</i></a>
                        </span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Phone</th>
                                    <th>Requested Project</th>
                                    <th>Customer Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $key => $customer)
                                    <tr>
                                        <td scope="row">{{ $key + 1 }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone_number }}</td>
                                        <td>{{ $customer->project != null ? $customer->project->projectName : '' }}</td>
                                        <td>
                                            <textarea style="width:100%">{{ $customer->message }}</textarea>
                                        </td>
                                        <td>

                                            <form method="post" id="delete-form-{{ $customer->id }}"
                                                action="{{ route('admin.customer.delete', $customer->id) }}"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <button onclick="if(confirm('Are you sure to delete this data?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $customer->id }}').submit();}
                                                    else{event.preventDefault();}"
                                                class="btn btn-raised btn-danger btn-sm">
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

@section('script')
    <script>

    </script>
@endsection

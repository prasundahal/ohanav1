@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Currencies List</h3>
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
                                    <th>Currency Code</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($currencies as $key => $currency)
                                    <tr>
                                        <td scope="row">{{ $key + 1 }}</td>
                                        <td>{{ $currency->currency_code }}</td>
                                        <td>{{ $currency->rate }}</td>

                                        <td>
                                            <a class="btn btn-raised btn-primary btn-sm"
                                                href="{{ route('admin.currency.edit', $currency->id) }}">Edit</a>
                                            @if (($currency->currency_code != 'USD') && ($currency->currency_code != 'NPR'))
                                                ||
                                                <form method="post" id="delete-form-{{ $currency->id }}"
                                                    action="{{ route('admin.currency.delete', $currency->id) }}"
                                                    style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                </form>
                                                <button onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $currency->id }}').submit();}
                                                else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            @endif
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

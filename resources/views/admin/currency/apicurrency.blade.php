@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> API Currencies List</h3>
                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Currency Code</th>
                                <th>Rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($currencies as $key=>$currency)
                                <tr>
                                   <td>{{ $key }}</td>
                                   <td>{{ $currency }}</td>
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
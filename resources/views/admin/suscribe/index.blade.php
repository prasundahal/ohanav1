@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Suscribe</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                                <x-alert/>
                                <h5 class="card-title">All Suscribe</h5>

                                <p class="card-text">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>

                                        <td>Email</td>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($messages))
                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>

                                        <td>{{ $message->email }}</td>




                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                @if(!empty($messages))
                                    {{ $messages->links("pagination::bootstrap-4") }}
                                @endif
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection

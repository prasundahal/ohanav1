@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Inbox</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($messages))
                                @foreach($messages as $key=>$message)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ substr($message->message, 0,  20) }}...</td>
                                        <td>@if(!empty($message->file))
                                                <a target="_blank" class="btn btn-raised btn-secondary btn-sm" href="{{ asset('/storage/app/files/') }}/{{ $message->file }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('viewamessage',$message->id) }}"><i class="fa fa-eye"></i></a>&nbsp;
                                            <form method="post" id="delete-form-{{ $message->id }}" action="{{ route('deletemessage',$message->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <a onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $message->id }}').submit();}
                                                else{event.preventDefault();}"><i class="fa fa-trash"></i>
                                            </a>&nbsp;
                                            <a href="mailto:{{ $message->email }}"><i class="fa fa-mail-reply"></i></a>
                                        </td>
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

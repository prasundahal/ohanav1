@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Read Mail</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewMails')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;All Inbox</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row justify-content-center">
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="card card-primary card-outline">
                                    <div class="card-body p-0">
                                        <div class="mailbox-read-info">
                                            <h4>Subject: {{ $message->subject }}</h4><br>
                                            <h6>From: {{ $message->email }}
                                                <span
                                                    class="mailbox-read-time float-right">{{ $message->created_at }}</span>
                                            </h6>
                                        </div>
                                        <!-- /.mailbox-read-info -->
                                        <div class="mailbox-controls with-border text-center">

                                        </div>
                                        <!-- /.mailbox-controls -->
                                        <div class="mailbox-read-message">
                                            <p>{{ $message->message }}</p>

                                        </div>
                                        <!-- /.mailbox-read-message -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer bg-white">
                                        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                            @if(!empty($message->file))
                                                <li>
                                                    <span class="mailbox-attachment-icon"><i
                                                            class="far fa-file-pdf"></i></span>
                                                    <div class="mailbox-attachment-info">
                                                        <a href="{{ asset('/storage/app/files/'.$message->file) }}"
                                                           class="mailbox-attachment-name"><i
                                                                class="fas fa-paperclip"></i> {{ $message->file }}</a>
                                                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span></span>
                          <a href="{{ asset('/storage/app/files/'.$message->file) }}"
                             class="btn btn-default btn-sm float-right" download="{{$message->file}}"><i
                                  class="fas fa-cloud-download-alt"></i></a>
                        </span>
                                                    </div>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>


                                    <!-- /.card-footer -->
                                    <div class="card-footer">

                                        <a href="mailto:{{ $message->email }}" class="btn btn-default"><i
                                                class="fa fa-mail-reply"></i> &nbsp;&nbsp;Reply</a>

                                        <form method="post" id="delete-form-{{ $message->id }}"
                                              action="{{ route('deletemessage',$message->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <button onclick="if(confirm('Are you sure to delete this message?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $message->id }}').submit();}
                                            else{event.preventDefault();}" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i>&nbsp;&nbsp;
                                            Delete
                                        </button>

                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>






    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->
@endsection

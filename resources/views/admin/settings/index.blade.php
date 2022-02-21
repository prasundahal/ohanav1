@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Settings</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateSettings') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Company Name</strong>
                                <input type="text" name="company_name" class="form-control"
                                       value="{{$settings->company_name}}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <strong>Location</strong>
                                <input type="text" name="company_location" value="{{$settings->company_location}}"
                                       class="form-control"
                                       placeholder="Company Address">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" value="{{$settings->email}}" class="form-control"
                                       placeholder="Company Email">
                            </div>
                            <div class="form-group">
                                <strong>Phone Number</strong>
                                <input type="text" name="phone_number" value="{{$settings->phone_number}}"
                                       class="form-control"
                                       placeholder="Company Phone Number">
                            </div>
                            <div class="form-group">
                                <strong>Client</strong>
                                <input type="text" name="client" value="{{$settings->client}}"
                                       class="form-control"
                                       placeholder="Client">
                            </div>
                            <div class="form-group">
                                <strong>Years Completed</strong>
                                <input type="text" name="years" value="{{$settings->years}}"
                                       class="form-control"
                                       placeholder="Years">
                            </div>
                            <div class="form-group">
                                <strong>Type of Service</strong>
                                <input type="text" name="types" value="{{$settings->types}}"
                                       class="form-control"
                                       placeholder="Service Type">
                            </div>
                            <div class="form-group">
                                <strong>Architect</strong>
                                <input type="text" name="architect" value="{{$settings->architect}}"
                                       class="form-control"
                                       placeholder="Architect">
                            </div>
                            <div class="form-group">
                                <strong>Facebook</strong>
                                <input type="text" name="facebook" value="{{$settings->facebook}}" class="form-control"
                                       placeholder="FacebookURL">
                            </div>
                            <div class="form-group">
                                <strong>Twitter</strong>
                                <input type="text" name="twitter" value="{{$settings->twitter}}" class="form-control"
                                       placeholder="TwitterURL">
                            </div>
                            <div class="form-group">
                                <strong>LinkedIn</strong>
                                <input type="text" name="linkedin" value="{{$settings->linkedin}}" class="form-control"
                                       placeholder="LinkedInURL">
                            </div>
                            <div class="form-group">
                                <strong>Youtube</strong>
                                <input type="text" name="youtube" value="{{$settings->youtube}}" class="form-control"
                                       placeholder="YoutubeURL">
                            </div>
                            <div class="form-group">
                                <strong>Instagram</strong>
                                <input type="text" name="instagram" value="{{$settings->instagram}}"
                                       class="form-control"
                                       placeholder="InstagramURL">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

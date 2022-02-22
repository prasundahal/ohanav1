@extends('admin.layouts.adminmain')
@section('admincontent')
@php
    $settings = DB::table('settings')->first();
@endphp
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                Dashboard
                                <h5>{{$settings->company_name}}</h5>
                            </h1>
                        </div>
                    </div>
                </div>
                <br>

                <br>

                <!-- /.box-header -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a href="{{ url('admin/allProjects')}}">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="fa fa-edit"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Projects</span>
                                    <span class="info-box-number">{{ $count['projects'] }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a href="{{ url('admin/viewTeams')}}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Team Member </span>
                                    <span class="info-box-number">{{ $count['members'] }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a href="{{ url('admin/viewPartners')}}">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-table"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Partners</span>
                                    <span class="info-box-number">{{ $count['partners'] }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div>
                    <!-- /.col -->
                    {{-- <div class="col-md-3 col-sm-6 col-xs-12">
                        <a href="{{ url('admin/viewBlogs')}}">
                            <div class="info-box">
                                    <span class="info-box-icon bg-yellow"><i
                                            class="nav-icon fa fa-newspaper-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"></span>
                                    <span class="info-box-number">{{ $count['blogs'] }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div> --}}
                    <!-- /.col -->
                </div>

            </div>
        </div>
    </section>
@endsection

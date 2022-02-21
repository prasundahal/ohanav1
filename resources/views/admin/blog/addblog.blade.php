@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Blog</h3>
                        <span class="pull-right">
							<a href="{{url('admin/viewBlogs')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('storeblog') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <strong>Blog Title</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <strong>Category</strong>
                                <select name="category_id" class="browser-default custom-select">

                                    <option value="1" selected>Select Category</option>
                                    @foreach($blogcategories as $blogcategory)
                                        <option value="{{ $blogcategory->id }}">{{ $blogcategory->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Content</strong>
                                <textarea name="post" class="form-control" placeholder="Content" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

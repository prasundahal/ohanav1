@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Currency</h3>
                        <span class="pull-right">
                            <a href="{{ route('admin.currency.index') }}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
                        </span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('admin.currency.update', $currency->id) }}" class="form-image-upload" method="POST"
                            enctype="multipart/form-data" id="form">
                            {{ csrf_field() }}
                            @method('put')
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="currency_code" value="{{ $currency->currency_code }}" class="form-control" placeholder="Eg, INR, NPR">
                                <div class="require text-danger currency_code"></div>
                            </div>


                            <div class="form-group">
                                <strong>Rate</strong>
                                <input type="text" name="rate" value="{{ $currency->rate }}" class="form-control" placeholder="1">
                                <div class="require text-danger rate"></div>
                            </div>
                            <div class="form-group">
                                <strong>Commision</strong>
                                <input type="text" name="commission" value="{{ $currency->commission }}" class="form-control" placeholder="1">
                                <div class="require text-danger commission"></div>
                            </div>
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea name="description" class="form-control" placeholder="Description"
                                    rows="3">{{ $currency->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <strong>Status</strong>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $currency->status == 1 ? 'selected': '' }}>Active</option>
                                    <option value="0" {{ $currency->status == 0  ? 'selected' : ''}}>Inactive</option>
                                </select>
                                <div class="require text-danger status"></div>
                            </div>
                            <div class="form-group">
                                <strong>Upload Icon</strong>
                                <input type="file" name="icon" class="form-control" placeholder="">
                                <div class="require text-danger icon"></div>
                            </div>
                            <div class="form-group">
                                <strong>Upload Image</strong>
                                <input type="file" name="image" class="form-control" placeholder="">
                                <div class="require text-danger image"></div>
                            </div>




                            <div class="form-group">
                                <br>
                                <button type="button" onclick="submitForm(event);" class="btn btn-success"
                                    id="mybutton">Add</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        function submitForm(e) {
            e.preventDefault();
            $('.require').css('display', 'none');
            let url = $("#form").attr("action");
            $.ajax({
                url: url,
                type: 'post',
                data: new FormData(this.form),
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    $("#mybutton").attr("disabled", true);
                },
                success: function(data) {
                    if (data.db_error) {
                        $(".alert-warning").css('display', 'block');
                        $(".db_error").html(data.db_error);
                        toastr.warning(data.db_error);
                    } else if (data.errors) {
                        var error_html = "";
                        $.each(data.errors, function(key, value) {
                            error_html = '<div>' + value + '</div>';
                            $('.' + key).css('display', 'block').html(error_html);
                        });
                    } else if (!data.errors && !data.db_error) {
                        location.href = data.redirectRoute;
                        toastr.success(data.msg);
                    }
                },
                complete: function() {
                    $("#mybutton").attr("disabled", false);
                }
            });
        }
    </script>
@endsection

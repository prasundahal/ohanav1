@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Base Currency</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('admin.currency.updateOrCreate') }}" class="form-image-upload" method="POST"
                            enctype="multipart/form-data" id="form">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="base_currency_id" value="{{ isset($base->currency_id) ? $base->id : '' }}">
                            <div class="form-group">
                                <strong>Base Currency<strong>
                                <select name="currency_id" class="form-control">
                                    <option value="">Select Currency</option>
                                    @foreach($currencies as $currency)
                                    <option value="{{ $currency->id }}" {{ isset($base->currency_id) && $currency->id == $base->currency_id ? 'selected' : '' }}>{{ $currency->currency_code }}</option>
                                    @endforeach
                                </select>
                                <div class="require text-danger currency_id"></div>
                            </div>


                           <div class="form-group">
                                <br>
                                <button type="button" onclick="submitForm(event);" class="btn btn-success" id="mybutton">Add</button>
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
                beforeSend: function(){
                    $("#mybutton").attr("disabled", true);
                },
                success: function(data) {
                    console.log(data);
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
                        
                        toastr.success(data.msg);
                        location.reload();
                    }
                }, 
                complete: function(){
                    $("#mybutton").attr("disabled", false);
                }
            });
        }
</script>
@endsection
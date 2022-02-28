<?php
$currencies = App\Models\Currency::get();
?>
<!-- Modal -->
<div class="modal fade" id="currencyModal" tabindex="-1" aria-labelledby="currencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="currencyModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first_value">
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="first_select">
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency->rate }}">{{ $currency->currency_code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="second_value">
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" id="second_select">
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency->rate }}">{{ $currency->currency_code }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

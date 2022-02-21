@extends('layouts.main')
@section('content')
<section id="convert" class="padding text-center ptb-xs-40 gray-bg">
<div style="height:100px"></div>
<div class="container mx-auto">
				<div class="row  align-items-center">
					<div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="d-flex justify-content-center">
                         <div class="col-xl-12 form-group" style="margin:0 -14 col-md-6px">
                          <p class="form-group" style="margin-left:8px;margin-bottom:4px;"><h3 class="text-center">Type a value in any of the fields to convert between Length measurements:</h3></p><br>
                          <div class="row">
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group">
                            <label>Feet</label>
                            <input id="inputFeet" class="w3-input mr-md-3 w3-border" type="number" placeholder="Feet" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Meters</label>
                            <input id="inputMeters" class="w3-input mr-md-3 w3-border" type="number" placeholder="Meters" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>

                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Inches</label>
                            <input id="inputInches" class="w3-input mr-md-3 w3-border" type="number" placeholder="Inches" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Centimeters</label>
                            <input id="inputcm" class="w3-input mr-md-3 w3-border" type="number" placeholder="cm" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Yards</label>
                            <input id="inputYards" class="w3-input mr-md-3 w3-border" type="number" placeholder="Yards" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Kilometers</label>
                            <input id="inputKilometers" class="w3-input mr-md-3 w3-border" type="number" placeholder="Kilometers" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-12 form-group w3-margin-top">
                            <label>Miles</label>
                            <input id="inputMiles" class="w3-input mr-md-3 w3-border" type="number" placeholder="Miles" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                          </div>
                          </div>
                         </div>
                        </div>
                    </div>
                </div>
</div>
</section>


@endsection

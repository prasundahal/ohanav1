@extends('layouts.main')
@section('content')

		<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Register"><span>Register</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Register</span>
						</div>

      	</div>

      </div>
    </div>
  </section>
 <!-- Intro Section End-->

  <!-- Login Section -->
  <div id="login" class="ptb ptb-xs-40 page-signin">
    <div class="container">
      <div class="row">
      	<div class="col-sm-12">
        <div class="main-body">
          <div class="body-inner">
            <div class="card bg-white">
              <div class="card-content">
                <section class="logo text-center">
                  <h2>Register</h2>
                </section>
                <form method="POST" action="/register" class="form-horizontal ng-pristine ng-valid">
                  <fieldset>
                      <x-alert/>
                    <div class="form-group">
                      <div class="ui-input-group">
                          @csrf

                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                        <span class="input-bar"></span>
                        <label>Your username</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="ui-input-group">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                        <span class="input-bar"></span>
                        <label>Your email</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="ui-input-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                          <span class="input-bar"></span>
                          <label>Password</label>
                      </div>
                    </div>

                    <div class="spacer"></div>
                    <div class="form-group checkbox-field">
                      <label for="check_box" class="text-small">
                        <input type="checkbox" id="check_box" >
                        <span class="ion-ios-checkmark-empty22 custom-check"></span> By clicking on sign up, you agree to <a href="javascript:;"><i>terms</i></a> and <a href="javascript:;"><i>privacy policy</i></a></label>
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                          </button>

                      </div>
                  </fieldset>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- End Login Section -->

@endsection

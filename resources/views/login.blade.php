@extends('layouts.main')
@section('content')


		<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Login"><span>Login</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Login</span>
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
        	          <h2>Login</h2>
        	        </section>
        	        <form class="form-horizontal ng-pristine ng-valid">
        	          <fieldset>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input type="text" required class="form-control">
        	                <span class="input-bar"></span>
        	                <label>Email</label>
        	              </div>
        	            </div>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input type="text" required class="form-control">
        	                <span class="input-bar"></span>
        	                <label>Password</label>
        	              </div>
        	            </div>
        	          </fieldset>
        	        </form>
        	      </div>
        	      <div class="card-action no-border text-right"> <a href="#/" class="color-primary">Sign in</a> </div>
        	    </div>
        	    <div class="additional-info"> <a href="#/page/signup">Register</a><span class="divider-h"></span><a href="#/page/forgot-password">Forgot your password?</a> </div>
        	  </div>
        	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Login Section -->

  @endsection

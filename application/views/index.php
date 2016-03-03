<?php require_once('partials/header.php') ?>

<body class="page ">
	     
         




	<!-- Body -->

			

				<div class="well">
					<div class="container">
							<h2>Login</h2> 
							<small>Login</small>
					</div>
				</div>

				<div class="container page-contents">


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>



					<!-- Main Section -->
					<section class="row mb-lg">

						<div class="col-sm-3 center-block">
							<div class="loginRow" ng-app="puravoor" ng-controller="LoginFormController">
								<div class="account  panel  panel-flat"  id="login">
									<h4 class="text-center">WELCOME</h4>
									<p class="text-center pv">Sign In to continue.</p>
									<form class="form-horizontal container-fluid" name="login" novalidate>
										<div class="form-group has-feedback" ng-class="{ 'has-error' : login.username.$invalid && !login.username.$pristine }">
											<input id="exampleInputEmail1" type="text" placeholder="Enter username" autocomplete="off" ng-model="username" required="required" class="form-control" />
											<span class="glyphicon glyphicon-user form-control-feedback text-muted"></span>
										</div>
										<div class="form-group has-feedback"ng-class="{ 'has-error' : login.password.$invalid && !login.password.$pristine }">
											<input id="exampleInputPassword1" type="password" placeholder="Password" ng-model="password" required="required" class="form-control" />
											<span class="glyphicon glyphicon-lock form-control-feedback text-muted"></span>
										</div>
										<div class="clearfix">
											<div class="checkbox c-checkbox pull-left mt0">
												<label>
													<input type="checkbox" value="" name="remember" ng-model="login.remember" />
													<span class="fa fa-check"></span>Remember Me</label>
												</div>
												<div class="pull-right">
													<a class="forgot">Forgot your password?</a>
												</div>
											</div>
											<div class="text text-danger form-control-static text-center"   role="alert" ng-show="status">@{{authMsg}}</div>
											<div class="form-group " style="margin-bottom:10px">
												<button type="submit" class="btn btn-block btn-primary mt-lg" ng-click="tryLogin()" ng-disabled="login.$invalid">Login</button>
											</div>
										</form>
									</div>

									<!-- forgot -->
									<div class="account pull-right  panel  panel-flat" style="display:none" id="account">
										<div class="panel-body">
											<p class="text-center pv">PASSWORD RESET</p>
											<form name="fgt" ng-submit="reset()" novalidate>
												<p class="text-center">Fill with your mail to receive instructions on how to reset your password.</p>
												<div class="form-group has-feedback" ng-class="{ 'has-error' : fgt.email.$invalid && !fgt.email.$pristine }" >
													<label for="resetInputEmail1" class="text-muted">Email address</label>
													<input id="resetInputEmail1" type="email" ng-model="email" name="email" placeholder="Enter email"   autocomplete="off" class="form-control" required />
													<span class="fa fa-envelope form-control-feedback text-muted"></span>
												</div>
												<div ng-show="resultb" class="alert alert-danger"> No matching account found</div>
												<div ng-show="resultr" class="alert alert-success"> A mail containing reset link has been sent to your account.</div>
												<button type="submit" ng-disabled="fgt.$invalid" class="btn btn-danger btn-block">Reset</button>
											</form>
										</div>
									</div>
									<!-- forgot -->
								</div>
							</div>

					</section>
				</div>
	


<?php require_once('partials/footer.php') ?>
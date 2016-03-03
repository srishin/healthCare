<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Dashboard | Education Center</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="<?php echo base_url()?>assets/css/material/app.css" rel="stylesheet">
	<style type="text/css">


	</style>
	
</head>

<body class="page ">

	<header>
		<div id="menu">
			<div class=" container top-nav">

				<a href="index.html">
				<img src="<?php echo base_url()?>assets/images/logo.png" alt="Health_Care" class="img-responsive" width="60">
				</a>


			</div>

		</div>
	</header>



	<div class="well">
		<div class="container">
			<h2>Sign Up</h2> 
			<small></small>
		</div>
	</div>

	<div class="container page-contents">
		<!-- Main Section -->
		<section class="row mb-lg">
		<div class="col-sm-3 center-block">
			<form method="post"  action="<?php echo $url ?>">
			<div class="form-group label-floating">
				<label class="control-label" for="">
					First Name
				</label>
				<input  class="form-control" name="fname" id=""/>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="">
					Last Name
				</label>
				<input  class="form-control" name="lname" id=""/>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="">
					Email
				</label>
				<input  class="form-control" name="mail" id=""/>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="">
					Password
				</label>
				<input  class="form-control" name="pass" id=""/>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="">
					Confirm Password
				</label>
				<input  class="form-control" name="cpass" id=""/>
			</div>
			<div class="form-group label-floating">
				<label class="control-label" for="">
					Mobile
				</label>
				<input  class="form-control" name="mob" id=""/>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-primary btn-raised" type="submit">Submit</button>
			</div>
			</form>
		</div>


		</section>
	</div>
	


	<!-- Contacts Footer -->
	<footer class="contacts_wrap bg_tint_dark contacts_style_dark">

		<div class="container">

			<div class="logo form-group">
				<a href="index.html">
					<img src="images/logo.png" alt="Erudo" class="img-responsive center-block">
				</a>
			</div>


			<div class="row">
				<address class="col-xs-6 text-right">
					Phone: +91 9746594857<br>
					Office: +91 7561090677<br/>
				</address>
				<address class="col-xs-6 text-left">
					Erudo<br>   
					Kannur Technolodge<br/>
					Thavakkara<br/>
				</address>
			</div>

		</div>                      
	</footer>
	<!-- /Contacts Footer  -->
	<!-- Copyright -->
	<div class="well mb0 text-center">
		<div class="content_wrap">
			<p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
		</div>
	</div>
	<!-- /Copyright -->


	

	<script src="<?php echo base_url()?>assets/js/material/jquery-1.11.3.min.js"></script>
				<script src="<?php echo base_url()?>assets/js/material/ripples.min.js"></script>
				<script src="<?php echo base_url()?>assets/js/material/material.min.js"></script>
				<script src="<?php echo base_url()?>assets/js/material/snackbar.min.js"></script>
				<script src="<?php echo base_url()?>assets/js/material/bootstrap-tagsinput.js"></script>
				<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
				<!-- Datetimepicker -->
				<script type="text/javascript" src="<?php echo base_url()?>assets/js/material/moment.js"></script>
				<script type="text/javascript" src="<?php echo base_url()?>assets/js/material/bootstrap-datetimepicker.min.js"></script>
				<!-- Rating -->
				<script src="<?php echo base_url()?>assets/js/material/bootstrap-rating.min.js"></script>
				<script src="<?php echo base_url()?>assets/js/material/script.js"></script>
</body>

</html>
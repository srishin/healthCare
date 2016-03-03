<?php require_once('partials/header.php') ?>

<body class="page ">	

	<div class="well">
		<div class="container">
			<h2>Sign up</h2> 
			<small>signup</small>
		</div>
	</div>

	<div class="container page-contents">
		<!-- Main Section -->
		<section class="row mb-lg">

			<form autocomplete="off" method="post" action="<?php echo base_url() ?>index.php/home/doLogin/" >



				<div class="form-group label-floating">
					<label for="Fname" class="control-label">First name</label>
					<input type="text" class="form-control" id="Name" name="name" required>
				</div>


				<div class="form-group label-floating">
					<label class="control-label">Last name</label>
					<input type="text" class="form-control" id="Name" name="name" required>
				</div>


				<div class="form-group label-floating">
					<label for="mail" class="control-label">Email ID</label>
					<input type="email" class="form-control" id="mail"  name="mail">
				</div>
				<div class="form-group label-floating">
					<label for="exampleInputPassword1" class="control-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1"  name="pwd">
				</div>

				<div class="form-group label-floating">
					<label for="pswd" class="control-label">Confirm Password</label>
					<input type="password" class="form-control" id="pswd"  name="cpwd">
				</div>

				<div class="form-group label-floating">
					<label for="dob" class="control-label">Date of birth</label>
					<input type="dob" class="form-control" id="dob"  name="dob"> 

				</div>

                           
				<div>		
                       <input type="radio" class="form-control" id="dob"  name="radio"> Male
                         <input type="radio" class="form-control" id="dob"  name="radio"> Female
				</div>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>

		</section>
	</div>



	<?php require_once('partials/footer.php') ?>
<?php require_once('partials/header.php') ?>

<body class="page ">	

	<div class="well">
		<div class="container">
			<h2> Complete your profile	</h2> 
			<small></small>
		</div>
	</div>

	<div class="container page-contents">
		<!-- Main Section -->
		<section class="row mb-lg">

			<form class="col-sm-4 center-block" autocomplete="off" method="post" action="<?php echo base_url() ?>index.php/home/doLogin/" >



				<div class="form-group label-floating">
					<label for="specialization" class="control-label">Specialization</label>
					<input type="text" class="form-control" id="specialization" name="specialization" required>
				</div>


				<div class="form-group label-floating">
					<label class="control-label">Worked before</label>
					<input type="text" class="form-control" id="Name" name="name" required>
				</div>


				<div class="form-group label-floating">
					<label for="mail" class="control-label">Streat 1</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>
				
				<div class="form-group label-floating">
					<label for="mail" class="control-label">Streat 2</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>

				<div class="form-group label-floating">
					<label for="mail" class="control-label">City</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>

				<div class="form-group label-floating">
					<label for="mail" class="control-label">District</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>

				<div class="form-group label-floating">
					<label for="mail" class="control-label">State</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>

				<div class="form-group label-floating">
					<label for="mail" class="control-label">Citizen</label>
					<input type="add" class="form-control" id="add"  name="add">
				</div>
				
				<button class="btn btn-primary btn-raised" type="submit">Submit</button>
			</form>

		</section>
	</div>



	<?php require_once('partials/footer.php') ?>
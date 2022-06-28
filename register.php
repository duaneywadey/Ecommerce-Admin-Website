

<?php 
session_start(); 

// If a user wants to register, but is already registered

if(isset($_SESSION['auth']))

{
	// Message to display if a user is already registered
	$_SESSION['message'] = "You're already registered";

	// Go to index.php
	header('Location: index.php');

	// Terminate the following script
	exit();
}

include('includes/header.php'); 
?>


<div class="py5">	
	<div class="container">
		<div class="row justify-content-center mt-4">
			<div class="col-md-6">

				<div class="card">

				<?php if(isset($_SESSION['message'])) { ?>
				
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Holy guacamole!</strong> <?= $_SESSION['message']; ?>.
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>

				<?php unset($_SESSION['message']); } ?>

					<div class="card-header">
						<h4>Registration Form</h4>
					</div>
					<div class="card-body">

						<form action="functions/authcode.php" method="POST">
						<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Name</label>
						    <input type="name" name="name" class="form-control" placeholder="Enter your name">
						  </div>

						<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Phone</label>
						    <input type="number" name="phone" class="form-control" placeholder="Enter your phone number">
						  </div>

						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Email address</label>
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
						  </div>
						
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
						  </div>
						
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
						    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
						  </div>
						  <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>
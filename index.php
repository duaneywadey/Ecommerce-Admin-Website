
<?php 

include('includes/header.php'); 

?>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(isset($_SESSION['message'])) { ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Holy guacamole!</strong> <?= $_SESSION['message']; ?>.
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php unset($_SESSION['message']); } ?>

				<?php if(isset($_SESSION['auth'])) { ?>

				<h1>Hello, <?= $_SESSION['auth_user']['name']; ?> <i class="fa fa-user-circle-o" aria-hidden="true"></i></h1>

				<?php } else { ?>

				<h1>Welcome to the E-commerce Homepage!</h1>

				<?php } ?>

				<img src="https://cdn.pixabay.com/photo/2018/07/26/09/56/ecommerce-3563183_960_720.jpg" alt="">

			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>
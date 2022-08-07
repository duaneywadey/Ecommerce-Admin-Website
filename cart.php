
<?php
include('functions/userfunctions.php');  
include('includes/header.php'); 


?>

<div class="py-3 bg-primary">	
	<div class="container">	
		<h6 class="text-white">
			<a href="index.php" class="text-white" style="text-decoration: none;">
			Home / 
			</a>

			<a href="cart.php" class="text-white" style="text-decoration: none;">
			Cart
			</a>	
		</h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $items = getCartItems();

				foreach ($items as $citem) {
					echo $citem['name'];
				}
				?>
			</div>	
		</div>
	</div>
</div>





<?php include('includes/footer.php'); ?>
<?php
include('includes/header.php'); 
include('functions/userfunctions.php'); 

if(isset($_GET['product']))
{
	// Get product slug from HTML
	$product_id = $_GET['product'];

	// Get table and slug value
	$product_data = getIDActive('products', $product_id);	

	// Store into array
	$product = mysqli_fetch_array($product_data);



	if($product)
	{

		?>
		<div class="py-3 bg-primary">	
			<div class="container">	
				<h6 class="text-white">Home / Collections / <?= $product['name']; ?></h6>
			</div>
		</div>

		<div class="bg-light py-4">
			<div class="container">
				<div class="row mt-4">
					<div class="col-md-4">
						<img src="uploads/<?= $product['image']; ?>" alt="Product Image" class="img-responsive w-100">
					</div>
					<div class="col-md-8">
						<h4 class="fw-bold"><?= $product['name']; ?>

						<span class="float-end text-primary">	
							<?php 

							if($product['trending'])
							{
								echo "TRENDING";
							}

							?>

						</span>

						</h4>

						<hr>
						<p class="text-justify"><?= $product['small_description']; ?></p>
						<div class="row">

							<div class="col-md-6">
								<h5>Selling price: <span class="text-success fw-bold"><i class="fa fa-usd" aria-hidden="true"></i><?= $product['selling_price']; ?></span></h5>
							</div>

							<div class="col-md-6">
								<h5>Original price:<s class="text-danger"><i class="fa fa-usd" aria-hidden="true"></i><?= $product['original_price']; ?></s></h5>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">	
								<input type="text"class="form-control">
							</div>	
						</div>

						<div class="row mt-3">
							<div class="col-md-6">
								<button class="btn btn-primary"><i class="fa fa-shopping-cart me-2"></i>Add to cart</button>	
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger"><i class="fa fa-shopping-cart me-2"></i>Add to wishlist</button>	
							</div>	
						</div>

						<hr>
						<h6>Product Description</h6>
						<p class="text-justify"><?= $product['description']; ?></p>
					</div>
				</div>
			</div>
		</div>


		


		<?php

	}

	else 
	{
		echo "Something went wrong!";
	}
}

else
{
	echo "Product not found!";
}


include('includes/footer.php');
?>
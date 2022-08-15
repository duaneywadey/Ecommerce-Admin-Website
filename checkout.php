
<?php
include('functions/userfunctions.php');  
include('includes/header.php');
include('authenticate.php');

?>

<div class="py-3 bg-primary">	
	<div class="container">	
		<h6 class="text-white">
			<a href="index.php" class="text-white" style="text-decoration: none;">
			Home / 
			</a>

			<a href="checkout.php" class="text-white" style="text-decoration: none;">
			Checkout
			</a>	
		</h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="row py-4 px-4">	
						<div class="col-md-8">
							<h5 class="card-title">Basic Details</h5>
							<hr>
							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="exampleInputEmail1">Name</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
								</div>
								<div class="col-md-6 mb-3">
									<label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
								</div>
								<div class="col-md-6 mb-3">
									<label for="exampleInputEmail1">Phone</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your phone number">
								</div>
								<div class="col-md-6 mb-3">
									<label for="exampleInputEmail1">PIN Code</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter PIN code">
								</div>
								<div class="col-md-12">
									<label for="exampleFormControlTextarea1">Address</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your complete address"></textarea>
								</div>	
							</div>
						</div>
						<div class="col-md-4">
							<h5 class="card-title">Order Details</h5>
							<hr>
							<div class="row">
								<div class="col-md-12 scroll">
									<div class="table-responsive">
										<table class="table" id="carts_table">
										  <thead>
										    <tr>
										      <th scope="col">Product</th>
										      <th scope="col">Description</th>
											  <th scope="col">Selling Price</th>
										      <th scope="col">Quantity</th>
										    </tr>
										  </thead>
										  <?php $items = getCartItems();
											foreach ($items as $citem) { 
											?>
										  <tbody>
											<tr>
												<td><img src="uploads/<?= $citem['image'] ?>" alt="" width="100" height="100"></td>
												<td><?=$citem['name']?></td>
												<td>₱ <?=$citem['selling_price']?></td>
												<td><?= $citem['prod_qty']?></td>
											</tr>
											<?php } ?>
										  </tbody>
										</table>
									</div>
									<?php 
									$totalPrice=0;
									$totalPrice += $citem['selling_price'] * $citem['prod_qty']; 
									?>
									<h4>Total Price: <span class="float-end">₱<?= $totalPrice ?></span></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="float-end mt-4">
					<a href="checkout.php" class="btn btn-outline-primary"> <i class="fa fa-shopping-cart "></i> Proceed to checkout</a>
				</div>
			</div>	
		</div>
	</div>
</div>





<?php include('includes/footer.php'); ?>

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
				<div class="table-responsive">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Product</th>
				      <th scope="col">Description</th>
					  <th scope="col">Selling Price</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $items = getCartItems();
					foreach ($items as $citem) {
					?>
					<tr>
						<td><img src="uploads/<?= $citem['image'] ?>" alt="" width="100" height="100"></td>
						<td><?=$citem['name']?></td>
						<td>₱ <?=$citem['selling_price']?></td>
						<td>
							<div class="input-group mb-3" style="width: 130px;">
								<button class="input-group-text decrement-btn">-</button>
								<input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty']?>">
								<button class="input-group-text increment-btn">+</button>
							</div>
						</td>
						<td><button class="btn btn-danger">Remove</button></td>
					</tr>
					<?php } ?>
				  </tbody>
				</table>
			</div>
			</div>	
		</div>
	</div>
</div>





<?php include('includes/footer.php'); ?>
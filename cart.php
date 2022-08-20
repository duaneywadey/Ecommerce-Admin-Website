
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
					<table class="table" id="carts_table">
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

					  	if(mysqli_num_rows($items) > 0) {
							foreach ($items as $citem) {
						?>
						<tr>
							<td><img src="uploads/<?= $citem['image'] ?>" alt="" width="100" height="100"></td>
							<td><?=$citem['name']?></td>
							<td>₱ <?=$citem['selling_price']?></td>
							<td>
								<div class="input-group mb-3 product_data" style="width: 130px;">
									<input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
									<button class="input-group-text decrement-btn updateQty">-</button>
									<input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty']?>">
									<button class="input-group-text increment-btn updateQty">+</button>
								</div>
							</td>
							<td><button class="btn btn-danger deleteItem" value="<?= $citem['cid'] ?>"><i class="fa fa-trash"></i> Remove</button></td>
						</tr>
						<?php 

								} 
							}

						else
						{

						?>
					  </tbody>
					</table>
				</div>

				<h3>Add new items to your cart!</h3>
				<img src="https://media0.giphy.com/media/1kTUdMFdPhmQBBt2Uu/giphy.gif" alt="">

				<?php } ?>
				<div class="float-end">
					<a href="checkout.php" class="btn btn-outline-primary"> <i class="fa fa-shopping-cart "></i> Proceed to checkout</a>
				</div>	
			</div>
		</div>
	</div>
</div>







<?php include('includes/footer.php'); ?>
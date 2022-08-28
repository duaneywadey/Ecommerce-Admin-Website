
<?php

include('functions/userfunctions.php');  
include('includes/header.php');
include('authenticate.php');

if(isset($_GET['t']))
{
	$tracking_no = $_GET['t'];
	$orderData = checkTrackingNoValid($tracking_no);

	if(mysqli_num_rows($orderData) < 0)
	{
		echo "<h4>Something went wrong</h4>";
		die();

	}
}
else
{
	echo "<h4>Something went wrong</h4>";
	die();  
}

$data = mysqli_fetch_array($orderData);

?>

<div class="py-3 bg-primary">	
	<div class="container">	
		<h6 class="text-white">
			<a href="index.php" class="text-white" style="text-decoration: none;">
			Home / 
			</a>
			<a href="my-orders.php" class="text-white" style="text-decoration: none;">
			My Orders / 
			</a>
			<a href="my-orders.php" class="text-white" style="text-decoration: none;">
			View Orders
			</a>	
		</h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						View Order
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<h3>Delivery Details</h3>
								<hr>
								<div class="row">
									<div class="col-md-12 mb-4">
										<label class="fw-bold">Name</label>
										<div class="border p-1">
										<?= $data['name']; ?>
										</div>	
									</div>
									<div class="col-md-12 mb-4">
										<label class="fw-bold">Email</label>
										<div class="border p-1">
										<?= $data['email']; ?>
										</div>	
									</div>
									<div class="col-md-12 mb-4">
										<label class="fw-bold">Phone</label>
										<div class="border p-1">
										<?= $data['phone']; ?>
										</div>	
									</div>
									<div class="col-md-12 mb-4">
										<label class="fw-bold">Tracking No.</label>
										<div class="border p-1">
										<?= $data['tracking_no']; ?>
										</div>	
									</div>
									<div class="col-md-12 mb-4">
										<label class="fw-bold">PIN Code</label>
										<div class="border p-1">
										<?= $data['pincode']; ?>
										</div>	
									</div>
									<div class="col-md-12 mb-4">
										<label class="fw-bold">Date Added</label>
										<div class="border p-1">
										<?= $data['created_at']; ?>
										</div>	
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h3>Order Details</h3>
								<hr>
								<div class="table-responsive">
									<table class="table">
										<thead>
										    <tr>
										      <th scope="col">Product</th>
											  <th scope="col">Selling Price</th>
										      <th scope="col">Quantity</th>
										    </tr>
										</thead>
										<tbody>
										<?php
										$userID = $_SESSION['auth_user']['user_id'];
										$order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p WHERE o.user_id='$userID' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no' ";
										$order_query_run = mysqli_query($con, $order_query);

										if(mysqli_num_rows($order_query_run) > 0)
										{
											foreach ($order_query_run as $item) {
										?>
											<tr>
												<td><img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100" height="100"></td>
												<td><?= $item['price']; ?></td>
												<td><?= $item['orderqty']; ?></td>
											</tr>
										<?php

											}
										}
										else
										{
											echo "no data";
										}
										?> 
										</tbody>
									</table>
									<hr>
									<h4>Total price: <span class="float-end"><?= $data['total_price']; ?></span></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<?php include('includes/footer.php'); ?>
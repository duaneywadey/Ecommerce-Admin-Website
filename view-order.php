
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
			My Orders
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
								<div class="border p-1">
									<?= $data['name']; ?>
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
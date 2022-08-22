
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

			<a href="my-orders.php" class="text-white" style="text-decoration: none;">
			My Orders
			</a>	
		</h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<?php $orders = getOrders(); 
			if(mysqli_num_rows($orders) > 0) {
				foreach ($orders as $item) {
			?>

			<div class="col-md-3 mb-4">
				<div class="card">
					<div class="card-body">
						<img src="https://w7.pngwing.com/pngs/311/42/png-transparent-freight-transport-computer-icons-car-ship-shipping-angle-logo-cargo.png" width="250" height="250" alt="">
						<p><?=$item['id']?></p>
						<p><?=$item['tracking_no']?></p>
						<p><?=$item['total_price']?></p>
						<p><?=$item['created_at']?></p>
					</div>
				</div>
			</div>
			<?php 

				} 

			} 

			else 
			{
				echo "<p>No data available</p>";
			}
			?>

		</div>
	</div>
</div>





<?php include('includes/footer.php'); ?>
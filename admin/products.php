<?php 

include('includes/header.php');
include('../middleware/adminMiddleware.php');


?>




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Products</h3>
				</div>
				<div class="card-body" id="products_table">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								<th>Status</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							 <?php 

							 // Display all records to a table

							 $products = getAll('products'); 

							 if(mysqli_num_rows($products) > 0)
							 {

							 	// Get each record using foreach loop

							 	foreach($products as $item)
							 	{
							 		?>

							 	<tr>
									<td><?= $item['id'];?></td>
									<td><?= $item['name'];?></td>

									<td>
										<img src="../uploads/<?= $item['image']; ?>" width="150px" height="150px" alt= "<?= $item['name']; ?>">
									</td>


									<td><?= $item['status'] == '0' ? "Visible": "Hidden" ?></td>


									<!-- Edit a record from the table -->
									<td>
										<a href="edit-product.php?id=<?= $item['id'];?>" class="btn btn-primary">Edit</a>
									</td>

									<td>							
										<button type="button" class="btn btn-danger delete_product_btn" value="<?= $item['id']; ?>">Delete</button>
									</td>


								</tr>

									<?php

								 	}
								 }

								 else
								 {
								 	echo "No records found";
								 }

								 ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
 

<?php include('includes/footer.php')?>

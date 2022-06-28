<?php 

include('includes/header.php');
include('../middleware/adminMiddleware.php');


?>




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Categories</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								<th>Status</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							 <?php 

							 // Display all records to a table

							 $category = getAll('categories'); 

							 if(mysqli_num_rows($category) > 0)
							 {

							 	// Get each record using foreach loop

							 	foreach($category as $item)
							 	{
							 		?>

							 	<tr>
									<td><?= $item['id'];?></td>
									<td><?= $item['name'];?></td>

									<td>
										<img src="../uploads/<?= $item['image']; ?>" width="200px" height="200px" alt= "<?=item['name']; ?>">
									</td>


									<td><?= $item['status'] == '0' ? "Visible": "Hidden" ?></td>
									<td>
										<a href="#" class="btn btn-primary">Edit</a>
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

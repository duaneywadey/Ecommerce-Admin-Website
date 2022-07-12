<?php 
include('includes/header.php');
include('../middleware/adminMiddleware.php');


?>

<!-- Add cards for better UI -->

<div class="container">
	<div class="row">
		<div class="col-md-12">	
			<div class="card">
				<div class="card-header">
					<h4>Add Product </h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<label for="">Select Category</label>
								<select name="category_id" class="form-select mb-2">
								  <option selected>Select Category</option>
								  <!-- Displaying the categories as a list -->
								<?php 

									$categories = getAll('categories');

									if(mysqli_num_rows($categories) > 0)
									{
										foreach($categories as $item)	{

								?>
								  
								  	<option value="<?= $item['id']; ?>"> <?= $item['name']; ?> </option>

								<?php
										} 

									} 

									else 
									{
										echo "No category available";
									}
								?>


								</select>
							</div>
							<div class="col-md-6">
								<label for="">Name</label>
								<input type="text" required name="name" class="form-control mb-2" placeholder="Enter Category Name" >
							</div>
							<div class="col-md-6">
								<label for="">Slug</label>
								<input type="text" required name="slug" class="form-control mb-2" placeholder="Enter Slug">
							</div>
							<div class="col-md-12">
								<label for="">Small Description</label>
								<textarea rows="3" required name="small_description" class="form-control mb-2" placeholder="Enter Description"></textarea>
							</div>
							<div class="col-md-12">
								<label for="">Description</label>
								<textarea rows="3" required name="description" class="form-control mb-2" placeholder="Enter Description"></textarea>
							</div>
							<div class="col-md-6">
								<label for="">Original Price</label>
								<input type="number" required name="original_price" class="form-control mb-2" placeholder="Enter Category Name" >
							</div>
							<div class="col-md-6">
								<label for="">Selling Price</label>
								<input type="number" required name="selling_price" class="form-control mb-2" placeholder="Enter Slug">
							</div>
							<div class="col-md-12">
								<label for="">Upload Image</label>
								<input type="file" required name="image" class="form-control mb-2">
							</div>

							<div class="row">
								<div class="col-md-6">
									<label for="">Quantity</label>
									<input type="number" required name="qty" class="form-control mb-2" placeholder="Enter Quantity">
								</div>
								<div class="col-md-3 mt-5">
									<label for="">Hidden</label>
									<input type="checkbox"  name="status">
								</div>
								<div class="col-md-3 mt-5">
									<label for="">Visible</label>
									<input type="checkbox"  name="trending">	
								</div>
							</div>

							<div class="col-md-12">
								<label for="">Meta Title</label>
								<input type="text" required name="meta_title" class="form-control mb-2" placeholder="Enter Title">
							</div>
							<div class="col-md-12">
								<label for="">Meta Description</label>
								<textarea rows="3" required name="meta_description" class="form-control mb-2" placeholder="Enter Meta Description"></textarea>
							</div>
							<div class="col-md-12">
								<label for="">Meta Keywords</label>
								<textarea rows="3" required name="meta_keywords" class="form-control mb-2" placeholder="Enter Keywords"></textarea>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary" required name="add_product_btn">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>			
			</div>
		</div>	
	</div>
</div>
<?php include('includes/footer.php')?>

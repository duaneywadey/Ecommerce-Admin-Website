<?php 
include('includes/header.php');
include('../middleware/adminMiddleware.php');


?>

<!-- Add cards for better UI -->

<div class="container">
	<div class="row">
		<div class="col-md-12">	

			<?php 

				# If product ID exists, perform this condition 

				if(isset($_GET['id']))
				{
					$id = $_GET['id'];
					$product = getByID('products', $id);

					if(mysqli_num_rows($product) > 0)
					{
						# Will store the data from a given row 

						$data = mysqli_fetch_array($product)
			?>
					<div class="card">
						<div class="card-header">
							<h4>Edit Product</h4>
							<a href="products.php" class="btn btn-primary float-end">Back</a>
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
										  
										  	<option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']? 'selected':'' ?>> 

										  		<?= $item['name']; ?>

										  	</option>

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
									<input type="hidden" name="product_id" value="<?= $data['id']; ?>">
									<div class="col-md-6">
										<label for="">Name</label>
										<input type="text" required name="name" value="<?= $data['name']; ?>" class="form-control mb-2" placeholder="Enter Category Name" >
									</div>
									<div class="col-md-6">
										<label for="">Slug</label>
										<input type="text" required name="slug" value="<?= $data['slug']; ?>" class="form-control mb-2" placeholder="Enter Slug">
									</div>
									<div class="col-md-12">
										<label for="">Small Description</label>
										<textarea rows="3" required name="small_description" class="form-control mb-2" placeholder="Enter Description"><?= $data['small_description']; ?> </textarea>
									</div>
									<div class="col-md-12">
										<label for="">Description</label>
										<textarea rows="3" required name="description" class="form-control mb-2" placeholder="Enter Description"> <?= $data['description']; ?> </textarea>
									</div>
									<div class="col-md-6">
										<label for="">Original Price</label>
										<input type="number" required name="original_price" value="<?= $data['original_price']; ?>" class="form-control mb-2" placeholder="Enter Category Name" >
									</div>
									<div class="col-md-6">
										<label for="">Selling Price</label>
										<input type="number" required name="selling_price" value="<?= $data['selling_price']; ?>" class="form-control mb-2" placeholder="Enter Slug">
									</div>
									<div class="col-md-12">
										<label for="">Upload Image</label>
										<input type="hidden" name="old_image" value="<?= $data['image']; ?>">
										<input type="file" name="image" class="form-control mb-2">
										<label for="" class="mb-0">Current Image</label>
										<img src="../uploads/<?= $data['image']; ?>" alt="Product Image" height="50px" width="50px">
									</div>

									<div class="row">
										<div class="col-md-6">
											<label for="">Quantity</label>
											<input type="number" required name="qty" value="<?= $data['qty']; ?>" class="form-control mb-2" placeholder="Enter Quantity" >
										</div>
										<div class="col-md-3 mt-5">
											<label for="">Hidden</label>
											<input type="checkbox" name="status" <?= $data['status'] == '0' ? '' : 'checked'?>>
										</div>
										<div class="col-md-3 mt-5">
											<label for="">Visible</label>
											<input type="checkbox"  name="trending" <?= $data['trending'] == '0' ? '': 'checked'?>>	
										</div>
									</div>

									<div class="col-md-12">
										<label for="">Meta Title</label>
										<input type="text" required name="meta_title"  value="<?= $data['meta_title']; ?>" class="form-control mb-2" placeholder="Enter Title">
									</div>
									<div class="col-md-12">
										<label for="">Meta Description</label>
										<textarea rows="3" required name="meta_description" class="form-control mb-2" placeholder="Enter Meta Description"><?= $data['meta_description']; ?></textarea>
									</div>
									<div class="col-md-12">
										<label for="">Meta Keywords</label>
										<textarea rows="3" required name="meta_keywords" class="form-control mb-2" placeholder="Enter Keywords"><?= $data['meta_keywords']; ?> </textarea>
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary" required name="update_product_btn">
											Save
										</button>
									</div>
								</div>
							</form>
						</div>			
					</div>

			<?php 

					}

					else 
					{
						echo "Product not found!";
					}
				}

				else
				{
					echo "ID missing from the URL";
				} 

			?>

		</div>	
	</div>
</div>
<?php include('includes/footer.php')?>

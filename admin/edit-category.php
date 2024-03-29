z<?php 
include('includes/header.php');
include('../middleware/adminMiddleware.php');


?>

<!-- Add cards for better UI -->

<div class="container">
	<div class="row">
		<div class="col-md-12">	
			<?php if(isset($_GET['id'])) { 

				$id = $_GET['id']; 	
				$category = getByID("categories", $id);

				if(mysqli_num_rows($category) > 0)

				{

					# '$data' will store each columns from the category table

					$data = mysqli_fetch_array($category);


			?>

					<div class="card">
						<div class="card-header">
							<h4>Edit Category </h4>
						</div>
						<div class="card-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">
								<div class="row">

									<div class="col-md-6">

										<label for="">Name</label>

										<input type="hidden" name="category_id" value="<?= $data['id'] ?>" class="form-control" placeholder="Enter Category Name" >

										<!-- Store database records to the value parameter -->

										<input type="text" name="name" value="<?= $data['name'] ?>" class="form-control" placeholder="Enter Category Name" >


									</div>
									<div class="col-md-6">
										<label for="">Slug</label>
										<input type="text" name="slug" value="<?= $data['slug'] ?>" class="form-control" placeholder="Enter Slug">
									</div>
									<div class="col-md-12">
										<label for="">Description</label>
										<textarea rows="3" name="description" class="form-control" placeholder="Enter Description"> <?= $data['description'] ?></textarea>
									</div>


									<div class="col-md-12">

										<label for="">Upload Image</label>
										<input type="file" name="image" class="form-control">


										<label for="">Current Image</label>
										<input type="hidden" name="old_image" value="<?= $data['image'] ?>">
										<img src="../uploads/<?= $data['image'] ?>" alt="" height="100px" width="100px">


									</div>


									<div class="col-md-12">
										<label for="">Meta Title</label>
										<input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" class="form-control" placeholder="Enter Title">
									</div>
									<div class="col-md-12">
										<label for="">Meta Description</label>
										<textarea rows="3" name="meta_description" class="form-control" placeholder="Enter Meta Description"><?= $data['meta_description'] ?></textarea>
									</div>
									<div class="col-md-12">
										<label for="">Meta Keywords</label>
										<textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter Keywords"><?= $data['meta_keywords'] ?></textarea>
									</div>
									<div class="col-md-6">
										<label for="">Hidden</label>
										<input type="checkbox" <?= $data['status'] ? "checked":"" ?>name="status">
									</div>
									<div class="col-md-6">
										<label for="">Visible</label>
										<input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary" name="update_category_btn">
											Update
										</button>
									</div>
								</div>
							</form>
						</div>			
					</div>

			<!-- Opened a closing statement here for the if/else -->

			<?php

				}
			

			else 
			{
				echo "Category not found";
			}


			?>

			

			<?php } else { echo "Something went wrong"; } ?>
		</div>	
	</div>
</div>
<?php include('includes/footer.php')?>

<?php

include('../config/dbcon.php');
include('../functions/myfunctions.php');

if(isset($_POST['add_category_btn']))
{
	$name = $_POST['name'];
	$slug = $_POST['slug'];
	$description = $_POST['description'];
	$meta_title = $_POST['meta_title'];
	$meta_description = $_POST['meta_description'];
	$meta_keywords = $_POST['meta_keywords'];

	// If this is checked, set status=1; HIDDEN
	$status = isset($_POST['status']) ? '1':'0' ;

	// If this is checked set, set popular=1; VISIBLE
	$popular = isset($_POST['popular']) ? '1':'0' ;

	// Variable for the image files
	$image = $_FILES['image']['name'];

	// Store to this folder
	$path = "../uploads";


	$image_ext = pathinfo($image, PATHINFO_EXTENSION);
 
	$filename = time().'.'.$image_ext;

	$cate_query = "INSERT INTO categories
	(name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image) VALUES('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keywords', '$status', '$popular', '$filename') ";

	$cate_query_run = mysqli_query($con, $cate_query);

	if($cate_query_run)
	{ 
		move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

		redirect("add-category.php", "Category added successfully");
	}
	else 
	{
		redirect("../index.php", "Something's wrong with the query. Please check your inputs carefully");
	}

}

else if(isset($_POST['update_category_btn']))
{
	$category_id = $_POST['category_id']; 
	$name = $_POST['name'];
	$slug = $_POST['slug'];
	$description = $_POST['description'];
	$meta_title = $_POST['meta_title'];
	$meta_description = $_POST['meta_description'];
	$meta_keywords = $_POST['meta_keywords'];
	$status = isset($_POST['status']) ? '1':'0' ;
	$popular = isset($_POST['popular']) ? '1':'0' ;

	// Use this variable for uploading new image 
	$new_image = $_FILES['image']['name'];

	// Store old image here
	$old_image = $_POST['old_image'];

	// If new image field is not empty, update image 
	if($new_image != "")
	{
		// $update_filename = $new_image;
		$image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
		$update_filename = time().'.'.$image_ext;
	}

	// If it is empty, use old image	 
	else
	{
		$update_filename = $old_image;
	}

	$path = "../uploads";

	$update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title', meta_description='$meta_description', meta_keywords='$meta_keywords', status='$status', popular='$popular', image='$update_filename' WHERE id= '$category_id' ";

	$update_query_run = mysqli_query($con, $update_query);

	if($update_query_run)
	{
		if($_FILES['image']['name'] != "")
		{
			move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);

			if(file_exists("../uploads/".$old_image))
			{
				unlink("../uploads".$old_image);
			}

		}
		redirect("category.php", "Category updated successfully!");
	}

	else 
	{
		redirect("edit-category.php?id=$category_id", "Update failed");		
	}
}

else if(isset($_POST['delete_category_btn']))
{
	$category_id = mysqli_real_escape_string($con, $_POST['category_id']);

	$category_query = "SELECT * FROM categories WHERE id='$category_id' ";
	$category_query_run = mysqli_query($con, $category_query);
	$category_data = mysqli_fetch_array($category_query_run);

	$image = $category_data['image'];

	$delete_query = "DELETE FROM categories WHERE id='$category_id' ";

	$delete_query_run = mysqli_query($con, $delete_query);

	if($delete_query_run)
	{
		if(file_exists("../uploads/".$image))
		{
		    unlink("../uploads/".$image);
		}

		// redirect("products.php", "Category deleted");

		echo 200;
	}
	else
	{
		// redirect("products.php", "Something went wrong");	
		echo 500;	
	}
}

else if(isset($_POST['add_product_btn']))
{
	$category_id = $_POST['category_id']; 

	$name = $_POST['name'];
	$slug = $_POST['slug'];
	$small_description = $_POST['small_description'];
	$description = $_POST['description'];
	$original_price = $_POST['original_price'];
	$selling_price = $_POST['selling_price'];
	$qty = $_POST['qty'];
	$meta_title = $_POST['meta_title'];
	$meta_description = $_POST['meta_description'];
	$meta_keywords = $_POST['meta_keywords'];

	// If this is checked, set status=1; HIDDEN
	$status = isset($_POST['status']) ? '1':'0' ;

	// If this is checked, set trending=1; VISIBLE
	$trending = isset($_POST['trending']) ? '1':'0' ;	

	// Variable for the image files
	$image = $_FILES['image']['name'];

	// Store to this folder
	$path = "../uploads";

	$image_ext = pathinfo($image, PATHINFO_EXTENSION);
 
	$filename = time().'.'.$image_ext;

	if($name != '' && $slug != '' &&description != '')
	{
		$product_query = "INSERT INTO products (category_id,name,slug,small_description,description,original_price,selling_price,qty,meta_title,meta_description,meta_keywords,status,trending,image)

		VALUES('$category_id', '$name', '$slug', '$small_description', '$description', '$original_price', '$selling_price', '$qty', '$meta_title', '$meta_description', '$meta_keywords', '$status', '$trending', '$filename') ";

		$product_query_run = mysqli_query($con, $product_query);

		if($product_query_run)
		{
			move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

			redirect("add-product.php", "Category added successfully");	
		}
		else 
		{
			redirect("add-product.php", "Something went wrong to the query!");	
		}

	}

	else 
	{
		redirect("add-product.php", "Something went wrong!");	
	}
}

else if(isset($_POST['update_product_btn']))
{
	$product_id = $_POST['product_id'];
	$category_id = $_POST['category_id']; 

	$name = $_POST['name'];
	$slug = $_POST['slug'];
	$small_description = $_POST['small_description'];
	$description = $_POST['description'];
	$original_price = $_POST['original_price'];
	$selling_price = $_POST['selling_price'];
	$qty = $_POST['qty'];
	$meta_title = $_POST['meta_title'];
	$meta_description = $_POST['meta_description'];
	$meta_keywords = $_POST['meta_keywords'];
	$status = isset($_POST['status']) ? '1':'0' ;
	$trending = isset($_POST['trending']) ? '1':'0' ;

	// Use this variable for uploading new image 
	$new_image = $_FILES['image']['name'];

	// Store old image here
	$old_image = $_POST['old_image'];

	// Store to this folder
	$path = "../uploads";

	// If new image field is not empty, update image 
	if($new_image != "")
	{
		// $update_filename = $new_image;
		$image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
		$update_filename = time().'.'.$image_ext;
	}

	// If it is empty, use old image	 
	else
	{
		$update_filename = $old_image;
	}

	$update_product_query = "UPDATE products SET category_id='$category_id', name='$name', slug='$slug', small_description='$small_description', description='$description', meta_description='$meta_description', meta_keywords='$meta_keywords', status='$status', trending='$trending', image='$update_filename', original_price='$original_price', selling_price='$selling_price' WHERE id= '$product_id' ";

	$update_product_query_run = mysqli_query($con, $update_product_query);

	if($update_product_query_run)
	{
		if($_FILES['image']['name'] != "")
		{
			move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);

			if(file_exists("../uploads/".$old_image))
			{
				unlink("../uploads".$old_image);
			}

		}
		redirect("products.php", "Product updated successfully!");
	}

	else
	{
		redirect("edit-product.php?id=$product_id", "Query Failed");
	}



}

else if(isset($_POST['delete_product_btn']))
{
	$product_id = mysqli_real_escape_string($con, $_POST['product_id']);

	$product_query = "SELECT * FROM products WHERE id='$product_id' ";
	$product_query_run = mysqli_query($con, $product_query);
	$product_data = mysqli_fetch_array($product_query_run);

	$image = $product_data['image'];

	$delete_query = "DELETE FROM products WHERE id='$product_id' ";

	$delete_query_run = mysqli_query($con, $delete_query);

	if($delete_query_run)
	{
		if(file_exists("../uploads/".$image))
		{
		    unlink("../uploads/".$image);
		}

		// redirect("products.php", "Category deleted");

		echo 200;
	}
	else
	{
		// redirect("products.php", "Something went wrong");	
		echo 500;	
	}
}
else
{
	header('Location: ../index.php');

}
?>
<?php

session_start();
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
	$status = isset($_POST['status']) ? '1':'0' ;
	$popular = isset($_POST['popular']) ? '1':'0' ;

	$image = $_FILES['image']['name'];

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
		redirect("../index.php", "Something's wrong with the query. Please check");
	}



}


?>
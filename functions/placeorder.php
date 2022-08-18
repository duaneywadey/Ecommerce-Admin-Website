<?php

session_start(); 
include('../config/dbcon.php');

if(isset($_SESSION['auth']))
{
	if(isset($_POST['placeOrderBtn']))
	{
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$pincode = mysqli_real_escape_string($con, $_POST['pincode']);
		$address = mysqli_real_escape_string($con, $_POST['address']);

		if($name == "" || $email == "" || $phone == "" || $pincode == "" || $address == "")
		{
			$_SESSION['message'] = "All fields are required";
			header('Location: ../checkout.php');
			exit(0);
		}

		$userID = $_SESSION['auth_user']['user_id'];
		$query = "SELECT carts.id as cid, carts.prod_id, carts.prod_qty, products.id as pid, products.name, products.image, products.selling_price FROM carts, products WHERE carts.prod_id=products.id AND carts.user_id='$userID' ORDER BY carts.id DESC ";
		$query_run = mysqli_query($con, $query);

		$totalPrice = 0; 
		foreach ($query_run as $citem) 
		{
			$totalPrice += $citem['selling_price'] * $citem['prod_qty'];
												 
		} 

		echo $totalPrice;

		$tracking_no = "ivanduane".rand(111,9999).substr($phone,2);
		$user_id = $_SESSION['auth_user']['user_id'];

		$insert_query = "INSERT INTO orders (tracking_no, user_id, name, email, phone, address, pincode	total_price, payment_mode, payment_id, status, comments, created_at) VALUES ('$tracking_no', '$user_id', '$name', '$email', '$phone', '$pincode', '$address') ";

		$insert_query_run = mysqli_query($con, $insert_query);

		if($insert_query_run)
		{
			$order_id = mysql_insert_id($con);

			foreach ($query_run as $citem) {
				$prod_id = $citem['prod_id'];
				$prod_qty = $citem['prod_qty'];
				$price = $citem['selling_price'];			
				$insert_items_query = "INSERT INTO order_items (order_id, prod_id, qty, price) VALUES ('$order_id', '$prod_id', '$qty', '$price') ";
				$insert_items_query_run = mysqli_query($con, $insert_items_query);
			}

			$_SESSION['message'] = "Order places successfully";
			header('Location: ../my-orders.php');
			die();

		}

	}

}

// else
// {
// 	header('Location: ../index.php');
// }
?>
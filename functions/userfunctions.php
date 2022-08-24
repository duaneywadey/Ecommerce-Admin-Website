<?php
include('config/dbcon.php');

function getAllActive($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE status='0' ";
    return $query_run = mysqli_query($con, $query);

}

function redirect($url, $message)
{
	$_SESSION['message'] = $message;
	header('Location: '. $url);
	exit();
}

function getSlugActive($table, $slug)
{
	global $con;
	// $query = "SELECT * FROM $table WHERE slug = '$slug' AND status='0' LIMIT 1";
	$query = "SELECT * FROM $table WHERE slug = '$slug' ";
	return $query_run = mysqli_query($con, $query);

}

function getProdByCategory($category_id)
{
	global $con;
	// $query = "SELECT * FROM products WHERE category_id = '$category_id' AND status='0' ";
	$query = "SELECT * FROM products WHERE category_id = '$category_id'";
	return $query_run = mysqli_query($con, $query);
}

function getCartItems()
{
	global $con;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT carts.id as cid, carts.prod_id, carts.prod_qty, products.id as pid, products.name, products.image, products.selling_price FROM carts, products WHERE carts.prod_id=products.id AND carts.user_id='$userID' ORDER BY carts.id DESC ";
	return $query_run = mysqli_query($con, $query);
}

function getOrders()
{
	global $con;
	$userID = $_SESSION['auth_user']['user_id'];
	
	$query = "SELECT * FROM orders WHERE user_id='$userID' ORDER BY id DESC";
	return $query_run = mysqli_query($con, $query);
}

function getIDActive($table, $id)
{
	global $con;
	// $query = "SELECT * FROM $table WHERE id = '$id' AND status='0' ";
	$query = "SELECT * FROM $table WHERE id = '$id' ";
	return $query_run = mysqli_query($con, $query);

}

function checkTrackingNoValid($tracking_no)
{
	global $con;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT * FROM orders WHERE tracking_no='$tracking_no' AND user_id = '$userID' ";
	return mysqli_query($con, $query);
}





?>
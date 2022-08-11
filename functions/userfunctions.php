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
	$query = "SELECT * FROM $table WHERE slug = '$slug' AND status='0' LIMIT 1";
	return $query_run = mysqli_query($con, $query);

}

function getProdByCategory($category_id)
{
	global $con;
	$query = "SELECT * FROM products WHERE category_id = '$category_id' AND status='0' ";
	return $query_run = mysqli_query($con, $query);
}

function getCartItems()
{
	global $con;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT carts.id as cid, carts.prod_id, carts.prod_qty, products.id as pid, products.name, products.image, products.selling_price FROM carts, products WHERE carts.prod_id=products.id AND carts.user_id='$userID' ORDER BY carts.id DESC ";
	return $query_run = mysqli_query($con, $query);
}

function getIDActive($table, $id)
{
	global $con;
	$query = "SELECT * FROM $table WHERE id = '$id' AND status='0' ";
	return $query_run = mysqli_query($con, $query);

}

?>
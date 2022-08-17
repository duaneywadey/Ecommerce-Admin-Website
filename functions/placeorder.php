<?php

if(!isset($_SESSION))
{
	session_start(); 
}  
      
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
		}
	}

}

else
{
	header('Location: ../index.php');
}
?>
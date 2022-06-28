<?php
include('../functions/myfunctions.php');


// To detect unauthorized access to the admin page 

if(isset($_SESSION['auth']))
{

	// If user is not an admin, he's not authorized to access this page

	if($_SESSION['role_as'] != 1) 
	{
		redirect("../index.php", "You're not authorized to access this page");

	}
}

else 
{
	redirect("../login.php", "Login to continue");
}


?>
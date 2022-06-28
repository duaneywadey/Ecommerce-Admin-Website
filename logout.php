<?php

session_start();

// If a user wants to log out, unset the session for being logged in.

if(isset($_SESSION['auth']))
{
	unset($_SESSION['auth']);
	unset($_SESSION['auth_user']);
	$_SESSION['message'] = 'Logged out successfully';
}

header('Location: index.php');

?>
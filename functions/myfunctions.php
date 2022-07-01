<?php

# Create a function for redirecting user to a new page

include('../config/dbcon.php');

function getAll($table)
{
	global $con;
	$query = "SELECT * FROM $table";
	return $query_run = mysqli_query($con, $query);

}

function getByID($table, $id)
{
	global $con;
	$query = "SELECT * FROM $table WHERE id = '$id' ";
	return $query_run = mysqli_query($con, $query);

}

function redirect($url, $message)
{
	$_SESSION['message'] = $message;
	header('Location: '. $url);
	exit();
}

function deleteDrFiles($path) {
    if (is_dir($path)) {
        array_map(function($value) {
            $this->deleteDrFiles($value);
            rmdir($value);
        },glob($path . '/*', GLOB_ONLYDIR));
        array_map('unlink', glob($path."/*"));
    }
}

?>
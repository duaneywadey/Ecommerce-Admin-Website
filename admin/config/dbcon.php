<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'phpecom';

	$con = mysqli_connect($host, $username, $password, $database, $port);

	if(!$con) {
		die("Connection Failed: ". mysqli_connect_error());
	}

	else {
		echo "Connected successfully";
	}
?>
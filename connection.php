<?php  
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";
	$database 	= "bukittengkorak";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	//start session
	session_start();
?>

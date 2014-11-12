<?php
		
	require_once(__DIR__ . "/../model/database.php");
	
	$connection = new mysqli($host, $username, $password, $database);
	/*uses information from variables in database.php in order to run queries*/	

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	/*validates input and checks for malicious activity & makes sure it's a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	/*checks to see that informations is recieved, and makes sure that each aspect is compatible to the string*/

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";
	/*echoes the variables created above*/

	$connection->close();

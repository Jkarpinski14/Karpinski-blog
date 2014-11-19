<?php
		
	require_once(__DIR__ . "/../model/config.php");
	/*gives us access to the paramaters in config.php*/
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	/*validates input and checks for malicious activity & makes sure it's a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	/*checks to see that informations is recieved, and makes sure that each aspect is compatible to the string*/

    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
	/*establishes connection to database*/

	if($query){
		echo "<p>Successfully inserted post: $title</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}
	/*echoes the "if statement" assuming the query was successful*/

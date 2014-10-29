<?php
	require_once(__DIR__ . "/../model/database.php");
	/*links to database.php*/

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}
	/*this is here in case there is an error that requires the page to terminate*/
	$exists = $connection->select_db($database);

	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database"); 
		/*query will be executed and stored in this variable*/
		if($query){
			echo "successfully created database: " . $database;
		}
	}
	else{
		echo "Database already exists.";
	}
	/*the "if statement" checks if the database does not exist, and creates it if it doesn't.
	If it does exist, then the else statement is run.*/
	/*exclamation point means not*/

	$connection->close();
?>
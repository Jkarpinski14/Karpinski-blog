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
	/*exclamation point means not*/
	/*at this point, there is no database connection*/
	$connection->close();
?>
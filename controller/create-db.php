<?php
	require_once(__DIR__ . "/../model/config.php");
	/*links to config.php; initially set to (now deleted) database.php, serves the purpose of simplifying [refactoring] to make it easier to edit and more usable, improves the look of the code wo/ affecting  the workability*/

	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))"); 
	/*creates a table using a query, just like the database on line 15*/

	if($query) {
		echo "Successfully created table: posts";
	}
	/*checks to see if table exists*/
	else{
		echo "<p>" . $_SESSION["connection"]->error. "</p>";
	}
	
	/*HTML tags are compatible in PHP*/
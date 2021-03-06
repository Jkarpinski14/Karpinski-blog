<?php
		
	require_once(__DIR__ . "/../model/config.php");
	/*gives us access to the paramaters in config.php*/
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	/*validates input and checks for malicious activity & makes sure it's a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	/*checks to see that informations is recieved, and makes sure that each aspect is compatible to the string*/
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	/*establishes connection to database*/

	if($query){
		echo "<p>Successfully inserted post: $title</p>";
		echo "Posted on: " . $date->format("D " . "M d, " . "Y") . " at " . $time->format("g:i");
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	/*echoes the "if statement" assuming the query was successful*/
?>

<br>
<br>
<a href="<?php echo $path . "index.php"?>">Blog posts seen here</a>

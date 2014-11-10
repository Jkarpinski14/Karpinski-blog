<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	/*validates input and checks for malicious activity & makes sure it's a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	/*checks to see that informations is recieved, and makes sure that each aspect is compatible to the string*/

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";
	/*echoes the variables created above*/

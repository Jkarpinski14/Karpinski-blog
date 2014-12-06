<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	/*FILTER deletes invalid characters*/

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
	/*salt makes hashed password unique to us*/
	$hashedPassword = crypt($password, $salt);
	/*prevents a duplicate password from hasing the same input*/
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

	if($query){
		echo "Successfully created user: $username";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

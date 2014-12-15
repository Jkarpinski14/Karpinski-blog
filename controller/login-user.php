<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	/*username and password sent in by the form*/

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	/*retrievs the salt and the password from the users table, and makes sure to only get it from the table with information attached to a designated username*/

	if($query->num_rows == 1){
		$row = $query->fetch_array();
		/*gets the stored array of information and places it in the row variable*/
		if($row["password"] === crypt ($password, $row["salt"])){
			/*triple equal sign makes the password case-sensitive*/
			$_SESSION["authenticated"] = true;
			/*confirms that the user has logged in*/
			echo "<p>Login Successful!</p>";
		}
		else{
			echo "<p>Invalid username and/or password</p>";
		}
	}
	else{
		echo "<p>Invalid username and/or password</p>";
		/*doesn't permait false users to know which paramater they are entering incorrectly*/
	}
	/*checks that information is stored in the query*/

?>

	<a href="<?php echo $path . "post.php"?>">Blog Post Forum</a>
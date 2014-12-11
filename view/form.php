<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if(!authenticateUser()){
		header("location: " . $path . "index.php");
		/*if the function is run, it sends the form to index.php*/
		die();
	}
	/*will kill the page if the user is not authenticated, thus stopping the execution of the program*/
?>

<h1 id="header">Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
		<!--links to create-post-->
	<div>
		<label for="title">Title: </label>
		<input type="text" name="Title" />
		<!--creates the header title and the box to enter data in the title-->
	</div>
	<br>
	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
		<!--creates the header post and the box to enter data in the post box-->
	</div>
	<br>
	<div>
		<button class="button" type="submit">Submit</button>
	</div>
	<br>
	<img id="img" src="http://images.radcity.net/6626/4966353.jpg" alt="nascar" height="420" width="560">
</form>
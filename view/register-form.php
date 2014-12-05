<?php
	require_once(__DIR__ . "/../model/config.php");

?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!--wants to send information to post-->
	<div>
		<label for="email">Email: </label>
		<input type="text" name="email" />
	</div>
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
		<!--password will show up as bullet points instead of displaying the actual text to the screen-->
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>
<!--this page will allow only a specific user (me) to post things on the blog post forum-->
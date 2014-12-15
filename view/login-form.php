<?php
	require_once(__DIR__ . "/../model/config.php");

?>
<!--wants to access path file in controller-->

<h1>Login Here</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
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


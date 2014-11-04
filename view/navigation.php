<?php
	require_once(__DIR__ . "/../model/config.php");
?>
<nav>
	<ul>
		<li>
			<a href="<?php echo $path . "post.php"?>">Blog Post Forum</a>
			<!--correctly links the index.php page to the post.php forum page-->
			<!--since we have echoed $path along with post.php, we don't need to provide a path-->
		</li>
	</ul>
</nav>
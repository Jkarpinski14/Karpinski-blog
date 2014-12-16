<?php
	require_once(__DIR__ . "/../model/config.php");
?>
<h1 id="tritonal">NASCAR Nation</h1>
<nav>
	<ul>
		<li>
			<a href="<?php echo $path . "post.php"?>">Post Away Here!</a>
			<br>
			<!--correctly links the index.php page to the post.php forum page-->
			<!--since we have echoed $path along with post.php, we don't need to provide a path-->
		</li>
	</ul>
</nav>

<div class="imagepage">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://i.ytimg.com/vi/Hp0bnUtbR2U/maxresdefault.jpg" alt="wreck1">
    </div>
    <div class="item">
      <img src="http://i1.ytimg.com/vi/WFWUA0ofe7g/maxresdefault.jpg" alt="wreck2">
    </div>
    <div class="item">
      <img src="http://2.bp.blogspot.com/-mU30yxT8ph8/Ud_whl-NLMI/AAAAAAAAAME/1HS827Ht96g/s1600/Photo_11.png" alt="wreck3">
    </div>
    <div class="item">
      <img src="http://i.ytimg.com/vi/eBwbgCiy-pQ/maxresdefault.jpg" alt="wreck4">
    </div>
    <div class="item">
      <img src="http://i.ytimg.com/vi/Y4xtUml9trw/maxresdefault.jpg" alt="wreck5">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	</div>

	<div>
		<p>
			Hello, and welcome to NASCAR Nation, the weekly blog dedicated to the latest buzz surrounding the NASCAR universe. Here, you will see posts with breaking information, educated speculation, and thoughtful insight to all things NASCAR. From Daytona in the Spring to Homestead-Miami in the Fall, NASCAR Nation will follow the races in: 
			<ul>
			<li>The NASCAR Sprint Cup Series</li>
			<li>Comcast Xfinity Series</li>
			<li>Camping World Truck Series</li>
			<li>K&N Pro Series</li>
			<li>Toyota Mexico Series</li>
			<li>Canadian Tire Series</li>
			<li>Whelen All-American Series</li>
			<li>NASCAR European Tour</li>
			<li>ARCA, and more!</li>
			</ul>
			All the action from America's number 1 spectator sport, from the side by side racing and split second passes and unbelievable wrecks will find their way here!
		</p>
	</div>

	<br>
	<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Site Info</button>

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
    		<div class="modal-content">
     		 This site was created in 2014. <br>
     		 HTML/CSS, JavaScript, and Jquery all went into the making of this site.
    		</div>
  		</div>
	</div>
	<br>
	<br>
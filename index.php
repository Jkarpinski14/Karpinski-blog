<html>
	<head>
		<title>
			Index.php
		</title>
	</head>
	<body>
		<?php
			require_once(__DIR__ . "/controller/create-db.php");
			/**
			* 
			*/
			class car {
				
				
				public $color = "black";
				public $model= "mustang";	
				public $nickname = "BillyBob";
				function __construct($color, $model, $nickname)
				{
					# code...
					$this->color = $color;
					$this->model = $model;
					$this->nickname = $nickname;
				}
				function vroom(){
					return "My car is a " . $this->model  . " and it's " . $this->color . " who I call " . $this->nickname . ".";
				}
				
			}
			$car1 = new Car("black", "mustang", "BillyBob");
			echo $car1->vroom();
		?>
	</body>
</html>
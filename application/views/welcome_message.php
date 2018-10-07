<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<?php
		for ($i = 0; $i < 100; $i++){
			$current_color = rand(0,2);
			echo "The traffic light is: <i>$colors[$current_color]</i>: <b>{$action[$colors[$current_color]]}</b><br>";
		}
	 ?>
</div>

</body>
</html>

<!doctype html>
<html>

<head>

	<style type= text/css>
		body {
			padding: 20px;
		}

		picture {
			display: block;
			max-width: 500px;
		}

		img {
			width: 100%;
		}
	</style>

</head>

<body>

	<h2>Tip calculator</h2>

	<?php

	// "=" are called assignment designators?

	$price = 34;

	$tax = $price * .10;

	$total = $price + $tax;

	echo "<h3>$" . $total . "</h3>";

	$percent = 25;

	echo "<p>Percent tip: " . $percent . "%</p>";

	if ($percent >= 25) {
		echo "Holy moly! What a tip!";
	}

	$tip = $total * ($percent/100);

	$total = $total + $tip;

	echo "<p>Your total is: $" . $total . "</p>";

	?>


	<hr>


	<?php

	// ARRAYS

	$myStuff = ["phone", "notebook", "pen", "wallet"];

	$favoriteStuff = $myStuff[1];


	// ASSOCIATIVE ARRAYS

	$dog = [
		"id" => 99,
		"name" => "Toby",
		"weight" => "20",
		"barkLevel" => "Loud",
		"breed" => ["terrier", "mix"],
	];

	?>

	<p>My favorite stuff is my <?=$favoriteStuff?>.</p>

	<p>My dog's name is <?=$dog["name"]?>. He is <?=$dog["weight"]?> pounds.</p>

	<picture>
		<img src="https://i.postimg.cc/BbjWCbn5/Screen-Shot-2021-06-04-at-9-38-14-PM.png" alt="the code">
	</picture>


	<hr>

	<h2>Looping through arrays</h2>

	<ul>

	<?php

	 $myArray = [
		"apple",
		"banana",
		"mango",
		"blueberries",
	 ];
	
	 foreach ($myArray as $fruit) { 

	?>

 	<li><?=$fruit?></li>

	 <?php } ?>
	
	</ul> 


	<hr>

	<h2>PHP functions</h2>

	<?php 

		function nounVerb($parameter1,$argument1) {
			echo "The " . $parameter1 . " is " . $argument1 . ".";
		}

		nounVerb("apple","green");

		nounVerb("man","fat");

	?>















</body>

</html>
<!doctype html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>[[insert title]]</title>
	<meta name="description" content="[[insert description]]">

	<meta property="og:title" content="[[insert title]]" />
	<meta property="og:description" content="[[insert description]]" />
	<meta property="og:image" content="[[meta image source]]" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<link rel="stylesheet" href="styles/styles.css" type='text/css'>
</head>


<body>

	<h2>PHP practice: associative arrays</h2>

	<?php

		$order = ["espresso", 2 , false , "Tommy"];

		$monster = [
			"id" => 1744,
			"name" => "Mike",
			"favoriteFood" => "flies",
			"age" => "2",
			"adopted" => no,
		];

		// ^ This is called an "associative array". We call it just objects.

	?>

	<p>You chose a/an <?=$order[0]?> with <?=$order[1]?> shot/s.</p>

	<?php

		echo "<p>Please wait to be called by your name, " . $order[3] . ".</p>" 

	?>

	<p id="<?=$monster[id]?>">Your monster's name is <?=$monster[name]?>. It's <?=$monster[age]?> year/s old.</p>

	<!-- practice for php style writing below -->

	<?php

	$description = $monster[name] . "'s favorite food is/are " . $monster[favoriteFood] . ", please take good care of him.";

	$template = "<p id=" . $monster[id] . ">" . $description . "</p>";

	echo $template;

	?>

	<hr>

	<h2>PHP looping arrays</h2>

	<?php

		$coffeeArray = ["espresso", "americano", "latte", "macchiato", "cappuccino"];

		echo "<ul>";

		foreach ($coffeeArray as $coffee) {
			echo "<li>" . $coffee . "</li>";
		}

		echo "</ul>"

	?>

	<hr>

	<?php

			$mike = [
			"id" => 1744,
			"name" => "Mike",
			"favoriteFood" => "flies",
			"age" => "2",
			"adopted" => no,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

			$jason = [
			"id" => 1076,
			"name" => "Jason",
			"favoriteFood" => "orange juice",
			"age" => "10",
			"adopted" => yes,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

			$spikey = [
			"id" => 1744,
			"name" => "Spikey",
			"favoriteFood" => "snake plants",
			"age" => "7",
			"adopted" => no,
			"portrait" => "https://peprojects.dev/images/portrait.jpg",
		];

		// echo "<ul>";

		// echo "<li>" . $mike[name] . "</li>";

		// echo "<li>" . $jason[name] . "</li>";

		// echo "<li>" . $spikey[name] . "</li>";

		// echo "</ul>";

		// ^ bad way of doing things!

		$monsters = [$mike, $jason, $spikey];


		echo "<ul>";

		foreach ($monsters as $monster) {
			
			$name = $monster[name];
			$age = $monster[age];
			$portrait = $monster[portrait];
			$story = "I'm " . $name . ". I like " . $monster[favoriteFood] . " and I'm " . $age . " years old.";

			echo

				"<li class='monster'>" .

				 "<card id='" . $monster[id] . "'>" .

					 "<picture class='portrait'>" .
					 	"<img src='" . $portrait . "' width='150'>" . 
					 "</picture>" .

					 "<h2 class='name'>" . $name . "</h2>" .
						"<p class='story'>" . $story . "</p>" .

				 "</card>" .

			 "</li>";

		}

		echo "</ul>";

	?>






</body>
</html>





































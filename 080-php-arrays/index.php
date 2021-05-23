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

	<link rel="stylesheet" href="styles/main.css" type='text/css'>

</head>


<body>
	
	<?php
		
		$dayOfWeek = [
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
			"Sunday"
		];

		$todayIs = $dayOfWeek[0];

	?>

	<p>Today is <?=$todayIs?>.</p>

	<?php

		if ($todayIs == $dayOfWeek[5]) {
			echo "<p>Hurray! Grab a beer and chill!</p>";
		}

		if ($todayIs == $dayOfWeek[0]) {
			echo "<p>No pain no gain! Let's get to work and grit!</p>";
		}

	?>

	<hr>

	<?php

	$womenSpan = 81.1;
	$menSpan = 76.1;
	$age = 31;
	$sex = ["man", "woman"];
	$sexIs = $sex[0];

	?>

	<p>The average life expectancy in the US is of <?=$womenSpan?> years for women and of <?=$menSpan?> years for men.</p>
	<p>How much of life do you have left?</p>
	<p>My age: <?=$age?></p>
	<p>My sex: <?=$sexIs?></p>

	<?php

	if ($sexIs == $sex[0]) {

		echo "<p>As a " . $age . " years old man, you have " . number_format((100 - $age * 100 / $menSpan),1) . "% of life left. :D</p>";

	} else {

		echo "<p>As a " . $age . " years old woman, you have " . number_format((100 - $age * 100 / $womenSpan),1) . "% of life left. :D</p>";

	}

	?>


</body>
</html>
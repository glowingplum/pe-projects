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

	<link rel="stylesheet" href="styles/base.css" type='text/css'>

</head>


<body>
	
	<h1>
		PHP templates
	</h1>

	<picture>
		<img src="images/php-chart-scaled.jpg" alt="">
	</picture>

	<?php

		$noun = 'watches';
		$pluralNoun = 'buttons';
		$verbOne = 'calculate tip amounts';
		$verbTwo = 'tune guitars';
		$PlualBodyPart = 'eyes';
		$adjectiveOne = 'bright';
		$adjectiveTwo = 'wacky';

		echo "<p>" . "Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNoun . "." . "</p>";

	?>

	<p>Computers can add, multiply, divide, and <?php echo $verbOne; ?>. They can also <?php echo $verbTwo; ?> better than a human.</p>

	<p>Some computers have their own <?=$PlualBodyPart?>. Other’s have a/an <?=$adjectiveOne?> screen that shows all kinds of <?=$pluralNoun?> and <?=$adjectiveTwo?> figures.</p>

</body>
</html>
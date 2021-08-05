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

		
			// The FOR loop. First area, setup. Second area, check condition. Third area, do this.
		for ($i = 0; $i < 10; $i++) {
			// This reads as initialize as zero; as long as $i is less than 10; ++ means increment by one;

			echo "$i, ";



		}

	?>


	<hr>


	<?php

		$myBands = ["Casker", "10cm", "Hyukoh", "YB", "Jaurim", "The Black Skirts"];

		foreach ($myBands as $band) {
			echo "$band, ";
		}

		echo "<br><br>";

		$myNumbers = [7,3,5,55,31,97,40];

		foreach ($myNumbers as $number) {
			echo "$number, ";
		}

		echo "<br><br>";

		echo "under 20:<br>";
		foreach ($myNumbers as $number) {
			if ( $number < 20 ) {
				echo "$number, ";
			}
		}

		echo "<br><br>";

		for ( $count = 0; $count <=34 ; $count++ ) {

				if ( $count <> 12 && $count <> 17 && $count <> 23 ) {
							echo $count . ", ";
				} //    or ||    and &&    (not equal) != <>
		}

	?>

	<hr>

	<?php

		$days = ["Monday", "Wednesday", "Friday"];
		$drinks = ["coffee", "boba", "water"];
		$locations = ["ocean", "mountain", "woods"];

		$car = [
			"name" => "car",
			"model" => "optima",
			"mileage" => 41000,
			"color" => "gray",
		];
		$lamp = [
			"name" => "lamp",
			"light" => "yellow",
			"charges" => yes,
			"color" => "beige",
		];
		$weather = [
			"temperature" => 73,
			"wind" => 12,
			"uv" => "high",
		];

		echo "day: $days[2]";
		echo "<br>";
		echo "drink: $drinks[1]";
		echo "<br>";
		echo "<br>";

		echo "car: " . $car['model'];
		echo "<br>";
		echo "weather: wind " . $weather['wind'] . " mph";
		echo "<br>";
		echo "<br>";

		$locations[2] = "lake";
		$days[0] = "Sunday";

		array_push($days, "Saturday");
		var_dump($days);
		echo "<br>";
		var_dump($drinks);
		echo "<br>";
		var_dump($locations);
		echo "<br>";
		echo "<br>";

		unset($lamp["charges"]);
		var_dump($lamp);
		echo "<br>";
		unset($weather["uv"]);
		var_dump($weather);
		echo "<br>";
		echo "<br>";

		$car["type"] = "sedan";
		var_dump($car);
		echo "<br>";
		$weather["humidity"] = 75 . "%";
		var_dump($weather);
		echo "<br>";
		echo "<br>";

		$normalArrays = [$days];
		$normalArrays[1] = $drinks;
		array_push($normalArrays, $locations);
		var_dump($normalArrays);
		echo "<br>";
		echo "<br>";

		$associativeArrays = [$car,$lamp,$weather];
		var_dump($associativeArrays);
		echo "<br>";
		echo "<br>";

		foreach ($associativeArrays as $array) {
			
			if ($array['name'] == "") {

				$message = "";

			} else {

				$message = "<li>A " . $array['color'] . " " . $array['name'] . ".</li>";
			}

			echo $message;

		}



	?>


</body>
</html>
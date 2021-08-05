<!doctype html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>[[insert title]]</title>
	<meta name="description" content="[[insert description]]">

	<link rel="stylesheet" href="styles/main.css" type='text/css'>
</head>


<body>

	<?php

		//echo $_POST["food"];
		/* to see what is stored in the memory!
		at the beginning, there should be an error because there's no data on the attribute.
		that's why isset is needed! */

		// if ( isset($_POST["food"]) ) {
		// 	echo $_POST["food"];
		// }
	?>

	<?php

	// super global variables are the ones that are created with method post

	$thing = $_POST;

	// var_dump($thing);

	?>

	<!-- method post requires names for all the elements to post -->
	<form method='POST'>
		<!-- form and its elements are block elements by default except for label and input which is inline-block -->
		<h2>Awesome Food Calculator</h2>

		<div class="field">
			<label>People</label>
			<input type="number" placeholder="Including yourself!" name="people" min='0'> 
			<!-- input doesn't inherit the font -->
		</div>
	<!-- remember placeholders dissapear -->

		<div class="field">
			<label>Chicken Wings</label>
			<input type="number" placeholder="1 wing = 43 calories" name="food" min='0' max='10'> 
			<!-- input doesn't inherit the font -->
		</div>

		<button type="submit" name="run">Submit</button>

</form>


<?php


// isset is neccessary for when data is none. Because that would cause errors. If none, then make it 0.

$people = 0;
$food = 0;

if ( isset($_POST["run"]) ) { // if 'run' is set

	if ( isset($_POST["people"]) ) { // if 'people' is set
		if ( $_POST['people'] >= 0 ) { // if people is bigger than 0!!!
			$people = $_POST["people"]; // make var people the input value
		}
	}

	if ( isset($_POST["food"]) ) {
		if ( $_POST['food'] >= 0 ) {
			$food = $_POST["food"];
		}
	}

// data must be converted into float, numeric data. use floatval for that
	$total = floatval($people) * floatval($food);

	echo "<p class='result'>Food required: $total<p>";
}

?>

<hr>

<form method='POST'>
		
	<h2>Awesome Retirement Calculator</h2>

	<div class="field">
		<label>What is your current age?</label>
		<input type="number" name="currentAge" min="0" placeholder="0">
	</div>

	<div class="field">
		<label>At what age would you like to retire?</label>
		<input type="number" name="retireAge" min="<?=$currentAge?>" placeholder="0">
	</div>

	<button type="submit" name="submit">Retire</button>

</form>

<?php

	$currentAge = 0;
	$retireAge = 0;
	$curentYear = 0;
	$yearsLeft = 0;
	$retireYear = 0;

	if ( isset($_POST["submit"]) ) {

		if ( isset($_POST["currentAge"]) ) {
			if ( $_POST["currentAge"] >= 0 ) {
				$currentAge = $_POST["currentAge"];
			}
		}

		if ( isset($_POST["retireAge"]) ) {
			if ( $_POST["retireAge"] > $currentAge ) {
				$retireAge = $_POST["retireAge"];
			}
		}

		$curentYear = date(Y);
		$yearsLeft = floatval($retireAge) - floatval($currentAge);
		$retireYear = floatval($curentYear) + $yearsLeft;

		echo "
			<p class='result'>You have $yearsLeft years left until you can retire.<br>It's $curentYear, so you can retire in $retireYear.</p>
		";

		}

	?>

	<hr>

	<form method="post">

		<h2>Awesome Tip Calculator</h2>
		
		<div class="field">
			<label>What is the bill?</label>
			<flex-wrapper>
				<p>$</p>
				<input type="number" step="0.01" min="0" name="bill" placeholder="0.00">
			</flex-wrapper>
		</div>

		<div class="field">
			<label>How much would you like to tip?</label>
			<flex-wrapper>
				<input type="number" step="0.01" min="0" name="tip" placeholder="be nice :)" >
				<p>%</p>
			</flex-wrapper>
		</div>

		<button type="submit" name="submit">Tip!</button>

	</form>

	<?php

		$bill = 0;
		$tip = 0;

		if ( isset($_POST['submit']) ) {
			
			if ( isset($_POST['bill']) ) {
				if ($_POST['bill'] > 0) {
					$bill = $_POST['bill'];
				}
			}

			if ( isset($_POST['tip']) ) {
				if ($_POST['tip'] >= 0) {
					$tip = $_POST{'tip'};
				}
			}

			$bill = number_format($bill, 2);
			$tipConversion = number_format((floatval($bill) * floatval($tip) /100), 2);
			$total = number_format((floatval($bill) + $tipConversion), 2);

			echo "
				<p class='result'>Bill: $$bill<br>
				Tip: ($tip%) $$tipConversion<br>
				Total: $$total</p>
			";
		}

	?>


</body>

</html>




































<style>
	
	form {
		max-width: 400px;
		padding: 20px;
	}
	label, input, button {
		padding: 10px;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	/* elements can be targetted by attribute!!! */
	[type='submit'], .field + .field {
		margin-top: 10px;
	}

	.result {
		color: darkgreen;
	}

</style>











<?php

$guests = 5;
 
$people = $guests + 1;

$berriesPerPerson = 15;

$berriesPerBox = 26;

$boxesNeeded = ceil(($people * $berriesPerPerson) / $berriesPerBox);

$pricePerBox = 8;

$totalPrice = $pricePerBox * $boxesNeeded;

echo "Including Ivy, there are $people persons. If each one has $berriesPerPerson berries, we'll need $boxesNeeded boxes of berries. The total should be $$totalPrice.";
?>










<hr>


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
		<input type="number" placeholder="cuantas personas?" name="people" min='0'> 
		<!-- input doesn't inherit the font -->
	</div>
<!-- remember placeholders dissapear -->

	<div class="field">
		<label>Wings</label>
		<input type="number" placeholder="10 maximum" name="food" min='0' max='10'> 
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
		<input type="number" name="currentAge" min="0">
	</div>

	<div class="field">
		<label>At what age would you like to retire?</label>
		<input type="number" name="retireAge" min="<?=$currentAge?>">
	</div>

	<button type="submit" name="submit">Calculate</button>

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





























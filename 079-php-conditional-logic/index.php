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
	
	<h1>
		Examples of PHP conditional logic usages
	</h1>


	<section>
		
		<h2>Calculate your dog's age in human years</h2>

		<?php

			$dog = 7;
			$human = ((16 * log($dog)) + 31);
			$human_final = number_format($human,1);

		?>

	<p>According to the geneticist <a href="https://www.sciencemag.org/news/2019/11/here-s-better-way-convert-dog-years-human-years-scientists-say">Trey Ideker</a> of the University of California, San Diego, this formula can be used:</p>
	<p class="formula">16 ln(dog age) + 31</p>
	<p>If your dog is <?php echo $dog; ?>, it would be <?=$human_final?> years old in human age.</p>

		<?php

			if ($human > 50) {
				echo "You should buy senior food for your dog.";
			} else {
				echo "Your dog is still young. Enjoy as many activies as you can with your pet!";
			}

		?>

	</section>


	<section>
		
		<h2>What time is it in...?</h2>

		<p>Check the time of your friend's time zone before making a call!</p>
		<p>If it's 10:00 in California, then it's:</p>

		<?php

			$amOrPm = am;
			$pst = date("10:00:00 a");
			$est = $pst + 4;
			$germany = $pst + 9;
			$china = $pst + 15;

			if ($amOrPm == am) {
				echo '<p>' . date("$est:00") . ' in New York.</p>';
				echo '<p>' . date("$germany:00") . ' in Berlin.</p>';
				echo '<p>' . date("$china:00") . ' in Beijing. :)</p>';
			} else {

			}

		?>

		<p class="time">Time is a hard topic!</p>

	</section>


	<section>
		
		<h2>Is it going to rain tomorrow?</h2>

		<?php

		$chance = 50;

		if ($chance >= 50) {
			echo "<p>There's a " . $chance . "% chance of rain for tomorrow. Make sure to bring an&nbsp;umbrella!</p>";
		} else {
			echo "<p>There's just a " . $chance . "% chance of rain for tomorrow. Enjoy your walk and chill!</p>";
		}

		?>

	</section>


	<section class="tip-calculator">

		<h2>Tip calculator</h2>


		<div class="paper">
			
			<p>Bamboo Garden</p>
			<p>2537 Pacific Coast Hwy</p>
			<p>Torrance, CA 905050000</p>
			<p>stuff...</p>
			<div class="split">
				<p>Pre-Tip AMT</p>
				<label for="pre-tip">
					$<input id="pre-tip" type="text" name="pre-tip">
				</label>
			</div>

			<form action="" method="post">

			<div class="split">
				<p>Tip</p>
				<label for="tip">
					$<input id="tip" type="text" name="tip">
				</label>
			</div>

			</form>		

			<div class="split">
				<p>Total Amount</p>

				<?php 

					$preTip = $_GET['pre-tip'];

				?>
				<p class="total"><?=$total?></p>
			</div>
				
				<?=$PreTip?>

		</div>




	</section>


</body>
</html>
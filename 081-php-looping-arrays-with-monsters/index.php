<!doctype html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Monster Adoption Agency</title>
	<meta name="description" content="Your pet search starts here!">

	<meta property="og:title" content="Monster Adoption Agency" />
	<meta property="og:description" content="Your pet search starts here!" />
	<meta property="og:image" content="https://peprojects.dev/alpha-1/tommylee/pe-projects/081-php-looping-arrays-with-monsters/images/default-meta.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<link rel="stylesheet" href="styles/styles.css" type='text/css'>
</head>


<body>

	<?php
		include('header.html');
		include('monster-database.php');
	?>

	<?php
		foreach ($monstersList as $monster) {

			$id = $monster[id];
			$name = $monster[name];
			$story = "Hi! I am " . $monster[age] . " years old. I will be happy if you feed me with&nbsp;" . $monster[favoriteFood] . " and love!";
			$status = $monster[adopted];

			if ($status == true) {		
				$status = "<adopted>Adopted.</adopted>";
			} else {
				$status = "<not-adopted>Looking for a family!</not-adopted>";
			};

	?>

	<li class='monster-card' id='<?=$monster[id]?>'>

	<picture>
		<img src='images/portraits/<?=$monster[id]?>.jpg' alt='Portrait of <?=$monster[name]?>'>
	</picture>

	<h3><?=$monster[name]?></h3>

	<p class='story'><?=$story?></p>
	
	<status>
		<p>Status:</p>
		<?=$status?>
	</status>

 </li>

<?php }; ?>

	<?php include('footer.html'); ?>

</body>
</html>
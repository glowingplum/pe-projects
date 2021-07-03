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

	<nav>
		<inner-column>
			<a href="#" class="logo">
				<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
				  <circle cx="50" cy="50" r="50"/>
				</svg>
				Brand</a>
			<a href="#">Menu</a>
		</inner-column>
	</nav>

	<main>
		<inner-column>

			<h1>Our Products</h1>

			<ul>
			<?php

				//create function to repeat variables into each product
				function myProducts($id,$name, $price, $type,$image) {
					$product = [
						"id" => $id,
						"name" => $name,
						"price" => $price,
						"type" => $type,
						"image" => $image,
						"status"=> $status,
					];

					return $product;
				}

				//create products with their information
				$hp6001 = myProducts(
					"0001",
					"hp6001",
					"45",
					"headphones",
					"https://peprojects.dev/images/square.jpg",
					"in-stock",
				);

				$sb8002 = myProducts(
					"0002",
					"sb8002",
					"540",
					"sound bar",
					"https://peprojects.dev/images/square.jpg",
					"out-of-stock",
				);

				$sp7001 = myProducts(
					"0003",
					"sp7001",
					"200",
					"speakers",
					"https://peprojects.dev/images/square.jpg",
					"in-stock",
				);

				$tr3001 = myProducts(
					"0004",
					"tr3001",
					"840",
					"speakers",
					"https://peprojects.dev/images/square.jpg",
					"out-of-stock",
				);

				$sp7002 = myProducts(
					"0005",
					"sp7002",
					"100",
					"speakers",
					"https://peprojects.dev/images/square.jpg",
					"in-stock",
				);

				//designate products as variable to use in foreach
				$products = [$hp6001, $sb8002, $sp7001, $tr3001, $sp7002];

				//create foreach to repeat the html code for each product
				foreach($products as $pr) {
			?>

			
				
				<li class="product-card <?=$pr["status"]?>" id="<?=$pr["id"]?>">
					<picture>
						<img src="<?=$pr["image"]?>" alt="">
					</picture>
					<h3 class="product-name"><?=$pr["name"]?></h3>
					<p><?=$pr["type"]?></p>
					<p>$<?=$pr["price"]?></p>
					<button-wrapper>
						<a href="#" class="button atc">add to cart</a>
						<a href="#" class="button bn">buy now</a>
					</button-wrapper>
				</li>
			


			<?php } ?>
			</ul>

		</inner-column>
	</main>

</body>
</html>
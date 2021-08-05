<!-- THE ROUTER -->
<?php
	$currentPage = null;
	if( isset($_GET['page']) ) {
		$currentPage = $_GET['page'];
	} else {
		$currentPage = 'home';
	}

	function pageLoader($currentPage) {
		include($currentPage . '.php');
	}
?>

<!doctype html>
<html lang="en">

<?php include('modules/head.php'); ?>

<body>

	<header class="site-header">
		<inner-column>

			<?php include('modules/masthead.php'); ?>
		
		</inner-column>
	</header>


	<main class="page-content">

		<?php pageLoader($currentPage); ?>	

	</main>


	<footer>
		<inner-column>
			
			<?php include('modules/footer.php'); ?>

		</inner-column>
	</footer>

</body>
</html>
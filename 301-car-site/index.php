<?php include('modules/head.php') ?>

<label class="switch">
	<input id="toggle" class="toggle" type="checkbox">
	<span class="slider round"></span>
</label>	

<header class="site-header">
	<inner-column>
		<?php include('modules/header.php') ?>
	</inner-column>
</header>

<main>

	<section class="landing">
		<inner-column>
			<?php include('modules/landing.php') ?>
		</inner-column>
	</section>

	<section class="cta">
		<inner-column>
			<?php 
			$heading = "This module is a call-to-action";
			include('modules/call-to-action.php') ?>
		</inner-column>
	</section>

	<section class="articles">
		<inner-column>
			<?php include('modules/articles.php') ?>
		</inner-column>
	</section>

	<section class="bottom-cta">
		<inner-column>
			<?php include('modules/call-to-action.php') ?>
		</inner-column>
	</section>

</main>

<footer>
    <inner-column>
		<?php include('modules/footer.php') ?>
    </inner-column>
</footer>



<script>
	// search the compiled HTML document (document object model) DOM
	// understand a few elements
	var body = document.querySelector('body');
	var toggle = document.querySelector('.toggle');

	// define the action
	function toggleStyles(event) {
			if (event.target.checked) {
			//alert('checked');
			body.classList.remove('light');
			body.classList.add('dark');
			} else {
			//alert('not');
			body.classList.remove('dark');
			body.classList.add('light');
			}
	} 

	// use the action when the toggle is clicked
	toggle.addEventListener('click', toggleStyles);

	//adds click listener to body
	body.addEventListener( 'click', function(event) {

		//if there's click on the toggle button
		if ( event.target.matches('[rel="toggle"]') ) {
				body.classList.toggle('menu-open');
		}

	});

	/* 
	this style of setting the even in a larger scope 
	and then based on what is clicked -
		is called "event delegation"
	*/

</script>

</body>
</html>

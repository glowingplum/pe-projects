
			<!-- STUFF -->
		</main>


		<footer class='site-footer'>
		<inner-column>

			<!-- no headers in footers allowed? -->
			<div class='what-to-call-it-then'>
				<h2 class='attention-voice'>This is the site footer and it has a "site-map" module in it.</h2>

				<p>Pretty standard type of thing, right?</p>
			</div>

			<?php include('modules/site-map.php'); ?>

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
				   body.classList.remove('car');
				   body.classList.add('coffee');
				 } else {
				   //alert('not');
				   body.classList.remove('coffee');
				   body.classList.add('car');
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